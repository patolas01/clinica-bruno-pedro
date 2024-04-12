
/* Index */
document.addEventListener('scroll', function (e) {
    var top = window.pageYOffset + window.innerHeight,
        isVisible = top > document.querySelector('.reviewItem').offsetTop;






    if (isVisible) {
        var items = document.querySelectorAll('.reviewItem');
        var delay = 0;
        items.forEach(function (item) {
            setTimeout(function () {
                item.classList.add('animation');
                item.style.opacity = '100';
            }, delay);
            delay += 1000;
        });
    }

});


