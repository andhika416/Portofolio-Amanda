<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-page-title-in="Portofolio | Amanda" data-page-title-en="Portfolio | Amanda">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Portofolio | Amanda') }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <script>
            try {
                document.documentElement.dataset.theme =
                    localStorage.getItem('portfolio-theme') === 'dark' ? 'dark' : 'light';
            } catch (error) {
                document.documentElement.dataset.theme = 'light';
            }
        </script>
        <link rel="stylesheet" href="/portfolio.css?v=1793270002">
    </head>
    <body class="intro-active">
        @php
            $imagePath = static fn (string $file): string => '/images/' . rawurlencode($file);
            $galleryImages = ['1.JPG', '2.JPG', '3.jpg', '4.JPG', '5.JPG', '6.JPG'];
        @endphp
        <div class="intro-loader" role="status" aria-label="Memuat portofolio Amanda Sasmi Hanifa">
            <div class="intro-loader-inner">
                <div class="intro-name" aria-hidden="true">
                    <span class="intro-word intro-word-first">
                        <span class="intro-letter" style="--letter-index: 0">A</span>
                        <span class="intro-letter" style="--letter-index: 1">M</span>
                        <span class="intro-letter" style="--letter-index: 2">A</span>
                        <span class="intro-letter" style="--letter-index: 3">N</span>
                        <span class="intro-letter" style="--letter-index: 4">D</span>
                        <span class="intro-letter" style="--letter-index: 5">A</span>
                    </span>
                    <span class="intro-word intro-word-last">
                        <span class="intro-letter" style="--letter-index: 6">S</span>
                        <span class="intro-letter" style="--letter-index: 7">A</span>
                        <span class="intro-letter" style="--letter-index: 8">S</span>
                        <span class="intro-letter" style="--letter-index: 9">M</span>
                        <span class="intro-letter" style="--letter-index: 10">I</span>
                        <span class="intro-name-space" aria-hidden="true"></span>
                        <span class="intro-letter" style="--letter-index: 11">H</span>
                        <span class="intro-letter" style="--letter-index: 12">A</span>
                        <span class="intro-letter" style="--letter-index: 13">N</span>
                        <span class="intro-letter" style="--letter-index: 14">I</span>
                        <span class="intro-letter" style="--letter-index: 15">F</span>
                        <span class="intro-letter" style="--letter-index: 16">A</span>
                    </span>
                </div>
                <span class="intro-loader-line" aria-hidden="true"></span>
                <span class="intro-loader-caption" aria-hidden="true">PORTFOLIO</span>
            </div>
        </div>
        @include('partials.navbar')

        <main>
            <!-- Hero Section -->
            <section id="hero" class="hero section-hero">
                <div class="container hero-grid">
                    <div class="hero-copy animate">
                        <h1>Amanda Sasmi Hanifa</h1>
                        <p
                            data-lang-in="Hai! Aku Amanda Sasmi Hanifa, lulusan S1 Biologi yang tertarik di bidang Keselamatan dan Kesehatan Kerja (K3), kesehatan lingkungan dan laboratorium. Detail-oriented dan senang berkembang lewat pengalaman baru. Percaya bahwa science dan safety bisa jadi hal berimpact besar."
                            data-lang-en="Hi! I'm Amanda Sasmi Hanifa, a Biology graduate with a strong interest in occupational health and safety, environmental health, and laboratory work. I'm detail-oriented and enjoy growing through new experiences. I believe science and safety can create meaningful impact."
                        >Hai! Aku Amanda Sasmi Hanifa, lulusan S1 Biologi yang tertarik di bidang Keselamatan dan Kesehatan Kerja (K3), kesehatan lingkungan dan laboratorium. Detail-oriented dan senang berkembang lewat pengalaman baru. Percaya bahwa science dan safety bisa jadi hal berimpact besar.</p>
                        <a href="https://wa.me/62859155186165" class="btn btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Hubungi saya melalui WhatsApp" data-aria-label-in="Hubungi saya melalui WhatsApp" data-aria-label-en="Contact me via WhatsApp">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M19.05 4.94A9.94 9.94 0 0 0 12.02 2c-5.5 0-9.97 4.47-9.97 9.98 0 1.76.46 3.47 1.33 4.98L2 22l5.2-1.36a9.95 9.95 0 0 0 4.81 1.23h.01c5.5 0 9.98-4.48 9.98-9.98 0-2.66-1.04-5.16-2.95-7.01Zm-7.03 15.24h-.01a8.3 8.3 0 0 1-4.23-1.16l-.3-.18-3.09.81.83-3.01-.2-.31a8.28 8.28 0 0 1-1.28-4.38c0-4.58 3.73-8.31 8.31-8.31 2.21 0 4.29.86 5.85 2.43a8.24 8.24 0 0 1 2.44 5.88c0 4.58-3.73 8.31-8.32 8.31Zm4.56-6.22c-.25-.12-1.48-.73-1.71-.81-.23-.08-.39-.12-.56.12-.17.25-.64.81-.79.98-.15.17-.29.19-.54.06-.25-.12-1.04-.38-1.98-1.22-.73-.65-1.23-1.45-1.37-1.7-.14-.25-.01-.38.11-.5.11-.11.25-.29.37-.44.12-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.12-.56-1.35-.77-1.85-.2-.48-.4-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.23.9 2.43 1.02 2.6.12.17 1.76 2.69 4.26 3.77.59.26 1.06.42 1.42.54.6.19 1.15.16 1.59.1.49-.07 1.48-.6 1.69-1.18.21-.58.21-1.08.15-1.18-.06-.1-.23-.17-.48-.29Z"/>
                            </svg>
                            <span data-lang-in="Kontak" data-lang-en="Contact">Kontak</span>
                        </a>
                    </div>
                    <div class="hero-visual animate">
                        <div class="profile-frame">
                            <div class="avatar-slider" aria-label="Slider foto profil">
                                <img class="avatar-slide avatar-slide-photo-1 active" src="{{ $imagePath('Foto 1.png') }}" alt="Foto profil 1" />
                                <img class="avatar-slide" src="{{ $imagePath('Foto 2.png') }}" alt="Foto profil 2" />
                            </div>
                        </div>
                        <div class="hero-decoration hero-dec-1"></div>
                        <div class="hero-decoration hero-dec-2"></div>
                    </div>
                </div>
            </section>

            <!-- About Section -->
            <section id="about" class="section about-section light">
                <div class="container section-header animate">
                    <h2 data-lang-in="Tentang Saya" data-lang-en="About Me">Tentang Saya</h2>
                </div>
                <div class="container about-grid animate">
                    <article class="about-copy">
                        <p data-lang-in="Halo! Saya Amanda Sasmi Hanifa, lulusan S1 Biologi yang memiliki ketertarikan pada Keselamatan dan Kesehatan Kerja (K3), terutama dalam penerapan sistem keselamatan, identifikasi bahaya, dan pengendalian risiko di lingkungan kerja maupun laboratorium." data-lang-en="Hello! I am Amanda Sasmi Hanifa, a Biology graduate with a strong interest in Occupational Health and Safety (OHS), especially in the implementation of safety systems, hazard identification, and risk control in workplace and laboratory environments.">Halo! Saya Amanda Sasmi Hanifa, lulusan S1 Biologi yang memiliki ketertarikan pada Keselamatan dan Kesehatan Kerja (K3), terutama dalam penerapan sistem keselamatan, identifikasi bahaya, dan pengendalian risiko di lingkungan kerja maupun laboratorium.</p>
                        <p data-lang-in="Selama perkuliahan, saya aktif dalam kegiatan praktikum, penelitian, serta aktivitas akademik yang membentuk kemampuan analisis, ketelitian, komunikasi, dan problem solving. Saya juga memiliki pengalaman sebagai asisten dosen mata kuliah Keanekaragaman Hewan, yang melatih saya untuk bekerja secara terstruktur, mendampingi kegiatan praktikum, serta memastikan prosedur berjalan sesuai standar." data-lang-en="During university, I was actively involved in laboratory practice, research, and academic activities that shaped my analytical skills, accuracy, communication, and problem-solving abilities. I also gained experience as a teaching assistant for the Animal Diversity course, which trained me to work in a structured manner, support practical sessions, and ensure procedures were carried out according to standards.">Selama perkuliahan, saya aktif dalam kegiatan praktikum, penelitian, serta aktivitas akademik yang membentuk kemampuan analisis, ketelitian, komunikasi, dan problem solving. Saya juga memiliki pengalaman sebagai asisten dosen mata kuliah Keanekaragaman Hewan, yang melatih saya untuk bekerja secara terstruktur, mendampingi kegiatan praktikum, serta memastikan prosedur berjalan sesuai standar.</p>
                        <p data-lang-in="Saat ini, saya terus mengembangkan kompetensi di bidang K3, termasuk pemahaman terhadap standar keselamatan kerja, pengelolaan risiko, serta pengawasan lingkungan kerja. Saya memiliki motivasi kuat untuk berkontribusi dalam menciptakan lingkungan kerja yang aman, sehat, dan produktif melalui pendekatan ilmiah, disiplin, dan tanggung jawab profesional." data-lang-en="At present, I continue to develop my competence in OHS, including an understanding of occupational safety standards, risk management, and workplace environmental monitoring. I am strongly motivated to contribute to creating safe, healthy, and productive workplaces through scientific thinking, discipline, and professional responsibility.">Saat ini, saya terus mengembangkan kompetensi di bidang K3, termasuk pemahaman terhadap standar keselamatan kerja, pengelolaan risiko, serta pengawasan lingkungan kerja. Saya memiliki motivasi kuat untuk berkontribusi dalam menciptakan lingkungan kerja yang aman, sehat, dan produktif melalui pendekatan ilmiah, disiplin, dan tanggung jawab profesional.</p>
                    </article>
                    <div class="about-visual">
                        <div class="about-portrait-accent" aria-hidden="true"></div>
                        <img class="about-portrait" src="{{ $imagePath('Foto 3.png') }}" alt="Foto Amanda Sasmi Hanifa" />
                    </div>
                </div>
            </section>

            <!-- Education Section -->
            <section id="education" class="section education-section">
                <div class="container section-header animate">
                    <h2 data-lang-in="Pendidikan" data-lang-en="Education">Pendidikan</h2>
                </div>
                <div class="container education-grid animate">
                    <article class="education-panel">
                        <span class="education-badge" data-lang-in="Pendidikan Terakhir" data-lang-en="Latest Education">Pendidikan Terakhir</span>
                        <div class="education-title-row">
                            <div class="education-logo-frame">
                                <img src="{{ $imagePath('UM.png') }}" alt="Logo Universitas Negeri Malang" class="education-logo" />
                            </div>
                            <div class="education-title-copy">
                                <h3 data-lang-in="S1 Biologi" data-lang-en="Bachelor of Biology">S1 Biologi</h3>
                                <p class="education-campus">Universitas Negeri Malang</p>
                            </div>
                        </div>
                        <p
                            class="education-copy"
                            data-lang-in="Saya menyelesaikan pendidikan Sarjana Biologi dengan pengalaman riset ilmiah, analisis laboratorium dan penerapan K3 pada setiap kegiatan."
                            data-lang-en="I completed my Bachelor's degree in Biology with experience in scientific research, laboratory analysis, and the implementation of occupational health and safety practices in every activity."
                        >Saya menyelesaikan pendidikan Sarjana Biologi dengan pengalaman riset ilmiah, analisis laboratorium dan penerapan K3 pada setiap kegiatan.</p>
                        <div class="education-facts">
                            <div class="education-fact">
                                <span data-lang-in="Jenjang" data-lang-en="Degree">Jenjang</span>
                                <strong data-lang-in="Sarjana (S1)" data-lang-en="Bachelor's Degree">Sarjana (S1)</strong>
                            </div>
                            <div class="education-fact">
                                <span data-lang-in="Bidang" data-lang-en="Field">Bidang</span>
                                <strong data-lang-in="Biologi" data-lang-en="Biology">Biologi</strong>
                            </div>
                            <div class="education-fact">
                                <span data-lang-in="IPK" data-lang-en="GPA">IPK</span>
                                <strong data-lang-in="3.79/4.00" data-lang-en="3.79/4.00">3.79/4.00</strong>
                            </div>
                        </div>
                    </article>

                    <div class="education-visual">
                        <figure class="education-photo-card education-photo-stack is-tertiary">
                            <img src="{{ $imagePath('Amanda 3.JPEG') }}" alt="Foto Amanda 3" class="education-photo" />
                        </figure>
                        <figure class="education-photo-card education-photo-stack is-secondary">
                            <img src="{{ $imagePath('Amanda 2.JPEG') }}" alt="Foto Amanda 2" class="education-photo" />
                        </figure>
                        <figure class="education-photo-card education-photo-stack is-primary">
                            <img src="{{ $imagePath('Amanda 1.jpg') }}" alt="Foto Amanda 1" class="education-photo" />
                        </figure>
                    </div>
                </div>
            </section>

            <!-- Experience Section -->
            <section id="experience" class="section experience-section">
                <div class="container section-header exp-section-header animate">
                    <div class="exp-badge-pill">
                        <svg class="exp-badge-pill-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                        </svg>
                        <span data-lang-in="Karier & Pengalaman" data-lang-en="Career & Experience">Karier & Pengalaman</span>
                    </div>
                    <h2 class="exp-section-title" data-lang-in="Perjalanan Profesional & Riset" data-lang-en="Professional & Research Journey">Perjalanan Profesional & Riset</h2>
                </div>

                <div class="container exp-cards-list animate">
                    <!-- Experience 1: Balai K3 Surabaya -->
                    <article class="exp-card">
                        <div class="exp-card-header">
                            <div class="exp-title-block">
                                <h3 class="exp-role" data-lang-in="Penguji Lingkungan Kerja" data-lang-en="Work Environment Tester">Penguji Lingkungan Kerja</h3>
                                <p class="exp-company" data-lang-in="Balai Keselamatan dan Kesehatan Kerja Surabaya (Balai K3)" data-lang-en="Surabaya Occupational Health & Safety Center (Balai K3)">Balai Keselamatan dan Kesehatan Kerja Surabaya (Balai K3)</p>
                            </div>
                            <div class="exp-meta-badges">
                                <span class="exp-meta-badge exp-badge-date">
                                    <svg class="exp-badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                        <line x1="16" y1="2" x2="16" y2="6"/>
                                        <line x1="8" y1="2" x2="8" y2="6"/>
                                        <line x1="3" y1="10" x2="21" y2="10"/>
                                    </svg>
                                    <span data-lang-in="2025 - 2026" data-lang-en="2025 - 2026">2025 - 2026</span>
                                </span>
                                <span class="exp-meta-badge exp-badge-location">
                                    <svg class="exp-badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                        <circle cx="12" cy="10" r="3"/>
                                    </svg>
                                    <span data-lang-in="Surabaya, Jawa Timur" data-lang-en="Surabaya, East Java">Surabaya, Jawa Timur</span>
                                </span>
                            </div>
                        </div>

                        <ul class="exp-points">
                            <li class="exp-point-item">
                                <span class="exp-check-wrap" aria-hidden="true">
                                    <svg class="exp-check-icon" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="10" r="8.5" stroke="#10b981" stroke-width="1.8" fill="rgba(16, 185, 129, 0.08)"/>
                                        <path d="m6.5 10 2.5 2.5 4.5-5" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="exp-point-text" data-lang-in="Menerapkan peraturan perundang-undangan dalam pengujian keselamatan dan kesehatan kerja." data-lang-en="Applied laws and regulations in occupational health and safety testing.">Menerapkan peraturan perundang-undangan dalam pengujian keselamatan dan kesehatan kerja.</span>
                            </li>
                            <li class="exp-point-item">
                                <span class="exp-check-wrap" aria-hidden="true">
                                    <svg class="exp-check-icon" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="10" r="8.5" stroke="#10b981" stroke-width="1.8" fill="rgba(16, 185, 129, 0.08)"/>
                                        <path d="m6.5 10 2.5 2.5 4.5-5" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="exp-point-text" data-lang-in="Melakukan identifikasi potensi bahaya lingkungan kerja." data-lang-en="Identified potential hazards in the work environment.">Melakukan identifikasi potensi bahaya lingkungan kerja.</span>
                            </li>
                            <li class="exp-point-item">
                                <span class="exp-check-wrap" aria-hidden="true">
                                    <svg class="exp-check-icon" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="10" r="8.5" stroke="#10b981" stroke-width="1.8" fill="rgba(16, 185, 129, 0.08)"/>
                                        <path d="m6.5 10 2.5 2.5 4.5-5" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="exp-point-text" data-lang-in="Melakukan pengukuran faktor fisika lingkungan kerja." data-lang-en="Conducted measurements of physical factors in the work environment.">Melakukan pengukuran faktor fisika lingkungan kerja.</span>
                            </li>
                            <li class="exp-point-item">
                                <span class="exp-check-wrap" aria-hidden="true">
                                    <svg class="exp-check-icon" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="10" r="8.5" stroke="#10b981" stroke-width="1.8" fill="rgba(16, 185, 129, 0.08)"/>
                                        <path d="m6.5 10 2.5 2.5 4.5-5" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="exp-point-text" data-lang-in="Melakukan pengujian faktor kimia lingkungan kerja." data-lang-en="Conducted testing of chemical factors in the work environment.">Melakukan pengujian faktor kimia lingkungan kerja.</span>
                            </li>
                            <li class="exp-point-item">
                                <span class="exp-check-wrap" aria-hidden="true">
                                    <svg class="exp-check-icon" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="10" r="8.5" stroke="#10b981" stroke-width="1.8" fill="rgba(16, 185, 129, 0.08)"/>
                                        <path d="m6.5 10 2.5 2.5 4.5-5" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="exp-point-text" data-lang-in="Mengelola data, interpretasi hasil, dan penyusunan laporan hasil pengujian K3." data-lang-en="Managed data, interpreted results, and prepared occupational health and safety testing reports.">Mengelola data, interpretasi hasil, dan penyusunan laporan hasil pengujian K3.</span>
                            </li>
                            <li class="exp-point-item">
                                <span class="exp-check-wrap" aria-hidden="true">
                                    <svg class="exp-check-icon" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="10" r="8.5" stroke="#10b981" stroke-width="1.8" fill="rgba(16, 185, 129, 0.08)"/>
                                        <path d="m6.5 10 2.5 2.5 4.5-5" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="exp-point-text" data-lang-in="Penerapan prinsip higiene industri." data-lang-en="Applied industrial hygiene principles.">Penerapan prinsip higiene industri.</span>
                            </li>
                            <li class="exp-point-item">
                                <span class="exp-check-wrap" aria-hidden="true">
                                    <svg class="exp-check-icon" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="10" r="8.5" stroke="#10b981" stroke-width="1.8" fill="rgba(16, 185, 129, 0.08)"/>
                                        <path d="m6.5 10 2.5 2.5 4.5-5" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="exp-point-text" data-lang-in="Mengelola fasilitas dan tindakan tanggap darurat." data-lang-en="Managed facilities and emergency response actions.">Mengelola fasilitas dan tindakan tanggap darurat.</span>
                            </li>
                        </ul>

                        <div class="exp-card-footer">
                            <span class="exp-tags-label" data-lang-in="Teknologi / Fokus:" data-lang-en="Focus & Skills:">Teknologi / Fokus:</span>
                            <div class="exp-tags-list">
                                <span class="exp-tag" data-lang-in="Pengujian K3" data-lang-en="OHS Testing">Pengujian K3</span>
                                <span class="exp-tag" data-lang-in="Faktor Fisika & Kimia" data-lang-en="Physical & Chemical Factors">Faktor Fisika & Kimia</span>
                                <span class="exp-tag" data-lang-in="Higiene Industri" data-lang-en="Industrial Hygiene">Higiene Industri</span>
                                <span class="exp-tag" data-lang-in="Tanggap Darurat" data-lang-en="Emergency Response">Tanggap Darurat</span>
                                <span class="exp-tag" data-lang-in="Identifikasi Bahaya" data-lang-en="Hazard Identification">Identifikasi Bahaya</span>
                            </div>
                        </div>
                    </article>

                    <!-- Experience 2: Asisten Dosen Universitas Negeri Malang -->
                    <article class="exp-card">
                        <div class="exp-card-header">
                            <div class="exp-title-block">
                                <h3 class="exp-role" data-lang-in="Asisten Dosen Praktikum" data-lang-en="Laboratory Teaching Assistant">Asisten Dosen Praktikum</h3>
                                <p class="exp-company" data-lang-in="Universitas Negeri Malang - Departemen Biologi" data-lang-en="State University of Malang - Department of Biology">Universitas Negeri Malang - Departemen Biologi</p>
                            </div>
                            <div class="exp-meta-badges">
                                <span class="exp-meta-badge exp-badge-date">
                                    <svg class="exp-badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                        <line x1="16" y1="2" x2="16" y2="6"/>
                                        <line x1="8" y1="2" x2="8" y2="6"/>
                                        <line x1="3" y1="10" x2="21" y2="10"/>
                                    </svg>
                                    <span data-lang-in="2025" data-lang-en="2025">2025</span>
                                </span>
                                <span class="exp-meta-badge exp-badge-location">
                                    <svg class="exp-badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                        <circle cx="12" cy="10" r="3"/>
                                    </svg>
                                    <span data-lang-in="Malang, Jawa Timur" data-lang-en="Malang, East Java">Malang, Jawa Timur</span>
                                </span>
                            </div>
                        </div>

                        <ul class="exp-points">
                            <li class="exp-point-item">
                                <span class="exp-check-wrap" aria-hidden="true">
                                    <svg class="exp-check-icon" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="10" r="8.5" stroke="#10b981" stroke-width="1.8" fill="rgba(16, 185, 129, 0.08)"/>
                                        <path d="m6.5 10 2.5 2.5 4.5-5" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="exp-point-text" data-lang-in="Membantu dosen dengan membimbing dan memimpin sesi praktik laboratorium untuk sekitar 120 mahasiswa, termasuk pengawasan keselamatan dan kesehatan kerja di laboratorium." data-lang-en="Assisted lecturers by guiding and leading laboratory practice sessions for around 120 students, including occupational health and safety supervision in the laboratory.">Membantu dosen dengan membimbing dan memimpin sesi praktik laboratorium untuk sekitar 120 mahasiswa, termasuk pengawasan keselamatan dan kesehatan kerja di laboratorium.</span>
                            </li>
                            <li class="exp-point-item">
                                <span class="exp-check-wrap" aria-hidden="true">
                                    <svg class="exp-check-icon" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="10" r="8.5" stroke="#10b981" stroke-width="1.8" fill="rgba(16, 185, 129, 0.08)"/>
                                        <path d="m6.5 10 2.5 2.5 4.5-5" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="exp-point-text" data-lang-in="Menyiapkan bahan ajar, mempresentasikan konsep ilmiah yang kompleks, dan menilai pemahaman mahasiswa." data-lang-en="Prepared teaching materials, presented complex scientific concepts, and evaluated student understanding.">Menyiapkan bahan ajar, mempresentasikan konsep ilmiah yang kompleks, dan menilai pemahaman mahasiswa.</span>
                            </li>
                        </ul>

                        <div class="exp-card-footer">
                            <span class="exp-tags-label" data-lang-in="Teknologi / Fokus:" data-lang-en="Focus & Skills:">Teknologi / Fokus:</span>
                            <div class="exp-tags-list">
                                <span class="exp-tag" data-lang-in="Asisten Laboratorium" data-lang-en="Laboratory Assistant">Asisten Laboratorium</span>
                                <span class="exp-tag" data-lang-in="Pengawasan K3 Lab" data-lang-en="Lab Safety Supervision">Pengawasan K3 Lab</span>
                                <span class="exp-tag" data-lang-in="Keanekaragaman Hewan" data-lang-en="Animal Diversity">Keanekaragaman Hewan</span>
                                <span class="exp-tag" data-lang-in="Bimbingan Mahasiswa" data-lang-en="Student Mentoring">Bimbingan Mahasiswa</span>
                                <span class="exp-tag" data-lang-in="Evaluasi Praktikum" data-lang-en="Practical Assessment">Evaluasi Praktikum</span>
                            </div>
                        </div>
                    </article>

                    <!-- Experience 3: Dinas Lingkungan Hidup Kab. Nganjuk -->
                    <article class="exp-card">
                        <div class="exp-card-header">
                            <div class="exp-title-block">
                                <h3 class="exp-role" data-lang-in="Tenaga Laboratorium Lingkungan" data-lang-en="Environmental Laboratory Intern">Tenaga Laboratorium Lingkungan</h3>
                                <p class="exp-company" data-lang-in="Dinas Lingkungan Hidup Kab. Nganjuk (UPTD Laboratorium Lingkungan)" data-lang-en="Environmental Agency of Nganjuk Regency (UPTD Environmental Lab)">Dinas Lingkungan Hidup Kab. Nganjuk (UPTD Laboratorium Lingkungan)</p>
                            </div>
                            <div class="exp-meta-badges">
                                <span class="exp-meta-badge exp-badge-date">
                                    <svg class="exp-badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                        <line x1="16" y1="2" x2="16" y2="6"/>
                                        <line x1="8" y1="2" x2="8" y2="6"/>
                                        <line x1="3" y1="10" x2="21" y2="10"/>
                                    </svg>
                                    <span data-lang-in="2024" data-lang-en="2024">2024</span>
                                </span>
                                <span class="exp-meta-badge exp-badge-location">
                                    <svg class="exp-badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                        <circle cx="12" cy="10" r="3"/>
                                    </svg>
                                    <span data-lang-in="Nganjuk, Jawa Timur" data-lang-en="Nganjuk, East Java">Nganjuk, Jawa Timur</span>
                                </span>
                            </div>
                        </div>

                        <ul class="exp-points">
                            <li class="exp-point-item">
                                <span class="exp-check-wrap" aria-hidden="true">
                                    <svg class="exp-check-icon" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="10" r="8.5" stroke="#10b981" stroke-width="1.8" fill="rgba(16, 185, 129, 0.08)"/>
                                        <path d="m6.5 10 2.5 2.5 4.5-5" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="exp-point-text" data-lang-in="Bekerja di laboratorium lingkungan dengan fokus pada persiapan sampel, pengambilan sampel, serta analisis parameter fisika, kimia, dan biologi sesuai standar pengujian lingkungan." data-lang-en="Worked in an environmental laboratory focusing on sample preparation, sampling, and the analysis of physical, chemical, and biological parameters in accordance with environmental testing standards.">Bekerja di laboratorium lingkungan dengan fokus pada persiapan sampel, pengambilan sampel, serta analisis parameter fisika, kimia, dan biologi sesuai standar pengujian lingkungan.</span>
                            </li>
                            <li class="exp-point-item">
                                <span class="exp-check-wrap" aria-hidden="true">
                                    <svg class="exp-check-icon" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="10" r="8.5" stroke="#10b981" stroke-width="1.8" fill="rgba(16, 185, 129, 0.08)"/>
                                        <path d="m6.5 10 2.5 2.5 4.5-5" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="exp-point-text" data-lang-in="Menerapkan prinsip Keselamatan dan Kesehatan Kerja (K3) di laboratorium, termasuk penggunaan APD, penanganan bahan kimia, dan prosedur kerja aman untuk meminimalkan risiko paparan." data-lang-en="Applied occupational health and safety principles in the laboratory, including the use of PPE, chemical handling, and safe work procedures to minimize exposure risks.">Menerapkan prinsip Keselamatan dan Kesehatan Kerja (K3) di laboratorium, termasuk penggunaan APD, penanganan bahan kimia, dan prosedur kerja aman untuk meminimalkan risiko paparan.</span>
                            </li>
                            <li class="exp-point-item">
                                <span class="exp-check-wrap" aria-hidden="true">
                                    <svg class="exp-check-icon" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="10" r="8.5" stroke="#10b981" stroke-width="1.8" fill="rgba(16, 185, 129, 0.08)"/>
                                        <path d="m6.5 10 2.5 2.5 4.5-5" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="exp-point-text" data-lang-in="Melakukan pengolahan dan analisis data hasil pengujian lingkungan secara akurat dan sistematis." data-lang-en="Processed and analyzed environmental testing data accurately and systematically.">Melakukan pengolahan dan analisis data hasil pengujian lingkungan secara akurat dan sistematis.</span>
                            </li>
                            <li class="exp-point-item">
                                <span class="exp-check-wrap" aria-hidden="true">
                                    <svg class="exp-check-icon" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="10" r="8.5" stroke="#10b981" stroke-width="1.8" fill="rgba(16, 185, 129, 0.08)"/>
                                        <path d="m6.5 10 2.5 2.5 4.5-5" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="exp-point-text" data-lang-in="Riset: Analisis kualitas limbah cair industri tekstil pada skala usaha mikro kecil menengah di UPTD Laboratorium Lingkungan Kabupaten Nganjuk." data-lang-en="Research: Analysis of textile industry liquid waste quality in micro, small, and medium enterprises at the Nganjuk Regency Environmental Laboratory UPTD.">Riset: Analisis kualitas limbah cair industri tekstil pada skala usaha mikro kecil menengah di UPTD Laboratorium Lingkungan Kabupaten Nganjuk.</span>
                            </li>
                        </ul>

                        <div class="exp-card-footer">
                            <span class="exp-tags-label" data-lang-in="Teknologi / Fokus:" data-lang-en="Focus & Skills:">Teknologi / Fokus:</span>
                            <div class="exp-tags-list">
                                <span class="exp-tag" data-lang-in="Laboratorium Lingkungan" data-lang-en="Environmental Lab">Laboratorium Lingkungan</span>
                                <span class="exp-tag" data-lang-in="Analisis Limbah Cair" data-lang-en="Wastewater Analysis">Analisis Limbah Cair</span>
                                <span class="exp-tag" data-lang-in="Uji Fisika & Kimia" data-lang-en="Physicochemical Testing">Uji Fisika & Kimia</span>
                                <span class="exp-tag" data-lang-in="Prosedur APD & K3" data-lang-en="PPE & Safety Procedures">Prosedur APD & K3</span>
                                <span class="exp-tag" data-lang-in="Sampling Air" data-lang-en="Water Sampling">Sampling Air</span>
                            </div>
                        </div>
                    </article>

                    <!-- Experience 4: Riset Kesehatan Lingkungan -->
                    <article class="exp-card">
                        <div class="exp-card-header">
                            <div class="exp-title-block">
                                <h3 class="exp-role" data-lang-in="Peneliti Kesehatan Lingkungan" data-lang-en="Environmental Health Researcher">Peneliti Kesehatan Lingkungan</h3>
                                <p class="exp-company" data-lang-in="Riset Lapangan Kesehatan Lingkungan & Komunitas" data-lang-en="Community & Environmental Health Field Research">Riset Lapangan Kesehatan Lingkungan & Komunitas</p>
                            </div>
                            <div class="exp-meta-badges">
                                <span class="exp-meta-badge exp-badge-date">
                                    <svg class="exp-badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                        <line x1="16" y1="2" x2="16" y2="6"/>
                                        <line x1="8" y1="2" x2="8" y2="6"/>
                                        <line x1="3" y1="10" x2="21" y2="10"/>
                                    </svg>
                                    <span data-lang-in="2024" data-lang-en="2024">2024</span>
                                </span>
                                <span class="exp-meta-badge exp-badge-location">
                                    <svg class="exp-badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                        <circle cx="12" cy="10" r="3"/>
                                    </svg>
                                    <span data-lang-in="Batu & Malang, Jawa Timur" data-lang-en="Batu & Malang, East Java">Batu & Malang, Jawa Timur</span>
                                </span>
                            </div>
                        </div>

                        <ul class="exp-points">
                            <li class="exp-point-item">
                                <span class="exp-check-wrap" aria-hidden="true">
                                    <svg class="exp-check-icon" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="10" r="8.5" stroke="#10b981" stroke-width="1.8" fill="rgba(16, 185, 129, 0.08)"/>
                                        <path d="m6.5 10 2.5 2.5 4.5-5" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="exp-point-text" data-lang-in="Survei perilaku penggunaan pestisida dan APD dalam pengendalian hama serta keluhan kesehatan pada petani sayur di Desa Junrejo, Kota Batu." data-lang-en="Surveyed pesticide and PPE usage behavior in pest control as well as health complaints among vegetable farmers in Junrejo Village, Batu City.">Survei perilaku penggunaan pestisida dan APD dalam pengendalian hama serta keluhan kesehatan pada petani sayur di Desa Junrejo, Kota Batu.</span>
                            </li>
                            <li class="exp-point-item">
                                <span class="exp-check-wrap" aria-hidden="true">
                                    <svg class="exp-check-icon" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="10" r="8.5" stroke="#10b981" stroke-width="1.8" fill="rgba(16, 185, 129, 0.08)"/>
                                        <path d="m6.5 10 2.5 2.5 4.5-5" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="exp-point-text" data-lang-in="Analisis gangguan kesehatan penduduk di Kampung Heritage Kota Malang terkait kualitas udara indoor." data-lang-en="Analyzed residents' health issues in Heritage Village, Malang City, related to indoor air quality.">Analisis gangguan kesehatan penduduk di Kampung Heritage Kota Malang terkait kualitas udara indoor.</span>
                            </li>
                        </ul>

                        <div class="exp-card-footer">
                            <span class="exp-tags-label" data-lang-in="Teknologi / Fokus:" data-lang-en="Focus & Skills:">Teknologi / Fokus:</span>
                            <div class="exp-tags-list">
                                <span class="exp-tag" data-lang-in="Survei Kesehatan" data-lang-en="Health Survey">Survei Kesehatan</span>
                                <span class="exp-tag" data-lang-in="Penggunaan APD Petani" data-lang-en="Farmer PPE Compliance">Penggunaan APD Petani</span>
                                <span class="exp-tag" data-lang-in="Kualitas Udara Indoor" data-lang-en="Indoor Air Quality">Kualitas Udara Indoor</span>
                                <span class="exp-tag" data-lang-in="Analisis Risiko Lingkungan" data-lang-en="Environmental Risk Analysis">Analisis Risiko Lingkungan</span>
                            </div>
                        </div>
                    </article>

                    <!-- Experience 5: Proyek Riset Mikrobiologi -->
                    <article class="exp-card">
                        <div class="exp-card-header">
                            <div class="exp-title-block">
                                <h3 class="exp-role" data-lang-in="Peneliti Riset Mikrobiologi" data-lang-en="Microbiology Research Project Lead">Peneliti Riset Mikrobiologi</h3>
                                <p class="exp-company" data-lang-in="Proyek Riset Mikrobiologi Terapan (dengan Penerapan Standar K3)" data-lang-en="Microbiology Research Project (with OHS Standard Implementation)">Proyek Riset Mikrobiologi Terapan (dengan Penerapan Standar K3)</p>
                            </div>
                            <div class="exp-meta-badges">
                                <span class="exp-meta-badge exp-badge-date">
                                    <svg class="exp-badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                        <line x1="16" y1="2" x2="16" y2="6"/>
                                        <line x1="8" y1="2" x2="8" y2="6"/>
                                        <line x1="3" y1="10" x2="21" y2="10"/>
                                    </svg>
                                    <span data-lang-in="2024" data-lang-en="2024">2024</span>
                                </span>
                                <span class="exp-meta-badge exp-badge-location">
                                    <svg class="exp-badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                        <circle cx="12" cy="10" r="3"/>
                                    </svg>
                                    <span data-lang-in="Malang, Jawa Timur" data-lang-en="Malang, East Java">Malang, Jawa Timur</span>
                                </span>
                            </div>
                        </div>

                        <ul class="exp-points">
                            <li class="exp-point-item">
                                <span class="exp-check-wrap" aria-hidden="true">
                                    <svg class="exp-check-icon" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="10" r="8.5" stroke="#10b981" stroke-width="1.8" fill="rgba(16, 185, 129, 0.08)"/>
                                        <path d="m6.5 10 2.5 2.5 4.5-5" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="exp-point-text" data-lang-in="Penelitian pembuatan yoghurt dengan penambahan sari wortel sebagai bahan dasar, dengan penerapan K3 di laboratorium mikrobiologi, termasuk penggunaan APD dan prosedur kerja aseptik selama proses fermentasi dan analisis." data-lang-en="Conducted research on yogurt production with carrot extract as the base ingredient, applying OHS practices in the microbiology laboratory, including the use of PPE and aseptic procedures during fermentation and analysis.">Penelitian pembuatan yoghurt dengan penambahan sari wortel sebagai bahan dasar, dengan penerapan K3 di laboratorium mikrobiologi, termasuk penggunaan APD dan prosedur kerja aseptik selama proses fermentasi dan analisis.</span>
                            </li>
                            <li class="exp-point-item">
                                <span class="exp-check-wrap" aria-hidden="true">
                                    <svg class="exp-check-icon" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="10" r="8.5" stroke="#10b981" stroke-width="1.8" fill="rgba(16, 185, 129, 0.08)"/>
                                        <path d="m6.5 10 2.5 2.5 4.5-5" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="exp-point-text" data-lang-in="Uji kualitas mikrobiologi makanan dalam kemasan kaleng berdasarkan Angka Lempeng Total (ALT) koloni bakteri dengan memperhatikan aspek K3, seperti penanganan sampel biologis secara aman dan pengelolaan risiko kontaminasi." data-lang-en="Tested the microbiological quality of canned food based on Total Plate Count (TPC) of bacterial colonies while observing OHS aspects, such as safe biological sample handling and contamination risk management.">Uji kualitas mikrobiologi makanan dalam kemasan kaleng berdasarkan Angka Lempeng Total (ALT) koloni bakteri dengan memperhatikan aspek K3, seperti penanganan sampel biologis secara aman dan pengelolaan risiko kontaminasi.</span>
                            </li>
                            <li class="exp-point-item">
                                <span class="exp-check-wrap" aria-hidden="true">
                                    <svg class="exp-check-icon" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="10" r="8.5" stroke="#10b981" stroke-width="1.8" fill="rgba(16, 185, 129, 0.08)"/>
                                        <path d="m6.5 10 2.5 2.5 4.5-5" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="exp-point-text" data-lang-in="Pewarnaan Gram serta pengukuran sel bakteri dengan penerapan standar K3 laboratorium, termasuk penggunaan bahan kimia secara aman dan pembuangan limbah sesuai prosedur." data-lang-en="Performed Gram staining and bacterial cell measurement while applying laboratory OHS standards, including safe chemical use and proper waste disposal procedures.">Pewarnaan Gram serta pengukuran sel bakteri dengan penerapan standar K3 laboratorium, termasuk penggunaan bahan kimia secara aman dan pembuangan limbah sesuai prosedur.</span>
                            </li>
                            <li class="exp-point-item">
                                <span class="exp-check-wrap" aria-hidden="true">
                                    <svg class="exp-check-icon" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="10" r="8.5" stroke="#10b981" stroke-width="1.8" fill="rgba(16, 185, 129, 0.08)"/>
                                        <path d="m6.5 10 2.5 2.5 4.5-5" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="exp-point-text" data-lang-in="Uji kualitas mikrobiologi air minum dalam kemasan menggunakan metode Most Probable Number (MPN) Coliform dengan memperhatikan prinsip K3 untuk mencegah paparan mikroorganisme dan menjaga keamanan kerja di laboratorium." data-lang-en="Tested the microbiological quality of packaged drinking water using the Most Probable Number (MPN) Coliform method while observing OHS principles to prevent microorganism exposure and maintain laboratory safety.">Uji kualitas mikrobiologi air minum dalam kemasan menggunakan metode Most Probable Number (MPN) Coliform dengan memperhatikan prinsip K3 untuk mencegah paparan mikroorganisme dan menjaga keamanan kerja di laboratorium.</span>
                            </li>
                        </ul>

                        <div class="exp-card-footer">
                            <span class="exp-tags-label" data-lang-in="Teknologi / Fokus:" data-lang-en="Focus & Skills:">Teknologi / Fokus:</span>
                            <div class="exp-tags-list">
                                <span class="exp-tag" data-lang-in="Kerja Aseptik" data-lang-en="Aseptic Work">Kerja Aseptik</span>
                                <span class="exp-tag" data-lang-in="Uji ALT & MPN" data-lang-en="TPC & MPN Testing">Uji ALT & MPN</span>
                                <span class="exp-tag" data-lang-in="Pewarnaan Gram" data-lang-en="Gram Staining">Pewarnaan Gram</span>
                                <span class="exp-tag" data-lang-in="K3 Mikrobiologi" data-lang-en="Microbiology OHS">K3 Mikrobiologi</span>
                                <span class="exp-tag" data-lang-in="Manajemen Risiko Lab" data-lang-en="Lab Risk Management">Manajemen Risiko Lab</span>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <!-- Skills Section -->
            <section id="skills" class="section skills-section light">
                <div class="container section-header animate">
                    <h2 data-lang-in="Kemampuan" data-lang-en="Skills">Kemampuan</h2>
                </div>
                <div class="container skills-grid animate">
                    <div class="skill-group">
                        <h3 data-lang-in="Keselamatan dan Kesehatan Kerja" data-lang-en="Occupational Health and Safety">Keselamatan dan Kesehatan Kerja</h3>
                        <ul>
                            <li data-lang-in="Identifikasi bahaya dan penilaian risiko kerja" data-lang-en="Hazard identification and workplace risk assessment">Identifikasi bahaya dan penilaian risiko kerja</li>
                            <li data-lang-in="Pengujian Faktor Bahaya Lingkungan Kerja" data-lang-en="Workplace Environmental Hazard Testing">Pengujian Faktor Bahaya Lingkungan Kerja</li>
                            <li data-lang-in="Penerapan prinsip higiene industri" data-lang-en="Application of industrial hygiene principles">Penerapan prinsip higiene industri</li>
                            <li data-lang-in="Pengelolaan fasilitas dan tindakan tanggap darurat" data-lang-en="Facility management and emergency response actions">Pengelolaan fasilitas dan tindakan tanggap darurat</li>
                            <li data-lang-in="P3K" data-lang-en="First Aid">P3K</li>
                        </ul>
                    </div>
                    <div class="skill-group">
                        <h3 data-lang-in="Laboratorium" data-lang-en="Laboratory">Laboratorium</h3>
                        <ul>
                            <li data-lang-in="Quality control" data-lang-en="Quality control">Quality control</li>
                            <li data-lang-in="Preparasi sampel" data-lang-en="Sample preparation">Preparasi sampel</li>
                            <li data-lang-in="Analisis mikrobiologi" data-lang-en="Microbiological analysis">Analisis mikrobiologi</li>
                            <li data-lang-in="Analisis kimia" data-lang-en="Chemical analysis">Analisis kimia</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Gallery Section -->
            <section id="gallery" class="section gallery-section">
                <div class="container section-header animate">
                    <h2 data-lang-in="Galeri" data-lang-en="Gallery">Galeri</h2>
                </div>
                <div class="container gallery-slider animate">
                    <div class="gallery-track">
                        @foreach (range(1, 3) as $duplicateIndex)
                            @foreach ($galleryImages as $galleryImage)
                                <figure class="gallery-card" @if ($duplicateIndex !== 2) aria-hidden="true" @endif>
                                    <img src="{{ $imagePath($galleryImage) }}" alt="Galeri Amanda {{ $loop->iteration }}" class="gallery-image" />
                                </figure>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- Certifications Section -->
            <section id="certifications" class="section certifications-section">
                <div class="container section-header animate">
                    <h2 data-lang-in="Sertifikasi" data-lang-en="Certifications">Sertifikasi</h2>
                </div>
                <div class="container cert-cards animate">
                    <div class="cert-card" data-cert-url="{{ route('certifications.show', 'kemnaker') }}" role="link" tabindex="0">
                        <div class="cert-brand">
                            <div class="cert-logo-frame">
                                <img src="{{ $imagePath($certificationCatalog['kemnaker']['logo']) }}" alt="Logo Kemnaker" class="cert-logo-image" />
                            </div>
                            <div class="cert-copy">
                                <h3>{{ $certificationCatalog['kemnaker']['name'] }}</h3>
                                <span>{{ $certificationCatalog['kemnaker']['organization'] }}</span>
                            </div>
                        </div>
                        <div class="cert-actions">
                            <div class="cert-pill">
                                <span data-lang-in="{{ count($certificationCatalog['kemnaker']['certificates']) }} Sertifikat" data-lang-en="{{ count($certificationCatalog['kemnaker']['certificates']) }} Certificates">{{ count($certificationCatalog['kemnaker']['certificates']) }} Sertifikat</span>
                            </div>
                            <a href="{{ route('certifications.show', 'kemnaker') }}" data-lang-in="Lihat Sertifikat" data-lang-en="View Certificates">Lihat Sertifikat</a>
                        </div>
                    </div>
                    <div class="cert-card" data-cert-url="{{ route('certifications.show', 'bnsp') }}" role="link" tabindex="0">
                        <div class="cert-brand">
                            <div class="cert-logo-frame">
                                <img src="{{ $imagePath($certificationCatalog['bnsp']['logo']) }}" alt="Logo BNSP" class="cert-logo-image" />
                            </div>
                            <div class="cert-copy">
                                <h3>{{ $certificationCatalog['bnsp']['name'] }}</h3>
                                <span>{{ $certificationCatalog['bnsp']['organization'] }}</span>
                            </div>
                        </div>
                        <div class="cert-actions">
                            <div class="cert-pill">
                                <span data-lang-in="{{ count($certificationCatalog['bnsp']['certificates']) }} Sertifikat" data-lang-en="{{ count($certificationCatalog['bnsp']['certificates']) }} Certificates">{{ count($certificationCatalog['bnsp']['certificates']) }} Sertifikat</span>
                            </div>
                            <a href="{{ route('certifications.show', 'bnsp') }}" data-lang-in="Lihat Sertifikat" data-lang-en="View Certificates">Lihat Sertifikat</a>
                        </div>
                    </div>
                    <div class="cert-card" data-cert-url="{{ route('certifications.show', 'gnik') }}" role="link" tabindex="0">
                        <div class="cert-brand">
                            <div class="cert-logo-frame">
                                <img src="{{ $imagePath($certificationCatalog['gnik']['logo']) }}" alt="Logo GNIK" class="cert-logo-image" />
                            </div>
                            <div class="cert-copy">
                                <h3>{{ $certificationCatalog['gnik']['name'] }}</h3>
                                <span>{{ $certificationCatalog['gnik']['organization'] }}</span>
                            </div>
                        </div>
                        <div class="cert-actions">
                            <div class="cert-pill">
                                <span data-lang-in="{{ count($certificationCatalog['gnik']['certificates']) }} Sertifikat" data-lang-en="{{ count($certificationCatalog['gnik']['certificates']) }} Certificates">{{ count($certificationCatalog['gnik']['certificates']) }} Sertifikat</span>
                            </div>
                            <a href="{{ route('certifications.show', 'gnik') }}" data-lang-in="Lihat Sertifikat" data-lang-en="View Certificates">Lihat Sertifikat</a>
                        </div>
                    </div>
                    <div class="cert-card" data-cert-url="{{ route('certifications.show', 'makin-ahli') }}" role="link" tabindex="0">
                        <div class="cert-brand">
                            <div class="cert-logo-frame">
                                <img src="{{ $imagePath($certificationCatalog['makin-ahli']['logo']) }}" alt="Logo Makin Ahli" class="cert-logo-image" />
                            </div>
                            <div class="cert-copy">
                                <h3>{{ $certificationCatalog['makin-ahli']['name'] }}</h3>
                                <span>{{ $certificationCatalog['makin-ahli']['organization'] }}</span>
                            </div>
                        </div>
                        <div class="cert-actions">
                            <div class="cert-pill">
                                <span data-lang-in="{{ count($certificationCatalog['makin-ahli']['certificates']) }} Sertifikat" data-lang-en="{{ count($certificationCatalog['makin-ahli']['certificates']) }} Certificates">{{ count($certificationCatalog['makin-ahli']['certificates']) }} Sertifikat</span>
                            </div>
                            <a href="{{ route('certifications.show', 'makin-ahli') }}" data-lang-in="Lihat Sertifikat" data-lang-en="View Certificates">Lihat Sertifikat</a>
                        </div>
                    </div>
                    <div class="cert-card" data-cert-url="{{ route('certifications.show', 'kiamori') }}" role="link" tabindex="0">
                        <div class="cert-brand">
                            <div class="cert-logo-frame">
                                <img src="{{ $imagePath($certificationCatalog['kiamori']['logo']) }}" alt="Logo Kiamori Academy" class="cert-logo-image" />
                            </div>
                            <div class="cert-copy">
                                <h3>{{ $certificationCatalog['kiamori']['name'] }}</h3>
                                <span>{{ $certificationCatalog['kiamori']['organization'] }}</span>
                            </div>
                        </div>
                        <div class="cert-actions">
                            <div class="cert-pill">
                                <span data-lang-in="{{ count($certificationCatalog['kiamori']['certificates']) }} Sertifikat" data-lang-en="{{ count($certificationCatalog['kiamori']['certificates']) }} Certificates">{{ count($certificationCatalog['kiamori']['certificates']) }} Sertifikat</span>
                            </div>
                            <a href="{{ route('certifications.show', 'kiamori') }}" data-lang-in="Lihat Sertifikat" data-lang-en="View Certificates">Lihat Sertifikat</a>
                        </div>
                    </div>
                    <div class="cert-card" data-cert-url="{{ route('certifications.show', 'microsoft') }}" role="link" tabindex="0">
                        <div class="cert-brand">
                            <div class="cert-logo-frame">
                                <img src="{{ $imagePath($certificationCatalog['microsoft']['logo']) }}" alt="Logo Microsoft" class="cert-logo-image" />
                            </div>
                            <div class="cert-copy">
                                <h3>{{ $certificationCatalog['microsoft']['name'] }}</h3>
                                <span>{{ $certificationCatalog['microsoft']['organization'] }}</span>
                            </div>
                        </div>
                        <div class="cert-actions">
                            <div class="cert-pill">
                                <span data-lang-in="{{ count($certificationCatalog['microsoft']['certificates']) }} Sertifikat" data-lang-en="{{ count($certificationCatalog['microsoft']['certificates']) }} Certificates">{{ count($certificationCatalog['microsoft']['certificates']) }} Sertifikat</span>
                            </div>
                            <a href="{{ route('certifications.show', 'microsoft') }}" data-lang-in="Lihat Sertifikat" data-lang-en="View Certificates">Lihat Sertifikat</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="section contact-section light">
                <div class="container section-header animate">
                    <h2 data-lang-in="Kontak" data-lang-en="Contact">Kontak</h2>
                </div>
                <div class="container contact-grid animate">
                    <div class="contact-info">
                        <a class="contact-card contact-linkedin" href="http://www.linkedin.com/in/amandasasmihanifa" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn Amanda Sasmi Hanifa" data-aria-label-in="LinkedIn Amanda Sasmi Hanifa" data-aria-label-en="Amanda Sasmi Hanifa LinkedIn">
                            <span class="contact-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24">
                                    <path d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5ZM0 8.75h5v14.5H0v-14.5Zm7.5 0h4.8v2.08h.07c.67-1.27 2.3-2.61 4.73-2.61 5.06 0 6 3.34 6 7.68v8.35h-5V16.8c0-1.7-.03-3.9-2.38-3.9-2.38 0-2.74 1.85-2.74 3.76v8.09h-5V8.75Z" />
                                </svg>
                            </span>
                            <span class="contact-copy">
                                <strong>LinkedIn</strong>
                                <span>amandasasmihanifa</span>
                            </span>
                            <span class="contact-action" data-lang-in="Buka Profil" data-lang-en="Open Profile">Buka Profil</span>
                        </a>
                        <a class="contact-card contact-whatsapp" href="https://wa.me/62859155186165" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp Amanda Sasmi Hanifa" data-aria-label-in="WhatsApp Amanda Sasmi Hanifa" data-aria-label-en="Amanda Sasmi Hanifa WhatsApp">
                            <span class="contact-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24">
                                    <path d="M19.05 4.94A9.94 9.94 0 0 0 12.02 2c-5.5 0-9.97 4.47-9.97 9.98 0 1.76.46 3.47 1.33 4.98L2 22l5.2-1.36a9.95 9.95 0 0 0 4.81 1.23h.01c5.5 0 9.98-4.48 9.98-9.98 0-2.66-1.04-5.16-2.95-7.01Zm-7.03 15.24h-.01a8.3 8.3 0 0 1-4.23-1.16l-.3-.18-3.09.81.83-3.01-.2-.31a8.28 8.28 0 0 1-1.28-4.38c0-4.58 3.73-8.31 8.31-8.31 2.21 0 4.29.86 5.85 2.43a8.24 8.24 0 0 1 2.44 5.88c0 4.58-3.73 8.31-8.32 8.31Zm4.56-6.22c-.25-.12-1.48-.73-1.71-.81-.23-.08-.39-.12-.56.12-.17.25-.64.81-.79.98-.15.17-.29.19-.54.06-.25-.12-1.04-.38-1.98-1.22-.73-.65-1.23-1.45-1.37-1.7-.14-.25-.01-.38.11-.5.11-.11.25-.29.37-.44.12-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.12-.56-1.35-.77-1.85-.2-.48-.4-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.23.9 2.43 1.02 2.6.12.17 1.76 2.69 4.26 3.77.59.26 1.06.42 1.42.54.6.19 1.15.16 1.59.1.49-.07 1.48-.6 1.69-1.18.21-.58.21-1.08.15-1.18-.06-.1-.23-.17-.48-.29Z" />
                                </svg>
                            </span>
                            <span class="contact-copy">
                                <strong>WhatsApp</strong>
                                <span>0859155186165</span>
                            </span>
                            <span class="contact-action" data-lang-in="Chat Langsung" data-lang-en="Chat Now">Chat Langsung</span>
                        </a>
                        <a class="contact-card contact-email" href="mailto:amandahanifa915@gmail.com" aria-label="Email Amanda Sasmi Hanifa" data-aria-label-in="Email Amanda Sasmi Hanifa" data-aria-label-en="Email Amanda Sasmi Hanifa">
                            <span class="contact-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24">
                                    <path d="M3 5.25A2.25 2.25 0 0 1 5.25 3h13.5A2.25 2.25 0 0 1 21 5.25v13.5A2.25 2.25 0 0 1 18.75 21H5.25A2.25 2.25 0 0 1 3 18.75V5.25Zm1.5.56v12.94c0 .414.336.75.75.75h13.5a.75.75 0 0 0 .75-.75V5.81l-7.5 5.1-7.5-5.1Zm1.69-.81 6.06 4.13 6.06-4.13H5.19Z" />
                                </svg>
                            </span>
                            <span class="contact-copy">
                                <strong>Email</strong>
                                <span>amandahanifa915@gmail.com</span>
                            </span>
                            <span class="contact-action" data-lang-in="Kirim Email" data-lang-en="Send Email">Kirim Email</span>
                        </a>
                    </div>
                </div>
            </section>
        </main>

        @include('partials.footer')

        <script src="/portfolio.js?v=1793268888"></script>
    </body>
</html>
