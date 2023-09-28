document.addEventListener('DOMContentLoaded', function() {
    const lightModeButton = document.getElementById('lightModeButton');
    const darkModeButton = document.getElementById('darkModeButton');

    lightModeButton.addEventListener('click', function() {
        document.body.classList.remove('dark-mode');
        document.body.classList.add('light-mode');
        localStorage.setItem('mode', 'light');
    });

    darkModeButton.addEventListener('click', function() {
        document.body.classList.remove('light-mode');
        document.body.classList.add('dark-mode');
        localStorage.setItem('mode', 'dark');
    });

    const savedMode = localStorage.getItem('mode');
    if (savedMode === 'dark') {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.add('light-mode');
    }
});
