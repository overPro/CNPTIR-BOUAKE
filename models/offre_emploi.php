<?php

class offremodel {

    public $code;
    public $intitule;
    public $type;
    public $profil;
    public $missions;
    public $contacts;
    public $date_creation;
    public $date_expiration;
    public $nombre_poste;
    public $matricule;
    public $etat_disponibilite;
    public $etat_offre;
    public $con;

    public function __construct() {

        require "database/connexion.php";
    }

    public function ajouteroffre() {

        $req = $this->con->prepare('INSERT INTO offre_emploi VALUES (:code,:intitule,:type,:profil,:missions,:contacts,:date_creation,:date_expiration,:nombre_poste,:matricule,:etat_disponibilite,:etat_offre)');

        $req->bindParam(':code', $this->code);
        $req->bindParam(':intitule', $this->intitule);
        $req->bindParam(':type', $this->type);
        $req->bindParam(':profil', $this->profil);
        $req->bindParam(':missions', $this->missions);
        $req->bindParam(':contacts', $this->contacts);
        $req->bindParam(':date_creation', $this->date_creation);
        $req->bindParam(':nombre_poste', $this->nombre_poste);
        $req->bindParam(':date_expiration', $this->date_expiration);
        $req->bindParam(':matricule', $this->matricule);
        $req->bindParam(':etat_disponibilite', $this->etat_disponibilite);
        $req->bindParam(':etat_offre', $this->etat_offre);
        $exec = $req->execute();

        return $exec;
    }


     public function AjouterPostulation($code,$matricule,$date_souscription,$piece_jointe) {

        $req = $this->con->prepare('INSERT INTO souscription_offre VALUES (NULL,:code,:matricule,:date_souscription,:piece_jointe)');

        $req->bindParam(':code', $code);
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':date_souscription', $date_souscription);
        $req->bindParam(':piece_jointe', $piece_jointe);
        $exec = $req->execute() or die(print_r($this->con->errorInfo()));
        return $exec;
    }


        public function modifieroffre() {

        $req = $this->con->prepare('UPDATE offre_emploi SET intitule=:intitule,type=:type,profil=:profil,missions=:missions,contacts=:contacts,date_creation=:date_creation,date_expiration=:date_expiration,nombre_poste=:nombre_poste,matricule=:matricule,etat_disponibilite=:etat_disponibilite, etat_offre=:etat_offre WHERE code=:code');

       $req->bindParam(':code', $this->code);
        $req->bindParam(':intitule', $this->intitule);
        $req->bindParam(':type', $this->type);
        $req->bindParam(':profil', $this->profil);
        $req->bindParam(':missions', $this->missions);
        $req->bindParam(':contacts', $this->contacts);
        $req->bindParam(':date_creation', $this->date_creation);
        $req->bindParam(':nombre_poste', $this->nombre_poste);
        $req->bindParam(':date_expiration', $this->date_expiration);
        $req->bindParam(':matricule', $this->matricule);
        $req->bindParam(':etat_disponibilite', $this->etat_disponibilite);
        $req->bindParam(':etat_offre', $this->etat_offre);

        $exec = $req->execute();

        return $exec;
    }

   

    public function SupprimerOffre() {
        $req = $this->con->prepare('DELETE FROM offre_emploi WHERE code=:code');
        $req->bindParam(':code', $this->code);
        $res = $req->execute();

        return $res;

    }

    public function RechercherOffre($numero) {
        $req = $this->con->prepare('SELECT * FROM offre_emploi WHERE code = :code');
        $req->bindParam(':code', $numero);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }




public function ListeOffre() {
        $req = $this->con->prepare('SELECT * FROM offre_emploi');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

public function ListeOffreStageMatricule($matricule) {
        $req = $this->con->prepare('SELECT * FROM offre_emploi,souscription_offre WHERE offre_emploi.type="Stage" and souscription_offre.matricule=:matricule and offre_emploi.code = souscription_offre.code ');
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }



    public function ListeOffreEmploiMatricule($matricule) {
        $req = $this->con->prepare('SELECT * FROM offre_emploi,souscription_offre WHERE offre_emploi.type="Emploi" and souscription_offre.matricule=:matricule and offre_emploi.code = souscription_offre.code ');
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }
   

   public function ListeOffreActif() {
        $req = $this->con->prepare('SELECT * FROM offre_emploi WHERE etat_offre="Actif" ');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }


    public function ListeOffreStageActif() {
        $req = $this->con->prepare('SELECT * FROM offre_emploi WHERE type="Stage" and etat_offre="Actif"');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }


    public function ListeOffreEmploiActif() {
        $req = $this->con->prepare('SELECT * FROM offre_emploi WHERE type="Emploi" and etat_offre="Actif" ');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }



    public function ListePostulantsOffre($code) {
        $req = $this->con->prepare('SELECT * FROM souscription_offre,offre_emploi WHERE offre_emploi.code=souscription_offre.code and offre_emploi.matricule=:code');
        $req->bindParam(':code', $code);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

  

  public function ListeOffreEntreprise($code) {
        $req = $this->con->prepare('SELECT * FROM offre_emploi WHERE matricule=:code');
        $req->bindParam(':code', $code);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    } 

    public function VerificationOffreEnCours($numero) {
        $req = $this->con->prepare('SELECT * FROM souscription_offre WHERE code = :code');
        $req->bindParam(':code', $numero);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }


    public function NombreOffre() {
        $req = $this->con->prepare('SELECT COUNT(*) AS nbre FROM offre_emploi');
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