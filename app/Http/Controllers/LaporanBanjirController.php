<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanBanjirController extends Controller
{
    /**
     * Menampilkan halaman utama / landing page LaporBanjir.
     */
    public function index()
    {
        return view('laporbanjir.index');
    }

    /**
     * Menampilkan form pelaporan banjir.
     */
    public function formLaporan()
    {
        return view('laporbanjir.form');
    }

    /**
     * Memvalidasi dan memproses pengiriman form pelaporan banjir.
     */
    public function submitLaporan(Request $request)
    {
        $validated = $request->validate([
            'nama_pelapor'     => 'required|string|max:255',
            'lokasi_kecamatan' => 'required|string|max:255',
            'lokasi_desa'      => 'required|string|max:255',
            'tinggi_genangan'  => 'required|numeric|min:0',
        ], [
            'nama_pelapor.required'     => 'Nama pelapor wajib diisi.',
            'lokasi_kecamatan.required' => 'Lokasi kecamatan wajib dipilih.',
            'lokasi_desa.required'      => 'Lokasi desa/kelurahan wajib diisi.',
            'tinggi_genangan.required'  => 'Tinggi genangan air wajib diisi.',
            'tinggi_genangan.numeric'   => 'Tinggi genangan air harus berupa angka numerik.',
            'tinggi_genangan.min'       => 'Tinggi genangan air minimal 0 cm.',
        ]);

        $nomorLaporan = 'LB-' . strtoupper(substr(md5((string) time()), 0, 8));
        $waktuLaporan = now()->format('d-m-Y H:i:s');

        return view('laporbanjir.konfirmasi', [
            'nama_pelapor'     => $validated['nama_pelapor'],
            'lokasi_kecamatan' => $validated['lokasi_kecamatan'],
            'lokasi_desa'      => $validated['lokasi_desa'],
            'tinggi_genangan'  => $validated['tinggi_genangan'],
            'nomor_laporan'    => $nomorLaporan,
            'nomorLaporan'     => $nomorLaporan,
            'waktu_laporan'    => $waktuLaporan,
            'waktuLaporan'     => $waktuLaporan,
            'timestamp'        => now(),
            'laporan'          => array_merge($validated, [
                'nomor_laporan' => $nomorLaporan,
                'waktu_laporan' => $waktuLaporan,
            ]),
        ]);
    }

    /**
     * Menampilkan halaman tentang sistem LaporBanjir dan BPBD.
     */
    public function tentang()
    {
        return view('laporbanjir.tentang');
    }

    /**
     * Menampilkan halaman panduan/bantuan pelaporan banjir.
     */
    public function panduan()
    {
        return view('laporbanjir.panduan');
    }

    /**
     * Menampilkan halaman kontak BPBD Kabupaten Bandung.
     */
    public function kontak()
    {
        return view('laporbanjir.kontak');
    }

    /**
     * Menampilkan form kontak pengaduan / pesan warga.
     */
    public function formKontak()
    {
        return view('laporbanjir.form-kontak');
    }

    /**
     * Memvalidasi dan memproses pengiriman form kontak.
     */
    public function submitKontak(Request $request)
    {
        $validated = $request->validate([
            'nama'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ], [
            'nama.required'  => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email'    => 'Format alamat email tidak valid.',
            'pesan.required' => 'Pesan wajib diisi.',
        ]);

        $waktuKirim = now()->format('d-m-Y H:i:s');

        return view('laporbanjir.konfirmasi-kontak', [
            'nama'        => $validated['nama'],
            'email'       => $validated['email'],
            'pesan'       => $validated['pesan'],
            'waktu_kirim' => $waktuKirim,
            'waktuKirim'  => $waktuKirim,
            'timestamp'   => now(),
            'kontak'      => array_merge($validated, [
                'waktu_kirim' => $waktuKirim,
            ]),
        ]);
    }
}
