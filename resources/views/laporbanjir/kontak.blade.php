@extends('laporbanjir.layout')

@section('title', 'Kontak')

@section('content')
    <div class="page-header">
        <h1><i class="fas fa-envelope"></i> Hubungi Kami</h1>
        <p>Informasi kontak BPBD Kabupaten Bandung</p>
    </div>

    <div class="container">
        <div class="grid-2">
            {{-- Informasi Kontak --}}
            <div>
                <div class="card fade-in">
                    <h3 style="color: #1e40af; margin-bottom: 1.5rem;">
                        <i class="fas fa-building"></i> BPBD Kabupaten Bandung
                    </h3>

                    <div style="margin-bottom: 1.5rem;">
                        <div style="display: flex; gap: 1rem; align-items: flex-start; margin-bottom: 1.25rem;">
                            <div class="card-icon blue" style="min-width: 50px; width: 50px; height: 50px; margin-bottom: 0;">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 style="margin: 0 0 0.25rem; color: #1e293b;">Alamat</h4>
                                <p style="margin: 0; color: #475569;">
                                    Jl. Raya Soreang No. 141, Soreang,<br>
                                    Kabupaten Bandung, Jawa Barat 40911
                                </p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 1rem; align-items: flex-start; margin-bottom: 1.25rem;">
                            <div class="card-icon green" style="min-width: 50px; width: 50px; height: 50px; margin-bottom: 0;">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h4 style="margin: 0 0 0.25rem; color: #1e293b;">Telepon</h4>
                                <p style="margin: 0; color: #475569;">
                                    (022) 5891254<br>
                                    Hotline: 112 / 119
                                </p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 1rem; align-items: flex-start; margin-bottom: 1.25rem;">
                            <div class="card-icon cyan" style="min-width: 50px; width: 50px; height: 50px; margin-bottom: 0;">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 style="margin: 0 0 0.25rem; color: #1e293b;">Email</h4>
                                <p style="margin: 0; color: #475569;">
                                    bpbd@bandungkab.go.id
                                </p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div class="card-icon amber" style="min-width: 50px; width: 50px; height: 50px; margin-bottom: 0;">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4 style="margin: 0 0 0.25rem; color: #1e293b;">Jam Operasional</h4>
                                <p style="margin: 0; color: #475569;">
                                    Senin - Jumat: 08.00 - 16.00 WIB<br>
                                    <span style="color: #ef4444; font-weight: 600;">Darurat: 24 Jam</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Form Kontak & CTA --}}
            <div>
                <div class="card fade-in" style="background: linear-gradient(135deg, #eff6ff, #dbeafe);">
                    <h3 style="color: #1e40af; margin-bottom: 1rem;">
                        <i class="fas fa-paper-plane"></i> Kirim Pesan
                    </h3>
                    <p style="color: #475569; margin-bottom: 1.5rem;">
                        Ada pertanyaan atau masukan tentang sistem LaporBanjir? Kirim pesan kepada kami.
                    </p>
                    <a href="{{ route('kontak.form') }}" class="btn btn-primary btn-block">
                        <i class="fas fa-edit"></i> Buka Form Kontak
                    </a>
                </div>

                <div class="card fade-in" style="text-align: center;">
                    <h3 style="color: #ef4444; margin-bottom: 0.5rem;">
                        <i class="fas fa-exclamation-triangle"></i> Keadaan Darurat?
                    </h3>
                    <p style="color: #475569; margin-bottom: 1rem;">
                        Jika Anda dalam kondisi darurat banjir, segera hubungi:
                    </p>
                    <div style="font-size: 2rem; font-weight: 800; color: #ef4444; margin-bottom: 0.5rem;">
                        112 / 119
                    </div>
                    <p style="color: #94a3b8; font-size: 0.85rem;">
                        Pusat Panggilan Darurat Nasional (24 Jam)
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
