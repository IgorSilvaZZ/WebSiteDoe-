<?php include 'inicio.php' ?>;

<!-- inicializando a sessao -->
<?php session_start(); ?>
<?php
if(!isset($_SESSION["emailOng"])) { header("../CadastroOngs/index.php"); }

?>


      <!-- Modal de Edicao -->
      <div id="modalEdicao" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edicao</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form action="../Campanha/editar-campanha.php" method="post">
              <div class="modal-body">
                <span id="visul_campanha"></span>
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Salvar as Alterações</button>
              </div>
            </form>
          </div>
        </div>
      </div>


      <!-- Modal de Exclusao -->
      <div class="modal fade" id="modalExclusao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Deseja Exlcuir Campanha?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="../Campanha/excluir-campanha.php" method="post">
                <div class="modal-body">
                  <span id="delete_campanha"></span>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary">Excluir</button>
            </form>
            </div>
          </div>
        </div>
      </div>


      <!-- Modal Sucesso -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><?php echo$_SESSION["nomeOng"] ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <?php if(isset($_SESSION['mensagem'])){
                echo $_SESSION['mensagem'];
              }
              ?>
              
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>

    <?php include 'menu.php'; ?>

    <?php
        try {
            $campanha = new Campanha();
            $campanha->setIdOng($_SESSION["idOng"]);
            $lista = $campanha->listarCampanhas($campanha);
            //$campanha->listarCampanha($campanha);
            
        } catch(Exception $e) {
            echo '<pre>';
                print_r($e);
            echo '</pre>';
            echo $e->getMessage();
        }
    ?>

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
        <?php foreach($lista as $linha) { ?>
          <div class="col-md-5">
              
            <!--Card image-->
            <div class="card card-image" 
            style="background-image: url(<?php echo $linha['fotoCampanha'] ?>);background-repeat: no-repeat;background-position: center;background-size: cover;">
            <!--Card content-->
              <div class="card-body text-center">
                <!--Title-->
                <h4 class="card-title white-text"><?php echo $linha['nomeCampanha'] ?></h4>
                <a class="btn btn-outline-white btn-md waves-effect view_data" id="<?php echo $linha['idCampanha']; ?>">Editar</a>
                <a class="btn btn-outline-white btn-md waves-effect delete_data" id="<?php echo $linha['idCampanha']; ?>">Excluir</a>
              </div>
            </div>
          <!--/.Card-->

          </div>
          <?php } ?>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid">
          <nav>
            <ul>
              <li>
                <a href="#">
                  Sobre nós
                </a>
              </li>
              <li>
                <a href="#">
                  Site Oficial
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>,  <a href="#" target="_blank">Winner&copy; </a>.
          </div>
        </div>
      </footer>
    </div>
  </div>

  <?php include 'fim.php' ?>;>

  <script>
  
    $(document).ready(function() {
      $(document).on('click', '.view_data', function(){
        var id = $(this).attr("id");
        if(id !== ""){
          var dados = {
            id: id
          };
          $.post('modalCampanha.php', dados, function(retorna){
            $('#visul_campanha').html(retorna);
            $('#modalEdicao').modal('show');
            /* alert(retorna) */
          });
        }
      });

    });

  </script>

  <script>
    $(document).ready(function() {
      $(document).on('click', '.delete_data', function(){
            var id = $(this).attr("id");
            if(id !== ""){
              var dados = {
                del: id
              };
              $.post('modalCampanha.php', dados, function(retorna){
                $('#delete_campanha').html(retorna);
                $('#modalExclusao').modal('show');
                /* alert(retorna) */
              });
            }
          });
      });

  </script>

  <script>

    $(document).ready(function(){
        var sessao = "<?php echo $_SESSION['mensagem']; ?>";
        if(sessao){
            $('#myModal').modal('show');
        }
        
    });
    <?php
    unset($_SESSION['mensagem']);
    ?>

  </script>