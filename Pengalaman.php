<?php
$activePage = 'pengalaman';
$pageTitle = 'Pengalaman';
$pageDescription = 'Rekam jejak pengalaman dan portofolio KAP Ishak Awaluddin dalam bidang audit, akuntansi, dan konsultasi keuangan di Makassar dan seluruh Indonesia.';

// CSS khusus halaman ini, akan dicetak di dalam <head> oleh header.php
$extraHead = <<<HTML
<style>
    @keyframes countUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .stat-card { animation: countUp 0.6s ease forwards; }
    .sector-card { transition: all 0.3s ease; }
    .sector-card:hover { transform: translateY(-4px); box-shadow: 0 12px 40px rgba(255, 102, 0, 0.15); }
    .sector-card:hover .sector-icon { background-color: #FF6600 !important; color: white !important; }
    .progress-bar { width: 0%; transition: width 1.2s ease; }
    .tab-btn.active { background-color: #FF6600; color: white; border-color: #FF6600; }
</style>
HTML;

include 'header dan footer/header.php';
?>

<!-- PAGE HERO -->
<div style="background: linear-gradient(135deg, #FF6600 0%, #FF8B3D 60%, #FFAF7A 100%);"
    class="py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-screen-xl mx-auto text-center">
        <p class="text-white/80 font-semibold text-sm uppercase tracking-widest mb-3">Rekam Jejak Kami</p>
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">Pengalaman &amp; Portofolio</h1>
        <p class="text-white/90 text-lg md:text-xl max-w-2xl mx-auto">
            Lebih dari satu dekade memberikan jasa audit dan konsultasi profesional kepada ratusan klien di seluruh
            Indonesia.
        </p>
    </div>
</div>

<!-- STATISTIK UTAMA -->
<div class="bg-white py-14">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div
                class="stat-card bg-gray-50 rounded-2xl p-8 text-center border border-gray-100 hover:shadow-lg transition-all duration-300">
                <div class="text-4xl md:text-5xl font-bold mb-2" style="color: #FF6600;"><span class="counter"
                        data-target="300">0</span>+</div>
                <p class="text-gray-600 font-medium text-sm mt-1">Klien Dilayani</p>
            </div>
            <div
                class="stat-card bg-gray-50 rounded-2xl p-8 text-center border border-gray-100 hover:shadow-lg transition-all duration-300">
                <div class="text-4xl md:text-5xl font-bold mb-2" style="color: #FF6600;"><span class="counter"
                        data-target="10">0</span>+</div>
                <p class="text-gray-600 font-medium text-sm mt-1">Tahun Pengalaman</p>
            </div>
            <div
                class="stat-card bg-gray-50 rounded-2xl p-8 text-center border border-gray-100 hover:shadow-lg transition-all duration-300">
                <div class="text-4xl md:text-5xl font-bold mb-2" style="color: #FF6600;"><span class="counter"
                        data-target="15">0</span>+</div>
                <p class="text-gray-600 font-medium text-sm mt-1">Sektor Industri</p>
            </div>
            <div
                class="stat-card bg-gray-50 rounded-2xl p-8 text-center border border-gray-100 hover:shadow-lg transition-all duration-300">
                <div class="text-4xl md:text-5xl font-bold mb-2" style="color: #FF6600;"><span class="counter"
                        data-target="5">0</span></div>
                <p class="text-gray-600 font-medium text-sm mt-1">Provinsi Cakupan</p>
            </div>
        </div>
    </div>
</div>

<!-- (Bagian Tabs Sektor, Timeline, Kompetensi tetap sama seperti file aslinya -->
<!-- silakan salin dari Pengalaman.php sebelumnya, hanya bagian <head> s.d. </header> -->
<!-- dan bagian footer/WA/script yang sudah dipindah ke footer.php -->

<?php
// Script tambahan khusus halaman ini (counter, progress bar, tab filter)
$extraScript = <<<HTML
<script>
    function animateCounter(el) {
        const target = parseInt(el.getAttribute('data-target'));
        const duration = 1500;
        const step = Math.ceil(target / (duration / 16));
        let current = 0;
        const timer = setInterval(() => {
            current += step;
            if (current >= target) { current = target; clearInterval(timer); }
            el.textContent = current;
        }, 16);
    }
    const counters = document.querySelectorAll('.counter');
    const observerC = new IntersectionObserver((entries) => {
        entries.forEach(e => { if (e.isIntersecting) { animateCounter(e.target); observerC.unobserve(e.target); } });
    }, { threshold: 0.5 });
    counters.forEach(c => observerC.observe(c));

    const bars = document.querySelectorAll('.progress-bar');
    const observerP = new IntersectionObserver((entries) => {
        entries.forEach(e => { if (e.isIntersecting) { e.target.style.width = e.target.getAttribute('data-width') + '%'; observerP.unobserve(e.target); } });
    }, { threshold: 0.3 });
    bars.forEach(b => observerP.observe(b));

    const tabBtns = document.querySelectorAll('.tab-btn');
    const cards = document.querySelectorAll('#sector-grid > div');
    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            tabBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const tab = btn.getAttribute('data-tab');
            cards.forEach(card => {
                const cat = card.getAttribute('data-cat');
                card.style.display = (tab === 'semua' || cat === tab) ? '' : 'none';
            });
        });
    });
</script>
HTML;

include 'header dan footer/footer.php';
?>