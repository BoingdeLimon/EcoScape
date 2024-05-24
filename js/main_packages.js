document.addEventListener('DOMContentLoaded', function () {
    fetchPaquetes();
});

function fetchPaquetes() {
    fetch('get_admin_paquetes.php')
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                console.error(data.error);
            } else {
                console.log(data); // Debugging: Log the data received
                displayPaquetes(data);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

function displayPaquetes(paquetes) {
    if (!Array.isArray(paquetes)) {
        console.error('Expected an array but got:', paquetes);
        return;
    }

    const container = document.querySelector('.pacotes-cards');
    container.innerHTML = ''; // Clear previous content if any

    paquetes.forEach(paquete => {
        const productDiv = document.createElement('div');
        productDiv.classList.add('card');
        productDiv.innerHTML = `
        <div class="card-tag card-tag-top">
          <p>Promoción</p>
        </div>
        <div class="card-tag card-tag-bottom">
          <p>MXN$ ${paquete.precio}</p>
        </div>
        <img class="card-image" src="${paquete.imagen}" alt="landscape">
        <div class="card-content">
          <h1>${paquete.nombre}</h1>
          <ul>
            <li><i data-feather="coffee"></i>Café</li>
            <li><i data-feather="wifi"></i>Wi-Fi</li>
            <li><i data-feather="map"></i>Recorrido</li>
          </ul>
          <div class="card-tag card-tag-bottomdos">
            <button class="openModal" data-target="modal${paquete.id}"><i data-feather="maximize-2"></i></button>
          </div>
        </div>
        `;

        const modalDiv = document.createElement('div');
        modalDiv.classList.add('modal');
        modalDiv.id = `modal${paquete.id}`;
        modalDiv.innerHTML = `
        <!-- Modal -->
        <div class="modal-content">
        <span class="close">&times;</span>
        <div class="content-wrapper">
            <!-- Galería de imágenes integrada -->
            <div id="gallery" class="gallery">
            <!-- Imagen Principal -->
            <div class="main-image">
                <img src="${paquete.imagen}" alt="Producto Principal" id="mainImage">
            </div>
            <!-- Miniaturas o Imágenes Secundarias -->
            <div class="thumbnails">
                <img src="assets/nepal/nepal1.jpg" alt="Vista 1" onclick="changeImage('assets/nepal/nepal1.jpg')">
                <img src="assets/japon/japon2.jpg" alt="Vista 2" onclick="changeImage('assets/japon/japon2.jpg')">
                <img src="assets/cabos/cabos3.jpg" alt="Vista 3" onclick="changeImage('assets/cabos/cabos3.jpg')">
                <img src="assets/senegal/senegal4.jpg" alt="Vista 4" onclick="changeImage('assets/senegal/senegal4.jpg')">
            </div>
            </div>
            <!-- Descripción -->
            <div class="description">
            <h2>Acerca de</h2>
            <p>${paquete.descripcion}</p>
            </div>
            <!-- Apartado para ingresar personas y seleccionar fechas -->
            <div class="booking-details">
            <form id="bookingForm" data-paquete-id="${paquete.id}">
                <label for="numPersons">Número de personas:</label>
                <input type="number" id="numPersons" name="numPersons" min="1" max="10" required>

                <label for="selectDate">Fechas disponibles:</label>
                <select id="selectDate" name="selectDate" required>
                <option value="2024-06-01">1 Junio 2024</option>
                <option value="2024-07-15">15 Julio 2024</option>
                <option value="2024-08-20">20 Agosto 2024</option>
                <option value="2024-09-10">10 Septiembre 2024</option>
                </select>

                <button type="submit">Reservar</button>
            </form>
            <div id="message${paquete.id}" style="display: none;"></div>
            </div>
        </div>
        </div>
        `;
        container.appendChild(productDiv);
        container.appendChild(modalDiv);
    });
    feather.replace();
    initializeFeatherAndModals();
    booking();
}

function initializeFeatherAndModals() {
    // Función para abrir los modales
    var modalButtons = document.querySelectorAll('.openModal');
    modalButtons.forEach(function (btn) {
        btn.onclick = function () {
            var targetModal = this.getAttribute('data-target');
            var modal = document.getElementById(targetModal);
            if (modal) {
                modal.style.display = 'block';
            }
        };
    });

    // Funciones para cerrar los modales
    var closeButtons = document.getElementsByClassName('close');
    Array.from(closeButtons).forEach(function (btn) {
        btn.onclick = function () {
            var modal = this.closest('.modal');
            if (modal) {
                modal.style.display = 'none';
            }
        };
    });

    // Función para cambiar la imagen principal del modal basado en las miniaturas
    var thumbnails = document.querySelectorAll('.thumbnails img');
    thumbnails.forEach(function (thumbnail) {
        thumbnail.onclick = function () {
            var mainImage = this.closest('.gallery').querySelector('.main-image img');
            mainImage.src = this.src;  // Cambia el src de la imagen principal a la src de la miniatura clickeada
        };
    });

    // Cierra los modales si el usuario hace clic fuera de ellos
    window.onclick = function (event) {
        if (event.target.classList.contains('modal')) {
            event.target.style.display = 'none';
        }
    };

    // Scroll suave para anclas
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
}

function booking() {
    document.querySelectorAll('form').forEach(function (form) {
        form.addEventListener("submit", function (event) {
            event.preventDefault(); // Prevenir el envío del formulario por defecto
            const paquete_id = this.getAttribute('data-paquete-id');
            var formData = new FormData(this); // Obtener los datos del formulario
            formData.append('paquete_id', paquete_id); // Agregar paquete_id a los datos del formulario

            // Enviar la solicitud AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "paquete.php", true);
            xhr.onload = function () {
                var message = document.getElementById("message" + paquete_id);
                message.style.display = "block";
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    message.textContent = response.message;
                    if (!response.success) {
                        // Mostrar mensaje de error al reservar
                        var icon = document.createElement("i");
                        icon.classList.add("bx", "bx-error", "bx-tada");
                        message.appendChild(icon);
                    }
                } else {
                    message.textContent = "Error al enviar el formulario.";
                }
            };
            xhr.send(formData);
        });
    });
}
