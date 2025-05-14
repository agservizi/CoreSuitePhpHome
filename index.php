<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Scopri Coresuite, l'applicativo web per gestire al meglio i tuoi contratti. Semplice, sicuro e potente!">
    <title>Coresuite - La tua piattaforma per la gestione di contratti telefonici, luce e gas</title>
    <link rel="icon" type="image/png" href="/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">    <!-- TailwindCSS ottimizzato per la produzione -->
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
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-gray-100 text-gray-900">
    <!-- Navbar -->
    <nav class="fixed w-full z-30 bg-white/80 backdrop-blur border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">            <div class="flex items-center space-x-2">
                <img src="/logo-coresuite.png" alt="Coresuite Logo" class="h-8 w-8">
                <span class="font-bold text-xl text-blue-700">Coresuite</span>
            </div>
            <!-- Menu desktop -->
            <div class="hidden md:flex items-center space-x-8">
                <ul class="flex space-x-6">
                    <li><a href="#hero" class="nav-link text-gray-700 hover:text-blue-700 transition">Home</a></li>
                    <li><a href="#features" class="nav-link text-gray-700 hover:text-blue-700 transition">Caratteristiche</a></li>                    <li><a href="#platform" class="nav-link text-gray-700 hover:text-blue-700 transition">Piattaforma</a></li>
                    <li><a href="#how" class="nav-link text-gray-700 hover:text-blue-700 transition">Come funziona</a></li>
                    <li><a href="#pricing" class="nav-link text-gray-700 hover:text-blue-700 transition">Prezzi</a></li>
                    <li><a href="#faq" class="nav-link text-gray-700 hover:text-blue-700 transition">FAQ</a></li>
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
            <ul class="flex flex-col space-y-4">                <li><a href="#hero" class="nav-link block">Home</a></li>
                <li><a href="#features" class="nav-link block">Caratteristiche</a></li>
                <li><a href="#platform" class="nav-link block">Piattaforma</a></li>
                <li><a href="#how" class="nav-link block">Come funziona</a></li>
                <li><a href="#pricing" class="nav-link block">Prezzi</a></li>
    <li><a href="#faq" class="nav-link block">FAQ</a></li>
                <li><a href="https://app.coresuite.it/login.php" class="nav-link block text-orange-500 hover:text-orange-600">Accedi</a></li>
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

    <!-- Caratteristiche -->    <section id="features" class="py-20 bg-white">
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
                <div class="flex items-start space-x-4 animate-fade-in-up delay-400">
                    <span class="bg-blue-100 text-blue-700 p-3 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg></span>
                    <div>
                        <h3 class="font-semibold text-lg mb-1">Analisi e reportistica</h3>
                        <p class="text-gray-600">Ottieni reportistica avanzata e analisi dettagliata dei consumi e costi.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 animate-fade-in-up delay-500">
                    <span class="bg-blue-100 text-blue-700 p-3 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg></span>
                    <div>
                        <h3 class="font-semibold text-lg mb-1">Notifiche e promemoria</h3>
                        <p class="text-gray-600">Sistema di notifiche per scadenze, rinnovi e modifiche contrattuali.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nuova sezione: Piattaforma completa -->
    <section id="platform" class="py-20 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-blue-800 mb-12">Una piattaforma completa</h2>
            
            <div class="mb-16">
                <h3 class="text-2xl font-bold text-center text-blue-700 mb-8">Gestione contratti a 360°</h3>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md animate-fade-in-up">
                        <div class="bg-blue-50 rounded-full w-12 h-12 flex items-center justify-center mb-4 text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Contratti telefonici</h4>
                        <p class="text-gray-600">Gestisci e monitora tutti i tuoi contratti telefonici, comprensivi di piani tariffari, pacchetti dati e condizioni speciali.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md animate-fade-in-up delay-100">
                        <div class="bg-blue-50 rounded-full w-12 h-12 flex items-center justify-center mb-4 text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Contratti luce</h4>
                        <p class="text-gray-600">Tieni sotto controllo i consumi e i costi dell'energia elettrica, con confronto tariffe e analisi per fasce orarie.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md animate-fade-in-up delay-200">
                        <div class="bg-blue-50 rounded-full w-12 h-12 flex items-center justify-center mb-4 text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                            </svg>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Contratti gas</h4>
                        <p class="text-gray-600">Monitora i consumi del gas, visualizza statistiche stagionali e ottimizza i costi in base alle tue esigenze.</p>
                    </div>
                </div>
            </div>
            
            <div class="mb-16">
                <h3 class="text-2xl font-bold text-center text-blue-700 mb-8">Strumenti avanzati</h3>
                <div class="grid md:grid-cols-2 gap-x-12 gap-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="bg-blue-50 rounded-full w-10 h-10 flex-shrink-0 flex items-center justify-center text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">Confronto tariffe</h4>
                            <p class="text-gray-600">Analizza e confronta diverse offerte per trovare quella più vantaggiosa per te.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="bg-blue-50 rounded-full w-10 h-10 flex-shrink-0 flex items-center justify-center text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">Archivio documenti</h4>
                            <p class="text-gray-600">Archivia e accedi facilmente a bollette, contratti e comunicazioni.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="bg-blue-50 rounded-full w-10 h-10 flex-shrink-0 flex items-center justify-center text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">Calendario scadenze</h4>
                            <p class="text-gray-600">Visualizza e gestisci tutte le scadenze e i rinnovi contrattuali.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="bg-blue-50 rounded-full w-10 h-10 flex-shrink-0 flex items-center justify-center text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">Notifiche personalizzabili</h4>
                            <p class="text-gray-600">Ricevi notifiche su misura per ogni tipo di evento o scadenza importante.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <a href="https://app.coresuite.it/login.php" class="px-8 py-3 bg-orange-500 text-white rounded-lg shadow-lg font-semibold text-lg hover:bg-orange-600 transition inline-block">Scopri tutte le funzionalità</a>
            </div>
        </div>    <!-- Statistiche ed esperienze -->
    <section class="py-20 bg-blue-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-blue-800 mb-6">Dati e numeri che parlano chiaro</h2>
                    <p class="text-lg mb-8 text-gray-700">Coresuite è la scelta di migliaia di utenti per la gestione efficiente dei loro contratti.</p>
                    
                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div class="bg-white rounded-lg p-6 shadow-md text-center">
                            <div class="text-3xl font-bold text-blue-700 mb-1">5.000+</div>
                            <div class="text-gray-600">Utenti attivi</div>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-md text-center">
                            <div class="text-3xl font-bold text-blue-700 mb-1">15.000+</div>
                            <div class="text-gray-600">Contratti gestiti</div>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-md text-center">
                            <div class="text-3xl font-bold text-blue-700 mb-1">98%</div>
                            <div class="text-gray-600">Soddisfazione</div>
                        </div>
                        <div class="bg-white rounded-lg p-6 shadow-md text-center">
                            <div class="text-3xl font-bold text-blue-700 mb-1">12%</div>
                            <div class="text-gray-600">Risparmio medio</div>
                        </div>
                    </div>
                </div>
                  <div class="p-1 bg-white rounded-lg shadow-lg">
                    <div class="p-6 border border-gray-100 rounded-lg bg-gradient-to-br from-blue-50 to-white">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-2xl font-bold text-blue-800">Dicono di noi</h3>
                            <div class="flex space-x-2">
                                <button id="prev-testimonial" class="p-2 rounded-full bg-white shadow hover:bg-blue-50 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                    </svg>
                                </button>
                                <button id="next-testimonial" class="p-2 rounded-full bg-white shadow hover:bg-blue-50 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
                        <div id="testimonials-container" class="overflow-hidden">
                            <div id="testimonials-slider" class="flex transition-transform duration-300 ease-in-out">
                                <!-- Testimonianza 1 -->
                                <div class="testimonial-slide min-w-full">
                                    <div class="bg-white p-5 rounded-lg shadow-sm border border-gray-100">
                                        <div class="flex items-center mb-3">
                                            <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold mr-3">M</div>
                                            <div>
                                                <div class="font-bold">Marco R.</div>
                                                <div class="text-sm text-gray-500">Utente dal 2023</div>
                                            </div>
                                        </div>
                                        <p class="text-gray-700">"Finalmente posso gestire tutti i contratti di casa e azienda in un unico posto. L'interfaccia è intuitiva e il risparmio di tempo è notevole."</p>
                                        <div class="flex text-orange-400 mt-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Testimonianza 2 -->
                                <div class="testimonial-slide min-w-full">
                                    <div class="bg-white p-5 rounded-lg shadow-sm border border-gray-100">
                                        <div class="flex items-center mb-3">
                                            <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold mr-3">L</div>
                                            <div>
                                                <div class="font-bold">Laura T.</div>
                                                <div class="text-sm text-gray-500">Utente dal 2024</div>
                                            </div>
                                        </div>
                                        <p class="text-gray-700">"Le notifiche sulle scadenze mi hanno salvata più volte! Grazie a Coresuite ho ottimizzato i miei contratti risparmiando oltre il 15% sulle bollette."</p>
                                        <div class="flex text-orange-400 mt-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Testimonianza 3 (nuova) -->
                                <div class="testimonial-slide min-w-full">
                                    <div class="bg-white p-5 rounded-lg shadow-sm border border-gray-100">
                                        <div class="flex items-center mb-3">
                                            <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold mr-3">G</div>
                                            <div>
                                                <div class="font-bold">Giovanni P.</div>
                                                <div class="text-sm text-gray-500">Utente dal 2023</div>
                                            </div>
                                        </div>
                                        <p class="text-gray-700">"Da quando utilizzo Coresuite per la mia azienda, la gestione dei contratti è diventata molto più efficiente. I report mensili mi permettono di monitorare ogni spesa."</p>
                                        <div class="flex text-orange-400 mt-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex justify-center mt-4">
                                <div class="flex space-x-2">
                                    <span class="testimonial-dot h-2 w-2 bg-blue-500 rounded-full cursor-pointer" data-index="0"></span>
                                    <span class="testimonial-dot h-2 w-2 bg-blue-200 rounded-full cursor-pointer" data-index="1"></span>
                                    <span class="testimonial-dot h-2 w-2 bg-blue-200 rounded-full cursor-pointer" data-index="2"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Come funziona -->    <section id="how" class="py-20 bg-gradient-to-br from-blue-50 to-white">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-blue-800 mb-12">Come funziona</h2>
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="p-6 rounded-lg shadow bg-white animate-fade-in-up">
                    <div class="text-4xl mb-4">🔑</div>
                    <h3 class="font-semibold text-lg mb-2">Accedi</h3>
                    <p class="text-gray-600">Effettua il login in modo sicuro e veloce.</p>
                    <ul class="text-left mt-4 space-y-2 text-gray-600 text-sm">
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Autenticazione a due fattori</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Login sicuro via email</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Protezione avanzata dei dati</span>
                        </li>
                    </ul>
                </div>
                <div class="p-6 rounded-lg shadow bg-white animate-fade-in-up delay-100">
                    <div class="text-4xl mb-4">📑</div>
                    <h3 class="font-semibold text-lg mb-2">Gestisci i contratti</h3>
                    <p class="text-gray-600">Aggiungi, modifica e monitora tutti i tuoi contratti.</p>
                    <ul class="text-left mt-4 space-y-2 text-gray-600 text-sm">
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Caricamento automatico bollette</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Comparazione tariffe concorrenti</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Storico consumi consultabile</span>
                        </li>
                    </ul>
                </div>
                <div class="p-6 rounded-lg shadow bg-white animate-fade-in-up delay-200">
                    <div class="text-4xl mb-4">📊</div>
                    <h3 class="font-semibold text-lg mb-2">Analizza i dati</h3>
                    <p class="text-gray-600">Visualizza statistiche e report dettagliati.</p>
                    <ul class="text-left mt-4 space-y-2 text-gray-600 text-sm">
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Grafici interattivi e dashboard</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Report personalizzati</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Esportazione dati in PDF/CSV</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-16 text-center">
                <a href="https://app.coresuite.it/login.php" class="px-8 py-3 bg-blue-600 text-white rounded-lg shadow-lg font-semibold text-lg hover:bg-blue-700 transition inline-block">Prova gratuita per 30 giorni</a>
                <p class="text-gray-500 mt-3">Nessuna carta di credito richiesta. Cancellazione facile in qualsiasi momento.</p>
            </div>
        </div>
    </section>

    <!-- Nuova sezione: Piani di abbonamento -->
    <section id="pricing" class="py-20 bg-blue-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-blue-800 mb-6">Scegli il piano più adatto a te</h2>
            <p class="text-lg text-center text-gray-700 mb-12 max-w-3xl mx-auto">Offriamo soluzioni flessibili per privati e aziende di ogni dimensione. Tutti i piani includono una prova gratuita di 30 giorni.</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Piano Base -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="p-6 bg-gradient-to-br from-blue-50 to-white">
                        <h3 class="text-xl font-bold text-blue-800 mb-2">Piano Base</h3>
                        <p class="text-gray-600 mb-4">Ideale per privati e famiglie</p>
                        <div class="flex items-end mb-4">
                            <span class="text-4xl font-bold text-blue-700">€7</span>
                            <span class="text-gray-600 ml-2">/mese</span>
                        </div>
                        <p class="text-sm text-gray-500">Fatturazione annuale (€84/anno)</p>
                    </div>
                    <div class="p-6 space-y-3">
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Fino a 5 contratti</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Notifiche base</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Dashboard di base</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Archiviazione documenti (1 GB)</span>
                            </li>
                            <li class="flex items-start text-gray-400">
                                <svg class="h-5 w-5 text-gray-300 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                <span>Analisi avanzate</span>
                            </li>
                            <li class="flex items-start text-gray-400">
                                <svg class="h-5 w-5 text-gray-300 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                <span>Reportistica personalizzata</span>
                            </li>
                        </ul>
                        <a href="https://app.coresuite.it/login.php" class="block w-full py-3 px-4 text-center font-semibold text-blue-700 border-2 border-blue-600 rounded-lg hover:bg-blue-50 transition-colors">Prova gratuita</a>
                    </div>
                </div>
                
                <!-- Piano Premium -->
                <div class="bg-white rounded-xl shadow-xl overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl relative -mt-4 md:-mt-8">
                    <div class="absolute top-0 left-0 right-0 bg-orange-500 text-white text-center py-1 font-semibold text-sm">
                        Il più popolare
                    </div>
                    <div class="p-6 bg-gradient-to-br from-blue-100 to-white pt-10">
                        <h3 class="text-xl font-bold text-blue-800 mb-2">Piano Premium</h3>
                        <p class="text-gray-600 mb-4">Perfetto per famiglie e piccole aziende</p>
                        <div class="flex items-end mb-4">
                            <span class="text-4xl font-bold text-blue-700">€15</span>
                            <span class="text-gray-600 ml-2">/mese</span>
                        </div>
                        <p class="text-sm text-gray-500">Fatturazione annuale (€180/anno)</p>
                    </div>
                    <div class="p-6 space-y-3">
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Fino a 20 contratti</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Notifiche avanzate (email + SMS)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Dashboard interattiva</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Archiviazione documenti (10 GB)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Analisi avanzate</span>
                            </li>
                            <li class="flex items-start text-gray-400">
                                <svg class="h-5 w-5 text-gray-300 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                <span>Reportistica personalizzata</span>
                            </li>
                        </ul>
                        <a href="https://app.coresuite.it/login.php" class="block w-full py-3 px-4 text-center font-semibold text-white bg-orange-500 rounded-lg hover:bg-orange-600 transition-colors">Prova gratuita</a>
                    </div>
                </div>
                
                <!-- Piano Business -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="p-6 bg-gradient-to-br from-gray-50 to-white">
                        <h3 class="text-xl font-bold text-blue-800 mb-2">Piano Business</h3>
                        <p class="text-gray-600 mb-4">Per aziende e professionisti</p>
                        <div class="flex items-end mb-4">
                            <span class="text-4xl font-bold text-blue-700">€29</span>
                            <span class="text-gray-600 ml-2">/mese</span>
                        </div>
                        <p class="text-sm text-gray-500">Fatturazione annuale (€348/anno)</p>
                    </div>
                    <div class="p-6 space-y-3">
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Contratti illimitati</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Notifiche complete (email, SMS, API)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Dashboard personalizzabile</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Archiviazione documenti (50 GB)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Analisi avanzate</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Reportistica personalizzata</span>
                            </li>
                        </ul>
                        <a href="https://app.coresuite.it/login.php" class="block w-full py-3 px-4 text-center font-semibold text-blue-700 border-2 border-blue-600 rounded-lg hover:bg-blue-50 transition-colors">Prova gratuita</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <p class="text-gray-600">Hai esigenze speciali? <a href="#" class="text-blue-600 font-semibold hover:underline">Contattaci</a> per una soluzione su misura</p>
            </div>
        </div>
    </section>

    <!-- Sezione FAQ -->
    <section id="faq" class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-blue-800 mb-12">Domande frequenti</h2>
            
            <div class="space-y-4">
                <div class="border border-gray-200 rounded-lg">
                    <button class="faq-toggle flex justify-between items-center w-full px-6 py-4 text-left font-semibold text-blue-700 focus:outline-none">
                        <span>Come posso iniziare a usare Coresuite?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-4 text-gray-600">
                        <p>È facilissimo iniziare! Basta registrarsi su <a href="https://app.coresuite.it/login.php" class="text-blue-600 hover:underline">app.coresuite.it</a> e seguire la procedura guidata. Potrai caricare i tuoi contratti o inserirli manualmente. Per i primi 30 giorni avrai accesso completo a tutte le funzionalità gratuitamente.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg">
                    <button class="faq-toggle flex justify-between items-center w-full px-6 py-4 text-left font-semibold text-blue-700 focus:outline-none">
                        <span>Quali tipi di contratti posso gestire?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-4 text-gray-600">
                        <p>Coresuite ti permette di gestire contratti telefonici (fissi e mobili), contratti di energia elettrica e di fornitura gas. Puoi monitorare tutti i dettagli delle tue utenze domestiche e aziendali in un unico posto.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg">
                    <button class="faq-toggle flex justify-between items-center w-full px-6 py-4 text-left font-semibold text-blue-700 focus:outline-none">
                        <span>Come funziona il sistema di notifiche?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-4 text-gray-600">
                        <p>Il nostro sistema di notifiche ti avvisa automaticamente via email o SMS delle scadenze contrattuali, di variazioni tariffarie, o dell'arrivo di nuove bollette. Puoi personalizzare il tipo di notifiche che desideri ricevere dal tuo pannello di controllo.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg">
                    <button class="faq-toggle flex justify-between items-center w-full px-6 py-4 text-left font-semibold text-blue-700 focus:outline-none">
                        <span>I miei dati sono al sicuro?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-4 text-gray-600">
                        <p>Assolutamente sì! La sicurezza è una nostra priorità. Utilizziamo la crittografia end-to-end, l'autenticazione a due fattori e sistemi avanzati di protezione dei dati. Inoltre, siamo pienamente conformi alle normative GDPR per garantire la massima sicurezza e privacy dei tuoi dati.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg">
                    <button class="faq-toggle flex justify-between items-center w-full px-6 py-4 text-left font-semibold text-blue-700 focus:outline-none">
                        <span>Posso accedere da dispositivi mobili?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform faq-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-4 text-gray-600">
                        <p>Certo! Coresuite è completamente responsive e funziona perfettamente su smartphone e tablet. Inoltre, abbiamo app dedicate per iOS e Android che puoi scaricare dagli store ufficiali per un'esperienza ancora più ottimizzata.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Call to action -->
    <section class="py-16 bg-gradient-to-br from-blue-600 to-blue-800 text-white">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Pronto a semplificare la gestione dei tuoi contratti?</h2>
            <p class="text-lg mb-8 text-blue-100 max-w-3xl mx-auto">Unisciti a migliaia di utenti soddisfatti e inizia a gestire i tuoi contratti telefonici, luce e gas in modo intelligente.</p>
            <div class="flex flex-col md:flex-row gap-4 justify-center">
                <a href="https://app.coresuite.it/login.php" class="px-8 py-4 bg-white text-blue-700 rounded-lg shadow-lg font-semibold text-lg hover:bg-blue-50 transition">Inizia gratuitamente</a>
                <a href="#" class="px-8 py-4 bg-transparent border-2 border-white text-white rounded-lg font-semibold text-lg hover:bg-white/10 transition">Richiedi una demo</a>
            </div>
            <p class="mt-6 text-blue-200">Nessuna carta di credito richiesta. Prova gratuita di 30 giorni.</p>
        </div>
    </section>

    <!-- Footer -->
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
    <script>    // Navbar scroll
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
    </script>    <script src="js/scripts.js"></script>
    <style>
      .animate-fade-in { opacity: 0; transition: opacity 1s; }
      .animate-fade-in.opacity-100 { opacity: 1; }
      .animate-fade-in-up { opacity: 0; transform: translateY(40px); transition: opacity 1s, transform 1s; }
      .animate-fade-in-up.opacity-100, .animate-fade-in-up.translate-y-0 { opacity: 1; transform: translateY(0); }
    </style>
</body>
</html>
