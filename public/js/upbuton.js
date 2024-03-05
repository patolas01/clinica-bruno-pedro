window.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY;

    // Exibir o botão quando a posição de rolagem for maior que 500 pixels
    if (scrollPosition > 400) {
        document.querySelector('.scroll-to-top').style.display = 'block';
    } else {
        // Ocultar o botão caso contrário
        document.querySelector('.scroll-to-top').style.display = 'none';
    }

    document.querySelector('.scroll-to-top').addEventListener('click', function(event) {
        event.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
