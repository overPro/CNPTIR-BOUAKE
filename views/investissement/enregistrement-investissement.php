<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Epencia Pay - Investissements enregistrement</title>

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
                
                <h1 class="page-title"> Saisie des investissements </h1>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <section class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      

            

        <form action="http://localhost:81/carte/search/investissement/enregistrement" method="POST" class="needs-validation" novalidate="" id="form">
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
               <form action="http://localhost:81/carte/search/investissement/enregistrement" method="POST" class="needs-validation" novalidate="" id="form">
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- form grid -->
                        <div class="col-md-3 mb-3">
                          <label>Numero du contrat</label> 
          <input type="text" class="form-control" name="sai_numero_contrat" value="<?php echo $numero_contrat;  ?>">
                        </div><!-- /form grid -->
                        <!-- form grid -->
                        <div class="col-md-3 mb-3">
                          <label>Matricule</label> 
           <input type="text" class="form-control"  name="sai_matricule" value="<?php echo $matricule;  ?>">
                        </div><!-- /form grid -->
                        <div class="col-md-3 mb-3">
                           <label>Capital</label> 
         <input type="text" id="ca" class="form-control" name="sai_capital" value="<?php echo $capital;  ?>">
                        </div>
                        <div class="col-md-3 mb-3">
                           <label>Taux mensuel</label> 
          <input type="text" id="tm" class="form-control"  name="sai_taux_mensuel" value="<?php echo $taux_mensuel;  ?>">
                        </div>
                        <!-- form grid -->
                        <div class="col-md-3 mb-3">
                          <label>Echeancier mensuel</label> 
          <input type="text" id="em" class="form-control" name="sai_echeancier_mensuel" value="<?php echo $echeancier_mensuel;  ?>">
                        </div><!-- /form grid -->
                        <div class="col-md-3 mb-3">
                          <label>Taux annuel</label> 
          <input type="text" id="ta" class="form-control" name="sai_taux_annuel" value="<?php echo $taux_annuel;  ?>">
                        </div><!-- /form grid -->
                        <div class="col-md-3 mb-3">
                          <label>Echeancier annuel</label> 
          <input type="text" id="ea" class="form-control" name="sai_echeancier_annuel" value="<?php echo $echeancier_annuel;  ?>">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label>Solde final</label> 
          <input type="text" class="form-control"  name="sai_solde_final" value="<?php echo $solde_final;  ?>">
                        </div>
                      </div><!-- /.form-row -->
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                          <label>Duree du contrat </label> <input type="text" class="form-control"   name="sai_duree_contrat" value="<?php echo $duree_contrat;  ?>">
                          
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                          <label>Frequence de paiement </label> 
                          <input type="text" id="fp" class="form-control"  name="sai_frequence_paiement" value="<?php echo $frequence_paiement;  ?>">
                          
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                          <label>Etat du capital</label>
                           <input type="text" class="form-control" name="sai_etat_capital" value="<?php echo $etat_capital;  ?>">
                          
                        </div><!-- /grid column -->
                        <div class="col-md-3 mb-3">
                          <label>Etat de l'investissement</label>
                          <input type="text" class="form-control"  name="sai_etat_investissement" value="<?php echo $etat_investissement;  ?>">
                          
                        </div>
                      </div><!-- /.form-row -->
                        <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                          <label>Date du 1er versement</label> 
          <input type="date" class="form-control" id="d1v" name="sai_date_versement1" value="<?php echo $date_versement1;  ?>">
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                          <label>Montant du 1er versement</label> 
          <input type="text" class="form-control" id="m1v" name="sai_montant_versement1" value="<?php echo $montant_versement1;  ?>">
                          
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                         <label>Etat du 1e versement</label> 
          <input  name="sai_etat_versement1" type="text" class="form-control" value="<?php echo $etat_versement1; ?>">
                          
                        </div><!-- /grid column -->
                        <div class="col-md-3 mb-3">
                          <label>Date du 2e versement</label> 
          <input type="date" class="form-control" id="d2v" name="sai_date_versement2" value="<?php echo $date_versement2;  ?>">
                        </div>
                      </div>
                      <div class="form-row">
                        <!-- grid column -->
                        <!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                          <label>Montant du 2e versement</label> 
          <input type="text" class="form-control" id="m2v" name="sai_montant_versement2" value="<?php echo $montant_versement2;  ?>">
                          
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                         <label>Etat du 2e versement</label> 
          <input  name="sai_etat_versement2" type="text" class="form-control" value="<?php echo $etat_versement2; ?>">
                          
                        </div><!-- /grid column -->
                        <div class="col-md-3 mb-3">
                          <label>Date du 3e versement</label> 
          <input type="date" class="form-control" id="d3v" name="sai_date_versement3" value="<?php echo $date_versement3;  ?>">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label>Montant du 3e versement</label> 
          <input type="text" class="form-control" id="m3v" name="sai_montant_versement3" value="<?php echo $montant_versement3;  ?>">
                        </div>
                      </div>

                      <div class="form-row">
                        <!-- grid column -->
                        <!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                         <label>Etat du 3e versement</label> 
          <input  name="sai_etat_versement3" type="text" class="form-control" value="<?php echo $etat_versement3; ?>">
                          
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                         <label>Date du 4e versement</label> 
          <input type="date" class="form-control" id="d4v" name="sai_date_versement4" value="<?php echo $date_versement4;  ?>">
                          
                        </div><!-- /grid column -->
                        <div class="col-md-3 mb-3">
                          <label>Montant du 4e versement</label> 
          <input type="text" class="form-control" id="m4v" name="sai_montant_versement4" value="<?php echo $montant_versement4;  ?>">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label>Etat du 4e versement</label> 
          <input  name="sai_etat_versement4" type="text" class="form-control" value="<?php echo $etat_versement4; ?>">
                        </div>
                      </div>

                      <div class="form-row">
                        <!-- grid column -->
                        <!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                          <label>Date du 5e versement</label> 
          <input type="date" class="form-control" id="d5v" name="sai_date_versement5" value="<?php echo $date_versement5;  ?>">
                          
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                         <label>Montant du 5e versement</label> 
          <input type="text" class="form-control" id="m5v" name="sai_montant_versement5" value="<?php echo $montant_versement5;  ?>">
                          
                        </div><!-- /grid column -->
                        <div class="col-md-3 mb-3">
                           <label>Etat du 5e versement</label> 
          <input  name="sai_etat_versement5" type="text" class="form-control" value="<?php echo $etat_versement5; ?>">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label>Date du 6e versement</label> 
          <input type="date" class="form-control" id="d6v" name="sai_date_versement6" value="<?php echo $date_versement6;  ?>">
                        </div>
                      </div>

                      <div class="form-row">
                        <!-- grid column -->
                        <!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                          <label>Montant du 6e versement</label> 
          <input type="text" class="form-control" id="m6v"  name="sai_montant_versement6" value="<?php echo $montant_versement6;  ?>">
                          
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                         <label>Etat du 6e versement</label> 
          <input  name="sai_etat_versement6" type="text" class="form-control" value="<?php echo $etat_versement6; ?>">
                          
                        </div><!-- /grid column -->
                        <div class="col-md-3 mb-3">
                          <label>Date du 7e versement</label> 
          <input type="date" class="form-control" id="d7v"  name="sai_date_versement7" value="<?php echo $date_versement7;  ?>">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label>Montant du 7e versement</label> 
          <input type="text" class="form-control" id="m7v"  name="sai_montant_versement7" value="<?php echo $montant_versement7;  ?>">
                        </div>
                      </div>

                      <div class="form-row">
                        <!-- grid column -->
                        <!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                         <label>Etat du 7e versement</label> 
          <input  name="sai_etat_versement7" type="text" class="form-control" value="<?php echo $etat_versement7; ?>">
                          
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                         <label>Date du 8e versement</label> 
          <input type="date" class="form-control" id="d8v"  name="sai_date_versement8" value="<?php echo $date_versement8;  ?>">
                          
                        </div><!-- /grid column -->
                        <div class="col-md-3 mb-3">
                          <label>Montant du 8e versement</label> 
          <input type="text" class="form-control" id="m8v"  name="sai_montant_versement8" value="<?php echo $montant_versement8;  ?>">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label>Etat du 8e versement</label> 
          <input type="text" class="form-control" name="sai_etat_versement8" value="<?php echo $etat_versement8;  ?>">
                        </div>

                      </div>

                      <div class="form-row">
                        <!-- grid column -->
                        <!-- /grid column -->
                        <!-- grid column -->

                        <div class="col-md-3 mb-3">
                         <label>Date du 9e versement</label> 
          <input type="date" class="form-control" id="d9v"  name="sai_date_versement9" value="<?php echo $date_versement9;  ?>">
        </div>
                        
                        <div class="col-md-3 mb-3">
                          <label>Montant du 9e versement</label> 
          <input type="text" class="form-control" id="m9v"  name="sai_montant_versement9" value="<?php echo $montant_versement9;  ?>">
                          
                        </div><!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                         <label>Etat du 9e versement</label> 
          <input  name="sai_etat_versement9" type="text" class="form-control" value="<?php echo $etat_versement9; ?>">
                          
                        </div><!-- /grid column -->
                        <div class="col-md-3 mb-3">
                          <label>Date du 10e versement</label> 
          <input type="date" class="form-control" id="d10v"  name="sai_date_versement10" value="<?php echo $date_versement10;  ?>">
                        </div>
            
                      </div>

                      <div class="form-row">
                  <div class="col-md-3 mb-3">
                          <label>Montant du 10e versement</label> 
          <input type="text" class="form-control" id="m10v"  name="sai_montant_versement10" value="<?php echo $montant_versement10;  ?>">
                          
                        </div>
                        <div class="col-md-3 mb-3">
                         <label>Etat du 10e versement</label> 
          <input  name="sai_etat_versement10" type="text" class="form-control" value="<?php echo $etat_versement10; ?>">
                          
                        </div><!-- /grid column -->
                        <div class="col-md-3 mb-3">
                          <label>Date du 11e versement</label> 
          <input type="date" class="form-control" id="d11v"  name="sai_date_versement11" value="<?php echo $date_versement11;  ?>">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label>Montant du 11e versement</label> 
          <input type="text" class="form-control" id="m11v"  name="sai_montant_versement11" value="<?php echo $montant_versement11;  ?>">
                        </div>
                      
                      </div>

                      <div class="form-row">
                         <div class="col-md-3 mb-3">
                          <label>Etat du 11e versement</label> 
          <input type="text" class="form-control"   name="sai_etat_versement11" value="<?php echo $etat_versement11;  ?>">
                          
                        </div>
                        <div class="col-md-3 mb-3">
                          <label>Date du 12e versement</label> 
          <input type="date" class="form-control" id="d12v"  name="sai_date_versement12" value="<?php echo $date_versement12;  ?>">
           </div>

          <div class="col-md-3 mb-3">
                          <label>Montant du 12e versement</label> 
          <input type="text" class="form-control" id="m12v"  name="sai_montant_versement12" value="<?php echo $montant_versement12;  ?>">
                        </div>

                        <div class="col-md-3 mb-3">
                         <label>Etat du 12e versement</label> 
          <input  name="sai_etat_versement12" type="text" class="form-control" value="<?php echo $etat_versement12; ?>">
                        </div><!-- /grid column -->
            
                        
                      </div>

                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <label>Gain entreprise</label> 
          <input type="text" class="form-control" name="sai_part_entreprise" value="<?php echo $part_entreprise;  ?>">
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
                    </form><!-- /form .needs-validation -->
                    </div><!-- /.card-body -->
                  
                </div><!-- /.section-deck -->

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
<script>
    $(function () {

        
        $("#ca, #tm").keyup(function () {
            em();
            mv();
        });

        $("#fp").keyup(function () {
            mv();
        });

        $("#d1v").change(function () {
            dv();
        });



        function em() {
            var capital = $('#ca').val(),
                    taux_mensuel = $("#tm").val(),
                    em, ta, ea;
            em = capital * taux_mensuel / 100;
            ta = taux_mensuel * 12;
            ea = em * 12;

            $("#em").val(em);
            $("#ta").val(ta);
            $("#ea").val(ea);
        }

        function mv() {
            var em = $('#em').val();
            for (var i = 1; i <= 12; i++) {
                $("#m" + i + "v").val(em);
            }
        }

        function dv() {
            var fp = $('#fp').val();
            //alert(fp);
            
            for (var i = 2; i <= 12; i++) {
                var pre = i - 1,
                        dp = $("#d" + pre + "v").val(),
                        
                        
                        date = addDaysDate(dp, fp),
                        jour = date.getDate(),
                        mois = date.getMonth() + 1,
                        annee = date.getFullYear();
                      
                
                if(mois < 10){
                    mois = "0"+mois;
                }

                var d = annee + "-" + mois + "-" + jour;
               $("#d" + i + "v").val(d);
            }
               
        }

        function addDaysDate(date, duree) {
            return new Date(new Date(date).getTime() + parseInt(duree) * 24 * 60 * 60 * 1000);
        }

    });
</script>


  </body>
</html>