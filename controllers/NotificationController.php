<?php
require 'models/notification.php';
//require 'config/function.php';

class notification {

    public function index() {
        $notif = new NotificationsModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $notif->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $notif->nbre_notification_Non_Lue($_SESSION['user_id']);
        }

        include 'views/index.php';
    }

    public function ajout() {
        $notif = new NotificationsModel();

        if (isset($_POST['btn_envoyer'])) {

            $notif->setTitre(filter_input(INPUT_POST, 'titre', FILTER_SANITIZE_STRING));
            $notif->setObjet(filter_input(INPUT_POST, 'objet', FILTER_SANITIZE_STRING));
            $notif->setText(filter_input(INPUT_POST, 'texte', FILTER_SANITIZE_STRING));
            $notif->setDate(date('Y-m-d H:i:s'));
            $notif->setUser($_SESSION['user_id']);
            
                $exe = $notif->ajouterNotification_Sans_Pieces_Jointes();
                if ($exe) {
                    $message = "Ajout effectuée avec succès";
                } else {
                    $message = "Echec de l'ajout";
                }

            $id_notification = $notif->con->lastInsertId();
            $user = $notif->liste_user();

            foreach ($user as $key => $value) {
                
                $notif->setId($id_notification);
                $notif->setUser($value['id']);
                $notif->ajouterNotification_additif();
            }
        }



        
        if (!empty($_SESSION['user_id'])) {
            $nnl = $notif->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $notif->nbre_notification_Non_Lue($_SESSION['user_id']);
        }

        $message = "";

        if (!empty($_SESSION['abonnement'])) {
            if (new DateTime(date('d-m-Y')) <= new DateTime($_SESSION['abonnement'])) {
                
            } else {
                ?>
                <script>
                    alert("Votre abonnement a expiré! \n Pensez à renouveler avant d'utiliser ce service!");
                    window.history.back();
                </script>



                <?php

            }
        }
        
       
        include 'views/notifications/ajout.php';
    }

    public function liste() {
        $notif = new NotificationsModel();

        if (!empty($_SESSION['user_id'])) {
            $nnl = $notif->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $notif->nbre_notification_Non_Lue($_SESSION['user_id']);
            $nns = $notif->notification_Non_supprimee($_SESSION['user_id']);
        }        
        include 'views/notifications/liste.php';
    }

    public function details() {
        $notif = new NotificationsModel();
        $message = "";

        $not = filter_input(INPUT_GET, 'nt', FILTER_SANITIZE_NUMBER_INT);


        if (!empty($_SESSION['user_id'])) {
            $notif->setUser($_SESSION['user_id']);
            $notif->setNotification($not);
            $notif->lire_notification();
            $nnl = $notif->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $notif->nbre_notification_Non_Lue($_SESSION['user_id']);
            $nns = $notif->notification_Non_supprimee($_SESSION['user_id']);
        }

        $details = $notif->details_notification($not);

        include 'views/notifications/details.php';
    }

    public function supprimer() {
        $notif = new NotificationsModel();
        $not = filter_input(INPUT_GET, 'nt', FILTER_SANITIZE_NUMBER_INT);

        if (!empty($_SESSION['user_id'])) {
            $notif->setUser($_SESSION['user_id']);
            $notif->setNotification($not);
            $ex=$notif->supprimer_notification();
            $nnl = $notif->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $notif->nbre_notification_Non_Lue($_SESSION['user_id']);
            $nns = $notif->notification_Non_supprimee($_SESSION['user_id']);
            if($ex){
                $message = "Suppression effectuée avec succès !";
            }else{
                $message = "Echec de suppression !";
            }
        }

        include 'views/notifications/liste.php';
    }

    public function forfait() {

        $notif = new NotificationsModel();
        $message = "";

        if (!empty($_SESSION['user_id'])) {
            $notif->setUser($_SESSION['user_id']);
            $nnl = $notif->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $notif->nbre_notification_Non_Lue($_SESSION['user_id']);
            $nns = $notif->notification_Non_supprimee($_SESSION['user_id']);
        }
        $lespartenaires = $notif->avoirMatriculePartenaire();

        if (isset($_POST['btn_envoyer'])) {
            $notif->setMat($_POST['parte']);
            $notif->setDate(date('d-m-Y'));
            $notif->setDebut(date('d-m-Y', strtotime($_POST['debut'])));
            $duree = $_POST['duree'];
            $notif->setFin(date('d-m-Y', strtotime("+ $duree month", strtotime($notif->getDebut()))));
            $exe = $notif->forfait_notification();
            
            if ($exe) {
                $message = "Forfait activé avec succès";
            } else {
                $message = "Echec de l'activation du forfait";
            }
        }
        include 'views/notifications/forfait_notification.php';
    }

}
?>