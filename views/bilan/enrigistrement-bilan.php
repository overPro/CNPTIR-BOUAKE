<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- Begin SEO tag -->
    <title> CNPTIR | compte - Enregistrement </title>
    
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
                
                <h1 class="page-title"> Saisie d'un Bilan </h1>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <h1><?php echo $message; ?></h1>
              <div class="page-section">
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <section class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      

             <form action="http://localhost:81/CNPTIR-BOUAKE/search/bilan/enregistrement" method="POST" enctype="multipart/form-data">
                <center>
                                    <div class="row">
                                    <div class="col-lg-12"> 
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                    <td>Entrer le numero patient : </td>
                                    <td><input name="txt_rechercher" class="form-control" type="text"></td>
                                                    <td><button name="btn_rechercher" type="submit" class="btn btn-danger">Rechercher</button></td>
                                                </tr>
                                            </table>      
                                        </div>
                                    </div>
                                </div>

                                </center>
                                <br>
                <div class="row">
                <div class="col-md-4">
                <div class="form-group">
                  <label>Groupe Sanguin</label> 
          <input  name="txt_groupe_sanguin" type="text" class="form-control" value="<?php echo $groupe_sanguin; ?>">
                </div></div>

                <div class="col-md-4">
                
                <div class="form-group">
                  <label>Nom Patient</label> 
                  <input  name="txt_nom" type="text" class="form-control" value="<?php echo $numero_patient; ?>">
          
                </div>

             
                </div>
                
                <div class="col-md-4">
                <div class="form-group">
                  <label>Jours</label> 
          <select name="txt_jour" class="form-control">
                    <option selected="" value="<?php echo $groupe; ?>"><?php echo $groupe; ?></option>
                    <option value="LUNDI-JEUDI">LUNDI-JEUDI</option>
                    <option value="MARDI-VENDREDI">MARDI-VENDREDI</option>
                    <option value="MERCREDI-SAMEDI">MERCREDI-SAMEDI</option>
                  </select>
                </div>
                

               
             
                </div>

            </div>
            <center >
            <div class="row">
              <div class="col-md-1">
                <label>Cr</label>
                <input  name="txt_cr" type="text" class="form-control" value="<?php echo $cr; ?>">
              </div><div class="col-md-1">
                <label>U</label>
                <input  name="txt_u" type="text" class="form-control" value="<?php echo $u; ?>">
              </div><div class="col-md-1">
                <label>Na</label>
                <input  name="txt_na" type="text" class="form-control" value="<?php echo $na; ?>">
              </div>
<div class="col-md-1">
  <div class="form-group">
                  <label>K</label> 
          <input  name="txt_k" type="text" class="form-control" value="<?php echo $k; ?>">
                </div>
</div><div class="col-md-1">
  <div class="form-group">
                  <label>Ca</label> 
          <input  name="txt_ca" type="text" class="form-control" value="<?php echo $ca; ?>">
                </div>
</div><div class="col-md-1">
  <div class="form-group">
                  <label>Ph</label> 
          <input  name="txt_ph" type="text" class="form-control" value="<?php echo $ph; ?>">
                </div>
</div><div class="col-md-1">
  <div class="form-group">
                  <label>Gb</label> 
          <input  name="txt_gb" type="text" class="form-control" value="<?php echo $gb; ?>">
                </div>
</div><div class="col-md-1">
  <div class="form-group">
                  <label>Plaq</label> 
          <input  name="txt_plaq" type="text" class="form-control" value="<?php echo $plaq; ?>">
                </div>
</div><div class="col-md-1">
  <div class="form-group">
                  <label>Hb</label> 
          <input  name="txt_hb" type="text" class="form-control" value="<?php echo $hb; ?>">
                </div>
</div><div class="col-md-1">
  <div class="form-group">
                  <label>VGM</label> 
          <input  name="txt_vgm" type="text" class="form-control" value="<?php echo $vgm; ?>">
                </div>
</div>    <div class="col-md-1">
  <div class="form-group">
                  <label>CCMH</label> 
          <input  name="txt_ccmh" type="text" class="form-control" value="<?php echo $ccmh; ?>">
                </div>
</div>    <div class="col-md-1">
  <div class="form-group">
                  <label>Crp</label> 
          <input  name="txt_crp" type="text" class="form-control" value="<?php echo $crp; ?>">
                </div>
</div>              
            </div>
            <div class="row">
              <div class="col-md-5"></div>
              <div class="col-md-1">
                <div class="form-group">
                  <label>PT</label> 
          <input  name="txt_pt" type="text" class="form-control" value="<?php echo $pt; ?>">
                </div>
              </div>
            </div>
            </center>
                </div>
              
            </div>
             <center>
            <div class="tile-footer">
              <button class="btn btn-primary" name="btn_ajouter"><i class="fa fa-fw fa-lg fa-check-circle"></i>Ajouter</button>
               <button class="btn btn-success" disabled name="btn_modifier"><i class="fa fa-fw fa-lg fa-edit"></i>Modifier</button>
               <button class="btn btn-danger" disabled name="btn_supprimer"><i class="fa fa-fw fa-lg fa-eraser"></i>Supprimer</button>
            </div>
            </center>

          </div>
        </div>
        </form>
                    </div><!-- /.card-body -->
                  
                </div><!-- /.section-deck -->
                <hr class="my-5">
               
                  
                  
          
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