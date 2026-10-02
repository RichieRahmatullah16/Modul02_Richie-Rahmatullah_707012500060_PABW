@extends('laporbanjir.layout')

@section('title', 'Form Kontak')

@section('content')
    <div class="page-header">
        <h1><i class="fas fa-paper-plane"></i> Form Kontak</h1>
        <p>Kirimkan pertanyaan atau masukan Anda kepada kami</p>
    </div>

    <div class="container">
        {{-- Alert Error Validasi --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong><i class="fas fa-exclamation-triangle"></i> Terdapat kesalahan:</strong>
                <ul style="margin: 0.5rem 0 0 1.5rem; padding: 0;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="grid-2">
            <div class="card fade-in">
                <h3 style="color: #1e40af; margin-bottom: 1.5rem;">
                    <i class="fas fa-edit"></i> Tulis Pesan
                </h3>

                <form action="{{ route('kontak.submit') }}" method="POST" id="form-kontak">
                    @csrf

                    <div class="form-group">
                        <label for="nama">
                            <i class="fas fa-user"></i> Nama Lengkap
                        </label>
                        <input type="text" name="nama" id="nama"
                               value="{{ old('nama') }}"
                               placeholder="Masukkan nama lengkap Anda"
                               required>
                    </div>

                    <div class="form-group">
                        <label for="email">
                            <i class="fas fa-envelope"></i> Email
                        </label>
                        <input type="email" name="email" id="email"
                               value="{{ old('email') }}"
                               placeholder="contoh@email.com"
                               required>
                        <div class="hint">Email untuk balasan dari kami</div>
                    </div>

                    <div class="form-group">
                        <label for="pesan">
                            <i class="fas fa-comment-alt"></i> Pesan
                        </label>
                        <textarea name="pesan" id="pesan" rows="6"
                                  placeholder="Tulis pertanyaan atau masukan Anda di sini..."
                                  required>{{ old('pesan') }}</textarea>
                    </div>

                    <div style="display: flex; gap: 1rem; margin-top: 1.5rem;">
                        <button type="submit" class="btn btn-primary btn-lg" style="flex: 1;">
                            <i class="fas fa-paper-plane"></i> Kirim Pesan
                        </button>
                        <a href="{{ route('kontak') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </form>
            </div>

            <div>
                <div class="card fade-in" style="background: linear-gradient(135deg, #eff6ff, #dbeafe);">
                    <h3 style="color: #1e40af; margin-bottom: 1rem;">
                        <i class="fas fa-info-circle"></i> Informasi
                    </h3>
                    <p style="color: #475569;">
                        Pesan yang Anda kirim melalui form ini akan diproses oleh sistem sebagai prototipe.
                        Pada implementasi penuh, pesan akan dikirimkan ke email resmi BPBD Kabupaten Bandung.
                    </p>
                </div>

                <div class="card fade-in">
                    <h3 style="color: #1e293b; margin-bottom: 1rem;">
                        <i class="fas fa-phone-alt"></i> Kontak Langsung
                    </h3>
                    <p style="color: #475569;">
                        <strong>Telepon:</strong> (022) 5891254<br>
                        <strong>Email:</strong> bpbd@bandungkab.go.id<br>
                        <strong>Darurat:</strong> 112 / 119
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
