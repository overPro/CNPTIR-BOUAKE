<?php 
require 'models/investissement.php';
class investissement
{

	public function enregistrement()
{

	$investissement = new investissementmodel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $investissement->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $investissement->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new investissementmodel();
        }

      $numero_contrat="";
      $matricule="";
      $capital="";
      $taux_mensuel="";
      $echeancier_mensuel="";
      $taux_annuel="";
      $echeancier_annuel="";
     $solde_final="";
     $duree_contrat="";
    $frequence_paiement="";
     $date_versement1="";
     $montant_versement1="";
     $etat_versement1 = "";
     $date_versement2="";
     $montant_versement2="";
     $etat_versement2 = "";
     $date_versement3="";
     $montant_versement3="";
     $etat_versement3 = "";
     $date_versement4="";
     $montant_versement4="";
     $etat_versement4 = "";
     $date_versement5="";
    $montant_versement5="";
    $etat_versement5 = "";
     $date_versement6="";
    $montant_versement6="";
    $etat_versement6 = "";
     $date_versement7="";
    $montant_versement7="";
    $etat_versement7 = "";
     $date_versement8="";
     $montant_versement8="";
     $etat_versement8 = "";
    $date_versement9="";
     $montant_versement9="";
     $etat_versement9 = "";
     $date_versement10="";
     $montant_versement10="";
     $etat_versement10 = "";
    $date_versement11="";
     $montant_versement11="";
     $etat_versement11 = "";
    $date_versement12="";
     $montant_versement12="";
     $etat_versement12 = "";
     $part_entreprise = "";
     $etat_capital="";
     $etat_investissement="";
    

        $message = "";

        if (isset($_POST['btn_ajouter'])) {

                 $investissement->numero_contrat = $_POST['sai_numero_contrat'];
                $investissement->matricule = $_POST['sai_matricule'];
                $investissement->capital = $_POST['sai_capital'];
                $investissement->taux_mensuel = $_POST['sai_taux_mensuel'];
                $investissement->echeancier_mensuel = $_POST['sai_echeancier_mensuel'];
                $investissement->taux_annuel = $_POST['sai_taux_annuel'];
                $investissement->echeancier_annuel = $_POST['sai_echeancier_annuel'];
                $investissement->solde_final = $_POST['sai_solde_final'];
                $investissement->duree_contrat = $_POST['sai_duree_contrat'];
                $investissement->frequence_paiement = $_POST['sai_frequence_paiement'];
                $investissement->date_versement1 = $_POST['sai_date_versement1'];
                $investissement->montant_versement1 = $_POST['sai_montant_versement1'];
                $investissement->etat_versement1 = $_POST['sai_etat_versement1'];
                $investissement->date_versement2 = $_POST['sai_date_versement2'];
                $investissement->montant_versement2 = $_POST['sai_montant_versement2'];
                $investissement->etat_versement2 = $_POST['sai_etat_versement2'];
                $investissement->date_versement3 = $_POST['sai_date_versement3'];
                $investissement->montant_versement3 = $_POST['sai_montant_versement3'];
                $investissement->etat_versement3 = $_POST['sai_etat_versement3'];
                 $investissement->date_versement4 = $_POST['sai_date_versement4'];
                $investissement->montant_versement4 = $_POST['sai_montant_versement4'];
                $investissement->etat_versement4 = $_POST['sai_etat_versement4'];
                 $investissement->date_versement5 = $_POST['sai_date_versement5'];
                $investissement->montant_versement5 = $_POST['sai_montant_versement5'];
                $investissement->etat_versement5 = $_POST['sai_etat_versement5'];
                 $investissement->date_versement6 = $_POST['sai_date_versement6'];
                $investissement->montant_versement6 = $_POST['sai_montant_versement6'];
                $investissement->etat_versement6 = $_POST['sai_etat_versement6'];
                $investissement->date_versement7 = $_POST['sai_date_versement7'];
                $investissement->montant_versement7 = $_POST['sai_montant_versement7'];
                $investissement->etat_versement7 = $_POST['sai_etat_versement7'];
                $investissement->date_versement8 = $_POST['sai_date_versement8'];
                $investissement->montant_versement8 = $_POST['sai_montant_versement8'];
                $investissement->etat_versement8 = $_POST['sai_etat_versement8'];
                $investissement->date_versement9 = $_POST['sai_date_versement9'];
                $investissement->montant_versement9 = $_POST['sai_montant_versement9'];
                $investissement->etat_versement9 = $_POST['sai_etat_versement9'];
                $investissement->date_versement10 = $_POST['sai_date_versement10'];
                $investissement->montant_versement10 = $_POST['sai_montant_versement10'];
                $investissement->etat_versement10 = $_POST['sai_etat_versement10'];
                 $investissement->date_versement11 = $_POST['sai_date_versement11'];
                $investissement->montant_versement11 = $_POST['sai_montant_versement11'];
                $investissement->etat_versement11 = $_POST['sai_etat_versement11'];
                 $investissement->date_versement12 = $_POST['sai_date_versement12'];
                $investissement->montant_versement12 = $_POST['sai_montant_versement12'];
                $investissement->etat_versement12 = $_POST['sai_etat_versement12'];
                $investissement->part_entreprise = $_POST['sai_part_entreprise'];
                $investissement->etat_capital = $_POST['sai_etat_capital'];
                $investissement->etat_investissement = $_POST['sai_etat_investissement'];
                
                $exec = $investissement->ajouterinvestissement();

            if (!empty($exec)) {

                $message = "Enregistrement effectué avec succes !";
            } else {

                $message = "Echec de l'enregistrement ";
            }
        }
// le bouton modifier
        if (isset($_POST['btn_modifier'])) {

                $investissement->numero_contrat = $_POST['sai_numero_contrat'];
                $investissement->matricule = $_POST['sai_matricule'];
                $investissement->capital = $_POST['sai_capital'];
                $investissement->taux_mensuel = $_POST['sai_taux_mensuel'];
                $investissement->echeancier_mensuel = $_POST['sai_echeancier_mensuel'];
                $investissement->taux_annuel = $_POST['sai_taux_annuel'];
                $investissement->echeancier_annuel = $_POST['sai_echeancier_annuel'];
                $investissement->solde_final = $_POST['sai_solde_final'];
                $investissement->duree_contrat = $_POST['sai_duree_contrat'];
                $investissement->frequence_paiement = $_POST['sai_frequence_paiement'];
                $investissement->date_versement1 = $_POST['sai_date_versement1'];
                $investissement->montant_versement1 = $_POST['sai_montant_versement1'];
                $investissement->etat_versement1 = $_POST['sai_etat_versement1'];
                $investissement->date_versement2 = $_POST['sai_date_versement2'];
                $investissement->montant_versement2 = $_POST['sai_montant_versement2'];
                $investissement->etat_versement2 = $_POST['sai_etat_versement2'];
                $investissement->date_versement3 = $_POST['sai_date_versement3'];
                $investissement->montant_versement3 = $_POST['sai_montant_versement3'];
                $investissement->etat_versement3 = $_POST['sai_etat_versement3'];
                 $investissement->date_versement4 = $_POST['sai_date_versement4'];
                $investissement->montant_versement4 = $_POST['sai_montant_versement4'];
                $investissement->etat_versement4 = $_POST['sai_etat_versement4'];
                 $investissement->date_versement5 = $_POST['sai_date_versement5'];
                $investissement->montant_versement5 = $_POST['sai_montant_versement5'];
                $investissement->etat_versement5 = $_POST['sai_etat_versement5'];
                 $investissement->date_versement6 = $_POST['sai_date_versement6'];
                $investissement->montant_versement6 = $_POST['sai_montant_versement6'];
                $investissement->etat_versement6 = $_POST['sai_etat_versement6'];
                $investissement->date_versement7 = $_POST['sai_date_versement7'];
                $investissement->montant_versement7 = $_POST['sai_montant_versement7'];
                $investissement->etat_versement7 = $_POST['sai_etat_versement7'];
                $investissement->date_versement8 = $_POST['sai_date_versement8'];
                $investissement->montant_versement8 = $_POST['sai_montant_versement8'];
                $investissement->etat_versement8 = $_POST['sai_etat_versement8'];
                $investissement->date_versement9 = $_POST['sai_date_versement9'];
                $investissement->montant_versement9 = $_POST['sai_montant_versement9'];
                $investissement->etat_versement9 = $_POST['sai_etat_versement9'];
                $investissement->date_versement10 = $_POST['sai_date_versement10'];
                $investissement->montant_versement10 = $_POST['sai_montant_versement10'];
                $investissement->etat_versement10 = $_POST['sai_etat_versement10'];
                 $investissement->date_versement11 = $_POST['sai_date_versement11'];
                $investissement->montant_versement11 = $_POST['sai_montant_versement11'];
                $investissement->etat_versement11 = $_POST['sai_etat_versement11'];
                 $investissement->date_versement12 = $_POST['sai_date_versement12'];
                $investissement->montant_versement12 = $_POST['sai_montant_versement12'];
                $investissement->etat_versement12 = $_POST['sai_etat_versement12'];
                $investissement->part_entreprise = $_POST['sai_part_entreprise'];
                $investissement->etat_capital = $_POST['sai_etat_capital'];
                $investissement->etat_investissement = $_POST['sai_etat_investissement'];
            
            $exec = $investissement->modifierinvestissement();
            

            if (!empty($exec)) {

                $message = "Modification effectuée avec succes !";
            } else {

                $message = "Echec de la modification ";
            }
        }

        // bouton supprimer
        if (isset($_POST['btn_supprimer'])) {
            $investissement->numero_contrat = $_POST['sai_numero_contrat'];
            $exec = $investissement->supprimerinvestissement();

            if (!empty($exec)) {

                $message = "Suppression effectuée avec succes !";
            } else {

                $message = "Echec de la suppression ";
            }
        }

// bouton rechercher par post
        if (isset($_POST['btn_rechercher'])) {

            $log = $_POST['sai_rechercher'];


            $sol = $investissement->RechercherInvestissement($log);

            if (!empty($sol)) {

                $numero_contrat = $sol[0]['numero_contrat'];
                
                $capital = $sol[0]['capital'];
                $matricule = $sol[0]['matricule'];
                $echeancier_mensuel = $sol[0]['echeancier_mensuel'];
                $taux_mensuel = $sol[0]['taux_mensuel'];
                $taux_annuel = $sol[0]['taux_annuel'];
                $echeancier_annuel = $sol[0]['echeancier_annuel'];
                $solde_final = $sol[0]['solde_final'];
                $duree_contrat = $sol[0]['duree_contrat'];
                $frequence_paiement = $sol[0]['frequence_paiement'];
                $date_versement1 = $sol[0]['date_versement1'];
                $montant_versement1 = $sol[0]['montant_versement1'];
                $etat_versement1 = $sol[0]['etat_versement1'];
                $date_versement2 = $sol[0]['date_versement2'];
                $montant_versement2 = $sol[0]['montant_versement2'];
                $etat_versement2 = $sol[0]['etat_versement2'];
                $date_versement3 = $sol[0]['date_versement3'];
                $montant_versement3 = $sol[0]['montant_versement3'];
                $etat_versement3 = $sol[0]['etat_versement3'];
                $date_versement4 = $sol[0]['date_versement4'];
                $montant_versement4 = $sol[0]['montant_versement4'];
                $etat_versement4 = $sol[0]['etat_versement4'];
                $date_versement5 = $sol[0]['date_versement5'];
                $montant_versement5 = $sol[0]['montant_versement5'];
                $etat_versement5 = $sol[0]['etat_versement5'];
                $date_versement6 = $sol[0]['date_versement6'];
                $montant_versement6 = $sol[0]['montant_versement6'];
                $etat_versement6 = $sol[0]['etat_versement6'];
                $date_versement7 = $sol[0]['date_versement7'];
                $montant_versement7 = $sol[0]['montant_versement7'];
                $etat_versement7 = $sol[0]['etat_versement7'];
                $date_versement8 = $sol[0]['date_versement8'];
                $montant_versement8 = $sol[0]['montant_versement8'];
                $etat_versement8 = $sol[0]['etat_versement8'];
                $date_versement9 = $sol[0]['date_versement9'];
                $montant_versement9 = $sol[0]['montant_versement9'];
                $etat_versement9 = $sol[0]['etat_versement9'];
                $date_versement10 = $sol[0]['date_versement10'];
                $montant_versement10 = $sol[0]['montant_versement10'];
                $etat_versement10 = $sol[0]['etat_versement10'];
                $date_versement11 = $sol[0]['date_versement11'];
                $montant_versement11 = $sol[0]['montant_versement11'];
                $etat_versement11 = $sol[0]['etat_versement11'];
                $date_versement12 = $sol[0]['date_versement12'];
                $montant_versement12 = $sol[0]['montant_versement12'];
                $etat_versement12 = $sol[0]['etat_versement12'];
                $part_entreprise = $sol[0]['part_entreprise'];
                $etat_capital = $sol[0]['etat_capital'];
                $etat_investissement = $sol[0]['etat_investissement'];
                
            } else {


                $message = "Cet investissement n'existe pas !";
            }
        }




        // bouton rechercher par post
        if (isset($_GET['numero_contrat'])) {

            $numero = $_GET['numero_contrat'];


            $sol = $investissement->RechercherInvestissement($numero);

            if (!empty($sol)) {

                $numero_contrat = $sol[0]['numero_contrat'];
                
                $capital = $sol[0]['capital'];
                $matricule = $sol[0]['matricule'];
                $echeancier_mensuel = $sol[0]['echeancier_mensuel'];
                $taux_mensuel = $sol[0]['taux_mensuel'];
                $taux_annuel = $sol[0]['taux_annuel'];
                $echeancier_annuel = $sol[0]['echeancier_annuel'];
                $solde_final = $sol[0]['solde_final'];
                $duree_contrat = $sol[0]['duree_contrat'];
                $frequence_paiement = $sol[0]['frequence_paiement'];
                $date_versement1 = $sol[0]['date_versement1'];
                $montant_versement1 = $sol[0]['montant_versement1'];
                $etat_versement1 = $sol[0]['etat_versement1'];
                $date_versement2 = $sol[0]['date_versement2'];
                $montant_versement2 = $sol[0]['montant_versement2'];
                $etat_versement2 = $sol[0]['etat_versement2'];
                $date_versement3 = $sol[0]['date_versement3'];
                $montant_versement3 = $sol[0]['montant_versement3'];
                $etat_versement3 = $sol[0]['etat_versement3'];
                $date_versement4 = $sol[0]['date_versement4'];
                $montant_versement4 = $sol[0]['montant_versement4'];
                $etat_versement4 = $sol[0]['etat_versement4'];
                $date_versement5 = $sol[0]['date_versement5'];
                $montant_versement5 = $sol[0]['montant_versement5'];
                $etat_versement5 = $sol[0]['etat_versement5'];
                $date_versement6 = $sol[0]['date_versement6'];
                $montant_versement6 = $sol[0]['montant_versement6'];
                $etat_versement6 = $sol[0]['etat_versement6'];
                $date_versement7 = $sol[0]['date_versement7'];
                $montant_versement7 = $sol[0]['montant_versement7'];
                $etat_versement7 = $sol[0]['etat_versement7'];
                $date_versement8 = $sol[0]['date_versement8'];
                $montant_versement8 = $sol[0]['montant_versement8'];
                $etat_versement8 = $sol[0]['etat_versement8'];
                $date_versement9 = $sol[0]['date_versement9'];
                $montant_versement9 = $sol[0]['montant_versement9'];
                $etat_versement9 = $sol[0]['etat_versement9'];
                $date_versement10 = $sol[0]['date_versement10'];
                $montant_versement10 = $sol[0]['montant_versement10'];
                $etat_versement10 = $sol[0]['etat_versement10'];
                $date_versement11 = $sol[0]['date_versement11'];
                $montant_versement11 = $sol[0]['montant_versement11'];
                $etat_versement11 = $sol[0]['etat_versement11'];
                $date_versement12 = $sol[0]['date_versement12'];
                $montant_versement12 = $sol[0]['montant_versement12'];
                $etat_versement12 = $sol[0]['etat_versement12'];
                $part_entreprise = $sol[0]['part_entreprise'];
                $etat_capital = $sol[0]['etat_capital'];
                $etat_investissement = $sol[0]['etat_investissement'];
                
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

	include "views/investissement/enregistrement-investissement.php";
}


public function suivi()
{

    $investissement = new investissementModel();
    $message ="";
        if (!empty($_SESSION['user_id'])) {
            $nnl = $investissement->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $investissement->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new investissementModel();
        }

        if(isset($_POST['btn_rechercher'])){
            $matricule = $_POST['sai_matricule'];
            $datedebut = $_POST['sai_date_debut'];
            $datefin = $_POST['sai_date_fin'];
            $sol = $investissement->ListeInvestissementPeriode($matricule,$datedebut,$datefin);
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

    include "views/investissement/suivi-investissement.php";
}



    public function visualisation()
{

    $investissement = new investissementmodel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $investissement->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $investissement->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new investissementmodel();
        }

     $numero_contrat="";
      $matricule="";
      $capital="";
      $taux_mensuel="";
      $echeancier_mensuel="";
      $taux_annuel="";
      $echeancier_annuel="";
     $solde_final="";
     $duree_contrat="";
    $frequence_paiement="";
     $date_versement1="";
     $montant_versement1="";
     $etat_versement1 = "";
     $date_versement2="";
     $montant_versement2="";
     $etat_versement2 = "";
     $date_versement3="";
     $montant_versement3="";
     $etat_versement3 = "";
     $date_versement4="";
     $montant_versement4="";
     $etat_versement4 = "";
     $date_versement5="";
    $montant_versement5="";
    $etat_versement5 = "";
     $date_versement6="";
    $montant_versement6="";
    $etat_versement6 = "";
     $date_versement7="";
    $montant_versement7="";
    $etat_versement7 = "";
     $date_versement8="";
     $montant_versement8="";
     $etat_versement8 = "";
    $date_versement9="";
     $montant_versement9="";
     $etat_versement9 = "";
     $date_versement10="";
     $montant_versement10="";
     $etat_versement10 = "";
    $date_versement11="";
     $montant_versement11="";
     $etat_versement11 = "";
    $date_versement12="";
     $montant_versement12="";
     $etat_versement12 = "";
     $part_entreprise = "";
     $etat_capital="";
     $etat_investissement="";
    

        $message = "";

       
        // bouton rechercher par post
        if (isset($_GET['code'])) {

            $numero = $_GET['code'];


            $sol = $investissement->RechercherInvestissement($numero);

            if (!empty($sol)) {

               $numero_contrat = $sol[0]['numero_contrat'];
                
                $capital = $sol[0]['capital'];
                $echeancier_mensuel = $sol[0]['echeancier_mensuel'];
                $taux_annuel = $sol[0]['taux_annuel'];
                $echeancier_annuel = $sol[0]['echeancier_annuel'];
                $solde_final = $sol[0]['solde_final'];
                $duree_contrat = $sol[0]['duree_contrat'];
                $frequence_paiement = $sol[0]['frequence_paiement'];
                $investissement = $sol[0]['investissement'];
                $montant_versement1 = $sol[0]['montant_versement1'];
                $etat_versement1 = $sol[0]['etat_versement1'];
                $date_versement2 = $sol[0]['date_versement2'];
                $montant_versement2 = $sol[0]['montant_versement2'];
                $etat_versement2 = $sol[0]['etat_versement2'];
                $date_versement3 = $sol[0]['date_versement3'];
                $montant_versement3 = $sol[0]['montant_versement3'];
                $etat_versement3 = $sol[0]['etat_versement3'];
                $date_versement4 = $sol[0]['date_versement4'];
                $montant_versement4 = $sol[0]['montant_versement4'];
                $etat_versement4 = $sol[0]['etat_versement4'];
                $date_versement5 = $sol[0]['date_versement5'];
                $montant_versement5 = $sol[0]['montant_versement5'];
                $etat_versement5 = $sol[0]['etat_versement5'];
                $date_versement6 = $sol[0]['date_versement6'];
                $montant_versement6 = $sol[0]['montant_versement6'];
                $etat_versement6 = $sol[0]['etat_versement6'];
                $date_versement7 = $sol[0]['date_versement7'];
                $montant_versement7 = $sol[0]['montant_versement7'];
                $etat_versement7 = $sol[0]['etat_versement7'];
                $date_versement8 = $sol[0]['date_versement8'];
                $montant_versement8 = $sol[0]['montant_versement8'];
                $etat_versement8 = $sol[0]['etat_versement8'];
                $date_versement9 = $sol[0]['date_versement9'];
                $montant_versement9 = $sol[0]['montant_versement9'];
                $etat_versement9 = $sol[0]['etat_versement9'];
                $date_versement10 = $sol[0]['date_versement10'];
                $montant_versement10 = $sol[0]['montant_versement10'];
                $etat_versement10 = $sol[0]['etat_versement10'];
                $date_versement11 = $sol[0]['date_versement11'];
                $montant_versement11 = $sol[0]['montant_versement11'];
                $etat_versement11 = $sol[0]['etat_versement11'];
                $date_versement12 = $sol[0]['date_versement12'];
                $montant_versement12 = $sol[0]['montant_versement12'];
                $etat_versement12 = $sol[0]['etat_versement12'];
                $part_entreprise = $sol[0]['part_entreprise'];
                $etat_capital = $sol[0]['etat_capital'];
                $etat_investissement = $sol[0]['etat_investissement'];
                
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

    include "views/investissement/visualisation-investissement.php";
}




public function liste() {

        $investissement = new investissementModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $investissement->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $investissement->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new investissementModel();
        }

        if (isset($_POST['btn_rechercher'])) {

            $datedebut = $_POST['sai_date_debut'];
            $datefin = $_POST['sai_date_fin'];
            $matricule = $_POST['sai_matricule'];


            $sol = $investissement->ListeInvestissementPeriodeMatricule($matricule,$datedebut,$datefin);

            
        }


        // debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Superviseur' and $_SESSION['role'] != 'Administrateur' and $_SESSION['role'] != 'Distributeur' and $_SESSION['role'] != 'Investisseur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }

        include "views/investissement/liste-investissement.php";
    }



}



 ?>