<?php

//require 'config/function.php';
require "models/produit.php";

class produit {

    public function enregistrement() {
        $produit = new produitModel();

        if (!empty($_SESSION['user_id'])) {
            $nnl = $produit->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $produit->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new produitmodel();
        }

        $reference_produit = "";
        $libelle_produit = "";
        $details_produit = "";
        $prix_achat = "";
        $prix_vente = "";
        $quota = "";
        $photo1_produit = "";
        $photo2_produit = "";
        $photo3_produit = "";
        $photo4_produit = "";
        $categorie_produit = "";
        $code_fournisseur = "";
        $etat_produit = "";

        $message = "";

        // generateur de code 
        $char = '0123456789';
        $code = '';
        for ($i = 0; $i < 4; $i++) {
            $code .= $char[rand() % strlen($char)];
        }


        $ref = "PROD" . $_SESSION['matricule'] . $code;

        if (isset($_POST['btn_ajouter']) and ! empty($_FILES['sai_photo1_produit']) and ! empty($_FILES['sai_photo2_produit']) and ! empty($_FILES['sai_photo3_produit']) and ! empty($_FILES['sai_photo4_produit'])) {

//            if ($_POST['sai_reference_produit'] != $ref) {
//
//                $message = "la reference saisie ne correspond pas au code proposé";
//            } else {

            $rech = $_POST['sai_code_fournisseur'];
            $exec = $produit->listeFournisseurMat($rech);

            if (!empty($exec)) {
                $u1 = upload_image('sai_photo1_produit', "upload/produits/" . $_POST['sai_reference_produit'] . $_FILES['sai_photo1_produit']['name']);
                $u2 = upload_image('sai_photo2_produit', "upload/produits/" . $_POST['sai_reference_produit'] . $_FILES['sai_photo2_produit']['name']);
                $u3 = upload_image('sai_photo3_produit', "upload/produits/" . $_POST['sai_reference_produit'] . $_FILES['sai_photo3_produit']['name']);
                $u4 = upload_image('sai_photo4_produit', "upload/produits/" . $_POST['sai_reference_produit'] . $_FILES['sai_photo4_produit']['name']);
                //move_uploaded_file($_FILES['sai_photo1_produit']['tmp_name'], "epencia/upload/produits/" . $_POST['sai_reference_produit'] . $_FILES['sai_photo1_produit']['name']);
                //move_uploaded_file($_FILES['sai_photo2_produit']['tmp_name'], "epencia/upload/produits/" . $_POST['sai_reference_produit'] . $_FILES['sai_photo2_produit']['name']);
                //move_uploaded_file($_FILES['sai_photo3_produit']['tmp_name'], "epencia/upload/produits/" . $_POST['sai_reference_produit'] . $_FILES['sai_photo3_produit']['name']);
                //move_uploaded_file($_FILES['sai_photo4_produit']['tmp_name'], "epencia/upload/produits/" . $_POST['sai_reference_produit'] . $_FILES['sai_photo4_produit']['name']);

                if ($u1 AND $u2 AND $u3 AND $u4) {
                    $produit->reference_produit = $_POST['sai_reference_produit'];
                    $produit->libelle_produit = $_POST['sai_libelle_produit'];
                    $produit->details_produit = $_POST['sai_details_produit'];
                    $produit->prix_achat = $_POST['sai_prix_achat'];
                    $produit->prix_vente = $_POST['sai_prix_vente'];
                    $produit->quota = $_POST['sai_quota'];
                    $produit->photo1_produit = $_POST['sai_reference_produit'] . $_FILES['sai_photo1_produit']['name'];
                    $produit->photo2_produit = $_POST['sai_reference_produit'] . $_FILES['sai_photo2_produit']['name'];
                    $produit->photo3_produit = $_POST['sai_reference_produit'] . $_FILES['sai_photo3_produit']['name'];
                    $produit->photo4_produit = $_POST['sai_reference_produit'] . $_FILES['sai_photo4_produit']['name'];
                    $produit->categorie_produit = $_POST['sai_categorie_produit'];
                    $produit->code_fournisseur = $_POST['sai_code_fournisseur'];
                    $produit->etat_produit = $_POST['sai_etat_produit'];

                    $sol = $produit->ajouterproduit();

                    if (!empty($sol)) {

                        $message = "Ajout effectué avec succes";
                    } else {

                        $message = "Echec de l'ajout";
                    }
                } else {

                    $message = "Les fichiers envoyés doivent etre des images";
                }
            } else {

                $message = "Ce code de partenaire n'existe pas";
            }
//            }
        }





        if (isset($_POST['btn_modifier'])) {

            $rech = $_POST['sai_code_fournisseur'];
            $exec = $produit->listeFournisseurMat($rech);

            if (!empty($exec)) {


                $produit->reference_produit = $_POST['sai_reference_produit'];
                $produit->libelle_produit = $_POST['sai_libelle_produit'];
                $produit->details_produit = $_POST['sai_details_produit'];
                $produit->prix_achat = $_POST['sai_prix_achat'];
                $produit->prix_vente = $_POST['sai_prix_vente'];
                $produit->quota = $_POST['sai_quota'];
                $produit->categorie_produit = $_POST['sai_categorie_produit'];
                $produit->code_fournisseur = $_POST['sai_code_fournisseur'];
                $produit->etat_produit = $_POST['sai_etat_produit'];

                if (!empty($_FILES['sai_photo1_produit']['name']) and ! empty($_FILES['sai_photo2_produit']['name']) and ! empty($_FILES['sai_photo3_produit']['name']) and ! empty($_FILES['sai_photo4_produit']['name'])) {

                    $u1 = upload_image('sai_photo1_produit', "epencia/upload/produits/" . $_POST['sai_reference_produit'] . $_FILES['sai_photo1_produit']['name']);
                    $u2 = upload_image('sai_photo2_produit', "epencia/upload/produits/" . $_POST['sai_reference_produit'] . $_FILES['sai_photo2_produit']['name']);
                    $u3 = upload_image('sai_photo3_produit', "epencia/upload/produits/" . $_POST['sai_reference_produit'] . $_FILES['sai_photo3_produit']['name']);
                    $u4 = upload_image('sai_photo4_produit', "epencia/upload/produits/" . $_POST['sai_reference_produit'] . $_FILES['sai_photo4_produit']['name']);
                    //move_uploaded_file($_FILES['sai_photo1_produit']['tmp_name'], "epencia/upload/produits/" . $_POST['sai_reference_produit'] . $_FILES['sai_photo1_produit']['name']);
                    //move_uploaded_file($_FILES['sai_photo2_produit']['tmp_name'], "epencia/upload/produits/" . $_POST['sai_reference_produit'] . $_FILES['sai_photo2_produit']['name']);
                    //move_uploaded_file($_FILES['sai_photo3_produit']['tmp_name'], "epencia/upload/produits/" . $_POST['sai_reference_produit'] . $_FILES['sai_photo3_produit']['name']);
                    //move_uploaded_file($_FILES['sai_photo4_produit']['tmp_name'], "epencia/upload/produits/" . $_POST['sai_reference_produit'] . $_FILES['sai_photo4_produit']['name']);

                    if ($u1 AND $u2 AND $u3 AND $u4) {
                        $sol = $produit->modifierproduit_avec_image();
                    }
                } else {

                    $sol = $produit->modifierproduit_sans_image();
                }



                if (!empty($sol)) {

                    $message = "Modification effectuée avec succes";
                } else {

                    $message = "Echec de la modification";
                }
            } else {

                $message = "Ce code de fournisseur n'existe pas";
            }
        }


        if (isset($_POST['btn_rechercher'])) {
            $rech = $_POST['sai_rechercher'];
            $sol = $produit->rechercherproduitCode($rech);

            if ($sol) {

                $reference_produit = $sol[0]['reference_produit'];
                $libelle_produit = $sol[0]['libelle_produit'];
                $details_produit = $sol[0]['details_produit'];
                $prix_achat = $sol[0]['prix_achat'];
                $prix_vente = $sol[0]['prix_vente'];
                $quota = $sol[0]['quota'];
                $photo1_produit = utf8_encode($sol[0]['photo1_produit']);
                $photo2_produit = utf8_encode($sol[0]['photo2_produit']);
                $photo3_produit = utf8_encode($sol[0]['photo3_produit']);
                $photo4_produit = utf8_encode($sol[0]['photo4_produit']);
                $categorie_produit = $sol[0]['categorie_produit'];
                $code_fournisseur = $sol[0]['code_fournisseur'];
                $etat_produit = $sol[0]['etat_produit'];
            } else {

                $message = "Ce produit n'existe pas";
            }
        }

        if (isset($_POST['btn_supprimer'])) {
            $produit->reference_produit = $_POST['sai_reference_produit'];


            $reponse = $produit->supprimerproduit();

            if ($reponse) {

                $message = "Suppression effectuée avec succes";
            } else {

                $message = "Echec de la suppression";
            }
        }

        //fonction rechercher par get
        if (isset($_GET['reference'])) {

            $rech = $_GET['reference'];

            $sol = $produit->rechercherproduitCode($rech);

            if ($sol) {

                $reference_produit = $sol[0]['reference_produit'];
                $libelle_produit = $sol[0]['libelle_produit'];
                $details_produit = $sol[0]['details_produit'];
                $prix_achat = $sol[0]['prix_achat'];
                $prix_vente = $sol[0]['prix_vente'];
                $quota = $sol[0]['quota'];
                $photo1_produit = $sol[0]['photo1_produit'];
                $photo2_produit = $sol[0]['photo2_produit'];
                $photo3_produit = $sol[0]['photo3_produit'];
                $photo4_produit = $sol[0]['photo4_produit'];
                $categorie_produit = $sol[0]['categorie_produit'];
                $code_fournisseur = $sol[0]['code_fournisseur'];
                $etat_produit = $sol[0]['etat_produit'];
            }
        }

        // debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Investisseur' and $_SESSION['role'] != 'Superviseur' and $_SESSION['role'] != 'Distributeur' and $_SESSION['role'] != 'Administrateur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }






        include "views/produit/enregistrement-produit.php";
    }

// liste des produits
    public function liste() {

        $produit = new produitmodel();
        $reference_produit = "";
        $libelle_produit = "";
        $details_produit = "";
        $prix_achat = "";
        $prix_vente = "";
        $quota = "";
        $photo1_produit = "";
        $photo2_produit = "";
        $photo3_produit = "";
        $photo4_produit = "";
        $categorie_produit = "";
        $code_fournisseur = "";
        $etat_produit = "";

        if (!empty($_SESSION['user_id'])) {
            $nnl = $produit->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $produit->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new produitmodel();
        }

        $sol = $produit->listeProduit();

        if (isset($_GET['categorie']) and isset($_GET['matricule'])) {

            $categorie = $_GET['categorie'];
            $matricule = $_GET['matricule'];

            $sol = $produit->listeProduitCategorieMatricule($categorie, $matricule);

            if (!empty($sol)) {

                $reference_produit = $sol[0]['reference_produit'];
                $libelle_produit = $sol[0]['libelle_produit'];
                $details_produit = $sol[0]['details_produit'];
                $prix_achat = $sol[0]['prix_achat'];
                $prix_vente = $sol[0]['prix_vente'];
                $quota = $sol[0]['quota'];
                $photo1_produit = utf8_encode($sol[0]['photo1_produit']);
                $photo2_produit = utf8_encode($sol[0]['photo2_produit']);
                $photo3_produit = utf8_encode($sol[0]['photo3_produit']);
                $photo4_produit = utf8_encode($sol[0]['photo4_produit']);
                $categorie_produit = $sol[0]['categorie_produit'];
                $code_fournisseur = $sol[0]['code_fournisseur'];
                $etat_produit = $sol[0]['etat_produit'];
            } else {

                $reference_produit = "";
                $libelle_produit = "";
                $details_produit = "";
                $prix_achat = "";
                $prix_vente = "";
                $quota = "";
                $photo1_produit = "";
                $photo2_produit = "";
                $photo3_produit = "";
                $photo4_produit = "";
                $categorie_produit = "";
                $code_fournisseur = "";
                $etat_produit = "";
            }
        }
        $sponsor = $produit->listeProduitSponsorises();

        // debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Investisseur' and $_SESSION['role'] != 'Superviseur' and $_SESSION['role'] != 'Distributeur' and $_SESSION['role'] != 'Administrateur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }

        include 'views/produit/liste-produit.php';
    }

    public function app()
     {
$produit = new produitmodel();
$ref=$produit->listeCampagne();
$message="";
 if (isset($_POST['param'])) {
            $code = $_POST['code'];

            $resulat = array();
            $res = $produit->RechercherCampagneCode($code);

            $resulat['reference_produit'] = $res[0]['reference_produit'];
            $resulat['nbre_vue'] = $res[0]['nbre_vue'];
            $resulat['cout'] = $res[0]['cout'];
            $resulat['montant'] = $res[0]['montant'];
            $resulat['solde'] = $res[0]['solde'];
            $resulat['etat'] = $res[0]['etat'];

            echo json_encode($resulat);
        }
     }

// Campagne des produits
    public function campagne() {

        $produit = new produitmodel();
        $message = "";

        if (!empty($_SESSION['user_id'])) {
            $nnl = $produit->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $produit->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new produitmodel();
        }


        if (isset($_POST['saveCampagne'])){
            $ref = $_POST['ref_prod'];
            $vue = $_POST['nbreVue'];
            $montant = $_POST['montant_vue'];
            $cout = 10;
            $solde = 0;
            $etat = "Actif";

            //transaction
            // generateur de code --debut--
            $char = '0123456789';
            $token_dest = '';

            for ($i = 0; $i < 3; $i++) {
                $token_dest .= $char[rand() % strlen($char)];
            }

            $numero_transaction = $_SESSION['matricule'] . date('YmdHi');
            $date_transaction = date('Y-m-d');
            $heure_transaction = date('H:i');
            $montant_transaction = $montant;
            $frais = 0;
            $montant_total = $montant_transaction + $frais;
            $type_transaction = "Transfert";
            $objet_transaction = "Sponsoring";
            $numero_expediteur = $_SESSION['matricule'];
            $numero_destinataire = "Caisse";
            $token_expediteur = $token_dest;
            $token_destinataire = $token_dest;
            $conf_token_expediteur = '';
            $conf_token_destinataire = '';
            $part_entreprise = 0;
            $part_partenaire = 0;
            $part_autre = 0;
            $etat_transaction = "Succes";

            $res = $produit->AjouterTransaction($numero_transaction, $date_transaction, $heure_transaction, $montant_transaction, $frais, $montant_total, $type_transaction, $objet_transaction, $numero_expediteur, $numero_destinataire, $token_expediteur, $token_destinataire, $conf_token_expediteur, $conf_token_destinataire, $part_entreprise, $part_partenaire, $part_autre, $etat_transaction);
            if ($res) {

                //retrait de sa carte                
                $ret = $produit->UpdateSoldecarte($_SESSION['matricule'], $montant);
                if ($ret) {
                    //creation de campagne
                    $res = $produit->enregistrerCampagne($ref, $vue, $cout, $montant, $solde, $etat);

                    if ($res) {
                        $message = "<h6 style='color: blue'> Campagne enregsitré !. </h6>";
                    } else {
                        $message = "<h6 style='color: red'> Problème d'enregistrement !. </h6>";
                    }
                }
            }
        }
        if(isset($_POST['Modif']))
        {
            $ref = $_POST['ref_prod'];
            $vue = $_POST['editnbreVue'];
            $montant = $_POST['editmontant_vue'];
            $cout = $_POST['editcout'];
            $solde = $_POST['editsolde'];
            $etat = $_POST['editetat']; 
            $res=$produit->updateModal($etat,$solde,$vue,$cout,$montant,$ref);
            //$code=$ 
        }

        $Mes_produits = $produit->listeCategorieFournisseur($_SESSION['matricule']);

        $mesCampagnes = $produit->listeCampagneFournisseur($_SESSION['matricule']);
        $sponsor = $produit->listeProduitSponsorises();

        // debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Investisseur' and $_SESSION['role'] != 'Superviseur' and $_SESSION['role'] != 'Distributeur' and $_SESSION['role'] != 'Administrateur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }

        include 'views/produit/campagne.php';
    }

    public function MaListe() {

        $produit = new produitmodel();
        $reference_produit = "";
        $libelle_produit = "";
        $details_produit = "";
        $prix_achat = "";
        $prix_vente = "";
        $quota = "";
        $photo1_produit = "";
        $photo2_produit = "";
        $photo3_produit = "";
        $photo4_produit = "";
        $categorie_produit = "";
        $code_fournisseur = "";
        $etat_produit = "";

        if (!empty($_SESSION['user_id'])) {
            $nnl = $produit->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $produit->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new produitmodel();
        }

        $code = $_SESSION['matricule'];
        $sol = $produit->listeProduitFournisseur($code);
        $sponsor = $produit->listeProduitSponsorises();

        if (isset($_GET['categorie']) and isset($_GET['matricule'])) {

            $categorie = $_GET['categorie'];
            $matricule = $_GET['matricule'];

            $sol = $produit->listeProduitCategorieMatricule($categorie, $matricule);

            if (!empty($sol)) {

                $reference_produit = $sol[0]['reference_produit'];
                $libelle_produit = $sol[0]['libelle_produit'];
                $details_produit = $sol[0]['details_produit'];
                $prix_achat = $sol[0]['prix_achat'];
                $prix_vente = $sol[0]['prix_vente'];
                $quota = $sol[0]['quota'];
                $photo1_produit = utf8_encode($sol[0]['photo1_produit']);
                $photo2_produit = utf8_encode($sol[0]['photo2_produit']);
                $photo3_produit = utf8_encode($sol[0]['photo3_produit']);
                $photo4_produit = utf8_encode($sol[0]['photo4_produit']);
                $categorie_produit = $sol[0]['categorie_produit'];
                $code_fournisseur = $sol[0]['code_fournisseur'];
                $etat_produit = $sol[0]['etat_produit'];
            } else {

                $reference_produit = "";
                $libelle_produit = "";
                $details_produit = "";
                $prix_achat = "";
                $prix_vente = "";
                $quota = "";
                $photo1_produit = "";
                $photo2_produit = "";
                $photo3_produit = "";
                $photo4_produit = "";
                $categorie_produit = "";
                $code_fournisseur = "";
                $etat_produit = "";
            }
        }


        // debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Investisseur' and $_SESSION['role'] != 'Superviseur' and $_SESSION['role'] != 'Distributeur' and $_SESSION['role'] != 'Administrateur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }





        include 'views/produit/mes-produits.php';
    }

    // liste des produits
    public function listes() {

        $produit = new produitmodel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $produit->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $produit->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new produitmodel();
        }

        $sol = $produit->listeProduit();
        $sponsor = $produit->listeProduitSponsorises();


        // debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Investisseur' and $_SESSION['role'] != 'Superviseur' and $_SESSION['role'] != 'Distributeur' and $_SESSION['role'] != 'Administrateur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }





        include 'views/produit/liste-produit2.php';
    }

// produits par categorie

    public function categorie() {
        $produit = new produitmodel();

        if (!empty($_SESSION['user_id'])) {
            $nnl = $produit->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $produit->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new produitmodel();
        }


        if (isset($_GET['matricule'])) {
            $matricule = $_GET['matricule'];
            $sol = $produit->InventaireProduitMagasin($matricule);
        }

        // debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Investisseur' and $_SESSION['role'] != 'Superviseur' and $_SESSION['role'] != 'Distributeur' and $_SESSION['role'] != 'Administrateur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }

        include 'views/produit/categorie-produit.php';
    }

// produits par fournisseur

    public function fournisseurs() {
        $produit = new produitmodel();

        if (!empty($_SESSION['user_id'])) {
            $nnl = $produit->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $produit->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new produitmodel();
        }

        if (!empty($_SESSION['matricule'])) {
            $rech = $_SESSION['matricule'];
            $sol = $produit->listeProduitFournisseur($rech);
        }

        if (isset($_POST['btn_rechercher'])) {
            $rech = $_POST['sai_rechercher'];
            $sol = $produit->listeProduitFournisseur($rech);
        }


        $sponsor = $produit->listeProduitSponsorises();

        // debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Investisseur' and $_SESSION['role'] != 'Superviseur' and $_SESSION['role'] != 'Distributeur' and $_SESSION['role'] != 'Administrateur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }

        if ($_SESSION['role'] != 'Administrateur') {
            ?>

            <style>
                .quota{display:none;}      
            </style>
            <?php

        }

        include 'views/produit/fournisseurs-produit.php';
    }

    // liste des produits
    public function details() {

        $produit = new produitmodel();
        $message = "";

        $reference_produit = "";
        $libelle_produit = "";
        $details_produit = "";
        $prix_achat = "";
        $prix_vente = "";
        $quota = "";
        $photo1_produit = "";
        $photo2_produit = "";
        $photo3_produit = "";
        $photo4_produit = "";
        $categorie_produit = "";
        $code_fournisseur = "";
        $etat_produit = "";

        if (!empty($_SESSION['user_id'])) {
            $nnl = $produit->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $produit->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new produitmodel();
        }

        $sponsor = $produit->listeProduitSponsorises();
        // generateur de code 
        $char = '0123456789';
        $code = '';
        for ($i = 0; $i < 4; $i++) {
            $code .= $char[rand() % strlen($char)];
        }

        $code_comm = "COM" . date('dmY') . $code;

        //ajout au panier
        if (isset($_POST['btn_panier'])) {

            $ref = $_POST['sai_reference'];
            $mat = $_SESSION['matricule'];

            $verifP = $produit->VerifierPanier($mat, $ref);

            if (empty($verifP)) {
                //recherche du produit
                $rechProd = $produit->rechercherproduitCode($ref);
                if (!empty($rechProd)) {

                    if ($rechProd[0]['code_fournisseur'] != $_SESSION['matricule']) {

                        //ajout d'une commande
                        $adresse_livraison = "";
                        $epargne = 0;
                        $numero_commande = $code_comm;
                        $date_commande = date('Y-m-d H:i:s');
                        $frais_livraison = 0;
                        $montant_commande = $rechProd[0]['prix_vente'];
                        $montant_total = $montant_commande + $frais_livraison;
                        $prix_produit = $rechProd[0]['prix_vente'];
                        $reference_produit = $rechProd[0]['reference_produit'];
                        $quantite_produit = 1;
                        $matricule = $_SESSION['matricule'];
                        $etat_commande = "En cours";

                        $com = $produit->ajoutercommande($numero_commande, $date_commande, $reference_produit, $prix_produit, $quantite_produit, $montant_commande, $frais_livraison, $montant_total, $adresse_livraison, $epargne, $matricule, $etat_commande);
                    } else {
                        $message = "Vous ne pouvez pas acheter ce produit car vous en etes le fournisseur";
                    }
                }

                echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/commande/panier');</script>";
                exit();
            } else {
                echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/commande/panier');</script>";
                exit();
            }
        }

        //fonction rechercher par get
        if (isset($_GET['reference'])) {

            $rech = $_GET['reference'];
            
            //verif si sponsoring ne contient pas
            $spo = $produit->spo($_SESSION['matricule'], $rech);
            if(empty($spo)){
            //transaction
            // generateur de code --debut--
            $char = '0123456789';
            $token_dest = '';

            for ($i = 0; $i < 3; $i++) {
                $token_dest .= $char[rand() % strlen($char)];
            }

            $numero_transaction = $_SESSION['matricule'] . date('YmdHi');
            $date_transaction = date('Y-m-d');
            $heure_transaction = date('H:i');
            $montant_transaction = 10;
            $frais = 0;
            $montant_total = $montant_transaction + $frais;
            $type_transaction = "depot";
            $objet_transaction = "Sponsoring";
            $numero_expediteur = "Caisse";
            $numero_destinataire = $_SESSION['matricule'];
            $token_expediteur = $token_dest;
            $token_destinataire = $token_dest;
            $conf_token_expediteur = '';
            $conf_token_destinataire = '';
            $part_entreprise = 0;
            $part_partenaire = 0;
            $part_autre = 0;
            $etat_transaction = "Succes";

            $res = $produit->AjouterTransaction($numero_transaction, $date_transaction, $heure_transaction, $montant_transaction, $frais, $montant_total, $type_transaction, $objet_transaction, $numero_expediteur, $numero_destinataire, $token_expediteur, $token_destinataire, $conf_token_expediteur, $conf_token_destinataire, $part_entreprise, $part_partenaire, $part_autre, $etat_transaction);
            if ($res) {
                //ajout de 10 sur solde carte                
                $ret = $produit->UpdateSoldecarteA($_SESSION['matricule'], $montant_transaction);
                if ($ret) {
                    //ajout de 10 dans solde campagne
                    $res = $produit->updateCampagne($rech, $montant_transaction);
                    if ($res) {
                        //ajout de data dans sponsoring
                        $produit->enregSpo($_SESSION['matricule'], $rech);
                    } 
                }
            }                        
            
            }
            
            
            

            $sol = $produit->rechercherproduitCode($rech);

            if (!empty($sol)) {

                $reference_produit = $sol[0]['reference_produit'];
                $libelle_produit = $sol[0]['libelle_produit'];
                $details_produit = $sol[0]['details_produit'];
                $prix_achat = $sol[0]['prix_achat'];
                $prix_vente = $sol[0]['prix_vente'];
                $quota = $sol[0]['quota'];
                $photo1_produit = $sol[0]['photo1_produit'];
                $photo2_produit = $sol[0]['photo2_produit'];
                $photo3_produit = $sol[0]['photo3_produit'];
                $photo4_produit = $sol[0]['photo4_produit'];
                $categorie_produit = $sol[0]['categorie_produit'];
                $code_fournisseur = $sol[0]['code_fournisseur'];
                $etat_produit = $sol[0]['etat_produit'];
            } else {
                echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/produit/liste');</script>";
                exit();
            }
        } else {
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/produit/liste');</script>";
            exit();
        }


        // debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Investisseur' and $_SESSION['role'] != 'Superviseur' and $_SESSION['role'] != 'Distributeur' and $_SESSION['role'] != 'Administrateur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/carte/search/utilisateur/connexion');</script>";
            exit();
        }




        include 'views/produit/details-produit.php';
    }

}
?>