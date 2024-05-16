document.getElementById("bookingForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevenir el envío del formulario por defecto
    var formData = new FormData(this); // Obtener los datos del formulario

    // Enviar la solicitud AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "paquete.php", true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                var message = document.getElementById("message");
                message.style.display = "block";
                message.textContent = response.message;
            } else {
                // Mostrar mensaje de error al reservar
                var message = document.getElementById("message");
                message.style.display = "block";
                message.textContent = response.message;
                var icon = document.createElement("i");
                icon.classList.add("bx", "bx-error", "bx-tada");
                message.appendChild(icon);
            }
        }
    };
    xhr.send(formData);
});