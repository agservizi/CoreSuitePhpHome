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
<body class="layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-lg navbar-light navbar-white sticky-top">
            <div class="container">
                <a href="https://coresuite.it/" class="navbar-brand">
                    <img src="assets/images/logo.png" alt="CoreSuite Logo" class="brand-image" height="32">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#funzionalita" data-scroll>
                                <i class="fas fa-cube nav-icon"></i>
                                <p>Funzionalità</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gestori" data-scroll>
                                <i class="fas fa-building nav-icon"></i>
                                <p>Gestori</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#vantaggi" data-scroll>
                                <i class="fas fa-star nav-icon"></i>
                                <p>Vantaggi</p>
                            </a>
                        </li>
                    </ul>

                    <!-- Right navbar links -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="https://app.coresuite.it/login.php" class="btn btn-primary">
                                <i class="fas fa-sign-in-alt mr-2"></i> Accedi
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Content Wrapper -->
        <div class="content-wrapper bg-white">
            <!-- Hero Section -->
            <div class="hero-section position-relative overflow-hidden">
                <!-- Video Background -->
                <div class="video-background">
                    <div class="video-foreground">
                        <div class="overlay"></div>
                        <video autoplay muted loop playsinline id="heroVideo">
                            <source src="assets/videos/abstract-bg.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>

                <!-- Hero Content -->
                <div class="content-header bg-transparent text-white py-7 position-relative">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6" data-aos="fade-right">
                                <div class="hero-content">
                                    <h1 class="display-4 font-weight-bold mb-4 text-shadow">
                                        La Soluzione Definitiva per la Gestione dei Contratti
                                    </h1>
                                    <p class="lead mb-4 text-shadow">
                                        Automazione, Sicurezza e Semplicità per la tua Azienda. Gestisci contratti 
                                        telefonici, luce e gas in un'unica piattaforma intelligente.
                                    </p>
                                    <div class="d-flex gap-3 hero-buttons">
                                        <a href="https://app.coresuite.it/login.php" class="btn btn-lg btn-primary btn-hero mr-3">
                                            <i class="fas fa-rocket mr-2"></i> Inizia Ora
                                        </a>
                                        <a href="#demo" class="btn btn-lg btn-outline-light btn-hero">
                                            <i class="fas fa-play-circle mr-2"></i> Guarda il Demo
                                        </a>
                                    </div>
                                    <div class="hero-badges mt-4">
                                        <span class="badge bg-success">
                                            <i class="fas fa-shield-alt mr-1"></i> Sicuro al 100%
                                        </span>
                                        <span class="badge bg-info ml-2">
                                            <i class="fas fa-sync mr-1"></i> Aggiornamenti Continui
                                        </span>
                                        <span class="badge bg-warning ml-2">
                                            <i class="fas fa-headset mr-1"></i> Supporto 24/7
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
                                <div class="hero-image-wrapper">
                                    <img src="assets/images/hero-illustration.svg" alt="CoreSuite Dashboard" class="img-fluid hero-image">
                                    <div class="floating-card card-1">
                                        <div class="small-card bg-success">
                                            <i class="fas fa-check"></i>
                                            <span>Contratto Completato</span>
                                        </div>
                                    </div>
                                    <div class="floating-card card-2">
                                        <div class="small-card bg-info">
                                            <i class="fas fa-chart-line"></i>
                                            <span>+27% Questo Mese</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <section class="content py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box" data-aos="fade-up">
                                <span class="info-box-icon bg-primary"><i class="fas fa-users"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Clienti Attivi</span>
                                    <span class="info-box-number">1,000+</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box" data-aos="fade-up" data-aos-delay="100">
                                <span class="info-box-icon bg-success"><i class="fas fa-file-contract"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Contratti Gestiti</span>
                                    <span class="info-box-number">50,000+</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                                <span class="info-box-icon bg-warning"><i class="fas fa-clock"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Ore Risparmiate</span>
                                    <span class="info-box-number">10,000+</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box" data-aos="fade-up" data-aos-delay="300">
                                <span class="info-box-icon bg-danger"><i class="fas fa-building"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Gestori Supportati</span>
                                    <span class="info-box-number">15+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Funzionalità Section -->
            <section id="funzionalita" class="content py-5">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="content-header" data-aos="fade-up">Le Nostre Funzionalità</h2>
                        <p class="lead" data-aos="fade-up">Scopri tutti gli strumenti che CoreSuite mette a tua disposizione</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-3" data-aos="fade-up">
                            <div class="card card-primary card-outline h-100">
                                <div class="card-body box-profile">
                                    <div class="text-center mb-3">
                                        <i class="fas fa-file-contract fa-3x text-primary"></i>
                                    </div>
                                    <h3 class="profile-username text-center">Gestione Contratti</h3>
                                    <p class="text-muted text-center">
                                        Gestisci contratti telefonici, luce e gas in un'unica piattaforma intuitiva.
                                    </p>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <i class="fas fa-check text-success mr-2"></i> Gestione Multi-servizio
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check text-success mr-2"></i> Tracking Avanzato
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check text-success mr-2"></i> Storico Completo
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="card card-primary card-outline h-100">
                                <div class="card-body box-profile">
                                    <div class="text-center mb-3">
                                        <i class="fas fa-magic fa-3x text-primary"></i>
                                    </div>
                                    <h3 class="profile-username text-center">Autocompletamento</h3>
                                    <p class="text-muted text-center">
                                        Sistema intelligente di autocompletamento per clienti esistenti.
                                    </p>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <i class="fas fa-check text-success mr-2"></i> AI Powered
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check text-success mr-2"></i> Dati Verificati
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check text-success mr-2"></i> Zero Errori
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="card card-primary card-outline h-100">
                                <div class="card-body box-profile">
                                    <div class="text-center mb-3">
                                        <i class="fas fa-chart-line fa-3x text-primary"></i>
                                    </div>
                                    <h3 class="profile-username text-center">Dashboard Interattiva</h3>
                                    <p class="text-muted text-center">
                                        Visualizza grafici e statistiche in tempo reale per monitorare le tue performance.
                                    </p>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <i class="fas fa-check text-success mr-2"></i> Report Real-time
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check text-success mr-2"></i> Grafici Interattivi
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check text-success mr-2"></i> Export Automatici
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="card card-primary card-outline h-100">
                                <div class="card-body box-profile">
                                    <div class="text-center mb-3">
                                        <i class="fas fa-shield-alt fa-3x text-primary"></i>
                                    </div>
                                    <h3 class="profile-username text-center">Sicurezza Avanzata</h3>
                                    <p class="text-muted text-center">
                                        Protezione dei dati con MFA e gestione ruoli differenziata.
                                    </p>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <i class="fas fa-check text-success mr-2"></i> MFA Integrato
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check text-success mr-2"></i> Ruoli & Permessi
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check text-success mr-2"></i> Audit Log
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gestori Section -->
            <section id="gestori" class="content py-5 bg-light">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="content-header" data-aos="fade-up">Gestori Supportati</h2>
                        <p class="lead" data-aos="fade-up">Integrazione completa con i principali operatori nazionali</p>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-6" data-aos="fade-right">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-phone-alt mr-2"></i>
                                        Telefonia
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-4">
                                            <img src="assets/images/fastweb-logo.png" alt="Fastweb" class="img-fluid filter-gray">
                                        </div>
                                        <div class="col-4">
                                            <img src="assets/images/windtre-logo.png" alt="Windtre" class="img-fluid filter-gray">
                                        </div>
                                        <div class="col-4">
                                            <img src="assets/images/pianetafibra-logo.png" alt="Pianeta Fibra" class="img-fluid filter-gray">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-primary card-outline mt-4">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-bolt mr-2"></i>
                                        Luce e Gas
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-4">
                                            <img src="assets/images/enel-logo.png" alt="Enel Energia" class="img-fluid filter-gray">
                                        </div>
                                        <div class="col-4">
                                            <img src="assets/images/fastweb-energia-logo.png" alt="Fastweb Energia" class="img-fluid filter-gray">
                                        </div>
                                        <div class="col-4">
                                            <img src="assets/images/a2a-logo.png" alt="A2A Energia" class="img-fluid filter-gray">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left">
                            <div class="callout callout-info">
                                <h4><i class="fas fa-info-circle mr-2"></i> Gestione Semplificata dei Contratti</h4>
                                <p class="lead">CoreSuite rende semplice e veloce la gestione dei contratti per tutti i principali gestori di servizi telefonici, luce e gas.</p>
                            </div>
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="info-box bg-gradient-info">
                                                <span class="info-box-icon"><i class="fas fa-magic"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Compilazione Automatica</span>
                                                    <span class="info-box-number">dei Moduli</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-box bg-gradient-success">
                                                <span class="info-box-icon"><i class="fas fa-check-double"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Verifica Real-time</span>
                                                    <span class="info-box-number">delle Offerte</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-box bg-gradient-warning">
                                                <span class="info-box-icon"><i class="fas fa-tasks"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Monitoraggio</span>
                                                    <span class="info-box-number">Stato Pratiche</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-box bg-gradient-danger">
                                                <span class="info-box-icon"><i class="fas fa-file-alt"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Gestione</span>
                                                    <span class="info-box-number">Documentazione</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Vantaggi Section -->
            <section id="vantaggi" class="content py-5">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="content-header" data-aos="fade-up">I Vantaggi di CoreSuite</h2>
                        <p class="lead" data-aos="fade-up">Scopri perché sempre più aziende scelgono CoreSuite</p>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-6" data-aos="fade-right">
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-infos clearfix">
                                            <span class="direct-chat-timestamp float-right">Fino al 70% di tempo risparmiato</span>
                                        </div>
                                        <div class="direct-chat-img bg-primary d-flex align-items-center justify-content-center">
                                            <i class="fas fa-clock text-white"></i>
                                        </div>
                                        <div class="direct-chat-text">
                                            <h4 class="m-0">Risparmio di Tempo</h4>
                                            <p class="text-muted mb-0">Automatizza le attività ripetitive e riduci i tempi di gestione.</p>
                                        </div>
                                    </div>

                                    <div class="direct-chat-msg right mt-4">
                                        <div class="direct-chat-infos clearfix">
                                            <span class="direct-chat-timestamp float-left">Intelligenza Artificiale integrata</span>
                                        </div>
                                        <div class="direct-chat-img bg-success d-flex align-items-center justify-content-center">
                                            <i class="fas fa-robot text-white"></i>
                                        </div>
                                        <div class="direct-chat-text">
                                            <h4 class="m-0">Automazione Intelligente</h4>
                                            <p class="text-muted mb-0">Sistema di autocompletamento e suggerimenti basati sui dati storici.</p>
                                        </div>
                                    </div>

                                    <div class="direct-chat-msg mt-4">
                                        <div class="direct-chat-infos clearfix">
                                            <span class="direct-chat-timestamp float-right">Crittografia avanzata e MFA</span>
                                        </div>
                                        <div class="direct-chat-img bg-warning d-flex align-items-center justify-content-center">
                                            <i class="fas fa-lock text-white"></i>
                                        </div>
                                        <div class="direct-chat-text">
                                            <h4 class="m-0">Sicurezza Garantita</h4>
                                            <p class="text-muted mb-0">Protezione dei dati con crittografia avanzata e autenticazione a più fattori.</p>
                                        </div>
                                    </div>

                                    <div class="direct-chat-msg right mt-4">
                                        <div class="direct-chat-infos clearfix">
                                            <span class="direct-chat-timestamp float-left">Desktop, Tablet e Mobile</span>
                                        </div>
                                        <div class="direct-chat-img bg-danger d-flex align-items-center justify-content-center">
                                            <i class="fas fa-mobile-alt text-white"></i>
                                        </div>
                                        <div class="direct-chat-text">
                                            <h4 class="m-0">Accessibilità Totale</h4>
                                            <p class="text-muted mb-0">Accedi alla piattaforma da qualsiasi dispositivo, ovunque ti trovi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left">
                            <img src="assets/images/advantages-illustration.svg" alt="CoreSuite Vantaggi" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonianze Section -->
            <section class="content py-5 bg-light">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="content-header" data-aos="fade-up">Cosa Dicono i Nostri Clienti</h2>
                        <p class="lead" data-aos="fade-up">Esperienze reali di chi usa CoreSuite ogni giorno</p>
                    </div>
                    
                    <!-- Testimonial Slider -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary card-outline card-tabs">
                                <div class="card-header p-0 pt-1 border-bottom-0">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#testimonial1" role="tab">Agenzia Milano</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#testimonial2" role="tab">Studio Roma</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#testimonial3" role="tab">Consulente Napoli</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="testimonial1" role="tabpanel">
                                            <div class="d-flex align-items-center mb-4">
                                                <div class="mr-4">
                                                    <img src="https://ui-avatars.com/api/?name=Marco+Rossi&background=random" 
                                                         alt="Marco Rossi" 
                                                         class="rounded-circle" 
                                                         width="80">
                                                </div>
                                                <div>
                                                    <h5 class="mb-1">Marco Rossi</h5>
                                                    <p class="text-muted mb-0">Direttore Commerciale, Agenzia Milano</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-content">
                                                <i class="fas fa-quote-left fa-2x text-primary mb-3"></i>
                                                <p class="lead">
                                                    "CoreSuite ha rivoluzionato il nostro modo di gestire i contratti. 
                                                    L'automazione ci ha permesso di ridurre gli errori del 90% e di 
                                                    velocizzare notevolmente il processo di acquisizione clienti."
                                                </p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="testimonial2" role="tabpanel">
                                            <div class="d-flex align-items-center mb-4">
                                                <div class="mr-4">
                                                    <img src="https://ui-avatars.com/api/?name=Laura+Bianchi&background=random" 
                                                         alt="Laura Bianchi" 
                                                         class="rounded-circle" 
                                                         width="80">
                                                </div>
                                                <div>
                                                    <h5 class="mb-1">Laura Bianchi</h5>
                                                    <p class="text-muted mb-0">Titolare, Studio Roma</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-content">
                                                <i class="fas fa-quote-left fa-2x text-primary mb-3"></i>
                                                <p class="lead">
                                                    "Da quando utilizziamo CoreSuite, la gestione dei contratti è diventata 
                                                    molto più efficiente. L'interfaccia intuitiva e il supporto eccellente 
                                                    hanno reso l'adozione del sistema rapidissima."
                                                </p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="testimonial3" role="tabpanel">
                                            <div class="d-flex align-items-center mb-4">
                                                <div class="mr-4">
                                                    <img src="https://ui-avatars.com/api/?name=Giuseppe+Verdi&background=random" 
                                                         alt="Giuseppe Verdi" 
                                                         class="rounded-circle" 
                                                         width="80">
                                                </div>
                                                <div>
                                                    <h5 class="mb-1">Giuseppe Verdi</h5>
                                                    <p class="text-muted mb-0">Consulente Energetico, Napoli</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-content">
                                                <i class="fas fa-quote-left fa-2x text-primary mb-3"></i>
                                                <p class="lead">
                                                    "CoreSuite mi ha permesso di triplicare il numero di contratti gestiti 
                                                    mensilmente. La possibilità di accedere da qualsiasi dispositivo e 
                                                    l'automazione dei processi sono caratteristiche fondamentali."
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Pricing Section -->
            <section class="content py-5">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="content-header" data-aos="fade-up">Piani e Prezzi</h2>
                        <p class="lead" data-aos="fade-up">Scegli il piano più adatto alle tue esigenze</p>
                    </div>
                    <div class="row">
                        <!-- Starter Plan -->
                        <div class="col-lg-4" data-aos="fade-up">
                            <div class="card card-outline">
                                <div class="card-header text-center">
                                    <h3 class="card-title">Starter</h3>
                                    <div class="card-tools">
                                        <span class="badge badge-info">
                                            Per Iniziare
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <h2 class="pricing-header">
                                            €49<small>/mese</small>
                                        </h2>
                                        <p class="text-muted">Ideale per agenti individuali</p>
                                    </div>
                                    <ul class="list-unstyled mt-4">
                                        <li class="mb-3">
                                            <i class="fas fa-check text-success mr-2"></i> Fino a 50 contratti/mese
                                        </li>
                                        <li class="mb-3">
                                            <i class="fas fa-check text-success mr-2"></i> Dashboard base
                                        </li>
                                        <li class="mb-3">
                                            <i class="fas fa-check text-success mr-2"></i> Supporto email
                                        </li>
                                        <li class="mb-3">
                                            <i class="fas fa-times text-danger mr-2"></i> API access
                                        </li>
                                        <li class="mb-3">
                                            <i class="fas fa-times text-danger mr-2"></i> Reportistica avanzata
                                        </li>
                                    </ul>
                                    <div class="text-center mt-4">
                                        <a href="https://app.coresuite.it/login.php" class="btn btn-outline-primary btn-lg btn-block">
                                            Prova Gratis
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Professional Plan -->
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card card-primary card-outline">
                                <div class="ribbon-wrapper">
                                    <div class="ribbon bg-primary">
                                        Popular
                                    </div>
                                </div>
                                <div class="card-header text-center">
                                    <h3 class="card-title">Professional</h3>
                                    <div class="card-tools">
                                        <span class="badge badge-primary">
                                            Più Venduto
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <h2 class="pricing-header">
                                            €99<small>/mese</small>
                                        </h2>
                                        <p class="text-muted">Perfetto per piccole agenzie</p>
                                    </div>
                                    <ul class="list-unstyled mt-4">
                                        <li class="mb-3">
                                            <i class="fas fa-check text-success mr-2"></i> Contratti illimitati
                                        </li>
                                        <li class="mb-3">
                                            <i class="fas fa-check text-success mr-2"></i> Dashboard avanzata
                                        </li>
                                        <li class="mb-3">
                                            <i class="fas fa-check text-success mr-2"></i> Supporto prioritario
                                        </li>
                                        <li class="mb-3">
                                            <i class="fas fa-check text-success mr-2"></i> API access
                                        </li>
                                        <li class="mb-3">
                                            <i class="fas fa-times text-danger mr-2"></i> White label
                                        </li>
                                    </ul>
                                    <div class="text-center mt-4">
                                        <a href="https://app.coresuite.it/login.php" class="btn btn-primary btn-lg btn-block">
                                            Inizia Ora
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Enterprise Plan -->
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="card card-outline">
                                <div class="card-header text-center">
                                    <h3 class="card-title">Enterprise</h3>
                                    <div class="card-tools">
                                        <span class="badge badge-success">
                                            Completo
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <h2 class="pricing-header">
                                            Contattaci
                                        </h2>
                                        <p class="text-muted">Per grandi organizzazioni</p>
                                    </div>
                                    <ul class="list-unstyled mt-4">
                                        <li class="mb-3">
                                            <i class="fas fa-check text-success mr-2"></i> Tutto di Professional
                                        </li>
                                        <li class="mb-3">
                                            <i class="fas fa-check text-success mr-2"></i> White label
                                        </li>
                                        <li class="mb-3">
                                            <i class="fas fa-check text-success mr-2"></i> Integrazioni custom
                                        </li>
                                        <li class="mb-3">
                                            <i class="fas fa-check text-success mr-2"></i> Account manager dedicato
                                        </li>
                                        <li class="mb-3">
                                            <i class="fas fa-check text-success mr-2"></i> SLA garantito
                                        </li>
                                    </ul>
                                    <div class="text-center mt-4">
                                        <a href="#" class="btn btn-success btn-lg btn-block">
                                            Contattaci
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="content py-5 bg-gradient-primary text-white">
                <div class="container text-center">
                    <h2 class="mb-4" data-aos="fade-up">Pronto a Iniziare?</h2>
                    <p class="lead mb-4" data-aos="fade-up">Unisciti a migliaia di professionisti che hanno già scelto CoreSuite</p>
                    <a href="https://app.coresuite.it/login.php" class="btn btn-lg btn-light" data-aos="zoom-in">
                        <i class="fas fa-rocket mr-2"></i> Inizia Ora
                    </a>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <img src="assets/images/logo-white.png" alt="CoreSuite Logo" height="40" class="mb-3">
                        <p class="text-muted mb-0">La soluzione completa per la gestione dei tuoi contratti.</p>
                    </div>
                    <div class="col-md-2 mb-4 mb-md-0">
                        <h5>Prodotto</h5>
                        <ul class="list-unstyled">
                            <li><a href="#funzionalita">Funzionalità</a></li>
                            <li><a href="#gestori">Gestori</a></li>
                            <li><a href="#vantaggi">Vantaggi</a></li>
                            <li><a href="supporto.php">Supporto</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 mb-4 mb-md-0">
                        <h5>Azienda</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Chi Siamo</a></li>
                            <li><a href="#">Contatti</a></li>
                            <li><a href="#">Lavora con Noi</a></li>
                            <li><a href="#">Partner</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 mb-4 mb-md-0">
                        <h5>Legale</h5>
                        <ul class="list-unstyled">
                            <li><a href="privacy-policy.php">Privacy Policy</a></li>
                            <li><a href="termini-condizioni.php">Termini e Condizioni</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                            <li><a href="#">GDPR</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <h5>Social</h5>
                        <div class="social-links">
                            <a href="#" class="mr-2"><i class="fab fa-facebook fa-lg"></i></a>
                            <a href="#" class="mr-2"><i class="fab fa-twitter fa-lg"></i></a>
                            <a href="#" class="mr-2"><i class="fab fa-linkedin fa-lg"></i></a>
                            <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
                        </div>
                    </div>
                </div>
                <hr class="mt-4">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="text-muted mb-0">
                            &copy; <?php echo $current_year; ?> CoreSuite. Tutti i diritti riservati.
                        </p>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <img src="assets/images/payment-methods.png" alt="Metodi di Pagamento" height="30">
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Navbar scroll behavior
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.main-header');
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-light', 'bg-white', 'shadow-sm');
                navbar.classList.remove('navbar-dark', 'bg-transparent');
            } else {
                navbar.classList.remove('navbar-light', 'bg-white', 'shadow-sm');
                navbar.classList.add('navbar-dark', 'bg-transparent');
            }
        });
    </script>
</body>
</html>
