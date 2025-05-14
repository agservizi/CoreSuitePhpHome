    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-300 py-12">
        <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
            <div class="mb-6 md:mb-0">
                <img src="/logo-coresuite.png" alt="Coresuite Logo" class="h-8 inline-block mr-2">
                <span class="font-bold text-lg">Coresuite</span>
            </div>
            <ul class="flex space-x-6 mb-6 md:mb-0">
                <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                <li><a href="#" class="hover:underline">Termini di utilizzo</a></li>
                <li><a href="contatti.php" class="hover:underline">Supporto</a></li>
            </ul>
            <div class="flex space-x-4">
                <a href="#" aria-label="LinkedIn" class="hover:text-orange-400"><svg fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6"><path d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11 19h-3v-9h3v9zm-1.5-10.28c-.97 0-1.75-.79-1.75-1.75s.78-1.75 1.75-1.75 1.75.79 1.75 1.75-.78 1.75-1.75 1.75zm15.5 10.28h-3v-4.5c0-1.08-.02-2.47-1.5-2.47-1.5 0-1.73 1.17-1.73 2.39v4.58h-3v-9h2.89v1.23h.04c.4-.75 1.38-1.54 2.84-1.54 3.04 0 3.6 2 3.6 4.59v4.72z"/></svg></a>
                <a href="#" aria-label="Facebook" class="hover:text-orange-400"><svg fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6"><path d="M22.675 0h-21.35c-.733 0-1.325.592-1.325 1.326v21.348c0 .733.592 1.326 1.325 1.326h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.312h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.326v-21.349c0-.734-.593-1.326-1.326-1.326z"/></svg></a>
                <a href="#" aria-label="Twitter" class="hover:text-orange-400"><svg fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6"><path d="M24 4.557a9.93 9.93 0 0 1-2.828.775 4.932 4.932 0 0 0 2.165-2.724c-.951.564-2.005.974-3.127 1.195a4.92 4.92 0 0 0-8.384 4.482c-4.086-.205-7.713-2.164-10.141-5.144a4.822 4.822 0 0 0-.666 2.475c0 1.708.87 3.216 2.188 4.099a4.904 4.904 0 0 1-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.936 4.936 0 0 1-2.224.084c.627 1.956 2.444 3.377 4.6 3.417a9.867 9.867 0 0 1-6.102 2.104c-.396 0-.787-.023-1.175-.069a13.945 13.945 0 0 0 7.548 2.212c9.057 0 14.009-7.513 14.009-14.009 0-.213-.005-.425-.014-.636a10.012 10.012 0 0 0 2.457-2.548z"/></svg></a>
            </div>
        </div>
        <div class="text-center mt-6 text-gray-300 text-sm">© 2025 Coresuite. Tutti i diritti riservati.</div>
    </footer>    <!-- Cookie Banner -->
    <div id="cookie-banner" class="hidden fixed bottom-0 left-0 w-full bg-white shadow-lg z-50 p-4 md:p-6 border-t border-gray-200">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between">
            <div class="mb-4 md:mb-0 md:mr-8">
                <p class="text-gray-800 text-base mb-2">
                    <strong>La tua privacy è importante</strong>
                </p>
                <p class="text-gray-600 text-sm">
                    Utilizziamo i cookie per migliorare la tua esperienza di navigazione, mostrarti contenuti personalizzati e analizzare il nostro traffico. Facendo clic su "Accetta tutti" acconsenti al nostro utilizzo dei cookie.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row gap-2">
                <button id="cookie-settings" class="px-4 py-2 text-blue-700 hover:underline text-sm">Impostazioni</button>
                <button id="reject-cookies" class="px-4 py-2 border border-gray-300 rounded text-gray-700 hover:bg-gray-100 text-sm">Rifiuta</button>
                <button id="accept-cookies" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">Accetta tutti</button>
            </div>
        </div>
    </div>

    <!-- Interattività JS -->
    <script>
    // Navbar scroll
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href.startsWith('#')) {
                e.preventDefault();
                document.querySelector(href).scrollIntoView({ behavior: 'smooth' });
                
                // Chiudi il menu mobile dopo click
                document.getElementById('mobile-menu').classList.add('hidden');
            }
        });
    });
    
    // Menu mobile toggle
    document.getElementById('mobile-menu-btn').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
    
    // Animazioni fade-in
    function revealOnScroll() {
        const elements = document.querySelectorAll('.animate-fade-in, .animate-fade-in-up');
        const windowHeight = window.innerHeight;
        elements.forEach(el => {
            const position = el.getBoundingClientRect().top;
            if (position < windowHeight - 50) {
                el.classList.add('opacity-100', 'translate-y-0');
            }
        });
    }
    window.addEventListener('scroll', revealOnScroll);
    window.addEventListener('load', revealOnScroll);
    </script>
    <script src="/js/scripts.js"></script>
    <script src="/js/cookie-consent.js"></script>
</body>
</html>
