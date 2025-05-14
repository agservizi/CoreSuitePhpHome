<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - CoreSuite</title>
    
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

    <!-- Privacy Policy Content -->
    <section class="py-5 mt-5">
        <div class="container">
            <h1 class="mb-4">Privacy Policy</h1>
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="h4 mb-4">Informativa sulla Privacy di CoreSuite</h2>
                    <p class="mb-4">Ultima modifica: <?php echo date('d/m/Y'); ?></p>

                    <h3 class="h5 mb-3">1. Raccolta delle Informazioni</h3>
                    <p>Raccogliamo le seguenti tipologie di informazioni:</p>
                    <ul>
                        <li>Dati personali forniti durante la registrazione (nome, email, telefono)</li>
                        <li>Informazioni sui contratti gestiti attraverso la piattaforma</li>
                        <li>Dati di utilizzo del servizio</li>
                        <li>Informazioni tecniche sul dispositivo e la connessione</li>
                    </ul>

                    <h3 class="h5 mb-3 mt-4">2. Utilizzo delle Informazioni</h3>
                    <p>Utilizziamo le informazioni raccolte per:</p>
                    <ul>
                        <li>Fornire e migliorare i nostri servizi</li>
                        <li>Personalizzare l'esperienza utente</li>
                        <li>Processare le transazioni</li>
                        <li>Inviare comunicazioni di servizio</li>
                        <li>Prevenire attività fraudolente</li>
                    </ul>

                    <h3 class="h5 mb-3 mt-4">3. Protezione dei Dati</h3>
                    <p>Implementiamo rigorose misure di sicurezza per proteggere i tuoi dati:</p>
                    <ul>
                        <li>Crittografia SSL/TLS per tutte le trasmissioni</li>
                        <li>Autenticazione a più fattori</li>
                        <li>Backup regolari e ridondanza dei dati</li>
                        <li>Monitoraggio continuo della sicurezza</li>
                    </ul>

                    <h3 class="h5 mb-3 mt-4">4. I Tuoi Diritti</h3>
                    <p>Hai il diritto di:</p>
                    <ul>
                        <li>Accedere ai tuoi dati personali</li>
                        <li>Richiedere la rettifica o la cancellazione dei dati</li>
                        <li>Opporti al trattamento dei dati</li>
                        <li>Richiedere la portabilità dei dati</li>
                    </ul>

                    <h3 class="h5 mb-3 mt-4">5. Contattaci</h3>
                    <p>Per qualsiasi domanda sulla nostra Privacy Policy, contattaci:</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-envelope me-2"></i> privacy@coresuite.it</li>
                        <li><i class="fas fa-phone me-2"></i> +39 02 1234567</li>
                    </ul>
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
</body>
</html>
