<!DOCTYPE HTML>
<html lang="en" style="color-scheme: light;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KAP IA - Orange Theme</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
        }

        /* PRIMARY RED: #FF6600 */
        /* ACCENT SHADES: #FF781F | #FF8B3D | #FF9D5C | #FFAF7A */

        .bg-primary {
            background-color: #FF6600;
        }

        .bg-primary-dark {
            background-color: #FF781F;
        }

        .text-primary {
            color: #FF6600;
        }

        .text-accent {
            color: #FF8B3D;
        }

        .border-primary {
            border-color: #FF6600;
        }

        .btn-primary {
            background-color: #FF6600;
            color: white;
        }

        .btn-primary:hover {
            background-color: #FF781F;
        }

        .card-hover:hover h3 {
            color: #FFAF7A;
        }

        #nprogress .bar {
            background: #FF6600;
        }

        #nprogress .peg {
            box-shadow: 0 0 10px #FF6600, 0 0 5px #FF6600;
        }

        #nprogress .spinner-icon {
            border-top-color: #FF6600;
            border-left-color: #FF6600;
        }

        .wa-btn {
            background-color: #25d366;
        }

        .wa-btn:hover {
            background-color: #128c7e;
        }
    </style>
</head>

<body class="font-sans antialiased bg-white">

    <!-- INCLUDE HEADER DARI FOLDER header dan footer -->
    <?php include 'header dan footer/header.php'; ?>

    <!-- HERO -->
    <div style="background-color: #FF6600;" class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center py-10 lg:py-16">
            <div>
                <h1 class="block text-3xl font-bold text-gray-800 mt-2 sm:text-4xl lg:text-6xl lg:leading-tight">Kantor
                    Akuntan Publik IA
                </h1>
                <p class="mt-3 text-lg text-gray-800">Menyajikan Layanan Audit Independen dan Profesional demi Keandalan
                    Laporan Keuangan serta Kepatuhan terhadap Standar Akuntansi</p>
                <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                    <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50"
                        href="kontak.php">Contact Us</a>
                </div>
            </div>
            <div class="relative ms-4">
                <div class="w-full rounded-md bg-white/20 h-64 flex items-center justify-center">
                    <span class="text-white text-opacity-60 text-sm">[Hero Image]</span>
                </div>
            </div>
        </div>
    </div>

    <!-- WHAT WE DO -->
    <div class="py-5 md:py-8 lg:py-10 bg-white">
        <div class="px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
            <div class="pt-10 md:p-10">
                <blockquote class="max-w-screen-xl mx-auto">
                    <p class="font-semibold text-lg mb-6 md:text-xl" style="color: #FF8B3D;">WHAT WE DO</p>
                    <footer class="mt-6 md:mt-10">
                        <div class="grid grid-cols-3 sm:grid-cols-3 gap-2 lg:gap-3">
                            <a class="p-4 group flex flex-col bg-white border border-gray-100 shadow-sm rounded-lg hover:shadow-md focus:outline-none"
                                href="jasaLayanan.php">
                                <div class="mb-4 flex flex-col justify-center items-center h-32 bg-gray-100 rounded-md">
                                    <span class="text-gray-400 text-xs">[Audit Image]</span>
                                </div>
                                <div class="text-center mt-auto">
                                    <p class="truncate text-xs xl:text-lg font-medium text-gray-800 group-hover:transition-colors"
                                        style="transition: color 0.2s;" onmouseover="this.style.color='#FFAF7A'"
                                        onmouseout="this.style.color='#1f2937'">GENERAL AUDIT</p>
                                </div>
                            </a>
                            <a class="p-4 group flex flex-col bg-white border border-gray-100 shadow-sm rounded-lg hover:shadow-md focus:outline-none"
                                href="jasaLayanan.php">
                                <div class="mb-4 flex flex-col justify-center items-center h-32 bg-gray-100 rounded-md">
                                    <span class="text-gray-400 text-xs">[Non Assurance Image]</span>
                                </div>
                                <div class="text-center mt-auto">
                                    <p class="truncate text-xs xl:text-lg font-medium text-gray-800"
                                        onmouseover="this.style.color='#FFAF7A'"
                                        onmouseout="this.style.color='#1f2937'">SPECIAL AUDIT</p>
                                </div>
                            </a>
                            <a class="p-4 group flex flex-col bg-white border border-gray-100 shadow-sm rounded-lg hover:shadow-md focus:outline-none"
                                href="jasaLayanan.php">
                                <div class="mb-4 flex flex-col justify-center items-center h-32 bg-gray-100 rounded-md">
                                    <span class="text-gray-400 text-xs">[Accounting Image]</span>
                                </div>
                                <div class="text-center mt-auto">
                                    <p class="truncate text-xs xl:text-lg font-medium text-gray-800"
                                        onmouseover="this.style.color='#FFAF7A'"
                                        onmouseout="this.style.color='#1f2937'">JASA KONSULTASI PERPAJAKAN</p>
                                </div>
                            </a>
                        </div>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>

    <!-- WHY KAP IA -->
    <div class="bg-gray-50 py-14">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-4xl font-bold text-gray-800">Kenapa Harus Memilih KAP <span
                        style="color: #FF8B3D;">IA</span>?</h2>
                <p class="mt-3 text-gray-600 max-w-2xl mx-auto">Kami memberikan layanan profesional dengan integritas,
                    pengalaman, dan dedikasi penuh terhadap kebutuhan klien kami.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div
                    class="bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 p-8 text-center">
                    <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-full text-2xl"
                        style="background-color: rgba(255,139,61,0.10); color: #FF8B3D;">💼</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Profesional dan Berpengalaman</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Tim kami terdiri dari akuntan publik bersertifikat
                        dengan pengalaman luas di bidang audit, pajak, dan konsultasi keuangan.</p>
                </div>
                <div
                    class="bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 p-8 text-center">
                    <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-full text-2xl"
                        style="background-color: rgba(255,139,61,0.10); color: #FF8B3D;">🤝</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Komitmen Terhadap Klien</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Kami berfokus pada kebutuhan unik setiap klien dan
                        berkomitmen memberikan solusi akurat dan tepat waktu.</p>
                </div>
                <div
                    class="bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 p-8 text-center">
                    <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-full text-2xl"
                        style="background-color: rgba(255,139,61,0.10); color: #FF8B3D;">🌱</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Integritas dan Kepercayaan</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Kami menjunjung tinggi nilai integritas dan
                        transparansi sebagai fondasi utama hubungan jangka panjang dengan klien.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- NEWS SECTION -->
    <div class="max-w-full mx-auto bg-gray-50">
        <div class="max-w-screen-xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="max-w-2xl text-center mx-auto mb-10 lg:mb-14">
                <h2 class="text-2xl font-bold text-gray-800 md:text-4xl md:leading-tight">Read our latest news</h2>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10 lg:mb-14">

                <!-- News Card 1 -->
                <div
                    class="group flex flex-col bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md transition">
                    <div
                        class="w-full aspect-video overflow-hidden rounded-t-xl bg-gray-100 flex items-center justify-center">
                        <span class="text-gray-400 text-xs text-center p-2">[News Image 1]</span>
                    </div>
                    <div class="p-4 md:p-5 flex flex-col flex-grow">
                        <div class="flex justify-between items-center mb-2">
                            <div class="flex items-center gap-x-1 text-xs text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" style="color: #FF9D5C;">
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                    <path d="M3 10h18"></path>
                                </svg>
                                <span class="font-medium">26 Mei 2026</span>
                            </div>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2 group-hover:transition-colors"
                            style="transition: color 0.2s;" onmouseover="this.style.color='#FFAF7A'"
                            onmouseout="this.style.color='#1f2937'">MERINTIS, BERTAHAN, BERTUMBUH : TIGA TAHUN
                            PERJALANAN KAP IA</h3>
                        <div class="text-sm text-gray-600">
                            <p>Makassar, 26 Mei 2026, dalam perjalanan sebuah institusi profesional, waktu tidak sekadar
                                diukur dalam satuan tahun...</p>
                        </div>
                    </div>
                    <a class="mt-auto mb-4 mx-4 flex justify-center items-center gap-x-1.5 px-6 py-2 text-sm font-medium text-white rounded-lg shadow-sm hover:shadow-md transition-all duration-200"
                        style="background-color: #FF6600;" onmouseover="this.style.backgroundColor='#FF781F'"
                        onmouseout="this.style.backgroundColor='#FF6600'" href="beritaLingkup.php">
                        Read More
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <!-- News Card 2 -->
                <div
                    class="group flex flex-col bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md transition">
                    <div
                        class="w-full aspect-video overflow-hidden rounded-t-xl bg-gray-100 flex items-center justify-center">
                        <span class="text-gray-400 text-xs text-center p-2">[News Image 2]</span>
                    </div>
                    <div class="p-4 md:p-5 flex flex-col flex-grow">
                        <div class="flex justify-between items-center mb-2">
                            <div class="flex items-center gap-x-1 text-xs text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" style="color: #FF9D5C;">
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                    <path d="M3 10h18"></path>
                                </svg>
                                <span class="font-medium">25 Mei 2026</span>
                            </div>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2" onmouseover="this.style.color='#FFAF7A'"
                            onmouseout="this.style.color='#1f2937'">PENTINGNYA AUDIT LAPORAN KEUANGAN BAGI PERUSAHAAN
                            KOMERSIAL</h3>
                        <div class="text-sm text-gray-600">
                            <p>Makassar 25 Mei 2026 - Dalam perkembangan dunia usaha modern, audit laporan keuangan
                                telah menjadi bagian yang sangat penting...</p>
                        </div>
                    </div>
                    <a class="mt-auto mb-4 mx-4 flex justify-center items-center gap-x-1.5 px-6 py-2 text-sm font-medium text-white rounded-lg shadow-sm hover:shadow-md transition-all duration-200"
                        style="background-color: #FF6600;" onmouseover="this.style.backgroundColor='#FF781F'"
                        onmouseout="this.style.backgroundColor='#FF6600'" href="beritaLingkup.php">
                        Read More
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <!-- News Card 3 -->
                <div
                    class="group flex flex-col bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md transition">
                    <div
                        class="w-full aspect-video overflow-hidden rounded-t-xl bg-gray-100 flex items-center justify-center">
                        <span class="text-gray-400 text-xs text-center p-2">[News Image 3]</span>
                    </div>
                    <div class="p-4 md:p-5 flex flex-col flex-grow">
                        <div class="flex justify-between items-center mb-2">
                            <div class="flex items-center gap-x-1 text-xs text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" style="color: #FF9D5C;">
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                    <path d="M3 10h18"></path>
                                </svg>
                                <span class="font-medium">05 Mei 2026</span>
                            </div>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2" onmouseover="this.style.color='#FFAF7A'"
                            onmouseout="this.style.color='#1f2937'">Pentingnya Audit bagi BLUD : Meningkatkan
                            Akuntabilitas, Transparansi, dan Profesionalisme bersama KAP IA</h3>
                        <div class="text-sm text-gray-600">
                            <p>Makassar, 05 Mei 2026 - Badan Layanan Umum Daerah (BLUD) merupakan entitas strategis
                                dalam penyediaan layanan publik...</p>
                        </div>
                    </div>
                    <a class="mt-auto mb-4 mx-4 flex justify-center items-center gap-x-1.5 px-6 py-2 text-sm font-medium text-white rounded-lg shadow-sm hover:shadow-md transition-all duration-200"
                        style="background-color: #FF6600;" onmouseover="this.style.backgroundColor='#FF781F'"
                        onmouseout="this.style.backgroundColor='#FF6600'" href="beritaLingkup.php">
                        Read More
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <!-- News Card 4 -->
                <div
                    class="group flex flex-col bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md transition">
                    <div
                        class="w-full aspect-video overflow-hidden rounded-t-xl bg-gray-100 flex items-center justify-center">
                        <span class="text-gray-400 text-xs text-center p-2">[News Image 4]</span>
                    </div>
                    <div class="p-4 md:p-5 flex flex-col flex-grow">
                        <div class="flex justify-between items-center mb-2">
                            <div class="flex items-center gap-x-1 text-xs text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" style="color: #FF9D5C;">
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                    <path d="M3 10h18"></path>
                                </svg>
                                <span class="font-medium">01 Mei 2026</span>
                            </div>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2" onmouseover="this.style.color='#FFAF7A'"
                            onmouseout="this.style.color='#1f2937'">Auditor dan Realitas Baru Dunia Kerja: Refleksi Hari
                            Buruh Internasional 2026</h3>
                        <div class="text-sm text-gray-600">
                            <p>Makassar, 1 Mei 2026 — Peringatan Hari Buruh Internasional tidak hanya menjadi milik
                                pekerja sektor manufaktur...</p>
                        </div>
                    </div>
                    <a class="mt-auto mb-4 mx-4 flex justify-center items-center gap-x-1.5 px-6 py-2 text-sm font-medium text-white rounded-lg shadow-sm hover:shadow-md transition-all duration-200"
                        style="background-color: #FF6600;" onmouseover="this.style.backgroundColor='#FF781F'"
                        onmouseout="this.style.backgroundColor='#FF6600'" href="beritaLingkup.php">
                        Read More
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

            </div>
            <div class="text-center">
                <div class="inline-block bg-white border border-gray-200 shadow-sm rounded-full">
                    <div class="py-3 px-4 flex items-center gap-x-2">
                        <p class="text-gray-600">Want to read more?</p>
                        <a class="inline-flex items-center gap-x-1.5 decoration-2 hover:underline font-medium"
                            style="color: #FF6600;" href="beritaLingkup.php">Go here
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MITRA -->
    <div class="max-w-full">
        <div class="max-w-screen-xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <p class="font-semibold text-center text-lg mb-6 md:text-2xl" style="color: #FF8B3D;">Mitra</p>
            <div class="relative overflow-hidden py-6">
                <div class="flex flex-wrap justify-center items-center gap-x-10 gap-y-6">
                    <div class="flex w-24 md:w-40 items-center justify-center">
                        <img alt="IAPI" class="h-full w-auto object-contain"
                            src="COMPANY PROFILE 2025 KAP IA/logo IAPI.webp"
                            onerror="this.outerHTML='<span class=\'font-bold text-gray-700\'>IAPI</span>'">
                    </div>
                    <div class="flex w-24 md:w-40 items-center justify-center">
                        <img alt="BPK" class="h-full w-auto object-contain"
                            src="COMPANY PROFILE 2025 KAP IA/logo BPK.jpg"
                            onerror="this.outerHTML='<span class=\'font-bold text-gray-700\'>BPK</span>'">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- WA BUTTON -->
    <a href="https://wa.me/62811466551" target="_blank" rel="noopener noreferrer"
        class="fixed bottom-20 right-6 z-50 flex items-center justify-center w-12 h-12 rounded-full text-white shadow-lg transition-all duration-300 hover:scale-105"
        style="background-color: #25d366;" onmouseover="this.style.backgroundColor='#128c7e'"
        onmouseout="this.style.backgroundColor='#25d366'" aria-label="Chat via WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-6 h-6"
            viewBox="0 0 16 16">
            <path
                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232">
            </path>
        </svg>
    </a>

    <!-- INCLUDE FOOTER DARI FOLDER header dan footer -->
    <?php include 'header dan footer/footer.php'; ?>

</body>

</html>