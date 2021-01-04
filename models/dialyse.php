<?php

class dialysemodel {

    public $nom_prenom;
    public $bain;
    public $grprh;
    public $generateur;
    public $Température;
    public $dialyseur;
    public $conductivite;
    public $aiguille;
    public $electro_clamp;
    public $heparine;
    public $debit_de_dialyse;
    public $poids_theorique;
    public $connexion;
    public $medecin1;
    public $medecin2;
    public $infirmier1;
    public $infirmier2;
    public $aide_soignant1;
    public $aide_soignant2;
    public $heure1;
    public $heure2;
    public $poids_prise;
    public $poids_perte;
    public $uf_demande;
    public $uf_obtenue;
    public $ta1;
    public $pouls1;
    public $ta2;
    public $pouls2;
    public $temperature1;
    public $temperature2;
    public $h1;
    public $hep1;
    public $ta_1;
    public $pompe1;
    public $pv1;
    public $uf_dem_1;
    public $uf_obt_1;
    public $observation_1;
    public $h2;
    public $hep2;
    public $ta_2;
    public $pompe2;
    public $pv2;
    public $uf_dem_2;
    public $uf_obt_2;
    public $observation_2;
    public $h3;
    public $hep3;
    public $ta_3;
    public $pompe3;
    public $pv3;
    public $uf_dem_3;
    public $uf_obt_3;
    public $observation_3;
    public $h4;
    public $hep4;
    public $ta_4;
    public $pompe4;
    public $pv4;
    public $uf_dem_4;
    public $uf_obt_4;
    public $observation_4;
    public $h5;
    public $hep5;
    public $ta_5;
    public $pompe5;
    public $pv5;
    public $uf_dem_5;
    public $uf_obt_5;
    public $observation_5;
    public $h6;
    public $hep6;
    public $ta_6;
    public $pompe6;
    public $pv6;
    public $uf_dem_6;
    public $uf_obt_6;
    public $observation_6;
    public $h7;
    public $hep7;
    public $ta_7;
    public $pompe7;
    public $pv7;
    public $uf_dem_7;
    public $uf_obt_7;
    public $observation_7;
    public $prescription;
    public $observation;
    public $numero_patient;
    public $groupe;

    public $con;


    function __construct() {
        require "database/connexion.php";
    }

    // generation de code
// Ajouter
    public function AjouterDialyse() {
       
        $req = $this->con->prepare('INSERT INTO dossier_dialyse VALUES(Null, :nom_prenom,:bain,:grp_rh,:generateur,:temperature,:dialyseur,:conductivite,:aiguille,:electro_champ,:heparine,:debit_de_dialyse,:poid_theorique,:connexion_lignes,:medecin1,:medecin2,:infirmier1,:infirmier2,:aide_soignant1,:aide_soignant2,:heure1,:heure2,:poids_prise1,:poids_perte,:uf_demandee,:uf_obtenue,:ta1,:pouls,:ta2,:pouls2,:temperature1,:temperature2,:heure_tab1,:heure_tab2,:heure_tab3,:heure_tab4,:heure_tab5,:heure_tab6,:heure_tab7,:hep1,:hep2,:hep3,:hep4,:hep5,:hep6,:hep7,:ta_tab1,:ta_tab2,:ta_tab3,:ta_tab4,:ta_tab5,:ta_tab6,:ta_tab7,:pompe1,:pompe2,:pompe3,:pompe4,:pompe5,:pompe6,:pompe7,:pv1,:pv2,:pv3,:pv4,:pv5,:pv6,:pv7,:uf_dem1,:uf_dem2,:uf_dem3,:uf_dem4,:uf_dem5,:uf_dem6,:uf_dem7,:uf_obt1,:uf_obt2,:uf_obt3,:uf_obt4,:uf_obt5,:uf_obt6,:uf_obt7,:observation1,:observation2,:observation3,:observation4,:observation5,:observation6,:observation7,:prescription,:observation_general,:numero_patient,:groupe)');

        $req->bindParam(':nom_prenom', $this->nom_prenom);
        $req->bindParam(':bain', $this->bain);
        $req->bindParam(':grp_rh', $this->grprh);
        $req->bindParam(':generateur', $this->generateur);
        $req->bindParam(':temperature', $this->Température);
        $req->bindParam(':dialyseur', $this->dialyseur);
        $req->bindParam(':conductivite', $this->conductivite);
        $req->bindParam(':aiguille', $this->aiguille);
        $req->bindParam(':electro_champ', $this->electro_clamp);
        $req->bindParam(':heparine', $this->heparine);
        $req->bindParam(':debit_de_dialyse', $this->debit_de_dialyse);
        $req->bindParam(':poid_theorique', $this->poids_theorique);
        $req->bindParam(':connexion_lignes', $this->connexion);
        $req->bindParam(':medecin1', $this->medecin1);
        $req->bindParam(':medecin2', $this->medecin2);
        $req->bindParam(':infirmier1', $this->infirmier1);
        $req->bindParam(':infirmier2', $this->infirmier2);
        $req->bindParam(':aide_soignant1', $this->aide_soignant1);
        $req->bindParam(':aide_soignant2', $this->aide_soignant2);
        $req->bindParam(':heure1', $this->heure1);
        $req->bindParam(':heure2', $this->heure2);
        $req->bindParam(':poids_prise1', $this->poids_prise);
        $req->bindParam(':poids_perte', $this->poids_perte);
        $req->bindParam(':uf_demandee', $this->uf_demande);
        $req->bindParam(':uf_obtenue', $this->uf_obtenue);
        $req->bindParam(':ta1', $this->ta1);
        $req->bindParam(':pouls', $this->pouls1);
        $req->bindParam(':ta2', $this->ta2);
        $req->bindParam(':pouls2', $this->pouls2);
        $req->bindParam(':temperature1', $this->temperature1);
        $req->bindParam(':temperature2', $this->temperature2);
        $req->bindParam(':heure_tab1', $this->h1);
        $req->bindParam(':heure_tab2', $this->h2);
        $req->bindParam(':heure_tab3', $this->h3);
        $req->bindParam(':heure_tab4', $this->h4);
        $req->bindParam(':heure_tab5', $this->h5);
        $req->bindParam(':heure_tab6', $this->h6);
        $req->bindParam(':heure_tab7', $this->h7);
        $req->bindParam(':hep1', $this->hep1);
        $req->bindParam(':hep2', $this->hep2);
        $req->bindParam(':hep3', $this->hep3);
        $req->bindParam(':hep4', $this->hep4);
        $req->bindParam(':hep5', $this->hep5);
        $req->bindParam(':hep6', $this->hep6);
        $req->bindParam(':hep7', $this->hep7);
        $req->bindParam(':ta_tab1', $this->ta_1);
        $req->bindParam(':ta_tab2', $this->ta_2);
        $req->bindParam(':ta_tab3', $this->ta_3);
        $req->bindParam(':ta_tab4', $this->ta_4);
        $req->bindParam(':ta_tab5', $this->ta_5);
        $req->bindParam(':ta_tab6', $this->ta_6);
        $req->bindParam(':ta_tab7', $this->ta_7);
        $req->bindParam(':pompe1', $this->pompe1);
        $req->bindParam(':pompe2', $this->pompe2);
        $req->bindParam(':pompe3', $this->pompe3);
        $req->bindParam(':pompe4', $this->pompe4);
        $req->bindParam(':pompe5', $this->pompe5);
        $req->bindParam(':pompe6', $this->pompe6);
        $req->bindParam(':pompe7', $this->pompe7);
        $req->bindParam(':pv1', $this->pv1);
        $req->bindParam(':pv2', $this->pv2);
        $req->bindParam(':pv3', $this->pv3);
        $req->bindParam(':pv4', $this->pv4);
        $req->bindParam(':pv5', $this->pv5);
        $req->bindParam(':pv6', $this->pv6);
        $req->bindParam(':pv7', $this->pv7);
        $req->bindParam(':uf_dem1', $this->uf_dem_1);
        $req->bindParam(':uf_dem2', $this->uf_dem_2);
        $req->bindParam(':uf_dem3', $this->uf_dem_3);
        $req->bindParam(':uf_dem4', $this->uf_dem_4);
        $req->bindParam(':uf_dem5', $this->uf_dem_5);
        $req->bindParam(':uf_dem6', $this->uf_dem_6);
        $req->bindParam(':uf_dem7', $this->uf_dem_7);
        $req->bindParam(':uf_obt1', $this->uf_obt_1);
        $req->bindParam(':uf_obt2', $this->uf_obt_2);
        $req->bindParam(':uf_obt3', $this->uf_obt_3);
        $req->bindParam(':uf_obt4', $this->uf_obt_4);
        $req->bindParam(':uf_obt5', $this->uf_obt_5);
        $req->bindParam(':uf_obt6', $this->uf_obt_6);
        $req->bindParam(':uf_obt7', $this->uf_obt_7);
        $req->bindParam(':observation1', $this->observation_1);
        $req->bindParam(':observation2', $this->observation_2);
        $req->bindParam(':observation3', $this->observation_3);
        $req->bindParam(':observation4', $this->observation_4);
        $req->bindParam(':observation5', $this->observation_5);
        $req->bindParam(':observation6', $this->observation_6);
        $req->bindParam(':observation7', $this->observation_7);
        $req->bindParam(':prescription', $this->prescription);
        $req->bindParam(':observation_general', $this->observation);
        $req->bindParam(':numero_patient', $this->numero_patient);
        $req->bindParam(':groupe', $this->groupe);


        $sol = $req->execute()or print_r($this->con->ErrorInfo());

        return $sol;
    }

// Modifier
    public function modifiercommande() {
        $req = $this->con->prepare('UPDATE commande SET adresse_livraison=:adresse_livraison,
      date_commande=:date_commande,frais_livraison=:frais_livraison,prix_produit=:prix_produit,reference_produit=:reference_produit,montant_commande=:montant_commande,montant_total=:montant_total,quantite_produit=:quantite_produit,matricule=:matricule,etat_commande=:etat_commande WHERE numero_commande=:numero_commande');

        $req->bindParam(':adresse_livraison', $this->adresse_livraison);
        $req->bindParam(':date_commande', $this->date_commande);
        $req->bindParam(':prix_produit', $this->prix_produit);
        $req->bindParam(':frais_livraison', $this->frais_livraison);
        $req->bindParam(':reference_produit', $this->reference_produit);
        $req->bindParam(':montant_total', $this->montant_total);
        $req->bindParam(':montant_commande', $this->montant_commande);
        $req->bindParam(':quantite_produit', $this->quantite_produit);
        $req->bindParam(':numero_commande', $this->numero_commande);
        $req->bindParam(':matricule', $this->matricule);
        $req->bindParam(':epargne', $this->epargne);
        $req->bindParam(':etat_commande', $this->etat_commande);

        $sol = $req->execute();
        return $sol;
    }

// Supprimer
    public function supprimercommande() {
        $req = $this->con->prepare('UPDATE commande SET etat_commande="Annule" WHERE numero_commande=:numero_commande');
        $req->bindParam(':numero_commande', $this->numero_commande);
        $sol = $req->execute();
        return $sol;
    }
    
    public function ValiderTransactionCommande($trans, $token) {
        $req = $this->con->prepare('UPDATE transaction SET token_destinataire=:td,conf_token_destinataire=:td WHERE numero_transaction=:nu');
        $req->bindParam(':td', $token);
        $req->bindParam(':nu', $trans);
        $sol = $req->execute();
        return $sol;
    }
    public function EtatCommande($etat, $commande) {
        $req = $this->con->prepare('UPDATE commande SET etat_commande=:etat WHERE numero_commande=:nu');
        $req->bindParam(':etat', $etat);
        $req->bindParam(':nu', $commande);
        $sol = $req->execute();
        return $sol;
    }
    public function Etat_commande_transaction($etat, $commande, $tr) {
        $req = $this->con->prepare('UPDATE commande_transaction SET etat=:etat WHERE commande=:nu AND transaction=:tr');
        $req->bindParam(':etat', $etat);
        $req->bindParam(':nu', $commande);
        $req->bindParam(':tr', $tr);
        $sol = $req->execute();
        return $sol;
    }

// Rechercher des commandes par periode
    public function rechercherDossierDialyse($rech1) {
        $req = $this->con->prepare('SELECT * FROM dossier_dialyse WHERE numero_patient=:n');
        $req->bindParam(':n', $rech1);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }
    public function rechercher_transaction_par_commande($rech1) {
        $req = $this->con->prepare('SELECT * FROM commande_transaction WHERE commande=:numero_commande');
        $req->bindParam(':numero_commande', $rech1);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    // Rechercher des commandes par etat
    public function Liste() {
        $req = $this->con->prepare('SELECT *  FROM dossier_dialyse ');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function CommandeSolde() {
        $req = $this->con->prepare('SELECT count(*) as nbre FROM commande WHERE etat_commande="Solde" ');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function CommandeValide() {
        $req = $this->con->prepare('SELECT count(*) as nbre FROM commande WHERE etat_commande="Valide" ');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

   public function ListeCommandePeriode($matricule,$date_debut,$date_fin) {
        $req = $this->con->prepare('SELECT * FROM commande WHERE  date_commande BETWEEN :date_debut and :date_fin AND matricule=:matricule');
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':date_debut', $date_debut);
        $req->bindParam(':date_fin', $date_fin);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    
// Rechercher des commandes par periode
    public function recherchercommandeperiode($rech1, $rech2) {
        $req = $this->con->prepare('SELECT * FROM commande WHERE date_commande BETWEEN :datedebut AND :datefin');
        $req->bindParam(':datedebut', $rech1);
        $req->bindParam(':datefin', $rech2);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    // Rechercher des commandes par periode par client
    public function recherchercommandeperiodelog($dd, $df, $log) {
        $req = $this->con->prepare('SELECT commande.* FROM commande,produit,utilisateur WHERE commande.date_commande BETWEEN :datedebut AND :datefin AND produit.reference_produit = commande.reference_produit AND produit.code_fournisseur = utilisateur.matricule AND utilisateur.login=:log ');
        $req->bindParam(':datedebut', $dd);
        $req->bindParam(':datefin', $df);
        $req->bindParam(':log', $log);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    // Rechercher des commandes par client
    public function recherchercommandeclient($log) {
        $req = $this->con->prepare('SELECT commande.*,produit.* FROM commande,produit WHERE produit.reference_produit=commande.reference_produit AND produit.code_fournisseur=:log');
        $req->bindParam(':log', $log);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function listecommande() {
        $req = $this->con->prepare('SELECT * FROM commande');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function recherchermatricule($numero) {
        $req = $this->con->prepare('SELECT * FROM utilisateur WHERE matricule = :matricule');
        $req->bindParam(':matricule', $numero);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function RechercherEpargne($code) {
        $req = $this->con->prepare('SELECT * FROM epargne WHERE code_epargne = :code_epargne');
        $req->bindParam(':code_epargne', $code);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function ajoutMontantEpargne($code, $mont) {
        $req = $this->con->prepare('UPDATE epargne SET montant_epargne=montant_epargne+:d WHERE code_epargne=:c');
        $req->bindParam(':d', $mont);
        $req->bindParam(':c', $code);
        $req->execute();
    }

    public function listeproduit() {
        $req = $this->con->prepare('SELECT * FROM produit');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function rechercheproduitreference($ref) {
        $req = $this->con->prepare('SELECT * FROM produit WHERE reference_produit=:ref');
        $req->bindParam(':ref', $ref);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function AjouterEpargne($code_epargne, $type_epargne, $date_creation, $heure_epargne, $montant_epargne, $date_debut, $date_fin, $duree, $frais, $part_client, $part_entreprise, $part_partenaire, $matricule, $etat_epargne) {

        $req = $this->con->prepare('INSERT INTO epargne VALUES (:code_epargne,:type_epargne,:date_creation,:heure_epargne,:montant_epargne,:date_debut,:date_fin,:duree,:frais,:part_client,:part_entreprise,:part_partenaire,:matricule,:etat_epargne)');

        $req->bindParam(':code_epargne', $code_epargne);
        $req->bindParam(':type_epargne', $type_epargne);
        $req->bindParam(':date_creation', $date_creation);
        $req->bindParam(':heure_epargne', $heure_epargne);
        $req->bindParam(':montant_epargne', $montant_epargne);
        $req->bindParam(':date_debut', $date_debut);
        $req->bindParam(':date_fin', $date_fin);
        $req->bindParam(':duree', $duree);
        $req->bindParam(':frais', $frais);
        $req->bindParam(':part_client', $part_client);
        $req->bindParam(':part_entreprise', $part_entreprise);
        $req->bindParam(':part_partenaire', $part_partenaire);
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':etat_epargne', $etat_epargne);
        $exec = $req->execute();
        
        if(!$exec){
            throw new Exception("Erreur d'ajout d'epargne", 40004);
        }

        return $exec;
    }
    public function comm_transac($cmd, $transac, $epargne, $etat) {

        $req = $this->con->prepare('INSERT INTO commande_transaction VALUES (NULL, :cmd, :tran, :epargne, :etat)');

        $req->bindParam(':cmd', $cmd);
        $req->bindParam(':tran', $transac);
        $req->bindParam(':epargne', $epargne);
        $req->bindParam(':etat', $etat);
        $exec = $req->execute();        
        if(!$exec){
            throw new Exception("Erreur d'ajout d'epargne", 40004);
        }

        return $exec;
    }

    // code etranger --debut--
    public function AjouterTransaction($numero_transaction, $date_transaction, $heure_transaction, $montant_transaction, $frais, $montant_total, $type_transaction, $objet_transaction, $numero_expediteur, $numero_destinataire, $token_expediteur, $token_destinataire, $conf_token_expediteur, $conf_token_destinataire, $part_entreprise, $part_partenaire, $part_autre, $etat_transaction) {

        $req = $this->con->prepare('INSERT INTO transaction VALUES (:numero_transaction, :date_transaction,:heure_transaction,:montant_transaction,:frais,:montant_total,:type_transaction,:objet_transaction,:numero_expediteur,:numero_destinataire,:token_expediteur,:token_destinataire,:conf_token_expediteur,:conf_token_destinataire,:part_entreprise,:part_partenaire,:part_autre,:etat_transaction)');

        $req->bindParam(':numero_transaction', $numero_transaction);
        $req->bindParam(':date_transaction', $date_transaction);
        $req->bindParam(':heure_transaction', $heure_transaction);
        $req->bindParam(':montant_transaction', $montant_transaction);
        $req->bindParam(':frais', $frais);
        $req->bindParam(':montant_total', $montant_total);
        $req->bindParam(':type_transaction', $type_transaction);
        $req->bindParam(':objet_transaction', $objet_transaction);
        $req->bindParam(':numero_expediteur', $numero_expediteur);
        $req->bindParam(':numero_destinataire', $numero_destinataire);
        $req->bindParam(':token_expediteur', $token_expediteur);
        $req->bindParam(':token_destinataire', $token_destinataire);
        $req->bindParam(':conf_token_expediteur', $conf_token_expediteur);
        $req->bindParam(':conf_token_destinataire', $conf_token_destinataire);
        $req->bindParam(':part_entreprise', $part_entreprise);
        $req->bindParam(':part_partenaire', $part_partenaire);
        $req->bindParam(':part_autre', $part_autre);
        $req->bindParam(':etat_transaction', $etat_transaction);
        $exec = $req->execute();
        return $exec;
    }

    public function TransfertCarteVersEpargne($expediteur, $destinataire, $montant_transaction, $code) {

        try {
            $this->con->beginTransaction();            
            $this->UpdateSoldecarte($expediteur, $montant_transaction);
            $this->UpdateSoldeEpargne($montant_transaction, $code);
            $exec = $this->con->commit();
            
        } catch (Exception $e) {
            
            $exec = $this->con->rollback();
            echo "Erreur" . $e->getMessage();
            echo "Erreur" . $e->getCode();
        }
        return $exec;
    }
    
    public function TransfertEpargneVersCarte($expediteur, $montant_transaction, $code) {

        try {
            $this->con->beginTransaction();            
            $this->UpdateASoldecarte($expediteur, $montant_transaction);
            $this->supprimerepargne_avec_trace($code);
            $exec = $this->con->commit();
            
        } catch (Exception $e) {
            
            $exec = $this->con->rollback();
            echo "Erreur" . $e->getMessage();
            echo "Erreur" . $e->getCode();
        }
        return $exec;
    }
    
    public function supprimerepargne_avec_trace($code) {
        $req = $this->con->prepare('UPDATE epargne SET etat_epargne="Inactif" WHERE code_epargne=:code_epargne');
        $req->bindParam(':code_epargne', $code);
        $res = $req->execute();
    }
    
    public function UpdateASoldecarte($expediteur,$montant_transaction) {
        $req = $this->con->prepare('UPDATE carte SET solde_carte=solde_carte +:montant_transaction WHERE matricule=:expediteur');
        $req->bindParam(':expediteur', $expediteur);
        $req->bindParam(':montant_transaction', $montant_transaction);
        $res = $req->execute();
        if(!$res)
            throw new Exception("Erreur de mise à jour de la table Carte", 4044);        
       
    }
    
    
    public function newTransactionCommande($com, $mont, $etat,$code_epargne, $type_epargne, $date_creation, $heure_epargne, $montant_epargne, $date_debut, $date_fin, $duree, $frais, $part_client, $part_entreprise, $part_partenaire, $matricule, $etat_epargne,$expediteur, $montant_transaction) {

        try {
            $this->con->beginTransaction();            
            $this->UpdateSoldecarte($expediteur, $montant_transaction);
            $this->AugmenterEpargne($com, $mont, $etat);
            $this->AjouterEpargne($code_epargne, $type_epargne, $date_creation, $heure_epargne, $montant_epargne, $date_debut, $date_fin, $duree, $frais, $part_client, $part_entreprise, $part_partenaire, $matricule, $etat_epargne);
            $exec = $this->con->commit();
            
        } catch (Exception $e) {
            
            $exec = $this->con->rollback();
            echo "Erreur" . $e->getMessage();
            echo "Erreur" . $e->getCode();
        }
        return $exec;
    }

    public function VerificationSoldecarte($mat) {
        $req = $this->con->prepare('SELECT * FROM carte WHERE matricule=:matricule');
        $req->bindParam(':matricule', $mat);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }
    public function Etat_traitement($etat) {
        $req = $this->con->prepare('SELECT commande FROM commande_transaction WHERE etat=:e');
        $req->bindParam(':e', $etat);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function UpdateSoldecarte($expediteur,$montant_transaction) {
        $req = $this->con->prepare('UPDATE carte SET solde_carte=solde_carte -:montant_transaction WHERE matricule=:expediteur');
        $req->bindParam(':expediteur', $expediteur);
        $req->bindParam(':montant_transaction', $montant_transaction);
        $res = $req->execute();
        if(!$res)
            throw new Exception("Erreur de mise à jour de la table Carte", 4044);
        
       
    }
    
    public function UpdateSoldeEpargne($montant_transaction,$code) {
        $req = $this->con->prepare('UPDATE epargne SET montant_epargne=montant_epargne+:d WHERE code_epargne=:c');
            $req->bindParam(':d', $montant_transaction);
            $req->bindParam(':c', $code);
            $res = $req->execute();
        if(!$res)
            throw new Exception("Erreur de mise à jour de la table epargne", 4044);
        
       
    }

    public function AugmenterEpargne($com, $mont, $etat) {
        $req = $this->con->prepare('UPDATE commande SET epargne=epargne+:mont,etat_commande=:etat WHERE numero_commande=:ref and etat_commande!="Valide" ');
        $req->bindParam(':ref', $com);
        $req->bindParam(':mont', $mont);
        $req->bindParam(':etat', $etat);
        $sol = $req->execute();
        if(!$sol){
            throw new Exception("Erreur de modification de la table commande", 4044);
        }
        return $sol;
    }

    //code etranger --fin--
// panier --debut--
    public function verifPanier($c) {
        $req = $this->con->prepare('SELECT * FROM commande WHERE numero_commande=:c and etat_commande!="Valide" ');
        $req->bindParam(':c', $c);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function verifPanierPerso($num) {
        $req = $this->con->prepare('SELECT * FROM commande WHERE numero_commande=:com and etat_commande!="Valide" ');
        $req->bindParam(':com', $num);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function modPanier($mat, $ref, $qtite) {
        $req = $this->con->prepare('UPDATE commande SET quantite_produit=:qtite,montant_commande=prix_produit*:qtite WHERE commande.reference_produit=:ref and commande.matricule=:mat and commande.etat_commande!="Valide" ');
        $req->bindParam(':ref', $ref);
        $req->bindParam(':mat', $mat);
        $req->bindParam(':qtite', $qtite);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function modPanierPerso($com, $qtite) {
        $req = $this->con->prepare('UPDATE commande SET quantite_produit=:qtite,montant_commande=prix_produit*:qtite WHERE commande.numero_commande=:comm and commande.etat_commande!="Valide" ');
        $req->bindParam(':comm', $com);
        $req->bindParam(':qtite', $qtite);
        $sol = $req->execute();
        return $sol;
    }

    public function AffichagePanier($mat) {
        $req = $this->con->prepare('SELECT commande.*,produit.* FROM commande,produit WHERE commande.reference_produit=produit.reference_produit and commande.matricule=:mat and commande.etat_commande!="Valide" and commande.etat_commande!="Annule" ');
        $req->bindParam(':mat', $mat);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

// panier --fin--


    public function AffichageVente($mat, $etat) {
        $req = $this->con->prepare('SELECT commande.*,produit.* FROM commande,produit WHERE commande.reference_produit=produit.reference_produit and produit.code_fournisseur=:mat and commande.etat_commande=:etat ');
        $req->bindParam(':mat', $mat);
        $req->bindParam(':etat', $etat);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    function notification_Non_Lue($u) {
        $sql = "SELECT * FROM notifications,utilisateur,vue WHERE utilisateur.id=vue.user AND vue.notification=notifications.id AND vue.lecture=0 AND vue.user=:u ORDER BY notifications.id DESC";
        $req = $this->con->prepare($sql);
        $req->bindParam(':u', $u);
        $req->execute() or die(print_r($this->con->ErrorInfo()));
        $res = $req->fetchAll();
        return $res;
    }

    function nbre_notification_Non_Lue($u) {
        $sql = "SELECT * FROM notifications,utilisateur,vue WHERE utilisateur.id=vue.user AND vue.notification=notifications.id AND vue.lecture=0 AND vue.user=:u";
        $req = $this->con->prepare($sql);
        $req->bindParam(':u', $u);
        $req->execute() or die(print_r($this->con->ErrorInfo()));
        $nbre = $req->rowCount();
        return $nbre;
    }

    function proprietaire_de_notification($u) {
        $sql = "SELECT utilisateur.*, notifications.id FROM notifications,utilisateur WHERE utilisateur.id=notifications.user AND notifications.id=:u";
        $req = $this->con->prepare($sql);
        $req->bindParam(':u', $u);
        $req->execute() or die(print_r($this->con->ErrorInfo()));
        $res = $req->fetchAll();
        return $res;
    }

}

?>