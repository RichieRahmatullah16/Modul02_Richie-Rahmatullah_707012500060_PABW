<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="LaporBanjir - Sistem Pelaporan Banjir BPBD Kabupaten Bandung">
    <title>@yield('title', 'LaporBanjir') - BPBD Kabupaten Bandung</title>

    {{-- CSS Eksternal --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Font Awesome Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    @yield('styles')
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar">
        <a href="{{ route('home') }}" class="navbar-brand">
            <i class="fas fa-water"></i> LaporBanjir
        </a>

        <button class="hamburger" aria-label="Toggle menu">
            <i class="fas fa-bars"></i>
        </button>

        <ul class="navbar-menu">
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                <i class="fas fa-home"></i> Beranda
            </a></li>
            <li><a href="{{ route('lapor.form') }}" class="{{ request()->routeIs('lapor.*') ? 'active' : '' }}">
                <i class="fas fa-edit"></i> Lapor Banjir
            </a></li>
            <li><a href="{{ route('panduan') }}" class="{{ request()->routeIs('panduan') ? 'active' : '' }}">
                <i class="fas fa-book"></i> Panduan
            </a></li>
            <li><a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'active' : '' }}">
                <i class="fas fa-info-circle"></i> Tentang
            </a></li>
            <li><a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak*') ? 'active' : '' }}">
                <i class="fas fa-envelope"></i> Kontak
            </a></li>
        </ul>
    </nav>

    {{-- Konten Utama --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="footer">
        <div class="footer-content">
            <p><strong><i class="fas fa-water"></i> LaporBanjir</strong></p>
            <p>Sistem Pelaporan Banjir &mdash; BPBD Kabupaten Bandung</p>
            <p style="margin-top: 1rem; font-size: 0.85rem; opacity: 0.7;">
                &copy; {{ date('Y') }} BPBD Kabupaten Bandung. Prototipe Sistem Informasi.
            </p>
        </div>
    </footer>

    {{-- JavaScript Eksternal --}}
    <script src="{{ asset('js/script.js') }}"></script>

    @yield('scripts')
</body>
</html>
