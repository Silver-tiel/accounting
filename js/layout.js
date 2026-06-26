document.addEventListener("DOMContentLoaded", () => {
    // Dapatkan nama file halaman saat ini (default: index.html)
    const currentPath = window.location.pathname.split('/').pop() || 'index.html';

    // Load Header
    fetch('header%20dan%20footer/header.html')
        .then(response => {
            if (!response.ok) throw new Error('Gagal memuat header');
            return response.text();
        })
        .then(html => {
            document.getElementById('header-container').innerHTML = html;
            
            // Tandai halaman aktif di menu
            const links = document.querySelectorAll('#mobile-menu a');
            links.forEach(link => {
                const href = link.getAttribute('href');
                if (href && (href.toLowerCase() === currentPath.toLowerCase() || (currentPath === '' && href === 'index.html'))) {
                    link.className = "inline-block text-sm font-medium transition-colors underline underline-offset-4 decoration-2";
                    link.style.color = "#FF8B3D";
                } else {
                    link.className = "inline-block text-sm font-medium transition-colors text-black hover:text-gray-600";
                    link.style.color = "";
                }
            });
            
            // Inisialisasi menu mobile
            initMobileMenu();
        })
        .catch(err => console.error('Error header:', err));

    // Load Footer
    fetch('header%20dan%20footer/footer.html')
        .then(response => {
            if (!response.ok) throw new Error('Gagal memuat footer');
            return response.text();
        })
        .then(html => {
            document.getElementById('footer-container').innerHTML = html;
            
            // Update tahun saat ini di footer
            const yearSpan = document.getElementById('current-year');
            if (yearSpan) {
                yearSpan.textContent = new Date().getFullYear();
            }
        })
        .catch(err => console.error('Error footer:', err));
});

function initMobileMenu() {
    const toggle = document.getElementById('mobile-menu-toggle');
    const menu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');
    if (toggle && menu) {
        toggle.addEventListener('click', function () {
            const isOpen = !menu.classList.contains('hidden');
            if (isOpen) {
                menu.classList.add('hidden');
                iconOpen.classList.remove('hidden');
                iconClose.classList.add('hidden');
            } else {
                menu.classList.remove('hidden');
                iconOpen.classList.add('hidden');
                iconClose.classList.remove('hidden');
            }
        });
    }
}
