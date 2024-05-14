document.addEventListener('DOMContentLoaded', function() {
    feather.replace(); // Inicializa los iconos de Feather

    // Función para abrir los modales
    var modalButtons = document.querySelectorAll('.openModal');
    modalButtons.forEach(function(btn) {
        btn.onclick = function() {
            var targetModal = this.getAttribute('data-target');
            var modal = document.getElementById(targetModal);
            if (modal) {
                modal.style.display = 'block';
            }
        };
    });

    // Funciones para cerrar los modales
    var closeButtons = document.getElementsByClassName('close');
    Array.from(closeButtons).forEach(function(btn) {
        btn.onclick = function() {
            var modal = this.closest('.modal');
            if (modal) {
                modal.style.display = 'none';
            }
        };
    });

    // Función para cambiar la imagen principal del modal basado en las miniaturas
    var thumbnails = document.querySelectorAll('.thumbnails img');
    thumbnails.forEach(function(thumbnail) {
        thumbnail.onclick = function() {
            var mainImage = this.closest('.gallery').querySelector('.main-image img');
            mainImage.src = this.src;  // Cambia el src de la imagen principal a la src de la miniatura clickeada
        };
    });

    // Cierra los modales si el usuario hace clic fuera de ellos
    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
            event.target.style.display = 'none';
        }
    };

    // Scroll suave para anclas
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});


