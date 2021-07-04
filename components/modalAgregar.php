<!-- Central Modal Small -->
<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100 font-weight-bold" id="myModalLabel">Insertar datos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <!-- Material input -->
      <div class="md-form">
        <i class="fas fa-church prefix text-muted"></i>
        <input type="text" id="ciudad" class="form-control">
        <label for="ciudad">Ciudad</label>
      </div>
      <div class="md-form">
        <i class="fas fa-flag prefix text-muted"></i>
        <input type="text" id="pais" class="form-control">
        <label for="pais">País</label>
      </div>
      <div class="md-form">
        <i class="fas fa-book-open prefix text-muted"></i>
        <input type="text" id="descripcion" class="form-control">
        <label for="descripcion">Descripción</label>
      </div>
      <div class="md-form">
        <i class="fas fa-cog prefix text-muted"></i>
        <input type="text" id="categoria" class="form-control">
        <label for="categoria">Categoría</label>
      </div>
      <div class="md-form">
        <i class="fas fa-cogs prefix text-muted"></i>
        <input type="text" id="clasificacion" class="form-control">
        <label for="clasificacion">Clasificación</label>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm rounded" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success btn-sm rounded" id="btn_agregar">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Central Modal Small -->

<script>
//Función modificar datos
$(document).ready(function(){

  $('#btn_agregar').click(function(){

    //alert('Me diste un click');
    ciudad=$('#ciudad').val();
    pais=$('#pais').val();
    descripcion=$('#descripcion').val();
    categoria=$('#categoria').val();
    clasificacion=$('#clasificacion').val();


    agregarDatos(ciudad,pais,descripcion,categoria,clasificacion);

  });

});
</script>