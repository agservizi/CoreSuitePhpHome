<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supporto - CoreSuite</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo.png" alt="CoreSuite Logo" height="35" width="auto">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#funzionalita">Funzionalità</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#gestori">Gestori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#vantaggi">Vantaggi</a>
                    </li>
                </ul>
                <a href="https://app.coresuite.it/login.php" class="btn btn-primary">Accedi</a>
            </div>
        </div>
    </nav>

    <!-- Support Content -->
    <section class="py-5 mt-5">
        <div class="container">
            <h1 class="mb-4">Supporto</h1>
            
            <!-- Quick Help Section -->
            <div class="row mb-5">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-book fa-3x text-primary mb-3"></i>
                            <h3 class="h5">Documentazione</h3>
                            <p>Consulta le guide e i manuali per utilizzare al meglio CoreSuite.</p>
                            <a href="#" class="btn btn-outline-primary">Apri Guide</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-comments fa-3x text-primary mb-3"></i>
                            <h3 class="h5">Live Chat</h3>
                            <p>Chatta con un nostro operatore per assistenza immediata.</p>
                            <button class="btn btn-outline-primary" onclick="openLiveChat()">Avvia Chat</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-video fa-3x text-primary mb-3"></i>
                            <h3 class="h5">Video Tutorial</h3>
                            <p>Guarda i nostri video tutorial per imparare ad usare CoreSuite.</p>
                            <a href="#" class="btn btn-outline-primary">Guarda Tutorial</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <h2 class="h3 mb-4">Domande Frequenti</h2>
            <div class="accordion shadow-sm mb-5" id="faqAccordion">
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            Come posso iniziare a usare CoreSuite?
                        </button>
                    </h3>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Per iniziare, registrati sulla piattaforma e scegli il piano più adatto alle tue esigenze. Dopo la registrazione, potrai accedere immediatamente a tutte le funzionalità di CoreSuite.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Come funziona l'autocompletamento dei contratti?
                        </button>
                    </h3>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Il sistema di autocompletamento utilizza i dati dei clienti esistenti per compilare automaticamente i campi dei nuovi contratti, riducendo errori e tempi di inserimento.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            Come posso ottenere assistenza tecnica?
                        </button>
                    </h3>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Puoi contattare il nostro team di supporto tecnico tramite live chat, email o telefono. Siamo disponibili dal lunedì al venerdì, dalle 9:00 alle 18:00.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <h2 class="h3 mb-4">Contattaci</h2>
            <div class="card shadow-sm">
                <div class="card-body">
                    <form id="supportForm" action="process-support.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Oggetto</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Messaggio</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Invia Messaggio</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark text-light py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <img src="assets/images/logo-white.png" alt="CoreSuite Logo" height="35" class="mb-3">
                    <p class="mb-0">La soluzione completa per la gestione dei tuoi contratti.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Link Utili</h5>
                    <ul class="list-unstyled">
                        <li><a href="privacy-policy.php" class="text-light">Privacy Policy</a></li>
                        <li><a href="termini-condizioni.php" class="text-light">Termini e Condizioni</a></li>
                        <li><a href="supporto.php" class="text-light">Supporto</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contatti</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-envelope me-2"></i> info@coresuite.it</li>
                        <li><i class="fas fa-phone me-2"></i> +39 02 1234567</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function openLiveChat() {
            // Implementa qui la logica per aprire la live chat
            alert('Servizio di live chat in fase di implementazione. Per assistenza immediata, contattaci via email o telefono.');
        }
    </script>
</body>
</html>
