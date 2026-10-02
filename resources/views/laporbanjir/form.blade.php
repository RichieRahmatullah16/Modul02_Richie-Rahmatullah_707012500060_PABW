@extends('laporbanjir.layout')

@section('title', 'Form Laporan Banjir')

@section('content')
    <div class="page-header">
        <h1><i class="fas fa-edit"></i> Form Laporan Banjir</h1>
        <p>Isi data berikut untuk melaporkan kejadian banjir di wilayah Anda</p>
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
            {{-- Form Utama --}}
            <div class="card fade-in">
                <h3 style="margin-bottom: 1.5rem; color: #1e40af;">
                    <i class="fas fa-clipboard-list"></i> Data Laporan
                </h3>

                <form action="{{ route('lapor.submit') }}" method="POST" id="form-laporan">
                    @csrf

                    <div class="form-group">
                        <label for="nama_pelapor">
                            <i class="fas fa-user"></i> Nama Pelapor
                        </label>
                        <input type="text" name="nama_pelapor" id="nama_pelapor"
                               value="{{ old('nama_pelapor') }}"
                               placeholder="Masukkan nama lengkap Anda"
                               required>
                        <div class="hint">Minimal 3 karakter</div>
                    </div>

                    <div class="form-group">
                        <label for="lokasi_kecamatan">
                            <i class="fas fa-map-marker-alt"></i> Kecamatan
                        </label>
                        <select name="lokasi_kecamatan" id="lokasi_kecamatan" required>
                            <option value="">-- Pilih Kecamatan --</option>
                            <option value="Baleendah" {{ old('lokasi_kecamatan') == 'Baleendah' ? 'selected' : '' }}>Baleendah</option>
                            <option value="Bojongsoang" {{ old('lokasi_kecamatan') == 'Bojongsoang' ? 'selected' : '' }}>Bojongsoang</option>
                            <option value="Dayeuhkolot" {{ old('lokasi_kecamatan') == 'Dayeuhkolot' ? 'selected' : '' }}>Dayeuhkolot</option>
                            <option value="Margahayu" {{ old('lokasi_kecamatan') == 'Margahayu' ? 'selected' : '' }}>Margahayu</option>
                            <option value="Margaasih" {{ old('lokasi_kecamatan') == 'Margaasih' ? 'selected' : '' }}>Margaasih</option>
                            <option value="Katapang" {{ old('lokasi_kecamatan') == 'Katapang' ? 'selected' : '' }}>Katapang</option>
                            <option value="Soreang" {{ old('lokasi_kecamatan') == 'Soreang' ? 'selected' : '' }}>Soreang</option>
                            <option value="Kutawaringin" {{ old('lokasi_kecamatan') == 'Kutawaringin' ? 'selected' : '' }}>Kutawaringin</option>
                            <option value="Majalaya" {{ old('lokasi_kecamatan') == 'Majalaya' ? 'selected' : '' }}>Majalaya</option>
                            <option value="Ciparay" {{ old('lokasi_kecamatan') == 'Ciparay' ? 'selected' : '' }}>Ciparay</option>
                            <option value="Pacet" {{ old('lokasi_kecamatan') == 'Pacet' ? 'selected' : '' }}>Pacet</option>
                            <option value="Cicalengka" {{ old('lokasi_kecamatan') == 'Cicalengka' ? 'selected' : '' }}>Cicalengka</option>
                            <option value="Rancaekek" {{ old('lokasi_kecamatan') == 'Rancaekek' ? 'selected' : '' }}>Rancaekek</option>
                            <option value="Cileunyi" {{ old('lokasi_kecamatan') == 'Cileunyi' ? 'selected' : '' }}>Cileunyi</option>
                            <option value="Cilengkrang" {{ old('lokasi_kecamatan') == 'Cilengkrang' ? 'selected' : '' }}>Cilengkrang</option>
                        </select>
                        <div class="hint">Pilih kecamatan tempat kejadian banjir</div>
                    </div>

                    <div class="form-group">
                        <label for="lokasi_desa">
                            <i class="fas fa-home"></i> Desa / Kelurahan
                        </label>
                        <input type="text" name="lokasi_desa" id="lokasi_desa"
                               value="{{ old('lokasi_desa') }}"
                               placeholder="Masukkan nama desa atau kelurahan"
                               required>
                        <div class="hint">Nama desa/kelurahan tempat kejadian</div>
                    </div>

                    <div class="form-group">
                        <label for="tinggi_genangan">
                            <i class="fas fa-ruler-vertical"></i> Tinggi Genangan Air (cm)
                        </label>
                        <input type="number" name="tinggi_genangan" id="tinggi_genangan"
                               value="{{ old('tinggi_genangan') }}"
                               placeholder="Contoh: 50"
                               min="0" step="1"
                               required>
                        <div class="hint">Perkiraan tinggi genangan air dalam satuan sentimeter</div>
                        <div id="tinggi-indicator"></div>
                    </div>

                    <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                        <button type="submit" class="btn btn-primary btn-lg" style="flex: 1;">
                            <i class="fas fa-paper-plane"></i> Kirim Laporan
                        </button>
                        <button type="reset" class="btn btn-secondary" style="flex: 0;">
                            <i class="fas fa-redo"></i> Reset
                        </button>
                    </div>
                </form>
            </div>

            {{-- Sidebar Info --}}
            <div>
                <div class="card fade-in" style="background: linear-gradient(135deg, #eff6ff, #dbeafe);">
                    <h3 style="color: #1e40af; margin-bottom: 1rem;">
                        <i class="fas fa-lightbulb"></i> Tips Pelaporan
                    </h3>
                    <ul style="color: #475569; line-height: 2; padding-left: 1.2rem;">
                        <li>Pastikan data yang dilaporkan <strong>akurat</strong></li>
                        <li>Ukur tinggi genangan dari permukaan jalan</li>
                        <li>Laporkan sesegera mungkin setelah banjir terjadi</li>
                        <li>Sertakan nama desa/kelurahan yang tepat</li>
                    </ul>
                </div>

                <div class="card fade-in">
                    <h3 style="color: #1e293b; margin-bottom: 1rem;">
                        <i class="fas fa-ruler-vertical"></i> Tingkat Genangan
                    </h3>
                    <div class="tinggi-indicator">
                        <div class="tinggi-level rendah">
                            <div style="font-size: 1.2rem;">💧</div>
                            0-30 cm<br><strong>Rendah</strong>
                        </div>
                        <div class="tinggi-level sedang">
                            <div style="font-size: 1.2rem;">🌊</div>
                            31-70 cm<br><strong>Sedang</strong>
                        </div>
                        <div class="tinggi-level tinggi">
                            <div style="font-size: 1.2rem;">🌊🌊</div>
                            > 70 cm<br><strong>Tinggi</strong>
                        </div>
                    </div>
                </div>

                <div class="card fade-in" style="text-align: center;">
                    <p style="color: #475569; margin-bottom: 0.5rem;">
                        <i class="fas fa-phone-alt"></i> Darurat? Hubungi:
                    </p>
                    <div style="font-size: 1.5rem; font-weight: 800; color: #ef4444;">
                        112 / 119
                    </div>
                    <p style="color: #94a3b8; font-size: 0.85rem; margin-top: 0.5rem;">
                        Pusat Panggilan Darurat Nasional
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
