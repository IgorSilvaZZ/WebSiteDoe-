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
                    <h4 class="card-title">Now UI Dashboard PRO</h3>
                      <p class="card-category">Are you looking for more components? Please check our Premium Version of Now UI Dashboard PRO.</p>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive table-upgrade">
                      <table class="table">
                        <thead>
                          <th></th>
                          <th class="text-center">Free</th>
                          <th class="text-center">PRO</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Components</td>
                            <td class="text-center">16</td>
                            <td class="text-center">160</td>
                          </tr>
                          <tr>
                            <td>Plugins</td>
                            <td class="text-center">4</td>
                            <td class="text-center">13</td>
                          </tr>
                          <tr>
                            <td>Example Pages</td>
                            <td class="text-center">7</td>
                            <td class="text-center">27</td>
                          </tr>
                          <tr>
                            <td>Login, Register, Pricing, Lock Pages</td>
                            <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                            <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                          </tr>
                          <tr>
                            <td>DataTables, VectorMap, SweetAlert, Wizard, jQueryValidation, FullCalendar etc...</td>
                            <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                            <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                          </tr>
                          <tr>
                            <td>Mini Sidebar</td>
                            <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                            <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                          </tr>
                          <tr>
                            <td>Premium Support</td>
                            <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                            <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td class="text-center">Free</td>
                            <td class="text-center">Just $49</td>
                          </tr>
                          <tr>
                            <td class="text-center"></td>
                            <td class="text-center">
                              <a href="#" class="btn btn-round btn-default disabled">Current Version</a>
                            </td>
                            <td class="text-center">
                              <a target="_blank" href="https://www.creative-tim.com/product/now-ui-dashboard-pro?ref=nud-free-upgrade-live" class="btn btn-round btn-primary">Upgrade to PRO</a>
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

  <?php include 'fim.php'; ?>