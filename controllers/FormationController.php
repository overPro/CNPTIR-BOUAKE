<?php 
require 'models/formation.php';
class formation
{

	public function enregistrement()
{

	$formation = new formationModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $formation->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $formation->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new formationModel();
        }

     $code_formation="";
     $module_formation="";
     $cout_formation="";
     $date_formation="";
     $heure_debut="";
     $heure_fin="";
     $duree_heure="";
     $lieu_formation="";
     $formateurs="";
     $cibles="";
     $matricule="";
     $etat_formation="";
    

        $message = "";

        if (isset($_POST['btn_ajouter'])) {



                $formation->code_formation = $_POST['sai_code_formation'];
                $formation->module_formation = $_POST['sai_module_formation'];
                $formation->cout_formation = $_POST['sai_cout_formation'];
                $formation->date_formation = $_POST['sai_date_formation'];
                $formation->heure_debut = $_POST['sai_heure_debut'];
                $formation->heure_fin = $_POST['sai_heure_fin'];
                $formation->duree_heure = $_POST['sai_duree_heure'];
                $formation->lieu_formation = $_POST['sai_lieu_formation'];
                $formation->formateurs = $_POST['sai_formateurs'];
                $formation->cibles = $_POST['sai_cibles'];
                $formation->matricule = $_POST['sai_matricule'];
                $formation->etat_formation = $_POST['sai_etat_formation'];
                 
                $exec = $formation->ajouterformation();

            if (!empty($exec)) {

                $message = "<p style='color:green'>Enregistrement effectué avec succes !</p>";
            } else {

                $message = "<p style='color:red'>Echec de l'enregistrement </p>";
            }
        }
// le bouton modifier
        if (isset($_POST['btn_modifier'])) {

$numero = $_POST['sai_code_formation'];
$verifFormEnCours = $formation->VerificationFormationEnCours($numero);
if(!empty($verifFormEnCours)){
    $message ="<p style='color:red'>Vous ne pouvez plus modifier cette formation car elle a deja ete effectuée.</p>";
}else{

    $formation->code_formation = $_POST['sai_code_formation'];
                $formation->module_formation = $_POST['sai_module_formation'];
                $formation->cout_formation = $_POST['sai_cout_formation'];
                $formation->date_formation = $_POST['sai_date_formation'];
                $formation->heure_debut = $_POST['sai_heure_debut'];
                $formation->heure_fin = $_POST['sai_heure_fin'];
                $formation->duree_heure = $_POST['sai_duree_heure'];
                $formation->lieu_formation = $_POST['sai_lieu_formation'];
                $formation->formateurs = $_POST['sai_formateurs'];
                $formation->cibles = $_POST['sai_cibles'];
                $formation->matricule = $_POST['sai_matricule'];
                $formation->etat_formation = $_POST['sai_etat_formation'];
            
            
            $exec = $formation->modifierformation();
            

            if (!empty($exec)) {

                $message = "<p style='color:green'>Modification effectuée avec succes !</p>";
            } else {

                $message = "<p style='color:red'>Echec de la modification </p>";
            }

}

            
        }

        // bouton supprimer
        if (isset($_POST['btn_supprimer'])) {

$numero = $_POST['sai_code_formation'];
$verifFormEnCours = $formation->VerificationFormationEnCours($numero);
if(!empty($verifFormEnCours)){
    $message ="<p style='color:red'>Vous ne pouvez plus supprimer cette formation car elle a deja ete effectuée.</p>";
}else{
            $formation->code_formation = $_POST['sai_code_formation'];
            $exec = $formation->supprimerformation();

            if (!empty($exec)) {

                $message = "<p style='color:green'>Suppression effectuée avec succes !</p>";
            } else {

                $message = "<p style='color:red'>Echec de la suppression </p>";
            }
            }
        }

// bouton rechercher par post
        if (isset($_POST['btn_rechercher'])) {

            $log = $_POST['sai_rechercher'];


            $sol = $formation->RechercherFormation($log);

            if (!empty($sol)) {

                $code_formation = $sol[0]['code_formation'];
                $module_formation = $sol[0]['module_formation'];
                $cout_formation = $sol[0]['cout_formation'];
                $date_formation = $sol[0]['date_formation'];
        		$heure_debut = $sol[0]['heure_debut'];
        		$heure_fin = $sol[0]['heure_fin'];
        		$duree_heure = $sol[0]['duree_heure'];
        		$lieu_formation = $sol[0]['lieu_formation'];
        		$formateurs = $sol[0]['formateurs'];
        		$cibles = $sol[0]['cibles'];
                $matricule = $sol[0]['matricule'];
        		$etat_formation = $sol[0]['etat_formation'];
                
            } else {


                $message = "<p style='color:red'>Cette formation n'existe pas !</p>";
            }
        }




        // bouton rechercher par post
        if (isset($_GET['code'])) {

            $code = $_GET['code'];


            $sol = $formation->RechercherFormation($code);

            if (!empty($sol)) {

                $code_formation = $sol[0]['code_formation'];
                $module_formation = $sol[0]['module_formation'];
                $cout_formation = $sol[0]['cout_formation'];
                $date_formation = $sol[0]['date_formation'];
                $heure_debut = $sol[0]['heure_debut'];
                $heure_fin = $sol[0]['heure_fin'];
                $duree_heure = $sol[0]['duree_heure'];
                $lieu_formation = $sol[0]['lieu_formation'];
                $formateurs = $sol[0]['formateurs'];
                $cibles = $sol[0]['cibles'];
                $matricule = $sol[0]['matricule'];
                $etat_formation = $sol[0]['etat_formation'];
        		
            }
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

	include "views/formation/enregistrement-formation.php";
}


public function liste()
{

    $formation = new formationModel();
    $message ="";
        if (!empty($_SESSION['user_id'])) {
            $nnl = $formation->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $formation->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new formationModel();
        }

        $sol = $formation->ListeFormation();
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

    include "views/formation/liste-formation.php";
}

public function listes()
{

    $formation = new formationModel();
    $message ="";
        if (!empty($_SESSION['user_id'])) {
            $nnl = $formation->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $formation->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new formationModel();
        }

        if(isset($_POST['btn_rechercher'])){
            $code = $_POST['sai_matricule'];
            $sol = $formation->ListeFormationEntreprise($code);
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

    include "views/formation/liste-formation-entreprise.php";
}



public function auditeurs()
{

    $formation = new formationModel();
    $message ="";
     $matricule='';
        if (!empty($_SESSION['user_id'])) {
            $nnl = $formation->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $formation->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new formationModel();
        }

        if(isset($_POST['btn_rechercher'])){
            $code = $_POST['sai_matricule'];
            $sol = $formation->ListeAuditeursEntreprise($code);
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

    include "views/formation/auditeurs-formation.php";
}


public function planning()
{

    $formation = new formationModel();
    $message ="";
        if (!empty($_SESSION['user_id'])) {
            $nnl = $formation->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $formation->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new formationModel();
        }

        $annee = date('Y');
        $sol = $formation->ListeFormationAnnee($annee);


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

    include "views/formation/planning-formation.php";
}


public function suivi()
{

    $formation = new formationModel();
    $message ="";
        if (!empty($_SESSION['user_id'])) {
            $nnl = $formation->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $formation->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new formationModel();
        }

        if(isset($_POST['btn_rechercher'])){
            $annee = $_POST['sai_annee'];
        $matricule = $_POST['sai_matricule'];
        $sol = $formation->ListeFormationAnneeMatricule($annee,$matricule);
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

    include "views/formation/formation-suivi.php";
}





}



 ?>