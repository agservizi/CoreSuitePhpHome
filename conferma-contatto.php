<?php
// Layout di intestazione
$pageTitle = "Messaggio inviato - Coresuite";
$metaDescription = "Grazie per averci contattato. Il tuo messaggio è stato inviato con successo al team di Coresuite.";
include_once('components/header.php');
?>

<main>
    <!-- Messaggio di conferma -->
    <section class="pt-40 pb-20 bg-gradient-to-br from-blue-100 to-blue-50 min-h-screen flex items-center">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <div class="bg-white rounded-xl shadow-lg p-10 animate-fade-in">
                <div class="text-green-500 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                
                <h1 class="text-3xl font-bold text-blue-800 mb-4">Messaggio inviato con successo!</h1>
                <p class="text-lg text-gray-700 mb-8">Grazie per averci contattato. Il nostro team ti risponderà al più presto.</p>
                
                <div class="flex flex-col md:flex-row gap-4 justify-center">
                    <a href="index.php" class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow font-semibold hover:bg-blue-700 transition">Torna alla homepage</a>
                    <a href="contatti.php" class="px-6 py-3 bg-white text-blue-700 border border-blue-700 rounded-lg font-semibold hover:bg-blue-50 transition">Torna ai contatti</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
// Layout di piè di pagina
include_once('components/footer.php');
?>
