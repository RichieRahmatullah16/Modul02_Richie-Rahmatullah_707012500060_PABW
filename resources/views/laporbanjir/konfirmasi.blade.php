@extends('laporbanjir.layout')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <div class="page-header">
        <h1><i class="fas fa-check-circle" style="color: #10b981;"></i> Laporan Berhasil Dikirim!</h1>
        <p>Terima kasih telah melaporkan kejadian banjir di wilayah Anda</p>
    </div>

    <div class="container">
        {{-- Konfirmasi Box --}}
        <div class="konfirmasi-box fade-in">
            <div class="icon-success">
                <i class="fas fa-check-circle"></i>
            </div>
            <h2>Laporan Diterima</h2>
            <p style="color: #065f46; margin-bottom: 1rem;">
                Laporan banjir Anda telah berhasil dikirim dan diterima oleh sistem.
            </p>
            <div class="no-laporan">{{ $nomor_laporan }}</div>
            <p style="color: #475569; font-size: 0.85rem; margin-top: 0.5rem;">Nomor Laporan Anda</p>
        </div>

        {{-- Detail Laporan --}}
        <div class="card fade-in">
            <h3 style="color: #1e40af; margin-bottom: 1.5rem;">
                <i class="fas fa-file-alt"></i> Detail Laporan
            </h3>

            <div class="konfirmasi-detail">
                <table>
                    <tr>
                        <th><i class="fas fa-hashtag"></i> No. Laporan</th>
                        <td><strong>{{ $nomor_laporan }}</strong></td>
                    </tr>
                    <tr>
                        <th><i class="fas fa-user"></i> Nama Pelapor</th>
                        <td>{{ $nama_pelapor }}</td>
                    </tr>
                    <tr>
                        <th><i class="fas fa-map-marker-alt"></i> Kecamatan</th>
                        <td>{{ $lokasi_kecamatan }}</td>
                    </tr>
                    <tr>
                        <th><i class="fas fa-home"></i> Desa / Kelurahan</th>
                        <td>{{ $lokasi_desa }}</td>
                    </tr>
                    <tr>
                        <th><i class="fas fa-ruler-vertical"></i> Tinggi Genangan</th>
                        <td>
                            <strong>{{ $tinggi_genangan }} cm</strong>
                            @if ($tinggi_genangan <= 30)
                                <span class="tinggi-level rendah" style="display: inline-block; padding: 0.25rem 0.75rem; margin-left: 0.5rem; font-size: 0.8rem;">
                                    Rendah
                                </span>
                            @elseif ($tinggi_genangan <= 70)
                                <span class="tinggi-level sedang" style="display: inline-block; padding: 0.25rem 0.75rem; margin-left: 0.5rem; font-size: 0.8rem;">
                                    Sedang
                                </span>
                            @else
                                <span class="tinggi-level tinggi" style="display: inline-block; padding: 0.25rem 0.75rem; margin-left: 0.5rem; font-size: 0.8rem;">
                                    Tinggi
                                </span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th><i class="fas fa-clock"></i> Waktu Laporan</th>
                        <td>{{ $waktu_laporan }}</td>
                    </tr>
                </table>
            </div>
        </div>

        {{-- Info Tambahan --}}
        <div class="card fade-in" style="background: linear-gradient(135deg, #eff6ff, #dbeafe);">
            <div style="text-align: center;">
                <h3 style="color: #1e40af; margin-bottom: 0.5rem;">
                    <i class="fas fa-info-circle"></i> Informasi Penting
                </h3>
                <p style="color: #475569;">
                    Ini adalah <strong>prototipe sistem</strong>. Data laporan tidak disimpan secara permanen di database.
                    Pada implementasi penuh, laporan Anda akan disimpan dan ditindaklanjuti oleh tim BPBD Kabupaten Bandung.
                </p>
            </div>
        </div>

        {{-- Tombol Aksi --}}
        <div style="display: flex; gap: 1rem; justify-content: center; margin-top: 2rem; flex-wrap: wrap;">
            <a href="{{ route('lapor.form') }}" class="btn btn-primary btn-lg">
                <i class="fas fa-plus-circle"></i> Buat Laporan Baru
            </a>
            <button class="btn btn-outline btn-lg btn-print" onclick="window.print()">
                <i class="fas fa-print"></i> Cetak Laporan
            </button>
            <a href="{{ route('home') }}" class="btn btn-secondary btn-lg">
                <i class="fas fa-home"></i> Ke Beranda
            </a>
        </div>
    </div>
@endsection
