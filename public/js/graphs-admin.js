const items = document.querySelectorAll('.graph-item');

items.forEach((item, index) => {
    setTimeout(() => {
        item.classList.add('active');
        item.querySelector('.graph-info').textContent = `${item.dataset.percentage}%`;
    }, 100 * index);
});

items.forEach((item, index) => {
    item.addEventListener('mouseover', () => {
        removeActiveClass(item);
        item.classList.add('active');
        showInfo(item);
    });

    item.addEventListener('mouseout', () => {
        removeActiveClass(item);
        setTimeout(() => {
            showInfo(items[0]);
        }, 300);
    });
});

function removeActiveClass(activeItem) {
    items.forEach((item) => {
        if (item !== activeItem) {
            item.classList.remove('active');
        }
    });
}

function showInfo(item) {
    item.querySelector('.graph-info').style.display = 'block';
}

const items2 = document.querySelectorAll('.graph-item-bar');

items2.forEach((item) => {
    item.style.width = `${item.dataset.value}%`;
    item.style.left = `${item.dataset.percentage}%`;
});
