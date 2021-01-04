<!DOCTYPE html>
<html lang="fr">

<head>
    
    <!-- Begin SEO tag -->
    <title> Epencia Pay | Profil investisseur</title>
    
    
    <!-- FAVICONS -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost:81/carte/assets/epencia.jpg">
    <link rel="shortcut icon" href="http://localhost:81/carte/assets/epencia.jpg">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="http://localhost:81/carte/assets/vendor/flatpickr/flatpickr.min.css"><!-- END PLUGINS STYLES -->
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
       

                  <section class="card card-fluid" style="margin-top: 10Px">
                    <!-- .card-header -->
                      <!-- .nav-tabs -->
                     
                 
                       <!-- grid column -->
                  <div class="col-lg-12">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <h6 class="card-header"> Profil utilisateur <center><?php echo $message; ?></center></h6><!-- .card-body -->
                      <div class="card-body">
                        <form method="POST" action="http://localhost:81/carte/search/utilisateur/profil" enctype="multipart/form-data">
                        <!-- .media -->
                        <div class="media mb-3">
                          <!-- avatar -->
                          <?php if (empty($photo)){ ?>
                            <div class="user-avatar user-avatar-xl fileinput-button">
                            <div class="fileinput-button-label"> Photo de profil </div><img src="http://localhost:81/carte/upload/photo/avatar.jpg" alt=""> 
                          </div>
                         <?php } else {?>                          

                          <div class="user-avatar user-avatar-xl fileinput-button">
                            <div class="fileinput-button-label"> Photo de profil </div><img src="http://localhost:81/carte/upload/photo/<?php echo $_SESSION['photo']; ?>" alt=""> <input id="fileupload-avatar" type="file" name="sai_photo">
                          </div><!-- /avatar -->
                          <?php } ?><!-- .media-body -->
                          <div class="media-body pl-3">
                            <h3 class="card-title"> Photo de profil </h3>
                            <h6 class="card-subtitle text-muted"> Cliquez ici pour changer votre photo de profil. </h6>
                            <p class="card-text">
                              <small>JPG, GIF or PNG 400x400, &lt; 2 MB.</small>
                            </p><!-- The avatar upload progress bar -->
                            <div id="progress-avatar" class="progress progress-xs fade">
                              <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><!-- /avatar upload progress bar -->
                          </div><!-- /.media-body -->
                        </div><!-- /.media -->
                      
                          <!-- form row -->
                          <!-- .form-row -->
                      <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-6 mb-3">
                          <div class="form-group">
                          <label for="tf4"><b>Noms et Prénoms</b></label>
                          <div class="has-clearable">
                             <input name="sai_nom_prenom" type="text" class="form-control" value="<?php echo $login; ?>">
                          </div>
                        </div>
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-6 mb-3">
                          <div class="form-group">
                          <label for="tf4"><b>Telephone</b></label>
                          <div class="has-clearable">
                             <input name="sai_telephone" type="text" class="form-control" value="<?php  echo $telephone; ?>">
                          </div>
                        </div>
                        </div><!-- /grid column -->
                      </div><!-- /.form-row -->
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-6 mb-3">
                          <div class="form-group">
                          <label for="tf4"><b>Mot de passe</b></label>
                          <div class="has-clearable">
                          <div class="has-clearable">
                             <input name="sai_mdp" type="text" class="form-control" value="<?php echo $passe; ?>">
                          </div>
                        </div>
                      </div>
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-6 mb-3">
                          <div class="form-group">
                          <label for="tf4"><b>Role</b></label>
                          <div class="has-clearable">
                             <input readonly="" name="sai_role" type="text" class="form-control" value="<?php echo $role; ?>">
                          </div>
                        </div>
                        </div><!-- /grid column -->
                      </div><!-- /.form-row -->
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-6 mb-3">
                          <div class="form-group">
                          <label for="tf4"><b>Etat</b></label>
                          <div class="has-clearable">
                             <input name="sai_etat" type="text" class="form-control" readonly="" value="<?php //echo $etat; ?>">
                          </div>
                        </div>
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-6 mb-3">
                          <div class="form-group">
                          <label for="tf4"><b>Email</b></label>
                          <div class="has-clearable">
                             <input name="sai_email" type="email" class="form-control" value="<?php //echo $email; ?>">
                          </div>
                        </div>
                        </div><!-- /grid column -->
                      </div><!-- /.form-row -->
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-6 mb-3">
                          <div class="form-group">
                          <label for="tf4"><b>Nom utilisateur</b></label>
                          <div class="has-clearable">
                             <input name="sai_login" type="text" class="form-control" value="<?php //echo $login; ?>"> 
                          </div>
                        </div>
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-6 mb-3">
                          <div class="form-group">
                          <label for="tf4"><b>Date de creation</b></label>
                          <div class="has-clearable">
                             <input readonly="" name="sai_date_creation" type="date" class="form-control" value="<?php //echo $date_creation; ?>">
                          </div>
                        </div>
                        </div><!-- /grid column -->
                      </div><!-- /.form-row -->
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-6 mb-3">
                          <div class="form-group">
                          <label for="tf4"><b>Fonction</b></label>
                          <div class="has-clearable">
                             <input name="sai_fonction" type="text" class="form-control" value="<?php //echo $fonction; ?>"> 
                          </div>
                        </div>
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-6 mb-3">
                          <div class="form-group">
                          <label for="tf4"><b>Entreprise</b></label>
                          <div class="has-clearable">
                             <input readonly="" name="sai_entreprise" type="text" class="form-control" value="<?php //echo $entreprise; ?>">
                          </div>
                        </div>
                        </div><!-- /grid column -->
                      </div><!-- /.form-row -->
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-6 mb-3">
                          <div class="form-group">
                          <label for="tf4"><b>Activite</b></label>
                          <div class="has-clearable">
                             <input name="sai_matricule" type="text" class="form-control" value="<?php //echo $activite; ?>"> 
                          </div>
                        </div>
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                          <div class="form-group">
                          <label for="tf4"><b>Matricule</b></label>
                          <div class="has-clearable">
                             <input readonly="" name="sai_matricule" type="text" class="form-control" value="<?php //echo $_SESSION['matricule']; ?>"> 
                          </div>
                        </div>
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                          <div class="form-group">
                          <label for="tf4"><b>Id</b></label>
                          <div class="has-clearable">
                             <input readonly="" name="sai_id" type="text" class="form-control" value="<?php //echo $id; ?>">
                          </div>
                        </div>
                        </div><!-- /grid column -->
                      </div><!-- /.form-row -->
                          <hr>
                          <!-- .form-actions -->
                          <div class="form-actions">
                            <button name="btn_modifier" class="btn btn-primary ml-auto">Modifier votre profil</button>
                          </div><!-- /.form-actions -->
                        </form><!-- /form -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                    <!-- .card -->
                  </section><!-- /.card -->


      

      <!-- /.app-footer -->
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
    <script src="http://localhost:81/carte/assets/javascript/pages/datatables-filters-demo.js"></script> <!-- END PAGE LEVEL JS -->
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