<?php
// Impostazioni SEO
$pageTitle = "CoreSuite - La Soluzione Definitiva per la Gestione dei Tuoi Contratti";
$pageDescription = "Gestisci in modo efficiente i contratti telefonici, luce e gas con CoreSuite. Piattaforma all-in-one con autocompletamento dati e dashboard interattiva.";
?>
<!DOCTYPE html>
<html lang="it" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    
    <!-- Meta tags SEO -->
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $pageDescription; ?>">
    <meta property="og:image" content="/assets/images/logo.png">
    
    <!-- Favicon -->
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
      <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/assets/css/components.css" rel="stylesheet">    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        secondary: {
                            50: '#f5f3ff',
                            100: '#ede9fe',
                            200: '#ddd6fe',
                            300: '#c4b5fd',
                            400: '#a78bfa',
                            500: '#8b5cf6',
                            600: '#7c3aed',
                            700: '#6d28d9',
                            800: '#5b21b6',
                            900: '#4c1d95',
                        },
                    },
                    animation: {
                        'shimmer': 'shimmer 3s linear infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'shine': 'shine 3s ease-in-out infinite',
                        'slide-up': 'slide-up 0.5s ease-out',
                        'rotate-slow': 'rotate 8s linear infinite',
                    },
                    keyframes: {
                        shimmer: {
                            '0%': { backgroundPosition: '200% 0' },
                            '100%': { backgroundPosition: '-200% 0' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' }
                        },
                        shine: {
                            '0%': { transform: 'translateX(-100%)' },
                            '100%': { transform: 'translateX(100%)' }
                        },
                        'slide-up': {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(20px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            }
                        }
                    }
                },
                fontFamily: {
                    'sans': ['Source Sans Pro', 'ui-sans-serif', 'system-ui'],
                }
            }
        }
    </script>
    <style>
        [data-animate] {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease-out;
        }
        [data-animate].animated {
            opacity: 1;
            transform: translateY(0);
        }
        
        .btn-primary-gradient {
            background-size: 200% auto;
            transition: all 0.3s ease;
        }
        .btn-primary-gradient:hover {
            background-position: right center;
        }

        .card-feature::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.2),
                transparent
            );
            transition: 0.5s;
        }
        
        .card-feature:hover::before {
            left: 100%;
        }

        .dynamic-gradient {
            background: linear-gradient(-45deg, #0ea5e9, #7c3aed, #0284c7, #6d28d9);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>
<body class="dark-transition bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white">
    <!-- Preloader -->
    <div id="preloader" class="fixed inset-0 z-50 flex items-center justify-center bg-white dark:bg-gray-900 transition-opacity duration-500">
        <div class="loading-spinner"></div>
    </div>

    <!-- Navbar -->
    <nav class="fixed w-full z-40 transition-all duration-300">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <a href="/" class="flex items-center space-x-2">
                    <img src="/assets/images/logo.png" alt="CoreSuite Logo" class="h-10 w-auto dark:hidden">
                    <img src="/assets/images/logo-white.png" alt="CoreSuite Logo" class="h-10 w-auto hidden dark:block">
                </a>
                
                <!-- Menu Desktop -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#features" class="nav-link">Funzionalità</a>
                    <a href="#providers" class="nav-link">Gestori</a>
                    <a href="#benefits" class="nav-link">Vantaggi</a>
                    <a href="https://app.coresuite.it/login.php" class="btn-primary-gradient">Accedi</a>
                </div>

                <!-- Menu Mobile Button -->
                <button class="md:hidden mobile-menu-button p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Menu Mobile -->
            <div class="mobile-menu hidden md:hidden mt-4 py-4 bg-white dark:bg-gray-800 rounded-lg shadow-xl">
                <a href="#features" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700">Funzionalità</a>
                <a href="#providers" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700">Gestori</a>
                <a href="#benefits" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700">Vantaggi</a>
                <a href="https://app.coresuite.it/login.php" class="block px-4 py-2 text-sm text-primary-600 dark:text-primary-400 font-semibold">Accedi</a>
            </div>
        </div>
    </nav>    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center overflow-hidden">
        <div class="absolute inset-0 dynamic-gradient opacity-90" data-parallax="10"></div>
        <div class="container mx-auto px-4 py-20 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">                <div class="text-white">
                    <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-primary-200" data-animate>
                        Benvenuto in CoreSuite
                    </h2>
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight bg-clip-text text-transparent bg-gradient-to-r from-white to-primary-200" data-animate style="transition-delay: 100ms;">
                        La Soluzione Definitiva per la Gestione dei Tuoi Contratti
                    </h1>
                    <p class="text-xl mb-8 opacity-90 text-primary-100" data-animate style="transition-delay: 200ms;">
                        Gestisci in modo intelligente e integrato i tuoi contratti telefonici, luce e gas. 
                        Tutto in un'unica piattaforma potente e intuitiva.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4" data-animate style="transition-delay: 400ms;">
                        <a href="https://app.coresuite.it/login.php" class="btn-primary-gradient">
                            <i class="fas fa-sign-in-alt mr-2"></i>
                            Accedi Ora
                        </a>
                        <a href="#features" class="btn-outline">
                            Scopri di più
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <div class="hidden md:block animate-float">
                    <img src="/assets/images/hero-illustration.svg" alt="CoreSuite Dashboard" class="w-full">
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-gray-50 dark:from-gray-900 to-transparent"></div>
    </section>    <!-- Features Section -->
    <section id="features" class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-primary-50/30 to-secondary-50/30 dark:from-primary-900/30 dark:to-secondary-900/30"></div>
        <div class="container mx-auto px-4 relative">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 bg-gradient-to-r from-primary-600 to-secondary-600 bg-clip-text text-transparent">
                    Funzionalità Principali
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    Scopri come CoreSuite rivoluziona la gestione dei contratti con strumenti all'avanguardia
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 relative">
                <!-- Feature 1 -->
                <div class="group relative" data-animate style="transition-delay: 0ms;">
                    <div class="relative p-8 bg-white dark:bg-gray-800 rounded-2xl shadow-xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-600/5 to-secondary-600/5 dark:from-primary-600/10 dark:to-secondary-600/10 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                        <div class="relative flex items-start">
                            <div class="flex-shrink-0 mr-6">
                                <div class="w-16 h-16 rounded-xl bg-primary-100 dark:bg-primary-900/50 flex items-center justify-center text-2xl text-primary-600 dark:text-primary-400 transition-colors duration-300 group-hover:bg-primary-600 group-hover:text-white">
                                    <i class="fas fa-file-contract"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">Gestione Contratti</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">
                                    Telefonici, Luce e Gas in un'unica piattaforma integrata con gestione semplificata e automatizzata.
                                </p>
                                <ul class="space-y-2">
                                    <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                        <i class="fas fa-check text-primary-600 mr-2"></i>
                                        Gestione multi-contratto
                                    </li>
                                    <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                        <i class="fas fa-check text-primary-600 mr-2"></i>
                                        Archiviazione automatica
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="group relative" data-animate style="transition-delay: 200ms;">
                    <div class="relative p-8 bg-white dark:bg-gray-800 rounded-2xl shadow-xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-secondary-600/5 to-primary-600/5 dark:from-secondary-600/10 dark:to-primary-600/10 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                        <div class="relative flex items-start">
                            <div class="flex-shrink-0 mr-6">
                                <div class="w-16 h-16 rounded-xl bg-secondary-100 dark:bg-secondary-900/50 flex items-center justify-center text-2xl text-secondary-600 dark:text-secondary-400 transition-colors duration-300 group-hover:bg-secondary-600 group-hover:text-white">
                                    <i class="fas fa-magic"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">Autocompletamento Dati</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">
                                    Sistema intelligente che riconosce e completa automaticamente i dati dei clienti esistenti.
                                </p>
                                <ul class="space-y-2">
                                    <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                        <i class="fas fa-check text-secondary-600 mr-2"></i>
                                        Riconoscimento automatico
                                    </li>
                                    <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                        <i class="fas fa-check text-secondary-600 mr-2"></i>
                                        Validazione in tempo reale
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="group relative" data-animate style="transition-delay: 400ms;">
                    <div class="relative p-8 bg-white dark:bg-gray-800 rounded-2xl shadow-xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-green-600/5 to-primary-600/5 dark:from-green-600/10 dark:to-primary-600/10 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                        <div class="relative flex items-start">
                            <div class="flex-shrink-0 mr-6">
                                <div class="w-16 h-16 rounded-xl bg-green-100 dark:bg-green-900/50 flex items-center justify-center text-2xl text-green-600 dark:text-green-400 transition-colors duration-300 group-hover:bg-green-600 group-hover:text-white">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">Dashboard Interattiva</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">
                                    Visualizza e analizza i dati in tempo reale con grafici interattivi e report dettagliati.
                                </p>
                                <ul class="space-y-2">
                                    <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                        <i class="fas fa-check text-green-600 mr-2"></i>
                                        Grafici personalizzabili
                                    </li>
                                    <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                        <i class="fas fa-check text-green-600 mr-2"></i>
                                        Report automatici
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="group relative" data-animate style="transition-delay: 600ms;">
                    <div class="relative p-8 bg-white dark:bg-gray-800 rounded-2xl shadow-xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-600/5 to-secondary-600/5 dark:from-yellow-600/10 dark:to-secondary-600/10 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                        <div class="relative flex items-start">
                            <div class="flex-shrink-0 mr-6">
                                <div class="w-16 h-16 rounded-xl bg-yellow-100 dark:bg-yellow-900/50 flex items-center justify-center text-2xl text-yellow-600 dark:text-yellow-400 transition-colors duration-300 group-hover:bg-yellow-600 group-hover:text-white">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">Sicurezza Avanzata</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">
                                    Protezione completa dei dati con autenticazione multi-fattore e gestione ruoli avanzata.
                                </p>
                                <ul class="space-y-2">
                                    <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                        <i class="fas fa-check text-yellow-600 mr-2"></i>
                                        Autenticazione MFA
                                    </li>
                                    <li class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                        <i class="fas fa-check text-yellow-600 mr-2"></i>
                                        Controllo accessi granulare
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </section>

    <!-- Providers Section -->
    <section id="providers" class="py-20 bg-gray-100 dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-6">Gestori Supportati</h2>
            <p class="text-center text-gray-600 dark:text-gray-400 mb-12 max-w-2xl mx-auto">
                CoreSuite ottimizza la gestione dei contratti per i principali gestori di telefonia, luce e gas in Italia.
            </p>
              <div class="grid grid-cols-2 md:grid-cols-3 gap-12 items-center justify-items-center">
                <img src="/assets/images/fastweb-logo.png" alt="Fastweb" class="h-8 max-w-[100px] object-contain filter grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300 transform hover:scale-110">
                <img src="/assets/images/enel-logo.png" alt="Enel Energia" class="h-8 max-w-[100px] object-contain filter grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300 transform hover:scale-110">
                <img src="/assets/images/fastweb-energia-logo.png" alt="Fastweb Energia" class="h-8 max-w-[100px] object-contain filter grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300 transform hover:scale-110">
                <img src="/assets/images/a2a-logo.png" alt="A2A Energia" class="h-8 max-w-[100px] object-contain filter grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300 transform hover:scale-110">
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Perché Scegliere CoreSuite</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-primary-100 dark:bg-primary-900 flex items-center justify-center">
                                <i class="fas fa-clock text-primary-600 dark:text-primary-400"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold mb-2">Risparmio di Tempo</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Automazione intelligente che riduce drasticamente i tempi di gestione.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-secondary-100 dark:bg-secondary-900 flex items-center justify-center">
                                <i class="fas fa-lock text-secondary-600 dark:text-secondary-400"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold mb-2">Sicurezza Avanzata</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Protezione dei dati e conformità GDPR garantita.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center">
                                <i class="fas fa-mobile-alt text-green-600 dark:text-green-400"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold mb-2">Accessibilità Totale</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Accedi da qualsiasi dispositivo, ovunque tu sia.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-yellow-100 dark:bg-yellow-900 flex items-center justify-center">
                                <i class="fas fa-laptop text-yellow-600 dark:text-yellow-400"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold mb-2">Interfaccia Intuitiva</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Design moderno e user-friendly per un'esperienza ottimale.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="animate-float">
                    <img src="/assets/images/advantages-illustration.svg" alt="CoreSuite Vantaggi" class="w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <img src="/assets/images/logo-white.png" alt="CoreSuite Logo" class="h-10 mb-4">
                    <p class="text-gray-400">
                        La soluzione moderna per la gestione dei contratti.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Collegamenti</h4>
                    <ul class="space-y-2">
                        <li><a href="#features" class="text-gray-400 hover:text-white transition-colors">Funzionalità</a></li>
                        <li><a href="#providers" class="text-gray-400 hover:text-white transition-colors">Gestori</a></li>
                        <li><a href="#benefits" class="text-gray-400 hover:text-white transition-colors">Vantaggi</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Legale</h4>
                    <ul class="space-y-2">
                        <li><a href="/privacy-policy.php" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a></li>
                        <li><a href="/termini-condizioni.php" class="text-gray-400 hover:text-white transition-colors">Termini e Condizioni</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contatti</h4>
                    <ul class="space-y-2">
                        <li><a href="/supporto.php" class="text-gray-400 hover:text-white transition-colors">Supporto</a></li>
                        <li class="flex space-x-4 mt-4">
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; <?php echo date('Y'); ?> CoreSuite. Tutti i diritti riservati.</p>
            </div>
        </div>
    </footer>    <!-- Scripts -->
    <script src="/assets/js/theme.js"></script>
    <script src="/assets/js/animations.js"></script>
</body>
</html>
