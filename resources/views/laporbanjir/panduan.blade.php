@extends('laporbanjir.layout')

@section('title', 'Panduan Pelaporan')

@section('content')
    <div class="page-header">
        <h1><i class="fas fa-book"></i> Panduan Pelaporan Banjir</h1>
        <p>Ikuti langkah-langkah berikut untuk melaporkan kejadian banjir</p>
    </div>

    <div class="container">
        {{-- Langkah-Langkah --}}
        <div class="card fade-in">
            <h3 style="color: #1e40af; margin-bottom: 2rem;">
                <i class="fas fa-list-ol"></i> Langkah-Langkah Pelaporan
            </h3>

            <div class="steps">
                <div class="step">
                    <h4>Buka Halaman Form Pelaporan</h4>
                    <p>Klik tombol <strong>"Lapor Banjir"</strong> di menu navigasi atau tombol
                    <strong>"Lapor Sekarang"</strong> di halaman beranda untuk mengakses form pelaporan.</p>
                </div>

                <div class="step">
                    <h4>Isi Nama Pelapor</h4>
                    <p>Masukkan nama lengkap Anda sebagai pelapor. Nama ini digunakan untuk identifikasi laporan.
                    Minimal 3 karakter.</p>
                </div>

                <div class="step">
                    <h4>Pilih Lokasi Kejadian</h4>
                    <p>Pilih <strong>kecamatan</strong> dari daftar yang tersedia dan ketik nama
                    <strong>desa/kelurahan</strong> tempat kejadian banjir secara akurat.</p>
                </div>

                <div class="step">
                    <h4>Masukkan Tinggi Genangan Air</h4>
                    <p>Perkirakan tinggi genangan air dalam satuan <strong>sentimeter (cm)</strong>.
                    Ukur dari permukaan jalan ke permukaan air. Sistem akan menampilkan
                    indikator tingkat genangan (Rendah/Sedang/Tinggi).</p>
                </div>

                <div class="step">
                    <h4>Kirim Laporan</h4>
                    <p>Klik tombol <strong>"Kirim Laporan"</strong> untuk mengirimkan data.
                    Anda akan diminta konfirmasi sebelum laporan terkirim.</p>
                </div>

                <div class="step">
                    <h4>Terima Konfirmasi</h4>
                    <p>Setelah berhasil, Anda akan melihat halaman konfirmasi berisi
                    <strong>nomor laporan</strong> dan ringkasan data yang telah dikirim.
                    Anda dapat mencetak konfirmasi ini sebagai bukti pelaporan.</p>
                </div>
            </div>
        </div>

        {{-- Tingkat Genangan --}}
        <div class="card fade-in">
            <h3 style="color: #1e40af; margin-bottom: 1rem;">
                <i class="fas fa-ruler-vertical"></i> Klasifikasi Tinggi Genangan
            </h3>
            <p style="color: #475569; margin-bottom: 1.5rem;">
                Berikut adalah klasifikasi tingkat genangan air berdasarkan tinggi permukaan air:
            </p>
            <div class="grid-3">
                <div class="card fade-in" style="background: #d1fae5; box-shadow: none; text-align: center;">
                    <div style="font-size: 2rem;">💧</div>
                    <h4 style="color: #065f46;">Rendah</h4>
                    <p style="color: #065f46; font-weight: 600;">0 - 30 cm</p>
                    <p style="color: #047857; font-size: 0.85rem;">
                        Genangan setinggi mata kaki. Masih bisa dilalui pejalan kaki dengan hati-hati.
                    </p>
                </div>
                <div class="card fade-in" style="background: #fef3c7; box-shadow: none; text-align: center;">
                    <div style="font-size: 2rem;">🌊</div>
                    <h4 style="color: #92400e;">Sedang</h4>
                    <p style="color: #92400e; font-weight: 600;">31 - 70 cm</p>
                    <p style="color: #b45309; font-size: 0.85rem;">
                        Genangan setinggi lutut. Kendaraan roda dua sulit melintas. Waspada arus air.
                    </p>
                </div>
                <div class="card fade-in" style="background: #fee2e2; box-shadow: none; text-align: center;">
                    <div style="font-size: 2rem;">🌊🌊</div>
                    <h4 style="color: #991b1b;">Tinggi</h4>
                    <p style="color: #991b1b; font-weight: 600;">&gt; 70 cm</p>
                    <p style="color: #dc2626; font-size: 0.85rem;">
                        Genangan di atas pinggang. Sangat berbahaya. Segera evakuasi ke tempat tinggi!
                    </p>
                </div>
            </div>
        </div>

        {{-- FAQ --}}
        <div class="card fade-in">
            <h3 style="color: #1e40af; margin-bottom: 1.5rem;">
                <i class="fas fa-question-circle"></i> Pertanyaan Umum (FAQ)
            </h3>

            <div style="margin-bottom: 1.5rem;">
                <h4 style="color: #1e293b;">Apakah saya harus login untuk melapor?</h4>
                <p style="color: #475569;">Tidak. Sistem ini tidak memerlukan login atau registrasi. Siapa saja
                dapat langsung mengisi form dan mengirim laporan.</p>
            </div>

            <div style="margin-bottom: 1.5rem;">
                <h4 style="color: #1e293b;">Apakah data laporan saya disimpan?</h4>
                <p style="color: #475569;">Pada versi prototipe ini, data tidak disimpan secara permanen.
                Data hanya diproses sementara dan ditampilkan sebagai konfirmasi.</p>
            </div>

            <div style="margin-bottom: 1.5rem;">
                <h4 style="color: #1e293b;">Bagaimana cara mengukur tinggi genangan?</h4>
                <p style="color: #475569;">Ukur perkiraan tinggi air dari permukaan jalan normal ke permukaan air banjir.
                Anda bisa memperkirakan berdasarkan tinggi badan (mata kaki ≈ 15 cm, lutut ≈ 50 cm, pinggang ≈ 80 cm).</p>
            </div>

            <div>
                <h4 style="color: #1e293b;">Siapa yang akan merespons laporan saya?</h4>
                <p style="color: #475569;">Pada implementasi penuh, laporan akan diterima dan ditindaklanjuti oleh
                tim BPBD Kabupaten Bandung untuk penanganan bencana banjir.</p>
            </div>
        </div>

        {{-- CTA --}}
        <div style="text-align: center; margin-top: 2rem;">
            <a href="{{ route('lapor.form') }}" class="btn btn-primary btn-lg">
                <i class="fas fa-edit"></i> Mulai Lapor Banjir
            </a>
        </div>
    </div>
@endsection
