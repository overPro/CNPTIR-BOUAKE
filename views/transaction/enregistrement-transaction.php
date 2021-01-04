<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- Begin SEO tag -->
    <title> Epencia Pay | Transaction - Enregistrement </title>
    
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
                
                <h1 class="page-title"> Details des transactions </h1>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section"><?php echo $message; ?>
                <!-- .section-deck -->
                <div class="section-deck">
                  
                  <!-- .card -->
                  <section class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      

             <form action="http://localhost:81/carte/search/transaction/enregistrement" method="POST" enctype="multipart/form-data">
                <center>
                                    <div class="row" id="rechercher">
                                    <div class="col-lg-12"> 
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                    <td>Entrer le numero : </td>
                                    <td><input name="sai_rechercher" class="form-control" type="text"></td>
                                                    <td><button name="btn_rechercher" type="submit" class="btn btn-danger">Rechercher</button></td>
                                                </tr>
                                            </table>      
                                        </div>
                                    </div>
                                </div>

                                </center>
                                <br>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group" id="numero_transaction">
                  <label>Numero transaction</label> 
          <input name="sai_numero_transaction" type="text" class="form-control" value="<?php echo $numero_transaction; ?>">
                </div>

                <div class="form-group" id="date_transaction">
                 <label>Date transaction</label> 
          <input name="sai_date_transaction" type="date" class="form-control" value="<?php echo $date_transaction; ?>"> 
                </div>

                <div class="form-group" id="heure_transaction">
                  <label>Heure transaction</label> 
          <input name="sai_heure_transaction" type="time" class="form-control" value="<?php echo $heure_transaction; ?>">
                </div>

                <div class="form-group">
                  <label>Montant</label> 
          <input name="sai_montant_transaction" type="text" class="form-control" value="<?php echo $montant_transaction; ?>"> 
                </div>

                <div class="form-group" id="frais">
                  <label>Frais</label> 
          <input name="sai_frais" type="text" class="form-control" value="<?php echo $frais; ?>"> 
                </div>

                <div class="form-group" id="montant_total">
                  <label>Montant total</label> 
          <input name="sai_montant_total" type="text" class="form-control" value="<?php echo $montant_total; ?>"> 
                </div>

                <div class="form-group" id="part_entreprise">
                  <label>Part entreprise</label> 
          <input name="sai_part_entreprise" type="text" class="form-control" value="<?php echo $part_entreprise; ?>"> 
                </div>
                <div class="form-group" id="part_partenaire">
                  <label>Part partenaire</label> 
          <input name="sai_part_partenaire" type="text" class="form-control" value="<?php echo $part_partenaire; ?>"> 
                </div>
                <div class="form-group" id="part_autre">
                  <label>Part autres</label> 
          <input name="sai_part_autre" type="text" class="form-control" value="<?php echo $part_autre; ?>"> 
                </div>

                
             
                
                </div>
                
                <div class="col-md-6">
                <div class="form-group" id="numero_expediteur">
                  <label>Numero expediteur</label> 
          <input name="sai_numero_expediteur" type="text" class="form-control" value="<?php echo $numero_expediteur; ?>">
                </div>
                <div class="form-group">
                  <label>Numero destinataire</label> 
          <input name="sai_numero_destinataire" type="text" class="form-control" value="<?php echo $numero_destinataire; ?>"> 
                </div>

                <div class="form-group" id="token_expediteur">
                  <label>Token expediteur</label> 
          <input name="sai_token_expediteur" type="text" class="form-control" value="<?php echo $token_expediteur; ?>">
                </div>
                <div class="form-group" id="token_destinataire">
                  <label>Token destinataire</label> 
          <input name="sai_token_destinataire" type="text" class="form-control" value="<?php echo $token_destinataire; ?>"> 
                </div>

                <div class="form-group" id="conf_token_expediteur">
                  <label>Confirmation token expediteur</label> 
          <input name="sai_conf_token_expediteur" type="text" class="form-control" value="<?php echo $conf_token_expediteur; ?>">
                </div>
                <div class="form-group" id="conf_token_destinataire">
                  <label>Confirmation token destinataire</label> 
          <input name="sai_conf_token_destinataire" type="text" class="form-control" value="<?php echo $conf_token_destinataire; ?>"> 
                </div>

                <div class="form-group" id="type_transaction">
                  <label>Type transaction</label> 
          <input name="sai_type_transaction" type="text" class="form-control" value="<?php echo $type_transaction; ?>">
                </div>
                <div class="form-group" id="objet_transaction">
                  <label>Objet transaction</label> 
          <input name="sai_objet_transaction" type="text" class="form-control" value="<?php echo $objet_transaction; ?>">
                </div>
                <div class="form-group" id="etat_transaction">
                  <label>Etat transaction</label> 
          <input name="sai_etat_transaction" type="text" class="form-control" value="<?php echo $etat_transaction; ?>">
                </div>
                

                
                
                </div>

            </div>
                </div>
              
            </div>
             <center>
            <div class="tile-footer">
              <button id="ajouter" class="btn btn-success" name="btn_ajouter"><i class="fa fa-fw fa-lg fa-check-circle"></i>Ajouter</button>
               <button id="modifier" class="btn btn-success" name="btn_modifier"><i class="fa fa-fw fa-lg fa-edit"></i>Modifier</button>
               <button id="supprimer" class="btn btn-success" name="btn_supprimer"><i class="fa fa-fw fa-lg fa-eraser"></i>Supprimer</button>
               <button id="demander" class="btn btn-success" name="btn_demander"><i class="fa fa-fw fa-lg fa-eraser"></i>Demander</button>
               <button id="traiter" class="btn btn-success" name="btn_traiter"><i class="fa fa-fw fa-lg fa-eraser"></i>Traiter</button>
            </div>
            </center>

          </div>
        </div>
        </form>
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

<!-- Mirrored from uselooper.com/form-pickers.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 11:21:42 GMT -->
</html>