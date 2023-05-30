<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>
    <p class="auth__texto">Registrate en DevWebCamp</p>


    <form class="formulario">
        <div class="formulario__campo">
            <label class="formulario__label" for="nombre">Nombre</label>
            <input class="formulario__input" type="text" placeholder="Tu nombre" id="nombre" name="nombre">
        </div>
        <div class="formulario__campo">
            <label class="formulario__label" for="apellido">Apellido</label>
            <input class="formulario__input" type="text" placeholder="Tu apellido" id="apellido" name="apellido">
        </div>
        <div class="formulario__campo">
            <label class="formulario__label" for="email">Email</label>
            <input class="formulario__input" type="email" placeholder="Tu email" id="email" name="email">
        </div>
        <div class="formulario__campo">
            <label class="formulario__label" for="password">Password</label>
            <input class="formulario__input" type="password" placeholder="Tu password" id="password" name="password">
        </div>
        <div class="formulario__campo">
            <label class="formulario__label" for="password2">Repetir Password</label>
            <input class="formulario__input" type="password" placeholder="Repite tu password" id="password2" name="password2">
        </div>

        <input type="submit" class="formulario__submit" value="Crear cuenta">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">Si ya tenés una cuenta. Iniciar sesión</a>
        <a href="/olvide" class="acciones__enlace">Olvidaste tu password?</a>
    </div>
</main>