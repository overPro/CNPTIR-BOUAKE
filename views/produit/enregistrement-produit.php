<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- Begin SEO tag -->
    <title> Epencia Pay | Produits - Enregistrement </title>
    
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
     <script>
      function Calcul()
{
    pa = document.forms['form'].elements['pa'].value;
    pv = document.forms['form'].elements['pv'].value;
    
     q=(pv-pa);
         document.forms['form'].elements['q'].value = q;
    
}
    </script>
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
                
                <h1 class="page-title"> Saisie des produits </h1>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <section class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                <?php echo $message; ?>      

             <form enctype="multipart/form-data" action="http://localhost:81/carte/search/produit/enregistrement" method="POST" id="form">
<center>
                                <div class="row">
                                    <div class="col-lg-12"> 
                                        <div class="form-group">

                                        <img src="http://localhost:81/carte/upload/produits/<?php echo $photo1_produit; ?>" width="150" height="150">

                                        <img src="http://localhost:81/carte/upload/produits/<?php echo $photo2_produit; ?>" width="150" height="150">

                                        <img src="http://localhost:81/carte/upload/produits/<?php echo $photo3_produit; ?>" width="150" height="150">

                                        <img src="http://localhost:81/carte/upload/produits/<?php echo $photo4_produit; ?>" width="150" height="150">

                                        

                                        <br /><br />

                                        
                                            <table>
                                                <tr>
                                    <td>Entrer la reference : </td>
                                    <td><input name="sai_rechercher" class="form-control" type="text"></td>
                                                    <td><button name="btn_rechercher" type="submit" class="btn btn-danger">Rechercher</button></td>
                                                </tr>
                                            </table>      
                                        </div>
                                    </div>
                                </div>

                                        <br /><br>
                                   
                    </center>

                    <center>
                      <p>Saisir ce code dans le champs reference  : <?php echo $ref; ?></p>
                    </center>
</form>

<form enctype="multipart/form-data" action="http://localhost:81/carte/search/produit/enregistrement" method="POST" id="form">
                <div class="row">
                <div class="col-md-6">

                <div class="form-group">
                 <label>Reference</label>
      <input required="" type="text" class="form-control" name="sai_reference_produit" value="<?php echo $reference_produit; ?>">
                </div>

                <div class="form-group">
                  <label>Libelle du produit</label>
      <input required="" type="text" class="form-control" name="sai_libelle_produit" value="<?php echo $libelle_produit; ?>">
                </div>

                <div class="form-group">
                  <label>Categorie du produit</label>
     <select required="" name="sai_categorie_produit" class="form-control">

        <option  selected value="<?php echo $categorie_produit ;?>"><?php echo $categorie_produit ;?></option>
                                                      
            <option value="Electromenagers">Electromenagers</option>
            <option value="Electroniques">Electroniques</option>
            <option value="Formations">Formations</option>
            <option value="Informatiques">Informatiques</option>
            <option value="Telephones">Telephones</option>
            <option value="Autos et motos">Autos et motos</option>
            <option value="Modes">Modes</option>
                  </select>
                </div>

                  <div class="form-group" id="etat">
                 <label>
        Etat du produit
      </label>
      <select required="" name="sai_etat_produit" class="form-control">

        <option  selected value="<?php echo $etat_produit ;?>"><?php echo $etat_produit ;?></option>
                                                      
            <option value="Disponible">Disponible</option>
            <option value="Indisponible">Indisponible</option>
            
                  </select>
                </div>

                <div class="form-group" id="image1">
                 <label>Image 1 du produit</label> 
                 <input required="" type="file" class="form-control" name="sai_photo1_produit" value="<?php echo $photo1_produit; ?>">
                </div>

                <div class="form-group" id="image3">
                 <label>Image 3 du produit</label> 
                 <input required="" type="file" class="form-control" name="sai_photo3_produit" value="<?php echo $photo3_produit; ?>">
                </div>

             </div>

                <div class="col-md-6">
                <div class="form-group">
                  <label>Prix d'achat</label>
      <input required="" onkeyup="Calcul();" id="pa" type="text" class="form-control" name="sai_prix_achat" value="<?php echo $prix_achat; ?>">
                </div>

              <div class="form-group">
                  <label>Prix de vente</label>
      <input required="" onkeyup="Calcul();" id="pv" type="text" class="form-control" name="sai_prix_vente" value="<?php echo $prix_vente; ?>">
                </div>

                <div class="form-group">
                  <label>Quota</label>
      <input readonly="" id="q" type="text" class="form-control" name="sai_quota" value="<?php echo $quota; ?>">
                </div>

                <?php if(!empty($_SESSION['role']) and $_SESSION['role']=="Superviseur" or $_SESSION['role']=="Administrateur" or $_SESSION['role']=="Distributeur") {  ?>
 <div class="form-group">
                  <label>Code du distributeur</label>
      <input required="" type="text" class="form-control" name="sai_code_fournisseur" value="<?php echo $code_fournisseur;?>">
                </div>

                <?php } ?>

                <?php if(!empty($_SESSION['role']) and $_SESSION['role']=="Investisseur") {  ?>
 <div class="form-group">
                  <label>Code du distributeur</label>
      <input readonly="" type="text" class="form-control" name="sai_code_fournisseur" value="<?php echo $_SESSION['matricule'];?>">
                </div>
                
                <?php } ?>
  
                

                <div class="form-group" id="image2">
                 <label>Image 2 du produit</label> 
                 <input required="" type="file" class="form-control" name="sai_photo2_produit"  value="<?php echo $photo2_produit; ?>">
                </div>

                <div class="form-group" id="image4">
                 <label>Image 4 du produit</label> 
                 <input required="" type="file" class="form-control" name="sai_photo4_produit" value="<?php echo $photo4_produit; ?>">
                </div>

                </div>

            </div>
                </div>

                <div class="col-md-12">
              <div class="form-group">
  <label>Caracteristiques</label>
  <textarea required="" maxlength="1000" rows="10" class="form-control" name="sai_details_produit"><?php echo $details_produit; ?> </textarea>
  <small class="text-secondary">Maximum de 1000 caractères.</small>
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