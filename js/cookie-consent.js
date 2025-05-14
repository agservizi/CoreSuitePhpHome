// Cookie Banner functionality
document.addEventListener('DOMContentLoaded', function() {
    const cookieBanner = document.getElementById('cookie-banner');
    const acceptCookiesBtn = document.getElementById('accept-cookies');
    const rejectCookiesBtn = document.getElementById('reject-cookies');
    const cookieSettings = document.getElementById('cookie-settings');
    
    // Check if cookie consent has been given
    if (!localStorage.getItem('cookieConsent')) {
        setTimeout(() => {
            cookieBanner.classList.remove('hidden');
            cookieBanner.classList.add('flex');
        }, 1000);
    }
    
    // Accept cookies
    acceptCookiesBtn.addEventListener('click', function() {
        localStorage.setItem('cookieConsent', 'accepted');
        cookieBanner.classList.add('hidden');
        cookieBanner.classList.remove('flex');
        
        // Here you would normally initialize your analytics tools
        console.log('Cookies accepted, analytics initialized');
    });
    
    // Reject cookies
    rejectCookiesBtn.addEventListener('click', function() {
        localStorage.setItem('cookieConsent', 'rejected');
        cookieBanner.classList.add('hidden');
        cookieBanner.classList.remove('flex');
        
        console.log('Cookies rejected');
    });
    
    // Show cookie settings
    cookieSettings.addEventListener('click', function() {
        // In a real implementation, this would show a modal with detailed settings
        alert('In una versione completa, qui si aprirebbero le impostazioni dettagliate dei cookie.');
    });
});
