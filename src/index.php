<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoreSuite - Gestionale Aziendale Innovativo</title>
    <link href="../css/style.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="fixed w-full bg-white shadow-sm z-50">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold text-primary">
                    CoreSuite
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#features" class="text-gray-600 hover:text-primary transition-colors">Caratteristiche</a>
                    <a href="#benefits" class="text-gray-600 hover:text-primary transition-colors">Vantaggi</a>
                    <a href="#contact" class="text-gray-600 hover:text-primary transition-colors">Contatti</a>
                    <a href="https://app.coresuite.it/login.php" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-primary/90 transition-colors">Accedi</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 bg-gradient-to-br from-primary/5 to-secondary/5">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        Gestisci la tua azienda con CoreSuite
                    </h1>
                    <p class="text-lg text-gray-600 mb-8">
                        La soluzione completa per la gestione aziendale che unisce semplicità e potenza
                    </p>
                    <a href="https://app.coresuite.it/login.php" class="inline-block bg-primary text-white px-8 py-3 rounded-lg text-lg font-semibold hover:bg-primary/90 transition-colors">
                        Inizia ora
                    </a>
                </div>
                <div class="md:w-1/2">
                    <img src="assets/hero-image.png" alt="CoreSuite Dashboard" class="w-full rounded-lg shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Caratteristiche principali</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="p-6 bg-white rounded-lg shadow-sm border border-gray-100">
                    <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Analisi avanzate</h3>
                    <p class="text-gray-600">Monitora le performance aziendali in tempo reale con dashboard interattive e report personalizzabili.</p>
                </div>

                <!-- Feature 2 -->
                <div class="p-6 bg-white rounded-lg shadow-sm border border-gray-100">
                    <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Gestione efficiente</h3>
                    <p class="text-gray-600">Ottimizza i processi aziendali con strumenti integrati per la gestione di risorse e attività.</p>
                </div>

                <!-- Feature 3 -->
                <div class="p-6 bg-white rounded-lg shadow-sm border border-gray-100">
                    <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Collaborazione in team</h3>
                    <p class="text-gray-600">Facilita la comunicazione e la collaborazione tra i membri del team con strumenti integrati.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Perché scegliere CoreSuite</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Facile da usare</h3>
                        <p class="text-gray-600">Interfaccia intuitiva che non richiede formazione specifica.</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Supporto 24/7</h3>
                        <p class="text-gray-600">Assistenza tecnica sempre disponibile per aiutarti.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-lg mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Contattaci</h2>
                <p class="text-gray-600 mb-8">
                    Hai domande? Il nostro team è qui per aiutarti a trovare la soluzione migliore per la tua azienda.
                </p>
                <a href="mailto:info@coresuite.it" class="inline-block bg-primary text-white px-8 py-3 rounded-lg text-lg font-semibold hover:bg-primary/90 transition-colors">
                    Scrivici
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">CoreSuite</h3>
                    <p class="text-gray-400">Soluzioni innovative per la gestione aziendale</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Link utili</h3>
                    <ul class="space-y-2">
                        <li><a href="#features" class="text-gray-400 hover:text-white transition-colors">Caratteristiche</a></li>
                        <li><a href="#benefits" class="text-gray-400 hover:text-white transition-colors">Vantaggi</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors">Contatti</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contatti</h3>
                    <ul class="space-y-2">
                        <li class="text-gray-400">Email: info@coresuite.it</li>
                        <li class="text-gray-400">Tel: +39 02 1234567</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Seguici</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.23 0H1.77C.8 0 0 .77 0 1.72v20.56C0 23.23.8 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.72V1.72C24 .77 23.2 0 22.23 0zM7.27 20.1H3.65V9.24h3.62V20.1zM5.47 7.76h-.03c-1.22 0-2-.83-2-1.87 0-1.06.8-1.87 2.05-1.87 1.24 0 2 .8 2.02 1.87 0 1.04-.78 1.87-2.05 1.87zM20.34 20.1h-3.63v-5.8c0-1.45-.52-2.45-1.83-2.45-1 0-1.6.67-1.87 1.32-.1.23-.11.55-.11.88v6.05H9.28s.05-9.82 0-10.84h3.63v1.54a3.6 3.6 0 0 1 3.26-1.8c2.39 0 4.18 1.56 4.18 4.89v6.21z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-800 text-center">
                <p class="text-gray-400">&copy; <?php echo date('Y'); ?> CoreSuite. Tutti i diritti riservati.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scroll per i link di navigazione
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
