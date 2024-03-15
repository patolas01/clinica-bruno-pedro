document.addEventListener('scroll', function (e) {
    var top = window.pageYOffset + window.innerHeight,
        isVisible = top > document.querySelector('.reviewItem').offsetTop;

    if (isVisible) {
        var items = document.querySelectorAll('.reviewItem');
        items.forEach(function (item) {
            item.classList.add('animation');
        });
    }
});
