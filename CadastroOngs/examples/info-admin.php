<?php include 'inicio.php' ?>;

<!-- inicializando a sessao -->
<?php session_start(); ?>
<?php
if(!isset($_SESSION["emailOng"])) { header("../CadastroOngs/index.php"); }

?>

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

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">

            <div class="col-md-10">
                <div class="card">
                  <div class="card-header">
                    <h5 class="title">Editar Perfil</h5>
                  </div>
                  <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="../Ong/editar-ong.php">
                      <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="inputNome">Foto</label>
                          
                           <!-- <img src="../assets/img/bg5.jpg" alt=""> -->
                        <div class="file-field">
                          <div class="btn btn-outline-griz btn-rounded bg-dark waves-effect btn-sm float-left">
                            <span>Editar foto<i class="fas fa-cloud-upload-alt ml-2" aria-hidden="true"></i></span>
                            <input name="foto" type="file">
                          </div> 
                        </div>
                      </div>
                      </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputNome">Nome</label>
                            
                            <input type="text" class="form-control" name="txtNomeOng" id="inputNome" value="<?php echo $ong->getNomeOng(); ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputCNPJ">CNPJ</label>
                            <input type="text" class="form-control" id="CNPJ" name="txtCpnj" value="<?php echo $ong->getCnpjOng(); ?>">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="inputNome">Número</label>
                            <input type="text" class="form-control" id="inputNome" name="txtNumero" value="<?php echo $ong->getNumeroOng(); ?>">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputCNPJ">Bairro</label>
                            <input type="text" class="form-control" id="CNPJ" name="txtBairro" value="<?php echo $ong->getBairroOng(); ?>">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputCNPJ">Cidade</label>
                            <input type="text" class="form-control" id="CNPJ" name="txtCidade" value="<?php echo $ong->getCidadeOng(); ?>">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputCity">Telefone</label>
                            <input type="text" class="form-control" id="inputCity" name="txtTelefone" value="<?php echo $ong->getFoneOng(); ?>">
                          </div>
                          
                          <div class="form-group col-md-3">
                            <label for="inputZip">CEP </label>
                            <input type="text" class="form-control" id="inputZip" name="txtCep" value="<?php echo $ong->getCepOng(); ?>">
                          </div>

                          <div class="form-group col-md-3">
                            <label for="inputZip">Endereço </label>
                            <input type="text" class="form-control" id="inputZip" name="txtEndereco" value="<?php echo $ong->getLogradouroOng(); ?>">
                          </div>
                          
                        </div>
                        <div class="form-group">
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Descrição</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Digite aqui" name="txtDescricao"><?php echo $ong->getDescricaoOng();?></textarea>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-success">Atualizar</button>
                      </form>
                  </div>
                </div>
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
