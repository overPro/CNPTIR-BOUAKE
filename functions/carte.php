<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- Begin SEO tag -->
    <title> Epencia Pay | carte - Enregistrement </title>
    
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
                
                <h1 class="page-title"> Saisie des cartes </h1>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <section class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      

             <form action="http://localhost:81/carte/search/carte/enregistrement" method="POST" enctype="multipart/form-data">
                <center>
                                    <div class="row">
                                    <div class="col-lg-12"> 
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                    <td>Entrer le matricule : </td>
                                    <td><input name="sai_rechercher" class="form-control" type="text"></td>
                                                    <td><button name="btn_rechercher" type="submit" class="btn btn-danger">Rechercher</button></td>
                                                </tr>
                                            </table>      
                                        </div>
                                    </div>
                                </div>

                                </center>
                                <br>
                                
                                <!-- .section-block -->
                <div class="section-block">
                  
                  <!-- metric row -->
                  <div class="metric-row">
                    <!-- metric column -->
                    <div class="col-12 col-sm-3 col-lg-12" id="code_carte">
                      <!-- .metric -->
                      <div class="card-metric">
                        <div class="metric">
                          <p class="metric-value h3">
                            <sub><i class="oi oi-people"></i></sub> <span class="value"><?php echo $numero_carte_def; ?></span>
                          </p>
                          <h2 class="metric-label"> Numero de carte </h2>
                        </div>
                      </div><!-- /.metric -->
                    </div><!-- /metric column -->

                  </div><!-- /metric row -->
                  <!-- metric row -->

                  <br>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Numero de carte</label> 
          <input  id="numero_carte" name="sai_numero_carte" type="text" class="form-control" value="<?php echo $numero_carte; ?>">
                </div>

                <div class="form-group">
                 <label>CVV carte</label> 
          <input  name="sai_cvv_carte" type="text" class="form-control" value="<?php echo $cvv_carte; ?>"> 
                </div>

                <div class="form-group">
                 <label>Nom de carte</label> 
          <input  name="sai_nom_carte" type="text" class="form-control" value="<?php echo $nom_carte; ?>"> 
                </div>

                <div class="form-group">
                  <label>Type de carte</label> 
           <select name="sai_type_carte" class="form-control">
                    <option selected="" value="<?php echo $type_carte; ?>"><?php echo $type_carte; ?></option>
                    <option value="Particulier">Particulier</option>
                    <option value="Marchand">Marchand</option>
                  </select>
                </div>

                <div class="form-group">
                 <label>Solde du carte</label> 
          <input  name="sai_solde_carte" type="text" class="form-control" value="<?php echo $solde_carte; ?>"> 
                </div>

                <div class="form-group">
                 <label>Devise de carte</label> 
          <input  name="sai_devise_carte" type="text" class="form-control" value="<?php echo $devise_carte; ?>"> 
                </div>
            
                
                </div>
                
                <div class="col-md-6">
                <div class="form-group">
                  <label>Date de creation</label> 
          <input  name="sai_date_creation" type="date" class="form-control" value="<?php echo $date_creation; ?>">
                </div>

                <div class="form-group">
                 <label>Heure de creation</label> 
          <input  name="sai_heure_creation" type="time" class="form-control" value="<?php echo $heure_creation; ?>"> 
                </div>

                <div class="form-group">
                 <label>Date d'expiration</label> 
          <input  name="sai_date_expiration" type="date" class="form-control" value="<?php echo $date_expiration; ?>"> 
                </div>

                

  <div class="form-group">
                 <label>Pays de carte</label> 
          <input  name="sai_pays_carte" type="text" class="form-control" value="<?php echo $pays_carte; ?>"> 
                </div>

                <div class="form-group">
                  <label>Matricule</label> 
          <input  name="sai_matricule" type="text" class="form-control" value="<?php echo $matricule; ?>">
                </div>

<div class="form-group">
                  <label>Etat du carte</label> 
                  <select name="sai_etat_carte" class="form-control">
                    <option selected="" value="<?php echo $etat_carte; ?>"><?php echo $etat_carte; ?></option>
                    <option value="Actif">Actif</option>
                    <option value="Inactif">Inactif</option>
                  </select>
          
                </div>
             
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
    <script>
      $(function (){    
        

    $('#code_carte').click(function (){
        var val = $('#code_carte .value').html();
        $('#numero_carte').val(val);
    });


});
    </script>
  </body>


</html>