<?php 

include_once "header.php";

?>
<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <!-- Start Content -->
              <center><h2>CADASTRO DE EMPRESAS</h2></center>
              <div class="row">
                <div class="form-group col-md-4">
                  <label>NOME </label><br>
                  <input type="text" class="form-control" name="" id="">
                </div>
                <div class="form-group col-md-4"> <!-- div muda o tamanho -->
                  <label>CPF </label><br>
                  <input type="text" class="form-control" name="" id="">  
                </div>
                <div class="form-group col-md-4">
                  <label>Data </label><br>
                  <input type="date" class="form-control" name="" id="">
                </div>
                <div class="form-group col-md-4">
                  <label>Sexo </label><br>
                  <select name="" class="form-control" id="">
                    <option value="">Selecione</option>
                    <option value="">1</option>
                    <option value="">2</option>
                  </select>
                </div>
                <div class="card-action">
                  <button type="submit" class="btn btn-danger" onClick="window.location.href='index.php'">Cancelar</button>
                  <button type="submit" class="btn btn-theme">Cadastrar</button>
                </div>
            </div><!-- End Content -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="jquery/jquery-3.4.1.min.js"></script>
<script src="js/states.js"></script>
<script src="js/mascaras.js"></script>

<?php
include_once "footer.php";
?>
