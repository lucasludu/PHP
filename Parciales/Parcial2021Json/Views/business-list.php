<?php
    require_once('header.php');
    require_once('nav.php');
    require_once('validate-session.php');
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
                         <th>Action</th>
                    </thead>
                    <tbody>    
                         <?php foreach($businessList as $value) { ?>                     
                         <tr>                             
                              <td><?php echo $value->getCategory(); ?></td>
                              <td><?php echo $value->getName(); ?></td>
                              <td><?php echo $value->getEmail(); ?></td>
                              <td><?php echo $value->getAddress(); ?></td>
                              <td>
                                   <a class="btn btn-success" style="width:100px;" href="<?php echo FRONT_ROOT ?>Business/ShowModifyView/<?php echo $value->getBusinessId(); ?>">Edit</a>
                                   <a class="btn btn-danger" style="width:100px;" href="<?php echo FRONT_ROOT ?>Business/Remove/<?php echo $value->getBusinessId(); ?>">Delete</a>
                              </td>
                         </tr>
                         <?php } ?>
                    </tbody>
               </table>
          </div>
     </section>     
</main>