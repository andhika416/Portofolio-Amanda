<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Portofolio | Amanda') }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/portfolio.css">
    </head>
    <body>
        @php
            $imagePath = static fn (string $file): string => '/images/' . rawurlencode($file);
        @endphp
        @include('partials.navbar')

        <main>
            <!-- Hero Section -->
            <section id="hero" class="hero section-hero">
                <div class="container hero-grid">
                    <div class="hero-copy animate">
                        <h1>Amanda Sasmi Hanifa</h1>
                        <p>Hai! Aku Amanda Sasmi Hanifa, lulusan S1 Biologi yang tertarik di bidang laboratorium, K3 dan kesehatan lingkungan. Suka belajar hal baru, detail-oriented, dan senang berkembang lewat pengalaman baru. Percaya bahwa science dan safety bisa jadi hal kecil yang memberi impact besar.</p>
                        <a href="https://wa.me/62859155186165" class="btn btn-primary" target="_blank" rel="noopener noreferrer" aria-label="Hubungi saya melalui WhatsApp">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M19.05 4.94A9.94 9.94 0 0 0 12.02 2c-5.5 0-9.97 4.47-9.97 9.98 0 1.76.46 3.47 1.33 4.98L2 22l5.2-1.36a9.95 9.95 0 0 0 4.81 1.23h.01c5.5 0 9.98-4.48 9.98-9.98 0-2.66-1.04-5.16-2.95-7.01Zm-7.03 15.24h-.01a8.3 8.3 0 0 1-4.23-1.16l-.3-.18-3.09.81.83-3.01-.2-.31a8.28 8.28 0 0 1-1.28-4.38c0-4.58 3.73-8.31 8.31-8.31 2.21 0 4.29.86 5.85 2.43a8.24 8.24 0 0 1 2.44 5.88c0 4.58-3.73 8.31-8.32 8.31Zm4.56-6.22c-.25-.12-1.48-.73-1.71-.81-.23-.08-.39-.12-.56.12-.17.25-.64.81-.79.98-.15.17-.29.19-.54.06-.25-.12-1.04-.38-1.98-1.22-.73-.65-1.23-1.45-1.37-1.7-.14-.25-.01-.38.11-.5.11-.11.25-.29.37-.44.12-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.12-.56-1.35-.77-1.85-.2-.48-.4-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.23.9 2.43 1.02 2.6.12.17 1.76 2.69 4.26 3.77.59.26 1.06.42 1.42.54.6.19 1.15.16 1.59.1.49-.07 1.48-.6 1.69-1.18.21-.58.21-1.08.15-1.18-.06-.1-.23-.17-.48-.29Z"/>
                            </svg>
                            <span>Kontak</span>
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
                    <h2>Tentang Saya</h2>
                </div>
                <div class="container about-grid animate">
                    <article class="about-copy">
                        <p>Halo! Saya Amanda Sasmi Hanifa, lulusan S1 Biologi yang memiliki ketertarikan pada bidang laboratorium, Keselamatan dan Kesehatan Kerja (K3) dan kesehatan lingkungan.</p>
                        <p>Selama masa perkuliahan, saya aktif dalam kegiatan praktikum, penelitian, dan aktivitas akademik yang membantu mengembangkan kemampuan analisis, komunikasi, serta problem solving. Saya juga pernah menjadi asisten dosen mata kuliah Keanekaragaman Hewan, sehingga terbiasa bekerja dalam tim, membimbing mahasiswa, dan mendukung pelaksanaan kegiatan praktikum secara terstruktur.</p>
                        <p>Saat ini, saya terus mengembangkan pengetahuan dan keterampilan di bidang K3, pengujian lingkungan kerja, serta administrasi laboratorium dan profesional. Saya memiliki ketertarikan untuk berkontribusi dalam menciptakan lingkungan kerja yang aman, sehat, dan produktif melalui pendekatan ilmiah, ketelitian, dan kemampuan adaptasi yang baik.</p>
                    </article>
                    <div class="about-visual">
                        <div class="about-portrait-accent" aria-hidden="true"></div>
                        <img class="about-portrait" src="{{ $imagePath('Foto 3.png') }}" alt="Foto Amanda Sasmi Hanifa" />
                    </div>
                </div>
            </section>

            <!-- Experience Section -->
            <section id="experience" class="section experience-section">
                <div class="container section-header animate">
                    <h2>Pengalaman</h2>
                </div>
                <div class="container timeline animate">
                    <div class="timeline-column">
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-card">
                                <span class="timeline-meta">Magang • 2025-2026</span>
                                <h3>Balai Keselamatan dan Kesehatan Kerja Surabaya</h3>
                                <ul class="timeline-list">
                                    <li>Melaksanakan pengujian faktor bahaya di lingkungan kerja dan ambien dengan parameter fisika dan kimia sesuai Permenaker No. 5 Tahun 2018 dan SNI yang berlaku.</li>
                                    <li>Menyusun lebih dari 15 Laporan Hasil Uji (LHU) dengan interpretasi kesesuaian terhadap NAB dan baku mutu lingkungan kerja.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-card">
                                <span class="timeline-meta">Proyek Penelitian Skripsi • 2024-2025</span>
                                <h3>Penelitian Single Aged Garlic</h3>
                                <ul class="timeline-list">
                                    <li>Melakukan penelitian evaluasi efektivitas Single Aged Garlic dalam memengaruhi kadar kolesterol dan trigliserida pada hewan mencit yang diberi pakan tinggi kalori.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-card">
                                <span class="timeline-meta">Proyek Riset • 2024</span>
                                <h3>Proyek Riset Kesehatan Lingkungan</h3>
                                <ul class="timeline-list">
                                    <li>Survei perilaku penggunaan pestisida dan APD dalam pengendalian hama serta keluhan kesehatan pada petani sayur di Desa Junrejo, Kota Batu.</li>
                                    <li>Analisis gangguan kesehatan penduduk di Kampung Heritage Kota Malang terkait kualitas udara indoor.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-card">
                                <span class="timeline-meta">Proyek Riset Teknik Analisis Biologi Molekuler • 2023</span>
                                <h3>Riset Biologi Molekuler</h3>
                                <ul class="timeline-list">
                                    <li>Isolasi dan identifikasi RNA pada sel hewan.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-column">
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-card">
                                <span class="timeline-meta">Asisten Dosen • 2025</span>
                                <h3>Universitas Negeri Malang</h3>
                                <ul class="timeline-list">
                                    <li>Membantu dosen dengan membimbing dan memimpin sesi praktik laboratorium untuk sekitar 120 mahasiswa, termasuk pengawasan keselamatan kerja di laboratorium.</li>
                                    <li>Menyiapkan bahan ajar, mempresentasikan konsep ilmiah yang kompleks, dan menilai pemahaman mahasiswa.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-card">
                                <span class="timeline-meta">Magang • 2024</span>
                                <h3>Dinas Lingkungan Hidup Kab. Nganjuk</h3>
                                <ul class="timeline-list">
                                    <li>Bekerja di laboratorium lingkungan dengan fokus pada persiapan sampel, pengambilan sampel, dan analisis data dengan parameter fisika, kimia, dan biologi.</li>
                                    <li>Proyek riset: Analisis kualitas limbah cair industri tekstil pada skala usaha mikro kecil menengah di UPTD Laboratorium Lingkungan Kabupaten Nganjuk.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-card">
                                <span class="timeline-meta">Proyek Riset Mikrobiologi • 2024</span>
                                <h3>Riset Mikrobiologi</h3>
                                <ul class="timeline-list">
                                    <li>Pembuatan yoghurt dengan sari wortel sebagai bahan dasar.</li>
                                    <li>Uji kualitas mikrobiologi makanan dalam kaleng berdasarkan angka lempeng total koloni bakteri.</li>
                                    <li>Pewarnaan gram dan pengukuran sel bakteri.</li>
                                    <li>Uji kualitas mikrobiologi air kemasan berdasarkan nilai MPN Coliform.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Skills Section -->
            <section id="skills" class="section skills-section light">
                <div class="container section-header animate">
                    <h2>Kemampuan</h2>
                </div>
                <div class="container skills-grid animate">
                    <div class="skill-group">
                        <h3>Keselamatan dan Kesehatan Kerja</h3>
                        <ul>
                            <li>Identifikasi Bahaya dan Risiko Kerja</li>
                            <li>Pengujian Faktor Bahaya Lingkungan Kerja</li>
                        </ul>
                    </div>
                    <div class="skill-group">
                        <h3>Laboratorium</h3>
                        <ul>
                            <li>Quality Control Laboratorium</li>
                            <li>Analisis Mikrobiologi</li>
                            <li>Isolasi RNA</li>
                            <li>Elektroforesis</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Certifications Section -->
            <section id="certifications" class="section certifications-section">
                <div class="container section-header animate">
                    <h2>Sertifikasi</h2>
                </div>
                <div class="container cert-cards animate">
                    <div class="cert-card">
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
                            <div class="cert-pill">{{ count($certificationCatalog['kemnaker']['certificates']) }} Sertifikat</div>
                            <a href="{{ route('certifications.show', 'kemnaker') }}">Lihat Sertifikat</a>
                        </div>
                    </div>
                    <div class="cert-card">
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
                            <div class="cert-pill">{{ count($certificationCatalog['bnsp']['certificates']) }} Sertifikat</div>
                            <a href="{{ route('certifications.show', 'bnsp') }}">Lihat Sertifikat</a>
                        </div>
                    </div>
                    <div class="cert-card">
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
                            <div class="cert-pill">{{ count($certificationCatalog['gnik']['certificates']) }} Sertifikat</div>
                            <a href="{{ route('certifications.show', 'gnik') }}">Lihat Sertifikat</a>
                        </div>
                    </div>
                    <div class="cert-card">
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
                            <div class="cert-pill">{{ count($certificationCatalog['makin-ahli']['certificates']) }} Sertifikat</div>
                            <a href="{{ route('certifications.show', 'makin-ahli') }}">Lihat Sertifikat</a>
                        </div>
                    </div>
                    <div class="cert-card">
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
                            <div class="cert-pill">{{ count($certificationCatalog['microsoft']['certificates']) }} Sertifikat</div>
                            <a href="{{ route('certifications.show', 'microsoft') }}">Lihat Sertifikat</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="section contact-section light">
                <div class="container section-header animate">
                    <h2>Kontak</h2>
                </div>
                <div class="container contact-grid animate">
                    <div class="contact-info">
                        <a class="contact-card contact-linkedin" href="http://www.linkedin.com/in/amandasasmihanifa" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn Amanda Sasmi Hanifa">
                            <span class="contact-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24">
                                    <path d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5ZM0 8.75h5v14.5H0v-14.5Zm7.5 0h4.8v2.08h.07c.67-1.27 2.3-2.61 4.73-2.61 5.06 0 6 3.34 6 7.68v8.35h-5V16.8c0-1.7-.03-3.9-2.38-3.9-2.38 0-2.74 1.85-2.74 3.76v8.09h-5V8.75Z" />
                                </svg>
                            </span>
                            <span class="contact-copy">
                                <strong>LinkedIn</strong>
                                <span>amandasasmihanifa</span>
                            </span>
                            <span class="contact-action">Buka Profil</span>
                        </a>
                        <a class="contact-card contact-whatsapp" href="https://wa.me/62859155186165" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp Amanda Sasmi Hanifa">
                            <span class="contact-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24">
                                    <path d="M19.05 4.94A9.94 9.94 0 0 0 12.02 2c-5.5 0-9.97 4.47-9.97 9.98 0 1.76.46 3.47 1.33 4.98L2 22l5.2-1.36a9.95 9.95 0 0 0 4.81 1.23h.01c5.5 0 9.98-4.48 9.98-9.98 0-2.66-1.04-5.16-2.95-7.01Zm-7.03 15.24h-.01a8.3 8.3 0 0 1-4.23-1.16l-.3-.18-3.09.81.83-3.01-.2-.31a8.28 8.28 0 0 1-1.28-4.38c0-4.58 3.73-8.31 8.31-8.31 2.21 0 4.29.86 5.85 2.43a8.24 8.24 0 0 1 2.44 5.88c0 4.58-3.73 8.31-8.32 8.31Zm4.56-6.22c-.25-.12-1.48-.73-1.71-.81-.23-.08-.39-.12-.56.12-.17.25-.64.81-.79.98-.15.17-.29.19-.54.06-.25-.12-1.04-.38-1.98-1.22-.73-.65-1.23-1.45-1.37-1.7-.14-.25-.01-.38.11-.5.11-.11.25-.29.37-.44.12-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.12-.56-1.35-.77-1.85-.2-.48-.4-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.23.9 2.43 1.02 2.6.12.17 1.76 2.69 4.26 3.77.59.26 1.06.42 1.42.54.6.19 1.15.16 1.59.1.49-.07 1.48-.6 1.69-1.18.21-.58.21-1.08.15-1.18-.06-.1-.23-.17-.48-.29Z" />
                                </svg>
                            </span>
                            <span class="contact-copy">
                                <strong>WhatsApp</strong>
                                <span>0859155186165</span>
                            </span>
                            <span class="contact-action">Chat Langsung</span>
                        </a>
                        <a class="contact-card contact-email" href="mailto:amandahanifa915@gmail.com" aria-label="Email Amanda Sasmi Hanifa">
                            <span class="contact-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24">
                                    <path d="M3 5.25A2.25 2.25 0 0 1 5.25 3h13.5A2.25 2.25 0 0 1 21 5.25v13.5A2.25 2.25 0 0 1 18.75 21H5.25A2.25 2.25 0 0 1 3 18.75V5.25Zm1.5.56v12.94c0 .414.336.75.75.75h13.5a.75.75 0 0 0 .75-.75V5.81l-7.5 5.1-7.5-5.1Zm1.69-.81 6.06 4.13 6.06-4.13H5.19Z" />
                                </svg>
                            </span>
                            <span class="contact-copy">
                                <strong>Email</strong>
                                <span>amandahanifa915@gmail.com</span>
                            </span>
                            <span class="contact-action">Kirim Email</span>
                        </a>
                    </div>
                </div>
            </section>
        </main>

        @include('partials.footer')

        <script src="/portfolio.js"></script>
    </body>
</html>
