function changeLanguage(locale) {
    const currentUrl = window.location.href;
    const baseUrl = document.querySelector('meta[name="base-url"]').content;
    const url = `${baseUrl}/change-language/${locale}`;
    console.log('Redirecting to:', url);
    window.location.href = `${url}?redirect=${encodeURIComponent(currentUrl)}`;
}