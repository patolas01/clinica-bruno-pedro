jQuery(document).ready(function ($) {
    $(document).ready(function () {
        $('.slider').each(function () {
            var $this = $(this);
            var $track = $this.find('.slider-track');
            var $items = $this.find('.slider-item');
            var $dotsContainer = $this.find('.slider-nav-dots');
            var totalItems = $items.length;
            var currentIndex = 0;

            // Adiciona os botões indicadores
            for (var i = 0; i < totalItems; i++) {
                var $dot = $('<div class="slider-dot"></div>');
                $dotsContainer.append($dot);
            }

            var $dots = $dotsContainer.find('.slider-dot');

            // Atualiza a classe ativa para o indicador atual
            function updateDots() {
                $dots.removeClass('active').eq(currentIndex).addClass('active');
            }

            // Atualiza a visibilidade dos botões de navegação
            function updateNavButtons() {
                if (currentIndex === 0) {
                    $this.find('.slider-btn.left').hide();
                } else {
                    $this.find('.slider-btn.left').show();
                }

                if (currentIndex === totalItems - 1) {
                    $this.find('.slider-btn.right').hide();
                } else {
                    $this.find('.slider-btn.right').show();
                }
            }

            // Função para ir para o próximo slide
            function nextSlide() {
                if (currentIndex < totalItems - 1) {
                    currentIndex++;
                    var translateValue = -100 * currentIndex + '%';
                    $track.css('transform', 'translateX(' + translateValue + ')');
                    updateDots();
                    updateNavButtons();
                }
            }

            // Função para ir para o slide anterior
            function prevSlide() {
                if (currentIndex > 0) {
                    currentIndex--;
                    var translateValue = -100 * currentIndex + '%';
                    $track.css('transform', 'translateX(' + translateValue + ')');
                    updateDots();
                    updateNavButtons();
                }
            }

            // Associa os eventos aos botões de navegação
            $this.find('.slider-btn.left').on('click', prevSlide);
            $this.find('.slider-btn.right').on('click', nextSlide);

            // Associa os eventos aos botões indicadores
            $dots.on('click', function () {
                var index = $(this).index();
                currentIndex = index;
                var translateValue = -100 * currentIndex + '%';
                $track.css('transform', 'translateX(' + translateValue + ')');
                updateDots();
                updateNavButtons();
            });

            // Inicializa o slider
            updateDots();
            updateNavButtons();
        });
    });
});
