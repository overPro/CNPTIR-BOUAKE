<?php

require 'models/offre_emploi.php';

class offre {

    public function enregistrement() {

        $offre = new offreModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $offre->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $offre->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new offreModel();
        }

        $code = "";
        $intitule = "";
        $type = "";
        $profil = "";
        $missions = "";
        $contacts = "";
        $date_creation = "";
        $date_expiration = "";
        $nombre_poste = "";
        $matricule = "";
        $etat_disponibilite = "";
        $etat_offre = "";


        $message = "";

        if (isset($_POST['btn_ajouter'])) {

            $offre->code = $_POST['sai_code'];
            $offre->intitule = $_POST['sai_intitule'];
            $offre->type = $_POST['sai_type'];
            $offre->profil = $_POST['sai_profil'];
            $offre->missions = $_POST['sai_missions'];
            $offre->contacts = $_POST['sai_contacts'];
            $offre->date_creation = $_POST['sai_date_creation'];
            $offre->date_expiration = $_POST['sai_date_expiration'];
            $offre->nombre_poste = $_POST['sai_nombre_poste'];
            $offre->matricule = $_POST['sai_matricule'];
            $offre->etat_disponibilite = $_POST['sai_etat_disponibilite'];
            $offre->etat_offre = $_POST['sai_etat_offre'];

            $exec = $offre->AjouterOffre();

            if (!empty($exec)) {

                $message = "Enregistrement effectué avec succes !";
            } else {

                $message = "Echec de l'enregistrement ";
            }
        }
// le bouton modifier
        if (isset($_POST['btn_modifier'])) {

            $numero = $_POST['sai_code'];
            $verifOffreEnCours = $offre->VerificationOffreEnCours($numero);
            if (!empty($verifOffreEnCours)) {
                $message = "<p style='color:red'>Vous ne pouvez plus modifier cette formation car elle a deja ete effectuée.</p>";
            } else {

                $offre->code = $_POST['sai_code'];
                $offre->intitule = $_POST['sai_intitule'];
                $offre->type = $_POST['sai_type'];
                $offre->profil = $_POST['sai_profil'];
                $offre->missions = $_POST['sai_missions'];
                $offre->contacts = $_POST['sai_contacts'];
                $offre->date_creation = $_POST['sai_date_creation'];
                $offre->date_expiration = $_POST['sai_date_expiration'];
                $offre->nombre_poste = $_POST['sai_nombre_poste'];
                $offre->matricule = $_POST['sai_matricule'];
                $offre->etat_disponibilite = $_POST['sai_etat_disponibilite'];
                $offre->etat_offre = $_POST['sai_etat_offre'];


                $exec = $offre->ModifierOffre();


                if (!empty($exec)) {

                    $message = "<p style='color:green'>Modification effectuée avec succes !</p>";
                } else {

                    $message = "<p style='color:red'>Echec de la modification </p>";
                }
            }
        }
        // bouton supprimer
        if (isset($_POST['btn_supprimer'])) {

            $numero = $_POST['sai_code'];
            $verifOffreEnCours = $offre->VerificationOffreEnCours($numero);
            if (!empty($verifOffreEnCours)) {
                $message = "<p style='color:red'>Vous ne pouvez plus modifier cette formation car elle a deja ete effectuée.</p>";
            } else {
                $offre->code = $_POST['sai_code'];
                $exec = $offre->SupprimerOffre();

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


            $sol = $offre->RechercherOffre($log);

            if (!empty($sol)) {

                $code = $sol[0]['code'];
                $intitule = $sol[0]['intitule'];
                $type = $sol[0]['type'];
                $profil = $sol[0]['profil'];
                $missions = $sol[0]['missions'];
                $contacts = $sol[0]['contacts'];
                $date_creation = $sol[0]['date_creation'];
                $date_expiration = $sol[0]['date_expiration'];
                $nombre_poste = $sol[0]['nombre_poste'];
                $matricule = $sol[0]['matricule'];
                $etat_disponibilite = $sol[0]['etat_disponibilite'];
                $etat_offre = $sol[0]['etat_offre'];
            } else {


                $message = "Cette offre n'existe pas !";
            }
        }




        // bouton rechercher par post
        if (isset($_GET['code'])) {

            $code_offre = $_GET['code'];


            $sol = $offre->RechercherOffre($code_offre);

            if (!empty($sol)) {

                $code = $sol[0]['code'];
                $intitule = $sol[0]['intitule'];
                $type = $sol[0]['type'];
                $profil = $sol[0]['profil'];
                $missions = $sol[0]['missions'];
                $contacts = $sol[0]['contacts'];
                $date_creation = $sol[0]['date_creation'];
                $date_expiration = $sol[0]['date_expiration'];
                $nombre_poste = $sol[0]['nombre_poste'];
                $matricule = $sol[0]['matricule'];
                $etat_disponibilite = $sol[0]['etat_disponibilite'];
                $etat_offre = $sol[0]['etat_offre'];
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

        include "views/offre/enregistrement-offre.php";
    }

    public function details() {

        $offre = new offreModel();
        $message = "";
        if (!empty($_SESSION['user_id'])) {
            $nnl = $offre->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $offre->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new offreModel();
        }

        if (isset($_GET['code'])) {

            $code_offre = $_GET['code'];


            $sol = $offre->RechercherOffre($code_offre);

            if (!empty($sol)) {

                $code = $sol[0]['code'];
                $intitule = $sol[0]['intitule'];
                $type = $sol[0]['type'];
                $profil = $sol[0]['profil'];
                $missions = $sol[0]['missions'];
                $contacts = $sol[0]['contacts'];
                $date_creation = $sol[0]['date_creation'];
                $date_expiration = $sol[0]['date_expiration'];
                $nombre_poste = $sol[0]['nombre_poste'];
                $matricule = $sol[0]['matricule'];
                $etat_disponibilite = $sol[0]['etat_disponibilite'];
                $etat_offre = $sol[0]['etat_offre'];
            }
        } else {
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/offre/disponible');</script>";
            exit();
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

        include "views/offre/details-offre.php";
    }

    public function postulants() {

        $offre = new offreModel();
        $message = "";
        if (!empty($_SESSION['user_id'])) {
            $nnl = $offre->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $offre->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new offreModel();
        }

        if (isset($_POST['btn_rechercher'])) {
            $code = $_POST['sai_matricule'];
            $sol = $offre->ListePostulantsOffre($code);
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

        include "views/offre/postulants-offre.php";
    }

    public function liste() {

        $offre = new offreModel();
        $message = "";
        if (!empty($_SESSION['user_id'])) {
            $nnl = $offre->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $offre->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new offreModel();
        }

        $sol = $offre->ListeOffre();
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

        include "views/offre/liste-offre.php";
    }

    public function listes() {

        $offre = new offreModel();
        $message = "";
        if (!empty($_SESSION['user_id'])) {
            $nnl = $offre->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $offre->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new offreModel();
        }

        if (isset($_POST['btn_rechercher'])) {
            $code = $_POST['sai_matricule'];
            $sol = $offre->ListeOffreEntreprise($code);
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

        include "views/offre/liste-offre-entreprise.php";
    }

    public function disponible() {

        $offre = new offreModel();
        $message = "";
        if (!empty($_SESSION['user_id'])) {
            $nnl = $offre->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $offre->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new offreModel();
        }

        $sol = $offre->ListeOffreActif();
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

        include "views/offre/disponible-offre.php";
    }

    public function emplois() {

        $offre = new offreModel();
        $message = "";
        if (!empty($_SESSION['user_id'])) {
            $nnl = $offre->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $offre->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new offreModel();
        }

        $sol = $offre->ListeOffreEmploiActif();


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

        include "views/offre/offre-emploi.php";
    }

    public function stages() {

        $offre = new offreModel();
        $message = "";
        if (!empty($_SESSION['user_id'])) {
            $nnl = $offre->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $offre->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new offreModel();
        }

        $sol = $offre->ListeOffreStageActif();


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

        include "views/offre/offre-stage.php";
    }

    public function souscription() {

        $offre = new offreModel();
        $code = "";
        $message = "";
        if (!empty($_SESSION['user_id'])) {
            $nnl = $offre->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $offre->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new offreModel();
        }

        if (isset($_GET['code'])) {

            $code_offre = $_GET['code'];


            $sol = $offre->RechercherOffre($code_offre);

            if (!empty($sol)) {

                $code = $sol[0]['code'];
            }
        }

        if (isset($_POST['btn_valider']) and ! empty($_FILES['sai_cv'])) {

            $code = $_POST['sai_code'];
            $matricule = $_POST['sai_matricule'];
            $date_souscription = $_POST['sai_date'];
            $piece_jointe = $_FILES['sai_cv']['name'];
             $fichier = $_POST['sai_code'] . $_POST['sai_matricule'] . $piece_jointe;
             

            $extensions = strtolower(pathinfo($_FILES['sai_cv']['name'], PATHINFO_EXTENSION));

            $autorises = array('png', 'gif', 'jpg', 'jpeg', 'bmp', 'pdf', 'doc', 'docx');

            if (in_array($extensions, $autorises)) {

                move_uploaded_file($_FILES['sai_cv']['tmp_name'], "upload/documents/" . $_POST['sai_code'] . $_POST['sai_matricule'] . $_FILES['sai_cv']['name']);
                
                $AjoutSouscription = $offre->AjouterPostulation($code, $matricule, $date_souscription, $fichier);
                //var_dump($AjoutSouscription);die();
                if ($AjoutSouscription) {
                    $message = "<p style='color: green'>Vous venez de postuler avec succes à cette offre</p>";
                } else {
                    $message = "<p style='color: red'>Echec de la souscription</p>";
                }
            } else {
                $message = "<p style='color: red'>L'extension de votre curriculum vitae n'est pas autorisées</p>";
            }
        }
        // debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Superviseur' and $_SESSION['role'] != 'Administrateur' and $_SESSION['role'] != 'Investisseur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }

        include "views/offre/souscription-offre.php";
    }

    public function suivi() {

        $offre = new offreModel();
        $message = "";
        if (!empty($_SESSION['user_id'])) {
            $nnl = $offre->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $offre->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new offreModel();
        }

        if (isset($_POST['btn_emploi'])) {
            $matricule = $_SESSION['matricule'];
            $sol = $offre->ListeOffreEmploiMatricule($matricule);
        }

        if (isset($_POST['btn_stage'])) {
            $matricule = $_SESSION['matricule'];
            $sol = $offre->ListeOffreStageMatricule($matricule);
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

        include "views/offre/offre-suivi.php";
    }

}

?>