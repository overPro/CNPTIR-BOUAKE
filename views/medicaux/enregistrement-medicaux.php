<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- Begin SEO tag -->
    <title> Epencia Pay | Credit - Enregistrement </title>
    
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
                
                <h1 class="page-title"> Saisie de dossier malade </h1>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              
              <div class="page-section">
              	<?php echo $message; ?>
                <!-- .section-deck -->
                <div class="section-deck">
                  <!-- .card -->
                  <section class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                      

             <form action="http://localhost:81/CNPTIR-BOUAKE/search/medicaux/enregistrement" method="POST" enctype="multipart/form-data">
                <center>
                                    <div class="row">
                                    <div class="col-md-3"> 
                                        <div class="form-group">
                                          <label>Numero </label> 
          <input name="txt_numero" type="text" class="form-control" value="<?php // echo $code_credit; ?>">        
                                        </div>
                                    </div><div class="col-md-3"> 
                                        <div class="form-group">
                                          <label>Date</label> 
          <input name="txt_date" type="date" class="form-control" value="<?php // echo $code_credit; ?>">        
                                        </div>
                                    </div>
                                    <div class="col-md-3"> 
                                        <div class="form-group">
                                          <label>Jour de dialyse</label> 
          <input name="txt_jour_de_dialyse" type="text" class="form-control" value="<?php // echo $code_credit; ?>">        
                                        </div>
                                    </div><div class="col-md-3"> 
                                        <div class="form-group">
                                          <label>Groupe sanguin</label> 
          <input name="txt_groupe_sanguin" type="text" class="form-control" value="<?php // echo $code_credit; ?>">        
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <label>I. <u><b>Données épidémiologiques</b></u></label>
                                  </div>
                                </div>
                               <div class="row">
                                    <div class="col-md-3"> 
                                        <div class="form-group">
                                          <label>Nom </label> 
          <input name="txt_nom" type="text" class="form-control" value="<?php // echo $code_credit; ?>">        
                                        </div>
                                    </div><div class="col-md-3"> 
                                        <div class="form-group">
                                          <label>Prenom</label> 
          <input name="txt_prenom" type="text" class="form-control" value="<?php // echo $code_credit; ?>">        
                                        </div>
                                    </div>
                                    <div class="col-md-3"> 
                                        <div class="form-group">
                                          <label>Nom d'emprunt</label> 
          <input name="txt_nom_emprunt" type="text" class="form-control" value="<?php // echo $code_credit; ?>">        
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3"> 
                                        <div class="form-group">
                                          <label>Date de Naissance </label> 
          <input name="txt_date_de_naisssance" type="date" class="form-control" value="<?php // echo $code_credit; ?>">        
                                        </div>
                                    </div><div class="col-md-3"> 
                                        <div class="form-group">
                                          <label>Age</label> 
          <input name="txt_age" type="text" class="form-control" value="<?php // echo $code_credit; ?>">        
                                        </div>
                                    </div>
                                    <div class="col-md-3"> 
                                        <div class="form-group">
                                          <label>Tranche d'age</label> 
                  <select name="txt_tranche_age" class="form-control">
                    <option value="">====Chisi====</option>
                    <option value="0-14 ans">0-14 ans</option>
                    <option value="15-39 ans">14-39 ans</option>
                    <option value="40-59 ans">40-59 ans</option>
                    <option value=">=60 ans"> >= 60 ans</option>
                  </select>
                                        </div>
                                    </div><div class="col-md-3"> 
                                        <div class="form-group">
                                          <label>Sexe</label> 
          <select name="txt_sexe" class="form-control">
            <option value="">====Choisi====</option>
            <option value="féminin">féminin</option>
            <option value="masculin">masculin</option>
          </select>       
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                  <div class="col-md-3"> 
                                        <div class="form-group">
                                          <label>Groupe ethnique </label> 
                  <select name="txt_groupe_ethnique" class="form-control">
            <option value="">====Choisi====</option>
            <option value="malinké">malinké</option>
            <option value="mande">mande</option>
            <option value="kwa">kwa</option>
            <option value="gurs">gurs</option>
          </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3"> 
                                        <div class="form-group">
                                          <label>Niveau d'étude </label> 
                  <select name="txt_niveau_etude" class="form-control">
            <option value="">====Choisi====</option>
            <option value="illetré">illetré</option>
            <option value="primaire">primaire</option>
            <option value="secondaire">secondaire</option>
            <option value="superieur">superieur</option>
          </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2"> 
                                        <div class="form-group">
                                          <label>Situation Matrimoniale </label> 
                  <select name="txt_situation_matrimoniale" class="form-control">
            <option value="">====Choisi====</option>
            <option value="célibataire">célibataire</option>
            <option value="marié">marié</option>
            <option value="veuf">veuf</option>
            <option value="divorcé">divorcé</option>
            <option value="vit en union libre">vit en union libre</option>
          </select>
                                        </div>
                                    </div>
                                    <div class="col-md-1"> 
                                        <div class="form-group">
                                          <label>Résidence </label> 
                  <select name="txt_residence" class="form-control">
            <option value=""></option>
            <option value="bouake">Bouaké</option>
            
          </select>
                                        </div>
                                    </div>
                                    <div class="col-md-1"> 
                                        <div class="form-group">
                                          <label>quartier</label> 
                  <input type="text" name="txt_quartier" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-1"> 
                                        <div class="form-group">
                                          <label>hors/bouaké</label> 
                  <input type="text" name="txt_hors_bouake" class="form-control">
                                        </div>
                                    </div> 
                                    <div class="col-md-1"> 
                                        <div class="form-group">
                                          <label>Préciser </label> 
                  <input type="text" name="txt_preciser" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <label>II. <u><b>Histoire de la MRC</b></u></label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3">
                                    <label>Néphropathie causale:</label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-1">
                                    <input type="text" placeholder="HTA" class="form-control" name="txt_hta">
                                  </div>
                                  <div class="col-md-1">
                                    <input type="text" placeholder="VIH" class="form-control" name="txt_vih">
                                  </div>
                                  <div class="col-md-1">
                                    <input type="text" placeholder="Diabète" class="form-control" name="txt_diabete">
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" placeholder="HTA et Diabte" class="form-control" name="txt_hta_de_diabete">
                                  </div>
                                  <div class="col-md-1">
                                    <input type="text" placeholder="GNC" class="form-control" name="txt_gnc">
                                  </div>
                                  <div class="col-md-1">
                                    <input type="text" placeholder="NTIC" class="form-control" name="txt_ntic">
                                  </div>
                                 
                                </div> <br>
                                <div class="row">
                                   <div class="col-md-1">
                                    <input type="text" placeholder="PKAD" class="form-control" name="txt_pkad">
                                  </div>
                                  <div class="col-md-2">
                                    <input type="text" placeholder="Drépanocytose" class="form-control" name="txt_drepanocytose">
                                  </div>
                                  <div class="col-4">
                                    <input type="text" placeholder="Indéterminée" class="form-control" name="txt_indetermine">
                                  </div>
                                  <div class="col-4">
                                    <input type="text" placeholder="Autre causes" class="form-control" name="txt_autre_causes">
                                  </div>
                                </div><br>
                                <div class="row">
                                  <div class="col-md-3">
                                    <label>Co-morbidités:</label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3">
                                    <input type="text" placeholder="Insuffisance cardiaque congestive" class="form-control" name="txt_Insuffisance_cardiaque_congestive">
                                  </div>
                                  <div class="col-md-2">
                                    <input type="text" placeholder="Diabète" class="form-control" name="txt_diabete1">
                                  </div>
                                  <div class="col-md-1">
                                    <input type="text" placeholder="Alcool" class="form-control" name="txt_alcool">
                                  </div>
                                  <div class="col-md-1">
                                    <input type="text" placeholder="tabac" class="form-control" name="txt_tabac">
                                  </div>
                                  <div class="col-md-1">
                                    <input type="text" placeholder="VIH" class="form-control" name="txt_vih1">
                                  </div>
                                  <div class="col-md-2">
                                    <input type="text" placeholder="tuberculose" class="form-control" name="txt_tuberculose">
                                  </div>
                                 
                                </div> <br>
                                <div class="row">
                                   <div class="col-md-3">
                                    <input type="text" placeholder="atteinte neurologique" class="form-control" name="txt_atteinte_neurologique">
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" placeholder="atteinte rhumatismale" class="form-control" name="txt_atteinte_rhumatismale">
                                  </div>
                                  <div class="col-4">
                                    <input type="text" placeholder="Hépatophie" class="form-control" name="txt_hepatophie">
                                  </div>
                                  
                                </div><br>
                                <div class="row">
                                  <div class="col-md-2">
                                    <input type="text" class="form-control" placeholder="atteinte intestinale" name="txt_atteinte_intestinale">
                                  </div><div class="col-md-2">
                                    <input type="text" class="form-control" placeholder="atteinte pulmonaire" name="txt_atteinte_pulmonaire">
                                  </div><div class="col-md-2">
                                    <input type="text" class="form-control" placeholder="cancer" name="txt_cancer">
                                  </div>
                                </div><br>

                                <div class="row">
                                  <div class="col-md-6">
                                    <label>III. <u><b>Histoire de la dialyse</b></u></label>
                                  </div>
                                </div>

                                 <div class="row">
                                  <div class="col-md-4">
                                    <label>Date de diagnostic de la maladie</label>
                                    <input type="text" class="form-control" placeholder="atteinte intestinale" name="txt_date_de_diagnostic_de_la_maladie">
                                  </div>
                                  
                                  <div class="col-md-4">
                                    <label>Date de mise en dialyse</label>
                                    <input type="text" class="form-control" placeholder="atteinte pulmonaire" name="txt_date_de_mise_en_dialyse">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3">
                                    <label>Premier centre avant bouaké</label>
                                    <input type="text" name="txt_premier_centre" class="form-control">
                                  </div>
                                  <div class="col-md-4">
                                    <label>Durée du suivi avant la mise en dialyse</label>
                                    <select class="form-control" name="txt_duree_du_suivi_avant_la_mise_en_dialyse">
                                      <option value="">==Choisi===</option>
                                      <option value="<=3M"><=3M</option>
                                      <option value="3-6M">3-6M</option>
                                      <option value="6-12M">6-12M</option>
                                      <option value="1-2A">1-2A</option>
                                      <option value="2-3A">2-3A</option>
                                      <option value="3-4A">3-4A</option>
                                      <option value="4-5A">4-5A</option>
                                      <option value=">=5A">>=5A</option>
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Durée dans ce centre</label>
                                    <select class="form-control" name="txt_duree_dans_ce_centre">
                                      <option value="<=3M">==choisir==</option>
                                      <option value="<=3M"><=3M</option>
                                      <option value="3-6M">3-6M</option>
                                      <option value="6-12M">6-12M</option>
                                      <option value="12-18M">12-18M</option>
                                      <option value="18-24M">18-24M</option>
                                      <option value="24-30M">24-30M</option>
                                      <option value="30-36M">30-36M</option>
                                      <option value=">=36M">>=36M</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3">
                                    <label>Date de début des dialyses à bouaké</label>
                                    <input type="text" name="txt_date_de_debut_des_dialyse" class="form-control">
                                  </div>
                                  <div class="col-md-4">
                                    <label>Durée  centre de bouaké</label>
                                    <select class="form-control" name="txt_duree_centre_de_bouake">
                                      <option value="<=3M">==choisir==</option>
                                      <option value="<=3M"><=3M</option>
                                      <option value="3-6M">3-6M</option>
                                      <option value="6-12M">6-12M</option>
                                      <option value="12-18M">12-18M</option>
                                      <option value="18-24M">18-24M</option>
                                      <option value="24-30M">24-30M</option>
                                      <option value="30-36M">30-36M</option>
                                      <option value=">=36M">>=36M</option>
                                    </select>
                                  </div>
                                  
                                </div>
                                <br>
                                <div class="row">
                                  <div class="col-md-2">
                                    <label>Abords vasculaire:</label>
                                    
                                  </div>
                                  <div class="col-md-2">
                                    <label>-Cathéter Nombre</label>
                                    <input type="text" name="txt_catheter_nbre" class="form-control">
                                  </div>
                                  <div class="col-md-2">
                                    <label>Durée Kt1</label>
                                    <input type="text" name="txt_kt1" class="form-control">
                                  </div><div class="col-md-2">
                                    <label> Kt2</label>
                                    <input type="text" name="txt_kt2" class="form-control">
                                  </div><div class="col-md-2">
                                    <label>Kt3</label>
                                    <input type="text" name="txt_kt3" class="form-control">
                                  </div>
                                  
                                  
                                </div> <br>
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Motif ablation</label>
                                  </div>
                                </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group" style="margin-left: 2%" >
                          
                          <div class="custom-control custom-control-inline custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ckb1" value="infection" name="txt_infection"> <label class="custom-control-label" for="ckb1">Infection</label>
                          </div>
                          <div class="custom-control custom-control-inline custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ckb2" value="dysfonction" name="txt_dysfonction"> <label class="custom-control-label" for="ckb2">Dysfonction</label>
                          </div>
                          
                        </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                        <!-- .custom-control -->
                        <div class="custom-control custom-control-inline custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ckb3" value="saignement" name="txt_saignement"> <label class="custom-control-label" for="ckb3">saignement</label>
                          </div>
                          <div class="custom-control custom-control-inline custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ckb4" value="maturation_fav" name="txt_maturation_fav"> <label class="custom-control-label" for="ckb4">maturation FAV</label>
                          </div>
                        <!-- /.custom-control -->
                      </div>
                                  </div>
                                </div>

                                <div class="row" style="margin-left: 1%">
                                  <div class="col-md-2">
                                    <label>FAV</label>
                                    <input type="text" class="form-control" name="txt_fav">
                                  </div>
                                  <div class="col-md-3">
                                    <label>date de creation</label>
                                    <input type="text" class="form-control" name="txt_date_de_creation">
                                  </div>
                                  <div class="col-md-2">
                                    <label>Durée</label>
                                    <input type="text" class="form-control" name="txt_duree">
                                  </div><div class="col-md-2">
                                    <label>reprise</label>
                                    <input type="text" class="form-control" name="txt_reprise">
                                  </div><div class="col-md-2">
                                    <label>difficultés</label>
                                    <input type="text" class="form-control" name="txt_difficultes">
                                  </div><br>
                                </div>
                                  <div class="row" style="margin-left: 1%">
                                  <div class="col-md-12">
                                    <label> <u><b>Séance de dialyse</b></u></label>
                                  </div>
                                </div>
                                <div class="row" style="margin-left: 1%">
                                  <div class="col-md-6">
                                    <label>Prise de poids</label>
                                    <input type="text" class="form-control" name="txt_prise_de_poids">
                                  </div>
                                  <div class="col-md-6">
                                    <label>TA équilibré avant séance</label>
                                    <input type="text" class="form-control" name="txt_ta_equilibre">
                                  </div>
                                </div><br>
                                <div class="row" style="margin-left: 1%">
                                  <div class="col-md-12">
                                    <label>Incident en dialyse:</label>
                                    hta<input type="text" name="txt_hta1" style="border-radius: 5%">HTA<input type="text" name="txt_hta2" style="border-radius: 5%">vomissement<input type="text" name="txt_vomissement" style="border-radius: 5%">prurit<input type="text" name="txt_prurit" style="border-radius: 5%">
                                  </div>
                                  

                                </div><br>
                                <div class="row">
                                  <div class="col-md-1"></div>
                                  <div class="col-md-6">
                                   vertiges<input type="text" name="txt_vertige" style="border-radius: 5%; margin-top: %">
                                    saignements<input type="text" name="txt_saignements" style="border-radius: 5%">
                                    autre<input type="text" name="txt_autres" style="border-radius: 5%; margin-top: 2%">
                                  </div>

                                </div><br>
                                <div class="row" style="margin-left: 1%">
                                  <div class="col-md-3">
                                    <label>Traitement perdialyque</label>
                                    <input type="text" class="form-control" name="txt_traitement_perdialyque">
                                  </div>
                                  <div class="col-md-1">
                                    <label>SSI</label>
                                    <input type="text" class="form-control" name="txt_ssi">
                                  </div>
                                  <div class="col-md-2">
                                    <label>Transfusion</label>
                                    <input type="text" class="form-control" name="txt_transfusion">
                                  </div><div class="col-md-2">
                                    <label>AntiHTA</label>
                                    <input type="text" class="form-control" name="txt_antihta">
                                  </div><div class="col-md-2">
                                    <label>autres</label>
                                    <input type="text" class="form-control" name="txt_autres1">
                                  </div>
                                </div>
                                <div class="row" style="margin-left: 1%">
                                  <div class="col-md-12">
                                    <label> <u><b>Bilan de dialyse</b></u></label>
                                  </div>
                                </div>

                                <div class="row" style="margin-left: 1%">
                                  <div class="col-md-3">
                                    <label>Taux d'hémoglobine</label>
                                    <input type="text" class="form-control" name="txt_taux_dhemoglobine">
                                  </div>
                                  <div class="col-md-3">
                                    <label>Taux d'albumine</label>
                                    <input type="text" class="form-control" name="txt_taux_dalbumine">
                                  </div>
                                  <div class="col-md-3">
                                    <label>CRP</label>
                                    <input type="text" class="form-control" name="txt_crp">
                                  </div>
                                </div>
                                <div class="row" style="margin-left: 1%">
                                  <div class="col-md-3">
                                    <label>HIV</label>
                                    <input type="text" class="form-control" name="txt_hiv">
                                  </div>
                                  <div class="col-md-3">
                                    <label>AgHBs</label>
                                    <input type="text" class="form-control" name="txt_aghbs">
                                  </div>
                                  <div class="col-md-3">
                                    <label>AcVHC</label>
                                    <input type="text" class="form-control" name="txt_acvhc">
                                  </div><div class="col-md-3" style="margin-left: -1%">
                                    <label>Vaccination hépatite B</label>
                                    <input type="text"  class="form-control" name="txt_vaccination_hepatite_b">
                                  </div>
                                </div>
                                <div class="row" style="margin-left: 1%">
                                  <div class="col-md-3">
                                    <label>Rx pulmonaire: ICT</label>
                                    <input type="text" class="form-control" name="txt_rx_pulmonaire_ict">
                                  </div>
                                  
                                </div>
                                <div class="row" style="margin-left: 1%">
                                  <div class="col-md-3">
                                    <label>Echographie cardiaque</label>
                                    <input type="text" class="form-control" name="txt_echographie_cardiaque">
                                  </div>
                                  <div class="col-md-3">
                                    <label>VG</label>
                                    <input type="text" class="form-control" name="txt_vg">
                                  </div>
                                  <div class="col-md-3">
                                    <label>FES</label>
                                    <input type="text" class="form-control" name="txt_fes">
                                  </div><div class="col-md-2">
                                    <label>Cavités cardiaques</label>
                                    <input type="text" class="form-control" name="txt_cavite_cardiaques">
                                  </div><br>
                                  </div><br>
                                  <div class="row" style="margin-left: 1%"><br>
                                  <div class="col-md-12">
                                    <label>IV. <u><b>Donnée thérapeutiques</b></u></label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                  <div class="form-group" style="margin-left: 7%"><br>
                          <label class="d-block">EPO</label>
                          <div class="custom-control custom-control-inline custom-radio">
                            <input type="radio" class="custom-control-input" name="txt_rdGroup1" value="oui" id="rd1"> <label class="custom-control-label" for="rd1">Oui</label>
                          </div>
                          <div class="custom-control custom-control-inline custom-radio">
                            <input type="radio" class="custom-control-input" name="txt_rdGroup1" value="non" id="rd2"> <label class="custom-control-label" for="rd2">Non</label>
                          </div>
                          
                        </div>
                        </div>
                        <div class="col-md-4">
                                  <div class="form-group" style="margin-left: 1%"><br>
                          <label class="d-block">fer Oral </label>
                          
                            <input type="text" class="form-control" name="txt_fer_oral" id="rd1">  
                          
                          
                          
                        </div>
                        </div>
                        <div class="col-md-4">
                                  <div class="form-group" style="margin-left: 1%"><br>
                          <label class="d-block">fer IV </label>
                          
                            <input type="text" class="form-control" name="txt_fer_iv" id="rd1"> 
                          
                          
                          
                        </div>
                        </div>
                                </div>
                                <div class="row" style="margin-left: 1%">
                                  <div class="col-md-3">
                                    <label>Transfusion</label>
                                    <input type="text" class="form-control" name="txt_transfusion1">
                                  </div>
                                   <div class="col-md-3">
                                    <label>Nombre de fois</label>
                                    <input type="text" class="form-control" name="txt_nbre_de_fois">
                                  </div>
                                  <div class="col-md-3">
                                    <label>Date de la dernière</label>
                                    <input type="text" class="form-control" name="txt_date_de_la_derniere">
                                  </div>
                                </div>
                                <div class="row" style="margin-left: 1%">
                                  <div class="col-md-3">
                                    <label >Traitement antiHTA</label>
                                    <select name="txt_traitementantihta" class="form-control">
                                      <option value="oui">oui</option>
                                      <option value="nom">non</option>
                                    </select>
                                  </div>
                                  <div class="col-md-3">
                                    <label>Nombre de d'antiHTA</label>
                                    <select name="txt_nbre_antihta" class="form-control">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                    </select>
                                  </div>
                                  <div class="col-md-3">
                                    <label>Diurétiques:</label>
                                    <select name="txt_diuretiques" class="form-control">
                                      <option value="oui">oui</option>
                                      <option value="non">nom</option>
                                      
                                    </select>
                                  </div>
                                  <div class="col-md-3">
                                    <label>Calcium Oral:</label>
                                    <select name="txt_calcium" class="form-control">
                                      <option value="oui">oui</option>
                                      <option value="non">nom</option>
                                      
                                    </select>
                                  </div>
                                   </div>
                                   <div class="row" style="margin-left: 1%">
                                  <div class="col-md-3">
                                    <label>Traitement traditionnel</label>
                                    <input type="text" class="form-control" name="txt_traitement">
                                  </div>
                                  <div class="col-md-3">
                                    <label>Autre Traitement</label>
                                    <input type="text" class="form-control" name="txt_autre_traitement">
                                  </div>
                                  </div>
                                  
                                
                    

                                </center>
                                <br>
                
                </div>
              
            </div>
             <center>
            <div class="tile-footer">
              <button class="btn btn-success" name="btn_ajouter"><i class="fa fa-fw fa-lg fa-check-circle"></i>Ajouter</button>
               <button disabled class="btn btn-success" name="btn_modifier"><i class="fa fa-fw fa-lg fa-edit"></i>Modifier</button>
               <button disabled class="btn btn-success" name="btn_supprimer"><i class="fa fa-fw fa-lg fa-eraser"></i>Supprimer</button>
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