document.addEventListener('DOMContentLoaded', function() {
    const loginSection = document.querySelector('.login-section');
    const loginLink = document.querySelector('.login-link');
    const registerLink = document.querySelector('.register-link');

    registerLink.addEventListener('click', () => {
        loginSection.classList.add('active');
    });

    loginLink.addEventListener('click', () => {
        loginSection.classList.remove('active');
    });
});
