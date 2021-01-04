<?php
session_start();
require 'models/utilisateur.php';
require 'config/function.php';


class utilisateur { 
 
    

    public function deconnexion() {


        session_destroy();
        ?>
        <script language="javascript">
            document.location.href = "http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/connexion";
        </script>
        <?php

    }  

    public function dashboard() {
        $nbre=0;


     
     $utilisateur = new utilisateurModel();

        /*if (!empty($_SESSION['user_id'])) {
            $nnl = $utilisateur->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $utilisateur->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new utilisateurModel();
        }*/

        /*if(!empty($_SESSION['matricule']) and $_SESSION['role']=="Investisseur"){

            $matricule = $_SESSION['matricule'];

        $Rechargement = $utilisateur->RechargementClient($matricule);
        $Retrait = $utilisateur->RetraitClient($matricule);
        $Frais = $utilisateur->FraisClient($matricule);
        $Abonnement = $utilisateur->AbonnementClient($matricule);
        $Achat = $utilisateur->AchatClient($matricule);
        $Produit = $utilisateur->ProduitClient($matricule);
        $TransfertEnvoie = $utilisateur->TransfertEnvoieClient($matricule);
        $TransfertRecu = $utilisateur->TransfertRecuClient($matricule);
        $Credit = $utilisateur->CreditClient($matricule);
        $Epargne = $utilisateur->EpargneClient($matricule);
        $Investissement = $utilisateur->InvestissementClient($matricule);
        $Vente = $utilisateur->VenteClient($matricule);

        }*/

        /*if(!empty($_SESSION['role']) and $_SESSION['role']=="Superviseur"){
            

          $Rechargement = $utilisateur->RechargementTous();
          $Retrait = $utilisateur->RetraitTous();
          $Frais = $utilisateur->FraisTous();
          $Abonnement = $utilisateur->AbonnementTous();
          $Achat = $utilisateur->AchatTous();
        $Produit = $utilisateur->ProduitTous();
        $TransfertEnvoie = $utilisateur->TransfertEnvoieTous();
        $TransfertRecu = $utilisateur->TransfertRecuTous();
        $Credit = $utilisateur->CreditTous();
        $Epargne = $utilisateur->EpargneTous();
        $Investissement = $utilisateur->InvestissementTous();

        }*/



        // debut de la protection

       



       include 'views/utilisateur/tableau-bord.php';

    } 

  public function inscription() {

        $utilisateur = new utilisateurModel();

        $message = "";

        if (isset($_POST['btn_ajouter'])) {

             

// generation de code
            $char = '0123456789';
            $code = '';
            for ($i = 0; $i < 4; $i++) {
                $code .= $char[rand() % strlen($char)];
            }
// fin code de generation
            //verifier si le  telephone n'existe pas deja

            $utilisateur->telephone = $_POST['sai_telephone'];

            $verif = $utilisateur->verificationTelephone();

            if (!empty($verif)) {

                $message = "Vous etes deja inscrit.";
            } else {  



            $utilisateur->email = "";
            $utilisateur->telephone = $_POST['sai_telephone'];
            $utilisateur->nom_prenom = $_POST['sai_nom_prenom'];
            $utilisateur->date_creation = date('Y-m-d');
            $utilisateur->mdp = $_POST['sai_mdp'];
            $utilisateur->login = $_POST['sai_telephone'];
            $utilisateur->matricule = date('y').$code;
            $utilisateur->role = "Investisseur";
                    

                    $exec = $utilisateur->inscriptionUtilisateur();

                if (!empty($exec)) {

                    $message = "Succes...Votre matricule est " . date('y').$code;

                    // generation de compte
        $nombre = $utilisateur->nombrecompte();
        $cart = $utilisateur->dernierecompte();
        $car = $utilisateur->listecompte();
        
        
$numero_compte = 0;
        if($nombre[0]['nbre']==0){
        $numero_compte = 10001;         
        }
        if($nombre and $cart and $car)
        { 
        
         if ($nombre[0]['nbre'] + 10000 == $cart[0]['numero_compte']) {
            $numero_compte = $cart[0]['numero_compte']+1;
        } else {
            
           for ($i = 0; $i < $nombre[0]['nbre']; $i++) {
            if ($car[$i]['numero_compte'] == 10000 + $i + 1) {
                continue;
            } else {
                $numero_compte = 10000 + $i + 1;
                break;
            }           
        }
        }

         }

         $type_compte = "Investisseur";
         $date_creation = date('Y-m-d H:i');
         $etat_compte = "Actif";
         $solde_compte = "0";
         $matricule = date('y').$code;

         $utilisateur->CreerCompte($numero_compte,$type_compte,$solde_compte,$date_creation,$etat_compte,$matricule);

         $utilisateur->CreerBonus($numero_compte,$solde_compte,$etat_compte,$matricule);

        // fin generation de compte
                } else {

                    $message = "Echec de l'inscription ";
                }


                
           }  
        }

        include 'views/utilisateur/espace-inscription.php';
    }   
 


    public function profil() {


        $utilisateur = new utilisateurModel();
        $nbre=0;
        $sol= $utilisateur->rechercherUtilisateur($_SESSION['login']);
        $login=$sol[0]['login'];
        $passe=$sol[0]['passe'];
        $telephone=$sol[0]['telephone'];
        $telephone=$sol[0]['telephone'];
        $role=$sol[0]['role'];



        $message = "";

        

        include 'views/utilisateur/profil-utilisateur.php';
    }  

    function connexion() {

//die("connexion");
        $utilisateur = new utilisateurmodel();

        $notif = new utilisateurModel();

        $message = "";

        if (isset($_POST['btn_connexion'])) {
        

            $utilisateur->login = filter_input(INPUT_POST, "sai_login", FILTER_SANITIZE_STRING);

            $utilisateur->mdp = filter_input(INPUT_POST, "sai_mdp", FILTER_SANITIZE_STRING);


            $cnx = $utilisateur->connexion();
            /*var_dump($cnx);
            die();*/

            if (!empty($cnx)) {

                $_SESSION['login'] = $cnx[0]['login'];
                $_SESSION['passe'] = $cnx[0]['passe'];
                $_SESSION['role'] = $cnx[0]['role'];
                /*$_SESSION['email'] = $cnx[0]['email'];
                $_SESSION['telephone'] = $cnx[0]['telephone'];
                $_SESSION['nom_prenom'] = $cnx[0]['nom_prenom'];
                $_SESSION['user_id'] = $cnx[0]['id'];
                $_SESSION['photo'] = $cnx[0]['photo'];
                $_SESSION['matricule'] = $cnx[0]['matricule'];
                $_SESSION['fonction'] = $cnx[0]['fonction'];
                $_SESSION['entreprise'] = $cnx[0]['entreprise'];
                $_SESSION['date_creation'] = $cnx[0]['date_creation'];
                $_SESSION['etat'] = $cnx[0]['etat'];*/
                
                //details sur carte
                //$carte = $utilisateur->avoirDetailsCarte($_SESSION['matricule']);
                
                /*if(date('Y-m-d') > $carte[0]['date_expiration']){
                    $utilisateur->updateExpirationCarte($_SESSION['matricule']);
                }*/                

                // notification
                //$abonnement = $utilisateur->avoirDateFinAbonnement($_SESSION['matricule']);
                /*if (!empty($abonnement)) {
                    $_SESSION['abonnement'] = $abonnement[0]['fin'];
                    $nnl = $utilisateur->notification_Non_Lue($_SESSION['user_id']);
                    $nbre = $utilisateur->nbre_notification_Non_Lue($_SESSION['user_id']);
                }*/


                
                


                if ($cnx[0]['role'] == "administrateur") {
                    //die("ok");
                    //$nnl = $utilisateur->notification_Non_Lue($_SESSION['user_id']);
                    //$nbre = $utilisateur->nbre_notification_Non_Lue($_SESSION['user_id']);  


                    // die();
                    ?>
                    <script language="javascript">
                        document.location.href = "http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/dashboard"
                    </script>

                    <?php

                }
                 if ($cnx[0]['role'] == "medecin") {
                    //die("ok");
                    //$nnl = $utilisateur->notification_Non_Lue($_SESSION['user_id']);
                    //$nbre = $utilisateur->nbre_notification_Non_Lue($_SESSION['user_id']);  


                    // die();
                    ?>
                    <script language="javascript">
                        document.location.href = "http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/dashboard"
                    </script>

                    <?php

                } 
                  if ($cnx[0]['role'] == "infirmier") {
                    //die("ok");
                    //$nnl = $utilisateur->notification_Non_Lue($_SESSION['user_id']);
                    //$nbre = $utilisateur->nbre_notification_Non_Lue($_SESSION['user_id']);  


                    // die();
                    ?>
                    <script language="javascript">
                        document.location.href = "http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/dashboard"
                    </script>

                    <?php

                }if ($cnx[0]['role'] == "equipe") {
                    //die("ok");
                    //$nnl = $utilisateur->notification_Non_Lue($_SESSION['user_id']);
                    //$nbre = $utilisateur->nbre_notification_Non_Lue($_SESSION['user_id']);  


                    // die();
                    ?>
                    <script language="javascript">
                        document.location.href = "http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/dashboard"
                    </script>

                    <?php

                }
             

                


                

        if ($cnx[0]['role'] != "administrateur" or $cnx[0]['role'] != "equipe" or $cnx[0]['role'] != "medecin" or $cnx[0]['role'] != "infirmier") {
                    $message = "Aucun utilisateur n'a ete defini"
                    ?>
                    <script language="javascript">

                        document.location.href = "http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/connexion"
                    </script>

                    <?php

                }
            } else {
                $message = "<p style='color:orange'>Téléphone/Login ou mot de passe incorrectes</p>";
                

            }
        }


        include 'views/utilisateur/espace-connexion.php';
    }

    public function enregistrement() {

        $utilisateur = new utilisateurModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $utilisateur->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $utilisateur->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new utilisateurModel();
        }

        $id = "";
        $login = "";
        $nom_prenom = "";
        $telephone = "";
        $email = "";
        $mdp = "";
        $role = "";
        $fonction = "";
        $entreprise = "";
        $activite="";
        $matricule = "";
        $date_creation = "";
        $photo = "";
        $etat = "";

        $message = "";

        if (isset($_POST['btn_ajouter'])) {


            // $u1 = upload_image('sai_photo', "upload/photo/" . $_POST['sai_matricule'] . '' . $_FILES['sai_photo']['name']);
            // $u2 = upload_image('sai_photo', "upload/categorie/" . $_POST['sai_matricule'] . '' . $_FILES['sai_photo']['name']);
            
            // var_dump($u2);
            
            move_uploaded_file($_FILES['sai_photo']['tmp_name'], "upload/categorie/" . $_POST['sai_matricule'] . $_FILES['sai_photo']['name']);

            move_uploaded_file($_FILES['sai_photo']['tmp_name'], "upload/photo/" . $_POST['sai_matricule'] . $_FILES['sai_photo']['name']);
            $u1=  $_POST['sai_matricule'] . $_FILES['sai_photo']['name'];
            $u2=  $_POST['sai_matricule'] . $_FILES['sai_photo']['name'];
            // var_dump($u1);
            // var_dump($u2);
            // die();
           if (!empty($u1)) {
                $utilisateur->nom_prenom = $_POST['sai_nom_prenom'];
                $utilisateur->email = $_POST['sai_email'];
                $utilisateur->telephone = $_POST['sai_telephone'];
                $utilisateur->login = $_POST['sai_login'];
                $utilisateur->mdp = $_POST['sai_mdp'];
                $utilisateur->role = $_POST['sai_role'];
                $utilisateur->fonction = $_POST['sai_fonction'];
                $utilisateur->entreprise = $_POST['sai_entreprise'];
                $utilisateur->activite = $_POST['sai_activite'];
                $utilisateur->matricule = $_POST['sai_matricule'];
                $utilisateur->date_creation = $_POST['sai_date_creation'];
                 $utilisateur->photo = $_POST['sai_matricule'] . $_FILES['sai_photo']['name'];
                $utilisateur->etat = $_POST['sai_etat'];
               

                $exec = $utilisateur->ajouterUtilisateur();

                      
            
            }

            if (!empty($exec)) {

                $message = "Enregistrement effectué avec succes !";
            } else {

                $message = "Echec de l'enregistrement ";
            }
        }
// le bouton modifier
        if (isset($_POST['btn_modifier'])) {



            $utilisateur->id = $_POST['sai_id'];
            $utilisateur->nom_prenom = $_POST['sai_nom_prenom'];
            $utilisateur->email = $_POST['sai_email'];
            $utilisateur->telephone = $_POST['sai_telephone'];
            $utilisateur->login = $_POST['sai_login'];
            $utilisateur->mdp = $_POST['sai_mdp'];
            $utilisateur->role = $_POST['sai_role'];
            $utilisateur->fonction = $_POST['sai_fonction'];
                $utilisateur->entreprise = $_POST['sai_entreprise'];
            $utilisateur->activite = $_POST['sai_activite'];
            $utilisateur->matricule = $_POST['sai_matricule'];
            $utilisateur->date_creation = $_POST['sai_date_creation'];

            $utilisateur->etat = $_POST['sai_etat'];

            if (!empty($_FILES['sai_photo']['name'])) {
                $u1 = upload_image('sai_photo', "upload/photo/" . $_POST['sai_matricule'] . '' . $_FILES['sai_photo']['name']);
                if (!empty($u1)) {
                    $utilisateur->photo = $_POST['sai_matricule'] . '' . $_FILES['sai_photo']['name'];
                    $exec = $utilisateur->modifierUtilisateur_avec_photo();
                }
            } else {
                $exec = $utilisateur->modifierUtilisateur_sans_photo();
            }

            if (!empty($exec)) {

                $message = "Modification effectuée avec succes !";
            } else {

                $message = "Echec de la modification ";
            }
        }

        // bouton supprimer
        if (isset($_POST['btn_supprimer'])) {
            $utilisateur->login = $_POST['sai_login'];
            $exec = $utilisateur->supprimerUtilisateur();

            if (!empty($exec)) {

                $message = "Suppression effectuée avec succes !";
            } else {

                $message = "Echec de la suppression ";
            }
        }

// bouton rechercher par post
        if (isset($_POST['btn_rechercher'])) {

            $log = $_POST['sai_rechercher'];


            $sol = $utilisateur->rechercher($log);

            if (!empty($sol)) {

                $id = $sol[0]['id'];
                $login = $sol[0]['login'];
                $nom_prenom = $sol[0]['nom_prenom'];
                $telephone = $sol[0]['telephone'];
                $email = $sol[0]['email'];
                $mdp = $sol[0]['mdp'];
                $role = $sol[0]['role'];
                $fonction = $sol[0]['fonction'];
                $entreprise = $sol[0]['entreprise'];
                $activite = $sol[0]['activite'];
                $matricule = $sol[0]['matricule'];
                $date_creation = $sol[0]['date_creation'];
                $photo = $sol[0]['photo'];
                $etat = $sol[0]['etat'];
            } else {


                $message = "Cet utilisateur n'existe pas !";
            }
        }




        // bouton rechercher par post
        if (isset($_GET['login'])) {

            $login = $_GET['login'];


            $sol = $utilisateur->rechercher($login);

            if (!empty($sol)) {

                $id = $sol[0]['id'];
                $login = $sol[0]['login'];
                $nom_prenom = $sol[0]['nom_prenom'];
                $telephone = $sol[0]['telephone'];
                $email = $sol[0]['email'];
                $mdp = $sol[0]['mdp'];
                $role = $sol[0]['role'];
                $fonction = $sol[0]['fonction'];
                $entreprise = $sol[0]['entreprise'];
                $activite = $sol[0]['activite'];
                $matricule = $sol[0]['matricule'];
                $date_creation = $sol[0]['date_creation'];
                $photo = $sol[0]['photo'];
                $etat = $sol[0]['etat'];
            }
        }

        // debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Superviseur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/connexion');</script>";
            exit();
        }


        include "views/utilisateur/enregistrement-utilisateur.php";
    }

    
    public function liste() {

        $utilisateur = new utilisateurModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $utilisateur->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $utilisateur->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new utilisateurModel();
        }

        $sol = $utilisateur->afficherUtilisateur();

        // debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Superviseur'  and $_SESSION['role'] != 'Administrateur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/connexion');</script>";
            exit();
        }

        if ($_SESSION['role'] == 'Administrateur') {

           ?>
           <style>
               .operation {display: none;}
               .login {display: none;}
               .mdp {display: none;}
           </style>
           <?php 
        }

        include "views/utilisateur/liste-utilisateur.php";
    }

     public function listes() {

        $utilisateur = new utilisateurModel();
        $message="";
        if (!empty($_SESSION['user_id'])) {
            $nnl = $utilisateur->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $utilisateur->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new utilisateurModel();
        }

        if(isset($_POST['btn_rechercher'])){
            $entreprise = $_POST['sai_rechercher'];
        $sol = $utilisateur->afficherUtilisateurEntreprise($entreprise);
        }

        // debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/connexion');</script>";
            exit();
        }


        if ($_SESSION['role'] != 'Superviseur' and $_SESSION['role'] != 'Distributeur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/connexion');</script>";
            exit();
        }

        if ($_SESSION['fonction'] != 'Responsable') {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/profil');</script>";
            exit();
        }

        include "views/utilisateur/liste-utilisateur-entreprise.php";
    }


    public function boutique() {

        $utilisateur = new utilisateurModel();
        if (!empty($_SESSION['user_id'])) {
            $nnl = $utilisateur->notification_Non_Lue($_SESSION['user_id']);
            $nbre = $utilisateur->nbre_notification_Non_Lue($_SESSION['user_id']);
            $notif = new utilisateurModel();
        }

        $sol = $utilisateur->afficherUtilisateur();
        $result = $utilisateur->ListeProduitCategorie();

        if(isset($_POST['btn_rechercher'])){

            $categorie = $_POST['sai_rechercher'];
        $sol = $utilisateur->ListeUtilisateurCategorieProduit($categorie);
        
        }
        // debut de la protection

        if (!isset($_SESSION['login']) and ! isset($_SESSION['mdp'])) {

            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/connexion');</script>";
            exit();
        }


         if ($_SESSION['role'] != 'Superviseur' and $_SESSION['role'] != 'Administrateur' and $_SESSION['role'] != 'Investisseur' and $_SESSION['role'] != 'Distributeur') {

            session_destroy();
            echo "
            <script type='text/javascript'>document.location.replace('http://localhost:81/CNPTIR-BOUAKE/search/utilisateur/connexion');</script>";
            exit();
        }


        include "views/utilisateur/boutique.php";
    }


    



    }