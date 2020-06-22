<?php include 'inicio.php' ?>;

<!-- inicializando a sessao -->
<?php session_start(); ?>
<?php
if(!isset($_SESSION["emailOng"])) { header("../CadastroOngs/index.php"); }

?>


  <?php include 'menu.php'; ?>

      <?php
        try {
            $postagem = new Postagem();
            $postagem->setIdOng($_SESSION["idOng"]);
            $lista = $postagem->ListarPostagens($postagem);
        } catch(Exception $e) {
            echo '<pre>';
                print_r($e);
            echo '</pre>';
            echo $e->getMessage();
        }
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

            <form action="../Postagem/editar-postagem.php" method="post">
              <div class="modal-body">
                <span id="visul_postagem"></span>
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
              <h5 class="modal-title" id="exampleModalLabel">Deseja Exlcuir a Postagem?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="../Postagem/excluir-postagem.php" method="post">
                <div class="modal-body">
                  <span id="delete_postagem"></span>
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

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            
          <?php foreach ($lista as $linha) { ?>
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Postagem</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <a class="nav-link p-0" href="#">
                            <img src="<?php echo $ong->getFotoOng(); ?>" class="rounded-circle z-depth-0"
                              alt="avatar image" height="80">
                          </a>
                        </td>
                        <td style="height: 100%;width: 70%;">
                          <textarea class="form-control" rows="3" style="border: none; max-height: 700px;" ><?php echo $linha['descPostagem']; ?></textarea>
                          
                        </td>
                        <td>
                          <button type="button" class="btn btn-info view_data" id="<?php echo $linha['idPostagem']; ?>">Editar</button>
                          <button type="button" class="btn btn-danger delete_data" id="<?php echo $linha['idPostagem']; ?>">Excluir</button>
                        </td>
                      </tr>
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
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

  <?php include 'fim.php' ?>;


  <script>
  
    $(document).ready(function() {
      $(document).on('click', '.view_data', function(){
        var id = $(this).attr("id");
        if(id !== ""){
          var dados = {
            id: id
          };
          $.post('modalPostagem.php', dados, function(retorna){
            $('#visul_postagem').html(retorna);
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
              $.post('modalPostagem.php', dados, function(retorna){
                $('#delete_postagem').html(retorna);
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
