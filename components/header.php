<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Scopri Coresuite, l'applicativo web per gestire al meglio i tuoi contratti. Semplice, sicuro e potente!">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Coresuite - La tua piattaforma per la gestione di contratti telefonici, luce e gas'; ?></title>
    <link rel="icon" type="image/png" href="/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- TailwindCSS ottimizzato per la produzione -->
    <link href="/dist/output.css" rel="stylesheet">
    <!-- Fallback al CDN per lo sviluppo -->
    <script>
      // Verifica se il file CSS è stato caricato, altrimenti carica il CDN
      function fallbackToTailwindCDN() {
        var links = document.getElementsByTagName('link');
        var cssLoaded = false;
        for (var i = 0; i < links.length; i++) {
          if (links[i].href.includes('output.css')) {
            cssLoaded = true;
            break;
          }
        }
        if (!cssLoaded) {
          var script = document.createElement('script');
          script.src = 'https://cdn.tailwindcss.com';
          document.head.appendChild(script);
        }
      }
      window.addEventListener('error', function(e) {
        if (e.target.tagName === 'LINK' && e.target.href.includes('output.css')) {
          fallbackToTailwindCDN();
        }
      }, true);
      setTimeout(fallbackToTailwindCDN, 1000); // Timeout di fallback
    </script>
    <style>
      body { font-family: 'Inter', 'Roboto', sans-serif; }
      .animate-fade-in { opacity: 0; transition: opacity 1s; }
      .animate-fade-in.opacity-100 { opacity: 1; }
      .animate-fade-in-up { opacity: 0; transform: translateY(40px); transition: opacity 1s, transform 1s; }
      .animate-fade-in-up.opacity-100, .animate-fade-in-up.translate-y-0 { opacity: 1; transform: translateY(0); }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-gray-100 text-gray-900">
    <!-- Navbar -->
    <nav class="fixed w-full z-30 bg-white/80 backdrop-blur border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">            
            <div class="flex items-center space-x-2">
                <a href="/">
                    <img src="/logo-coresuite.png" alt="Coresuite Logo" class="h-8 w-8">
                </a>
                <span class="font-bold text-xl text-blue-700">Coresuite</span>
            </div>
            <!-- Menu desktop -->
            <div class="hidden md:flex items-center space-x-8">
                <ul class="flex space-x-6">
                    <li><a href="index.php#hero" class="nav-link text-gray-700 hover:text-blue-700 transition">Home</a></li>
                    <li><a href="index.php#features" class="nav-link text-gray-700 hover:text-blue-700 transition">Caratteristiche</a></li>
                    <li><a href="index.php#platform" class="nav-link text-gray-700 hover:text-blue-700 transition">Piattaforma</a></li>
                    <li><a href="index.php#how" class="nav-link text-gray-700 hover:text-blue-700 transition">Come funziona</a></li>
                    <li><a href="index.php#pricing" class="nav-link text-gray-700 hover:text-blue-700 transition">Prezzi</a></li>
                    <li><a href="index.php#faq" class="nav-link text-gray-700 hover:text-blue-700 transition">FAQ</a></li>
                    <li><a href="contatti.php" class="nav-link text-gray-700 hover:text-blue-700 transition">Contatti</a></li>
                    <li><a href="https://app.coresuite.it/login.php" class="nav-link text-orange-500 hover:text-orange-600 font-semibold">Accedi</a></li>
                </ul>
            </div>
            <!-- Menu mobile -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="text-gray-600 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- Menu mobile dropdown -->
        <div id="mobile-menu" class="md:hidden hidden bg-white w-full py-4 px-4 border-t border-gray-200">
            <ul class="flex flex-col space-y-4">
                <li><a href="index.php#hero" class="nav-link block">Home</a></li>
                <li><a href="index.php#features" class="nav-link block">Caratteristiche</a></li>
                <li><a href="index.php#platform" class="nav-link block">Piattaforma</a></li>
                <li><a href="index.php#how" class="nav-link block">Come funziona</a></li>
                <li><a href="index.php#pricing" class="nav-link block">Prezzi</a></li>
                <li><a href="index.php#faq" class="nav-link block">FAQ</a></li>
                <li><a href="contatti.php" class="nav-link block">Contatti</a></li>
                <li><a href="https://app.coresuite.it/login.php" class="nav-link block text-orange-500 hover:text-orange-600">Accedi</a></li>
            </ul>
        </div>
    </nav>
