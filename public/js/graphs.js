
document.addEventListener("DOMContentLoaded", function () {
    // Get all elements with the class "graph-info-bar"
    var bars = document.querySelectorAll('.graph-info-bar');

    // Loop through each bar element
    bars.forEach(function (bar) {
        // Get the initial width of the bar
        var initialWidth = bar.offsetWidth;

        // Set the width to 0 initially
        bar.style.width = '0';

        // Use setTimeout to gradually increase the width
        setTimeout(function () {
            bar.style.width = initialWidth + 'px';
        }, 500); // Adjust the delay as needed
    });
});
