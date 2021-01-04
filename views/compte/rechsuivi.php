<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Epencia Pay |  Comptabilité des credits </title>
    
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
                
                <center><h1 class="page-title"> Voir suivi d'un Patient </h1></center>
              </header><!-- /.page-title-bar -->
              
 <div class="page-section">
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <section class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      

             <form action="http://localhost:81/CNPTIR-BOUAKE/search/suivi/rechercherImprimer" method="POST" enctype="multipart/form-data">
                
            <div class="row">
                
                <div class="form-group col-md-4"></div>
                <div class="form-group col-md-4">
                  <div class="form-group">
                  <label>Jours</label> 
          <select name="txt_jour" class="form-control">
                    <option selected="" value="<?php //echo $jour; ?>"><?php //echo $jour; ?></option>
                    <option value="LUNDI-JEUDI">LUNDI-JEUDI</option>
                    <option value="MARDI-VENDREDI">MARDI-VENDREDI</option>
                    <option value="MERCREDI-SAMEDI">MERCREDI-SAMEDI</option>
                  </select>
                </div>           
                </div>
                <div class="form-group col-md-4">                  
                </div>
                </div>
               

                 <center>
            <div class="tile-footer">
              <button class="btn btn-success" name="btn_rechercher"><i class="fa fa-fw fa-lg fa-check-circle"></i>Afficher</button>
                
            </div>
            </center>

<br> 
            <section class="card card-fluid">
                      

                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table">
                         <thead>
                  <tr>

                                            <th>Nom et Prenom</th>
                                            <th>Groupe sanguin</th>
                                            <th>jour</th>
                                            <th>JourI</th>
                                            <th>JourII</th>
                                            <th>JourIII</th>
                                            <th>JourIV</th>
                                            <th>JourV</th>
                                            <th>JourVI</th>
                                            <th>JourVII</th>
                                            <th>JourVIII</th>
                                            <th>JourIX</th>
                                            <th>Option</th>
                                            
                  </tr>
                </thead>
                <tbody>
                 <?php 
                                        if(!empty($mois)){
                                        foreach ($mois as $key => $value) { ?>


                                            <tr>
                                         <td><?php echo $value['nom_prenom']; ?></td>
                                                
                                                <td><?php echo $value['groupe_sanguin']; ?></td>
                                                <td><?php echo $value['jour']; ?></td>
                                                <td><?php echo $value['j1']; ?></td>
                                                <td><?php echo $value['j2']; ?></td>
                                                <td><?php echo $value['j3']; ?></td>
                                                <td><?php echo $value['j4']; ?></td>
                                                <td><?php echo $value['j5']; ?></td>
                                                <td><?php echo $value['j6']; ?></td>
                                                <td><?php echo $value['j7']; ?></td>
                                                <td><?php echo $value['j8']; ?></td>
                                                <td><?php echo $value['j9']; ?></td>
                                                <td><?php echo $value['nom_prenom']; ?></td><td>  <button class="btn btn-success" name="btn_rechercher"><i class="fa fa-fw fa-lg fa-check-circle"></i>Afficher</button></td>
                                            </tr>
                                        <?php }} ?>
                </tbody>
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                      
                    </section><!-- /.card -->
                </div>

            </div>
                </div>
              
            </div>
            

          </div>
        </div>
        </form>
                    </div><!-- /.card-body -->
                  
                </div><!-- /.section-deck -->
                    <!-- .card -->
                    

 
        
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

<!-- Mirrored from uselooper.com/form-pickers.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 11:21:42 GMT -->
</html>