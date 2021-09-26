<?php include_once("header.php") ?>

<div class="container">

    <header>
        <h1>SALUDANDO</h1>
    </header>

    <form action="action.php" method="post">

    <div class="form-group">
        <h5>Seleccione un idioma:</h5>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="idioma" id="argentino" value="Argentino">
            <label class="form-check-label" for="argentino">Argentino</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="idioma" id="ingles" value="Ingles">
            <label class="form-check-label" for="ingles">Ingles</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="idioma" id="italiano" value="Italiano">
            <label class="form-check-label" for="italiano">Italiano</label>
        </div>
    </div>

    <div class="form-group">
        <h5>Seleccione una acción:</h5>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="accion" id="saludar" value="Saludar">
            <label class="form-check-label" for="saludar">Saludar</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="accion" id="despedirse" value="Despedirse">
            <label class="form-check-label" for="despedirse">Despedirse</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="accion" id="otroMensaje" value="Otro Mensaje">
            <label class="form-check-label" for="otroMensaje">Otro Mensaje</label>
        </div>
    </div>

    <div class="form-floating">
        <textarea class="form-control" name="mensaje" placeholder="Mensaje | Mensaje | Mensaje" style="height: 100px"></textarea>
    </div>

    <button type="submit" class="btn btn-primary btn-lg my-3">Send</button>

    </form>

</div>

<?php include_once("footer.php") ?>