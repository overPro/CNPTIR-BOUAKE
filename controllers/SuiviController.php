<?php
require 'models/suivi.php';


class suivi {


    public function enregistrement()
    {
        $nbre=0;
        $add=0;
        $message="";
        $group_sanguin="";
   $jour="";
   $nom_prenom="";
   $j1="";
   $j2="";
   $j3="";
   $j4="";
   $j5="";
   $j6="";
   $j7="";
   $j8="";
   $j9="";
   $mois="";
        $suivi=new suivimodel();
if(isset($_POST['btn_ajouter']))
{
    $suivi->mois=filter_input(INPUT_POST, "txt_mois", FILTER_SANITIZE_STRING);
    $suivi->nom_patient=filter_input(INPUT_POST, "txt_nom_patient", FILTER_SANITIZE_STRING);
    $suivi->group_sanguin=filter_input(INPUT_POST, "txt_groupe_sanguin", FILTER_SANITIZE_STRING);
    $suivi->jour=filter_input(INPUT_POST, "txt_jour", FILTER_SANITIZE_STRING);
    $suivi->jour_1=filter_input(INPUT_POST,"txt_jour1", FILTER_SANITIZE_STRING);
    $suivi->jour_2=filter_input(INPUT_POST,"txt_jour2", FILTER_SANITIZE_STRING);
    $suivi->jour_3=filter_input(INPUT_POST,"txt_jour3", FILTER_SANITIZE_STRING);
    $suivi->jour_4=filter_input(INPUT_POST,"txt_jour4", FILTER_SANITIZE_STRING);
    $suivi->jour_5=filter_input(INPUT_POST,"txt_jour5", FILTER_SANITIZE_STRING);
    $suivi->jour_6=filter_input(INPUT_POST,"txt_jour6", FILTER_SANITIZE_STRING);
    $suivi->jour_7=filter_input(INPUT_POST,"txt_jour7", FILTER_SANITIZE_STRING);
    $suivi->jour_8=filter_input(INPUT_POST,"txt_jour8", FILTER_SANITIZE_STRING);
    $suivi->jour_9=filter_input(INPUT_POST,"txt_jour9", FILTER_SANITIZE_STRING);
    $suivi->group=null;
    $suivi->numero_patient=null;
    //var_dump($suivi);
    //die();
    $sol=$suivi->ajouter();
    if($sol)
    {
$message="<div class='alert alert-success alert-dismissible fade show'>
                        <button type='button' class='close' data-dismiss='alert'>×</button> <strong></strong> enregistrement Effectue <a href='#!' class='alert-link'>Merci!!!</a>. </div>
                    </div>";
    }

}
if(isset($_POST['btn_rechercher']))
{
    $add=1;
   $suivi->numero_patient=filter_input(INPUT_POST, "sai_rechercher", FILTER_SANITIZE_STRING);
   $rech=$suivi->rechercher($suivi->numero_patient);
   $mois=$rech[0]['mois'];
   $group_sanguin=$rech[0]['groupe_sanguin'];
   $jour=$rech[0]['jour'];
   $nom_prenom=$rech[0]['nom_prenom'];
   $j1=$rech[0]['j1'];
   $j2=$rech[0]['j2'];
   $j3=$rech[0]['j3'];
   $j4=$rech[0]['j4'];
   $j5=$rech[0]['j5'];
   $j6=$rech[0]['j6'];
   $j7=$rech[0]['j7'];
   $j8=$rech[0]['j8'];
   $j9=$rech[0]['j9'];
   

}
        include 'views/compte/enregistrement-suivi.php';
    }
    public function liste()
    {
        $nbre=0;
         $suivi=new suivimodel();
         $sol=$suivi->liste();
        
        include 'views/compte/liste-suivi.php';
    } 
    public function rechercherImprimer()
    {
        $nbre=0;
        $suivi=new suivimodel();
        if(isset($_POST['btn_rechercher']))
        {
        $a= $suivi->jour=filter_input(INPUT_POST, "txt_jour", FILTER_SANITIZE_STRING);
        $mois=$suivi->rechercherJour($a);
        
    }

        include 'views/compte/rechsuivi.php';
    }


}
