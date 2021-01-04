<?php 
require 'models/prescription.php';
class prescription
{

	public function enregistrement()
{
    $prescription=new prescriptionModel();
    $message="";
    $nbre=0;
    if(isset($_POST['btn_ajouter']))
    {
        $prescription->nom=filter_input(INPUT_POST, "txt_nom", FILTER_SANITIZE_STRING);
        $prescription->prenom=filter_input(INPUT_POST, "txt_prenom", FILTER_SANITIZE_STRING);
        $prescription->groupe_sanguin=filter_input(INPUT_POST, "txt_groupe_sanguin", FILTER_SANITIZE_STRING);
        $prescription->voie=filter_input(INPUT_POST, "txt_voie", FILTER_SANITIZE_STRING);
        $prescription->fav=filter_input(INPUT_POST, "txt_fav", FILTER_SANITIZE_STRING);
        $prescription->aiguille=filter_input(INPUT_POST, "txt_aiguille", FILTER_SANITIZE_STRING);
        $prescription->duree=filter_input(INPUT_POST, "txt_duree", FILTER_SANITIZE_STRING);
        $prescription->frequence=filter_input(INPUT_POST, "txt_frequence", FILTER_SANITIZE_STRING);
        $prescription->membrane_dialyse=filter_input(INPUT_POST, "txt_membrane_dialyse", FILTER_SANITIZE_STRING);
        $prescription->type_membrane=filter_input(INPUT_POST, "txt_type_membrane", FILTER_SANITIZE_STRING);
        $prescription->surface=filter_input(INPUT_POST, "txt_surface", FILTER_SANITIZE_STRING);
        $prescription->debit_sanguin=filter_input(INPUT_POST, "txt_debit_sanguin", FILTER_SANITIZE_STRING);
        $prescription->anticoagulation=filter_input(INPUT_POST, "txt_anticoagulation", FILTER_SANITIZE_STRING);
        $prescription->poids=filter_input(INPUT_POST, "txt_poids", FILTER_SANITIZE_STRING);
        $prescription->ultra=filter_input(INPUT_POST, "txt_ultra", FILTER_SANITIZE_STRING);
        $prescription->dialysat=filter_input(INPUT_POST, "txt_dialysat", FILTER_SANITIZE_STRING);
        $prescription->debit_dialysat=filter_input(INPUT_POST, "txt_debit_dialysat", FILTER_SANITIZE_STRING);
        $prescription->cd=filter_input(INPUT_POST, "txt_cd", FILTER_SANITIZE_STRING);
        $prescription->cb=filter_input(INPUT_POST, "txt_cb", FILTER_SANITIZE_STRING);
        $prescription->cp=filter_input(INPUT_POST, "txt_cp", FILTER_SANITIZE_STRING);
        $prescription->cc=filter_input(INPUT_POST, "txt_cc", FILTER_SANITIZE_STRING);
        $prescription->cg=filter_input(INPUT_POST, "txt_cg", FILTER_SANITIZE_STRING);
        $prescription->cm=filter_input(INPUT_POST, "txt_cm", FILTER_SANITIZE_STRING);
        $prescription->branchement=filter_input(INPUT_POST, "txt_branchement", FILTER_SANITIZE_STRING);
        $prescription->transfusion=filter_input(INPUT_POST, "txt_transfusion", FILTER_SANITIZE_STRING);
        $prescription->fer_iv=filter_input(INPUT_POST, "txt_fer_iv", FILTER_SANITIZE_STRING);
        $prescription->epo=filter_input(INPUT_POST, "txt_epo", FILTER_SANITIZE_STRING);
        $prescription->antihta=filter_input(INPUT_POST, "txt_antihta", FILTER_SANITIZE_STRING);
        $prescription->autre_traitement=filter_input(INPUT_POST, "txt_autre_traitement", FILTER_SANITIZE_STRING);
        $prescription->date=date("d-m-Y");
        

$sol=$prescription->ajouterprescription();
        if($sol){
    $message="<div class='alert alert-success alert-dismissible fade show'>
                        <button type='button' class='close' data-dismiss='alert'>×</button> <strong>Bien</strong> Enregistrement Effectué <a href='#!' class='alert-link'>Merci!!</a>. </div>";
}
        /*var_dump($prescription);
        die();*/
    }
    if(isset($_POST['btn_rechercher']))
    {
        
    }
include 'views/prescription/enregistrement-prescription.php';
}
public function rechercher()
{
$message="";
    $prescription=new prescriptionModel();
    $nbre=0;
    if(isset($_POST['btn_rechercher']))
    {

         $prescription->numero_patient=filter_input(INPUT_POST, "txt_rechercher", FILTER_SANITIZE_STRING);
    $sol=$prescription->liste($prescription->numero_patient);
    if(empty($sol)){
    $message="<div class='alert alert-success alert-dismissible fade show'>
                        <button type='button' class='close' data-dismiss='alert'>×</button> <strong>Erreur</strong> Donnee non trouvée <a href='#!' class='alert-link'>Merci!!</a>. </div>";
}
    if($sol)
    {
        $nom=$sol[0]['nom'];
        $prenom=$sol[0]['prenom'];
        $groupe_sanguin=$sol[0]['groupe_sanguin'];
        $voie=$sol[0]['voie'];
        $fav=$sol[0]['fav'];
        $aiguille=$sol[0]['aiguille'];
        $duree=$sol[0]['duree'];
        $frequence=$sol[0]['frequence'];
        $membrane_dialyse=$sol[0]['membrane_dialyse'];
        $type_membrane=$sol[0]['type_membrane'];
        $surface=$sol[0]['surface'];
        $debit_sanguin=$sol[0]['debit_sanguin'];
        $anticoagulation=$sol[0]['anticoagulation'];
        $poids=$sol[0]['poids'];
        $ultra=$sol[0]['ultra'];
        $dialysat=$sol[0]['dialysat'];
        $debit_dialysat=$sol[0]['debit_dialysat'];
        $cd=$sol[0]['cd'];
        $cb=$sol[0]['cb'];
        $cp=$sol[0]['cp'];
        $cc=$sol[0]['cc'];
        $cg=$sol[0]['cg'];
        $cm=$sol[0]['cm'];
        $branchement=$sol[0]['branchement'];
        $transfusion=$sol[0]['transfusion'];
        $fer_iv=$sol[0]['fer_iv'];
        $epo=$sol[0]['epo'];
        $antihta=$sol[0]['antihta'];
        $autre_traitement=$sol[0]['autre_traitement'];
        $date=$sol[0]['date'];

    }
    
}
if(isset($_GET['id']))
{
 $prescription->numero_patient=filter_input(INPUT_GET, "id", FILTER_SANITIZE_STRING);
    $sol=$prescription->liste($prescription->numero_patient);
    if($sol){

   // A faire  
    }
    include 'functions/prescriptionPdf.php';
}
   include 'views/prescription/rechercher-prescription.php';
}

function listePrescription()
{
    $nbre=0;
     $prescription=new prescriptionModel();
     $sol=$prescription->listeP();
     /*var_dump($sol);
     die();*/
    include 'views/prescription/listePrescription.php';
}

}