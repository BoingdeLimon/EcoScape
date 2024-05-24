document.getElementById("paquete-form").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevenir el envío del formulario por defecto
    var formData = new FormData(this); // Obtener los datos del formulario

    // Enviar la solicitud AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "add_package.php", true);
    xhr.onload = function () {
        var message = document.getElementById("message");
        message.style.display = "block";
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            message.textContent = response.message;
            setTimeout(function() {
                location.reload();
            }, 1000);
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