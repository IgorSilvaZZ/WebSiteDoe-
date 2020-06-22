<?php include 'inicio.php' ?>;

<!-- inicializando a sessao -->
<?php session_start(); ?>
<?php
if(!isset($_SESSION["emailOng"])) { header("../CadastroOngs/index.php"); }

?>


<?php include 'menu.php'; ?>


<?php
    try {
      $loginOng = new LoginOng();
      $loginOng->setIdLoginOng($_SESSION["idLoginOng"]);
      $loginOng = $loginOng->listarLoginOng($loginOng);
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

            <div class="col-md-8">
                <div class="card">
                  <div class="card-header">
                    <h5 class="title">Editar dados de usuário</h5>
                  </div>
                  <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="../Usuario/editar-usuario.php"> 
                        <div class="form-group">
                          <label for="exampleInputEmail1">Endereço Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="..." name="email" value="<?php echo $loginOng->getEmailOng();?>">
                          
                        </div>
                        <div class="form-group">
                          <label for="exampleInputSenha">Senha</label>
                          <input type="password" class="form-control" id="exampleInputSenha" placeholder="..." name="senha" value="<?php echo $loginOng->getSenhaOng();?>">
                          
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