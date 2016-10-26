
<form id="formPdfVentas" action="<?= URL ?>Ventas/reporteGanancias" method="post" data-parsley-validate="">
<div class="row">
 <h3 class="page-header" style="text-align:center; color: #3CB371; margin-top: 10px; margin-bottom: 10px">Consultar Ganancias</h3><br>
  <div class="row">
    <div class="col-md-1"></div>
    <div   class="col-md-4">
        <label for="" style="color: #3CB371">Fecha Inicial </label>
        <div class="input-group date" data-provide="datepicker">
        <input type="text" class="form-control" name="txtfechainicial" id="txtfechainicial" placeholder="Fecha Inicial" readonly="true" data-parsley-required="true">
        <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
      </div>
      </div>
    </div>
    <div class="col-md-1"></div>
    <div   class="col-md-4">
        <label for="" style="color: #3CB371">Fecha Final </label>
        <div class="input-group date" data-provide="datepicker">
        <input type="text" class="form-control" name="txtfechafinal" id="txtfechafinal" readonly="true"  placeholder="Fecha final" data-parsley-required="true">
        <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
      </div>
      </div>
  </div>
</div>
<br><br>
<div class="row">
  <div class="col-md-5"></div>
    <div class="col-md-4">
      <button type="submit"class="btn btn-primary active" id="btn-pdf" name="btnconsultarganancia"><i class="fa fa-file-pdf-o" aria-hidden="true"> Generar Ganancias</i></button>
    </div>
</div>
</div>
</form>

<script type="text/javascript">
  $(document).ready(function(){
    $("#btn-pdf").click(function(){
      $("#formPdfVentas").parsley().validate();
    })
  });
</script>
