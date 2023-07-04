<main class="registro">
    <h2 class="registro__heading"><?php echo $titulo; ?></h2>
    <p class="registro__descripcion">Elige tu plan</p>


    <div class="paquetes__grid">
        <div class="paquete">
            <h3 class="paquete__nombre">Pase Gratis</h3>
            <ul class="paquete__lista">
                <li class="paquete__elemento">Acceso virtual en vivo a DevWebCamp</li>
            </ul>
            <p class="paquete__precio">$0</p>

            <form action="/finalizar-registro/gratis" method="POST">
                <input type="submit" value="Plan Gratuito" class="paquetes__submit">
            </form>
        </div>

        <div class="paquete">
            <h3 class="paquete__nombre">Pase Presencial</h3>
            <ul class="paquete__lista">
                <li class="paquete__elemento">Acceso virtual en vivo a DevWebCamp</li>
                <li class="paquete__elemento">Acceso a las Grabaciones</li>
                <li class="paquete__elemento">Acceso presencial a DevWebCamp</li>
                <li class="paquete__elemento">Pase presencial por 2 dias</li>
                <li class="paquete__elemento">Acceso a Talleres y Conferencias</li>
                <li class="paquete__elemento">Camiseta del Evento</li>
                <li class="paquete__elemento">Comida y Bebida</li>
            </ul>
            <p class="paquete__precio">$249</p>

            <div id="smart-button-container">
                <div style="text-align: center;">
                    <div id="paypal-button-container"></div>
                </div>
            </div>
        </div>

        <div class="paquete">
            <h3 class="paquete__nombre">Pase Virtual</h3>
            <ul class="paquete__lista">
                <li class="paquete__elemento">Acceso virtual en vivo a DevWebCamp</li>
                <li class="paquete__elemento">Acceso a las Grabaciones</li>
                <li class="paquete__elemento">Pase presencial por 2 dias</li>
                <li class="paquete__elemento">Enlace a Talleres y Conferencias</li>
            </ul>
            <p class="paquete__precio">$69</p>
        </div>
    </div>
</main>




<script src="https://www.paypal.com/sdk/js?client-id=AW1eOfBX84wL7Qx51JXyR12Re_JV8gQvRZFokqKUs8j8UV-TMVjhiitInzSkxxRUVsWcQNG26LdLDwSL&currency=USD" data-sdk-integration-source="button-factory"></script>

<script>
    // Pase presencial

    function initPayPalButton() {
        paypal.Buttons({
            style: {
                shape: 'rect',
                color: 'black',
                layout: 'vertical',
                label: 'pay',
            },

            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        "description": "1", // Aqui coloco un 1 para poder almacenarlo en la base de datos
                        "amount": {
                            "currency_code": "USD",
                            "value": 249
                        }
                    }]
                });
            },

            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {

                    // console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                    const datos = new FormData();
                    datos.append('paquete_id', orderData.purchase_units[0].description);
                    datos.append('pago_id', orderData.purchase_units[0].payments.captures[0].id);


                    fetch('/finalizar-registro/pagar', {
                            method: 'POST',
                            body: datos
                        })
                        .then(respuesta => respuesta.json())
                        .then(resultado => {
                            if (resultado.resultado) {
                                actions.redirect('http://127.0.0.1:3000/finalizar-registro/conferencias');
                            } else {
                                console.log('No se esta almacenando');
                            }
                        })
                });
            },

            onError: function(err) {
                console.log(err);
            }
        }).render('#paypal-button-container');








    //     // Pase virtual
    //     paypal.Buttons({
    //         style: {
    //             shape: 'rect',
    //             color: 'blue',
    //             layout: 'vertical',
    //             label: 'pay',
    //         },

    //         createOrder: function(data, actions) {
    //             return actions.order.create({
    //                 purchase_units: [{
    //                     "description": "2",
    //                     "amount": {
    //                         "currency_code": "USD",
    //                         "value": 49
    //                     }
    //                 }]
    //             });
    //         },

    //         onApprove: function(data, actions) {
    //             return actions.order.capture().then(function(orderData) {

    //                 const datos = new FormData();
    //                 datos.append('paquete_id', orderData.purchase_units[0].description);
    //                 datos.append('pago_id', orderData.purchase_units[0].payments.captures[0].id);

    //                 fetch('/finalizar-registro/pagar', {
    //                         method: 'POST',
    //                         body: datos
    //                     })
    //                     .then(respuesta => respuesta.json())
    //                     .then(resultado => {
    //                         if (resultado.resultado) {
    //                             actions.redirect('http://localhost:3000/finalizar-registro/conferencias');
    //                         }
    //                     })

    //             });
    //         },

    //         onError: function(err) {
    //             console.log(err);
    //         }
    //     }).render('#paypal-button-container-virtual');

    }
    initPayPalButton();
</script>