<div class="row">
  <h3 class="page-header" style="text-align:center; color: #3CB371">Registrar usuarios</h3><br>
  <section>
    <fieldset style="border: 1px solid #DEDEDE; background-color: #F4F4F4">
      <div class="container-fluid">
        <br><br>
         <form  data-toggle="validator" role="form">
            <div class="col-md-4">
              <label>Tipo documento</label><br>
              <select class="js-example-basic-multiple" multiple="multiple" style="width: 100%">
                  <option value="Ma">Cédula</option>
                  <option value="Fe">Cédula Extranjera</option>
                  <option value="Fe">Otro</option>
              </select>
            </div>
          </form>
          <form data-toggle="validator" role="form">
             <div class="col-md-4">
               <div class="form-group has-feedback">
                 <label for="inputTwitter" class="control-label">Número documento *</label>
                  <input type="text" pattern="^[_1-9]{1,}$" maxlength="12" class="form-control" id="inputTwitter" placeholder="Número Documento" required>
                 <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                 <div class="help-block with-errors"></div>
               </div>
            </div>
             <div class="col-md-4">
               <div class="form-group has-feedback">
                 <label for="inputTwitter" class="control-label">Primer Nombre *</label>
                  <input type="text" pattern="^[_A-z]{1,}$" maxlength="12" class="form-control" id="inputTwitter" placeholder="Primer Nombre" required>
                 <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                 <div class="help-block with-errors"></div>
               </div>
            </div>
          </div>
          <div class="container-fluid">
        </form>
              <br><br>
              <div class="row">
                          <div class="col-md-4">
                            <form data-toggle="validator" role="form">
                              <div class="form-group has-feedback">
                                <label for="inputTwitter" class="control-label">Segundo Nombre *</label>
                                  <input type="text" pattern="^[_A-z]{1,}$" maxlength="30" class="form-control" id="inputTwitter" placeholder="Segundo Nombre" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                              </div>
                          </div>
                        </form>
                           <div class="col-md-4">
                             <form data-toggle="validator" role="form">
                             <div class="form-group has-feedback">
                               <label for="inputTwitter" class="control-label">Primer Apellido *</label>
                                 <input type="text" pattern="^[_A-z]{1,}$" maxlength="30" class="form-control" id="inputTwitter" placeholder="Primer Apellido" required>
                               <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                               <div class="help-block with-errors"></div>
                             </div>
                           </form>
                          </div>
                             <div class="col-md-4">
                               <form  data-toggle="validator" role="form">
                               <div class="form-group has-feedback">
                                 <label for="inputTwitter" class="control-label">Segundo Apellido *</label>
                                  <input type="text" pattern="^[_A-z]{1,}$" maxlength="12" class="form-control" id="inputTwitter" placeholder="Segundo Apellido" required>
                                 <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                 <div class="help-block with-errors"></div>
                               </div>
                             </div>
                             </div>
                           </form>
                             <br><br>

              <div class="row">
              <div class="col-md-4">
                <form  data-toggle="validator" role="form">
                <div class="form-group has-feedback">
                  <label for="inputTwitter" class="control-label">Nombre Usuario *</label>
                    <input type="text" pattern="^[_A-z]{1,}$" maxlength="30" class="form-control" id="inputTwitter" placeholder="Nombre Usuario" required>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </form>

              <div class="col-xs-12 col-md-4">
                <form  data-toggle="validator" role="form">
                <div class="form-group has-feedback">
                  <label for="inputTwitter" class="control-label">Contraseña *</label>
                    <input type="text" pattern="^[_A-9]{1,}$" maxlength="30" class="form-control" id="inputTwitter" placeholder="Contraseña" required>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
                </form>

              <div class="col-xs-12 col-md-4">
                <form  data-toggle="validator" role="form">
                <div class="form-group has-feedback">
                  <label for="inputTwitter" class="control-label">Confirmar Contraseña *</label>
                    <input type="text" pattern="^[_A-9]{1,}$" maxlength="30" class="form-control" id="inputTwitter" placeholder="Confirmar Contraseña" required>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </form>

            </div>
            <br><br><br>

            <div class="row">
               <div class="col-xs-12 col-md-4">
                 <form data-toggle="validator" role="form">
                 <div class="form-group">
                  <label for="inputEmail" class="control-label">Email</label>
                  <input type="Email" class="form-control" id="inputEmail" placeholder="Email" data-error="El formato del Email es inválido" required>
                  <div class="help-block with-errors"></div>
                </div>
               </div>
             </form>
              <div class="col-xs-12 col-md-4">
              </div>
            </div>
                <br><br>

              <div class="row">
                <div class="col-xs-1 col-md-4">
                </div>

                   <div class="col-xs-5 col-md-4">
              <button type="button" class="btn btn-success active" onclick="mensaje()"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true">  GUARDAR</span></button>
          </div>

          <div class="col-xs-5 col-md-4">
          <button type="button" class="btn btn-danger active" onclick="mensaje2()"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true">  CANCELAR </span></button>
        </div>
    </div>
    </div>
 </fieldset>
 </section>
 </div>
