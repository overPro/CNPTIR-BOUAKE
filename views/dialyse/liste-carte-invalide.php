<!DOCTYPE html>
<html lang="en">
  
<head>
   
    <title> Epencia Pay | Carte - Liste </title>
    
    <!-- FAVICONS -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost:81/carte/assets/epencia.jpg">
    <link rel="shortcut icon" href="http://localhost:81/carte/assets/epencia.jpg">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/nouislider/nouislider.min.css"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="http://localhost:81/carte/assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="http://localhost:81/carte/assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="http://localhost:81/carte/assets/stylesheets/custom.css"><!-- Disable unused skin immediately -->
    <script> var skin = localStorage.getItem('skin') || 'default';
    var unusedLink = document.querySelector('link[data-skin]:not([data-skin="'+ skin +'"])');

    unusedLink.setAttribute('rel', '');
    unusedLink.setAttribute('disabled', true);
    </script><!-- END THEME STYLES -->
  </head>
  <body>
    <!-- .app -->
    <div class="app">
      <?php include "config/dashboard.php"; ?>
      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                
                <h1 class="page-title"> Liste des cartes</h1>
              </header><!-- /.page-title-bar -->
              

                    <!-- .card -->
                    <section class="card card-fluid">
                      <!-- .card-header -->
                      <header class="card-header border-0">
                        <!-- .d-flex -->
                        <div class="d-flex align-items-center">
                          
                          <div class="card-header-control">
                            <!-- .dropdown -->
                            <div class="dropdown">
                              
                              <div class="dropdown-arrow"></div>
                              
                            </div><!-- /.dropdown -->
                          </div><!-- /.card-header-control -->
                        </div><!-- /.d-flex -->
                      </header><!-- /.card-header -->
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table">
                         <thead>
                  <tr>

                                           <th>Numero</th>
                                            <th>Type carte</th>
                                            <th>Solde carte</th>
                                            <th>Date creation</th>
                                            <th>Etat</th>
                                            <th>Matricule</th>
                                            <th><center>Opérations</center></th>
                  </tr>
                </thead>
                <tbody>
                 <?php 
                                        if(isset($sol)){
                                        foreach ($sol as $key => $value) { ?>


                                            <tr>
                                         <td><?php echo $value['numero_carte']; ?></td>
                                                <td><?php echo $value['type_carte']; ?></td>
                                                <td><?php echo $value['solde_carte']; ?></td>
                                                <td><?php echo $value['date_creation']; ?></td>
                                                <td><?php echo $value['etat_carte']; ?></td>
                                                <td><?php echo $value['matricule']; ?></td>
                                                
                                                <td><center>
                                                  <a href="http://localhost:81/carte/search/carte/validation&numero_carte=<?php echo $value['numero_carte']; ?>"  class="btn btn-success" name="btn_modifier"><i class="fa fa-fw fa-lg fa-check-circle"></i>Attribuer</a>
                                                </center></td>


                                            </tr>
                                        <?php }} ?>
                </tbody>
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                      
                    </section><!-- /.card -->

 
        
        <!-- /.wrapper -->
      </main><!-- /.app-main -->
    </div><!-- /.app -->
    <!-- BEGIN BASE JS -->
  <script src="http://localhost:81/carte/assets/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/bootstrap/js/popper.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="http://localhost:81/carte/assets/vendor/pace/pace.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/stacked-menu/stacked-menu.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/datatables/extensions/buttons/dataTables.buttons.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/datatables/extensions/buttons/buttons.bootstrap4.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/datatables/extensions/buttons/buttons.html5.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/datatables/extensions/buttons/buttons.print.min.js"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="http://localhost:81/carte/assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="http://localhost:81/carte/assets/javascript/pages/dataTables.bootstrap.js"></script>
    <script src="http://localhost:81/carte/assets/javascript/pages/datatables-demo.js"></script> <!-- END PAGE LEVEL JS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-116692175-1');
    </script>
  </body>

</html>