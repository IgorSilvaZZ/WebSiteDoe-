<?php include 'inicio.php'; ?>

<!-- inicializando a sessao -->
<?php session_start(); ?>
<?php
if(!isset($_SESSION["emailOng"])) { header("../CadastroOngs/index.php"); }

?>

  <?php include 'menu.php'; ?>

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">

            <div class="col-md-8 ml-auto mr-auto">
                <div class="card card-upgrade">
                  <div class="card-header text-center">
                    <h4 class="card-title">Título</h3>
                      <p class="card-category">Subtítulo</p>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive table-upgrade">
                      <table class="table">
                        <thead>
                          <th class="text-center">Preencher</th>
                          <th class="text-center">Preencher</th>
                          <th class="text-center">Preencher</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">...</td>
                            <td class="text-center">...</td>
                            <td class="text-center">...</td>
                          </tr>
                          <tr>
                            <td class="text-center"></td>
                            <td class="text-center">
                              <a href="#" class="btn btn-round btn-danger">Cancelar</a>
                            </td>
                            <td class="text-center">
                              <a target="_blank" href="" class="btn btn-round btn-success">Enviar</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
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
            </script>,  <a href="https://www.invisionapp.com" target="_blank">Winner&copy; </a>.
          </div>
        </div>
      </footer>
    </div>
  </div>

  <?php include 'fim'; ?>