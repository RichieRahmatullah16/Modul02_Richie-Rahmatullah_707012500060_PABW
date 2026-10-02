@extends('laporbanjir.layout')

@section('title', 'Beranda')

@section('content')
    {{-- Hero Section --}}
    <section class="hero-section">
        <h1 class="hero-title fade-in">🌊 LaporBanjir</h1>
        <p class="hero-subtitle fade-in">Sistem Pelaporan Banjir Cepat untuk Warga Kabupaten Bandung.<br>
            Laporkan kejadian banjir di wilayah Anda agar BPBD dapat segera merespons!</p>
        <a href="{{ route('lapor.form') }}" class="hero-btn fade-in">
            <i class="fas fa-edit"></i> Lapor Sekarang
        </a>
    </section>

    {{-- Fitur Section --}}
    <div class="container">
        <div class="page-header" style="padding-top: 2rem;">
            <h2 style="color: #1e40af; font-size: 1.8rem;">Mengapa Menggunakan LaporBanjir?</h2>
            <p>Sistem pelaporan banjir yang mudah, cepat, dan terpercaya</p>
        </div>

        <div class="grid-3">
            <div class="card fade-in">
                <div class="card-icon blue">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3>Cepat & Mudah</h3>
                <p>Isi form sederhana dalam hitungan detik. Tidak perlu registrasi atau login untuk melaporkan banjir.</p>
            </div>

            <div class="card fade-in">
                <div class="card-icon cyan">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Lokasi Akurat</h3>
                <p>Laporkan kejadian banjir berdasarkan kecamatan dan desa agar penanganan lebih tepat sasaran.</p>
            </div>

            <div class="card fade-in">
                <div class="card-icon green">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3>Konfirmasi Instan</h3>
                <p>Dapatkan nomor laporan dan konfirmasi langsung setelah mengirimkan laporan Anda.</p>
            </div>
        </div>

        {{-- Statistik Info --}}
        <div class="card fade-in" style="margin-top: 2rem; text-align: center; background: linear-gradient(135deg, #eff6ff, #dbeafe);">
            <h3 style="color: #1e40af; margin-bottom: 1rem;">
                <i class="fas fa-info-circle"></i> Informasi Sistem
            </h3>
            <div class="grid-3" style="gap: 1rem;">
                <div>
                    <div style="font-size: 2rem; font-weight: 800; color: #1a56db;">24/7</div>
                    <div style="color: #475569; font-size: 0.9rem;">Akses Pelaporan</div>
                </div>
                <div>
                    <div style="font-size: 2rem; font-weight: 800; color: #06b6d4;">Instan</div>
                    <div style="color: #475569; font-size: 0.9rem;">Konfirmasi Laporan</div>
                </div>
                <div>
                    <div style="font-size: 2rem; font-weight: 800; color: #10b981;">Gratis</div>
                    <div style="color: #475569; font-size: 0.9rem;">Tanpa Biaya</div>
                </div>
            </div>
        </div>

        {{-- Waktu Saat Ini --}}
        <div class="card fade-in" style="margin-top: 1.5rem; text-align: center;">
            <p style="color: #475569; margin-bottom: 0.5rem;">
                <i class="fas fa-clock"></i> Waktu Saat Ini
            </p>
            <div id="current-datetime" style="font-size: 1.3rem; font-weight: 700; color: #1a56db;"></div>
        </div>
    </div>
@endsection
