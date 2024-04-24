const wrapper = document.querySelector('.wrapper');
const registerLink = document.querySelector('.register-link');
const loginLink = document.querySelector('.login-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

registerLink.onclick = () => {
    wrapper.classList.add('active');
}

loginLink.onclick = () => {
    wrapper.classList.remove('active');
}

btnPopup.onclick = () => {
    wrapper.classList.add('active-popup');
}

iconClose.onclick = () => {
    wrapper.classList.remove('active-popup');
    wrapper.classList.remove('active');
}

document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevenir el envío del formulario por defecto

    var formData = new FormData(this); // Obtener los datos del formulario

    // Enviar la solicitud AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "login.php", true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                // Redireccionar a la página de inicio si el inicio de sesión es exitoso
                window.location.href = "home.php";
            } else {
                // Mostrar mensaje de error si el inicio de sesión falla
                document.getElementById("error-message").style.display = "block";
                document.getElementById("error-message").textContent = response.message;
            }
        }
    };
    xhr.send(formData);
});

document.getElementById("signup-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevenir el envío del formulario por defecto

    var formData = new FormData(this); // Obtener los datos del formulario

    // Enviar la solicitud AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "register.php", true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                // Redireccionar a la página de inicio si el inicio de sesión es exitoso
                window.location.href = "home.php";
            } else {
                // Mostrar mensaje de error si el inicio de sesión falla
                document.getElementById("error-message").style.display = "block";
                document.getElementById("error-message").textContent = response.message;
            }
        }
    };
    xhr.send(formData);
});