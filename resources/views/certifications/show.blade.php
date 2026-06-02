<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-page-title-in="{{ $provider['name'] }} | Sertifikasi Amanda" data-page-title-en="{{ $provider['name'] }} | Amanda Certifications">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $provider['name'] }} | Sertifikasi Amanda</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/portfolio.css">
    </head>
    <body>
        @php
            $imagePath = static fn (string $file): string => '/images/' . rawurlencode($file);
            $firstCertificate = $provider['certificates'][0];
        @endphp

        @include('partials.navbar')

        <main>
            <section class="section certifications-section cert-page">
                <div class="container cert-page-head animate visible">
                    <div class="cert-page-intro">
                        <p class="cert-page-label" data-lang-in="Galeri Sertifikasi" data-lang-en="Certification Gallery">Certification Gallery</p>
                        <h1 data-lang-in="Sertifikat {{ $provider['name'] }}" data-lang-en="{{ $provider['name'] }} Certificates">Sertifikat {{ $provider['name'] }}</h1>
                        <p class="cert-page-description" data-lang-in="Halaman ini menampilkan sertifikat {{ $provider['name'] }} dalam format preview. Pilih dokumen dari daftar, lalu tinjau PDF-nya langsung di halaman ini." data-lang-en="This page displays {{ $provider['name'] }} certificates in preview format. Select a document from the list, then review its PDF directly on this page.">
                            Halaman ini menampilkan sertifikat {{ $provider['name'] }} dalam format preview. Pilih dokumen dari daftar, lalu tinjau PDF-nya langsung di halaman ini.
                        </p>
                    </div>
                    <a href="{{ route('home') }}#certifications" class="cert-page-back" data-lang-in="Kembali ke Sertifikasi" data-lang-en="Back to Certifications">Kembali ke Sertifikasi</a>
                </div>

                <div class="container cert-detail animate visible">
                    <div class="cert-detail-shell">
                        <div class="cert-detail-list">
                            <p class="cert-detail-label" data-lang-in="Daftar Sertifikat" data-lang-en="Certificate List">Daftar Sertifikat</p>
                            @foreach ($provider['certificates'] as $index => $certificate)
                                <button
                                    type="button"
                                    class="cert-detail-item{{ $loop->first ? ' active' : '' }}"
                                    data-cert-preview="{{ $imagePath($certificate['file']) }}"
                                    data-cert-title="{{ $certificate['title'] }}"
                                    data-cert-subtitle="{{ $provider['name'] }} • {{ $certificate['subtitle'] }}"
                                >
                                    <span class="cert-detail-number">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span>
                                    <span class="cert-detail-text">
                                        <strong>{{ $certificate['title'] }}</strong>
                                        <span>{{ $certificate['subtitle'] }}</span>
                                    </span>
                                </button>
                            @endforeach
                        </div>

                        <div class="cert-detail-preview">
                            <div class="cert-preview-frame-wrap" data-cert-preview="{{ $imagePath($firstCertificate['file']) }}">
                                <iframe
                                    id="cert-preview-frame"
                                    class="cert-preview-frame"
                                    title="Preview Sertifikat {{ $provider['name'] }}"
                                    loading="lazy"
                                ></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        @include('partials.footer')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
        <script>
            if (window.pdfjsLib) {
                window.pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';
            }
        </script>
        <script src="/portfolio.js"></script>
    </body>
</html>
