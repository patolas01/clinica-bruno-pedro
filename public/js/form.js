document.addEventListener("DOMContentLoaded", function() {
    const textarea = document.getElementById('mensagem');

    textarea.addEventListener('input', function() {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight) + 'px';
    });
});
