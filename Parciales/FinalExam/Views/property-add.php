<?php
    require_once('header.php');
    require_once('validate-session.php');
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar Propiedad</h2>
               <form 
                    action="<?php echo FRONT_ROOT ?>Property/Add"
                    method="post"
                    class="bg-light-alpha p-5">
                    <div class="row">                         
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Código</label>
                                   <input type="number" name="propertyId" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Dirección</label>
                                   <input type="text" name="address" value="" class="form-control">
                              </div>
                         </div>                         
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Teléfono</label>
                                   <input type="text" name="phone" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Precio</label>
                                   <input type="number" name="price" value="" class="form-control">
                              </div>
                         </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>
<?php require_once("footer.php"); ?>
