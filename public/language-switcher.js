function changeLanguage(locale) {
    const currentUrl = window.location.href;
    const url = `/change-language/${locale}`;
    window.location.href = `${url}?redirect=${encodeURIComponent(currentUrl)}`;
}