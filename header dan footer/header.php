<?php
// Tentukan halaman aktif. Set $activePage di file pemanggil SEBELUM melakukan include.
// Contoh di index.php:   $activePage = 'home';  include 'header dan footer/header.php';
if (!isset($activePage)) {
    $activePage = '';
}

function navClass($key, $activePage)
{
    return $key === $activePage
        ? "inline-block text-sm font-medium transition-colors underline underline-offset-4 decoration-2"
        : "inline-block text-sm font-medium transition-colors text-black hover:text-gray-600";
}

function navStyle($key, $activePage)
{
    return $key === $activePage ? "color: #FF8B3D;" : "";
}
?>
<!DOCTYPE HTML>
<html lang="id" style="color-scheme: light;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) . ' - KAP Ishak Awaluddin' : 'KAP Ishak Awaluddin'; ?>
    </title>
    <?php if (isset($pageDescription)): ?>
        <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <?php endif; ?>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
        }

        .text-primary {
            color: #FF6600;
        }

        .text-accent {
            color: #FF8B3D;
        }

        .bg-primary {
            background-color: #FF6600;
        }

        .wa-btn {
            background-color: #25d366;
        }

        .wa-btn:hover {
            background-color: #128c7e;
        }
    </style>
    <?php if (isset($extraHead)) {
        echo $extraHead;
    } ?>
</head>

<body class="font-sans antialiased bg-white">

    <!-- TOP BAR -->
    <div style="background-color: #FF6600;" class="p-2 transition duration-300">
        <div class="max-w-screen-xl px-4 sm:px-6 lg:px-8 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-2">
                <div class="flex justify-center md:justify-start items-center gap-x-6 text-white">
                    <a href="https://wa.me/62811466551" target="_blank"
                        class="inline-flex items-center gap-x-2 hover:underline decoration-2 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                        <span class="text-sm">0811-466-551</span>
                    </a>
                    <a href="mailto:kapishak.makassar@gmail.com" target="_blank"
                        class="inline-flex items-center gap-x-2 hover:underline decoration-2 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                        </svg>
                        <span class="text-sm">kapishak.makassar@gmail.com</span>
                    </a>
                </div>
                <div class="flex justify-center md:justify-end items-center gap-x-4 text-white">
                    <a href="https://www.linkedin.com/in/kantor-akuntan-publik-ishak-88b058317" target="_blank"
                        class="hover:text-gray-200 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                            </path>
                            <rect width="4" height="12" x="2" y="9"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/kap_ishak/" target="_blank"
                        class="hover:text-gray-200 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
    <header class="flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full py-7 bg-white shadow-sm">
        <nav
            class="relative max-w-7xl w-full flex flex-wrap lg:grid lg:grid-cols-12 basis-full items-center px-4 md:px-6 lg:px-8 mx-auto">
            <div class="lg:col-span-3 flex items-center">
                <a class="flex-none rounded-xl text-xl inline-block font-semibold" href="index.php">
                    <span class="text-2xl font-bold" style="color: #FF6600;">KAP <span
                            style="color: #FF8B3D;">ISHAK</span></span>
                </a>
            </div>
            <div class="flex items-center gap-x-1 lg:gap-x-2 ms-auto py-1 lg:ps-6 lg:order-3 lg:col-span-3">
                <div class="lg:hidden">
                    <button id="mobile-menu-toggle" type="button"
                        class="size-9 flex justify-center items-center text-sm font-semibold rounded-xl border border-gray-200 text-black hover:bg-gray-100">
                        <svg id="icon-open" class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6"></line>
                            <line x1="3" x2="21" y1="12" y2="12"></line>
                            <line x1="3" x2="21" y1="18" y2="18"></line>
                        </svg>
                        <svg id="icon-close" class="shrink-0 size-4 hidden" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="mobile-menu" class="hidden w-full lg:block lg:w-auto lg:basis-auto lg:order-2 lg:col-span-6">
                <div
                    class="flex flex-col gap-y-4 gap-x-0 mt-5 pb-4 lg:pb-0 lg:flex-row lg:justify-center lg:items-center lg:gap-y-0 lg:gap-x-5 lg:mt-0">
                    <a class="<?php echo navClass('home', $activePage); ?>"
                        style="<?php echo navStyle('home', $activePage); ?>" href="index.php">Home</a>
                    <a class="<?php echo navClass('about', $activePage); ?>"
                        style="<?php echo navStyle('about', $activePage); ?>" href="tentangKami.php">About Us</a>
                    <a class="<?php echo navClass('news', $activePage); ?>"
                        style="<?php echo navStyle('news', $activePage); ?>" href="beritaLingkup.php">News</a>
                    <a class="<?php echo navClass('client', $activePage); ?>"
                        style="<?php echo navStyle('client', $activePage); ?>" href="klienKami.php">Our Client</a>
                    <a class="<?php echo navClass('services', $activePage); ?>"
                        style="<?php echo navStyle('services', $activePage); ?>" href="jasaLayanan.php">Services</a>
                    <a class="<?php echo navClass('pengalaman', $activePage); ?>"
                        style="<?php echo navStyle('pengalaman', $activePage); ?>" href="Pengalaman.php">Pengalaman</a>
                    <a class="<?php echo navClass('gallery', $activePage); ?>"
                        style="<?php echo navStyle('gallery', $activePage); ?>" href="galeri.php">Gallery</a>
                    <a class="<?php echo navClass('contact', $activePage); ?>"
                        style="<?php echo navStyle('contact', $activePage); ?>" href="kontak.php">Contact Us</a>
                </div>
            </div>
        </nav>
    </header>