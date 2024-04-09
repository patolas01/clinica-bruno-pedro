// const toogle_btn = document.querySelector('.toggle_btn');
//     const close_btn = document.querySelector('.close_btn');
//     const dropDownMenu = document.querySelector('.dropdown_menu');

//     toogle_btn.onclick = function () {
//       dropDownMenu.classList.remove('open');
//     }
//     close_btn.onclick = function () {
//       dropDownMenu.classList.toggle('open');
//     }





// Select the toggle button for the dropdown
const toggleBtn = document.querySelector('[data-toggle="dropdown"]');

// Select the dropdown menu itself
const dropdownMenu = document.querySelector('.dropdown-menu');

// Add an event listener to the toggle button
toggleBtn.addEventListener('click', function () {
    // Toggle the 'show' class on the dropdown menu
    dropdownMenu.classList.toggle('show');
});

// Close the dropdown menu when clicking outside of it
document.addEventListener('click', function (event) {
    if (!toggleBtn.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.remove('show');
    }
});
