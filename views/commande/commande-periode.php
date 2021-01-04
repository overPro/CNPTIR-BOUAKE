<!DOCTYPE html>
<html lang="en">

<head>
   
    <!-- Begin SEO tag -->
    <title> Epencia Pay |  Commandes - Liste </title>
    
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
                
                <h1 class="page-title"> Liste des commandes </h1>
              </header><!-- /.page-title-bar -->
              
 <div class="page-section">
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <section class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      

             <form action="http://localhost:81/carte/search/commande/periode" method="POST" enctype="multipart/form-data">
                
           
                <div class="row">
             
               
                <div class="form-group col-md-6">
                  <label>Date debut</label> 
          <input name="sai_date_debut" type="date" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label>Date fin</label> 
          <input name="sai_date_fin" type="date" class="form-control">
                </div>
                </div>
                 <center>
            <div class="tile-footer">
              <button class="btn btn-success" name="btn_rechercher"><i class="fa fa-fw fa-lg fa-check-circle"></i>Afficher</button>    
            </div>
            </center>
<br>
<div class="row">
                
                <div class="form-group col-md-4">
                  <label>En cours</label> 
          <input readonly="" name="sai_total_investissement" type="text" class="form-control" value="<?php if(!empty($Encours)){ echo $Encours[0]['nbre']; } ?> ">
                </div>

                <div class="form-group col-md-4">
                  <label>Soldée</label> 
          <input readonly="" name="sai_nombre_choix" type="text" class="form-control" value="<?php if(!empty($Solde)){ echo $Solde[0]['nbre']; } ?> ">
                </div>

                <div class="form-group col-md-4">
                  <label>Validée</label> 
          <input readonly="" name="sai_total_perte" type="text" class="form-control" value="<?php if(!empty($Valide)){ echo $Valide[0]['nbre']; } ?> ">
                </div>
                </div>
                <br>

            <section class="card card-fluid">
                      

                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                              <table class="table">
                <thead>
                  <tr>
                                                <th>Numero</th>
                                                <th>Date commande</th>
                                                <th>Reference produit</th>
                                                <th>Prix</th>
                                                <th>Quantité</th>
                                                <th>Montant</th>
                                                <th>Epargne</th>
                                                <th>Matricule</th>
                                                <th>Etat</th>
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

                    <td><?php echo $value['numero_commande']; ?></td>
                    <td><?php echo $value['date_commande']; ?></td>
                    <td><?php echo $value['reference_produit']; ?></td>
                    <td><?php echo $value['prix_produit']; ?></td>
                    <td><?php echo $value['quantite_produit']; ?></td>
                     <td><?php echo $value['montant_commande']; ?></td>
                     <td><?php echo $value['epargne']; ?></td>
                      <td><?php echo $value['matricule']; ?></td>
                      <td><?php echo $value['etat_commande']; ?></td>

                    <td class="operation"><a href="http://localhost:81/carte/search/commande/enregistrement&numero_commande=<?php echo $value['numero_commande']; ?>" class="btn btn-outline-danger">Visualiser</a></td>

                    </tr>

                                    <?php } } ?>
                </tbody>
              </table>
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
</html>