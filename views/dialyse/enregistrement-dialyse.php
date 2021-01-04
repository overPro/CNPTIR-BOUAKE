<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- Begin SEO tag -->
    <title> CNPTIR | Dossier - Dialyse - enregistrement </title>
    
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
    </script>
    <!-- END THEME STYLES -->
    <style type="text/css">
      .th{
        border: 2px black solid;"
      }
      .td{
        border: 2px black solid;"
      }
    </style>
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
                
                <h1 class="page-title"> Saisie de dossier dialyse </h1>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <?php echo $message; ?>
              <div class="page-section">
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <section class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      

             <form action="http://localhost:81/CNPTIR-BOUAKE/search/dialyse/enregistrement" method="POST" enctype="multipart/form-data">
                <center>
                                    <div class="row">
                                    <div class="col-lg-12"> 
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                    <td>Entrer le numero patient : </td>
                                    <td><input type="text" name="txt_rechercher" class="form-control" ></td>
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
                  
                  

                  <br>
                
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label>Nom et Prenom</label> 
          <input  id="numero_carte" name="txt_nom_prenom" type="text" class="form-control" value="<?php  echo $nom_prenom; ?>">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Bain</label> 
          <input  id="numero_carte" name="txt_bain" type="text" class="form-control" value="<?php  echo $bain; ?>">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Grp.Rh</label> 
          <input  id="numero_carte" name="txt_grprh" type="text" class="form-control" value="<?php  echo $grp_rh; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Générateur</label> 
          <input  id="numero_carte" name="txt_generateur" type="text" class="form-control" value="<?php  echo $generateur; ?>">
                </div>
              </div><div class="col-md-6">
                <div class="form-group">
                  <label>Température</label> 
          <input  id="numero_carte" name="txt_temperature" type="text" class="form-control" value="<?php echo $temperature; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Dialyseur</label> 
          <input  id="numero_carte" name="txt_dialyseur" type="text" class="form-control" value="<?php  echo $dialyseur; ?>">
                </div>
              </div><div class="col-md-6">
                <div class="form-group">
                  <label>Conductivité</label> 
          <input  id="numero_carte" name="txt_conductivite" type="text" class="form-control" value="<?php  echo $conductivite; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Aiguille</label> 
          <input  id="numero_carte" name="txt_aiguille" type="text" class="form-control" value="<?php echo $aiguille; ?>">
                </div>
              </div><div class="col-md-6">
                <div class="form-group">
                  <label>Electro clamp</label> 
          <input  id="numero_carte" name="txt_electro_clamp" type="text" class="form-control" value="<?php echo $electro_champ; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Héparine</label> 
          <input  id="numero_carte" name="txt_heparine" type="text" class="form-control" value="<?php  echo $heparine; ?>">
                </div>
              </div><div class="col-md-6">
                <div class="form-group">
                  <label>Débit de Dialyse</label> 
          <input  id="numero_carte" name="txt_debit_de_dialyse" type="text" class="form-control" value="<?php echo $debit_de_dialyse; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Poids théorique</label> 
          <input  id="numero_carte" name="txt_poids_theorique" type="text" class="form-control" value="<?php  echo $poid_theorique; ?>">
                </div>
              </div><div class="col-md-6">
                <div class="form-group">
                  <label>Connexions lignes</label> 
          <input  id="numero_carte" name="txt_connexion" type="text" class="form-control" value="<?php echo $connexion_lignes; ?>">
                </div>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-lg-12 col-md-6">
                <h1>-------------------------------</h1>
              </div>
              </div> -->
            </div>

            <hr style="border: dashed;">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label><h6><u>BRANCHEMENT</u></h6></label> 
         
                </div>
              </div><div class="col-md-6">
                <div class="form-group">
                  <label><h6><u>DEBRANCHEMENT</u></h6></label> 
          
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Médecin</label> 
          <input  id="numero_carte" name="txt_medecin1" type="text" class="form-control" value="<?php  echo $medecin1; ?>">
                </div>
              </div><div class="col-md-6">
                <div class="form-group">
                  <label>Médecin</label> 
          <input  id="numero_carte" name="txt_medecin2" type="text" class="form-control" value="<?php echo $medecin2; ?>">
                </div>
              </div>
            </div> 
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Infirmier</label> 
          <input  id="numero_carte" name="txt_infirmier1" type="text" class="form-control" value="<?php  echo $infirmier1; ?>">
                </div>
              </div><div class="col-md-6">
                <div class="form-group">
                  <label>Infirmier</label> 
          <input  id="numero_carte" name="txt_infirmier2" type="text" class="form-control" value="<?php echo $infirmier2; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Aide-soignant</label> 
          <input  id="numero_carte" name="txt_aide_soignant1" type="text" class="form-control" value="<?php  echo $aide_soignant1; ?>">
                </div>
              </div><div class="col-md-6">
                <div class="form-group">
                  <label>Aide-soignant</label> 
          <input  id="numero_carte" name="txt_aide_soignant2" type="text" class="form-control" value="<?php  echo $aide_soignant2; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Heure</label> 
          <input  id="numero_carte" name="txt_heure1" type="text" class="form-control" value="<?php  echo $heure1; ?>">
                </div>
              </div><div class="col-md-6">
                <div class="form-group">
                  <label>Heure</label> 
          <input  id="numero_carte" name="txt_heure2" type="text" class="form-control" value="<?php echo $heure2; ?>">
                </div>
              </div>
            </div> 
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Poids (prise)</label> 
          <input  id="numero_carte" name="txt_poids_prise" type="text" class="form-control" value="<?php  echo $poids_prise1; ?>">
                </div>
              </div><div class="col-md-6">
                <div class="form-group">
                  <label>Poids (perte)</label> 
          <input  id="numero_carte" name="txt_poids_perte" type="text" class="form-control" value="<?php  echo $poids_perte; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>U.F (demandée)</label> 
          <input  id="numero_carte" name="txt_uf_demande" type="text" class="form-control" value="<?php  echo $uf_demandee; ?>">
                </div>
              </div><div class="col-md-6">
                <div class="form-group">
                  <label>U.F (obtenue)</label> 
          <input  id="numero_carte" name="txt_uf_obtenue" type="text" class="form-control" value="<?php  echo $uf_obtenue; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label>T.A</label> 
          <input  id="numero_carte" name="txt_ta1" type="text" class="form-control" value="<?php  echo $ta1; ?>">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Pouls</label> 
          <input  id="numero_carte" name="txt_pouls1" type="text" class="form-control" value="<?php  echo $pouls; ?>">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>T.A</label> 
          <input  id="numero_carte" name="txt_ta2" type="text" class="form-control" value="<?php  echo $ta2; ?>">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Pouls</label> 
          <input  id="numero_carte" name="txt_pouls2" type="text" class="form-control" value="<?php  echo $pouls2; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Température</label> 
          <input  id="numero_carte" name="txt_temperature1" type="text" class="form-control" value="<?php  echo $temperature1; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Température</label> 
          <input  id="numero_carte" name="txt_temperature2" type="text" class="form-control" value="<?php echo $temperature2; ?>">
                </div>
              </div>
            </div>
              <div class="col-lg-12">
              <table border="2" style="border: 2px black solid;" class="table table-responsive">
                <thead>
                  <tr>
                    <th>Heure</th>
                    <th>HEP</th>
                    <th>T.A</th>
                    <th>POMPE</th>
                    <th>P.V</th>
                    <th>UF DEM.</th>
                    <th>UF OBT.</th>
                    <th>OBSERVATION</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="text" value="<?php echo $heure_tab1;?>" class="form-control" name="txt_h1" style="width: 10em" ></td>
                    <td><input type="text" value="<?php echo $hep1; ?>" class="form-control" name="txt_hep1" style="width: 10em" ></td>
                    <td><input type="text" value="<?php echo $ta_tab1; ?>" class="form-control" name="txt_ta_1" style="width: 10em"></td>
                    <td><input type="text" value="<?php echo $pompe1; ?>" class="form-control" name="txt_pompe1" style="width: 10em"></td>
                    <td><input type="text" value="<?php echo $pv1; ?>" class="form-control" name="txt_pv1" style="width: 10em"></td>
                    <td><input value="<?php echo $uf_dem1; ?>" type="text" class="form-control" name="txt_uf_dem_1" style="width: 10em"></td>
                    <td><input type="text" value="<?php echo $uf_obt1; ?>" class="form-control" name="txt_uf_obt_1" style="width: 10em"></td>
                    <td><input type="text" value="<?php echo $observation1; ?>" class="form-control" name="txt_observation_1" style="width: 10em"></td>
                    
                  </tr>
                 <tr>
                                    <td><input type="text" value="<?php echo $heure_tab2; ?>" class="form-control" name="txt_h2" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $hep2; ?>" class="form-control" name="txt_hep2" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $ta_tab2; ?>" class="form-control" name="txt_ta_2" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $pompe2; ?>" class="form-control" name="txt_pompe2" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $pv2; ?>" class="form-control" name="txt_pv2" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $uf_dem2; ?>" class="form-control" name="txt_uf_dem_2" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $uf_obt2; ?>" class="form-control" name="txt_uf_obt_2" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $observation2; ?>" class="form-control" name="txt_observation_2" style="width: 10em"></td>
                                    
                                  </tr> <tr>
                                    <td><input type="text" value="<?php echo $heure_tab3; ?>" class="form-control" name="txt_h3" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $hep3; ?>" class="form-control" name="txt_hep3" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $ta_tab3; ?>" class="form-control" name="txt_ta_3" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $pompe3; ?>" class="form-control" name="txt_pompe3" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $pv3; ?>" class="form-control" name="txt_pv3" style="width: 10em"></td>
                                    <td><input type="text" class="form-control" name="txt_uf_dem_3" value="<?php echo $uf_dem3; ?>" style="width: 10em"></td>
                                    <td><input type="text" class="form-control" name="txt_uf_obt_3" value="<?php echo $uf_obt3;  ?>" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $observation3; ?>" class="form-control" name="txt_observation_3" style="width: 10em"></td>
                                    
                                  </tr><tr>
                                    <td><input type="text" value="<?php echo $heure_tab4; ?>" class="form-control" name="txt_h4" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $hep4; ?>" class="form-control" name="txt_hep4" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $ta_tab4; ?>" class="form-control" name="txt_ta_4" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $pompe4; ?>" class="form-control" name="txt_pompe4" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $pv4; ?>" class="form-control" name="txt_pv4" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $uf_dem4; ?>" class="form-control" name="txt_uf_dem_4" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $uf_obt4 ; ?>" class="form-control" name="txt_uf_obt_4" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $observation4; ?>" class="form-control" name="txt_observation_4" style="width: 10em"></td>
                                    
                                  </tr> <tr>
                                    <td><input type="text" value="<?php echo $heure_tab5; ?>" class="form-control" name="txt_h5" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $hep5; ?>" class="form-control" name="txt_hep5" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $ta_tab5; ?>" class="form-control" name="txt_ta_5" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $pompe5; ?>" class="form-control" name="txt_pompe5" style="width: 10em"></td>
                                    <td><input type="text" class="form-control" name="txt_pv5" value="<?php echo $pv5; ?>" style="width: 10em"></td>
                                    <td><input type="text" class="form-control" name="txt_uf_dem_5" value="<?php echo $uf_dem5; ?>" style="width: 10em"></td>
                                    <td><input type="text" class="form-control" name="txt_uf_obt_5" value="<?php echo $uf_obt5; ?>" style="width: 10em"></td>
                                    <td><input type="text" class="form-control" name="txt_observation_5" value="<?php echo $observation5; ?>" style="width: 10em"></td>
                                    
                                  </tr> <tr>
                                    <td><input type="text" value="<?php echo $heure_tab6; ?>" class="form-control" name="txt_h6" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $hep6; ?>" class="form-control" name="txt_hep6" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $ta_tab6; ?>" class="form-control" name="txt_ta_6" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $pompe6; ?>" class="form-control" name="txt_pompe6" style="width: 10em"></td>
                                    <td><input type="text" class="form-control" name="txt_pv6" value="<?php echo $pv6; ?>" style="width: 10em"></td>
                                    <td><input type="text" class="form-control" name="txt_uf_dem_6" value="<?php echo $uf_dem6; ?>" style="width: 10em"></td>
                                    <td><input type="text" class="form-control" name="txt_uf_obt_6" value="<?php echo $uf_obt6; ?>" style="width: 10em"></td>
                                    <td><input type="text" class="form-control" name="txt_observation_6" value="<?php echo $observation6; ?>" style="width: 10em"></td>
                                    
                                  </tr> <tr>
                                    <td><input type="text" value="<?php echo $heure_tab7; ?>" class="form-control" name="txt_h7" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $hep7; ?>" class="form-control" name="txt_hep7" style="width: 10em"></td>
                                    <td><input type="text"value="<?php echo $ta_tab7; ?>" class="form-control" name="txt_ta_7" style="width: 10em"></td>
                                    <td><input type="text" value="<?php echo $pompe7; ?>" class="form-control" name="txt_pompe7" style="width: 10em"></td>
                                    <td><input type="text" class="form-control" name="txt_pv7"  value="<?php echo $pv7; ?>" style="width: 10em"></td>
                                    <td><input type="text" class="form-control" name="txt_uf_dem_7" value="<?php echo $uf_dem7; ?>" style="width: 10em"></td>
                                    <td><input type="text" class="form-control" name="txt_uf_obt_7" value="<?php echo $uf_obt7; ?>" style="width: 10em"></td>
                                    <td><input type="text" class="form-control" name="txt_observation_7" value="<?php echo $observation7; ?>" style="width: 10em"></td>
                                    
                                  </tr>
                </tbody>
              </table>
              <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>PRESCRIPTION</label> 
          <textarea name="txt_prescription" maxlength="70" rows="4" class="form-control"><?php echo $prescription; ?>          
          </textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>OBSERVATION</label> 
          <textarea name="txt_observation" maxlength="70" rows="4" class="form-control"> <?php echo $observation_general; ?></textarea>
                </div>
              </div>
            </div>
              
            </div>
                </div>
              
            </div>
             

          </div>
          <center>
           <?php if($modif){ ?>
            <div class="row">
              <div class="col-md-3"></div>
            <div class="tile-footer col-md-5 " >
              <button class="btn btn-primary btn-lg btn-block" name="btn_ajouter"><i class="fa fa-fw fa-lg fa-check-circle"></i>Enregistrer</button>
             <?php } ?>

<!-- <button class="btn btn-success" name="btn_modifier" ><i class="fa fa-fw fa-lg fa-edit"></i>Modifier</button>
               <button class="btn btn-success" name="btn_supprimer" ><i class="fa fa-fw fa-lg fa-eraser"></i>Supprimer</button> -->



                
            </div>
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