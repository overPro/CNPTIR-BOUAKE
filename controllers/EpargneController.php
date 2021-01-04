<?php

require 'models/epargne.php';

class epargne {

    public function enregistrement() {

        $epargne = new epargneModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $epargne->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $epargne->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new epargneModel();
        }

        $code_epargne = "";
        $type_epargne = "";
        $date_creation = "";
        $heure_creation = "";
        $montant_epargne = "";
        $date_debut = "";
        $date_fin = "";
        $duree = "";
        $frais = "";
        $part_client = "";
        $part_entreprise = "";
        $part_partenaire = "";
        $matricule = "";
        $etat_epargne = "";


        $message = "";

        if (isset($_POST['btn_ajouter'])) {

            $epargne->code_epargne = $_POST['sai_code_epargne'];
            $epargne->type_epargne = $_POST['sai_type_epargne'];
            $epargne->date_creation = $_POST['sai_date_creation'];
            $epargne->heure_creation = $_POST['sai_heure_creation'];
            $epargne->montant_epargne = $_POST['sai_montant_epargne'];
            $epargne->date_debut = $_POST['sai_date_debut'];
            $epargne->date_fin = $_POST['sai_date_fin'];
            $epargne->duree = $_POST['sai_duree'];
            $epargne->frais = $_POST['sai_frais'];
            $epargne->part_client = $_POST['sai_part_client'];
            $epargne->part_entreprise = $_POST['sai_part_entreprise'];
            $epargne->part_partenaire = $_POST['sai_part_partenaire'];
            $epargne->matricule = $_POST['sai_matricule'];
            $epargne->etat_epargne = $_POST['sai_etat_epargne'];

            $exec = $epargne->ajouterepargne();

            if (!empty($exec)) {

                $message = "Enregistrement effectué avec succes !";
            } else {

                $message = "Echec de l'enregistrement ";
            }
        }
// le bouton modifier
        if (isset($_POST['btn_modifier'])) {



            $epargne->code_epargne = $_POST['sai_code_epargne'];
            $epargne->type_epargne = $_POST['sai_type_epargne'];
            $epargne->date_creation = $_POST['sai_date_creation'];
            $epargne->heure_creation = $_POST['sai_heure_creation'];
            $epargne->montant_epargne = $_POST['sai_montant_epargne'];
            $epargne->date_debut = $_POST['sai_date_debut'];
            $epargne->date_fin = $_POST['sai_date_fin'];
            $epargne->duree = $_POST['sai_duree'];
            $epargne->frais = $_POST['sai_frais'];
            $epargne->part_client = $_POST['sai_part_client'];
            $epargne->part_entreprise = $_POST['sai_part_entreprise'];
            $epargne->part_partenaire = $_POST['sai_part_partenaire'];
            $epargne->matricule = $_POST['sai_matricule'];
            $epargne->etat_epargne = $_POST['sai_etat_epargne'];

            $exec = $epargne->modifierepargne();


            if (!empty($exec)) {

                $message = "Modification effectuée avec succes !";
            } else {

                $message = "Echec de la modification ";
            }
        }

        // bouton supprimer
        if (isset($_POST['btn_supprimer'])) {
            $epargne->code_epargne = $_POST['sai_code_epargne'];
            $exec = $epargne->supprimerepargne();

            if (!empty($exec)) {

                $message = "Suppression effectuée avec succes !";
            } else {

                $message = "Echec de la suppression ";
            }
        }

// bouton rechercher par post
        if (isset($_POST['btn_rechercher'])) {

            $log = $_POST['sai_rechercher'];


            $sol = $epargne->RechercherEpargne($log);

            if (!empty($sol)) {

                $code_epargne = $sol[0]['code_epargne'];
                $type_epargne = $sol[0]['type_epargne'];
                $date_creation = $sol[0]['date_creation'];
                $heure_creation = $sol[0]['heure_creation'];
                $montant_epargne = $sol[0]['montant_epargne'];
                $date_debut = $sol[0]['date_debut'];
                $date_fin = $sol[0]['date_fin'];
                $duree = $sol[0]['duree'];
                $frais = $sol[0]['frais'];
                $part_client = $sol[0]['part_client'];
                $part_entreprise = $sol[0]['part_entreprise'];
                $part_partenaire = $sol[0]['part_partenaire'];
                $matricule = $sol[0]['matricule'];
                $etat_epargne = $sol[0]['etat_epargne'];
            } else {


                $message = "Cet epargne n'existe pas !";
            }
        }




        // bouton rechercher par post
        if (isset($_GET['code_epargne'])) {

            $code_epargne = $_GET['code_epargne'];


            $sol = $epargne->RechercherEpargne($code_epargne);

            if (!empty($sol)) {

                $code_epargne = $sol[0]['code_epargne'];
                $type_epargne = $sol[0]['type_epargne'];
                $date_creation = $sol[0]['date_creation'];
                $heure_creation = $sol[0]['heure_creation'];
                $montant_epargne = $sol[0]['montant_epargne'];
                $date_debut = $sol[0]['date_debut'];
                $date_fin = $sol[0]['date_fin'];
                $duree = $sol[0]['duree'];
                $frais = $sol[0]['frais'];
                $part_client = $sol[0]['part_client'];
                $part_entreprise = $sol[0]['part_entreprise'];
                $part_partenaire = $sol[0]['part_partenaire'];
                $matricule = $sol[0]['matricule'];
                $etat_epargne = $sol[0]['etat_epargne'];
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

        include "views/epargne/enregistrement-epargne.php";
    }

    public function visualisation() {

        $epargne = new epargneModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $epargne->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $epargne->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new epargneModel();
        }

        $code_epargne = "";
        $type_epargne = "";
        $date_creation = "";
        $heure_creation = "";
        $montant_epargne = "";
        $date_debut = "";
        $date_fin = "";
        $duree = "";
        $frais = "";
        $part_client = "";
        $part_entreprise = "";
        $part_partenaire = "";
        $matricule = "";
        $etat_epargne = "";


        $message = "";

        // bouton rechercher par post
        if (isset($_GET['code_epargne'])) {

            $code_epargne = $_GET['code_epargne'];


            $sol = $epargne->RechercherEpargne($code_epargne);

            if (!empty($sol)) {

                $code_epargne = $sol[0]['code_epargne'];
                $type_epargne = $sol[0]['type_epargne'];
                $date_creation = $sol[0]['date_creation'];
                $heure_creation = $sol[0]['heure_creation'];
                $montant_epargne = $sol[0]['montant_epargne'];
                $date_debut = $sol[0]['date_debut'];
                $date_fin = $sol[0]['date_fin'];
                $duree = $sol[0]['duree'];
                $frais = $sol[0]['frais'];
                $part_client = $sol[0]['part_client'];
                $part_entreprise = $sol[0]['part_entreprise'];
                $part_partenaire = $sol[0]['part_partenaire'];
                $matricule = $sol[0]['matricule'];
                $etat_epargne = $sol[0]['etat_epargne'];
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

        include "views/epargne/visualisation-epargne.php";
    }

    public function liste() {

        $epargne = new epargneModel();
        $message = "";
        if (!empty($_SESSION['user_id'])) {
            $nnl = $epargne->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $epargne->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new epargneModel();
        }

        if (isset($_POST['btn_rechercher'])) {
            $date_debut = $_POST['sai_date_debut'];
            $date_fin = $_POST['sai_date_fin'];
            $matricule = $_POST['sai_matricule'];
            $_SESSION['rechdd'] = $date_debut;
            $_SESSION['rechdf'] = $date_fin;
            $_SESSION['rechmat'] = $matricule;
            $sol = $epargne->ListeEpargnePeriodeMatricule($matricule, $date_debut, $date_fin);
        }

        if (isset($_POST['saveDate'])) {
            $code = $_POST['code'];
            $date = $_POST['newDate'];
            $epargne->modifDateFin($code, $date);

            $sol = $epargne->ListeEpargnePeriodeMatricule($_SESSION['rechmat'], $_SESSION['rechdd'], $_SESSION['rechdf']);
        }

        if (isset($_POST['transferEpargne'])) {
            $code = $_POST['epargneCode'];

            //rechercher epargne
            $res = $epargne->RechercherEpargne($code);

            //modification de carte et epargne
            $epargne->TransfertEpargneVersCarte($res[0]['matricule'], $res[0]['montant_epargne'], $code);

            //transaction
            // generateur de code --debut--
            $char = '0123456789';
            $token_exp = '';
            $token_dest = '';
            for ($i = 0; $i < 3; $i++) {
                $token_exp .= $char[rand() % strlen($char)];
            }
            for ($i = 0; $i < 3; $i++) {
                $token_dest .= $char[rand() % strlen($char)];
            }

            $numero_transaction = $_SESSION['matricule'] . date('YmdHi');
            $date_transaction = date('Y-m-d');
            $heure_transaction = date('H:i');
            $montant_transaction = $res[0]['montant_epargne'];
            $frais = 0;
            $montant_total = $res[0]['montant_epargne'] + $frais;
            $type_transaction = "Epargne";
            $objet_transaction = "Transfert Epargne-Carte";
            $numero_expediteur = $_SESSION['matricule'];
            $numero_destinataire = $_SESSION['matricule']; /* $_POST['sai_code_epargne']; */
            $token_expediteur = $token_exp;
            $token_destinataire = $token_dest;
            $conf_token_expediteur = $token_exp;
            $conf_token_destinataire = $token_dest;
            $part_entreprise = 0;
            $part_partenaire = 0;
            $part_autre = 0;
            $etat_transaction = "Succes";

            $epargne->ajoutertransaction($numero_transaction, $date_transaction, $heure_transaction, $montant_transaction, $frais, $montant_total, $type_transaction, $objet_transaction, $numero_expediteur, $numero_destinataire, $token_expediteur, $token_destinataire, $conf_token_expediteur, $conf_token_destinataire, $part_entreprise, $part_partenaire, $part_autre, $etat_transaction);
        }


        if (isset($_POST['saveSolde'])) {
            $code = $_POST['code'];
            $mont = $_POST['montant_completer'];
            $epargne->TransfertCarteVersEpargne($_SESSION['matricule'], $mont, $code);
            
            //transaction
            // generateur de code --debut--
            $char = '0123456789';
            $token_exp = '';
            $token_dest = '';
            for ($i = 0; $i < 3; $i++) {
                $token_exp .= $char[rand() % strlen($char)];
            }
            for ($i = 0; $i < 3; $i++) {
                $token_dest .= $char[rand() % strlen($char)];
            }

            $numero_transaction = $_SESSION['matricule'] . date('YmdHi');
            $date_transaction = date('Y-m-d');
            $heure_transaction = date('H:i');
            $montant_transaction = $mont;
            $frais = 0;
            $montant_total = $mont + $frais;
            $type_transaction = "DAT";
            $objet_transaction = "Epargne";
            $numero_expediteur = $_SESSION['matricule'];
            $numero_destinataire = $_SESSION['matricule']; /* $_POST['sai_code_epargne']; */
            $token_expediteur = $token_exp;
            $token_destinataire = $token_dest;
            $conf_token_expediteur = $token_exp;
            $conf_token_destinataire = $token_dest;
            $part_entreprise = 0;
            $part_partenaire = 0;
            $part_autre = 0;
            $etat_transaction = "Succes";

            $epargne->ajoutertransaction($numero_transaction, $date_transaction, $heure_transaction, $montant_transaction, $frais, $montant_total, $type_transaction, $objet_transaction, $numero_expediteur, $numero_destinataire, $token_expediteur, $token_destinataire, $conf_token_expediteur, $conf_token_destinataire, $part_entreprise, $part_partenaire, $part_autre, $etat_transaction);


            $sol = $epargne->ListeEpargnePeriodeMatricule($_SESSION['rechmat'], $_SESSION['rechdd'], $_SESSION['rechdf']);
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

        include "views/epargne/liste-epargne.php";
    }

    public function app() {

        $epargne = new epargneModel();

        if (isset($_POST['l'])) {
            $code = $_POST['code'];
            $type = $_POST['t'];
            if ($type == "solde")
                $t = 'montant_epargne';

            if ($type == "date")
                $t = 'date_fin';

            $res = $epargne->RechercherEpargne($code);
            $retour = $res[0][$t];

            if ($type == "date")
                $retour = date('d-m-Y', strtotime($retour));

            echo $retour;
        }

        if (isset($_POST['trans'])) {
            $code = $_POST['code'];
            $resulat = array();

            $res = $epargne->RechercherEpargne($code);

            $resulat['date_debut'] = $res[0]['date_debut'];
            $resulat['date_fin'] = $res[0]['date_fin'];
            $resulat['frais'] = $res[0]['frais'];
            $resulat['montant_epargne'] = $res[0]['montant_epargne'];

            echo json_encode($resulat);
        }
    }

    public function affichage() {

        $epargne = new epargneModel();
        $message = "";
        if (!empty($_SESSION['user_id'])) {
            $nnl = $epargne->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $epargne->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new epargneModel();
        }

        $sol = $epargne->Affichageepargne();


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

        include "views/epargne/affichage-epargne.php";
    }

   public function suivi() {

        $epargne = new epargneModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $epargne->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $epargne->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new epargneModel();
        }

        if (isset($_POST['btn_rechercher'])) {
            $matricule = $_POST['sai_matricule'];
            $datedebut = $_POST['sai_date_debut'];
            $datefin = $_POST['sai_date_fin'];
            $sol = $epargne->ListeEpargnePeriode($matricule,$datedebut, $datefin);

            
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

        include "views/epargne/suivi-epargne.php";
    }
}

?>