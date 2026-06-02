@php
    $homeUrl = route('home');
    $sectionPrefix = request()->routeIs('home') ? '' : $homeUrl;
@endphp
<header class="site-header">
    <div class="container header-inner">
        <nav class="site-nav" aria-label="Navigasi halaman">
            <a href="{{ $sectionPrefix }}#hero" data-lang-in="Beranda" data-lang-en="Home">Beranda</a>
            <a href="{{ $sectionPrefix }}#about" data-lang-in="Tentang" data-lang-en="About">Tentang</a>
            <a href="{{ $sectionPrefix }}#education" data-lang-in="Pendidikan" data-lang-en="Education">Pendidikan</a>
            <a href="{{ $sectionPrefix }}#experience" data-lang-in="Pengalaman" data-lang-en="Experience">Pengalaman</a>
            <a href="{{ $sectionPrefix }}#skills" data-lang-in="Kemampuan" data-lang-en="Skills">Kemampuan</a>
            <a href="{{ $sectionPrefix }}#gallery" data-lang-in="Galeri" data-lang-en="Gallery">Galeri</a>
            <a href="{{ $sectionPrefix }}#certifications" data-lang-in="Sertifikasi" data-lang-en="Certifications">Sertifikasi</a>
            <a href="{{ $sectionPrefix }}#contact" data-lang-in="Kontak" data-lang-en="Contact">Kontak</a>
        </nav>
        <div class="header-tools">
            <div class="lang-switch" aria-label="Language switcher">
                <button
                    type="button"
                    class="lang-switch-btn active"
                    data-lang-toggle="in"
                    aria-pressed="true"
                >IN</button>
                <button
                    type="button"
                    class="lang-switch-btn"
                    data-lang-toggle="en"
                    aria-pressed="false"
                >EN</button>
            </div>
            <div class="theme-switch">
                <button
                    type="button"
                    class="theme-switch-trigger"
                    aria-haspopup="true"
                    aria-expanded="false"
                    aria-label="Pilih mode tampilan"
                    data-aria-label-in="Pilih mode tampilan"
                    data-aria-label-en="Choose display mode"
                >
                    <svg class="theme-icon theme-icon-sun" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 4.75a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0V5.5a.75.75 0 0 1 .75-.75Zm0 11.5a4.25 4.25 0 1 0 0-8.5 4.25 4.25 0 0 0 0 8.5ZM5.5 11.25a.75.75 0 0 1 0 1.5H4a.75.75 0 0 1 0-1.5h1.5Zm14.5 0a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1 0-1.5H20ZM7.05 6.99a.75.75 0 0 1 1.06 0l1.06 1.06a.75.75 0 1 1-1.06 1.06L7.05 8.05a.75.75 0 0 1 0-1.06Zm8.78 8.78a.75.75 0 0 1 1.06 0l1.06 1.06a.75.75 0 1 1-1.06 1.06l-1.06-1.06a.75.75 0 0 1 0-1.06ZM16.89 6.99a.75.75 0 0 1 1.06 1.06l-1.06 1.06a.75.75 0 1 1-1.06-1.06l1.06-1.06ZM8.11 15.77a.75.75 0 0 1 1.06 1.06l-1.06 1.06a.75.75 0 1 1-1.06-1.06l1.06-1.06ZM12 17.25a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0V18a.75.75 0 0 1 .75-.75Z" />
                    </svg>
                    <svg class="theme-icon theme-icon-moon" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M14.72 3.79a.75.75 0 0 1 .14 1.03 7.18 7.18 0 0 0-1.34 4.18 7.25 7.25 0 0 0 7.25 7.25c.73 0 1.45-.11 2.14-.32a.75.75 0 0 1 .86.33.75.75 0 0 1-.08.91A9.98 9.98 0 1 1 14.46 3.7a.75.75 0 0 1 .26.09Z" />
                    </svg>
                </button>
                <div class="theme-switch-menu" hidden>
                    <button type="button" class="theme-option active" data-theme-value="light" data-lang-in="Mode Terang" data-lang-en="Light Mode">Mode Terang</button>
                    <button type="button" class="theme-option" data-theme-value="dark" data-lang-in="Mode Gelap" data-lang-en="Dark Mode">Mode Gelap</button>
                </div>
            </div>
        </div>
    </div>
</header>
