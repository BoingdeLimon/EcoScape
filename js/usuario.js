let btn = document.querySelector('#btn');
let sidebar = document.querySelector('.sidebar');

btn.onclick = function () {
    sidebar.classList.toggle('active');
};

function showContent(sectionId) {
    const sections = document.querySelectorAll('.content-section');
    sections.forEach(section => {
        if (section.id === sectionId) {
            section.classList.add('active');
        } else {
            section.classList.remove('active');
        }
    });
}

document.getElementById("update-form").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevenir el envío del formulario por defecto
    var formData = new FormData(this); // Obtener los datos del formulario

    // Enviar la solicitud AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "upload.php", true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                var message = document.getElementById("message");
                message.style.display = "block";
                message.textContent = response.message;
                setTimeout(function() {
                    location.reload();
                }, 1000);
            } else {
                // Mostrar mensaje de error al actualizar
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