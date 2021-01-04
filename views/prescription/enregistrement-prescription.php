<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- Begin SEO tag -->
    <title> Epencia Pay | Enregistrement des entreprises </title>
    
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
                
                <h1 class="page-title"> Prescription de Dialyse </h1>
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
                     
                      

              <form action="http://localhost:81/CNPTIR-BOUAKE/search/prescription/enregistrement" method="POST" enctype="multipart/form-data">
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

                                </center>
                                <br>
                                <br>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                   <label>Nom</label> 
                  <input name="txt_nom" type="text" class="form-control" value="<?php //echo $code_entreprise; ?>">
                </div>
                

                <div class="form-group">
                 <label>Prenoms</label> 
                  <input name="txt_prenom" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>"> 
                </div>
                <div class="form-group">
                 <label>Groupe Sanguin</label> 
                  <input name="txt_groupe_sanguin" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>"> 
                </div>
            
                
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">1.Voie d'abord</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_voie" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">- FAV type de ponction</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_fav" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">Aiguille (diamètre)</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_aiguille" placeholder="15;16;18" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">2.Durée de la séance</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_duree" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">3.Fréquence</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_frequence" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">4.Membrane de dialyse</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_membrane_dialyse" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">Type de membrane</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_type_membrane" placeholder="Polysuflone low flux" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">Surface</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_surface" placeholder="Polysuflone low flux" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">5.Débit sanguin</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_debit_sanguin" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">6.Anticoagulation</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_anticoagulation" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">7.Poids sec</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_poids" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">8.Ultrafiltration maximal</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_ultra" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">9.Dialysat</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_dialysat" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">- Débit dialysat</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_debit_dialysat" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">- Conductivité dialysat</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_cd" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">- conductivité bicarbonate</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_cb" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">- composition Potassium</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_cp" placeholder="2 meq" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">- composition Calsium</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_cc" placeholder="1,50 g/l" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">- composition Glucose</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_cg" placeholder="1 g/l" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">- composition Magnésiumm</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_cm" placeholder="4,58 g/l" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">10.Branchement lignes AV </label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_branchement" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">11.Traitement perdialytique </label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_traitement_per" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">- Transfusions</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_transfusion" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">- Fer IV</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_fer_iv" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">- EPO</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_epo" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">- AntiHTA</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_antihta" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                 <label style="margin-top: 5%">- Autres traitement</label> 
                  
                </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                  <input name="txt_autre_traitement" type="text" class="form-control" value="<?php // echo $registre_commerce; ?>">
                  
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

<!-- Mirrored from uselooper.com/form-pickers.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 11:21:42 GMT -->
</html>