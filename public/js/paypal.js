document.addEventListener("DOMContentLoaded", function () {
    function renderPayPal() {
        const container = document.getElementById("paypal-button-container");
        if (!container) return;

        const tipoCambio = 3.8;
        const totalSoles = parseFloat(container.dataset.total) || 0;
        const totalUSD = (totalSoles / tipoCambio).toFixed(2);

        if (totalUSD <= 0) {
            console.error("El monto debe ser mayor que cero");
            container.innerHTML = "<p>Error: monto inválido</p>";
            return;
        }

        container.innerHTML = "";

        paypal.Buttons({
            createOrder: function (data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: totalUSD,
                            currency_code: "USD"
                        }
                    }]
                });
            },
            onClick: function (data, actions) {
                const formData = {
                    nomcli: document.getElementById('nombre').value,
                    apecli: document.getElementById('apellido').value,
                    celcli: document.getElementById('celular').value,
                    dnicli: document.getElementById('dni').value,
                    dircli: document.getElementById('direccion').value,
                };

                return fetch('/guardar-cliente', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify(formData)
                })
                    .then(response => response.json())
                    .then(data => {
                        if (!data.success) {
                            alert('Error guardando datos: ' + data.message);
                            return actions.reject(); 
                        }
                        return actions.resolve(); 
                    })
                    .catch(() => {
                        alert('Error inesperado guardando datos');
                        return actions.reject(); 
                    });
            },
            onApprove: function (data, actions) {
                return actions.order.capture().then(function (details) {
                    alert('Pago finalizado por ' + details.payer.name.given_name);
                });
            }
        }).render("#paypal-button-container");
    }

    renderPayPal();

    if (window.Livewire) {
        Livewire.hook('message.processed', (message, component) => {
            renderPayPal();
        });
    }
});
