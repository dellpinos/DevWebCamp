<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>
    <p class="auth__texto">Inicia sesión en DevWebCamp</p>

    <?php require_once __DIR__ . '/../templates/alertas.php'; ?>


    <form class="formulario" method="POST" action="/login">
        <div class="formulario__campo">
            <label class="formulario__label" for="email">Email</label>
            <input class="formulario__input" type="email" placeholder="Tu email" id="email" name="email">
        </div>
        <div class="formulario__campo">
            <label class="formulario__label" for="password">Password</label>
            <input class="formulario__input" type="password" placeholder="Tu password" id="password" name="password">
        </div>

        <input type="submit" class="formulario__submit" value="Iniciar Sesión">
    </form>

    <div class="acciones">
        <a href="/registro" class="acciones__enlace">Aún no tenés una cuenta?</a>
        <a href="/olvide" class="acciones__enlace">Olvidaste tu password?</a>
    </div>
</main>