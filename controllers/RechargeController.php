<?php

require 'models/recharge.php';
require 'config/fpdf/fpdf.php';

class recharge {

    public function enregistrement() {

        $recharge = new rechargeModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $recharge->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $recharge->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new rechargeModel();
        }


        $code_recharge = "";
        $montant_recharge = "";
        $date_creation = "";
        $date_utilisation = "";
        $etat_recharge = "";
        $code_agent = "";
        $etat_validation = "";
        $matricule = "";

        $message = "";

        // generateur de code 
        $char = '0123456789';
        $code = '';
        for ($i = 0; $i < 10; $i++) {
            $code .= $char[rand() % strlen($char)];
        }

        $code_trans = date('y') . $code;

        $message = "Saisissez ce code : " . $code_trans;

        if (isset($_POST['btn_ajouter'])) {


            $recharge->code_recharge = $_POST['sai_code_recharge'];
            $recharge->montant_recharge = $_POST['sai_montant_recharge'];
            $recharge->date_creation = $_POST['sai_date_creation'];
            $recharge->date_utilisation = $_POST['sai_date_utilisation'];
            $recharge->etat_recharge = $_POST['sai_etat_recharge'];
            $recharge->code_agent = $_POST['sai_code_agent'];
            $recharge->etat_validation = $_POST['sai_etat_validation'];
            $recharge->matricule = $_POST['sai_matricule'];

            $exec = $recharge->ajouterrecharge();

            if (!empty($exec)) {

                $message = "Enregistrement effectué avec succes !";
            } else {

                $message = "Echec de l'enregistrement ";
            }
        }


// le bouton modifier
        if (isset($_POST['btn_modifier'])) {



            $recharge->code_recharge = $_POST['sai_code_recharge'];
            $recharge->montant_recharge = $_POST['sai_montant_recharge'];
            $recharge->date_creation = $_POST['sai_date_creation'];
            $recharge->date_utilisation = $_POST['sai_date_utilisation'];
            $recharge->etat_recharge = $_POST['sai_etat_recharge'];
            $recharge->code_agent = $_POST['sai_code_agent'];
            $recharge->etat_validation = $_POST['sai_etat_validation'];
            $recharge->matricule = $_POST['sai_matricule'];


            $exec = $recharge->modifierrecharge();

            if (!empty($exec)) {

                $message = "Modification effectuée avec succes !";
            } else {

                $message = "Echec de la modification ";
            }
        } //fin
        // bouton supprimer
        if (isset($_POST['btn_supprimer'])) {
            $recharge->code_recharge = $_POST['sai_code_recharge'];
            $exec = $recharge->supprimerrecharge();

            if (!empty($exec)) {

                $message = "Suppression effectuée avec succes !";
            } else {

                $message = "Echec de la suppression ";
            }
        }

// bouton rechercher par post
        if (isset($_POST['btn_rechercher'])) {

            $log = $_POST['sai_rechercher'];


            $sol = $recharge->rechercherrecharge($log);

            if (!empty($sol)) {

                $code_recharge = $sol[0]['code_recharge'];
                $montant_recharge = $sol[0]['montant_recharge'];
                $date_creation = $sol[0]['date_creation'];
                $date_utilisation = $sol[0]['date_utilisation'];
                $etat_recharge = $sol[0]['etat_recharge'];
                $code_agent = $sol[0]['code_agent'];
                $etat_validation = $sol[0]['etat_validation'];
                $matricule = $sol[0]['matricule'];
            } else {
                $message = "Cette recharge n'existe pas !";
            }
        }


        // bouton rechercher par post
        if (isset($_GET['code'])) {

            $code_recharge = $_GET['code'];


            $sol = $recharge->rechercherrecharge($code_recharge);

            if (!empty($sol)) {

                $code_recharge = $sol[0]['code_recharge'];
                $montant_recharge = $sol[0]['montant_recharge'];
                $date_creation = $sol[0]['date_creation'];
                $date_utilisation = $sol[0]['date_utilisation'];
                $etat_recharge = $sol[0]['etat_recharge'];
                $code_agent = $sol[0]['code_agent'];
                $etat_validation = $sol[0]['etat_validation'];
                $matricule = $sol[0]['matricule'];
            } else {
                $message = "Cette recharge n'existe pas !";
            }
        }

// debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Superviseur' and $_SESSION['role'] != 'Administrateur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }



        include "views/recharge/enregistrement-recharge.php";
    }

    public function validation() {

        $recharge = new rechargeModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $recharge->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $recharge->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new rechargeModel();
        }

        $message = "";
        $code_recharge = "";

        if (isset($_GET['code'])) {
            $numero = $_GET['code'];
            $sol = $recharge->Rechargecarte($numero);
            if (!empty($sol)) {
                $code_recharge = $sol[0]['code_recharge'];
            }
        } //fin

        if (isset($_POST['btn_valider'])) {

            // generateur de code 
        $char = '0123456789';
        $token_exp = '';
        $token_dest = '';
        for ($i = 0; $i < 3; $i++) {
            $token_exp .= $char[rand() % strlen($char)];
            $token_dest .= $char[rand() % strlen($char)];
        }


            $code = $_POST['sai_code_recharge'];
            $sol = $recharge->VerificationRechargeCodeEtat($code);

            if (!empty($sol)) {

                $mont = $sol[0]['montant_recharge'];
                $agent = $_SESSION['matricule'];
                $date = date('Y-m-d');

        $numero_transaction = $sol[0]['code_recharge'];
        $date_transaction = date('Y-m-d');
        $heure_transaction = date('H:i:s');
        $montant_transaction = $sol[0]['montant_recharge'];
        if($montant_transaction<=5000 and $montant_transaction>=500){
           $frais= 200;  
        }
        if($montant_transaction<=50000 and $montant_transaction>5000){
           $frais= 500;  
        }
        if($montant_transaction>50000){
           $frais= ($montant_transaction*0.02);  
        }
        $montant_total= $sol[0]['montant_recharge']-$frais;
        $type_transaction = "Depot";
        $objet_transaction = "Rechargement";
        $numero_expediteur = $_POST['sai_matricule'];
        $numero_destinataire = "Caisse";
        $token_expediteur= $token_exp;
        $token_destinataire= $token_dest;
        $conf_token_expediteur= $token_exp;
        $conf_token_destinataire= $token_dest;
        $part_entreprise= ($frais*40)/100;
        $part_partenaire= ($frais*40)/100;
        $part_autre= ($frais*20)/100;
        $etat_transaction = "Succes";
        //               

    // insertion de la transaction
    $trans = $recharge->AjouterTransaction($numero_transaction,$date_transaction,$heure_transaction, $montant_transaction,$frais,$montant_total,$type_transaction,$objet_transaction,$numero_expediteur,$numero_destinataire,$token_expediteur,$token_destinataire,$conf_token_expediteur,$conf_token_destinataire,$part_entreprise,$part_partenaire,$part_autre,$etat_transaction);

                    if(!empty($trans)) { 

    $validRecharg = $recharge->ValidationRecharge($code, $date, $numero_expediteur,$agent);

  if(!empty($validRecharg)) {

     // rechargement du carte du client(investisseur)   
 $validCompt = $recharge->RechargementCarte($montant_total, $numero_expediteur);

 if(!empty($validCompt)){

    $message = "<p style='color:green'>Vous venez de valider une recharge de" . " " . $mont . " F CFA " . ". Montant du rechargement : ". " ".$montant_total. " F CFA ||".". Frais : ". " ".$frais. " F CFA. </p>";
   

                    } 
}

} else {
                        $message ="<p style='color:red'>Echec de la validation </p>";
                    }
                               
            } else {
                $message = "<p style='color:red'>Ce code est invalide </p>";
            }
        }

// debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Superviseur' and $_SESSION['role'] != 'Investisseur' and $_SESSION['role'] != 'Administrateur' and $_SESSION['role'] != 'Distributeur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }



        include "views/recharge/rechargement-carte.php";
    }

    public function transfert() {

        $recharge = new rechargeModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $recharge->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $recharge->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new rechargeModel();
        }


        $code_recharge = "";
        $montant_recharge = "";
        $date_creation = "";
        $date_utilisation = "";
        $etat_recharge = "";
        $code_agent = "";

        $message = "";

        // generateur de code 
        $char = '0123456789';
        $code = '';
        for ($i = 0; $i < 4; $i++) {
            $code .= $char[rand() % strlen($char)];
        }

        $code_trans = date('dmY') . $code;

        $message = "Saisissez ce code : <p style='color:blue'>" . $code_trans."</p>";

        if (isset($_POST['btn_ajouter'])) {

        if($_POST['sai_code_confirmation']!=$code_trans)
        {
            $message  ="<p style='color:red'>Le code saisi ne correspond pas au code code de confirmation donnée. ! </p>";
        }else{
                   // generateur de code 
          
        $char = '0123456789';
        $token_exp = '';
        $token_dest = '';
        for ($i = 0; $i < 3; $i++) {
            $token_exp .= $char[rand() % strlen($char)];
            $token_dest .= $char[rand() % strlen($char)];
        }

            $mat = $_POST['sai_destinataire'];
            $res = $recharge->VerificationMatricule($mat);

            if (!empty($res)) {

                //
        $numero_transaction = $_POST['sai_code_confirmation'];
        $date_transaction = date('Y-m-d');
        $heure_transaction = date('H:i');
        $montant_transaction = $_POST['sai_montant'];
        $frais= 0;
        $montant_total= $_POST['sai_montant'];
        $type_transaction = "Transfert";
        $objet_transaction = "Rechargement";
        $numero_expediteur = $_POST['sai_expediteur'];
        $numero_destinataire = $_POST['sai_destinataire'];
        $token_expediteur= $token_exp;
        $token_destinataire= $token_dest;
        $conf_token_expediteur= $token_exp;
        $conf_token_destinataire= $token_dest;
        $part_entreprise= 0;
        $part_partenaire= 0;
        $part_autre= 0;
        $etat_transaction = "Succes";

                //

    $exec = $recharge->AjouterTransaction($numero_transaction,$date_transaction,$heure_transaction, $montant_transaction,$frais,$montant_total,$type_transaction,$objet_transaction,$numero_expediteur,$numero_destinataire,$token_expediteur,$token_destinataire,$conf_token_expediteur,$conf_token_destinataire,$part_entreprise,$part_partenaire,$part_autre,$etat_transaction);

                if (!empty($exec)) {

                    $recharge->TransfertCarteVersCarte($numero_expediteur, $numero_destinataire, $montant_transaction);


                   
                    $message ="<p style='color:green'>Transfert effectué avec succes ! </p>";
                } else {

                    $message ="<p style='color:red'>Echec du transfert. ! </p>";
                }
            } else {
                $message ="<p style='color:red'>Ce matricule n'existe pas.! </p>";
                
            }
        }
        
        }

// debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Superviseur' and $_SESSION['role'] != 'Administrateur' and $_SESSION['role'] != 'Investisseur' and $_SESSION['role'] != 'Distributeur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }



        include "views/recharge/transfert-recharge.php";
    }

    public function suivi() {

        $recharge = new rechargeModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $recharge->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $recharge->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new rechargeModel();
        }

        if (isset($_POST['btn_rechercher'])) {

            $matricule = $_POST['sai_matricule'];
            $datedebut = $_POST['sai_date_debut'];
            $datefin = $_POST['sai_date_fin'];


            $sol = $recharge->ListeRechargePeriode($matricule, $datedebut, $datefin);

            $NombreActif = $recharge->NombreActif($matricule,$datedebut, $datefin);
            $NombreInactif = $recharge->NombreInactif($matricule,$datedebut, $datefin);
            $NombreVendu = $recharge->NombreVendu($matricule,$datedebut, $datefin);
            $NombreNonVendu = $recharge->NombreNonVendu($matricule,$datedebut, $datefin);
            $SommeActif = $recharge->SommeActif($matricule,$datedebut, $datefin);
            $SommeInactif = $recharge->SommeInactif($matricule,$datedebut, $datefin);
            $SommeVendu = $recharge->SommeVendu($matricule,$datedebut, $datefin);
            $SommeNonVendu = $recharge->SommeNonVendu($matricule,$datedebut, $datefin);
        }


        // debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Superviseur' and $_SESSION['role'] != 'Administrateur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }

        include "views/recharge/suivi-recharge.php";
    }

    public function vente() {

        $recharge = new rechargeModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $recharge->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $recharge->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new rechargeModel();
        }


        $message = "";

        if ($_SESSION['role'] == 'Superviseur') {
          $sol = $recharge->ImprimerRecharge();
        }else{
            $code = $_SESSION['matricule'];
          $sol = $recharge->ImprimerRechargeEntreprise($code);
        }

// debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Superviseur' and $_SESSION['role'] != 'Administrateur' and $_SESSION['role'] != 'Distributeur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }



        include "views/recharge/tableau-vente.php";
    }

    public function imprime() {

        $recharge = new rechargeModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $recharge->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $recharge->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new rechargeModel();
        }


        if (isset($_POST['btn_imprimer'])) {


        if ($_SESSION['role'] == 'Superviseur') {
          $listes = $recharge->ImprimerRecharge();
        }else{
            $code = $_SESSION['matricule'];
          $listes = $recharge->ImprimerRechargeEntreprise($code);
        }

            //instanciation de la classe FPDF
            $pdf = new FPDF();
            //creation de notre pdf

            $pdf->AddPage();
            $pdf->SetTitle("Carte de recharge", true);
            $inc = 2;
            foreach ($listes as $value) {

                $inc = ($inc == 2) ? 1 : $inc + 1;
                if ($inc == 1) {
                    $yt = $pdf->GetY();
                    $xt = $pdf->GetX();
                    $pdf->SetFont("times", "", 14);
                    $pdf->SetX(20);
                    $pdf->MultiCell(50, 7, "Carte de recharge\n Epencia", 1, "C");
                    $x = $pdf->GetX();
                    $y = $pdf->GetY();
                    $xa = $pdf->GetX();
                    $ya = $pdf->GetY();

                    $pdf->SetXY($x + 60, $y - 10);
                    $pdf->SetFont("times", "B", 11);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->MultiCell(28, 7, $value['montant_recharge'] . " F", 0, "C");
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetFont("times", "", 8);
                    $x = $pdf->GetX();
                    $y = $pdf->GetY();
                    $xb = $pdf->GetX();
                    $yb = $pdf->GetY();
                    $pdf->SetXY($x, $y + 5);
                    $pdf->Cell(8, 7, "REF : ", 0, 0);

                    $char = '0123456789AZERTYUIOPQSDFGHJKLMWXCVBN';
                    $code = '';
                    for ($i = 0; $i < 4; $i++) {
                        $code .= $char[rand() % strlen($char)];
                    }

                    $pdf->Cell(25, 7, $code, 0, 1);
                    $pdf->SetXY($x + 40, $y + 5);
                    $pdf->Cell(20, 7, utf8_decode("CRÉATION :"), 0, 0);
                    $pdf->Cell(20, 7, date('d/m/Y', strtotime($value['date_creation'])), 0, 1);
                    $pdf->SetXY($x, $y + 15);
                    $pdf->SetDrawColor(255, 127, 39);
                    $pdf->SetFont("times", "B", 16);
                    $pdf->SetFillColor(255, 127, 39);
                    $pdf->SetTextColor(255, 255, 255);
                    $pdf->Cell(80, 7, $value['code_recharge'], 1, 1, "C", TRUE);
                    $pdf->SetDrawColor(0, 0, 0);
                    $pdf->SetFillColor(255, 127, 39);
                    $pdf->SetTextColor(0, 0, 0);
                }

                if ($inc == 2) {
                    $pdf->SetFont("times", "", 14);
                    $pdf->SetXY($xt + 100, $yt);
                    $pdf->MultiCell(50, 7, "Carte de recharge\n Epencia", 1, "C");

                    $pdf->SetXY($xa + 148, $ya - 10);
                    $pdf->SetFont("times", "B", 11);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->MultiCell(28, 7, $value['montant_recharge'] . " F", 0, "C");
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetFont("times", "", 8);
                    $pdf->SetXY($xb + 90, $yb + 5);
                    $pdf->Cell(8, 7, "REF : ", 0, 0);

                    $char = '0123456789AZERTYUIOPQSDFGHJKLMWXCVBN';
                    $code = '';
                    for ($i = 0; $i < 4; $i++) {
                        $code .= $char[rand() % strlen($char)];
                    }

                    $pdf->Cell(25, 7, $code, 0, 1);
                    $pdf->SetXY($xb + 130, $yb + 5);
                    $pdf->Cell(20, 7, utf8_decode("CRÉATION :"), 0, 0);
                    $pdf->Cell(20, 7, date('d/m/Y', strtotime($value['date_creation'])), 0, 1);
                    $pdf->SetXY($xb + 90, $yb + 15);
                    $pdf->SetDrawColor(255, 127, 39);
                    $pdf->SetFont("times", "B", 16);
                    $pdf->SetFillColor(255, 127, 39);
                    $pdf->SetTextColor(255, 255, 255);
                    $pdf->Cell(80, 7, $value['code_recharge'], 1, 1, "C", TRUE);
                    $pdf->SetDrawColor(0, 0, 0);
                    $pdf->SetFillColor(255, 127, 39);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetX(5);
                    $pdf->Cell(180, 3, "--------------------------------------------------------------------------------------------------------");
                    $pdf->Ln();
                    $pdf->Ln();
                }
            }
            $pdf->Output("", "", true);
        }

        // debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Superviseur' and $_SESSION['role'] != 'Administrateur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }


        include "views/recharge/imprime-recharge.php";
    }

    public function liste() {

        $recharge = new rechargeModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $recharge->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $recharge->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new rechargeModel();
        }


        $sol = $recharge->listerecharge();


        // debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Administrateur' AND $_SESSION['role'] != 'investisseur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }

        include "views/recharge/liste-recharge.php";
    }



}
