
<?php include('modalAgregar.php'); ?>
<?php include('modalModificar.php'); ?>
<?php include('modalEliminar.php'); ?>

<div class=" wow fadeIn slow">
  <div class="row">
    <div class="col-md-12">
      <!-- Editable table -->
      <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
          Entrada de datos
        </h3>
        <div class="card-body">
          <div id="table" class="table-editable">
            <span class="table-add float-right mb-3 mr-2">
              <a class="text-success" data-toggle="modal" data-target="#modalAgregar">
                <i class="fas fa-plus fa-2x" aria-hidden="true"></i>
              </a>
            </span>
            <table id="tabla" class="table table-bordered table-responsive-md table-striped text-center">
              <thead class="table-dark">
                <tr>
                  <th class="text-center font-weight-bold">Ciudad</th>
                  <th class="text-center font-weight-bold">País</th>
                  <th class="text-center font-weight-bold">Descripción</th>
                  <th class="text-center font-weight-bold">Categoría</th>
                  <th class="text-center font-weight-bold">Clasificación</th>
                  <th class="text-center font-weight-bold">Modificar</th>
                  <th class="text-center font-weight-bold">Eliminar</th>
                </tr>
              </thead>
              <tbody>

                <?php 
                
                include('conexion.php');
               
                //Leer datos de la tabla
                $sql='SELECT * FROM ciudades';
                $preparando = $pdo->prepare($sql);
                $preparando->execute();
                $resultado = $preparando->fetchAll();

                foreach ($resultado as $datos): {
                  
                }

                ?>
                <!-- Cuerpo de la tabla -->
                <tr>
                  <td class="pt-3-half" contenteditable="true"><?php echo $datos[1]; ?></td>
                  <td class="pt-3-half" contenteditable="true"><?php echo $datos[2]; ?></td>
                  <td class="pt-3-half" contenteditable="true"><?php echo $datos[3]; ?></td>
                  <td class="pt-3-half" contenteditable="true"><?php echo $datos[4]; ?></td>
                  <td class="pt-3-half" contenteditable="true"><?php echo $datos[5]; ?></td>
                  <td class="pt-3-half">
                    <span class="table-down">
                      <a href="#!" class="indigo-text">
                        <i id="btn_modificar" class="fas fa-pencil-alt fa-2x" aria-hidden="true" data-toggle="modal" data-target="#modalModificar"></i>
                      </a>
                    </span>
                  </td>
                  <td>
                    <span class="table-down">
                      <a class="text-danger">
                        <i class="fas fa-trash-alt fa-2x" aria-hidden="true" onclick ="deleteConfirm()"></i>
                      </a></span>
                  </td>
                </tr>
                <!-- /. Cuerpo de la tabla -->
               <?php endforeach ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- Editable table -->
    </div>
  </div>
</div>