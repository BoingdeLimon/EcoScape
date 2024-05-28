document.addEventListener('DOMContentLoaded', function () {
    fetchPaquetes();

    document.getElementById('viajes').addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-paquete')) {
            const paqueteId = event.target.dataset.paqueteId;
            removePaquete(paqueteId);
        }
    });
});

function fetchPaquetes() {
    fetch('get_paquetes.php')
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

    const container = document.getElementById('viajes');
    container.innerHTML = ''; // Clear previous content if any

    paquetes.forEach(paquete => {
        const precio = parseFloat(paquete.precio) + parseFloat(paquete.personas) * 5000;
        const productDiv = document.createElement('div');
        productDiv.classList.add('col-xs-12', 'col-sm-6', 'col-md-3', 'r-margin-top');
        productDiv.innerHTML = `
            <div class="single-product">
                <div class="product-img">
                    <img src="${paquete.imagen}" alt="${paquete.nombre}" />
                    <div class="product-dsc">
                        <p><a href="#">${paquete.nombre}</a></p>
                        <span>${precio} MXN</span>

                        <p>Personas: ${paquete.personas}</p>
                        <p>${paquete.fecha}</p>
                        <p >Detalles: ${paquete.detalles}</p>
                    </div>
                </div>
                <button class="remove-paquete" data-paquete-id="${paquete.id}">Eliminar</button>
            </div>
        `;
        container.appendChild(productDiv);
    });
}

function removePaquete(paqueteId) {
    fetch('remove_paquete.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `paquete_id=${paqueteId}`,
    })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                console.error(data.error);
            } else {
                console.log(data.success); // Debugging: Log success message
                fetchPaquetes(); // Refresh the list of paquetes
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
