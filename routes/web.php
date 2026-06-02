<?php

use Illuminate\Support\Facades\Route;

$certificationCatalog = [
    'kemnaker' => [
        'name' => 'Kemnaker',
        'organization' => 'Kementerian Ketenagakerjaan RI',
        'logo' => 'Kemnaker.png',
        'certificates' => [
            [
                'title' => 'MagangHub',
                'subtitle' => 'Program Magang Bersertifikat',
                'file' => 'MagangHub.pdf',
            ],
            [
                'title' => 'Petugas Penguji Lingkungan Kerja',
                'subtitle' => 'Balai K3 Surabaya',
                'file' => 'PCU - Amanda Sasmi Hanifa (1).pdf',
            ],
        ],
    ],
    'bnsp' => [
        'name' => 'BNSP',
        'organization' => 'Badan Nasional Sertifikasi Profesi',
        'logo' => 'BNSP.png',
        'certificates' => [
            [
                'title' => 'Sertifikat BNSP Digital Marketing',
                'subtitle' => 'Sertifikasi Profesi Digital Marketing',
                'file' => 'Sertifikat BNSP Digital Marketing.pdf',
            ],
        ],
    ],
    'gnik' => [
        'name' => 'GNIK',
        'organization' => 'Gerakan Nasional Indonesia Kompeten',
        'logo' => 'GNIK.jpg',
        'certificates' => [
            [
                'title' => 'Adaptability',
                'subtitle' => 'Essential Skills Certificate',
                'file' => 'Adaptability.pdf',
            ],
            [
                'title' => 'Design Thinking',
                'subtitle' => 'Essential Skills Certificate',
                'file' => 'Design Thinking.pdf',
            ],
            [
                'title' => 'Digital Disruption & Transformation',
                'subtitle' => 'Essential Skills Certificate',
                'file' => 'Digital Disruption & Transformation.pdf',
            ],
            [
                'title' => 'Digital Literacy',
                'subtitle' => 'Essential Skills Certificate',
                'file' => 'Digital Literacy.pdf',
            ],
            [
                'title' => 'Emotional Intelligence',
                'subtitle' => 'Essential Skills Certificate',
                'file' => 'Emotional Intelligence.pdf',
            ],
            [
                'title' => 'Emotional Resilience',
                'subtitle' => 'Essential Skills Certificate',
                'file' => 'Emotional Resilience.pdf',
            ],
            [
                'title' => 'Integrity at Work',
                'subtitle' => 'Essential Skills Certificate',
                'file' => 'Integrity at Work.pdf',
            ],
            [
                'title' => 'Social Influence',
                'subtitle' => 'Essential Skills Certificate',
                'file' => 'Social Influence.pdf',
            ],
        ],
    ],
    'makin-ahli' => [
        'name' => 'Makin Ahli',
        'organization' => 'Pelatihan Regulasi dan Standar Industri',
        'logo' => 'Makin Ahli.png',
        'certificates' => [
            [
                'title' => 'Regulasi SNI',
                'subtitle' => 'Pelatihan Makin Ahli',
                'file' => 'Makin Ahli_Regulasi SNI.pdf',
            ],
        ],
    ],
    'microsoft' => [
        'name' => 'Microsoft',
        'organization' => 'Microsoft Office dan Produktivitas Digital',
        'logo' => 'Microsoft.png',
        'certificates' => [
            [
                'title' => 'Microsoft Office',
                'subtitle' => 'Produktivitas Digital',
                'file' => 'Sertifikat Microsotf Office.pdf',
            ],
        ],
    ],
];

Route::get('/', function () use ($certificationCatalog) {
    return view('welcome', [
        'certificationCatalog' => $certificationCatalog,
    ]);
})->name('home');

Route::get('/sertifikasi/{provider}', function (string $provider) use ($certificationCatalog) {
    abort_unless(array_key_exists($provider, $certificationCatalog), 404);

    return view('certifications.show', [
        'providerKey' => $provider,
        'provider' => $certificationCatalog[$provider],
    ]);
})->name('certifications.show');
