<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>
    <p class="auth__texto">Coloca tu nuevo password</p>

    <?php require_once __DIR__ . '/../templates/alertas.php'; ?>


    <?php if($token_valido) { ?>
    <form class="formulario" method="POST">
        <div class="formulario__campo">
            <label class="formulario__label" for="password">Nuevo password</label>
            <input class="formulario__input" type="password" placeholder="Tu nuevo password" id="password" name="password">
        </div>
    
        <input type="submit" class="formulario__submit" value="Guardar password">
    </form>

    <?php } ?>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">Si ya tenés una cuenta. Iniciar sesión</a>
        <a href="/registro" class="acciones__enlace">Aún no tenés una cuenta?</a>
    </div>
</main>