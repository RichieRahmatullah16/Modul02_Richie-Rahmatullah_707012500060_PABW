@extends('laporbanjir.layout')

@section('title', 'Konfirmasi Pesan')

@section('content')
    <div class="page-header">
        <h1><i class="fas fa-check-circle" style="color: #10b981;"></i> Pesan Berhasil Dikirim!</h1>
        <p>Terima kasih telah menghubungi kami</p>
    </div>

    <div class="container">
        {{-- Konfirmasi Box --}}
        <div class="konfirmasi-box fade-in">
            <div class="icon-success">
                <i class="fas fa-check-circle"></i>
            </div>
            <h2>Pesan Diterima</h2>
            <p style="color: #065f46;">
                Pesan Anda telah berhasil dikirim. Terima kasih atas masukan Anda!
            </p>
        </div>

        {{-- Detail Pesan --}}
        <div class="card fade-in">
            <h3 style="color: #1e40af; margin-bottom: 1.5rem;">
                <i class="fas fa-file-alt"></i> Ringkasan Pesan
            </h3>

            <div class="konfirmasi-detail">
                <table>
                    <tr>
                        <th><i class="fas fa-user"></i> Nama</th>
                        <td>{{ $nama }}</td>
                    </tr>
                    <tr>
                        <th><i class="fas fa-envelope"></i> Email</th>
                        <td>{{ $email }}</td>
                    </tr>
                    <tr>
                        <th><i class="fas fa-comment-alt"></i> Pesan</th>
                        <td>{{ $pesan }}</td>
                    </tr>
                </table>
            </div>
        </div>

        {{-- Info --}}
        <div class="card fade-in" style="background: linear-gradient(135deg, #eff6ff, #dbeafe); text-align: center;">
            <p style="color: #475569;">
                <i class="fas fa-info-circle"></i>
                Ini adalah prototipe sistem. Pada implementasi penuh, pesan Anda akan dikirimkan ke email resmi BPBD.
            </p>
        </div>

        {{-- Tombol Aksi --}}
        <div style="display: flex; gap: 1rem; justify-content: center; margin-top: 2rem; flex-wrap: wrap;">
            <a href="{{ route('kontak') }}" class="btn btn-primary btn-lg">
                <i class="fas fa-envelope"></i> Kembali ke Kontak
            </a>
            <a href="{{ route('home') }}" class="btn btn-secondary btn-lg">
                <i class="fas fa-home"></i> Ke Beranda
            </a>
        </div>
    </div>
@endsection
