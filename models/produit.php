<?php

class produitModel {

    public $reference_produit;
    public $libelle_produit;
    public $details_produit;
    public $prix_achat;
    public $prix_vente;
    public $quota;
    public $photo1_produit;
    public $photo2_produit;
    public $photo3_produit;
    public $photo4_produit;
    public $categorie_produit;
    public $code_fournisseur;
    public $etat_produit;
    public $con;

    function __construct() {
        require "database/connexion.php";
    }

// Ajouter
    public function ajouterproduit() {

        $req = $this->con->prepare('INSERT INTO produit VALUES(:reference_produit,:libelle_produit,:details_produit,:prix_achat,:prix_vente,:quota,:photo1_produit,:photo2_produit,:photo3_produit,:photo4_produit,:categorie_produit,:code_fournisseur,:etat_produit)');

        $req->bindParam(':reference_produit', $this->reference_produit);
        $req->bindParam(':libelle_produit', $this->libelle_produit);
        $req->bindParam(':details_produit', $this->details_produit);
        $req->bindParam(':prix_achat', $this->prix_achat);
        $req->bindParam(':prix_vente', $this->prix_vente);
        $req->bindParam(':quota', $this->quota);
        $req->bindParam(':photo1_produit', $this->photo1_produit);
        $req->bindParam(':photo2_produit', $this->photo2_produit);
        $req->bindParam(':photo3_produit', $this->photo3_produit);
        $req->bindParam(':photo4_produit', $this->photo4_produit);
        $req->bindParam(':categorie_produit', $this->categorie_produit);
        $req->bindParam(':code_fournisseur', $this->code_fournisseur);
        $req->bindParam(':etat_produit', $this->etat_produit);

        $sol = $req->execute();



        return $sol;
    }

    public function enregistrerCampagne($ref, $vue, $cout, $montant, $solde, $etat) {
        $req = $this->con->prepare('INSERT INTO campagne VALUES(NULL, :ref, :vue, :cout, :mont, :solde, :etat)');
        $req->bindParam(':ref', $ref);
        $req->bindParam(':vue', $vue);
        $req->bindParam(':cout', $cout);
        $req->bindParam(':mont', $montant);
        $req->bindParam(':solde', $solde);
        $req->bindParam(':etat', $etat);
        $sol = $req->execute() or die(print_r($this->con->errorInfo()));
        return $sol;
    }

    public function updateCampagne($ref, $solde) {
        $req = $this->con->prepare('UPDATE campagne SET solde=solde+:solde WHERE reference_produit=:ref AND etat="Actif"');
        $req->bindParam(':solde', $solde);
        $req->bindParam(':ref', $ref);
        $sol = $req->execute() or die(print_r($this->con->errorInfo()));
        return $sol;
    }
    public function updateModal($etat,$solde,$nbre_vue,$cout,$montant,$reference_produit) {
        $req = $this->con->prepare('UPDATE campagne SET solde=:solde, nbre_vue=:nbre_vue,cout=:cout,montant=:montant,etat=:etat WHERE reference_produit=:ref');
        $req->bindParam(':etat', $etat);
        $req->bindParam(':solde', $solde);
        $req->bindParam(':nbre_vue', $nbre_vue);
        $req->bindParam(':cout', $cout);
        $req->bindParam(':montant', $montant);
        $req->bindParam(':ref', $reference_produit);
        $sol = $req->execute() or die(print_r($this->con->errorInfo()));
        return $sol;
    }

// Modifier
    public function modifierproduit() {

        $req = $this->con->prepare('UPDATE produit SET libelle_produit=:libelle_produit,details_produit=:details_produit,prix_achat=:prix_achat,prix_vente=:prix_vente,quota=:quota,photo1_produit=:photo1_produit,photo2_produit=:photo2_produit,photo3_produit=:photo3_produit,photo4_produit=:photo4_produit,categorie_produit=:categorie_produit,code_fournisseur=:code_fournisseur,etat_produit=:etat_produit WHERE reference_produit=:reference_produit');

        $req->bindParam(':reference_produit', $this->reference_produit);
        $req->bindParam(':libelle_produit', $this->libelle_produit);
        $req->bindParam(':details_produit', $this->details_produit);
        $req->bindParam(':prix_achat', $this->prix_achat);
        $req->bindParam(':prix_vente', $this->prix_vente);
        $req->bindParam(':quota', $this->quota);
        $req->bindParam(':photo1_produit', $this->photo1_produit);
        $req->bindParam(':photo2_produit', $this->photo2_produit);
        $req->bindParam(':photo3_produit', $this->photo3_produit);
        $req->bindParam(':photo4_produit', $this->photo4_produit);
        $req->bindParam(':categorie_produit', $this->categorie_produit);
        $req->bindParam(':code_fournisseur', $this->code_fournisseur);
        $req->bindParam(':etat_produit', $this->etat_produit);

        $sol = $req->execute();

        return $sol;
    }

    // Modifier avec les images
    public function modifierproduit_avec_image() {

        $req = $this->con->prepare('UPDATE produit SET libelle_produit=:libelle_produit,details_produit=:details_produit,prix_achat=:prix_achat,prix_vente=:prix_vente,quota=:quota,photo1_produit=:photo1_produit,photo2_produit=:photo2_produit,photo3_produit=:photo3_produit,photo4_produit=:photo4_produit,categorie_produit=:categorie_produit,code_fournisseur=:code_fournisseur,etat_produit=:etat_produit WHERE reference_produit=:reference_produit');

        $req->bindParam(':reference_produit', $this->reference_produit);
        $req->bindParam(':libelle_produit', $this->libelle_produit);
        $req->bindParam(':details_produit', $this->details_produit);
        $req->bindParam(':prix_achat', $this->prix_achat);
        $req->bindParam(':prix_vente', $this->prix_vente);
        $req->bindParam(':quota', $this->quota);
        $req->bindParam(':photo1_produit', $this->photo1_produit);
        $req->bindParam(':photo2_produit', $this->photo2_produit);
        $req->bindParam(':photo3_produit', $this->photo3_produit);
        $req->bindParam(':photo4_produit', $this->photo4_produit);
        $req->bindParam(':categorie_produit', $this->categorie_produit);
        $req->bindParam(':code_fournisseur', $this->code_fournisseur);
        $req->bindParam(':etat_produit', $this->etat_produit);

        $sol = $req->execute();

        return $sol;
    }

    // Modifier
    public function modifierproduit_sans_image() {

        $req = $this->con->prepare('UPDATE produit SET libelle_produit=:libelle_produit,details_produit=:details_produit,prix_achat=:prix_achat,prix_vente=:prix_vente,quota=:quota,categorie_produit=:categorie_produit,code_fournisseur=:code_fournisseur,etat_produit=:etat_produit WHERE reference_produit=:reference_produit');

        $req->bindParam(':reference_produit', $this->reference_produit);
        $req->bindParam(':libelle_produit', $this->libelle_produit);
        $req->bindParam(':details_produit', $this->details_produit);
        $req->bindParam(':prix_achat', $this->prix_achat);
        $req->bindParam(':prix_vente', $this->prix_vente);
        $req->bindParam(':quota', $this->quota);
        $req->bindParam(':categorie_produit', $this->categorie_produit);
        $req->bindParam(':code_fournisseur', $this->code_fournisseur);
        $req->bindParam(':etat_produit', $this->etat_produit);

        $sol = $req->execute();



        return $sol;
    }

// Supprimer
    public function supprimerproduit() {
        $req = $this->con->prepare('DELETE FROM produit WHERE reference_produit=:reference_produit');
        $req->bindParam(':reference_produit', $this->reference_produit);
        $req->execute();
        $sol = $req->execute();
        return $sol;
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

    public function UpdateSoldecarte($expediteur, $montant_transaction) {
        $req = $this->con->prepare('UPDATE carte SET solde_carte=solde_carte -:montant_transaction WHERE matricule=:expediteur');
        $req->bindParam(':expediteur', $expediteur);
        $req->bindParam(':montant_transaction', $montant_transaction);
        $res = $req->execute();
        if (!$res)
            throw new Exception("Erreur de mise à jour de la table Carte");

        return $res;
    }

    public function UpdateSoldecarteA($expediteur, $montant_transaction) {
        $req = $this->con->prepare('UPDATE carte SET solde_carte=solde_carte +:montant_transaction WHERE matricule=:expediteur');
        $req->bindParam(':expediteur', $expediteur);
        $req->bindParam(':montant_transaction', $montant_transaction);
        $res = $req->execute();
        if (!$res)
            throw new Exception("Erreur de mise à jour de la table Carte");

        return $res;
    }

    public function TransfertCompteVersBonus($matricule1, $matricule2, $montant_transaction) {

        try {

            $this->con->beginTransaction();
            $req = $this->con->prepare('UPDATE compte SET solde_compte=solde_compte -:montant_transaction WHERE matricule=:matricule1');
            $req->bindParam(':matricule1', $matricule1);
            $req->bindParam(':montant_transaction', $montant_transaction);
            $req->execute();

            $req = $this->con->prepare('UPDATE bonus SET montant_bonus=montant_bonus + :montant_transaction WHERE matricule=:matricule2');
            $req->bindParam(':matricule2', $matricule2);
            $req->bindParam(':montant_transaction', $montant_transaction);
            $req->execute();

            $exec = $this->con->commit();
        } catch (Exception $e) {

            $exec = $this->con->rollback();

            echo "Erreur" . $e->getMessage();
            echo "Erreur" . $e->getCode();
        }
        return $exec;
    }

    //code etranger --fin--
// Rechercher par code du produit
    public function RechercherProduitCode($rech) {
        $req = $this->con->prepare('SELECT * FROM produit WHERE reference_produit=:reference_produit');
        $req->bindParam(':reference_produit', $rech);
        $req->execute();
        $solution = $req->fetchAll();
        return $solution;
    }
    public function RechercherCampagneCode($code) {
$req = $this->con->prepare('SELECT * FROM campagne WHERE campagne.reference_produit=:ref');
        $req->bindParam(':ref',$code);
        $req->execute() or print_r($this->con->ErrorInfo());
        $solution = $req->fetchAll();
        return $solution;
    }

    public function listeProduit() {
        $req = $this->con->prepare('SELECT * FROM produit');
        $req->execute();
        $solution = $req->fetchAll();
        return $solution;
    }
    public function listeCampagne() {
       $req = $this->con->prepare('SELECT * FROM campagne WHERE campagne.reference_produit=:ref');
        $req->bindParam(':ref',$this->reference_produit);
        $req->execute() or print_r($this->con->ErrorInfo());
        $solution = $req->fetchAll();
        return $solution;
    }
    

    public function spo($m, $ref) {
        $req = $this->con->prepare("SELECT sponsoring.* FROM sponsoring,campagne WHERE campagne.reference_produit=sponsoring.reference_produit AND campagne.etat='Actif' AND sponsoring.reference_produit=:ref AND sponsoring.matricule=:m");
        $req->bindParam(':m', $m);
        $req->bindParam(':ref', $ref);
        $req->execute();
        $solution = $req->fetchAll();
        return $solution;
    }

    public function enregSpo($m, $ref) {
        $req = $this->con->prepare("INSERT INTO sponsoring VALUES(NULL,:ref, :m)");
        $req->bindParam(':m', $m);
        $req->bindParam(':ref', $ref);
        $solution = $req->execute();
        return $solution;
    }

    public function listeProduitSponsorises() {
        $req = $this->con->prepare("SELECT campagne.* FROM campagne, produit WHERE campagne.reference_produit=produit.reference_produit AND campagne.etat='Actif'");
        $req->execute();
        $sponsore = $req->fetchAll();
        foreach ($sponsore as $value) {            
            if ($value['montant'] === $value['solde']) {
                $req = $this->con->prepare("UPDATE campagne SET etat ='Inactif' WHERE id=:id");
                $req->bindParam(':id', $value['id']);
                $req->execute();
            }            
            $sponsor[] = $value['reference_produit'];
        }
        return $sponsor;
    }

    public function InventaireProduitMagasin($matricule) {
        $req = $this->con->prepare('SELECT code_fournisseur,categorie_produit,COUNT(reference_produit) AS nbre_article FROM produit WHERE code_fournisseur=:matricule GROUP BY categorie_produit');
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $solution = $req->fetchAll();
        return $solution;
    }

    public function listeProduitCategorieMatricule($categorie, $matricule) {
        $req = $this->con->prepare('SELECT * FROM produit WHERE categorie_produit=:categorie_produit and code_fournisseur=:matricule');
        $req->bindParam(':categorie_produit', $categorie);
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $solution = $req->fetchAll();
        return $solution;
    }

    public function listeProduitFournisseur($rech) {
        $req = $this->con->prepare('SELECT * FROM produit WHERE code_fournisseur=:code_fournisseur');
        $req->bindParam(':code_fournisseur', $rech);
        $req->execute();
        $solution = $req->fetchAll();
        return $solution;
    }

    public function listeCategorieFournisseur($rech) {
        $req = $this->con->prepare('SELECT DISTINCT(categorie_produit) AS cat FROM produit WHERE code_fournisseur=:code_fournisseur');
        $req->bindParam(':code_fournisseur', $rech);
        $req->execute();
        $solution = $req->fetchAll();
        return $solution;
    }

    public function listeCampagneFournisseur($rech) {
        $req = $this->con->prepare('SELECT campagne.*, produit.libelle_produit FROM produit,campagne WHERE campagne.reference_produit=produit.reference_produit AND produit.code_fournisseur=:code_fournisseur');
        $req->bindParam(':code_fournisseur', $rech);
        $req->execute();
        $solution = $req->fetchAll();
        return $solution;
    }

    public function listeFournisseurMat($rech) {
        $req = $this->con->prepare('SELECT * FROM utilisateur  WHERE matricule=:matricule AND etat="Actif" ');
        $req->bindParam(':matricule', $rech);
        $req->execute();
        $solution = $req->fetchAll();
        return $solution;
    }
    public function listeEtat() {
        $req = $this->con->prepare('SELECT DISTINCT(etat) FROM campagne');
        $req->execute();
        $solution = $req->fetchAll();
        return $solution;
    }

    // gestion des commandes --debut--
// Ajouter
    public function ajoutercommande($numero_commande, $date_commande, $reference_produit, $prix_produit, $quantite_produit, $montant_commande, $frais_livraison, $montant_total, $adresse_livraison, $epargne, $matricule, $etat_commande) {
        $req = $this->con->prepare('INSERT INTO commande VALUES(:numero_commande,:date_commande,:reference_produit,:prix_produit,:quantite_produit,:montant_commande,:frais_livraison,:montant_total,:adresse_livraison,:epargne,:matricule,:etat_commande)');

        $req->bindParam(':adresse_livraison', $adresse_livraison);
        $req->bindParam(':date_commande', $date_commande);
        $req->bindParam(':prix_produit', $prix_produit);
        $req->bindParam(':frais_livraison', $frais_livraison);
        $req->bindParam(':reference_produit', $reference_produit);
        $req->bindParam(':montant_total', $montant_total);
        $req->bindParam(':montant_commande', $montant_commande);
        $req->bindParam(':quantite_produit', $quantite_produit);
        $req->bindParam(':numero_commande', $numero_commande);
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':epargne', $epargne);
        $req->bindParam(':etat_commande', $etat_commande);

        $sol = $req->execute();

        return $sol;
    }

    public function VerifierPanier($mat, $ref) {
        $req = $this->con->prepare('SELECT * FROM commande WHERE reference_produit=:ref and matricule=:mat and etat_commande!="Valide" ');
        $req->bindParam(':ref', $ref);
        $req->bindParam(':mat', $mat);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    //gestion des commandes--fin--

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