document.addEventListener('DOMContentLoaded', function() {
    let slides = document.querySelectorAll('.slide');
    let index = 0;
    
    function nextSlide() {
      slides[index].classList.remove('active');
      index = (index + 1) % slides.length; // Incrementa el índice o vuelve al inicio
      slides[index].classList.add('active');
    }
    
    setInterval(nextSlide, 8000); // Cambia cada 3000 milisegundos (3 segundos)
  });
  