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
            var message = document.getElementById("message"+paquete_id);
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
