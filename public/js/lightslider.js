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

            function moveToSlide(index) {
                var $targetSlide = $items.eq(index);
                var offset = $targetSlide.position().left;

                // Ajusta a largura negativa do slider-track
                $track.stop().animate({ left: -offset }, 500, function () {
                    // Callback para garantir que a animação tenha sido concluída antes de remover a classe
                    $track.removeClass('transition-active');
                });

                // Adiciona uma classe para controlar a transição
                $track.addClass('transition-active');

                currentIndex = index;
                updateDots();
            }



            // Associa os eventos aos botões de navegação
            $this.find('.slider-btn.left').on('click', function () {
                if (currentIndex > 0) {
                    moveToSlide(currentIndex - 1);
                } else {
                    moveToSlide(totalItems - 1); // Volta para o último slide se estiver no primeiro
                }
            });

            $this.find('.slider-btn.right').on('click', function () {
                if (currentIndex < totalItems - 1) {
                    moveToSlide(currentIndex + 1);
                } else {
                    moveToSlide(0); // Volta para o primeiro slide se estiver no último
                }
            });

            // Associa os eventos aos botões indicadores
            $dots.on('click', function () {
                var index = $(this).index();
                moveToSlide(index);
            });

            // Inicializa o slider
            updateDots();
        });
    });
});
