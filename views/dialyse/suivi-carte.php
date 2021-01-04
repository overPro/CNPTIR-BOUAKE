<!DOCTYPE html>
<html lang="en">

<head>
   
    <!-- Begin SEO tag -->
    <title> Epencia Pay |  Suivi des cartes </title>
    
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
                
                <h1 class="page-title"> Suivi du compte </h1>
              </header><!-- /.page-title-bar -->
              
 <div class="page-section">
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <section class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      

             <form action="http://localhost:81/carte/search/carte/suivi" method="POST" enctype="multipart/form-data">
                
           
                <div class="row">
                <?php if(!empty($_SESSION['role']) and $_SESSION['role']=="Superviseur" or $_SESSION['role']=="Administrateur" or $_SESSION['role'] == 'Distributeur'){  ?>
                <div class="form-group col-md-6">
                  <label>Matricule</label> 
          <input required="" name="sai_matricule" type="text" class="form-control"> 
                </div>
                <?php  } ?>

                <?php if(!empty($_SESSION['role']) and $_SESSION['role']=="Investisseur"){  ?>
                <div class="form-group col-md-6">
                  <label>Matricule</label> 
          <input readonly="" name="sai_matricule" type="text" class="form-control" value="<?php echo $_SESSION['matricule']; ?>"> 
                </div>
                <?php  } ?>
                <div class="form-group col-md-6">
                  <label>Operations</label> 
          <select required="" name="sai_objet" class="form-control">
            <option>--Choisir--</option>
            <option value="Investissement">Investissement</option>
            <option value="Rechargement">Rechargement</option>
            <option value="Transfert envoie">Transfert envoié</option>
            <option value="Transfert recu">Transfert recu</option>
            <option value="Virement">Virement</option>
            <option value="Retrait">Retrait espece</option>
          </select>
                </div>
                
                </div>

                <div class="row">
                
                <div class="form-group col-md-6">
                  <label>Date debut </label> 
          <input required="" name="sai_date_debut" type="date" class="form-control"> 
                </div>


                
                <div class="form-group col-md-6">
                  <label>Date fin </label> 
          <input required="" name="sai_date_fin" type="date" class="form-control">
            
                </div>
                
                </div>
                 <center>
            <div class="tile-footer">
              <button class="btn btn-success" name="btn_rechercher"><i class="fa fa-fw fa-lg fa-check-circle"></i>Afficher</button>    
            </div>
            </center>
<br>

                <br>
                <center><p style="color: green">STATISTIQUES DE LA RECHERCHE </p></center>
                <section class="card card-fluid">
                      

                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table">
                         <thead>
                  <tr>

                                            <th>Rechargements</th>
                                            <th>Bonus</th>
                                            <th>Investissements</th>
                                            <th>Virements</th>
                                            <th>Transferts - Envoié</th>
                                            <th>Transferts - Recu</th>
                                            <th>Retrait espèce</th>
                                            <th>Solde actuel</th>
                                            
                                         
                  </tr>
                </thead>
                <tbody>
            
                                            <tr>
                                                <td><?php if(!empty($result)){ echo $result[0]['somme']; } ?> </td>
                                                 <td><?php if(!empty($result)){ echo $result[0]['somme']; } ?> </td>
                                                <td><?php if(!empty($result)){ echo $result[0]['somme']; } ?> </td>
                                                <td><?php if(!empty($result)){ echo $result[0]['somme']; } ?> </td>
                                                <td><?php if(!empty($result)){ echo $result[0]['somme']; } ?> </td>
                                                <td><?php if(!empty($result)){ echo $result[0]['somme']; } ?></td>
                                                
                                                <td><?php if(!empty($result)){ echo $result[0]['somme']; } ?> </td>
                                                <td><?php if(!empty($result)){ echo $result[0]['solde_carte']; } ?></td>
                                               
                                                

                                            </tr>
                                  
                </tbody>
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                      
                    </section><!-- /.card --><br>
<center><p style="color: red">LISTE DES TRANSACTIONS</p></center>
            <section class="card card-fluid">
                      

                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table">
                         <thead>
                  <tr>

                                            <th>Numero</th>
                                            <th>Montant</th>
                                            <th>Expediteur</th>
                                            <th>Destinataire</th>
                                            <th>Date transaction</th>
                                            <th>Heure</th>
                                            <th>Type</th>
                                            <th>Etat</th>
                                         
                  </tr>
                </thead>
                <tbody>
                 <?php 
                                        if(!empty($sol)){
                                        foreach ($sol as $key => $value) { ?>


                                            <tr>
                                                <td><?php echo $value['numero_transaction']; ?></td>
                                                <td><?php echo $value['montant_transaction']; ?></td>
                                                <td><?php echo $value['numero_expediteur']; ?></td>
                                                <td><?php echo $value['numero_destinataire']; ?></td>
                                                <td><?php echo $value['date_transaction']; ?></td>
                                                <td><?php echo $value['heure_transaction']; ?></td>
                                                <td><?php echo $value['type_transaction']; ?></td>
                                                <td><?php echo $value['etat_transaction']; ?></td>
                                                

                                            </tr>
                                        <?php }} ?>
                </tbody>
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                      
                    </section><!-- /.card --><br>
          
                    <br>
                    
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