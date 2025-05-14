<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Scopri Coresuite, l'applicativo web per gestire al meglio i tuoi contratti. Semplice, sicuro e potente!">
    <title>Coresuite - La tua piattaforma per la gestione di contratti telefonici, luce e gas</title>
    <link rel="icon" type="image/png" href="/favicon.png">
    <link href="/dist/output.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
      body { font-family: 'Inter', 'Roboto', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-gray-100 text-gray-900">
    <!-- Navbar -->
    <nav class="fixed w-full z-30 bg-white/80 backdrop-blur border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <img src="/logo-coresuite.png" alt="Coresuite Logo" class="h-8 w-8">
                <span class="font-bold text-xl text-blue-700">Coresuite</span>
            </div>
            <ul class="hidden md:flex space-x-8 font-medium">
                <li><a href="#hero" class="nav-link">Home</a></li>
                <li><a href="#features" class="nav-link">Caratteristiche</a></li>
                <li><a href="#how" class="nav-link">Come funziona</a></li>
                <li><a href="https://app.coresuite.it/login.php" class="nav-link text-orange-500 hover:text-orange-600">Accedi</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="pt-32 pb-20 text-center bg-gradient-to-br from-blue-100 to-blue-50">
        <div class="max-w-2xl mx-auto">
            <img src="/logo-coresuite.png" alt="Coresuite Logo" class="mx-auto h-20 w-20 mb-4 animate-fade-in">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-blue-800 animate-fade-in">Gestisci i tuoi contratti in modo semplice e sicuro</h1>
            <p class="text-lg md:text-xl mb-8 text-gray-700 animate-fade-in delay-100">Coresuite è la piattaforma web per la gestione di contratti telefonici, luce e gas. Semplifica, analizza e ottimizza tutto in un unico posto.</p>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="https://app.coresuite.it/login.php" class="px-8 py-3 bg-orange-500 text-white rounded-lg shadow-lg font-semibold text-lg hover:bg-orange-600 transition animate-fade-in delay-200">Accedi ora</a>
                <a href="#features" class="px-8 py-3 bg-white text-blue-700 border border-blue-700 rounded-lg font-semibold text-lg hover:bg-blue-50 transition animate-fade-in delay-300">Scopri di più</a>
            </div>
        </div>
    </section>

    <!-- Caratteristiche -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-blue-800 mb-12">Caratteristiche principali</h2>
            <div class="grid md:grid-cols-2 gap-10">
                <div class="flex items-start space-x-4 animate-fade-in-up">
                    <span class="bg-blue-100 text-blue-700 p-3 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2a4 4 0 004 4h2a4 4 0 004-4z" /></svg></span>
                    <div>
                        <h3 class="font-semibold text-lg mb-1">Gestione contratti</h3>
                        <p class="text-gray-600">Gestisci contratti telefonici, luce e gas in modo centralizzato e intuitivo.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 animate-fade-in-up delay-100">
                    <span class="bg-blue-100 text-blue-700 p-3 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-1.104.896-2 2-2s2 .896 2 2-.896 2-2 2-2-.896-2-2z" /></svg></span>
                    <div>
                        <h3 class="font-semibold text-lg mb-1">Sicurezza avanzata</h3>
                        <p class="text-gray-600">Sistema di autenticazione sicuro con MFA2 per proteggere i tuoi dati.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 animate-fade-in-up delay-200">
                    <span class="bg-blue-100 text-blue-700 p-3 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16h8M8 12h8m-8-4h8" /></svg></span>
                    <div>
                        <h3 class="font-semibold text-lg mb-1">Form interattivi</h3>
                        <p class="text-gray-600">Form smart con autocompletamento per una gestione rapida e senza errori.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 animate-fade-in-up delay-300">
                    <span class="bg-blue-100 text-blue-700 p-3 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17a2 2 0 002 2h6a2 2 0 002-2V7a2 2 0 00-2-2h-6a2 2 0 00-2 2v10z" /></svg></span>
                    <div>
                        <h3 class="font-semibold text-lg mb-1">Dashboard intuitiva</h3>
                        <p class="text-gray-600">Dashboard con grafici e cards per una visione chiara e immediata dei dati.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Come funziona -->
    <section id="how" class="py-20 bg-gradient-to-br from-blue-50 to-white">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-blue-800 mb-12">Come funziona</h2>
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="p-6 rounded-lg shadow bg-white animate-fade-in-up">
                    <div class="text-4xl mb-4">🔑</div>
                    <h3 class="font-semibold text-lg mb-2">Accedi</h3>
                    <p class="text-gray-600">Effettua il login in modo sicuro e veloce.</p>
                </div>
                <div class="p-6 rounded-lg shadow bg-white animate-fade-in-up delay-100">
                    <div class="text-4xl mb-4">📑</div>
                    <h3 class="font-semibold text-lg mb-2">Gestisci i contratti</h3>
                    <p class="text-gray-600">Aggiungi, modifica e monitora tutti i tuoi contratti.</p>
                </div>
                <div class="p-6 rounded-lg shadow bg-white animate-fade-in-up delay-200">
                    <div class="text-4xl mb-4">📊</div>
                    <h3 class="font-semibold text-lg mb-2">Analizza i dati</h3>
                    <p class="text-gray-600">Visualizza statistiche e report dettagliati.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-10 mt-10">
        <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
            <div class="mb-6 md:mb-0">
                <img src="/logo-coresuite.png" alt="Coresuite Logo" class="h-8 inline-block mr-2">
                <span class="font-bold text-lg">Coresuite</span>
            </div>
            <ul class="flex space-x-6 mb-6 md:mb-0">
                <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                <li><a href="#" class="hover:underline">Termini di utilizzo</a></li>
                <li><a href="#" class="hover:underline">Supporto</a></li>
            </ul>
            <div class="flex space-x-4">
                <a href="#" aria-label="LinkedIn" class="hover:text-orange-400"><svg fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6"><path d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11 19h-3v-9h3v9zm-1.5-10.28c-.97 0-1.75-.79-1.75-1.75s.78-1.75 1.75-1.75 1.75.79 1.75 1.75-.78 1.75-1.75 1.75zm15.5 10.28h-3v-4.5c0-1.08-.02-2.47-1.5-2.47-1.5 0-1.73 1.17-1.73 2.39v4.58h-3v-9h2.89v1.23h.04c.4-.75 1.38-1.54 2.84-1.54 3.04 0 3.6 2 3.6 4.59v4.72z"/></svg></a>
                <a href="#" aria-label="Facebook" class="hover:text-orange-400"><svg fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6"><path d="M22.675 0h-21.35c-.733 0-1.325.592-1.325 1.326v21.348c0 .733.592 1.326 1.325 1.326h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.312h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.326v-21.349c0-.734-.593-1.326-1.326-1.326z"/></svg></a>
                <a href="#" aria-label="Twitter" class="hover:text-orange-400"><svg fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6"><path d="M24 4.557a9.93 9.93 0 0 1-2.828.775 4.932 4.932 0 0 0 2.165-2.724c-.951.564-2.005.974-3.127 1.195a4.92 4.92 0 0 0-8.384 4.482c-4.086-.205-7.713-2.164-10.141-5.144a4.822 4.822 0 0 0-.666 2.475c0 1.708.87 3.216 2.188 4.099a4.904 4.904 0 0 1-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.936 4.936 0 0 1-2.224.084c.627 1.956 2.444 3.377 4.6 3.417a9.867 9.867 0 0 1-6.102 2.104c-.396 0-.787-.023-1.175-.069a13.945 13.945 0 0 0 7.548 2.212c9.057 0 14.009-7.513 14.009-14.009 0-.213-.005-.425-.014-.636a10.012 10.012 0 0 0 2.457-2.548z"/></svg></a>
            </div>
        </div>
        <div class="text-center mt-6 text-gray-300 text-sm">© 2025 Coresuite. Tutti i diritti riservati.</div>
    </footer>

    <!-- Interattività JS -->
    <script>
    // Navbar scroll
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href.startsWith('#')) {
                e.preventDefault();
                document.querySelector(href).scrollIntoView({ behavior: 'smooth' });
            }
        });
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
    <style>
      .animate-fade-in { opacity: 0; transition: opacity 1s; }
      .animate-fade-in.opacity-100 { opacity: 1; }
      .animate-fade-in-up { opacity: 0; transform: translateY(40px); transition: opacity 1s, transform 1s; }
      .animate-fade-in-up.opacity-100, .animate-fade-in-up.translate-y-0 { opacity: 1; transform: translateY(0); }
    </style>
</body>
</html>
