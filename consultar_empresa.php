<?php
include_once "header.php";


?>

<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Consultar Empresa</h4>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>Nome Fantasia</th>
                      <th>CNPJ</th>
                     
                      <th></th>
                    </tr>
                  </thead>
                
                  <tbody>

                    <?php //while ($rows_consultaEmpresa = mysqli_fetch_assoc($resultado_consultaEmpresa)) {
                      ?>
                      <tr>
                        <td>Nome Fantasia<?php //echo $rows_consultaEmpresa['nomeFantasia']; ?></td>
                       
                        <td> 45522555<?php //echo $rows_consultaEmpresa['cnpj']; ?></td>
                     

                        <td>
                        <?php //echo "<a class='btn btn-default' title='Vizualizar Tudo' href='visualizar_empresa.php?idEmpresa=" . $rows_consultaEmpresa['idEmpresa'] . "'>" ?><i class="fa fa-search"></i><?php //echo "</a>"; ?>
                         
                        
                     

                          <!-- Modal-->

                      
                      

                      

                        
                      </tr>
                    <?php //} ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <script src="jquery/jquery-3.4.1.min.js"></script>
  <script src="js/states.js"></script>
  <script src="js/mascaras.js"></script>

  
  <script>
    $(document).ready(function() {
      $('#basic-datatables').DataTable({
        "language": {
          "sEmptyTable": "Nenhum registro encontrado",
          "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
          "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
          "sInfoFiltered": "(Filtrados de _MAX_ registros)",
          "sInfoPostFix": "",
          "sInfoThousands": ".",
          "sLengthMenu": "_MENU_ resultados por página",
          "sLoadingRecords": "Carregando...",
          "sProcessing": "Processando...",
          "sZeroRecords": "Nenhum registro encontrado",
          "sSearch": "Pesquisar",
          "oPaginate": {
            "sNext": "Próximo",
            "sPrevious": "Anterior",
            "sFirst": "Primeiro",
            "sLast": "Último"
          },
          "oAria": {
            "sSortAscending": ": Ordenar colunas de forma ascendente",
            "sSortDescending": ": Ordenar colunas de forma descendente"
          }
        }
      });
    });
  </script>



  <?php
include_once("footer.php");

?>
