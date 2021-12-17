<?php
    require_once('header.php');
    require_once('nav.php');
?>
<main class="d-flex align-items-center justify-content-center height-100" >
     <div class="content">
          <header class="text-center">
               <h2>Recuperatorio</h2>
          </header>

          <form 
               action="<?php echo FRONT_ROOT ?>Home/Login" 
               method="POST" 
               class="login-form bg-dark-alpha p-5 bg-light">
               <input type="hidden" name="userId">
               <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control form-control-lg" placeholder="Ingresar usuario" required>
               </div>
               <div class="form-group">
                    <label for="">Contraseña</label>
                    <input name="password" type="password" class="form-control form-control-lg" placeholder="Ingresar constraseña" required>
               </div>
               <button name="btnLogin" class="btn btn-primary btn-block btn-lg" type="submit">Iniciar Sesión</button>
          </form>
     </div>
</main>
<?php require_once('footer.php'); ?>