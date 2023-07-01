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