<main class="agenda">
    <h2 class="agenda__heading">Workshops & Conferencias</h2>
    <p class="agenda__descripcion">Talleres y Conferencias dictados por expertos en Desarrollo Web</p>

    <div class="eventos">
        <h3 class="eventos__heading">&lt;Conferencias/></h3>
        <p class="eventos__fecha">Viernes 5 de Octubre</p>

        <div class="eventos__listado">
            <?php foreach($eventos['conferencias_v'] as $evento) : ?>
                <div class="evento">
                    <p class="evento__hora"><?php echo $evento->hora->hora; ?></p>
                    <div class="evento__informacion">
                        <h4 class="evento__nombre"><?php echo $evento->nombre; ?></h4>
                        <div>
                            <p class="evento__informacion"><?php echo $evento->descripcion; ?></p>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>

        <p class="eventos__fecha">Sabado 6 de Octubre</p>

        <div class="eventos__listado">

        </div>
    </div>

    <div class="eventos eventos--workshops">
        <h3 class="eventos__heading">&lt;Workshops/></h3>
        <p class="eventos__fecha">Viernes 5 de Octubre</p>

        <div class="eventos__listado">

        </div>

        <p class="eventos__fecha">Sabado 6 de Octubre</p>

        <div class="eventos__listado">

        </div>
    </div>
</main>