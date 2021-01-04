<?php

class rechargemodel {

    public $code_recharge;
    public $montant_recharge;
    public $date_creation;
    public $date_utilisation;
    public $etat_recharge;
    public $code_agent;
    public $etat_validation;
    public $matricule;
    public $con;

    public function __construct() {

        require "database/connexion.php";
    }

    public function ajouterrecharge() {

        $req = $this->con->prepare('INSERT INTO recharge VALUES (:code_recharge,:montant_recharge,:date_creation,:date_utilisation, :etat_recharge,:code_agent,:etat_recharge,:matricule)');

        $req->bindParam(':code_recharge', $this->code_recharge);
        $req->bindParam(':montant_recharge', $this->montant_recharge);
        $req->bindParam(':date_creation', $this->date_creation);
        $req->bindParam(':date_utilisation', $this->date_utilisation);
        $req->bindParam(':etat_recharge', $this->etat_recharge);
        $req->bindParam(':code_agent', $this->code_agent);
        $req->bindParam(':etat_validation', $this->etat_validation);
        $req->bindParam(':matricule', $this->matricule);
        $exec = $req->execute();

        return $exec;
    }

    public function modifierrecharge() {

        $req = $this->con->prepare('UPDATE recharge SET montant_recharge=:montant_recharge,date_creation=:date_creation,date_utilisation=:date_utilisation,etat_recharge=:etat_recharge,code_agent=:code_agent,etat_validation=:etat_validation,matricule=:matricule WHERE code_recharge=:code_recharge');

        $req->bindParam(':code_recharge', $this->code_recharge);
        $req->bindParam(':montant_recharge', $this->montant_recharge);
        $req->bindParam(':date_creation', $this->date_creation);
        $req->bindParam(':date_utilisation', $this->date_utilisation);
        $req->bindParam(':etat_recharge', $this->etat_recharge);
        $req->bindParam(':code_agent', $this->code_agent);
        $req->bindParam(':etat_validation', $this->etat_validation);
        $req->bindParam(':matricule', $this->matricule);
        $exec = $req->execute();

        return $exec;
    }

    public function supprimerrecharge() {
        $req = $this->con->prepare('DELETE FROM recharge WHERE code_recharge=:code_recharge');
        $req->bindParam(':code_recharge', $this->code_recharge);
        $res = $req->execute();

        return $res;
    }

    public function RechercherRecharge($numero) {
        $req = $this->con->prepare('SELECT * FROM recharge WHERE code_recharge = :code_recharge');
        $req->bindParam(':code_recharge', $numero);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function VerificationRechargeCodeEtat($code) {
        $req = $this->con->prepare('SELECT * FROM recharge WHERE code_recharge = :code_recharge AND etat_recharge="Actif" ');
        $req->bindParam(':code_recharge', $code);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function VerificationMatricule($code) {
        $req = $this->con->prepare('SELECT * FROM carte WHERE matricule = :matricule');
        $req->bindParam(':matricule', $code);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function ValidationRecharge($code, $date, $matricule, $agent) {

        $req = $this->con->prepare('UPDATE recharge SET etat_recharge="Inactif",date_utilisation=:date_utilisation,matricule=:matricule, etat_validation="Vendu",code_agent=:agent WHERE code_recharge=:code_recharge');
        $req->bindParam(':code_recharge', $code);
        $req->bindParam(':date_utilisation', $date);
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':agent', $agent);
        $exec = $req->execute();

        return $exec;
    }

    public function RechargementCarte($montant, $mat) {

        $req = $this->con->prepare('UPDATE carte SET solde_carte=solde_carte+:montant WHERE matricule=:mat');
        $req->bindParam(':montant', $montant);
        $req->bindParam(':mat', $mat);
        $exec = $req->execute();

        return $exec;
    }

    public function RechargeCarte($code) {
        $req = $this->con->prepare('SELECT * FROM recharge WHERE etat_recharge="Actif" AND etat_validation!="Vendu" AND code_recharge=:c');
        $req->bindParam(':c', $code);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

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

    public function RechargementCompteAdmin($matricule, $montant_transaction) {

        $req = $this->con->prepare('UPDATE caisse SET solde_compte=solde_compte+:montant_transaction WHERE matricule=:matricule');
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':montant_transaction', $montant_transaction);
        $exec = $req->execute();

        return $exec;
    }

    public function TransfertCarteVersCarte($numero_expediteur, $numero_destinataire, $montant_transaction) {

        try {

            $this->con->beginTransaction();
            $req = $this->con->prepare('UPDATE carte SET solde_carte=solde_carte -:montant_transaction WHERE matricule=:numero_expediteur');
            $req->bindParam(':numero_expediteur', $numero_expediteur);
            $req->bindParam(':montant_transaction', $montant_transaction);
            $req->execute();

            $req = $this->con->prepare('UPDATE carte SET solde_carte=solde_carte + :montant_transaction WHERE matricule=:numero_destinataire');
            $req->bindParam(':numero_destinataire', $numero_destinataire);
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

    public function rechercherrechargecode_agent($numero, $mat) {
        $req = $this->con->prepare('SELECT * FROM recharge WHERE code_recharge = :code_recharge AND code_agent=:code_agent');
        $req->bindParam(':code_recharge', $numero);
        $req->bindParam(':code_agent', $mat);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function ListeRecharge() {
        $req = $this->con->prepare('SELECT * FROM recharge');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function ListeRechargePeriode($matricule, $datedebut, $datefin) {
        $req = $this->con->prepare('SELECT * FROM recharge WHERE date_utilisation BETWEEN :datedebut AND :datefin AND matricule=:matricule');
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':datedebut', $datedebut);
        $req->bindParam(':datefin', $datefin);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function ImprimerRecharge() {
        $req = $this->con->prepare('SELECT * FROM recharge WHERE etat_recharge="Actif" AND etat_validation!="Vendu" and code_agent="" ');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function ImprimerRechargeEntreprise($code) {
        $req = $this->con->prepare('SELECT * FROM recharge WHERE etat_recharge="Actif" AND etat_validation!="Vendu" and code_agent=:code');
        $req->bindParam(':code', $code);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

// comptabilite des recharges
    public function NombreActif($matricule, $datedebut, $datefin) {
        $req = $this->con->prepare('SELECT COUNT(*) as a FROM recharge WHERE etat_recharge="Actif" and date_creation BETWEEN :datedebut AND :datefin AND matricule=:matricule');
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':datedebut', $datedebut);
        $req->bindParam(':datefin', $datefin);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function NombreInactif($matricule, $datedebut, $datefin) {
        $req = $this->con->prepare('SELECT COUNT(*) as a FROM recharge WHERE etat_recharge="Inactif" and date_utilisation BETWEEN :datedebut AND :datefin AND matricule=:matricule');
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':datedebut', $datedebut);
        $req->bindParam(':datefin', $datefin);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function NombreVendu($matricule, $datedebut, $datefin) {
        $req = $this->con->prepare('SELECT COUNT(*) as a FROM recharge WHERE etat_validation="Vendu" and date_utilisation BETWEEN :datedebut AND :datefin AND matricule=:matricule');
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':datedebut', $datedebut);
        $req->bindParam(':datefin', $datefin);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function NombreNonVendu($matricule, $datedebut, $datefin) {
        $req = $this->con->prepare('SELECT COUNT(*) as a FROM recharge WHERE etat_validation="Non vendu" and date_creation BETWEEN :datedebut AND :datefin AND matricule=:matricule');
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':datedebut', $datedebut);
        $req->bindParam(':datefin', $datefin);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function SommeActif($matricule, $datedebut, $datefin) {
        $req = $this->con->prepare('SELECT SUM(montant_recharge) as a FROM recharge WHERE etat_recharge="Actif" and date_creation BETWEEN :datedebut AND :datefin AND matricule=:matricule');
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':datedebut', $datedebut);
        $req->bindParam(':datefin', $datefin);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function SommeInactif($matricule, $datedebut, $datefin) {
        $req = $this->con->prepare('SELECT SUM(montant_recharge) as a FROM recharge WHERE etat_recharge="Inactif" and date_utilisation BETWEEN :datedebut AND :datefin AND matricule=:matricule');
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':datedebut', $datedebut);
        $req->bindParam(':datefin', $datefin);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function SommeVendu($matricule, $datedebut, $datefin) {
        $req = $this->con->prepare('SELECT SUM(montant_recharge) as a FROM recharge WHERE etat_validation="Vendu" and date_utilisation BETWEEN :datedebut AND :datefin AND matricule=:matricule');
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':datedebut', $datedebut);
        $req->bindParam(':datefin', $datefin);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function SommeNonVendu($matricule, $datedebut, $datefin) {
        $req = $this->con->prepare('SELECT SUM(montant_recharge) as a FROM recharge WHERE etat_validation="Non vendu" and date_creation BETWEEN :datedebut AND :datefin AND matricule=:matricule');
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':datedebut', $datedebut);
        $req->bindParam(':datefin', $datefin);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function nombrerecharge() {
        $req = $this->con->prepare('SELECT COUNT(*) FROM recharge');
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