<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- Begin SEO tag -->
    <title> Epencia Pay | Profil Entreprise </title>
    
    <!-- FAVICONS -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost:81/epencia.net/assets/epencia.jpg">
    <link rel="shortcut icon" href="http://localhost:81/epencia.net/assets/epencia.jpg">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="http://localhost:81/epencia.net/assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:81/epencia.net/assets/vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="http://localhost:81/epencia.net/assets/vendor/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="http://localhost:81/epencia.net/assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="http://localhost:81/epencia.net/assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="http://localhost:81/epencia.net/assets/vendor/nouislider/nouislider.min.css"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="http://localhost:81/epencia.net/assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="http://localhost:81/epencia.net/assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="http://localhost:81/epencia.net/assets/stylesheets/custom.css"><!-- Disable unused skin immediately -->
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
                
                <h1 class="page-title"> Profil Entreprise </h1>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <section class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      <?php echo $message; ?><br>
                      

              <form action="http://localhost:81/epencia.net/search/entreprise/profil" method="POST" enctype="multipart/form-data">
              
                                <br>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                   <label>Code entreprise</label> 
                  <input readonly="" name="sai_code_entreprise" type="text" class="form-control" value="<?php echo $code_entreprise; ?>">
                </div>
                

                <div class="form-group">
                 <label>Registre de commerce</label> 
                  <input readonly="" name="sai_registre_commerce" type="text" class="form-control" value="<?php echo $registre_commerce; ?>"> 
                </div>
            
                
                </div>
                
                <div class="col-md-6">
                
                <div class="form-group">
                  <label>Compte contribuable</label> 
          <input readonly="" name="sai_compte_contribuable" type="text" class="form-control"  value="<?php echo $compte_contribuable; ?>">
                </div>

                <div class="form-group">
                  <label>Raison sociale</label> 
                <input readonly="" name="sai_raison_sociale" type="text" class="form-control" value="<?php echo $raison_sociale; ?>">
                </div>
             
                </div>

                <div class="col-md-6">
                
                <div class="form-group">
                  <label>Telephone entreprise</label> 
                  <input readonly="" name="sai_telephone_entreprise" type="text" class="form-control" value="<?php echo $telephone_entreprise; ?>">
                </div>

                <div class="form-group">
                  <label>Email de l'entreprise</label> 
                  <input readonly="" name="sai_email_entreprise" type="email_entreprise" class="form-control" value="<?php echo $email_entreprise; ?>">
                </div>

                <div class="form-group">
                  <label>Siège social</label> 
                  <input readonly="" name="sai_siege_social" type="text" class="form-control" value="<?php echo $siege_social; ?>">
                </div>
             
                </div>

                <div class="col-md-6">
                
                <div class="form-group">
                  <label>Siège social</label> 
                  <input readonly="" name="sai_siege_social" type="text" class="form-control" value="<?php echo $siege_social; ?>">
                </div>

                <div class="form-group">
                  <label>Date de creation</label> 
          <input readonly="" name="sai_date_creation" type="date" class="form-control" value="<?php echo $date_creation; ?>">
                </div>

                 <div class="form-group">
                  <label>Date d'enregistrement</label> 
          <input readonly="" name="sai_date_enregistrement" type="date" class="form-control" value="<?php echo $date_enregistrement; ?>">
                </div>
             
                </div>





            </div>
                </div>
              
            </div>
            
               
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
    <script src="http://localhost:81/epencia.net/assets/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/bootstrap/js/popper.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="http://localhost:81/epencia.net/assets/vendor/pace/pace.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/stacked-menu/stacked-menu.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/masonry-layout/masonry.pkgd.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/nouislider/wNumb.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/nouislider/nouislider.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/blueimp-file-upload/js/vendor/jquery.ui.widget.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/blueimp-load-image/load-image.all.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/blueimp-canvas-to-blob/canvas-to-blob.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/blueimp-file-upload/js/jquery.iframe-transport.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/blueimp-file-upload/js/jquery.fileupload.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/blueimp-file-upload/js/jquery.fileupload-process.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/blueimp-file-upload/js/jquery.fileupload-image.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/blueimp-file-upload/js/jquery.fileupload-audio.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/blueimp-file-upload/js/jquery.fileupload-video.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/blueimp-file-upload/js/jquery.fileupload-validate.min.js"></script>
    <script src="http://localhost:81/epencia.net/assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="http://localhost:81/epencia.net/assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="http://localhost:81/epencia.net/assets/javascript/pages/colorpicker-demo.js"></script>
    <script src="http://localhost:81/epencia.net/assets/javascript/pages/uploader-demo.js"></script>
    <script src="http://localhost:81/epencia.net/assets/javascript/pages/slider-demo.js"></script> <!-- END PAGE LEVEL JS -->
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