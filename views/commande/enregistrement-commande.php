<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Enregistrement des commandes des clients.">
   
    <title>Epencia Pay | Commande - enregistrement</title>

     <script>
      function Calcul()
{
    v = document.forms['form'].elements['valeur'].value;
    n = document.forms['form'].elements['nombre'].value;
    //m = document.forms['form'].elements['montant'].value;
    if(n != '')
    {
         m=v*n;
         document.forms['form'].elements['montant'].value = m;
    }
    else
    {
        document.forms['form'].elements['montant'].value = '';
    }
    
}
    </script>
    
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
    
    <?php include "config/dashboard.php"; ?>

     <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <div class="page-section"><center><?php echo $message; ?></center>
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                
                <h1 class="page-title"> Saisie des commandes </h1>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <section class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      

            

        <form action="http://localhost:81/carte/search/commande/enregistrement" method="POST" class="needs-validation" novalidate="" id="form">
           <center>
                                    <div class="row">
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
                        </form>
                                <br>
               <form action="http://localhost:81/carte/search/commande/enregistrement" method="POST" class="needs-validation" novalidate="" id="form">
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- form grid -->
                        <div class="col-md-4 mb-3">
                          <label>Numero de commande</label> 
          <input  name="sai_numero_commande" type="text" class="form-control" value="<?php echo $numero_commande; ?>">
                        </div><!-- /form grid -->
                        <!-- form grid -->
                        <div class="col-md-4 mb-3">
                          <label>Reference du produit</label> 
           <input name="sai_reference_produit" class="form-control" value="<?php echo $reference_produit; ?>">
                        </div><!-- /form grid -->
                        <div class="col-md-4 mb-3">
                           <label>Date de commande</label> 
          <input  name="sai_date_commande" type="datetime-local" class="form-control" value="<?php echo $date_commande; ?>">
                        </div>
                        <!-- form grid -->
                        <div class="col-md-4 mb-3">
                          <label>Prix du produit</label> 
          <input onkeyup="Calcul();" id="valeur" name="sai_prix_produit" type="text" class="form-control" value="<?php echo $prix_produit; ?>">
                        </div><!-- /form grid -->
                        <div class="col-md-4 mb-3">
                          <label>Quantite</label> 
          <input id="nombre" onkeyup="Calcul();" name="sai_quantite_produit" type="text" class="form-control" value="<?php echo $quantite_produit; ?>">
                        </div><!-- /form grid -->
                        <div class="col-md-4 mb-3">
                          <label>Montant</label> 
          <input id="montant" onkeyup="Calcul();" name="sai_montant_commande" type="text" class="form-control" value="<?php echo $montant_commande; ?>">
                        </div>
                      </div><!-- /.form-row -->
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-4 mb-3">
                          <label>Frais de livraison </label> <input type="text" onkeyup="Calcul();" class="form-control" required="" id="frais" name="sai_valeur_part" >
                          
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-4 mb-3">
                          <label>Adresse de livraison </label> <input type="text" class="form-control" required="" onkeyup="Calcul();" name="sai_adresse_livraison">
                          
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-4 mb-3">
                          <label>Total</label> <input type="text" class="form-control" required="" id="total" name="sai_montant_total">
                          
                        </div><!-- /grid column -->
                      </div><!-- /.form-row -->
                        <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-4 mb-3">
                          <label>Epargne</label> 
          <input  name="sai_epargne" type="text" class="form-control" value="<?php echo $epargne; ?>">
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-4 mb-3">
                          <label>Matricule</label> 
          <input  name="sai_matricule" type="text" class="form-control" value="<?php echo $matricule; ?>">
                          
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-4 mb-3">
                         <label>Etat de commande</label> 
          <input  name="sai_etat_commande" type="text" class="form-control" value="<?php echo $etat_commande; ?>">
                          
                        </div><!-- /grid column -->
                      </div><!-- /.form-row -->
                     
                      <center>
            <div class="tile-footer">
              <button class="btn btn-success" name="btn_ajouter"><i class="fa fa-fw fa-lg fa-check-circle"></i>Ajouter</button>
               <button class="btn btn-success" name="btn_modifier"><i class="fa fa-fw fa-lg fa-edit"></i>Modifier</button>
               <button class="btn btn-success" name="btn_supprimer"><i class="fa fa-fw fa-lg fa-eraser"></i>Supprimer</button>
            </div>
            </center>
                    </form><!-- /form .needs-validation -->
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