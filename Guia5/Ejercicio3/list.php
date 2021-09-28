<?php

     include_once("Config/Autoload.php");
     use Config\Autoload as Autoload;

     use Model\Beer as Beer;
     use Model\User as User;
     use Repository\BeerRepository as BeerRepository;

     Autoload::Start();

     $repo = new BeerRepository();
     $arrayBeer = $repo->GetAll();

     if(isset($_SESSION['loggedUser'])) {

          $loggedUser = $_SESSION['loggedUser'];
     

     include('header.php');
     include('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">

          <div class="container">
               <h2 class="mb-4">Beer List</h2>

               <table class="table bg-light-alpha">
                    <thead>
                         <th>Code</th>
                         <th>Name</th>
                         <th>Description</th>
                         <th>Type</th>
                    </thead>
                    <tbody>
                         <form action="Controller/remove-beer.php" method="post"><?php
                              if(isset($arrayBeer)) { 
                                   foreach($arrayBeer as $beer) { ?>
                                        <tr>
                                             <td><?php echo $beer->getCode(); ?></td>
                                             <td><?php echo $beer->getName(); ?></td>
                                             <td><?php echo $beer->getDescription(); ?></td>
                                             <td><?php echo $beer->getType(); ?></td>
                                             <td>
                                                  <button 
                                                       type="submit" 
                                                       name="btnRemove" 
                                                       class="btn btn-danger"
                                                       value="<?php echo $beer->getCode(); ?>">
                                                       Eliminar
                                                  </button>                                          
                                             </td>
                                        </tr>
                                   <?php }
                              }
                         ?></form>
                    </tbody>
               </table>

          </div>

     </section>

     <section id="eliminar">

          <div class="container">
               <form action="" method="" class="form-inline bg-light-alpha p-3">

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
