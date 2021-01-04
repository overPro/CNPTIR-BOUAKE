<?php

require 'models/medicaux.php';

class medicaux {

    public function enregistrement() 
    {
        $nbre=0;
        $message="";
        $medicaux= new medicauxmodel();
        if(isset($_POST['btn_ajouter']))
        {
        $medicaux->numero=/*$numero=*/filter_input(INPUT_POST, "txt_numero", FILTER_SANITIZE_STRING);
         $medicaux->date=filter_input(INPUT_POST, "txt_date", FILTER_SANITIZE_STRING);
         $medicaux->jour_de_dialyse=filter_input(INPUT_POST, "txt_jour_de_dialyse", FILTER_SANITIZE_STRING);
         $medicaux->groupe_sanguin=filter_input(INPUT_POST, "txt_groupe_sanguin", FILTER_SANITIZE_STRING);
         $medicaux->nom=filter_input(INPUT_POST, "txt_nom", FILTER_SANITIZE_STRING);
         $medicaux->prenom=filter_input(INPUT_POST, "txt_prenom", FILTER_SANITIZE_STRING);
         $medicaux->nom_emprunt=filter_input(INPUT_POST, "txt_nom_emprunt", FILTER_SANITIZE_STRING);
         $medicaux->date_de_naisssance=filter_input(INPUT_POST, "txt_date_de_naisssance", FILTER_SANITIZE_STRING);
         $medicaux->age=filter_input(INPUT_POST, "txt_age", FILTER_SANITIZE_STRING);
         $medicaux->tranche_age=filter_input(INPUT_POST, "txt_tranche_age", FILTER_SANITIZE_STRING);
         $medicaux->sexe=filter_input(INPUT_POST, "txt_sexe", FILTER_SANITIZE_STRING);
         $medicaux->groupe_ethnique=filter_input(INPUT_POST, "txt_groupe_ethnique", FILTER_SANITIZE_STRING);
         $medicaux->niveau_etude=filter_input(INPUT_POST, "txt_niveau_etude", FILTER_SANITIZE_STRING);
         $medicaux->situation_matrimoniale=filter_input(INPUT_POST, "txt_situation_matrimoniale", FILTER_SANITIZE_STRING);
         $medicaux->residence=filter_input(INPUT_POST, "txt_residence", FILTER_SANITIZE_STRING);
         $medicaux->quartier=filter_input(INPUT_POST, "txt_quartier", FILTER_SANITIZE_STRING);
         $medicaux->hors_bouake=filter_input(INPUT_POST, "txt_hors_bouake", FILTER_SANITIZE_STRING);
         $medicaux->preciser=filter_input(INPUT_POST, "txt_preciser", FILTER_SANITIZE_STRING);
         $medicaux->hta=filter_input(INPUT_POST, "txt_hta", FILTER_SANITIZE_STRING);
         $medicaux->vih=filter_input(INPUT_POST, "txt_vih", FILTER_SANITIZE_STRING);
         $medicaux->diabete=filter_input(INPUT_POST, "txt_diabete", FILTER_SANITIZE_STRING);
         $medicaux->hta_de_diabete=filter_input(INPUT_POST, "txt_hta_de_diabete", FILTER_SANITIZE_STRING);
         $medicaux->gnc=filter_input(INPUT_POST, "txt_gnc", FILTER_SANITIZE_STRING);
         $medicaux->ntic=filter_input(INPUT_POST, "txt_ntic", FILTER_SANITIZE_STRING);
         $medicaux->pkad=filter_input(INPUT_POST, "txt_pkad", FILTER_SANITIZE_STRING);
         $medicaux->drepanocytose=filter_input(INPUT_POST, "txt_drepanocytose", FILTER_SANITIZE_STRING);
         $medicaux->indetermine=filter_input(INPUT_POST, "txt_indetermine", FILTER_SANITIZE_STRING);
         $medicaux->autre_causes=filter_input(INPUT_POST, "txt_autre_causes", FILTER_SANITIZE_STRING);
         $medicaux->insuffisance_cardique_congestive=filter_input(INPUT_POST, "txt_Insuffisance_cardiaque_congestive", FILTER_SANITIZE_STRING);
         $medicaux->diabete1=filter_input(INPUT_POST, "txt_diabete1", FILTER_SANITIZE_STRING);
        $medicaux->alcool=filter_input(INPUT_POST, "txt_alcool", FILTER_SANITIZE_STRING);
        $medicaux->tabac=filter_input(INPUT_POST, "txt_tabac", FILTER_SANITIZE_STRING);
         $medicaux->vih1=filter_input(INPUT_POST, "txt_vih1", FILTER_SANITIZE_STRING);
         $medicaux->tuberculose=filter_input(INPUT_POST, "txt_tuberculose", FILTER_SANITIZE_STRING);
         $medicaux->atteinte_neurologique=filter_input(INPUT_POST, "txt_atteinte_neurologique", FILTER_SANITIZE_STRING);
         $medicaux->atteinte_rhumatismale=filter_input(INPUT_POST, "txt_atteinte_rhumatismale", FILTER_SANITIZE_STRING);
         $medicaux->hepatophie=filter_input(INPUT_POST, "txt_hepatophie", FILTER_SANITIZE_STRING);
         $medicaux->atteinte_intestinale=filter_input(INPUT_POST, "txt_atteinte_intestinale", FILTER_SANITIZE_STRING);
         $medicaux->atteinte_pulmonaire=filter_input(INPUT_POST, "txt_atteinte_pulmonaire", FILTER_SANITIZE_STRING);
         $medicaux->cancer=filter_input(INPUT_POST, "txt_cancer", FILTER_SANITIZE_STRING);
         $medicaux->date_de_diagnostic_de_la_maladie=filter_input(INPUT_POST, "txt_date_de_diagnostic_de_la_maladie", FILTER_SANITIZE_STRING);
         $medicaux->date_de_mise_en_dialyse=filter_input(INPUT_POST, "txt_date_de_mise_en_dialyse", FILTER_SANITIZE_STRING);
         $medicaux->premier_centre_avant_bouake=filter_input(INPUT_POST, "txt_premier_centre", FILTER_SANITIZE_STRING);
         $medicaux->duree_du_suivi_avant_la_mise_en_dialyse=filter_input(INPUT_POST, "txt_duree_du_suivi_avant_la_mise_en_dialyse", FILTER_SANITIZE_STRING);
         $medicaux->duree_dans_ce_centre=filter_input(INPUT_POST, "txt_duree_dans_ce_centre", FILTER_SANITIZE_STRING);
         $medicaux->date_de_debut_des_dialyse=filter_input(INPUT_POST, "txt_date_de_debut_des_dialyse", FILTER_SANITIZE_STRING);
         $medicaux->duree_centre_de_bouake=filter_input(INPUT_POST, "txt_duree_centre_de_bouake", FILTER_SANITIZE_STRING);
         $medicaux->catheter_nbre=filter_input(INPUT_POST, "txt_catheter_nbre", FILTER_SANITIZE_STRING);
         $medicaux->kt1=filter_input(INPUT_POST, "txt_kt1", FILTER_SANITIZE_STRING);
         $medicaux->kt2=filter_input(INPUT_POST, "txt_kt2", FILTER_SANITIZE_STRING);
         $medicaux->kt3=filter_input(INPUT_POST, "txt_kt3", FILTER_SANITIZE_STRING);
         $medicaux->infection=filter_input(INPUT_POST, "txt_infection", FILTER_SANITIZE_STRING);
         $medicaux->dysfonction=filter_input(INPUT_POST, "txt_dysfonction", FILTER_SANITIZE_STRING);
         $medicaux->saignement=filter_input(INPUT_POST, "txt_saignement", FILTER_SANITIZE_STRING);
         $medicaux->maturation_fav=filter_input(INPUT_POST, "txt_maturation_fav", FILTER_SANITIZE_STRING);
         $medicaux->fav=filter_input(INPUT_POST, "txt_fav", FILTER_SANITIZE_STRING);
         $medicaux->date_de_creation=filter_input(INPUT_POST, "txt_date_de_creation", FILTER_SANITIZE_STRING);
         $medicaux->duree=filter_input(INPUT_POST, "txt_duree", FILTER_SANITIZE_STRING);
         $medicaux->reprise=filter_input(INPUT_POST, "txt_reprise", FILTER_SANITIZE_STRING);
         $medicaux->difficultes=filter_input(INPUT_POST, "txt_difficultes", FILTER_SANITIZE_STRING);
         $medicaux->prise_de_poids=filter_input(INPUT_POST, "txt_prise_de_poids", FILTER_SANITIZE_STRING);
         $medicaux->ta_equilibre=filter_input(INPUT_POST, "txt_ta_equilibre", FILTER_SANITIZE_STRING);
         $medicaux->hta1=filter_input(INPUT_POST, "txt_hta1", FILTER_SANITIZE_STRING);
         $medicaux->hta2=filter_input(INPUT_POST, "txt_hta2", FILTER_SANITIZE_STRING);
         $medicaux->vomissement=filter_input(INPUT_POST, "txt_vomissement", FILTER_SANITIZE_STRING);
         $medicaux->prurit=filter_input(INPUT_POST, "txt_prurit", FILTER_SANITIZE_STRING);
         $medicaux->vertiges=filter_input(INPUT_POST, "txt_vertige", FILTER_SANITIZE_STRING);
         $medicaux->saignements=filter_input(INPUT_POST, "txt_saignements", FILTER_SANITIZE_STRING);
         $medicaux->autres=filter_input(INPUT_POST, "txt_autres", FILTER_SANITIZE_STRING);
         $medicaux->traitement_perdialyque=filter_input(INPUT_POST, "txt_traitement_perdialyque", FILTER_SANITIZE_STRING);
         $medicaux->ssi=filter_input(INPUT_POST, "txt_ssi", FILTER_SANITIZE_STRING);
         $medicaux->transfusion=filter_input(INPUT_POST, "txt_transfusion", FILTER_SANITIZE_STRING);
         $medicaux->antihta=filter_input(INPUT_POST, "txt_antihta", FILTER_SANITIZE_STRING);
         $medicaux->autres1=filter_input(INPUT_POST, "txt_autres1", FILTER_SANITIZE_STRING);
         $medicaux->taux_dhemoglobine=filter_input(INPUT_POST, "txt_taux_dhemoglobine", FILTER_SANITIZE_STRING);
         $medicaux->taux_dalbumine=filter_input(INPUT_POST, "txt_taux_dalbumine", FILTER_SANITIZE_STRING);
         $medicaux->crp=filter_input(INPUT_POST, "txt_crp", FILTER_SANITIZE_STRING);
         $medicaux->hiv=filter_input(INPUT_POST, "txt_hiv", FILTER_SANITIZE_STRING);
         $medicaux->aghbs=filter_input(INPUT_POST, "txt_aghbs", FILTER_SANITIZE_STRING);
         $medicaux->acvhc=filter_input(INPUT_POST, "txt_acvhc", FILTER_SANITIZE_STRING);
         $medicaux->vaccination_hepatite_b=filter_input(INPUT_POST, "txt_vaccination_hepatite_b", FILTER_SANITIZE_STRING);
         $medicaux->rx_pulmonaire_ict=filter_input(INPUT_POST, "txt_rx_pulmonaire_ict", FILTER_SANITIZE_STRING);
         $medicaux->echographie_cardiaque=filter_input(INPUT_POST, "txt_echographie_cardiaque", FILTER_SANITIZE_STRING);
         $medicaux->vg=filter_input(INPUT_POST, "txt_vg", FILTER_SANITIZE_STRING);
         $medicaux->fes=filter_input(INPUT_POST, "txt_fes", FILTER_SANITIZE_STRING);
         $medicaux->cavite_cardiaques=filter_input(INPUT_POST, "txt_cavite_cardiaques", FILTER_SANITIZE_STRING);
         $medicaux->rdGroup1=filter_input(INPUT_POST, "txt_rdGroup1", FILTER_SANITIZE_STRING);
         $medicaux->fer_oral=filter_input(INPUT_POST, "txt_fer_oral", FILTER_SANITIZE_STRING);
         $medicaux->fer_iv=filter_input(INPUT_POST, "txt_fer_iv", FILTER_SANITIZE_STRING);
         $medicaux->transfusion1=filter_input(INPUT_POST, "txt_transfusion1", FILTER_SANITIZE_STRING);
         $medicaux->nbre_de_fois=filter_input(INPUT_POST, "txt_nbre_de_fois", FILTER_SANITIZE_STRING);
         $medicaux->date_de_la_derniere=filter_input(INPUT_POST, "txt_date_de_la_derniere", FILTER_SANITIZE_STRING);
         $medicaux->traitementantihta=filter_input(INPUT_POST, "txt_traitementantihta", FILTER_SANITIZE_STRING);
         $medicaux->nbre_antihta=filter_input(INPUT_POST, "txt_nbre_antihta", FILTER_SANITIZE_STRING);
         $medicaux->diuretiques=filter_input(INPUT_POST, "txt_diuretiques", FILTER_SANITIZE_STRING);
         $medicaux->calcium_oral=filter_input(INPUT_POST, "txt_calcium", FILTER_SANITIZE_STRING);
          $medicaux->traitement_traditionnel=filter_input(INPUT_POST, "txt_traitement", FILTER_SANITIZE_STRING);
         $medicaux->autre_traitement=filter_input(INPUT_POST, "txt_autre_traitement", FILTER_SANITIZE_STRING);
        //var_dump($medicaux);
         //die();   
$sol=$medicaux->AjouterMedicaux();
if($sol){
    $message="<div class='alert alert-success alert-dismissible fade show'>
                        <button type='button' class='close' data-dismiss='alert'>×</button> <strong>Bien</strong> Enregistrement Effectué <a href='#!' class='alert-link'>Merci!!</a>. </div>";
}

        }
include 'views/medicaux/enregistrement-medicaux.php';
    }
    public function rechercherImprimer() 
    {
        $nbre=0;
        $message="";
        $medicaux= new medicauxmodel();
        if(isset($_POST['btn_rechercher']))
        {
       $sol=$medicaux->RechercherMedicaux($_POST['txt_numero']);

   }
include 'views/medicaux/liste-medicaux.php';
    }
    public function Imprimer() 
    {
        $nbre=0;
        $message="";
        $medicaux= new medicauxmodel();
        if(isset($_GET['id']))
        {

       $sol=$medicaux->RechercherMedicaux($_GET['id']);
       if($sol)
       {
        $numero=$sol[0]['numero'];
        $groupe_sanguin=$sol[0]['groupe_sanguin'];
        $date=$sol[0]['date'];
        $jour_de_dialyse=$sol[0]['jour_de_dialyse'];
        $nom=$sol[0]['nom'];
        $prenom=$sol[0]['prenom'];
        $nom_emprunt=$sol[0]['nom_emprunt'];
        $date_de_naissance=$sol[0]['date_de_naissance'];
        $age=$sol[0]['age'];
        $tranche_age=$sol[0]['tranche_age'];
        $sexe=$sol[0]['sexe'];
        $groupe_ethnie=$sol[0]['groupe_ethnie'];
        $niveau_etude=$sol[0]['niveau_etude'];
        $situation_matri=$sol[0]['situation_matri'];
        $residence=$sol[0]['residence'];
        $quartier=$sol[0]['quartier'];
        $hors_bouake=$sol[0]['hors_bouake'];
        $preciser=$sol[0]['preciser'];
        $hta=$sol[0]['hta'];
        $vih=$sol[0]['vih'];
        $diabete=$sol[0]['diabete'];
        $hta_de_diabete=$sol[0]['hta_de_diabete'];
        $gnc=$sol[0]['gnc'];
        $ntic=$sol[0]['ntic'];
        $pkad=$sol[0]['pkad'];
        $drepanocytose=$sol[0]['drepanocytose'];
        $autre_cause=$sol[0]['autre_cause'];
        $indetermine=$sol[0]['indetermine'];
        $insuffisance_cardique_congestive=$sol[0]['insuffisance_cardique_congestive'];
        $diabete1=$sol[0]['diabete1'];
        $alcool=$sol[0]['alcool'];
        $tabac=$sol[0]['tabac'];
        $vih1=$sol[0]['vih1'];
        $tuberculose=$sol[0]['tuberculose'];
        $atteinte_neurologique=$sol[0]['atteinte_neurologique'];
        $atteinte_rhumatismale=$sol[0]['atteinte_rhumatismale'];
        $hepatopathie=$sol[0]['hepatopathie'];
        $atteinte_intestinale=$sol[0]['atteinte_intestinale'];
        $atteinte_pulmonaire=$sol[0]['atteinte_pulmonaire'];
        $cancer=$sol[0]['cancer'];
        $date_de_diagnostic=$sol[0]['date_de_diagnostic'];
        $duree_de_suivi2=$sol[0]['duree_de_suivi2'];
        $date_de_mise_en_dialyse=$sol[0]['date_de_mise_en_dialyse'];
        $premier_centre_avant_bouake=$sol[0]['premier_centre_avant_bouake'];
        $duree_dans_ce_centre=$sol[0]['duree_dans_ce_centre'];
        $date_de_debut=$sol[0]['date_de_debut'];
        $duree_centre_de_bouake=$sol[0]['duree_centre_de_bouake'];
        $catheter_nombre=$sol[0]['catheter_nombre'];
        $duree_kt1=$sol[0]['duree_kt1'];
        $kt2=$sol[0]['kt2'];
        $kt3=$sol[0]['kt3'];
        $infection=$sol[0]['infection'];
        $dysfonction=$sol[0]['dysfonction'];
        $saignement=$sol[0]['saignement'];
        $maturation_FAV=$sol[0]['maturation_FAV'];
        $FAV=$sol[0]['FAV'];
        $date_de_creation=$sol[0]['date_de_creation'];
        $duree=$sol[0]['duree'];
        $reprise=$sol[0]['reprise'];
        $fifficulte=$sol[0]['fifficulte'];
        $prise_de_poids=$sol[0]['prise_de_poids'];
        $ta_equilibre=$sol[0]['ta_equilibre'];
        $hta1=$sol[0]['hta1'];
        $hta2=$sol[0]['hta2'];
        $vomissements=$sol[0]['vomissements'];
        $prurit=$sol[0]['prurit'];
        $vertiges=$sol[0]['vertiges'];
        $saignements=$sol[0]['saignements'];
        $autres=$sol[0]['autres'];
        $traitement_perdialytique=$sol[0]['traitement_perdialytique'];
        $ssi=$sol[0]['ssi'];
        $transfusion=$sol[0]['transfusion'];
        $antihta=$sol[0]['antihta'];
        $autres1=$sol[0]['autres1'];
        $taux_hemoglobine=$sol[0]['taux_hemoglobine'];
        $taux_albumine=$sol[0]['taux_albumine'];
        $crp=$sol[0]['crp'];
        $hiv=$sol[0]['hiv'];
        $aghbs=$sol[0]['aghbs'];
        $acvhc=$sol[0]['acvhc'];
        $vaccination_hepatite_b=$sol[0]['vaccination_hepatite_b'];
        $rx_pulmonaire_ict=$sol[0]['rx_pulmonaire_ict'];
        $echographie_cardiaque=$sol[0]['echographie_cardiaque'];
        $vg=$sol[0]['vg'];
        $fes=$sol[0]['fes'];
        $cavite_cardiaque=$sol[0]['cavite_cardiaque'];
        $epo=$sol[0]['epo'];
        $fer_oral=$sol[0]['fer_oral'];
        $fer_iv=$sol[0]['fer_iv'];
        $transfusion1=$sol[0]['transfusion1'];
        $nombre_de_fois=$sol[0]['nombre_de_fois'];
        $date_de_la_derniere=$sol[0]['date_de_la_derniere'];
        $traitement_anti_hta=$sol[0]['traitement_anti_hta'];
        $nombre_de_anti_hta=$sol[0]['nombre_de_anti_hta'];
        $diuretiques=$sol[0]['diuretiques'];
        $calcium_oral=$sol[0]['calcium_oral'];
        $traitement_traditionnel=$sol[0]['traitement_traditionnel'];
        $autre_traitement=$sol[0]['autre_traitement'];


       }
       include 'functions/medicauxPdf.php';
       
            }
include 'views/medicaux/liste-medicaux.php';
    }
    public function liste() 
    {
        $nbre=0;
        $message="";
include 'views/medicaux/medicauxListe.php';
    }
}