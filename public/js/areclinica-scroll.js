document.addEventListener('scroll', function (e) {
    var top = window.pageYOffset + window.innerHeight,
        isVisible = top > document.querySelector('.servicos-card').offsetTop;






    if (isVisible) {
        var items = document.querySelectorAll('.servicos-card');
        var delay = 500;
        items.forEach(function (item) {
            setTimeout(function () {
                item.classList.add('animation');
                item.style.opacity = '100';
            }, delay);
            delay += 400;
        });
    }

});
