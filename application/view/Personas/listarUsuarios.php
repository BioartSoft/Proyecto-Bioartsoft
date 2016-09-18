<div class="row">
  <center>
    <div class="col-lg-12">
        <h3 class="page-header" style="color: #3CB371">Listar Usuarios</h3>
    </div>
  </center>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-green" >
            <div class="panel-heading" stlyle="height: 70px; width: 100px">
            </div>
              <div class="panel-body">
                <div class="dataTable_wrapper">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Id Usuario</th>
                                <th>Nombre Usuario</th>
                                <th>Rol usuario</th>
                                <th>Estado</th>
                                <th>Modificar</th>
                                <th>Cambiar Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($usuarios as $valor): ?>
                            <tr>
                                <td><?=  $valor['id_usuarios'] ?></td>
                                <td><?=  $valor['nombre_usuario'] ?></td>
                                <td><?php  if($valor['Tbl_rol_id_rol'] == 1): ?>
                                  Administrador
                                <?php else: ?>
                                  Vendedor
                                <?php endif ?>
                            </td>

                                <td><?php if($valor['estado'] == 1): ?>
                                        Habilitado
                                       <?php else:  ?>
                                        Inhabilitado
                                       <?php endif ?>
                                </td>
                                <td>
                                  <a href="<?= URL. 'Personas/listarUsuarios?id=' . $valor['id_usuarios'] ?>">
                                    <button type="button" class="btn btn-primary btn-circle btn-md" onclick=""data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                  </a>
                                </td>
                                <td><a href="<?= URL . 'Personas/modificarUsuario?id_u='. $valor['id_usuarios'] ?>">
                                   <button type="button"  onclick="mensaje4()" class="btn btn-warning btn-circle btn-md" ><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button>
                                </a></td>
                              </tr>
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
<?php if (isset($_GET['id'])): ?>

  <form method="POST">
<div class="modal fade" id="modal-actualizar-usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
             </button>
               <center>
                 <h4 class="modal-title"  style="color: #3CB371" id="myModalLabel">Modificar Usuarios</h4>
               </center>
             </div>

              <div class="modal-body">
                <input type="hidden" name="idusuario" value="<?= $valor['id_usuarios'] ?>">
        <div class="row">
            <div class="col-md-6">
                <label>Nombre usuario</label><br>
                  <input type="text" class="form-control" name="txtnombreusuario" id="ejemplo_password_2"
                  value="<?= $valor['nombre_usuario'] ?>">
             </div>

              <div class="col-md-6">
                  <label>Rol Usuario</label><br>
                      <input type="text" class="form-control" id="ejemplo_password_2"
                      value="<?= $valor['Tbl_rol_id_rol'] ?>" name="txtidRol" onchange="(this)">
             </div>
        </div>
        <br><br>

                       <div class="modal-footer">
                         <button type="button" class="btn btn-secondary btn-md active"  data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"> CERRAR</span></button>
                         <button type="submit" name="btn-modificar" onclick="mensaje3()" class="btn btn-success btn-md active"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true">  GUARDAR</span></button>
                      </div>

                    </div>
                  </div>
                </div>
              </form>
<script type="text/javascript">
  $(document).ready(function(){
    $("#modal-actualizar-usuario").modal("show");
    $("#fecha").change(function(){
      var tipo=$(this).val();
      if(tipo  == 2){
        $("#fecha").slideUp();
      }
    });

  });
</script>
<?php endif; ?>
