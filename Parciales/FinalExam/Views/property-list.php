<?php
    require_once('header.php');
    require_once('validate-session.php');
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de Propiedades</h2>
               <table class="table bg-light-alpha">
                    <thead>                         
                         <th>Código</th>
                         <th>Dirección</th>
                         <th>Teléfono</th>
                         <th>Precio</th>
                    </thead>
                    <tbody>                         
                         <?php foreach($propertyList as $value) { ?>
                         <tr>                             
                              <td><?php echo $value->getCode();?></td>
                              <td><?php echo $value->getAddress();?></td>
                              <td><?php echo $value->getPhone();?></td>
                              <td><?php echo $value->getPrice();?></td>
                         </tr>
                         <?php } ?>
                    </tbody>
               </table>
          </div>
     </section> 
     <sectionclass="mb-5">
          <div class="container">
               <h3 class="mb-4">Eliminar Propiedad</h3>
               <form 
               action="<?php echo FRONT_ROOT ?>Property/Delete"
               method="post"
               class="bg-light-alpha">
                    <div class="row">                         
                         <div class="col-lg-2">
                              <div class="form-group">
                                   <label for="">Código</label>
                                   <input type="text" name="propertyId" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-2">
                              <div class="form-group">
                                   <label for="">&nbsp;</label>
                                   <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar</button>
                              </div>
                         </div>                         
                    </div>                    
               </form>
          </div>
     </section>    
</main>
<?php require_once("footer.php"); ?>