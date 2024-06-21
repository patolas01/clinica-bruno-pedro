window.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY;

 
    if (scrollPosition > 400) {
        document.querySelector('.scroll-to-top').style.display = 'block';
    } else {

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
