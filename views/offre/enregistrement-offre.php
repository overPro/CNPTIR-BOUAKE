<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Epencia Pay | Offres - Enregistrement </title>
    
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
                
                <h1 class="page-title"> Enregistrement des offres </h1>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <section class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      <h4 class="card-title"> Enregistrement <center><?php echo $message; ?></center></h4>
                      <h6 class="card-subtitle mb-4"> Creation des offres </h6><!-- form -->

             <form action="http://localhost:81/carte/search/offre/enregistrement" method="POST" enctype="multipart/form-data">
             	<center>
                                    <div class="row">
                                    <div class="col-lg-12"> 
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                    <td>Entrer le code : </td>
                                    <td><input name="sai_rechercher" class="form-control" type="text"></td>
                                                    <td><button name="btn_rechercher" type="submit" class="btn btn-danger">Rechercher</button></td>
                                                </tr>
                                            </table>      
                                        </div>
                                    </div>
                                </div>

                                </center>
                                <br>
                      
                               <!-- .form-group -->
                        <div class="row">
                  <div class="col-12 col-lg-6">
                  <div class="form-group">
                    <fieldset>
                      <label>Code offre</label> 
              <input  name="sai_code" type="text" class="form-control" value="<?php echo $code; ?>"> 
                    </fieldset>
                  </div>
                </div>
               <div class="col-12 col-lg-6">
                  <div class="form-group">
                    
                     <label>Date creation</label> 
         <input  name="sai_date_creation" type="date"  class="form-control" value="<?php echo $date_creation; ?>">
                    
                  </div>
                  </div>
                  </div>
                               <!-- .form-group -->
                        <div class="row">
                  <div class="col-12 col-lg-6">
                  <div class="form-group">
                    <fieldset>
                      <label>Intitulé</label> 
              <input name="sai_intitule" type="text" class="form-control" value="<?php echo $intitule; ?>"> 
                    </fieldset>
                  </div>
                </div>
               <div class="col-12 col-lg-6">
                  <div class="form-group">
                    
                   <label>Date expiration</label> 
              <input  name="sai_date_expiration" type="date" class="form-control" value="<?php echo $date_expiration; ?>"> 
                    
                  </div>
                  </div>
                  </div>
                             <!-- .form-group -->

                             <!-- .form-group -->
                        <div class="row">
                  <div class="col-12 col-lg-6">
                  <div class="form-group">
                    <fieldset>
                      <label>Type offre</label>
                      <select name="sai_type" class="form-control">
                      	<option selected="" value="<?php echo $type; ?>"><?php echo $type; ?></option>
                      	<option value="Stage">Stage</option>
                      	<option value="Emploi">Emploi</option>
                      </select>

                    </fieldset>
                  </div>
                </div>
               <div class="col-12 col-lg-6">
                  <div class="form-group">
                    
                     <label>Contacts</label> 
              <input  name="sai_contacts" type="text" class="form-control" value="<?php echo $contacts; ?>"> 
                    
                  </div>
                  </div>

                  <div class="col-12 col-lg-6">
                  <div class="form-group">
                    <fieldset>
                      <label>Etat disponibilite</label> 
              <input  name="sai_etat_disponibilite" type="text" class="form-control" value="<?php echo $etat_disponibilite; ?>"> 
                      
                    </fieldset>
                  </div>
                </div>

<?php if(!empty($_SESSION['role']) and $_SESSION['role']=="Superviseur" or $_SESSION['role']=="Administrateur"){  ?>
                <div class="col-12 col-lg-6">
                  <div class="form-group">
                    <fieldset>
                      <label>Matricule</label> 
              <input  name="sai_matricule" type="text" class="form-control" value="<?php echo $matricule; ?>"> 
                    </fieldset>
                  </div>
         </div>
         <?php  } ?>
<?php if(!empty($_SESSION['role']) and $_SESSION['role']=="Distributeur"){  ?>
                <div class="col-12 col-lg-6">
                  <div class="form-group">
                    <fieldset>
                      <label>Matricule</label> 
              <input  name="sai_matricule" type="text" class="form-control" value="<?php echo $_SESSION['entreprise']; ?>"> 
                    </fieldset>
                  </div>
         </div>
         <?php  } ?>

                  </div>

                  <!-- .form-group -->
                        <div class="row">
                  <div class="col-12 col-lg-6">
                  <div class="form-group">
                    <fieldset>
                      <label>Etat offre</label>

                     <input name="sai_etat_offre" type="text" value="<?php echo $etat_offre; ?>"  class="form-control">
                      
                    </fieldset>
                  </div>
                </div>


               <div class="col-12 col-lg-6">
                  <div class="form-group">
                    
                     <label>Nombre place</label> 
              <input  name="sai_nombre_poste" type="text" class="form-control" value="<?php echo $nombre_poste; ?>"> 
                    
                  </div>
                  </div>

                  <div class="col-12 col-lg-6">
                  <div class="form-group">
                  <label>Profil</label>
                     <textarea name="sai_profil" cols="2" rows="12" class="form-control">
                     	<?php echo $profil; ?>
                     </textarea>   
                  </div>
                  </div>

                  <div class="col-12 col-lg-6">
                  <div class="form-group">
                    
                     <label>Missions</label>
                     <textarea name="sai_missions" cols="2" rows="12" class="form-control">
                     	<?php echo $missions; ?>
                     </textarea> 
               
                    
                  </div>
                  </div>

                  </div>
                  </div>
                        
                        


                  </div>
                  <center>
            <div class="tile-footer">
              <button class="btn btn-success" name="btn_ajouter"><i class="fa fa-fw fa-lg fa-check-circle"></i>Ajouter</button>
               <button class="btn btn-success" name="btn_modifier"><i class="fa fa-fw fa-lg fa-edit"></i>Modifier</button>
               <button class="btn btn-success" name="btn_supprimer"><i class="fa fa-fw fa-lg fa-eraser"></i>Supprimer</button>
            </div>
            </center>
           
                      </form><!-- /form -->
                    </div><!-- /.card-body -->
                  
                </div><!-- /.section-deck -->
             
               
                  
                  
          
                </div><!-- /.masonry-layout -->
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div><!-- /.page -->
        </div><!-- .app-footer -->
        
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
    <script src="http://localhost:81/carte/assets/vendor/masonry-layout/masonry.pkgd.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/nouislider/wNumb.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/nouislider/nouislider.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/blueimp-file-upload/js/vendor/jquery.ui.widget.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/blueimp-load-image/load-image.all.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/blueimp-canvas-to-blob/canvas-to-blob.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/blueimp-file-upload/js/jquery.iframe-transport.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/blueimp-file-upload/js/jquery.fileupload.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/blueimp-file-upload/js/jquery.fileupload-process.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/blueimp-file-upload/js/jquery.fileupload-image.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/blueimp-file-upload/js/jquery.fileupload-audio.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/blueimp-file-upload/js/jquery.fileupload-video.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/blueimp-file-upload/js/jquery.fileupload-validate.min.js"></script>
    <script src="http://localhost:81/carte/assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="http://localhost:81/carte/assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="http://localhost:81/carte/assets/javascript/pages/colorpicker-demo.js"></script>
    <script src="http://localhost:81/carte/assets/javascript/pages/uploader-demo.js"></script>
    <script src="http://localhost:81/carte/assets/javascript/pages/slider-demo.js"></script> <!-- END PAGE LEVEL JS -->
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