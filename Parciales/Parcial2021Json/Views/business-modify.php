<?php
    require_once('nav.php');
?>
<main class="py-5">
<section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de Negocios</h2>
               <table class="table bg-light-alpha">
                    <thead>                         
                         <th>Categoría</th>
                         <th>Nombre</th>
                         <th>Email</th>
                         <th>Dirección</th>
                    </thead>
                    <tbody>    
                         <tr>                             
                              <td><?php echo $_SESSION['loggedBusiness']->getCategory(); ?></td>
                              <td><?php echo $_SESSION['loggedBusiness']->getName(); ?></td>
                              <td><?php echo $_SESSION['loggedBusiness']->getEmail(); ?></td>
                              <td><?php echo $_SESSION['loggedBusiness']->getAddress(); ?></td>
                         </tr>
                    </tbody>
               </table>
          </div>
     </section>     
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Modificar Negocio</h2>
               <form 
                    action="<?php echo FRONT_ROOT ?>Business/ModifyBusiness"
                    method="POST"
                    class="bg-light-alpha p-5">
                    <div class="row">   
                         <input type="hidden" name="businessId">                      
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Categoría</label>
                                   <input type="text" name="category" value="<?php echo $_SESSION['loggedBusiness']->getCategory(); ?>" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Nombre</label>
                                   <input type="text" name="name" value="<?php echo $_SESSION['loggedBusiness']->getName(); ?>" class="form-control">
                              </div>
                         </div>                         
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Email</label>
                                   <input type="email" name="email" value="<?php echo $_SESSION['loggedBusiness']->getEmail(); ?>" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Dirección</label>
                                   <input type="text" name="address" value="<?php echo $_SESSION['loggedBusiness']->getAddress(); ?>" class="form-control">
                              </div>
                         </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>