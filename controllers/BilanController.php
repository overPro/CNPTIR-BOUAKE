<?php
require 'models/bilan.php';
class bilan {

    public function enregistrement() 
    { 
        $bilan= new bilanmodel();
        $cr="";
        $u="";
        $groupe_sanguin="";
        $numero_patient="";
        $groupe="";
        $na="";
        $k="";
        $ca="";
        $ph="";
        $gb="";
        $plaq="";
        $hb="";
        $vgm="";
        $ccmh="";
        $crp="";
        $pt="";
        $nbre=0;
        $message="";
        if(isset($_POST['btn_ajouter']))
        {
       $bilan->groupe_sanguin=filter_input(INPUT_POST, "txt_groupe_sanguin", FILTER_SANITIZE_STRING);
       $bilan->nom_prenom=filter_input(INPUT_POST, "txt_nom", FILTER_SANITIZE_STRING);
       $bilan->groupe=filter_input(INPUT_POST, "txt_jour", FILTER_SANITIZE_STRING);
       $bilan->cr=filter_input(INPUT_POST, "txt_cr", FILTER_SANITIZE_STRING);
       $bilan->u=filter_input(INPUT_POST, "txt_u", FILTER_SANITIZE_STRING);
       $bilan->na=filter_input(INPUT_POST, "txt_na", FILTER_SANITIZE_STRING);
       $bilan->k=filter_input(INPUT_POST, "txt_k", FILTER_SANITIZE_STRING);
       $bilan->ca=filter_input(INPUT_POST, "txt_ca", FILTER_SANITIZE_STRING);
       $bilan->ph=filter_input(INPUT_POST, "txt_ph", FILTER_SANITIZE_STRING);
       $bilan->gb=filter_input(INPUT_POST, "txt_gb", FILTER_SANITIZE_STRING);
       $bilan->plaq=filter_input(INPUT_POST, "txt_plaq", FILTER_SANITIZE_STRING);
       $bilan->hb=filter_input(INPUT_POST, "txt_hb", FILTER_SANITIZE_STRING);
       $bilan->vgm=filter_input(INPUT_POST, "txt_vgm", FILTER_SANITIZE_STRING);
       $bilan->ccmh=filter_input(INPUT_POST, "txt_ccmh", FILTER_SANITIZE_STRING);
       $bilan->crp=filter_input(INPUT_POST, "txt_crp", FILTER_SANITIZE_STRING);
       $bilan->pt=filter_input(INPUT_POST, "txt_pt", FILTER_SANITIZE_STRING);
       $bilan->date=date("Y-m-d");
       $bilan->numero_patient=1;
       /*var_dump($bilan);
       die();*/
            $sol=$bilan->ajouterBilan();
            if($sol){
        $message="<div class='alert alert-success alert-dismissible fade show'>
                        <button type='button' class='close' data-dismiss='alert'>×</button> <strong>Bien!</strong> Enregistrement effectué <a href='#!' class='alert-link'>Merci!!</a>. </div>
                    </div>";
                }
        }
include 'views/bilan/enrigistrement-bilan.php';
    }
    public function rechercher() 
    {
        $bilan= new bilanmodel();
        $nbre=0;
         $tab=array();
        if(isset($_POST['btn_rechercher']))
        {
  $bilan->numero_patient=filter_input(INPUT_POST, "txt_rechercher", FILTER_SANITIZE_STRING);            
  $sol=$bilan->rechercher();
if($sol)
{
 /*$tab['cr']=$cr=$sol[0]['cr'];       
 $tab['u']=$u=$sol[0]['u'];       
 $tab['na']=$na=$sol[0]['na'];       
 $tab['k']=$k=$sol[0]['k'];       
 $tab['ca']=$ca=$sol[0]['ca'];       
 $tab['ph']=$ph=$sol[0]['ph'];       
 $tab['gb']=$sol[0]['gb'];       
 $tab['plaq']=$plaq=$sol[0]['plaq'];       
 $tab['hb']=$hb=$sol[0]['hb'];       
 $tab['vgm']=$vgm=$sol[0]['vgm'];       
 $tab['ccmh']=$ccmh=$sol[0]['ccmh'];       
 $tab['crp']=$crp=$sol[0]['crp'];       
 $tab['pt']=$pt=$sol[0]['pt'];       
 $tab['numero_patient']=$numero_patient=$sol[0]['numero_patient'];       
 $tab['nom_prenom']=$nom_prenom=$sol[0]['nom_prenom'];       
 $tab['date']=$date=$sol[0]['date'];       
 $tab['groupe']=$groupe=$sol[0]['groupe'];       
 $tab['groupe_sanguin']=$groupe_sanguin=$sol[0]['groupe_sanguin'];
 $bilan[]=$tab; */      
}
//
}

include 'views/bilan/rechercherbilan.php';
    }

    public function liste() 
    {
        $nbre=0;
        $bilan= new bilanmodel();
        $sol=$bilan->liste();
        if(isset($_POST['btn_ToutImprimer']))
        {
         $cr=$sol[0]['cr'];       
 $u=$sol[0]['u'];       
 $na=$sol[0]['na'];       
 $k=$sol[0]['k'];       
 $ca=$sol[0]['ca'];       
 $ph=$sol[0]['ph'];       
 $sol[0]['gb'];       
 $plaq=$sol[0]['plaq'];       
 $hb=$sol[0]['hb'];       
 $vgm=$sol[0]['vgm'];       
 $ccmh=$sol[0]['ccmh'];       
 $crp=$sol[0]['crp'];       
 $pt=$sol[0]['pt'];       
 $numero_patient=$sol[0]['numero_patient'];       
 $nom_prenom=$sol[0]['nom_prenom'];       
 $date=$sol[0]['date'];       
 $groupe=$sol[0]['groupe'];       
 $groupe_sanguin=$sol[0]['groupe_sanguin'];   
        }

include 'views/bilan/listebilan.php';
    }

 public function imprimer()
    {
          $bilan= new bilanmodel();
        if(isset($_GET['id']))
        {
        $bilan->numero_patient=filter_input(INPUT_GET, "id", FILTER_SANITIZE_STRING);            
        $sol=$bilan->rechercher();
        include 'functions/bilanPdf.php'; 
          
        }
      include 'views/bilan/rechercherbilan.php';
    }
}