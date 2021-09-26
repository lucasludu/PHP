<?php include_once("header.php"); ?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar Factura</h2>

               <form action="Controller/bill-controller.php" method="GET" class="bg-light-alpha p-5">
                    <div class="row">
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Fecha</label>
                                   <input type="date" name="bill_date" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group" required>
                                   <p>Tipo</p>
                                   <input type="radio" name="bill_type" class="radioSize">Factura A
                                   <input type="radio" name="bill_type" class="radioSize">Factura B
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Numero</label>
                                   <input type="number" name="bill_number" class="form-control" min="0" required>
                              </div>
                         </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>
<?php include_once("footer.php"); ?>