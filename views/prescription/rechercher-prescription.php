<!DOCTYPE html>
<html lang="en">
  
<head>
   
    <title> Epencia Pay | Entreprise - Liste </title>
    
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
                
                <h1 class="page-title"> Liste des entreprises</h1>
              </header><!-- /.page-title-bar -->

              <div class="page-section">
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <section class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
              
<form action="http://localhost:81/CNPTIR-BOUAKE/search/prescription/rechercher" method="POST" enctype="multipart/form-data">



<br>
                    <!-- .card -->
                    <section class="card card-fluid">
                      <!-- .card-header -->
                      <header class="card-header border-0">
                        <!-- .d-flex -->
                            <h1><?php echo $message; ?></h1>
                        <div class="d-flex align-items-center">
                          
                          <div class="card-header-control">
                            <!-- .dropdown -->
                            <div class="dropdown">
                              
                              <div class="dropdown-arrow"></div>
                              
                            </div><!-- /.dropdown -->
                          </div><!-- /.card-header-control -->
                        </div><!-- /.d-flex -->
                      </header><!-- /.card-header -->
                       
              <center>
                                    <div class="row">
                                    <div class="col-lg-12"> 
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                    <td>Entrer le numero Patient : </td>
                                    <td><input name="txt_rechercher" class="form-control" type="text"></td>
                                                    <td><button name="btn_rechercher" type="submit" class="btn btn-danger">Rechercher</button></td>
                                                </tr>
                                            </table>      
                                        </div>
                                    </div>
                                </div>
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table">
                         <thead>
                  <tr>

                                          
                                                <th>Nom et prenom</th>
                                                <th>groupe sanguin</th>       
                                                <th>voie</th>
                                                <th>fav</th>
                                                <th>aiguille</th>
                                                <th>duree</th>
                                                <th>frequence</th>
                                                <th>membrane_dialyse</th>
                                                <th>type_membrane</th>
                                                <th>surface</th>
                                                <th>debit_sanguin</th>
                                                <th>anticoagulation</th>
                                                <th>poids</th>
                                                <th>ultra</th>
                                                <th>dialysat</th>
                                                <th>debit_dialysat</th>
                                                <th>cd</th>
                                                <th>cb</th>
                                                <th>cp</th>
                                                <th>cc</th>
                                                <th>cg</th>
                                                <th>cm</th>
                                                <th>branchement</th>
                                                <th>transfusion</th>
                                                <th>fer_iv</th>
                                                <th>epo</th>
                                                <th>antihta</th>
                                                <th>autre_traitement</th>
                                                <th>date</th>
                                                <th class="operation">Opérations</th>
                  </tr>
                </thead>
                 <tbody>
                  <?php 
                         if(!empty($sol))

                                    {
                                    foreach ($sol as $key => $value) 
                                       
                                        { 

                                        ?>
                                             
                                             
                    <tr>

                    <td><?php echo $value['nom']." ". $value['prenom']; ?></td>
                    <td><?php echo $value['groupe_sanguin']; ?></td>
                    <td><?php echo $value['voie']; ?></td>
                    <td><?php echo $value['fav']; ?></td>
                    <td><?php echo $value['aiguille']; ?></td>
                    <td><?php echo $value['duree']; ?></td>
                    <td><?php echo $value['frequence']; ?></td>
                    <td><?php echo $value['membrane_dialyse']; ?></td>
                    <td><?php echo $value['type_membrane']; ?></td>
                    <td><?php echo $value['surface']; ?></td>
                    <td><?php echo $value['debit_sanguin']; ?></td>
                    <td><?php echo $value['anticoagulation']; ?></td>
                    <td><?php echo $value['poids']; ?></td>
                    <td><?php echo $value['ultra']; ?></td>
                    <td><?php echo $value['dialysat']; ?></td>
                    <td><?php echo $value['debit_dialysat']; ?></td>
                    <td><?php echo $value['cd']; ?></td>
                    <td><?php echo $value['cb']; ?></td>
                    <td><?php echo $value['cp']; ?></td>
                    <td><?php echo $value['cc']; ?></td>
                    <td><?php echo $value['cg']; ?></td>
                    <td><?php echo $value['cm']; ?></td>
                    <td><?php echo $value['branchement']; ?></td>
                    <td><?php echo $value['transfusion']; ?></td>
                    <td><?php echo $value['fer_iv']; ?></td>
                    <td><?php echo $value['epo']; ?></td>
                    <td><?php echo $value['antihta']; ?></td>
                    <td><?php echo $value['autre_traitement']; ?></td>
                    <td><?php echo $value['date']; ?></td>

                    <td class="operation"><a href="http://localhost:81/CNPTIR-BOUAKE/search/prescription/rechercher&id=<?php echo $value['numero_patient']; ?>" class="btn btn-outline-danger">Visualiser</a></td>

                    </tr>

                                    <?php } 
                                    } ?>
                </tbody>
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                      
                    </section><!-- /.card -->

  </form>
        
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