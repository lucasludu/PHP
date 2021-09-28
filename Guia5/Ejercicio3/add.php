<?php

     require_once("Config/Autoload.php");
     use Config\Autoload as Autoload;
     use Model\User as User;

     Autoload::Start();

     session_start();
     if(isset($_SESSION['loggedUser'])) {
          $loggedUser = $_SESSION['loggedUser'];

     include('header.php');
     include('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">BEER</h2>

               <form 
                    action="Controller/bill-controller.php"
                    method="POST"
                    class="bg-light-alpha p-5">
                    <div class="row">
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Code</label>
                                   <input type="number" name="beer_code" placeholder="Codigo" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Name</label>
                                   <input type="text" name="beer_name" placeholder="Nombre" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Type</label>
                                   <input type="text" name="beer_type" placeholder="Tipo" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Description</label>
                                   <input type="text" name="beer_description" placeholder="Descripcion" class="form-control">
                              </div>
                         </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-primary ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>

<?php 

     } else {
          
          echo "
               <script>
                    alert('Tiene que iniciar sesion');
                    window.location = 'index.php';
               </script>
          ";

     }
     include('footer.php') 

?>
