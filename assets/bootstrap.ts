import './styles/bootstrap.scss';

(function() {
    const handleDarkModeChange = event => document.documentElement.setAttribute('data-bs-theme', event.matches ? 'dark' : 'light');
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', handleDarkModeChange);
    handleDarkModeChange(window.matchMedia('(prefers-color-scheme: dark)'));
})()
