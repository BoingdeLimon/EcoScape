document.addEventListener('DOMContentLoaded', function() {
    // Inicializar todos los iconos feather
    feather.replace();

    // Manejar la apertura y cierre del modal
    var modal = document.getElementById('modal');
    var btn = document.getElementById('openModal');
    var span = document.getElementsByClassName('close')[0];

    btn.onclick = function() {
        modal.style.display = 'block';
    }

    span.onclick = function() {
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }

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

function changeImage(src) {
    document.getElementById('mainImage').src = src;
}
