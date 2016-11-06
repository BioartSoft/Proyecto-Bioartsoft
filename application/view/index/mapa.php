<div class="page-header">
  <h1>Mapa de navegación</h1>
</div>

<ul class="list-group">
  <?php
  $ruta = "/../../model/menu.php";
  require_once $ruta;
  $menu = new Menu();
  $opciones = $menu->getMenu();
  $hijos = "";
   ?>

   <?php foreach($opciones AS $opcion): ?>
     <?php if($opcion['padre_id'] == ""): ?>
       <?php if($hijos != ""): ?>
         <li class="list-group-item padre">
             <a href="#"><i class="fa fa-<?= $opcion['icono_menu'] ?>" style="color: #000"></i> <?= $opcion['texto_menu'] ?> <span class="fa arrow" style="color: #000"></span></a>
             <ul class="list-group hijos" style="display:none">
               <?= $hijos ?>
               <?php $hijos = ""; ?>
             </ul>
         </li>
       <?php else: ?>
         <li class="list-group-item">
             <a href="#"><i class="fa fa-<?= $opcion['icono_menu'] ?>" style="color: #000"></i> <?= $opcion['texto_menu'] ?></a>
         </li>
       <?php endif ?>
     <?php else: ?>
       <?php
       $hijos .= '<li class="list-group-item hijo">' .
              '<a href="'. URL . $opcion['url_menu'] . '"> ' .  $opcion['texto_menu'] .'</a>' .
           '</li>';
       ?>

     <?php endif ?>
   <?php endforeach ?>
</ul>
<script type="text/javascript">
  $(document).ready(function(){
    $(".padre").click(function(){
      $(this).find(".hijos").slideToggle();
    });
    return false;
  });
</script>
