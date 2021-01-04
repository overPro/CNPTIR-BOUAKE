<?php

class epargnemodel {

    public $code_epargne;
    public $type_epargne;
    public $date_creation;
    public $heure_epargne;
    public $montant_epargne;
    public $date_debut;
    public $date_fin;
    public $duree;
    public $frais;
    public $part_client;
    public $part_entreprise;
    public $part_partenaire;
    public $matricule;
    public $etat_epargne;
    public $con;

    public function __construct() {

        require "database/connexion.php";
    }

    public function ajouterepargne() {

        $req = $this->con->prepare('INSERT INTO epargne VALUES (:code_epargne,:type_epargne,:date_creation,:heure_epargne,:montant_epargne,:date_debut,:date_fin,:duree,:frais,:part_client,:part_entreprise,:part_partenaire,:matricule,:etat_epargne)');

        $req->bindParam(':code_epargne', $this->code_epargne);
        $req->bindParam(':type_epargne', $this->type_epargne);
        $req->bindParam(':date_creation', $this->date_creation);
        $req->bindParam(':heure_epargne', $this->heure_epargne);
        $req->bindParam(':montant_epargne', $this->montant_epargne);
        $req->bindParam(':date_debut', $this->date_debut);
        $req->bindParam(':date_fin', $this->date_fin);
        $req->bindParam(':duree', $this->duree);
        $req->bindParam(':frais', $this->frais);
        $req->bindParam(':part_client', $this->part_client);
        $req->bindParam(':part_entreprise', $this->part_entreprise);
        $req->bindParam(':part_partenaire', $this->part_partenaire);
        $req->bindParam(':matricule', $this->matricule);
        $req->bindParam(':etat_epargne', $this->etat_epargne);
       
        $exec = $req->execute();

        return $exec;
    }

        public function modifierepargne() {

        $req = $this->con->prepare('UPDATE epargne SET type_epargne=:type_epargne,date_creation=:date_creation,heure_epargne=:heure_epargne,montant_epargne=:montant_epargne,date_debut=:date_debut,date_fin=:date_fin,duree=:duree,frais=:frais,part_client=:part_client,part_entreprise=:part_entreprise,part_partenaire=:part_partenaire,matricule=:matricule,etat_epargne=:etat_epargne WHERE code_epargne=:code_epargne');

       $req->bindParam(':code_epargne', $this->code_epargne);
        $req->bindParam(':type_epargne', $this->type_epargne);
        $req->bindParam(':date_creation', $this->date_creation);
        $req->bindParam(':heure_creation', $this->heure_creation);
        $req->bindParam(':montant_epargne', $this->montant_epargne);
        $req->bindParam(':date_debut', $this->date_debut);
        $req->bindParam(':date_fin', $this->date_fin);
        $req->bindParam(':duree', $this->duree);
        $req->bindParam(':frais', $this->frais);
        $req->bindParam(':part_client', $this->part_client);
        $req->bindParam(':part_entreprise', $this->part_entreprise);
        $req->bindParam(':part_partenaire', $this->part_partenaire);
        $req->bindParam(':matricule', $this->matricule);
        $req->bindParam(':etat_epargne', $this->etat_epargne);
        $exec = $req->execute();

        return $exec;
    }

   /* public function ModifierSoldeMinimum($matricule,$solde) {

        $req = $this->con->prepare('UPDATE epargne SET type_epargne=:type_epargne WHERE matricule=:matricule');

        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':type_epargne', $solde);
        $exec = $req->execute();

        return $exec;
    }  */

    public function supprimerepargne() {
        $req = $this->con->prepare('DELETE FROM epargne WHERE code_epargne=:code_epargne');
        $req->bindParam(':code_epargne', $this->code_epargne);
        $res = $req->execute();

        return $res;

    }

     public function modifDateFin($code, $d) {
        $req = $this->con->prepare('UPDATE epargne SET date_fin=:d WHERE code_epargne=:c');
        $req->bindParam(':d', $d);
        $req->bindParam(':c', $code);
        $req->execute();
    }
    

    public function RechercherEpargne($code) {
        $req = $this->con->prepare('SELECT * FROM epargne WHERE code_epargne = :code_epargne');
        $req->bindParam(':code_epargne', $code);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }
    
public function transfertEpargne($mat, $mont) {
        $req = $this->con->prepare('UPDATE carte SET solde_carte = solde_carte+:mont WHERE matricule=:mat');
        $req->bindParam(':mont', $mont);
        $req->bindParam(':mat', $mat);
        $req->execute();
    }
    
    public function UpdateASoldecarte($expediteur,$montant_transaction) {
        $req = $this->con->prepare('UPDATE carte SET solde_carte=solde_carte +:montant_transaction WHERE matricule=:expediteur');
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
    
    public function TransfertCarteVersEpargne($expediteur, $montant_transaction, $code) {

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
    
 public function ajoutertransaction($numero_transaction,$date_transaction,
     $heure_transaction,$montant_transaction,$frais,$montant_total,$type_transaction,$objet_transaction,$numero_expediteur,$numero_destinataire,$token_expediteur,$token_destinataire,$conf_token_expediteur,$conf_token_destinataire,$part_entreprise,$part_partenaire,$part_autre,$etat_transaction) {

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

     public function supprimerepargne_avec_trace($code) {
        $req = $this->con->prepare('UPDATE epargne SET etat_epargne="Inactif" WHERE code_epargne=:code_epargne');
        $req->bindParam(':code_epargne', $code);
        $res = $req->execute();
    }
     public function ajoutMontantEpargne($code, $mont) {
        $req = $this->con->prepare('UPDATE epargne SET montant_epargne=montant_epargne+:d WHERE code_epargne=:c');
        $req->bindParam(':d', $mont);
        $req->bindParam(':c', $code);
        $req->execute();
    }
    

    public function epargneId($mat) {
        $req = $this->con->prepare('SELECT * FROM epargne WHERE code_epargne=:matricule');
        $req->bindParam(':matricule', $mat);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }



     public function rechercherepargnematricule($mat) {
        $req = $this->con->prepare('SELECT * FROM epargne WHERE  matricule=:matricule');
        $req->bindParam(':matricule', $mat);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }




public function listeepargne() {
        $req = $this->con->prepare('SELECT * FROM epargne');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }


     public function ListeEpargnePeriodeMatricule($matricule, $date_debut, $date_fin) {
        $req = $this->con->prepare('SELECT * FROM epargne WHERE matricule=:matricule and date_creation BETWEEN :date_debut and :date_fin AND etat_epargne !="Inactif"');
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':date_debut', $date_debut);
        $req->bindParam(':date_fin', $date_fin);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }


       public function ListeEpargnePeriode($matricule,$date_debut,$date_fin) {
        $req = $this->con->prepare('SELECT * FROM epargne WHERE date_creation BETWEEN :date_debut and :date_fin AND matricule=:matricule');
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':date_debut', $date_debut);
        $req->bindParam(':date_fin', $date_fin);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }


   

    public function nombreepargne() {
        $req = $this->con->prepare('SELECT COUNT(*) AS nbre FROM epargne');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }



    

    function notification_Non_Lue($u){
        $sql="SELECT * FROM notifications,utilisateur,vue WHERE utilisateur.id=vue.user AND vue.notification=notifications.id AND vue.lecture=0 AND vue.user=:u ORDER BY notifications.id DESC";
        $req= $this->con->prepare($sql);
        $req->bindParam(':u', $u);
        $req->execute() or die(print_r($this->con->ErrorInfo()));
        $res = $req->fetchAll();
        return $res;        
    }
    
    function nbre_notification_Non_Lue($u){
        $sql="SELECT * FROM notifications,utilisateur,vue WHERE utilisateur.id=vue.user AND vue.notification=notifications.id AND vue.lecture=0 AND vue.user=:u";
        $req= $this->con->prepare($sql);
        $req->bindParam(':u', $u);
        $req->execute() or die(print_r($this->con->ErrorInfo()));
        $nbre = $req->rowCount();
        return $nbre;      
    }

    function proprietaire_de_notification($u){
        $sql="SELECT utilisateur.*, notifications.id FROM notifications,utilisateur WHERE utilisateur.id=notifications.user AND notifications.id=:u";
        $req= $this->con->prepare($sql);
        $req->bindParam(':u', $u);
        $req->execute() or die(print_r($this->con->ErrorInfo()));
        $res = $req->fetchAll();
        return $res;        
    }
    

}

?>