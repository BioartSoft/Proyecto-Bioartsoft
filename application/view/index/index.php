
  <div class="row">
      <center>
        <div class="col-lg-12">
            <h1 class="page-header" style="font-family: fantasy; text-align:center; color: #337BA7">BIOARTSOFT</h1>
        </div>
      </center>
    </div>
      <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                          <?php foreach ($ventasDia AS $valor): ?>
                              <i class="fa fa-usd fa-4x">&nbsp;<span><?= number_format($valor, "0", ".", ".") ?></span></i>
                              <p>Ventas Día</p>
                          <?php endforeach; ?>
                        </div>
                        <div class="col-xs-9 text-right">
                          <?php foreach ($ventasMes as $ventasMes): ?>
                              <div class="huge"></div>
                              <p>Ventas Mes:</p>
                              <?php $pesos = "$"; ?>
                              <span class="ventas"><?= $pesos ?><?= $ventasMes ?></span>
                          <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="panel panel" style="background-color: #3CB371">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                          <?php foreach ($creditos as $value): ?>

                            <i class="fa fa-credit-card fa-4x" style="color: #fff">&nbsp;<?= $value?></i>
                            <p>&nbsp;</p>
                          <?php endforeach; ?>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"></div>
                            <p style="color: #fff">Créditos</p>
                              <?php foreach ($creditos as $value): ?>
                                <span style="color: #fff"><?= $value?></span>
                              <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                    </div>
                </a>
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="panel panel" style="background-color: #3CB371">
                <div class="panel-heading">
                    <div class="row">
                          <div class="col-xs-3">
                            <?php foreach ($comprasDia as $compras): ?>
                                <i class="fa fa-shopping-cart fa-4x" style="color: #fff">&nbsp;<span><?= number_format($compras, "0", ".", ".") ?></span></i>
                                <p style="color: #fff">Entradas Día</p>
                              <?php endforeach; ?>
                          </div>
                          <div class="col-xs-9 text-right">
                            <?php foreach ($comprasMes as $CompraMes): ?>
                                <div class="huge"></div>
                                <p style="color: #fff">Entradas Mes:</p>
                                <span class="compras" style="color: #fff"><?= $pesos ?><?= $CompraMes ?></span>
                            <?php endforeach; ?>
                          </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                          <?php foreach ($prestamos as $val): ?>
                              <i class="fa fa-money fa-4x">&nbsp;<?= $val?></i>
                              <p>&nbsp;</p>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"></div>
                            <p>Préstamos</p>
                            <?php foreach ($prestamos as $val): ?>
                              <?= $val?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                    </div>
                </a>
            </div>
        </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
      $(".ventas").priceFormat({centsLimit: 3, prefix: '$ '});
      $(".compras").priceFormat({centsLimit: 3, prefix: '$ '});
    });
  </script>
