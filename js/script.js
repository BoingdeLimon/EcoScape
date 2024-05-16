const wrapper = document.querySelector('.wrapper');
const registerLink = document.querySelector('.register-link');
const loginLink = document.querySelector('.login-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');
wrapper.classList.add('active-popup');

registerLink.onclick = () => {
    wrapper.classList.add('active');
}

loginLink.onclick = () => {
    wrapper.classList.remove('active');
}

document.getElementById("login-form").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevenir el envío del formulario por defecto
    var formData = new FormData(this); // Obtener los datos del formulario

    // Enviar la solicitud AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "login.php", true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                // Redireccionar a la página de inicio si el inicio de sesión es exitoso
                window.location.href = "index.php";
            } else {
                // Mostrar mensaje de error si el inicio de sesión falla
                var message = document.getElementById("error-message");
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

document.getElementById("signup-form").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevenir el envío del formulario por defecto
    var formData = new FormData(this); // Obtener los datos del formulario

    // Enviar la solicitud AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "register.php", true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                // Redireccionar a la página de inicio si el inicio de sesión es exitoso
                window.location.href = "index.php";
            } else {
                // Mostrar mensaje de error si el inicio de sesión falla
                var message = document.getElementById("signup-error-message");
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
