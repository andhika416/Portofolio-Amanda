@php
    $homeUrl = route('home');
    $sectionPrefix = request()->routeIs('home') ? '' : $homeUrl;
@endphp
<header class="site-header">
    <div class="container header-inner">
        <a href="{{ $homeUrl }}" class="brand" aria-label="Amanda Sasmi Hanifa">
            <span class="brand-mark">AS<span class="brand-mark-dot">.</span></span>
            <span class="brand-divider" aria-hidden="true"></span>
        </a>
        <nav class="site-nav" aria-label="Navigasi halaman">
            <span class="nav-active-indicator" aria-hidden="true"></span>
            <a href="{{ $sectionPrefix }}#hero">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 10.5 12 4l8 6.5V20a1 1 0 0 1-1 1h-4.5v-5.5h-5V21H5a1 1 0 0 1-1-1v-9.5Z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <span data-lang-in="Beranda" data-lang-en="Home">Beranda</span>
            </a>
            <a href="{{ $sectionPrefix }}#about">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 12a4 4 0 1 0-4-4 4 4 0 0 0 4 4Zm-7 8a7 7 0 0 1 14 0" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <span data-lang-in="Tentang" data-lang-en="About">Tentang</span>
            </a>
            <a href="{{ $sectionPrefix }}#education">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m3 9 9-5 9 5-9 5-9-5Zm3 2.5V15c0 1.6 2.7 3 6 3s6-1.4 6-3v-3.5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <span data-lang-in="Pendidikan" data-lang-en="Education">Pendidikan</span>
            </a>
            <a href="{{ $sectionPrefix }}#experience">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 7V5.5A1.5 1.5 0 0 1 9.5 4h5A1.5 1.5 0 0 1 16 5.5V7m-12 3h16m-13 0v7A1.5 1.5 0 0 0 8.5 20h7a1.5 1.5 0 0 0 1.5-1.5V10M4 7.5A1.5 1.5 0 0 1 5.5 6h13A1.5 1.5 0 0 1 20 7.5v9A1.5 1.5 0 0 1 18.5 18h-13A1.5 1.5 0 0 1 4 16.5v-9Z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <span data-lang-in="Pengalaman" data-lang-en="Experience">Pengalaman</span>
            </a>
            <a href="{{ $sectionPrefix }}#skills">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m12 3 1.9 4.8 5.1.4-3.9 3.2 1.3 5-4.4-2.8-4.4 2.8 1.3-5-3.9-3.2 5.1-.4L12 3Z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <span data-lang-in="Kemampuan" data-lang-en="Skills">Kemampuan</span>
            </a>
            <a href="{{ $sectionPrefix }}#gallery">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 6.5A1.5 1.5 0 0 1 5.5 5h13A1.5 1.5 0 0 1 20 6.5v11a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 4 17.5v-11Zm4 8 2.2-2.2a1 1 0 0 1 1.4 0l1.8 1.8 2.4-2.4a1 1 0 0 1 1.4 0L20 14.5M8.5 9A1.5 1.5 0 1 0 7 7.5 1.5 1.5 0 0 0 8.5 9Z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <span data-lang-in="Galeri" data-lang-en="Gallery">Galeri</span>
            </a>
            <a href="{{ $sectionPrefix }}#certifications">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 15.5a4.5 4.5 0 1 0-4.5-4.5 4.5 4.5 0 0 0 4.5 4.5Zm0 0 4.5 5.5 1-4 4-.8-5.4-3.2M12 15.5l-4.5 5.5-1-4-4-.8 5.4-3.2" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <span data-lang-in="Sertifikasi" data-lang-en="Certifications">Sertifikasi</span>
            </a>
            <a href="{{ $sectionPrefix }}#contact">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 6.5A1.5 1.5 0 0 1 6.5 5h11A1.5 1.5 0 0 1 19 6.5v11a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 5 17.5v-11Zm3 3h8m-8 4h5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <span data-lang-in="Kontak" data-lang-en="Contact">Kontak</span>
            </a>
        </nav>
        <div class="header-tools">
            <div class="theme-switch">
                <button
                    type="button"
                    class="theme-switch-trigger nav-pill nav-icon-button"
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
            <div class="lang-switch">
                <button
                    type="button"
                    class="lang-switch-trigger nav-pill"
                    aria-haspopup="true"
                    aria-expanded="false"
                    aria-label="Pilih bahasa"
                    data-aria-label-in="Pilih bahasa"
                    data-aria-label-en="Choose language"
                >
                    <span class="lang-switch-current">ID</span>
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m7 10 5 5 5-5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <div class="lang-switch-menu" hidden>
                    <button type="button" class="lang-option active" data-lang-toggle="in" aria-pressed="true">Indonesia</button>
                    <button type="button" class="lang-option" data-lang-toggle="en" aria-pressed="false">English</button>
                </div>
            </div>
        </div>
    </div>
</header>
