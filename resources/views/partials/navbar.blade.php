@php
    $homeUrl = route('home');
    $sectionPrefix = request()->routeIs('home') ? '' : $homeUrl;
@endphp
<header class="site-header">
    <div class="container header-inner">
        <a href="{{ request()->routeIs('home') ? '#hero' : $homeUrl }}" class="brand">Portofolio</a>
        <nav class="site-nav" aria-label="Navigasi halaman">
            <a href="{{ $sectionPrefix }}#hero">Beranda</a>
            <a href="{{ $sectionPrefix }}#about">Tentang</a>
            <a href="{{ $sectionPrefix }}#experience">Pengalaman</a>
            <a href="{{ $sectionPrefix }}#skills">Kemampuan</a>
            <a href="{{ $sectionPrefix }}#certifications">Sertifikasi</a>
            <a href="{{ $sectionPrefix }}#contact">Kontak</a>
        </nav>
    </div>
</header>
