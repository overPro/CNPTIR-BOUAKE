<?php

class transactionmodel {

    public $numero_transaction;
    public $date_transaction;
    public $heure_transaction;
    public $montant_transaction;
    public $frais;
    public $montant_total;
    public $type_transaction;
    public $objet_transaction;
    public $numero_expediteur;
    public $numero_destinataire;
    public $token_expediteur;
    public $token_destinataire;
    public $conf_token_expediteur;
    public $conf_token_destinataire;
    public $part_entreprise;
    public $part_partenaire;
    public $part_autre;
    public $etat_transaction;
    public $con;

    public function __construct() {

        require "database/connexion.php";
    }

    public function ajoutertransaction() {

        $req = $this->con->prepare('INSERT INTO transaction VALUES (:numero_transaction, :date_transaction,:heure_transaction,:montant_transaction,:frais,:montant_total,:type_transaction,:objet_transaction,:numero_expediteur,:numero_destinataire,:token_expediteur,:token_destinataire,:conf_token_expediteur,:conf_token_destinataire,:part_entreprise,:part_partenaire,:part_autre,:etat_transaction)');

        $req->bindParam(':numero_transaction', $this->numero_transaction);
        $req->bindParam(':date_transaction', $this->date_transaction);
        $req->bindParam(':heure_transaction', $this->heure_transaction);
        $req->bindParam(':montant_transaction', $this->montant_transaction);
        $req->bindParam(':frais', $this->frais);
        $req->bindParam(':montant_total', $this->montant_total);
        $req->bindParam(':type_transaction', $this->type_transaction);
        $req->bindParam(':objet_transaction', $this->objet_transaction);
        $req->bindParam(':numero_expediteur', $this->numero_expediteur);
        $req->bindParam(':numero_destinataire', $this->numero_destinataire);
        $req->bindParam(':token_expediteur', $this->token_expediteur);
        $req->bindParam(':token_destinataire', $this->token_destinataire);
        $req->bindParam(':conf_token_expediteur', $this->conf_token_expediteur);
        $req->bindParam(':conf_token_destinataire', $this->conf_token_destinataire);
        $req->bindParam(':part_entreprise', $this->part_entreprise);
        $req->bindParam(':part_partenaire', $this->part_partenaire); 
        $req->bindParam(':part_autre', $this->part_autre);     
        $req->bindParam(':etat_transaction', $this->etat_transaction);
        $exec = $req->execute();
        return $exec;
    }

    public function modifiertransaction() {

        $req = $this->con->prepare('UPDATE transaction SET date_transaction=:date_transaction,heure_transaction=:heure_transaction,montant_transaction=:montant_transaction,frais=:frais,montant_total=:montant_total,type_transaction=:type_transaction,objet_transaction=:objet_transaction,numero_expediteur=:numero_expediteur,numero_destinataire=:numero_destinataire,token_expediteur=:token_expediteur,token_destinataire=:token_destinataire,conf_token_expediteur=:conf_token_expediteur,conf_token_destinataire=:conf_token_destinataire,part_entreprise=:part_entreprise,part_partenaire=:part_partenaire,part_autre=:part_autre,etat_transaction=:etat_transaction WHERE numero_transaction=:numero_transaction');

        $req->bindParam(':numero_transaction', $this->numero_transaction);
        $req->bindParam(':date_transaction', $this->date_transaction);
        $req->bindParam(':heure_transaction', $this->heure_transaction);
        $req->bindParam(':montant_transaction', $this->montant_transaction);
        $req->bindParam(':frais', $this->frais);
        $req->bindParam(':montant_total', $this->montant_total);
        $req->bindParam(':type_transaction', $this->type_transaction);
        $req->bindParam(':objet_transaction', $this->objet_transaction);
        $req->bindParam(':numero_expediteur', $this->numero_expediteur);
        $req->bindParam(':numero_destinataire', $this->numero_destinataire);
        $req->bindParam(':token_expediteur', $this->token_expediteur);
        $req->bindParam(':token_destinataire', $this->token_destinataire);
        $req->bindParam(':conf_token_expediteur', $this->conf_token_expediteur);
        $req->bindParam(':conf_token_destinataire', $this->conf_token_destinataire);
        $req->bindParam(':part_entreprise', $this->part_entreprise);
        $req->bindParam(':part_partenaire', $this->part_partenaire); 
        $req->bindParam(':part_autre', $this->part_autre);     
        $req->bindParam(':etat_transaction', $this->etat_transaction);
        $exec = $req->execute();

        return $exec;
    }

    public function supprimertransaction() {
        $req = $this->con->prepare('DELETE FROM transaction WHERE numero_transaction=:numero_transaction');
        $req->bindParam(':numero_transaction', $this->numero_transaction);
        $res = $req->execute();

        return $res;
    }

    public function recherchertransaction($numero) {
        $req = $this->con->prepare('SELECT * FROM transaction WHERE numero_transaction = :numero_transaction');
        $req->bindParam(':numero_transaction', $numero);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

      

// les fonctions historiques 
     public function liste($datedebut, $datefin) {
        $req = $this->con->prepare('SELECT * FROM transaction WHERE date_transaction BETWEEN :datedebut AND :datefin');
        $req->bindParam(':datedebut', $datedebut);
        $req->bindParam(':datefin', $datefin);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }





 public function historique($mat,$datedebut,$datefin) {
        $req = $this->con->prepare('SELECT * FROM transaction WHERE date_transaction BETWEEN :datedebut AND :datefin AND  (numero_destinataire=:mat OR numero_expediteur=:mat) ');
        $req->bindParam(':datedebut', $datedebut);
        $req->bindParam(':datefin', $datefin);
        $req->bindParam(':mat', $mat);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }
    
 public function suivi_transaction_type($type,$datedebut,$datefin) {
        $req = $this->con->prepare('SELECT * FROM transaction WHERE date_transaction BETWEEN :datedebut AND :datefin AND type_transaction=:mat');
        $req->bindParam(':datedebut', $datedebut);
        $req->bindParam(':datefin', $datefin);
        $req->bindParam(':mat', $type);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }
    
 public function suivi_transaction($datedebut,$datefin) {
        $req = $this->con->prepare('SELECT * FROM transaction WHERE date_transaction BETWEEN :datedebut AND :datefin');
        $req->bindParam(':datedebut', $datedebut);
        $req->bindParam(':datefin', $datefin);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }


//liste totale
    public function listetransaction() {
        $req = $this->con->prepare('SELECT * FROM transaction');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

public function DemandeTransaction() {
        $req = $this->con->prepare('SELECT * FROM transaction WHERE objet_transaction="Demande de retrait" and etat_transaction!="Succes" ');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }


    public function RetraitTransactionEtatPeriodeMatricule($matricule,$etat,$datedebut,$datefin) {
        $req = $this->con->prepare('SELECT * FROM transaction WHERE numero_expediteur=:matricule and (etat_transaction=:etat or etat_transaction!="") and date_transaction BETWEEN :datedebut AND :datefin');
        $req->bindParam(':datedebut', $datedebut);
        $req->bindParam(':datefin', $datefin);
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':etat', $etat);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function RetraitTransactionPeriodeTous($matricule,$datedebut,$datefin) {
        $req = $this->con->prepare('SELECT * FROM transaction WHERE numero_expediteur=:matricule and etat_transaction!="" and date_transaction BETWEEN :datedebut AND :datefin');
        $req->bindParam(':datedebut', $datedebut);
        $req->bindParam(':datefin', $datefin);
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

     public function VerificationMatricule($numero) {
        $req = $this->con->prepare('SELECT * FROM carte WHERE matricule = :matricule and etat_carte="Actif" ');
        $req->bindParam(':matricule', $numero);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function RetraitSoldeCarte($matricule,$montant) {
        $req = $this->con->prepare('UPDATE carte SET solde_carte = solde_carte-:montant WHERE matricule =:matricule');
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':montant', $montant);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }


// fin montant total

    function notification_Non_Lue($u) {
        $sql = "SELECT * FROM notifications,utilisateur,vue WHERE utilisateur.id=vue.user AND vue.notification=notifications.id AND vue.lecture=0 AND vue.user=:u ORDER BY notifications.id DESC";
        $req = $this->con->prepare($sql);
        $req->bindParam(':u', $u);
        $req->execute();
        $res = $req->fetchAll();
        return $res;
    }

    function nbre_notification_Non_Lue($u) {
        $sql = "SELECT * FROM notifications,utilisateur,vue WHERE utilisateur.id=vue.user AND vue.notification=notifications.id AND vue.lecture=0 AND vue.user=:u";
        $req = $this->con->prepare($sql);
        $req->bindParam(':u', $u);
        $req->execute();
        $nbre = $req->rowCount();
        return $nbre;
    }

    function proprietaire_de_notification($u) {
        $sql = "SELECT utilisateur.*, notifications.id FROM notifications,utilisateur WHERE utilisateur.id=notifications.user AND notifications.id=:u";
        $req = $this->con->prepare($sql);
        $req->bindParam(':u', $u);
        $req->execute();
        $res = $req->fetchAll();
        return $res;
    }

}

?>