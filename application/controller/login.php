<?php

class Login extends Controller
{
private $modelo;
  private $modeloP;

  function __construct()
  {
    try {
        $this->modelo = $this->loadModel('mdlLogin');
        $this->modeloP = $this->loadModel("mdlPersona");
    } catch (Exception $e) {

    }
  }
  public function iniciar(){
    if(isset($_SESSION['SESION INICIADA']) && $_SESSION['SESION INICIADA'] == true){
      header("Location:".URL . "login/index");
      exit();
    }
    $errorVacios = false;
    $error = false;
    $estado = false;
    if (isset($_POST['btnIniciar'])) {

      if ($_POST['txtContras'] != null && $_POST['txtPersona'] != null) {
        $this->modelo-> __SET('nombre_usuario', $_POST['txtPersona']);
        $persona = $this->modelo->buscarUsuario();
        $contrasenia = trim(decrypt($persona['clave']));
        // var_dump($contrasenia, $_POST['txtContras']);
        // exit();

          if ($persona['nombre_usuario'] == $_POST['txtPersona'] && $contrasenia == $_POST['txtContras']) {
            $_SESSION['SESION INICIADA'] = true;
            $_SESSION['USUARIO_ID'] = $persona['id_usuarios'];
            $_SESSION['ROL'] = $persona['rol'];
            $_SESSION['USUARIO'] = $persona['nombres'];
            $_SESSION['USUARIO-APE'] = $persona['apellidos'];
            $_SESSION['NOMBRE_ROL'] = $persona['nombre_rol'];
            if($persona['estado'] == 1){

              header("Location:".URL."login/index");

            }else{
              $estado = true;
            }
          }else{

              $error = true;

          }
        }else{

             $errorVacios = true;
        }

      }

        require APP.'view/Login/Login.php';

      }



      public function index()
      {
        $modelo = $this->loadModel("mdlConfiguracionPago");
        $configuracion = $modelo->listarConfiguracion();

        require APP . 'view/_templates/header.php';
        require APP . 'view/index/index.php';
        require APP . 'view/_templates/footer.php';
      }



      public function cerrarsesion(){
          if (isset($_SESSION['SESION INICIADA'])) {
            session_destroy();
          }
            header("Location:".URL."login/iniciar");
      }



      public function recuperarContras(){

        $html = "";
        $html .='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
        $html .='<html xmlns="http://www.w3.org/1999/xhtml">';
        $html .='<head>';
        $html .='<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
        $html .='<title>Bioartsoft</title>';
        $html .='</head>';
        $html .='<body>';
        $html .='<div style="width: 100%" >';
        $html .='<img src="'.URL.'"img/BioartesV2.png">';
        $html .='<h3>BIOARTES</h3>';
        $html .='<h4>Solicitud para recuperación de contraseña</h4>';
        $html .='<strong>Su contraseña es: </strong>';

        $mensaje = false;
        $error2 = false;
        $error3 = false;
        $alerta = false;
        if (isset($_POST['btnEnviar-Correo'])) {

         if ($_POST['txtNombreUsu'] != null && $_POST['txtEmailUsu'] != null) {
            $this->modelo-> __SET('nombre_usuario', $_POST['txtNombreUsu']);
            $this->modelo-> __SET('correo', $_POST['txtEmailUsu']);
            $usuario = $this->modelo->existeUsuario();

            if ($usuario['nombre_usuario'] == $_POST['txtNombreUsu'] && $usuario['email'] == $_POST['txtEmailUsu']) {

              $correo = $usuario['email'];
              require APP . 'libs/swiftmailer/lib/swift_required.php';

              // Create the Transport
              $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
              ->setUsername('jhoanlt19@gmail.com')
              ->setPassword('JHOANzurda200594');

              // Create the Mailer using your created Transport
              $mailer = Swift_Mailer::newInstance($transport);

              $contrasenia = decrypt($usuario['clave']);
              // Create a message
              $message = Swift_Message::newInstance('Recuperación Contraseña')
                ->setFrom(array('jhoanlt19@gmail.com' => 'BIOARTES'))
                ->setTo(array($correo => 'A name'))
                ->setBody($html.$contrasenia, 'text/html');

                $html .='</div>';
                $html .='</body>';
              // Send the message
              $result = $mailer->send($message);

              $mensaje = true;

              $alerta = true;

            }else{
              $error2 = true;
            }

          }else{
            $error3 = true;
          }

      }

      require APP.'view/Login/RecuperarClave.php';

      }
  }
