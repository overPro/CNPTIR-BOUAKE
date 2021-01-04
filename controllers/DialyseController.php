<?php
require 'models/dialyse.php';

class dialyse {

    public function enregistrement() 
    {
        $dialyse=new dialysemodel();
        $nbre=0;
        $modif=0;
        $message="";

        $nom_prenom="";
$bain="";
$grp_rh="";
$generateur="";
$temperature="";
$dialyseur="";
$conductivite="";
$aiguille="";
$electro_champ="";
$heparine="";
$debit_de_dialyse="";
$poid_theorique="";
$connexion_lignes="";
$medecin1="";
$medecin2="";
$infirmier1="";
$infirmier2="";
$aide_soignant1="";
$aide_soignant2="";
$heure1="";
$heure2="";
$poids_prise1="";
$poids_perte="";
$uf_demandee="";
$uf_obtenue="";
$ta1="";
$pouls="";
$ta2="";
$pouls2="";
$temperature1="";
$temperature2="";
$heure_tab1="";
$heure_tab2="";
$heure_tab3="";
$heure_tab4="";
$heure_tab5="";
$heure_tab6="";
$heure_tab7="";
$hep1="";
$hep2="";
$hep3="";
$hep4="";
$hep5="";
$hep6="";
$hep7="";
$ta_tab1="";
$ta_tab2="";
$ta_tab3="";
$ta_tab4="";
$ta_tab5="";
$ta_tab6="";
$ta_tab7="";
$pompe1="";
$pompe2="";
$pompe3="";
$pompe4="";
$pompe5="";
$pompe6="";
$pompe7="";
$pv1="";
$pv2="";
$pv3="";
$pv4="";
$pv5="";
$pv6="";
$pv7="";
$uf_dem1="";
$uf_dem2="";
$uf_dem3="";
$uf_dem4="";
$uf_dem5="";
$uf_dem6="";
$uf_dem7="";
$uf_obt1="";
$uf_obt2="";
$uf_obt3="";
$uf_obt4="";
$uf_obt5="";
$uf_obt6="";
$uf_obt7="";
$observation1="";
$observation2="";
$observation3="";
$observation4="";
$observation5="";
$observation6="";
$observation7="";
$observation_general="";
$numero_patient="";
$prescription="";
$groupe="";

if(isset($_POST['btn_ajouter']))
{
  
        $dialyse->nom_prenom=filter_input(INPUT_POST, "txt_nom_prenom", FILTER_SANITIZE_STRING);
        $dialyse->bain=filter_input(INPUT_POST, "txt_bain", FILTER_SANITIZE_STRING);
        $dialyse->grprh=filter_input(INPUT_POST, "txt_grprh", FILTER_SANITIZE_STRING);
        $dialyse->generateur=filter_input(INPUT_POST, "txt_generateur", FILTER_SANITIZE_STRING);
        $dialyse->Température=filter_input(INPUT_POST, "txt_temperature", FILTER_SANITIZE_STRING);
        $dialyse->dialyseur=filter_input(INPUT_POST, "txt_dialyseur", FILTER_SANITIZE_STRING);
        $dialyse->conductivite=filter_input(INPUT_POST, "txt_conductivite", FILTER_SANITIZE_STRING);
        $dialyse->aiguille=filter_input(INPUT_POST, "txt_aiguille", FILTER_SANITIZE_STRING);
        $dialyse->electro_clamp=filter_input(INPUT_POST, "txt_electro_clamp", FILTER_SANITIZE_STRING);
        $dialyse->heparine=filter_input(INPUT_POST, "txt_heparine", FILTER_SANITIZE_STRING);
        $dialyse->debit_de_dialyse=filter_input(INPUT_POST, "txt_debit_de_dialyse", FILTER_SANITIZE_STRING);
        $dialyse->poids_theorique=filter_input(INPUT_POST, "txt_poids_theorique", FILTER_SANITIZE_STRING);
        $dialyse->connexion=filter_input(INPUT_POST, "txt_connexion", FILTER_SANITIZE_STRING);
        $dialyse->medecin1=filter_input(INPUT_POST, "txt_medecin1", FILTER_SANITIZE_STRING);
        $dialyse->medecin2=filter_input(INPUT_POST, "txt_medecin2", FILTER_SANITIZE_STRING);
        $dialyse->infirmier1=filter_input(INPUT_POST, "txt_infirmier1", FILTER_SANITIZE_STRING);
        $dialyse->infirmier2=filter_input(INPUT_POST, "txt_infirmier2", FILTER_SANITIZE_STRING);
        $dialyse->aide_soignant1=filter_input(INPUT_POST, "txt_aide_soignant1", FILTER_SANITIZE_STRING);
        $dialyse->aide_soignant2=filter_input(INPUT_POST, "txt_aide_soignant2", FILTER_SANITIZE_STRING);
        $dialyse->heure1=filter_input(INPUT_POST, "txt_heure1", FILTER_SANITIZE_STRING);
        $dialyse->heure2=filter_input(INPUT_POST, "txt_heure2", FILTER_SANITIZE_STRING);
        $dialyse->poids_prise=filter_input(INPUT_POST, "txt_poids_prise", FILTER_SANITIZE_STRING);
        $dialyse->poids_perte=filter_input(INPUT_POST, "txt_poids_perte", FILTER_SANITIZE_STRING);
        $dialyse->uf_demande=filter_input(INPUT_POST, "txt_uf_demande", FILTER_SANITIZE_STRING);
        $dialyse->uf_obtenue=filter_input(INPUT_POST, "txt_uf_obtenue", FILTER_SANITIZE_STRING);
        $dialyse->ta1=filter_input(INPUT_POST, "txt_ta1", FILTER_SANITIZE_STRING);
        $dialyse->pouls1=filter_input(INPUT_POST, "txt_pouls1", FILTER_SANITIZE_STRING);
        $dialyse->ta2=filter_input(INPUT_POST, "txt_ta2", FILTER_SANITIZE_STRING);
        $dialyse->pouls2=filter_input(INPUT_POST, "txt_pouls2", FILTER_SANITIZE_STRING);
        $dialyse->temperature1=filter_input(INPUT_POST, "txt_temperature1", FILTER_SANITIZE_STRING);
        $dialyse->temperature2=filter_input(INPUT_POST, "txt_temperature2", FILTER_SANITIZE_STRING);
        $dialyse->h1=filter_input(INPUT_POST, "txt_h1", FILTER_SANITIZE_STRING);
        $dialyse->hep1=filter_input(INPUT_POST, "txt_hep1", FILTER_SANITIZE_STRING);
        $dialyse->ta_1=filter_input(INPUT_POST, "txt_ta_1", FILTER_SANITIZE_STRING);
        $dialyse->pompe1=filter_input(INPUT_POST, "txt_pompe1", FILTER_SANITIZE_STRING);
        $dialyse->pv1=filter_input(INPUT_POST, "txt_pv1", FILTER_SANITIZE_STRING);
        $dialyse->uf_dem_1=filter_input(INPUT_POST, "txt_uf_dem_1", FILTER_SANITIZE_STRING);
        $dialyse->uf_obt_1=filter_input(INPUT_POST, "txt_uf_obt_1", FILTER_SANITIZE_STRING);
        $dialyse->observation_1=filter_input(INPUT_POST, "txt_observation_1", FILTER_SANITIZE_STRING);

        $dialyse->h2=filter_input(INPUT_POST, "txt_h2", FILTER_SANITIZE_STRING);
        $dialyse->hep2=filter_input(INPUT_POST, "txt_hep2", FILTER_SANITIZE_STRING);
        $dialyse->ta_2=filter_input(INPUT_POST, "txt_ta2", FILTER_SANITIZE_STRING);
        $dialyse->pompe2=filter_input(INPUT_POST, "txt_pompe2", FILTER_SANITIZE_STRING);
        $dialyse->pv2=filter_input(INPUT_POST, "txt_pv2", FILTER_SANITIZE_STRING);
        $dialyse->uf_dem_2=filter_input(INPUT_POST, "txt_uf_dem_2", FILTER_SANITIZE_STRING);
        $dialyse->uf_obt_2=filter_input(INPUT_POST, "txt_uf_obt_2", FILTER_SANITIZE_STRING);
        $dialyse->observation_2=filter_input(INPUT_POST, "txt_observation_2", FILTER_SANITIZE_STRING);

        $dialyse->h3=filter_input(INPUT_POST, "txt_h3", FILTER_SANITIZE_STRING);
        $dialyse->hep3=filter_input(INPUT_POST, "txt_hep3", FILTER_SANITIZE_STRING);
        $dialyse->ta_3=filter_input(INPUT_POST, "txt_ta_3", FILTER_SANITIZE_STRING);
        $dialyse->pompe3=filter_input(INPUT_POST, "txt_pompe3", FILTER_SANITIZE_STRING);
        $dialyse->pv3=filter_input(INPUT_POST, "txt_pv3", FILTER_SANITIZE_STRING);
        $dialyse->uf_dem_3=filter_input(INPUT_POST, "txt_uf_dem_3", FILTER_SANITIZE_STRING);
        $dialyse->uf_obt_3=filter_input(INPUT_POST, "txt_uf_obt_3", FILTER_SANITIZE_STRING);
        $dialyse->observation_3=filter_input(INPUT_POST, "txt_observation_3", FILTER_SANITIZE_STRING);

        $dialyse->h4=filter_input(INPUT_POST, "txt_h4", FILTER_SANITIZE_STRING);
        $dialyse->hep4=filter_input(INPUT_POST, "txt_hep4", FILTER_SANITIZE_STRING);
        $dialyse->ta_4=filter_input(INPUT_POST, "txt_ta_4", FILTER_SANITIZE_STRING);
        $dialyse->pompe4=filter_input(INPUT_POST, "txt_pompe4", FILTER_SANITIZE_STRING);
        $dialyse->pv4=filter_input(INPUT_POST, "txt_pv4", FILTER_SANITIZE_STRING);
        $dialyse->uf_dem_4=filter_input(INPUT_POST, "txt_uf_dem_4", FILTER_SANITIZE_STRING);
        $dialyse->uf_obt_4=filter_input(INPUT_POST, "txt_uf_obt_4", FILTER_SANITIZE_STRING);
        $dialyse->observation_4=filter_input(INPUT_POST, "txt_observation_4", FILTER_SANITIZE_STRING);

        $dialyse->h5=filter_input(INPUT_POST, "txt_h5", FILTER_SANITIZE_STRING);
        $dialyse->hep5=filter_input(INPUT_POST, "txt_hep5", FILTER_SANITIZE_STRING);
        $dialyse->ta_5=filter_input(INPUT_POST, "txt_ta_5", FILTER_SANITIZE_STRING);
        $dialyse->pompe5=filter_input(INPUT_POST, "txt_pompe5", FILTER_SANITIZE_STRING);
        $dialyse->pv5=filter_input(INPUT_POST, "txt_pv5", FILTER_SANITIZE_STRING);
        $dialyse->uf_dem_5=filter_input(INPUT_POST, "txt_uf_dem_5", FILTER_SANITIZE_STRING);
        $dialyse->uf_obt_5=filter_input(INPUT_POST, "txt_uf_obt_5", FILTER_SANITIZE_STRING);
        $dialyse->observation_5=filter_input(INPUT_POST, "txt_observation_5", FILTER_SANITIZE_STRING);

        $dialyse->h6=filter_input(INPUT_POST, "txt_h6", FILTER_SANITIZE_STRING);
        $dialyse->hep6=filter_input(INPUT_POST, "txt_hep6", FILTER_SANITIZE_STRING);
        $dialyse->ta_6=filter_input(INPUT_POST, "txt_ta_6", FILTER_SANITIZE_STRING);
        $dialyse->pompe6=filter_input(INPUT_POST, "txt_pompe6", FILTER_SANITIZE_STRING);
        $dialyse->pv6=filter_input(INPUT_POST, "txt_pv6", FILTER_SANITIZE_STRING);
        $dialyse->uf_dem_6=filter_input(INPUT_POST, "txt_uf_dem_6", FILTER_SANITIZE_STRING);
        $dialyse->uf_obt_6=filter_input(INPUT_POST, "txt_uf_obt_6", FILTER_SANITIZE_STRING);
        $dialyse->observation_6=filter_input(INPUT_POST, "txt_observation_6", FILTER_SANITIZE_STRING);

        $dialyse->h7=filter_input(INPUT_POST, "txt_h7", FILTER_SANITIZE_STRING);
        $dialyse->hep7=filter_input(INPUT_POST, "txt_hep7", FILTER_SANITIZE_STRING);
        $dialyse->ta_7=filter_input(INPUT_POST, "txt_ta_7", FILTER_SANITIZE_STRING);
        $dialyse->pompe7=filter_input(INPUT_POST, "txt_pompe7", FILTER_SANITIZE_STRING);
        $dialyse->pv7=filter_input(INPUT_POST, "txt_pv7", FILTER_SANITIZE_STRING);
        $dialyse->uf_dem_7=filter_input(INPUT_POST, "txt_uf_dem_7", FILTER_SANITIZE_STRING);
        $dialyse->uf_obt_7=filter_input(INPUT_POST, "txt_uf_obt_7", FILTER_SANITIZE_STRING);
        $dialyse->observation_7=filter_input(INPUT_POST, "txt_observation_7", FILTER_SANITIZE_STRING);
        $dialyse->prescription=filter_input(INPUT_POST, "txt_prescription", FILTER_SANITIZE_STRING);
        $dialyse->observation=filter_input(INPUT_POST, "txt_observation", FILTER_SANITIZE_STRING);
        $dialyse->numero_patient=1;
        $dialyse->groupe=1;


/*var_dump($dialyse);
die();*/
$sol=$dialyse->AjouterDialyse();
if($sol){
        $message="<div class='alert alert-success alert-dismissible fade show'>
                        <button type='button' class='close' data-dismiss='alert'>×</button> <strong>Well done!</strong> You successfully read <a href='#!' class='alert-link'>this important alert message</a>. </div>
                    </div>";
                }

}
if(isset($_POST['btn_rechercher']))
{
    $modif=1;

    $dialyse->numero_patient=filter_input(INPUT_POST,"txt_rechercher", FILTER_SANITIZE_STRING);
$rech=$dialyse->rechercherDossierDialyse($dialyse->numero_patient);
if($rech){
$nom_prenom=$rech[0]['nom_prenom'];
$bain=$rech[0]['bain'];
$grp_rh=$rech[0]['grp_rh'];
$generateur=$rech[0]['generateur'];
$temperature=$rech[0]['temperature'];
$dialyseur=$rech[0]['dialyseur'];
$conductivite=$rech[0]['conductivite'];
$aiguille=$rech[0]['aiguille'];
$electro_champ=$rech[0]['electro_champ'];
$heparine=$rech[0]['heparine'];
$debit_de_dialyse=$rech[0]['debit_de_dialyse'];
$poid_theorique=$rech[0]['poid_theorique'];
$connexion_lignes=$rech[0]['connexion_lignes'];
$medecin1=$rech[0]['medecin1'];
$medecin2=$rech[0]['medecin2'];
$infirmier1=$rech[0]['infirmier1'];
$infirmier2=$rech[0]['infirmier2'];
$aide_soignant1=$rech[0]['aide_soignant1'];
$aide_soignant2=$rech[0]['aide_soignant2'];
$heure1=$rech[0]['heure1'];
$heure2=$rech[0]['heure2'];
$poids_prise1=$rech[0]['poids_prise1'];
$poids_perte=$rech[0]['poids_perte'];
$uf_demandee=$rech[0]['uf_demandee'];
$uf_obtenue=$rech[0]['uf_obtenue'];
$ta1=$rech[0]['ta1'];
$pouls=$rech[0]['pouls'];
$ta2=$rech[0]['ta2'];
$pouls2=$rech[0]['pouls2'];
$temperature1=$rech[0]['temperature1'];
$temperature2=$rech[0]['temperature2'];
$heure_tab1=$rech[0]['heure_tab1'];
$heure_tab2=$rech[0]['heure_tab2'];
$heure_tab3=$rech[0]['heure_tab3'];
$heure_tab4=$rech[0]['heure_tab4'];
$heure_tab5=$rech[0]['heure_tab5'];
$heure_tab6=$rech[0]['heure_tab6'];
$heure_tab7=$rech[0]['heure_tab7'];
$hep1=$rech[0]['hep1'];
$hep2=$rech[0]['hep2'];
$hep3=$rech[0]['hep3'];
$hep4=$rech[0]['hep4'];
$hep5=$rech[0]['hep5'];
$hep6=$rech[0]['hep6'];
$hep7=$rech[0]['hep7'];
$ta_tab1=$rech[0]['ta_tab1'];
$ta_tab2=$rech[0]['ta_tab2'];
$ta_tab3=$rech[0]['ta_tab3'];
$ta_tab4=$rech[0]['ta_tab4'];
$ta_tab5=$rech[0]['ta_tab5'];
$ta_tab6=$rech[0]['ta_tab6'];
$ta_tab7=$rech[0]['ta_tab7'];
$pompe1=$rech[0]['pompe1'];
$pompe2=$rech[0]['pompe2'];
$pompe3=$rech[0]['pompe3'];
$pompe4=$rech[0]['pompe4'];
$pompe5=$rech[0]['pompe5'];
$pompe6=$rech[0]['pompe6'];
$pompe7=$rech[0]['pompe7'];
$pv1=$rech[0]['pv1'];
$pv2=$rech[0]['pv2'];
$pv3=$rech[0]['pv3'];
$pv4=$rech[0]['pv4'];
$pv5=$rech[0]['pv5'];
$pv6=$rech[0]['pv6'];
$pv7=$rech[0]['pv7'];
$uf_dem1=$rech[0]['uf_dem1'];
$uf_dem2=$rech[0]['uf_dem2'];
$uf_dem3=$rech[0]['uf_dem3'];
$uf_dem4=$rech[0]['uf_dem4'];
$uf_dem5=$rech[0]['uf_dem5'];
$uf_dem6=$rech[0]['uf_dem6'];
$uf_dem7=$rech[0]['uf_dem7'];
$uf_obt1=$rech[0]['uf_obt1'];
$uf_obt2=$rech[0]['uf_obt2'];
$uf_obt3=$rech[0]['uf_obt3'];
$uf_obt4=$rech[0]['uf_obt4'];
$uf_obt5=$rech[0]['uf_obt5'];
$uf_obt6=$rech[0]['uf_obt6'];
$uf_obt7=$rech[0]['uf_obt7'];
$observation1=$rech[0]['observation1'];
$observation2=$rech[0]['observation2'];
$observation3=$rech[0]['observation3'];
$observation4=$rech[0]['observation4'];
$observation5=$rech[0]['observation5'];
$observation6=$rech[0]['observation6'];
$observation7=$rech[0]['observation7'];
$observation_general=$rech[0]['observation_general'];
$prescription=$rech[0]['prescription'];
$numero_patient=$rech[0]['numero_patient'];
$groupe=$rech[0]['groupe'];
} else{
    $message="<div class='alert alert-danger alert-dismissible fade show'>
                        <button type='button' class='close' data-dismiss='alert'>×</button> <strong>Oh snap!</strong> <a href='#!' class='alert-link'>Erreur cette donnée existe peut-être pas!! </div>";
} 

}
    include 'views/dialyse/enregistrement-dialyse.php';
    }
    public function rechercherImprimer() 
    {
        $nbre=0;
        $message="";
        $modif=1;
          $dialyse=new dialysemodel();
          $tabdialyse=array();
        if(isset($_POST['btn_rechercher']))
        {
$dialyse->numero_patient=filter_input(INPUT_POST,"sai_rechercher", FILTER_SANITIZE_STRING);
$rech=$dialyse->rechercherDossierDialyse($dialyse->numero_patient);
$tabdialyse['nom_prenom']=$nom_prenom=$rech[0]['nom_prenom'];
$tabdialyse['numero_patient']=$numero_patient=$rech[0]['numero_patient'];
$tabdialyse['groupe']=$groupe=$rech[0]['groupe'];
$tabdialyse['dialyseur']=$dialyseur=$rech[0]['dialyseur'];
$tab[]=$tabdialyse;


        }
    include 'views/dialyse/verification-dialyse.php';
    }
    
    public function liste() 
    {
        $nbre=0;
        $message="";
        $dialyse=new dialysemodel();
        $liste=$dialyse->Liste();
        /*var_dump($liste);
        die();*/

    include 'views/dialyse/liste-dialyse.php';
    }

    public function Imprimer()
    {
      $dialyse=new dialysemodel();   
        if(isset($_GET['id']))
        {
            $id=$_GET['id'];
           $rech=$dialyse->rechercherDossierDialyse($id);
           
if(!empty($rech)){
$nom_prenom=$rech[0]['nom_prenom'];
$bain=$rech[0]['bain'];
$grp_rh=$rech[0]['grp_rh'];
$generateur=$rech[0]['generateur'];
$temperature=$rech[0]['temperature'];
$dialyseur=$rech[0]['dialyseur'];
$conductivite=$rech[0]['conductivite'];
$aiguille=$rech[0]['aiguille'];
$electro_champ=$rech[0]['electro_champ'];
$heparine=$rech[0]['heparine'];
$debit_de_dialyse=$rech[0]['debit_de_dialyse'];
$poid_theorique=$rech[0]['poid_theorique'];
$connexion_lignes=$rech[0]['connexion_lignes'];
$medecin1=$rech[0]['medecin1'];
$medecin2=$rech[0]['medecin2'];
$infirmier1=$rech[0]['infirmier1'];
$infirmier2=$rech[0]['infirmier2'];
$aide_soignant1=$rech[0]['aide_soignant1'];
$aide_soignant2=$rech[0]['aide_soignant2'];
$heure1=$rech[0]['heure1'];
$heure2=$rech[0]['heure2'];
$poids_prise1=$rech[0]['poids_prise1'];
$poids_perte=$rech[0]['poids_perte'];

$uf_demandee=$rech[0]['uf_demandee'];
$uf_obtenue=$rech[0]['uf_obtenue'];
$ta1=$rech[0]['ta1'];
$pouls=$rech[0]['pouls'];
$ta2=$rech[0]['ta2'];
$pouls2=$rech[0]['pouls2'];
$temperature1=$rech[0]['temperature1'];
$temperature2=$rech[0]['temperature2'];
$heure_tab1=$rech[0]['heure_tab1'];
$heure_tab2=$rech[0]['heure_tab2'];
$heure_tab3=$rech[0]['heure_tab3'];
$heure_tab4=$rech[0]['heure_tab4'];
$heure_tab5=$rech[0]['heure_tab5'];
$heure_tab6=$rech[0]['heure_tab6'];
$heure_tab7=$rech[0]['heure_tab7'];
$hep1=$rech[0]['hep1'];
$hep2=$rech[0]['hep2'];
$hep3=$rech[0]['hep3'];
$hep4=$rech[0]['hep4'];
$hep5=$rech[0]['hep5'];
$hep6=$rech[0]['hep6'];
$hep7=$rech[0]['hep7'];
$ta_tab1=$rech[0]['ta_tab1'];
$ta_tab2=$rech[0]['ta_tab2'];
$ta_tab3=$rech[0]['ta_tab3'];
$ta_tab4=$rech[0]['ta_tab4'];
$ta_tab5=$rech[0]['ta_tab5'];
$ta_tab6=$rech[0]['ta_tab6'];
$ta_tab7=$rech[0]['ta_tab7'];
$pompe1=$rech[0]['pompe1'];
$pompe2=$rech[0]['pompe2'];
$pompe3=$rech[0]['pompe3'];
$pompe4=$rech[0]['pompe4'];
$pompe5=$rech[0]['pompe5'];
$pompe6=$rech[0]['pompe6'];
$pompe7=$rech[0]['pompe7'];
$pv1=$rech[0]['pv1'];
$pv2=$rech[0]['pv2'];
$pv3=$rech[0]['pv3'];
$pv4=$rech[0]['pv4'];
$pv5=$rech[0]['pv5'];
$pv6=$rech[0]['pv6'];
$pv7=$rech[0]['pv7'];
$uf_dem1=$rech[0]['uf_dem1'];
$uf_dem2=$rech[0]['uf_dem2'];
$uf_dem3=$rech[0]['uf_dem3'];
$uf_dem4=$rech[0]['uf_dem4'];
$uf_dem5=$rech[0]['uf_dem5'];
$uf_dem6=$rech[0]['uf_dem6'];
$uf_dem7=$rech[0]['uf_dem7'];
$uf_obt1=$rech[0]['uf_obt1'];
$uf_obt2=$rech[0]['uf_obt2'];
$uf_obt3=$rech[0]['uf_obt3'];
$uf_obt4=$rech[0]['uf_obt4'];
$uf_obt5=$rech[0]['uf_obt5'];
$uf_obt6=$rech[0]['uf_obt6'];
$uf_obt7=$rech[0]['uf_obt7'];
$observation1=$rech[0]['observation1'];
$observation2=$rech[0]['observation2'];
$observation3=$rech[0]['observation3'];
$observation4=$rech[0]['observation4'];
$observation5=$rech[0]['observation5'];
$observation6=$rech[0]['observation6'];
$observation7=$rech[0]['observation7'];
$observation_general=$rech[0]['observation_general'];
$prescription=$rech[0]['prescription'];
$numero_patient=$rech[0]['numero_patient'];
$groupe=$rech[0]['groupe'];
        }

            include 'functions/pdf.php';

    }
         include 'views/dialyse/verification-dialyse.php';
}
}