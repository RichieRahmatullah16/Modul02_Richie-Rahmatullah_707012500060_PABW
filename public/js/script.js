/**
 * LaporBanjir - Sistem Pelaporan Banjir BPBD Kabupaten Bandung
 * File: public/js/script.js
 */

document.addEventListener('DOMContentLoaded', function () {
    'use strict';

    // =========================================================================
    // 1. MOBILE HAMBURGER MENU TOGGLE
    // =========================================================================
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.navbar-menu');

    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function () {
            navMenu.classList.toggle('active');
        });

        // Menutup menu saat link diklik
        navMenu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                navMenu.classList.remove('active');
            });
        });
    }

    // =========================================================================
    // 2. VALIDASI FORM REAL-TIME
    // =========================================================================
    const inputNama = document.getElementById('nama_pelapor');
    const inputKecamatan = document.getElementById('lokasi_kecamatan');
    const inputDesa = document.getElementById('lokasi_desa');
    const inputTinggi = document.getElementById('tinggi_genangan');
    const formLaporan = document.getElementById('form-laporan');

    // Fungsi tampilkan error
    function showError(field, message) {
        if (!field) return;
        field.style.borderColor = '#ef4444';
        let errorDiv = field.parentElement.querySelector('.field-error');
        if (!errorDiv) {
            errorDiv = document.createElement('div');
            errorDiv.className = 'field-error error';
            field.parentElement.appendChild(errorDiv);
        }
        errorDiv.textContent = message;
        errorDiv.style.display = 'block';
    }

    // Fungsi hapus error
    function removeError(field) {
        if (!field) return;
        field.style.borderColor = '#10b981';
        const errorDiv = field.parentElement.querySelector('.field-error');
        if (errorDiv) {
            errorDiv.style.display = 'none';
        }
    }

    // Validasi nama pelapor
    function validateNama() {
        if (!inputNama) return true;
        const val = inputNama.value.trim();
        if (val === '') {
            showError(inputNama, 'Nama pelapor wajib diisi.');
            return false;
        } else if (val.length < 3) {
            showError(inputNama, 'Nama pelapor minimal 3 karakter.');
            return false;
        }
        removeError(inputNama);
        return true;
    }

    // Validasi kecamatan
    function validateKecamatan() {
        if (!inputKecamatan) return true;
        if (inputKecamatan.value === '') {
            showError(inputKecamatan, 'Kecamatan wajib dipilih.');
            return false;
        }
        removeError(inputKecamatan);
        return true;
    }

    // Validasi desa
    function validateDesa() {
        if (!inputDesa) return true;
        if (inputDesa.value.trim() === '') {
            showError(inputDesa, 'Desa/Kelurahan wajib diisi.');
            return false;
        }
        removeError(inputDesa);
        return true;
    }

    // Validasi tinggi genangan
    function validateTinggi() {
        if (!inputTinggi) return true;
        const val = inputTinggi.value.trim();
        if (val === '') {
            showError(inputTinggi, 'Tinggi genangan wajib diisi.');
            return false;
        }
        if (isNaN(Number(val))) {
            showError(inputTinggi, 'Tinggi genangan harus berupa angka.');
            return false;
        }
        if (Number(val) < 0) {
            showError(inputTinggi, 'Tinggi genangan tidak boleh negatif.');
            return false;
        }
        removeError(inputTinggi);
        return true;
    }

    // Pasang event listener blur untuk validasi real-time
    if (inputNama) {
        inputNama.addEventListener('blur', validateNama);
        inputNama.addEventListener('input', function () { if (this.style.borderColor === 'rgb(239, 68, 68)') validateNama(); });
    }
    if (inputKecamatan) {
        inputKecamatan.addEventListener('blur', validateKecamatan);
        inputKecamatan.addEventListener('change', validateKecamatan);
    }
    if (inputDesa) {
        inputDesa.addEventListener('blur', validateDesa);
        inputDesa.addEventListener('input', function () { if (this.style.borderColor === 'rgb(239, 68, 68)') validateDesa(); });
    }
    if (inputTinggi) {
        inputTinggi.addEventListener('blur', validateTinggi);
        inputTinggi.addEventListener('input', function () { if (this.style.borderColor === 'rgb(239, 68, 68)') validateTinggi(); });
    }

    // =========================================================================
    // 3. INDIKATOR TINGGI GENANGAN REAL-TIME
    // =========================================================================
    const tinggiIndicator = document.getElementById('tinggi-indicator');

    function updateTinggiIndicator(value) {
        if (!tinggiIndicator) return;
        const val = String(value).trim();

        if (val === '' || isNaN(Number(val)) || Number(val) < 0) {
            tinggiIndicator.innerHTML = '';
            tinggiIndicator.style.display = 'none';
            return;
        }

        const tinggi = parseFloat(val);
        let label, bgColor, icon;

        if (tinggi <= 30) {
            label = 'Rendah';
            bgColor = '#10b981';
            icon = '💧';
        } else if (tinggi <= 70) {
            label = 'Sedang';
            bgColor = '#f59e0b';
            icon = '🌊';
        } else {
            label = 'Tinggi';
            bgColor = '#ef4444';
            icon = '🌊🌊';
        }

        tinggiIndicator.style.display = 'inline-flex';
        tinggiIndicator.style.alignItems = 'center';
        tinggiIndicator.style.gap = '0.4rem';
        tinggiIndicator.style.backgroundColor = bgColor;
        tinggiIndicator.style.color = 'white';
        tinggiIndicator.style.padding = '0.4rem 0.85rem';
        tinggiIndicator.style.borderRadius = '50px';
        tinggiIndicator.style.fontSize = '0.85rem';
        tinggiIndicator.style.fontWeight = '600';
        tinggiIndicator.style.marginTop = '0.5rem';
        tinggiIndicator.style.transition = 'all 0.3s ease';

        tinggiIndicator.innerHTML = icon + ' Status: <strong>' + label + '</strong> (' + tinggi + ' cm)';
    }

    if (inputTinggi) {
        inputTinggi.addEventListener('input', function () {
            updateTinggiIndicator(this.value);
        });
        if (inputTinggi.value) {
            updateTinggiIndicator(inputTinggi.value);
        }
    }

    // =========================================================================
    // 4. KONFIRMASI SEBELUM SUBMIT
    // =========================================================================
    if (formLaporan) {
        formLaporan.addEventListener('submit', function (e) {
            // Validasi semua field
            const v1 = validateNama();
            const v2 = validateKecamatan();
            const v3 = validateDesa();
            const v4 = validateTinggi();

            if (!(v1 && v2 && v3 && v4)) {
                e.preventDefault();
                return;
            }

            // Dialog konfirmasi
            if (!window.confirm('Apakah Anda yakin ingin mengirim laporan banjir ini?')) {
                e.preventDefault();
            }
        });
    }

    // =========================================================================
    // 5. SMOOTH SCROLL UNTUK ANCHOR LINKS
    // =========================================================================
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId && targetId !== '#' && targetId.length > 1) {
                const target = document.querySelector(targetId);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }
        });
    });

    // =========================================================================
    // 6. AUTO-HIDE ALERTS SETELAH 5 DETIK
    // =========================================================================
    document.querySelectorAll('.alert').forEach(function (alert) {
        setTimeout(function () {
            alert.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            alert.style.opacity = '0';
            alert.style.transform = 'translateY(-10px)';
            setTimeout(function () {
                alert.style.display = 'none';
            }, 600);
        }, 5000);
    });

    // =========================================================================
    // 7. TOMBOL CETAK
    // =========================================================================
    document.querySelectorAll('.btn-print').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            window.print();
        });
    });

    // =========================================================================
    // 8. TAMPILAN WAKTU SAAT INI (FORMAT INDONESIA)
    // =========================================================================
    const datetimeEl = document.getElementById('current-datetime');
    if (datetimeEl) {
        function updateDateTime() {
            const now = new Date();
            const hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                          'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

            const h = hari[now.getDay()];
            const tgl = String(now.getDate()).padStart(2, '0');
            const bln = bulan[now.getMonth()];
            const thn = now.getFullYear();
            const jam = String(now.getHours()).padStart(2, '0');
            const mnt = String(now.getMinutes()).padStart(2, '0');
            const dtk = String(now.getSeconds()).padStart(2, '0');

            datetimeEl.textContent = h + ', ' + tgl + ' ' + bln + ' ' + thn + ' - ' + jam + ':' + mnt + ':' + dtk + ' WIB';
        }
        updateDateTime();
        setInterval(updateDateTime, 1000);
    }
});
