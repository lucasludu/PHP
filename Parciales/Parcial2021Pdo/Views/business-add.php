<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar Negocio</h2>
               <form 
               action="<?php echo FRONT_ROOT ?>Business/Add"
               method="post"
               class="bg-light-alpha p-5">
                    <div class="row">        
                         <input type="hidden" name="businessId">                 
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Categoría</label>
                                   <input type="text" name="category" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Nombre</label>
                                   <input type="text" name="name" value="" class="form-control">
                              </div>
                         </div>                         
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Email</label>
                                   <input type="email" name="email" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Dirección</label>
                                   <input type="text" name="address" value="" class="form-control">
                              </div>
                         </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>