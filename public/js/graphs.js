
document.addEventListener("DOMContentLoaded", function () {

    var bars = document.querySelectorAll('.graph-info-bar');

    bars.forEach(function (bar) {

        var initialWidth = bar.offsetWidth;

        bar.style.width = '0';

        setTimeout(function () {
            bar.style.width = initialWidth + 'px';
        }, 500);
    });
});
