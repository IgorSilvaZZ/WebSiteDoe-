<?php include 'inicio.php' ?>;

<!-- inicializando a sessao -->
<?php session_start(); ?>
<?php
if(!isset($_SESSION["emailOng"])) { header("../CadastroOngs/index.php"); } ?>

<?php include 'menu.php'; ?>

        <!-- Modal -->
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


      <div class="panel-header panel-header-sm" data-color="blue">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Criar uma nova campanha</h5>
              </div>
              <div class="card-body">
                <form method="post" enctype="multipart/form-data" action="../Campanha/cadastrar-campanha.php">
                  <div class="form-row">
                   
                  </div>
                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="inputNome">Nome</label>
                        
                        <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Digite aqui">
                      </div>          
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputNome">Data de ínicio</label>
                        <input type="date" class="form-control" id="txtDtInicio" name="txtDtInicio" placeholder="Digite aqui">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputCNPJ">Data final</label>
                        <input type="date" class="form-control" id="txtDtFinal" name="txtDtFinal" placeholder="Digite aqui">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descrição</label>
                        <textarea class="form-control" id="txtDescricao" name="txtDescricao" rows="3" placeholder="Digite aqui"></textarea>
                      </div>
                    </div>
                   
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="card" style="width: 30rem;">
              <div class="card-header " style="width: 30rem;">
                <span >Adicionar uma foto<i class="fas fa-cloud-upload-alt ml-2" aria-hidden="true"></i></span>
                <div class="file-field">
                  <div class="btn btn-outline-griz btn-rounded  waves-effect btn-sm float-left">
                    <input name="txtFoto" id="txtFoto" type="file">
                  </div> 
                </div>
              </div>
              <!-- <img class="card-img-top" src="../assets/img/header.jpg" alt="Card image cap"> -->
            </div>
          </div>
        </div>
        
        <div class="container">
          <div class="row">
            <div class="col-sm">
              
            </div>
            <div class="col-sm">
              <button type="submit" class="btn btn-success">Finalizar</button>
            </div>
            <div class="col-sm">
              
            </div>
          </div>
        </div>
      </div>
      </form>

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
