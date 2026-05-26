<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Amanda Portfolio') }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('portfolio.css') }}">
    </head>
    <body>
        @include('partials.navbar')

        <main>
            <!-- Hero Section -->
            <section id="hero" class="hero section-hero">
                <div class="container hero-grid">
                    <div class="hero-copy animate">
                        <h1>Amanda Sasmi Hanifa</h1>
                        <p>Hai! Aku Amanda Sasmi Hanifa, lulusan S1 Biologi yang tertarik di bidang laboratorium, K3 dan kesehatan lingkungan. Suka belajar hal baru, detail-oriented, dan senang berkembang lewat pengalaman baru. Percaya bahwa science dan safety bisa jadi hal kecil yang memberi impact besar.</p>
                        <a href="#contact" class="btn btn-primary">Hubungi Saya</a>
                    </div>
                    <div class="hero-visual animate">
                        <div class="profile-frame">
                            <div class="avatar-slider" aria-label="Slider foto profil">
                                <img class="avatar-slide avatar-slide-photo-1 active" src="{{ asset('images/Foto 1.png') }}" alt="Foto profil 1" />
                                <img class="avatar-slide" src="{{ asset('images/Foto 2.png') }}" alt="Foto profil 2" />
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
                        <div class="bio-shape"></div>
                        <div class="bio-icon">DNA</div>
                    </div>
                </div>
            </section>

            <!-- Experience Section -->
            <section id="experience" class="section experience-section">
                <div class="container section-header animate">
                    <h2>Pengalaman</h2>
                </div>
                <div class="container timeline animate">
                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-card">
                            <span class="timeline-meta">Asisten Laboratorium • 2023</span>
                            <h3>Asisten Laboratorium</h3>
                            <p>Bekerja di laboratorium bioteknologi dengan fokus pada persiapan sampel dan analisis data dasar.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-card">
                            <span class="timeline-meta">Proyek Riset • 2024</span>
                            <h3>Proyek Riset Molekuler</h3>
                            <p>Mengelola eksperimen PCR dan interpretasi hasil untuk studi seluler kecil.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-card">
                            <span class="timeline-meta">Magang • 2022</span>
                            <h3>Magang di Institusi Biologi</h3>
                            <p>Terlibat dalam observasi lapangan ekologi dan dokumentasi penelitian yang terstruktur.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-card">
                            <span class="timeline-meta">Komunitas Sains • 2024</span>
                            <h3>Organisasi Komunitas Sains</h3>
                            <p>Memimpin kolaborasi acara edukasi dan diskusi topik biologi modern untuk generasi muda.</p>
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
                        <h3>Keahlian Biologi</h3>
                        <ul>
                            <li>Microscopy</li>
                            <li>PCR &amp; Analisis Genetik</li>
                            <li>Cell Culture</li>
                            <li>Data Analysis Biologi</li>
                        </ul>
                    </div>
                    <div class="skill-group">
                        <h3>Keahlian Tambahan</h3>
                        <ul>
                            <li>Data Visualization</li>
                            <li>Scientific Writing</li>
                            <li>Programming Python</li>
                            <li>Komunikasi Digital</li>
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
                        <h3>Fundamentals of Molecular Biology</h3>
                        <span>Institusi Biologi Modern • 2023</span>
                        <a href="#contact">Lihat Sertifikat</a>
                    </div>
                    <div class="cert-card">
                        <h3>Research Methods in Ecology</h3>
                        <span>Academia Gen Z • 2024</span>
                        <a href="#contact">Lihat Sertifikat</a>
                    </div>
                    <div class="cert-card">
                        <h3>Data Science for Biology</h3>
                        <span>BioTech Institute • 2024</span>
                        <a href="#contact">Lihat Sertifikat</a>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="section contact-section light">
                <div class="container section-header animate">
                    <h2>Hubungi Saya</h2>
                </div>
                <div class="container contact-grid animate">
                    <form class="contact-form" action="#" method="post">
                        <label>
                            <span>Nama</span>
                            <input type="text" placeholder="Masukkan nama" required />
                        </label>
                        <label>
                            <span>Email</span>
                            <input type="email" placeholder="email@domain.com" required />
                        </label>
                        <label>
                            <span>Pesan</span>
                            <textarea rows="5" placeholder="Tulis pesan Anda" required></textarea>
                        </label>
                        <button type="submit" class="btn btn-secondary">Kirim Pesan</button>
                    </form>
                    <div class="contact-info">
                        <p>Senang bertemu dengan Anda secara virtual. Silakan kirim pesan atau temukan saya melalui profil profesional berikut.</p>
                        <div class="social-links">
                            <a href="mailto:email@domain.com" aria-label="Email">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M3 5.25A2.25 2.25 0 0 1 5.25 3h13.5A2.25 2.25 0 0 1 21 5.25v13.5A2.25 2.25 0 0 1 18.75 21H5.25A2.25 2.25 0 0 1 3 18.75V5.25Zm1.5.56v12.94c0 .414.336.75.75.75h13.5a.75.75 0 0 0 .75-.75V5.81l-7.5 5.1-7.5-5.1Zm1.69-.81 6.06 4.13 6.06-4.13H5.19Z" />
                                </svg>
                            </a>
                            <a href="#contact" aria-label="LinkedIn">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5ZM0 8.75h5v14.5H0v-14.5Zm7.5 0h4.8v2.08h.07c.67-1.27 2.3-2.61 4.73-2.61 5.06 0 6 3.34 6 7.68v8.35h-5V16.8c0-1.7-.03-3.9-2.38-3.9-2.38 0-2.74 1.85-2.74 3.76v8.09h-5V8.75Z" />
                                </svg>
                            </a>
                            <a href="#contact" aria-label="Instagram">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5ZM12 7.15a4.85 4.85 0 1 1 0 9.7 4.85 4.85 0 0 1 0-9.7Zm6.88-.85a1.13 1.13 0 1 1 0 2.25 1.13 1.13 0 0 1 0-2.25ZM12 9.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        @include('partials.footer')

        <script src="{{ asset('portfolio.js') }}"></script>
    </body>
</html>
