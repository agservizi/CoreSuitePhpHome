<?php 
$current_year = date('Y');
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CoreSuite - La soluzione completa per la gestione dei contratti telefonici, luce e gas">
    <meta name="keywords" content="gestione contratti, contratti telefonici, contratti luce, contratti gas, dashboard interattiva, automazione">
    <title>CoreSuite - Gestione Contratti Semplificata</title>
      <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>    <!-- Main Navbar -->
    <nav class="main-header navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="https://coresuite.it/">
                <img src="assets/images/logo.png" alt="CoreSuite Logo" height="32" class="brand-image">
                <span class="brand-text font-weight-light d-none">CoreSuite</span>
            </a>
            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse order-3" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#funzionalita">Funzionalità</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gestori">Gestori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#vantaggi">Vantaggi</a>
                    </li>
                </ul>
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="https://app.coresuite.it/login.php" class="nav-link btn btn-primary text-white">
                            <i class="fas fa-sign-in-alt mr-2"></i> Accedi
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="display-4 fw-bold mb-4">La Soluzione Completa per la Gestione di Contratti</h1>
                    <p class="lead mb-4">Semplifica la gestione dei tuoi contratti telefonici, luce e gas con CoreSuite. La piattaforma intelligente che automatizza il tuo lavoro.</p>
                    <a href="https://app.coresuite.it/login.php" class="btn btn-lg btn-primary">Accedi Ora</a>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="assets/images/hero-illustration.svg" alt="CoreSuite Dashboard" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Funzionalità Section -->
    <section id="funzionalita" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Le Nostre Funzionalità</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="card h-100 feature-card">
                        <div class="card-body text-center">
                            <i class="fas fa-file-contract fa-3x mb-3 text-primary"></i>
                            <h3 class="h5">Gestione Contratti</h3>
                            <p>Gestisci contratti telefonici, luce e gas in un'unica piattaforma intuitiva.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 feature-card">
                        <div class="card-body text-center">
                            <i class="fas fa-magic fa-3x mb-3 text-primary"></i>
                            <h3 class="h5">Autocompletamento</h3>
                            <p>Sistema intelligente di autocompletamento per clienti esistenti.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 feature-card">
                        <div class="card-body text-center">
                            <i class="fas fa-chart-line fa-3x mb-3 text-primary"></i>
                            <h3 class="h5">Dashboard Interattiva</h3>
                            <p>Visualizza grafici e statistiche in tempo reale per monitorare le tue performance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 feature-card">
                        <div class="card-body text-center">
                            <i class="fas fa-shield-alt fa-3x mb-3 text-primary"></i>
                            <h3 class="h5">Sicurezza Avanzata</h3>
                            <p>Protezione dei dati con MFA e gestione ruoli differenziata.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gestori Section -->
    <section id="gestori" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Gestori Supportati</h2>
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h3 class="h4 mb-4">Telefonia</h3>
                    <div class="row g-4 mb-5">
                        <div class="col-4">
                            <img src="assets/images/fastweb-logo.png" alt="Fastweb" class="img-fluid">
                        </div>
                        <div class="col-4">
                            <img src="assets/images/windtre-logo.png" alt="Windtre" class="img-fluid">
                        </div>
                        <div class="col-4">
                            <img src="assets/images/pianetafibra-logo.png" alt="Pianeta Fibra" class="img-fluid">
                        </div>
                    </div>
                    <h3 class="h4 mb-4">Luce e Gas</h3>
                    <div class="row g-4">
                        <div class="col-4">
                            <img src="assets/images/enel-logo.png" alt="Enel Energia" class="img-fluid">
                        </div>
                        <div class="col-4">
                            <img src="assets/images/fastweb-energia-logo.png" alt="Fastweb Energia" class="img-fluid">
                        </div>
                        <div class="col-4">
                            <img src="assets/images/a2a-logo.png" alt="A2A Energia" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="p-4">
                        <h3>Gestione Semplificata dei Contratti</h3>
                        <p class="lead">CoreSuite rende semplice e veloce la gestione dei contratti per tutti i principali gestori di servizi telefonici, luce e gas.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-primary me-2"></i> Compilazione automatica dei moduli</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Verifica in tempo reale delle offerte</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Monitoraggio dello stato delle pratiche</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Gestione documentazione digitalizzata</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vantaggi Section -->
    <section id="vantaggi" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="mb-4">I Vantaggi di CoreSuite</h2>
                    <div class="advantage-item mb-4">
                        <h3 class="h5"><i class="fas fa-clock text-primary me-2"></i> Risparmio di Tempo</h3>
                        <p>Automatizza le attività ripetitive e riduci i tempi di gestione fino al 70%.</p>
                    </div>
                    <div class="advantage-item mb-4">
                        <h3 class="h5"><i class="fas fa-robot text-primary me-2"></i> Automazione Intelligente</h3>
                        <p>Sistema di autocompletamento e suggerimenti basati sui dati storici.</p>
                    </div>
                    <div class="advantage-item mb-4">
                        <h3 class="h5"><i class="fas fa-lock text-primary me-2"></i> Sicurezza Garantita</h3>
                        <p>Protezione dei dati con crittografia avanzata e autenticazione a più fattori.</p>
                    </div>
                    <div class="advantage-item">
                        <h3 class="h5"><i class="fas fa-mobile-alt text-primary me-2"></i> Accessibilità Totale</h3>
                        <p>Accedi alla piattaforma da qualsiasi dispositivo, ovunque ti trovi.</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="assets/images/advantages-illustration.svg" alt="CoreSuite Vantaggi" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <img src="assets/images/logo-white.png" alt="CoreSuite Logo" height="40" class="mb-3">
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
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0">&copy; <?php echo $current_year; ?> CoreSuite. Tutti i diritti riservati.</p>
            </div>
        </div>
    </footer>    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
