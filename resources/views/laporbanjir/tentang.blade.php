@extends('laporbanjir.layout')

@section('title', 'Tentang LaporBanjir')

@section('content')
    <div class="page-header">
        <h1><i class="fas fa-info-circle"></i> Tentang LaporBanjir</h1>
        <p>Mengenal lebih dekat sistem pelaporan banjir BPBD Kabupaten Bandung</p>
    </div>

    <div class="container">
        {{-- Tentang Sistem --}}
        <div class="card fade-in">
            <h3 style="color: #1e40af; margin-bottom: 1rem;">
                <i class="fas fa-water"></i> Apa itu LaporBanjir?
            </h3>
            <p>
                <strong>LaporBanjir</strong> adalah sistem pelaporan banjir sederhana yang dikembangkan oleh
                <strong>Badan Penanggulangan Bencana Daerah (BPBD) Kabupaten Bandung</strong> sebagai prototipe awal
                untuk memudahkan warga dalam melaporkan kejadian banjir di wilayahnya secara cepat dan efisien.
            </p>
            <p style="margin-top: 1rem;">
                Sistem ini memungkinkan warga untuk mengisi form pelaporan yang memuat nama pelapor,
                lokasi kejadian (kecamatan dan desa), serta tinggi genangan air. Sebagai prototipe,
                sistem ini tidak menggunakan database sehingga data hanya diproses sementara
                dan ditampilkan sebagai konfirmasi laporan.
            </p>
        </div>

        {{-- Tujuan --}}
        <div class="card fade-in">
            <h3 style="color: #1e40af; margin-bottom: 1rem;">
                <i class="fas fa-bullseye"></i> Tujuan Sistem
            </h3>
            <div class="grid-2">
                <div>
                    <div class="card fade-in" style="background: #f0f9ff; box-shadow: none;">
                        <div class="card-icon blue">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h4>Respons Cepat</h4>
                        <p>Mempercepat pelaporan kejadian banjir dari warga ke BPBD agar penanganan lebih sigap.</p>
                    </div>
                </div>
                <div>
                    <div class="card fade-in" style="background: #f0f9ff; box-shadow: none;">
                        <div class="card-icon cyan">
                            <i class="fas fa-database"></i>
                        </div>
                        <h4>Pengumpulan Data</h4>
                        <p>Mengumpulkan informasi lokasi dan tingkat genangan untuk pemetaan daerah rawan banjir.</p>
                    </div>
                </div>
                <div>
                    <div class="card fade-in" style="background: #f0f9ff; box-shadow: none;">
                        <div class="card-icon green">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Partisipasi Warga</h4>
                        <p>Meningkatkan partisipasi masyarakat dalam penanggulangan bencana banjir.</p>
                    </div>
                </div>
                <div>
                    <div class="card fade-in" style="background: #f0f9ff; box-shadow: none;">
                        <div class="card-icon amber">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Analisis Bencana</h4>
                        <p>Menyediakan data awal untuk analisis pola banjir dan mitigasi bencana.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Teknologi --}}
        <div class="card fade-in">
            <h3 style="color: #1e40af; margin-bottom: 1rem;">
                <i class="fas fa-code"></i> Teknologi yang Digunakan
            </h3>
            <div class="grid-3">
                <div style="text-align: center; padding: 1rem;">
                    <div style="font-size: 2.5rem; color: #ef4444; margin-bottom: 0.5rem;">
                        <i class="fab fa-laravel"></i>
                    </div>
                    <strong>Laravel</strong>
                    <p style="font-size: 0.85rem; color: #475569;">PHP Framework</p>
                </div>
                <div style="text-align: center; padding: 1rem;">
                    <div style="font-size: 2.5rem; color: #3b82f6; margin-bottom: 0.5rem;">
                        <i class="fab fa-css3-alt"></i>
                    </div>
                    <strong>CSS3</strong>
                    <p style="font-size: 0.85rem; color: #475569;">Styling & Layout</p>
                </div>
                <div style="text-align: center; padding: 1rem;">
                    <div style="font-size: 2.5rem; color: #f59e0b; margin-bottom: 0.5rem;">
                        <i class="fab fa-js-square"></i>
                    </div>
                    <strong>JavaScript</strong>
                    <p style="font-size: 0.85rem; color: #475569;">Interaktivitas</p>
                </div>
            </div>
        </div>

        {{-- BPBD Info --}}
        <div class="card fade-in" style="background: linear-gradient(135deg, #eff6ff, #dbeafe);">
            <div style="text-align: center;">
                <h3 style="color: #1e40af; margin-bottom: 1rem;">
                    <i class="fas fa-building"></i> BPBD Kabupaten Bandung
                </h3>
                <p style="color: #475569;">
                    Badan Penanggulangan Bencana Daerah (BPBD) Kabupaten Bandung bertanggung jawab dalam
                    koordinasi penanggulangan bencana di wilayah Kabupaten Bandung, Jawa Barat.
                </p>
            </div>
        </div>
    </div>
@endsection
