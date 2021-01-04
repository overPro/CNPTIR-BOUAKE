<?php

require 'models/transaction.php';

class transaction {

    public function saisie() {

        $transaction = new transactionModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $transaction->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $transaction->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new transactionModel();
        }

        $numero_transaction = "";
        $date_transaction = "";
        $heure_transaction = "";
        $montant_transaction = "";
        $frais="";
        $montant_total="";
        $type_transaction = "";
        $objet_transaction = "";
        $numero_expediteur = "";
        $numero_destinataire = "";
        $token_expediteur= "";
        $token_destinataire= "";
        $conf_token_expediteur= "";
        $conf_token_destinataire= "";
        $part_entreprise= "";
        $part_partenaire= "";
        $part_autre= "";
        $etat_transaction = "";


        $message = "";

        // generation de code --debut--


        // generation de code --fin--


// bouton ajouter
        if (isset($_POST['btn_ajouter'])) {


            $transaction->numero_transaction = $_POST['sai_numero_transaction'];
            $transaction->heure_transaction = $_POST['sai_heure_transaction'];
            $transaction->date_transaction = $_POST['sai_date_transaction'];
            $transaction->montant_transaction = $_POST['sai_montant_transaction'];
            $transaction->frais = $_POST['sai_frais'];
            $transaction->montant_total = $_POST['sai_montant_total'];
            $transaction->type_transaction = $_POST['sai_type_transaction'];
            $transaction->objet_transaction = $_POST['sai_objet_transaction'];
            $transaction->numero_expediteur = $_POST['sai_numero_expediteur'];
            $transaction->numero_destinataire = $_POST['sai_numero_destinataire'];
            $transaction->token_expediteur = $_POST['sai_token_expediteur'];
            $transaction->token_destinataire = $_POST['sai_token_destinataire'];
            $transaction->conf_token_expediteur = $_POST['sai_conf_token_expediteur'];
            $transaction->conf_token_destinataire = $_POST['sai_conf_token_destinataire'];
            $transaction->part_entreprise = $_POST['sai_part_entreprise'];
            $transaction->part_partenaire = $_POST['sai_part_partenaire'];
            $transaction->part_autre = $_POST['sai_part_autre'];
            $transaction->etat_transaction = $_POST['sai_etat_transaction'];

            $exec = $transaction->AjouterTransaction();

            if (!empty($exec)) {

                $message = "Enregistrement effectué avec succes !";
            } else {

                $message = "Echec de l'enregistrement ";
            }
        }

// bouton modifier
        if (isset($_POST['btn_modifier'])) {


            $transaction->numero_transaction = $_POST['sai_numero_transaction'];
            $transaction->heure_transaction = $_POST['sai_heure_transaction'];
            $transaction->date_transaction = $_POST['sai_date_transaction'];
            $transaction->montant_transaction = $_POST['sai_montant_transaction'];
            $transaction->frais = $_POST['sai_frais'];
            $transaction->montant_total = $_POST['sai_montant_total'];
            $transaction->type_transaction = $_POST['sai_type_transaction'];
            $transaction->objet_transaction = $_POST['sai_objet_transaction'];
            $transaction->numero_expediteur = $_POST['sai_numero_expediteur'];
            $transaction->numero_destinataire = $_POST['sai_numero_destinataire'];
            $transaction->token_expediteur = $_POST['sai_token_expediteur'];
            $transaction->token_destinataire = $_POST['sai_token_destinataire'];
            $transaction->conf_token_expediteur = $_POST['sai_conf_token_expediteur'];
            $transaction->conf_token_destinataire = $_POST['sai_conf_token_destinataire'];
            $transaction->part_entreprise = $_POST['sai_part_entreprise'];
            $transaction->part_partenaire = $_POST['sai_part_partenaire'];
            $transaction->part_autre = $_POST['sai_part_autre'];
            $transaction->etat_transaction = $_POST['sai_etat_transaction'];

            $exec = $transaction->ModifierTransaction();

            if (!empty($exec)) {

                $message = "Modification effectuée avec succes !";
            } else {

                $message = "Echec de la modification ";
            }
        }
// bouton supprimer
        if (isset($_POST['btn_supprimer'])) {


            $transaction->numero_transaction = $_POST['sai_numero_transaction'];

            $exec = $transaction->SupprimerTransaction();

            if (!empty($exec)) {

                $message = "Suppression effectuée avec succes !";
            } else {

                $message = "Echec de la suppression ";
            }
        }

// bouton rechercher par post
        if (isset($_POST['btn_rechercher'])) {

            $numero_transaction = $_POST['sai_rechercher'];


            $sol = $transaction->RechercherTransaction($numero_transaction);

            if (!empty($sol)) {

                $numero_transaction = $sol[0]['numero_transaction'];
                $date_transaction = $sol[0]['date_transaction'];
                $heure_transaction = $sol[0]['heure_transaction'];
                $montant_transaction = $sol[0]['montant_transaction'];
                $frais = $sol[0]['frais'];
                $montant_total = $sol[0]['montant_total'];
                $type_transaction = $sol[0]['type_transaction'];
                $objet_transaction = $sol[0]['objet_transaction'];
                $numero_expediteur = $sol[0]['numero_expediteur'];
                $numero_destinataire = $sol[0]['numero_destinataire'];
                $token_expediteur = $sol[0]['token_expediteur'];
                $token_destinataire = $sol[0]['token_destinataire'];
                $conf_token_expediteur = $sol[0]['conf_token_expediteur'];
                $conf_token_destinataire = $sol[0]['conf_token_destinataire'];
                $part_entreprise = $sol[0]['part_entreprise'];
                $part_partenaire = $sol[0]['part_partenaire'];
                $part_autre = $sol[0]['part_autre'];
                $etat_transaction = $sol[0]['etat_transaction'];
            }
        }


        // bouton rechercher par post
        if (isset($_GET['numero'])) {

            $numero_transaction = $_GET['numero'];


            $sol = $transaction->recherchertransaction($numero_transaction);

            if (!empty($sol)) {

                $numero_transaction = $sol[0]['numero_transaction'];
                $date_transaction = $sol[0]['date_transaction'];
                $heure_transaction = $sol[0]['heure_transaction'];
                $montant_transaction = $sol[0]['montant_transaction'];
                $frais = $sol[0]['frais'];
                $montant_total = $sol[0]['montant_total'];
                $type_transaction = $sol[0]['type_transaction'];
                $objet_transaction = $sol[0]['objet_transaction'];
                $numero_expediteur = $sol[0]['numero_expediteur'];
                $numero_destinataire = $sol[0]['numero_destinataire'];
                $token_expediteur = $sol[0]['token_expediteur'];
                $token_destinataire = $sol[0]['token_destinataire'];
                $conf_token_expediteur = $sol[0]['conf_token_expediteur'];
                $conf_token_destinataire = $sol[0]['numero_destinataire'];
                $part_entreprise = $sol[0]['part_entreprise'];
                $part_partenaire = $sol[0]['part_partenaire'];
                $part_autre = $sol[0]['part_autre'];
                $etat_transaction = $sol[0]['etat_transaction'];
            }
        }

// debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Superviseur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }



        include "views/transaction/enregistrement-transaction.php";
    }


public function enregistrement() {

        $transaction = new transactionModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $transaction->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $transaction->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new transactionModel();
        }

        $numero_transaction = "";
        $date_transaction = "";
        $heure_transaction = "";
        $montant_transaction = "";
        $frais="";
        $montant_total="";
        $type_transaction = "";
        $objet_transaction = "";
        $numero_expediteur = "";
        $numero_destinataire = "";
        $token_expediteur= "";
        $token_destinataire= "";
        $conf_token_expediteur= "";
        $conf_token_destinataire= "";
        $part_entreprise= "";
        $part_partenaire= "";
        $part_autre= "";
        $etat_transaction = "";


        $message = "";




// bouton demander
        if (isset($_POST['btn_demander'])) {

    $numero = $_SESSION['matricule'];
    $resultat = $transaction->VerificationMatricule($numero);


    if (!empty($resultat) AND !empty($_SESSION['matricule'])) {

        if ($resultat[0]['solde_carte']>=$_POST['sai_montant_transaction']) {
            
            // generateur de code 
        $char = '0123456789';
        $token_exp = '';
        $token_dest = '';
        for ($i = 0; $i < 3; $i++) {
            $token_exp .= $char[rand() % strlen($char)];
            $token_dest .= $char[rand() % strlen($char)];
        }
            
            $transaction->numero_transaction = $_SESSION['matricule'].date('Ymd');
            $transaction->heure_transaction = date('H:i:s');
            $transaction->date_transaction = date('Y-m-d');
            $transaction->montant_transaction = $_POST['sai_montant_transaction'];
            $transaction->frais = 0;
            $transaction->montant_total = $_POST['sai_montant_transaction'];
            $transaction->type_transaction = "Retrait";
            $transaction->objet_transaction = "Demande de retrait";
            $transaction->numero_expediteur = $_SESSION['matricule'];
            $transaction->numero_destinataire = $_POST['sai_numero_destinataire'];
            $transaction->token_expediteur = $token_exp;
            $transaction->token_destinataire = $token_dest;
            $transaction->conf_token_expediteur = $token_exp;
            $transaction->conf_token_destinataire = $token_dest;
            $transaction->part_entreprise = 0;
            $transaction->part_partenaire = 0;
            $transaction->part_autre = 0;
            $transaction->etat_transaction = "En attente";

            $exec = $transaction->ajoutertransaction();


            if (!empty($exec)) {

                $matricule = $_SESSION['matricule'];
                $montant = $_POST['sai_montant_transaction'];

                $transaction->RetraitSoldeCarte($matricule,$montant);

                $message = "<p style='color: green'>Succès.Votre compte vient d'etre debité de"." ".$_POST['sai_montant_transaction']." "."F CFA "."et est en cours de traitement!.Le montant vous sera viré sur votre compte mobile money...Nous vous remercions.</p><p style='color: red'>Les retraits sont possibles seulement du Lundi au Dimanche de 08H à 17H</p>";
                                
            } else {

                $message = "<p style='color: red'>Echec de la demande.Vous avez droit à une seule demande par jours...Nous vous remercions.</p>";
            }

        } else{
            $message = "<p style='color: red'>Ce montant n'est pas disponible sur votre compte.</p>";
        }

    } else {

                $message = "<p style='color: red'>Vous ne disposez pas de carte ou votre carte est invalide.</p>";
            }


        }

// bouton traiter
       
        if (isset($_POST['btn_traiter'])) {

    $numero = $_POST['sai_numero_expediteur'];
    $resultat = $transaction->VerificationMatricule($numero);

    if (!empty($resultat) AND !empty($_SESSION['matricule'])) {

        
            
             $transaction->numero_transaction = $_POST['sai_numero_transaction'];
            $transaction->heure_transaction = $_POST['sai_heure_transaction'];
            $transaction->date_transaction = $_POST['sai_date_transaction'];
            $transaction->montant_transaction = $_POST['sai_montant_transaction'];
            $transaction->frais = $_POST['sai_frais'];
            $transaction->montant_total = $_POST['sai_montant_total'];
            $transaction->type_transaction = $_POST['sai_type_transaction'];
            $transaction->objet_transaction = $_POST['sai_objet_transaction'];
            $transaction->numero_expediteur = $_POST['sai_numero_expediteur'];
            $transaction->numero_destinataire = $_POST['sai_numero_destinataire'];
            $transaction->token_expediteur = $_POST['sai_token_expediteur'];
            $transaction->token_destinataire = $_POST['sai_token_destinataire'];
            $transaction->conf_token_expediteur = $_POST['sai_conf_token_expediteur'];
            $transaction->conf_token_destinataire = $_POST['sai_conf_token_destinataire'];
            $transaction->part_entreprise = $_POST['sai_part_entreprise'];
            $transaction->part_partenaire = $_POST['sai_part_partenaire'];
            $transaction->part_autre = $_POST['sai_part_autre'];
            $transaction->etat_transaction = "Succes";

            $exec = $transaction->modifiertransaction();

            if (!empty($exec)) {
    
                $message = "<p style='color: green'>Retrait effectuée avec succes !.</p>";
            } else {

                $message = "<p style='color: red'>Echec du Retrait.</p>";
            }

        

    } else {

                $message = "<p style='color: red'>Ce matricule n'existe pas.</p>";
            }


        }


 if (isset($_POST['btn_supprimer'])) {


            $transaction->numero_transaction = $_POST['sai_numero_transaction'];

            $exec = $transaction->SupprimerTransaction();

            if (!empty($exec)) {

                $message = "Suppression effectuée avec succes !";
            } else {

                $message = "Echec de la suppression ";
            }
        }

// bouton rechercher par post
        if (isset($_POST['btn_rechercher'])) {

            $numero_transaction = $_POST['sai_rechercher'];


            $sol = $transaction->RechercherTransaction($numero_transaction);

            if (!empty($sol)) {

                $numero_transaction = $sol[0]['numero_transaction'];
                $date_transaction = $sol[0]['date_transaction'];
                $heure_transaction = $sol[0]['heure_transaction'];
                $montant_transaction = $sol[0]['montant_transaction'];
                $frais = $sol[0]['frais'];
                $montant_total = $sol[0]['montant_total'];
                $type_transaction = $sol[0]['type_transaction'];
                $objet_transaction = $sol[0]['objet_transaction'];
                $numero_expediteur = $sol[0]['numero_expediteur'];
                $numero_destinataire = $sol[0]['numero_destinataire'];
                $token_expediteur = $sol[0]['token_expediteur'];
                $token_destinataire = $sol[0]['token_destinataire'];
                $conf_token_expediteur = $sol[0]['conf_token_expediteur'];
                $conf_token_destinataire = $sol[0]['conf_token_destinataire'];
                $part_entreprise = $sol[0]['part_entreprise'];
                $part_partenaire = $sol[0]['part_partenaire'];
                $part_autre = $sol[0]['part_autre'];
                $etat_transaction = $sol[0]['etat_transaction'];
            }
        }


        // bouton rechercher par post
        if (isset($_GET['numero'])) {

            $numero_transaction = $_GET['numero'];


            $sol = $transaction->recherchertransaction($numero_transaction);

            if (!empty($sol)) {

                $numero_transaction = $sol[0]['numero_transaction'];
                $date_transaction = $sol[0]['date_transaction'];
                $heure_transaction = $sol[0]['heure_transaction'];
                $montant_transaction = $sol[0]['montant_transaction'];
                $frais = $sol[0]['frais'];
                $montant_total = $sol[0]['montant_total'];
                $type_transaction = $sol[0]['type_transaction'];
                $objet_transaction = $sol[0]['objet_transaction'];
                $numero_expediteur = $sol[0]['numero_expediteur'];
                $numero_destinataire = $sol[0]['numero_destinataire'];
                $token_expediteur = $sol[0]['token_expediteur'];
                $token_destinataire = $sol[0]['token_destinataire'];
                $conf_token_expediteur = $sol[0]['conf_token_expediteur'];
                $conf_token_destinataire = $sol[0]['numero_destinataire'];
                $part_entreprise = $sol[0]['part_entreprise'];
                $part_partenaire = $sol[0]['part_partenaire'];
                $part_autre = $sol[0]['part_autre'];
                $etat_transaction = $sol[0]['etat_transaction'];
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



           if ($_SESSION['role'] == 'Administrateur') {

            ?>
            <style type="text/css">

                #demander{ display: none; }
                #rechercher{ display: none; }

            </style>
            <?php
            
        }

        if ($_SESSION['role'] == 'Investisseur') {

            ?>
            <style type="text/css">
                #supprimer{ display: none; }
                #modifier{ display: none; }
                #ajouter{ display: none; }
                #traiter{ display: none; }
                #rechercher{ display: none; }
                #numero_transaction{ display: none; }
                #frais{ display: none; }
                #montant_total{ display: none; }
                #token_expediteur{ display: none; }
                #token_destinataire{ display: none; }
                #conf_token_expediteur{ display: none; }
                #conf_token_destinataire{ display: none; }
                #part_entreprise{ display: none; }
                #part_partenaire{ display: none; }
                #part_autre{ display: none; }
                #etat_transaction{ display: none; }
                #type_transaction{ display: none; }
                #objet_transaction{ display: none; }
                #date_transaction{ display: none; }
                #heure_transaction{ display: none; }
                #numero_expediteur{ display: none; }
            </style>
            <?php
            
        }

        if ($_SESSION['role'] == 'Distributeur') {

            ?>
            <style type="text/css">
                #supprimer{ display: none; }
                #traiter{ display: none; }
                #rechercher{ display: none; }
                #numero_transaction{ display: none; }
                #frais{ display: none; }
                #montant_total{ display: none; }
                #token_expediteur{ display: none; }
                #token_destinataire{ display: none; }
                #conf_token_expediteur{ display: none; }
                #conf_token_destinataire{ display: none; }
                #part_entreprise{ display: none; }
                #part_partenaire{ display: none; }
                #part_autre{ display: none; }
                #etat_transaction{ display: none; }
                #type_transaction{ display: none; }
                #objet_transaction{ display: none; }
                #date_transaction{ display: none; }
                #heure_transaction{ display: none; }
                #numero_expediteur{ display: none; }
            </style>
            <?php
            
        }



        include "views/transaction/enregistrement-transaction.php";
    }



    public function demande(){

        $transaction = new transactionModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $transaction->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $transaction->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new transactionModel();
        }

        $message = "";

           
           $sol = $transaction->DemandeTransaction();



// le bouton ajouter
        if (isset($_GET['numero'])) {

            $numero = $_GET['numero'];

         $sol = $transaction->recherchertransaction($numero);

         if(!empty($sol)){

            # validation par ajout dans transaction
                $transaction->numero_transaction = $sol[0]['numero_transaction'];
            $transaction->heure_transaction = $sol[0]['heure_transaction'];
            $transaction->date_transaction = $sol[0]['date_transaction'];
            $transaction->montant_transaction = $sol[0]['montant_transaction'];
            $transaction->frais = 0;
            $transaction->montant_total = $_POST['sai_montant_transaction'];
            $transaction->type_transaction = "Retrait";
            $transaction->objet_transaction = "Demande de retrait";
            $transaction->numero_expediteur = "Caisse";
            $transaction->numero_destinataire = $_POST['sai_numero_destinataire'];
            $transaction->token_expediteur = $sol[0]['numero_destinataire'];;
            $transaction->token_destinataire =$sol[0]['numero_destinataire'];;
            $transaction->conf_token_expediteur = $sol[0]['numero_destinataire'];;
            $transaction->conf_token_destinataire = $sol[0]['numero_destinataire'];;
            $transaction->part_entreprise = 0;
            $transaction->part_partenaire = 0;
            $transaction->part_autre = 0;
            $transaction->etat_transaction = $sol[0]['etat_transaction'];
            

            $exec = $transaction->ajoutertransaction();

            if (!empty($exec)) {

            $numero_transaction = $sol[0]['numero_transaction'];
            $etat_transaction="Succes et Validation";

                // modification de l'etat de transaction
            $ajout = $recharge->ModifierTransactionEtat($numero_transaction,$etat_transaction);

                $message = "Effectué !";
            } else {

                $message = "Echec de la validation ";
            }

         }

            

            

        } //fin
        

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
        include "views/transaction/demande-transaction.php";
    }

    public function retraits(){

        $transaction = new transactionModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $transaction->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $transaction->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new transactionModel();
        }

        $message = "";

// le bouton ajouter
        if (isset($_POST['btn_rechercher'])) {

            $matricule = $_POST['sai_matricule'];
            $etat = $_POST['sai_etat'];
            $datedebut = $_POST['sai_date_debut'];
            $datefin = $_POST['sai_date_fin'];

            $sol = $transaction->RetraitTransactionEtatPeriodeMatricule($matricule,$etat,$datedebut,$datefin);
/*
            if($etat=="Tous"){
          $sol = $transaction->RetraitTransactionPeriodeTous($matricule,$datedebut,$datefin); 
            }
*/

  

        } //fin
        

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
        include "views/transaction/liste-retrait.php";
    }



}
