<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termini e Condizioni - CoreSuite</title>
    
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

    <!-- Terms Content -->
    <section class="py-5 mt-5">
        <div class="container">
            <h1 class="mb-4">Termini e Condizioni</h1>
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="h4 mb-4">Condizioni di Utilizzo di CoreSuite</h2>
                    <p class="mb-4">Ultimo aggiornamento: <?php echo date('d/m/Y'); ?></p>

                    <h3 class="h5 mb-3">1. Accettazione dei Termini</h3>
                    <p>Utilizzando CoreSuite, accetti i seguenti termini e condizioni di utilizzo. Se non accetti questi termini, ti preghiamo di non utilizzare il servizio.</p>

                    <h3 class="h5 mb-3 mt-4">2. Descrizione del Servizio</h3>
                    <p>CoreSuite è una piattaforma per la gestione di contratti che offre:</p>
                    <ul>
                        <li>Gestione contratti telefonici, luce e gas</li>
                        <li>Dashboard interattiva</li>
                        <li>Sistema di autocompletamento</li>
                        <li>Funzionalità di sicurezza avanzate</li>
                    </ul>

                    <h3 class="h5 mb-3 mt-4">3. Account e Registrazione</h3>
                    <p>Per utilizzare CoreSuite è necessario:</p>
                    <ul>
                        <li>Creare un account con informazioni accurate</li>
                        <li>Mantenere la sicurezza delle credenziali</li>
                        <li>Notificare immediatamente eventuali accessi non autorizzati</li>
                    </ul>

                    <h3 class="h5 mb-3 mt-4">4. Utilizzo del Servizio</h3>
                    <p>L'utente si impegna a:</p>
                    <ul>
                        <li>Non violare leggi o regolamenti</li>
                        <li>Non interferire con il funzionamento del servizio</li>
                        <li>Non accedere ai dati di altri utenti</li>
                        <li>Non utilizzare il servizio per scopi illegali</li>
                    </ul>

                    <h3 class="h5 mb-3 mt-4">5. Abbonamento e Pagamenti</h3>
                    <ul>
                        <li>I prezzi sono indicati nella sezione dedicata</li>
                        <li>Il pagamento viene elaborato mensilmente</li>
                        <li>È possibile cancellare l'abbonamento in qualsiasi momento</li>
                    </ul>

                    <h3 class="h5 mb-3 mt-4">6. Limitazione di Responsabilità</h3>
                    <p>CoreSuite non è responsabile per:</p>
                    <ul>
                        <li>Interruzioni del servizio</li>
                        <li>Perdita di dati</li>
                        <li>Danni indiretti o consequenziali</li>
                    </ul>

                    <h3 class="h5 mb-3 mt-4">7. Contatti</h3>
                    <p>Per domande sui termini di servizio:</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-envelope me-2"></i> legal@coresuite.it</li>
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
