<?php
use Dompdf\Dompdf;

  class Personas extends controller{

    private $modeloP;
    private $mdlTipoPersona;
    private $modeloUsuario;
    private $modeloConfig;
    private $mdlClientes;

    function __construct(){

      $this->modeloP = $this->loadModel("mdlPersona");
      $this->mdlTipoPersona = $this->loadModel("mdlTipoPersona");
      $this->modeloUsuario = $this->loadModel("mdlUsuario");
      $this->modeloConfig = $this->loadModel("mdlConfiguracionPago");
      $this->mdlClientes = $this->loadModel("mdlCliente");
    }


    public function generarpdfproveedor()
    {
      require_once APP . 'libs/dompdf/autoload.inc.php';
      // $urlImagen = URL . 'producto/generarcodigo?id=';
      // $productos = $this->mdlproducto->listar();
        $listarP = $this->modeloP->ListarProveedor();
      ob_start();
      require APP . 'view/Personas/pdfproveedor.php';
      $html = ob_get_clean();
      $dompdf = new Dompdf();
      $dompdf->loadHtml($html);
      // $dompdf->load_html_file($urlImagen);
      $dompdf->setPaper('A4', 'landscape');
      $dompdf->render();
      $dompdf->stream("Informe Proveedores.pdf", array("Attachment" => false, 'isRemoteEnabled' => true));
    }


    public function generarpdfClientes()
    {

      require_once APP . 'libs/dompdf/autoload.inc.php';
      // $urlImagen = URL . 'producto/generarcodigo?id=';
      // $productos = $this->mdlproducto->listar();
      $listarClientes = $this->modeloP->ListarPersClientes();
      ob_start();
      require APP . 'view/Personas/pdfClientes.php';
      $html = ob_get_clean();
      $dompdf = new Dompdf();
      $dompdf->loadHtml($html);
      // $dompdf->load_html_file($urlImagen);
      $dompdf->setPaper('A4', 'landscape');
      $dompdf->render();
      $dompdf->stream("Informe Clientes.pdf", array("Attachment" => false, 'isRemoteEnabled' => true));
    }


    public function generarpdfEmpleados()
    {

      require_once APP . 'libs/dompdf/autoload.inc.php';
      // $urlImagen = URL . 'producto/generarcodigo?id=';
      // $productos = $this->mdlproducto->listar();
      $listarEmpleados = $this->modeloP->ListarPersEmpleadoFijo();
      ob_start();
      require APP . 'view/Personas/pdfEmpledos.php';
      $html = ob_get_clean();
      $dompdf = new Dompdf();
      $dompdf->loadHtml($html);
      // $dompdf->load_html_file($urlImagen);
      $dompdf->setPaper('A4', 'landscape');
      $dompdf->render();
      $dompdf->stream("Informe Empleados.pdf", array("Attachment" => false, 'isRemoteEnabled' => true));
    }



    public function validacion(){
        $this->modeloP->__SET("idPersona", $_POST['campoId']);
        $ValidarId = $this->modeloP->validarIdPersona();

        if ($ValidarId != false)
          echo "1";
        else
          echo "0";
    }



    public function validacionEmail(){
        $this->modeloP->__SET("email", $_POST['campoEmail']);
        $ValidarEmail = $this->modeloP->ValidarEmail();

        if ($ValidarEmail != false)
          echo "1";
        else
          echo "0";
    }



    public function validacionUsuario(){
        $this->modeloP->__SET("nombreUsuario", $_POST['campoNombreUsuario']);
        $Validarusuario = $this->modeloP->validarNombreUsu();

        if ($Validarusuario != false)
          echo "1";
        else
          echo "0";
    }



    public function registrarPersonas(){

        $errorId = true;
        $errorUsuario = true;
        $errorEmail = true;
        if (isset($_POST['btnGuardarPersona'])) {
          $this->modeloP->__SET("idPersona", $_POST['txtIdPersona']);
          $ValidarId = $this->modeloP->validarIdPersona();
          $this->modeloUsuario->__SET("nombreUsuario", $_POST['txtUsuario']);
          $ValidarNomUsu = $this->modeloUsuario->validarNombreUsu();
          $this->modeloP->__SET("email", $_POST['txtEmail']);
          $ValidarEmail = $this->modeloP->ValidarEmail();

          if ($ValidarId != false) {
            $errorId = false;

          }else if($ValidarNomUsu != false) {
            $errorUsuario = false;

          }else if($ValidarEmail != false){
            $errorEmail = false;
          }else{
                  if ($_POST['txtTipoPersona'] == 1) {
                    $error = !$this->guardarEmpleadoFijo();
                    $_POST = [];
                  }else if ($_POST['txtTipoPersona'] == 2) {
                    $error = !$this->guardarEmpleadoTemp();
                    $_POST = [];
                  }else if ($_POST['txtTipoPersona'] == 3) {
                    $error = !$this->guardarProveedorNatural();
                    $_POST = [];
                  }else if ($_POST['txtTipoPersona'] == 4) {
                    $error = !$this->guardarProveedorJuridico();
                    $_POST = [];
                  }else if($_POST['txtTipoPersona'] == 5){
                    $error = !$this->guardarClientes();
                    $_POST = [];
                  }else if($_POST['txtTipoPersona'] == 6){
                    $error = !$this->guardarClientes();
                    $_POST = [];
                }
          }
    }

    $TipoPerVendedor = $this->mdlTipoPersona->listarTipoPerVendedor();
    $TipoPersona = $this->mdlTipoPersona->listarTipoPersonas();
    $Roles = $this->modeloUsuario->listarRol();

    require APP . 'view/_templates/header.php';
    require APP . 'view/Personas/registrarPersonas.php';
    require APP . 'view/_templates/footer.php';
    }



    private function guardarEmpleadoFijo(){

      $this->modeloP->__SET("idPersona", $_POST['txtIdPersona']);
      $this->modeloP->__SET("nombres", $_POST['txtNombres']);
      $this->modeloP->__SET("apellidos", $_POST['txtApellidos']);
      $this->modeloP->__SET("telefono", $_POST['txtTelefono']);
      $this->modeloP->__SET("celular", $_POST['txtCelular']);
      $this->modeloP->__SET("email", $_POST['txtEmail']);
      $this->modeloP->__SET("tipoPersona", $_POST['txtTipoPersona']);
      $this->modeloP->__SET("direccion", $_POST['txtDireccion']);
      $this->modeloP->__SET("genero", $_POST['txtGenero']);
      $this->modeloP->__SET("tipoDocumento", $_POST['txtTipoDocumento']);
      $this->modeloP->__SET("fechaContrato", date("Y-m-d",strtotime($_POST['txtFechaContrato'])));
      $this->modeloP->__SET("fechaTerminacion", date("Y-m-d",strtotime($_POST['txtFechaContrato'])));
      $persona = $this->modeloP->guardarPersona();

      $this->modeloUsuario->__SET("idUsuario", $_POST['txtIdPersona']);
      $this->modeloUsuario->__SET("nombreUsuario", $_POST['txtUsuario']);
      $this->modeloUsuario->__SET("clave", $_POST['txtClave']);
      $this->modeloUsuario->__SET("rolId", $_POST['txtRol']);
      $this->modeloUsuario->__SET("estado", 1);
      $usuario = $this->modeloUsuario->guardarUsu();

      if($persona == true && $usuario == true){

        $_SESSION['alerta'] = ' swal({
          title: "Guardado exitoso!",
          type: "success",
          confirmButton: "#3CB371",
          confirmButtonText: "Aceptar",
          // confirmButtonText: "Cancelar",
          closeOnConfirm: false,
          closeOnCancel: false
        })';


      }else{

        $_SESSION['alerta'] = ' swal({
          title: "Error en el registro!",
          type: "Error",
          confirmButton: "#3CB371",
          confirmButtonText: "Aceptar",
          // confirmButtonText: "Cancelar",
          closeOnConfirm: false,
          closeOnCancel: false
        })';


      }

  }



    private function guardarEmpleadoTemp(){
      $this->modeloP->__SET("idPersona", $_POST['txtIdPersona']);
      $this->modeloP->__SET("nombres", $_POST['txtNombres']);
      $this->modeloP->__SET("apellidos", $_POST['txtApellidos']);
      $this->modeloP->__SET("telefono", $_POST['txtTelefono']);
      $this->modeloP->__SET("celular", $_POST['txtCelular']);
      $this->modeloP->__SET("email", $_POST['txtEmail']);
      $this->modeloP->__SET("tipoPersona", $_POST['txtTipoPersona']);
      $this->modeloP->__SET("direccion", $_POST['txtDireccion']);
      $this->modeloP->__SET("genero", $_POST['txtGenero']);
      $this->modeloP->__SET("tipoDocumento", $_POST['txtTipoDocumento']);
      $this->modeloP->__SET("fechaContrato", null);
      $persona = $this->modeloP->guardarPersona();

      $this->modeloUsuario->__SET("idUsuario", $_POST['txtIdPersona']);
      $this->modeloUsuario->__SET("nombreUsuario", $_POST['txtUsuario']);
      $this->modeloUsuario->__SET("clave", $_POST['txtClave']);
      $this->modeloUsuario->__SET("rolId", $_POST['txtRol']);
      $this->modeloUsuario->__SET("estado", 1);
      $usuario = $this->modeloUsuario->guardarUsu();

        if($persona == true && $usuario == true){

          $_SESSION['alerta'] = ' swal({
            title: "Guardado exitoso!",
            type: "success",
            confirmButton: "#3CB371",
            confirmButtonText: "Aceptar",
            // confirmButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
          })';

        }else{

          $_SESSION['alerta'] = ' swal({
            title: "Error en el registro!",
            type: "error",
            confirmButton: "#3CB371",
            confirmButtonText: "Aceptar",
            // confirmButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
          })';

        }

    }



    private function guardarProveedorNatural(){

      $this->modeloP->__SET("idPersona", $_POST['txtIdPersona']);
      $this->modeloP->__SET("nombres", $_POST['txtNombres']);
      $this->modeloP->__SET("apellidos", $_POST['txtApellidos']);
      $this->modeloP->__SET("telefono", $_POST['txtTelefono']);
      $this->modeloP->__SET("celular", $_POST['txtCelular']);
      $this->modeloP->__SET("email", $_POST['txtEmail']);
      $this->modeloP->__SET("tipoPersona", $_POST['txtTipoPersona']);
      $this->modeloP->__SET("direccion", $_POST['txtDireccion']);
      $this->modeloP->__SET("genero", $_POST['txtGenero']);
      $this->modeloP->__SET("tipoDocumento", $_POST['txtTipoDocumento']);
      $this->modeloP->__SET("fechaContrato", null);
      $persona = $this->modeloP->guardarPersona();

      if($persona == true){

        $_SESSION['alerta'] = ' swal({
          title: "Guardado exitoso!",
          type: "success",
          confirmButton: "#3CB371",
          confirmButtonText: "Aceptar",
          // confirmButtonText: "Cancelar",
          closeOnConfirm: false,
          closeOnCancel: false
        })';

      }else{

        $_SESSION['alerta'] = ' swal({
          title: "Error en el registro!",
          type: "error",
          confirmButton: "#3CB371",
          confirmButtonText: "Aceptar",
          // confirmButtonText: "Cancelar",
          closeOnConfirm: false,
          closeOnCancel: false
        })';

        }
    }



    private function guardarProveedorJuridico(){

      $this->modeloP->__SET("idPersona", $_POST['txtIdPersona']);
      $this->modeloP->__SET("nombres", $_POST['txtNombres']);
      $this->modeloP->__SET("apellidos", $_POST['txtApellidos']);
      $this->modeloP->__SET("telefono", $_POST['txtTelefono']);
      $this->modeloP->__SET("celular", $_POST['txtCelular']);
      $this->modeloP->__SET("email", $_POST['txtEmail']);
      $this->modeloP->__SET("tipoPersona", $_POST['txtTipoPersona']);
      $this->modeloP->__SET("direccion", $_POST['txtDireccion']);
      $this->modeloP->__SET("genero", $_POST['txtGenero']);
      $this->modeloP->__SET("tipoDocumento", $_POST['txtTipoDocumento']);
      $this->modeloP->__SET("fechaContrato", null);
      $persona = $this->modeloP->guardarPersona();

      $this->modeloP->__SET("nitEmpresa", $_POST['txtnit']);
      $this->modeloP->__SET("nombreEmpresa", $_POST['txtnombreEmpresa']);
      $this->modeloP->__SET("telefonoEmpresa", $_POST['txtDireccionEmpresa']);
      $this->modeloP->__SET("idPersona", $_POST['txtIdPersona']);
      $provJur = $this->modeloP->registrarProveedorJuridico();

      if($persona == true && $provJur == true){

        $_SESSION['alerta'] = ' swal({
          title: "Guardado exitoso!",
          type: "success",
          confirmButton: "#3CB371",
          confirmButtonText: "Aceptar",
          // confirmButtonText: "Cancelar",
          closeOnConfirm: false,
          closeOnCancel: false
        })';

      }else{

        $_SESSION['alerta'] = ' swal({
          title: "Error en el registro!",
          type: "error",
          confirmButton: "#3CB371",
          confirmButtonText: "Aceptar",
          // confirmButtonText: "Cancelar",
          closeOnConfirm: false,
          closeOnCancel: false
        })';

        }

    }



    public function listarProveedores($id=0, $tipo=0){


     if (isset($_POST['btn-modificar-prov'])) {
       $this->modeloP->__SET('idPersona', $_POST['txtidPersona']);
       $consultaProv = $this->modeloP->consultarProveedorJ() ;

        if ($_POST['txtTipoEmpleado'] == 3) {
          if ($consultaProv != false) {
            $this->modeloP->__SET('idPersona', $_POST['txtidPersona']);
            $borrar = $this->modeloP->borrarProveedor();
            $this->modeloP->__SET('idPersona', $_POST['txtidPersona']);
            $this->modeloP->__SET('nombres', $_POST['txtnombre']);
            $this->modeloP->__SET('apellidos', $_POST['txtapell']);
            $this->modeloP->__SET('celular', $_POST['txtcel']);
            $this->modeloP->__SET('email', $_POST['txtcorreo']);
            $this->modeloP->__SET('telefono', $_POST['txttel']);
            $this->modeloP->__SET('direccion', $_POST['txtdirecc']);
            $this->modeloP->__SET('fechaContrato', null);
            $this->modeloP->__SET('genero', null);
            $this->modeloP->__SET('tipoPersona', $_POST['txtTipoEmpleado']);
            $modPer = $this->modeloP->modificarPersona();

            $_SESSION['alerta'] = ' swal({
              title: "Modificación exitosa!",
              type: "success",
              confirmButton: "#3CB371",
              confirmButtonText: "Aceptar",
              // confirmButtonText: "Cancelar",
              closeOnConfirm: false,
              closeOnCancel: false
            })';

          }else{

            $this->modeloP->__SET('idPersona', $_POST['txtidPersona']);
             $this->modeloP->__SET('nombres', $_POST['txtnombre']);
             $this->modeloP->__SET('apellidos', $_POST['txtapell']);
             $this->modeloP->__SET('celular', $_POST['txtcel']);
             $this->modeloP->__SET('email', $_POST['txtcorreo']);
             $this->modeloP->__SET('telefono', $_POST['txttel']);
             $this->modeloP->__SET('direccion', $_POST['txtdirecc']);
             $this->modeloP->__SET('fechaContrato', null);
             $this->modeloP->__SET('genero', null);
             $this->modeloP->__SET('tipoPersona', $_POST['txtTipoEmpleado']);
             $modPer = $this->modeloP->modificarPersona();

             $_SESSION['alerta'] = ' swal({
               title: "Modificacion exitosa!",
               type: "success",
               confirmButton: "#3CB371",
               confirmButtonText: "Aceptar",
               // confirmButtonText: "Cancelar",
               closeOnConfirm: false,
               closeOnCancel: false
             })';

          }


        }else if ($_POST['txtTipoEmpleado'] == 4) {

          if ($consultaProv != true) {
              $this->modeloP->__SET("nitEmpresa", $_POST['txtNitEmp']);
              $this->modeloP->__SET("nombreEmpresa", $_POST['txtNombreE']);
              $this->modeloP->__SET("telefonoEmpresa", $_POST['txtTeleEmp']);
              $this->modeloP->__SET("idPersona", $_POST['txtidPersona']);
              $regProvJur = $this->modeloP->registrarProveedorJuridico();

              $this->modeloP->__SET('idPersona', $_POST['txtidPersona']);
              $this->modeloP->__SET('nombres', $_POST['txtnombre']);
              $this->modeloP->__SET('apellidos', $_POST['txtapell']);
              $this->modeloP->__SET('celular', $_POST['txtcel']);
              $this->modeloP->__SET('email', $_POST['txtcorreo']);
              $this->modeloP->__SET('telefono', $_POST['txttel']);
              $this->modeloP->__SET('direccion', $_POST['txtdirecc']);
              $this->modeloP->__SET('fechaContrato', null);
              $this->modeloP->__SET('genero', null);
              $this->modeloP->__SET('tipoPersona', $_POST['txtTipoEmpleado']);
              $modPer = $this->modeloP->modificarPersona();

             $_SESSION['alerta'] = ' swal({
               title: "Modificación exitosa!",
               type: "success",
               confirmButton: "#3CB371",
               confirmButtonText: "Aceptar",
               // confirmButtonText: "Cancelar",
               closeOnConfirm: false,
               closeOnCancel: false
             })';

          }else{

            $this->modeloP->__SET('nitEmpresa', $_POST['txtNit']);
            $this->modeloP->__SET('nombreEmpresa', $_POST['txtEmpresa']);
            $this->modeloP->__SET('telefonoEmpresa', $_POST['txtTele']);
            $modProv = $this->modeloP->modificarProveedor($id);

            $this->modeloP->__SET('idPersona', $_POST['txtidPersona']);
             $this->modeloP->__SET('nombres', $_POST['txtnombre']);
             $this->modeloP->__SET('apellidos', $_POST['txtapell']);
             $this->modeloP->__SET('celular', $_POST['txtcel']);
             $this->modeloP->__SET('email', $_POST['txtcorreo']);
             $this->modeloP->__SET('telefono', $_POST['txttel']);
             $this->modeloP->__SET('direccion', $_POST['txtdirecc']);
             $this->modeloP->__SET('fechaContrato', null);
             $this->modeloP->__SET('genero', null);
             $this->modeloP->__SET('tipoPersona', $_POST['txtTipoEmpleado']);
             $this->modeloP->modificarPersona();
             $_SESSION['alerta'] = ' swal({
               title: "Modificación exitosa!",
               type: "success",
               confirmButton: "#3CB371",
               confirmButtonText: "Aceptar",
               // confirmButtonText: "Cancelar",
               closeOnConfirm: false,
               closeOnCancel: false
             })';
          }
        }
     }
      if($id!= ""){
        $proveedor = $this->modeloP->ListarProveedorID($id);
        if ($proveedor['Tbl_TipoPersona_idTbl_TipoPersona'] == 4) {
          $proveedorJ = $this->modeloP->ListarProveedoresJurID($id);
        }
      }
      $TipoProveedor = $this->modeloP->tipoPersonaProveedores();
      $tipoProveedores = $this->modeloP->tipoPersonaProveedor();
      $listarP= $this->modeloP->ListarProveedor();
      //$ListarPID = $this->modeloP->ListarProveedorID($Id);
      require APP . 'view/_templates/header.php';
      require APP . 'view/Personas/listarProveedores.php';
      require APP . 'view/_templates/footer.php';

    }



    public function listarTipoPers(){

      $TipoPerVendedor = $this->mdlTipoPersona->listarTipoPerVendedor();
      $TipoPersona = $this->mdlTipoPersona->listarTipoPersonas();
      $Roles = $this->modeloUsuario->listarRol();
      require APP . 'view/_templates/header.php';
      require APP . 'view/Personas/registrarPersonas.php';
      require APP . 'view/_templates/footer.php';
    }



    public function listarUsuarios(){

      $usuarios = $this->modeloUsuario->ListarUsuarios();
      $rol = $this->modeloUsuario->listarRol();

      require APP . 'view/_templates/header.php';
      require APP . 'view/Personas/listarusuarios.php';
      require APP . 'view/_templates/footer.php';
    }


    public function listarPersonasEmpleados($id = "",$tipo = 0){

      $persona = null;
      $validarUsu = true;
      $existe = false;
      $existe2 = false;
      $noExiste = false;
      $existeEmail = false;
      $existeEmail2 = false;
      $noExisteEmail = false;
      if(isset($_POST['btn-modificar'])){

        $this->modeloUsuario->__SET("nombreUsuario", $_POST['txtnombreusuario']);
        $this->modeloUsuario->__SET("correo", $_POST['txtcorreo']);

        $ValidarNomUsu = $this->modeloUsuario->validarModUsuario($id);
        $ConsultarUsuarios = $this->modeloUsuario->consultarUsuarios();
        $usuario = $this->modeloUsuario->ModNombreUsu($id);


        $ValidarEmail = $this->modeloUsuario->ValidarModEmail($id);
        $ConsultarEmails = $this->modeloUsuario->ConsultarEmail();
        $email = $this->modeloUsuario->ModEmailusuario($id);

        foreach ($ConsultarUsuarios as $value) {
          if ($value['nombre_usuario'] == $ValidarNomUsu['nombre_usuario']) {
            $existe = true;#dejar guardar
            break;
          }
        }

        foreach ($usuario as $val) {
          if($val['nombre_usuario'] == $_POST['txtnombreusuario']){
            $existe2 = true;# NO dejar guardar
            break;
          }
        }

        foreach ($ConsultarUsuarios as $valor) {
          if ($valor['nombre_usuario'] != $_POST['txtnombreusuario']) {
            $noExiste = true;# dejar guardar
          }
        }

        foreach ($ConsultarEmails as $va) {
          if ($va['email'] == $ValidarEmail['email']) {
            $existeEmail = true;#dejar guardar
            break;
          }
        }

        foreach ($email as $valores) {
          if($valores['email'] == $_POST['txtcorreo']){
            $existeEmail2 = true;# NO dejar guardar
            break;
          }
        }

        foreach ($ConsultarEmails as $valor2) {
          if ($valor2['email'] != $_POST['txtcorreo']) {
            $noExisteEmail = true;# dejar guardar
          }
        }

        if(($existe === false && $existe2 === true) || $noExiste === false || ($existeEmail === false && $existeEmail2 === true) || $noExisteEmail === false){
          $validarUsu = false;
          // var_dump("no guardado");
          // exit();
        }else if(($existe === true && $existe2 === false) || $noExiste === true || ($existeEmail === true && $existeEmail2 === false) || $noExisteEmail === true){
          // var_dump("Guardado");
          // exit();

          if($_POST['txtTipoEmpleado'] == 1){
          $this->modeloUsuario->__SET('idUsuario',$id);
          $this->modeloUsuario->__SET('nombreUsuario', $_POST['txtnombreusuario']);
          $this->modeloUsuario->__SET('rolId', $_POST['txtrol']);
          $modUsu = $this->modeloUsuario->modificarUsuario();

          $this->modeloP->__SET('idPersona', $_POST['idPersona']);
          $this->modeloP->__SET('nombres', $_POST['txtnombre']);
          $this->modeloP->__SET('apellidos', $_POST['txtapell']);
          $this->modeloP->__SET('celular', $_POST['txtcel']);
          $this->modeloP->__SET('email', $_POST['txtcorreo']);
          $this->modeloP->__SET('telefono', $_POST['txttel']);
          $this->modeloP->__SET('direccion', $_POST['txtdirecc']);
          $this->modeloP->__SET("fechaContrato", date("Y-m-d",strtotime($_POST['txtfechac'])));
          $fecha = $_POST['txtfechac'];
          $this->modeloP->__SET("fechaTerminacion",date("Y-m-d", strtotime($fecha)));
          $this->modeloP->__SET('genero', $_POST['txtgenero']);
          $this->modeloP->__SET('tipoPersona', $_POST['txtTipoEmpleado']);
          $modPer = $this->modeloP->modificarPersona();

          if($modUsu == true && $modPer == true){

            $_SESSION['alerta'] = ' swal({
              title: "Modificación exitosa!",
              type: "success",
              confirmButton: "#3CB371",
              confirmButtonText: "Aceptar",
              // confirmButtonText: "Cancelar",
              closeOnConfirm: false,
              closeOnCancel: false
            })';

          }else{

            $_SESSION['alerta'] = ' swal({
              title: "Error en la modificación!",
              type: "error",
              confirmButton: "#3CB371",
              confirmButtonText: "Aceptar",
              // confirmButtonText: "Cancelar",
              closeOnConfirm: false,
              closeOnCancel: false
            })';

          }



        }else if($_POST['txtTipoEmpleado'] == 2){
          $this->modeloUsuario->__SET('idUsuario',$id);
          $this->modeloUsuario->__SET('nombreUsuario', $_POST['txtnombreusuario']);
          $this->modeloUsuario->__SET('rolId', $_POST['txtrol']);
          $modUsu = $this->modeloUsuario->modificarUsuario();

          $this->modeloP->__SET('idPersona', $_POST['idPersona']);
          $this->modeloP->__SET('nombres', $_POST['txtnombre']);
          $this->modeloP->__SET('apellidos', $_POST['txtapell']);
          $this->modeloP->__SET('celular', $_POST['txtcel']);
          $this->modeloP->__SET('email', $_POST['txtcorreo']);
          $this->modeloP->__SET('telefono', $_POST['txttel']);
          $this->modeloP->__SET('direccion', $_POST['txtdirecc']);
          $this->modeloP->__SET("fechaContrato", null);
          $this->modeloP->__SET("fechaTerminacion", null);
          $this->modeloP->__SET('genero', $_POST['txtgenero']);
          $this->modeloP->__SET('tipoPersona', $_POST['txtTipoEmpleado']);
          $modPer = $this->modeloP->modificarPersona();

          if($modUsu == true && $modPer == true){

            $_SESSION['alerta'] = ' swal({
              title: "Modificación exitosa!",
              type: "success",
              confirmButton: "#3CB371",
              confirmButtonText: "Aceptar",
              // confirmButtonText: "Cancelar",
              closeOnConfirm: false,
              closeOnCancel: false
            })';

          }else{

            $_SESSION['alerta'] = ' swal({
              title: "Error en la modificación!",
              type: "error",
              confirmButton: "#3CB371",
              confirmButtonText: "Aceptar",
              // confirmButtonText: "Cancelar",
              closeOnConfirm: false,
              closeOnCancel: false
            })';

            }

          }


        }

    }

      if($id!= ""){
        $persona = $this->modeloP->ListarPersEmpleadoFijoID($id);
      }

      $TipoEmpleado = $this->modeloP->tipoPersonaEmpleados();
      $listarU = $this->modeloUsuario->ListarUsuarios();
      $listarE = $this->modeloP->ListarPersEmpleadoFijo();
      $roles = $this->modeloP->listarRoles();

      require APP . 'view/_templates/header.php';
      require APP . 'view/Personas/listarPersonas.php';
      require APP . 'view/_templates/footer.php';
    }



    public function guardarClientes(){
      $this->modeloP->__SET("idPersona", $_POST['txtIdPersona']);
      $this->modeloP->__SET("nombres", $_POST['txtNombres']);
      $this->modeloP->__SET("apellidos", $_POST['txtApellidos']);
      $this->modeloP->__SET("telefono", $_POST['txtTelefono']);
      $this->modeloP->__SET("celular", $_POST['txtCelular']);
      $this->modeloP->__SET("email", $_POST['txtEmail']);
      $this->modeloP->__SET("tipoPersona", $_POST['txtTipoPersona']);
      $this->modeloP->__SET("direccion", $_POST['txtDireccion']);
      $this->modeloP->__SET("genero", $_POST['txtGenero']);
      $this->modeloP->__SET("tipoDocumento", $_POST['txtTipoDocumento']);
      $this->modeloP->__SET("fechaContrato", null);
      $persona = $this->modeloP->guardarPersona();

      if($persona == true){

        $_SESSION['alerta'] = ' swal({
          title: "Guardado exitoso!",
          type: "success",
          confirmButton: "#3CB371",
          confirmButtonText: "Aceptar",
          // confirmButtonText: "Cancelar",
          closeOnConfirm: false,
          closeOnCancel: false
        })';

      }else{

        $_SESSION['alerta'] = ' swal({
          title: "Error en el registro!",
          type: "error",
          confirmButton: "#3CB371",
          confirmButtonText: "Aceptar",
          // confirmButtonText: "Cancelar",
          closeOnConfirm: false,
          closeOnCancel: false
        })';

        }
    }



    public function cambiarEstado(){

       $resultado = $this->modeloUsuario->ModificarEstadoUsu($_POST['id']);
        // var_dump($resultado);
       echo 1;

      }



      public function cambiarEstadoProveedor(){

         $resultado = $this->modeloP->ModificarEstadoProv($_POST['id']);
         echo 1;

        }



        public function listarPersonasClientes($id=0, $tipo=0){

          if(isset($_POST['btn-modificar-cliente'])){
            $this->modeloP->__SET('idPersona', $_POST['idPersona']);
            $this->modeloP->__SET('nombres', $_POST['txtnombre']);
            $this->modeloP->__SET('apellidos', $_POST['txtapell']);
            $this->modeloP->__SET('celular', $_POST['txtcel']);
            $this->modeloP->__SET('email', $_POST['txtcorreo']);
            $this->modeloP->__SET('telefono', $_POST['txttel']);
            $this->modeloP->__SET('direccion', $_POST['txtdirecc']);
            $this->modeloP->__SET('fechaContrato', null);
            $this->modeloP->__SET('genero', $_POST['txtgener']);
            $this->modeloP->__SET('tipoPersona', $_POST['txtTipoCliente']);
            $this->modeloP->modificarPersona();

            if($this->modeloP->modificarPersona() == true){

              $_SESSION['alerta'] = ' swal({
                title: "Modificación exitosa!",
                type: "success",
                confirmButton: "#3CB371",
                confirmButtonText: "Aceptar",
                closeOnConfirm: false,
                closeOnCancel: false
              })';

            }else{

              $_SESSION['alerta'] = ' swal({
                title: "Error en la modificación!",
                type: "success",
                confirmButton: "#3CB371",
                confirmButtonText: "Aceptar",
                closeOnConfirm: false,
                closeOnCancel: false
              })';
            }

          }

          if($id!= ""){
            $clientes = $this->modeloP->ListarPersonasClientesID($id);
          }

          $TipoCliente = $this->modeloP->tipoPersonaCliente();
          $listarClientes = $this->modeloP->ListarPersClientes();
          require APP . 'view/_templates/header.php';
          require APP . 'view/Personas/listarClientes.php';
          require APP . 'view/_templates/footer.php';
        }



    public function modificarContrasenia($id=0,$tipo=0){

      if($id!= ""){
        $persona = $this->modeloP->ListarPersEmpleadoFijoID($id);
      }
      if(isset($_POST['btn-modificar-clave'])){
      $this->modeloUsuario->__SET('idUsuario',$id);
      $this->modeloUsuario->__SET('clave', $_POST['txtnueva']);
      $this->modeloUsuario->modificarContrasenia();

        $_SESSION["alerta"] = ' swal({
          title: "Modificación exitosa!",
          type: "success",
          confirmButton: "#3CB371",
          confirmButtonText: "Aceptar",
          // confirmButtonText: "Cancelar",
          closeOnConfirm: false,
          closeOnCancel: false
        })';

        header('Location: ' . URL . '/Personas/listarPersonasEmpleados');
        exit();
    }

    $listarU = $this->modeloUsuario->ListarUsuarios();
    $listarE = $this->modeloP->ListarPersEmpleadoFijo();

    require APP . 'view/_templates/header.php';
    require APP . 'view/Personas/listarPersonas.php';
    require APP . 'view/_templates/footer.php';

  }


  public function cambiarEstadoCliente(){
     $resultado = $this->modeloP->ModificarEstadoCliente($_POST['id']);
     echo 1;

    }

}
