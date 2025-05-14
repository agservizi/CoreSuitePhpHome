<?php
// Layout di intestazione
$pageTitle = "Contattaci - Coresuite";
include_once('components/header.php');
?>

<main>
    <!-- Hero sezione contatti -->
    <section class="pt-32 pb-16 bg-gradient-to-br from-blue-100 to-blue-50">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold text-blue-800 mb-4">Contattaci</h1>
            <p class="text-lg text-gray-700 mb-6">Hai domande su Coresuite? Il nostro team è qui per aiutarti.</p>
        </div>
    </section>
    
    <!-- Sezione contatti -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-16">
                <!-- Informazioni di contatto -->
                <div>
                    <h2 class="text-2xl font-bold text-blue-800 mb-6">Informazioni di contatto</h2>
                    
                    <div class="space-y-8">
                        <div class="flex items-start space-x-4">
                            <div class="bg-blue-100 text-blue-700 p-2 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Telefono</h3>
                                <p class="text-gray-600">+39 02 1234567</p>
                                <p class="text-gray-600">Lun-Ven: 9:00-18:00</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="bg-blue-100 text-blue-700 p-2 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Email</h3>
                                <p class="text-gray-600">info@coresuite.it</p>
                                <p class="text-gray-600">supporto@coresuite.it</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="bg-blue-100 text-blue-700 p-2 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Sede</h3>
                                <p class="text-gray-600">Via Roma 123</p>
                                <p class="text-gray-600">20100 Milano, Italia</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-10">
                        <h3 class="font-semibold text-gray-900 mb-4">Seguici sui social</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-blue-100 hover:bg-blue-200 p-3 rounded-full text-blue-700 transition">
                                <svg fill="currentColor" viewBox="0 0 24 24" class="h-5 w-5"><path d="M24 4.557a9.93 9.93 0 0 1-2.828.775 4.932 4.932 0 0 0 2.165-2.724c-.951.564-2.005.974-3.127 1.195a4.92 4.92 0 0 0-8.384 4.482c-4.086-.205-7.713-2.164-10.141-5.144a4.822 4.822 0 0 0-.666 2.475c0 1.708.87 3.216 2.188 4.099a4.904 4.904 0 0 1-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.936 4.936 0 0 1-2.224.084c.627 1.956 2.444 3.377 4.6 3.417a9.867 9.867 0 0 1-6.102 2.104c-.396 0-.787-.023-1.175-.069a13.945 13.945 0 0 0 7.548 2.212c9.057 0 14.009-7.513 14.009-14.009 0-.213-.005-.425-.014-.636a10.012 10.012 0 0 0 2.457-2.548z"/></svg>
                            </a>
                            <a href="#" class="bg-blue-100 hover:bg-blue-200 p-3 rounded-full text-blue-700 transition">
                                <svg fill="currentColor" viewBox="0 0 24 24" class="h-5 w-5"><path d="M22.675 0h-21.35c-.733 0-1.325.592-1.325 1.326v21.348c0 .733.592 1.326 1.325 1.326h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.312h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.326v-21.349c0-.734-.593-1.326-1.326-1.326z"/></svg>
                            </a>
                            <a href="#" class="bg-blue-100 hover:bg-blue-200 p-3 rounded-full text-blue-700 transition">
                                <svg fill="currentColor" viewBox="0 0 24 24" class="h-5 w-5"><path d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11 19h-3v-9h3v9zm-1.5-10.28c-.97 0-1.75-.79-1.75-1.75s.78-1.75 1.75-1.75 1.75.79 1.75 1.75-.78 1.75-1.75 1.75zm15.5 10.28h-3v-4.5c0-1.08-.02-2.47-1.5-2.47-1.5 0-1.73 1.17-1.73 2.39v4.58h-3v-9h2.89v1.23h.04c.4-.75 1.38-1.54 2.84-1.54 3.04 0 3.6 2 3.6 4.59v4.72z"/></svg>
                            </a>
                            <a href="#" class="bg-blue-100 hover:bg-blue-200 p-3 rounded-full text-blue-700 transition">
                                <svg fill="currentColor" viewBox="0 0 24 24" class="h-5 w-5"><path d="M12 2c-5.52 0-10 4.48-10 10s4.48 10 10 10 10-4.48 10-10-4.48-10-10-10zm-1 14.5v-9l6 4.5-6 4.5z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Form di contatto -->
                <div>
                    <h2 class="text-2xl font-bold text-blue-800 mb-6">Inviaci un messaggio</h2>
                    
                    <form action="process_contact.php" method="POST" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-gray-700 mb-2">Nome*</label>
                                <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 mb-2">Email*</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                            </div>
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-gray-700 mb-2">Telefono</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-gray-700 mb-2">Oggetto*</label>
                            <select id="subject" name="subject" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                                <option value="">Seleziona un'opzione</option>
                                <option value="info">Informazioni generali</option>
                                <option value="support">Supporto tecnico</option>
                                <option value="pricing">Informazioni sui prezzi</option>
                                <option value="business">Partnership aziendale</option>
                                <option value="other">Altro</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-gray-700 mb-2">Messaggio*</label>
                            <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"></textarea>
                        </div>
                        
                        <div class="flex items-start">
                            <input type="checkbox" id="privacy" name="privacy" required class="mt-1 mr-2">
                            <label for="privacy" class="text-gray-700 text-sm">Acconsento al trattamento dei miei dati personali secondo la <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>*</label>
                        </div>
                        
                        <div>
                            <button type="submit" class="w-full md:w-auto px-8 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">Invia messaggio</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Mappa -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-blue-800 mb-8 text-center">Dove trovarci</h2>
            <div class="aspect-w-16 aspect-h-9 bg-gray-200 rounded-lg overflow-hidden shadow-md">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2798.2969785583364!2d9.189747615775764!3d45.46428437910105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c6a90e32d80b%3A0x62f90e5b068cae8!2sVia%20Roma%2C%20Milano%20MI!5e0!3m2!1sit!2sit!4v1622548516000!5m2!1sit!2sit" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
    
    <?php include_once('components/cta.php'); ?>
</main>

<?php
// Layout di piè di pagina
include_once('components/footer.php');
?>
