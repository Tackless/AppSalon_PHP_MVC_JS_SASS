<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicio de sesión con tus datos</p>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Tú E-mail" name="email">
    </div>
    
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Tú Password" name="password">
    </div>

    <input type="submit" class="boton" value="Iniciar Sesión">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crea una.</a>
    <a href="/recoverPassword">¿Olvidaste tu password?</a>
</div>