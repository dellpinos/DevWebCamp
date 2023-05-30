<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>
    <p class="auth__texto">Recupera tu acceso a DevWebCamp</p>


    <form class="formulario">
        <div class="formulario__campo">
            <label class="formulario__label" for="email">Email</label>
            <input class="formulario__input" type="email" placeholder="Tu email" id="email" name="email">
        </div>
    
        <input type="submit" class="formulario__submit" value="Enviar instrucciones">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">Si ya tenés una cuenta. Iniciar sesión</a>
        <a href="/registro" class="acciones__enlace">Aún no tenés una cuenta?</a>
    </div>
</main>