document.addEventListener('DOMContentLoaded', function () {
    const langLinks = document.querySelectorAll('.lang-button .sub-menu a');

    langLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            const selectedLocale = this.textContent.trim() === 'عربي' ? 'ar' : 'en';

            const currentUrl = new URL(window.location.href);
            currentUrl.searchParams.set('lang', selectedLocale);
            window.location.href = currentUrl.toString();
        });
    });
});
