<?php

class formationmodel {

    public $code_formation;
    public $module_formation;
    public $cout_formation;
    public $date_formation;
    public $heure_debut;
    public $heure_fin;
    public $duree_heure;
    public $lieu_formation;
    public $formateurs;
    public $cibles;
    public $matricule;
    public $etat_formation;
    public $con;

    public function __construct() {

        require "database/connexion.php";
    }

    public function ajouterformation() {

        $req = $this->con->prepare('INSERT INTO formation VALUES (:code_formation,:module_formation,:cout_formation,:date_formation,:heure_debut,:heure_fin,:duree_heure,:lieu_formation,:formateurs,:cibles,:matricule,:etat_formation)');

        $req->bindParam(':code_formation', $this->code_formation);
        $req->bindParam(':module_formation', $this->module_formation);
        $req->bindParam(':cout_formation', $this->cout_formation);
        $req->bindParam(':date_formation', $this->date_formation);
        $req->bindParam(':heure_debut', $this->heure_debut);
        $req->bindParam(':heure_fin', $this->heure_fin);
        $req->bindParam(':duree_heure', $this->duree_heure);
        $req->bindParam(':lieu_formation', $this->lieu_formation);
        $req->bindParam(':formateurs', $this->formateurs);
        $req->bindParam(':cibles', $this->cibles);
        $req->bindParam(':matricule', $this->matricule);
        $req->bindParam(':etat_formation', $this->etat_formation);
        $exec = $req->execute();

        return $exec;
    }

        public function modifierformation() {

        $req = $this->con->prepare('UPDATE formation SET module_formation=:module_formation,cout_formation=:cout_formation, date_formation=:date_formation,heure_debut=:heure_debut,heure_fin=:heure_fin,duree_heure=:duree_heure,lieu_formation=:lieu_formation,formateurs=:formateurs,cibles=:cibles,matricule=:matricule, etat_formation=:etat_formation WHERE code_formation=:code_formation');

       $req->bindParam(':code_formation', $this->code_formation);
        $req->bindParam(':module_formation', $this->module_formation);
        $req->bindParam(':cout_formation', $this->cout_formation);
        $req->bindParam(':date_formation', $this->date_fin);
        $req->bindParam(':heure_debut', $this->heure_debut);
        $req->bindParam(':heure_fin', $this->heure_fin);
        $req->bindParam(':duree_heure', $this->duree_heure);
        $req->bindParam(':lieu_formation', $this->lieu_formation);
        $req->bindParam(':formateurs', $this->formateurs);
        $req->bindParam(':cibles', $this->cibles);
        $req->bindParam(':matricule', $this->matricule);
        $req->bindParam(':etat_formation', $this->etat_formation);

        $exec = $req->execute();

        return $exec;
    }

   

    public function supprimerformation() {
        $req = $this->con->prepare('DELETE FROM formation WHERE code_formation=:code_formation');
        $req->bindParam(':code_formation', $this->code_formation);
        $res = $req->execute();

        return $res;

    }

    public function RechercherFormation($numero) {
        $req = $this->con->prepare('SELECT * FROM formation WHERE code_formation = :code_formation');
        $req->bindParam(':code_formation', $numero);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }


    public function VerificationFormationEnCours($numero) {
        $req = $this->con->prepare('SELECT * FROM diplome_formation WHERE code_formation = :code_formation');
        $req->bindParam(':code_formation', $numero);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }




public function ListeFormation() {
        $req = $this->con->prepare('SELECT * FROM formation');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }


    public function ListeFormationEntreprise($code) {
        $req = $this->con->prepare('SELECT * FROM formation WHERE matricule=:code');
        $req->bindParam(':code', $code);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }


     public function ListeAuditeursEntreprise($code) {
        $req = $this->con->prepare('SELECT * FROM diplome_formation,formation WHERE formation.code_formation=diplome_formation.code_formation and formation.matricule=:code');
        $req->bindParam(':code', $code);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

   

   public function ListeFormationAnnee($annee) {
        $req = $this->con->prepare('SELECT * FROM formation WHERE year(date_formation)=:annee');
        $req->bindParam(':annee', $annee);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function ListeFormationAnneeMatricule($annee,$matricule) {
        $req = $this->con->prepare('SELECT * FROM formation,diplome_formation WHERE year(formation.date_formation)=:annee and diplome_formation.matricule=:matricule');
        $req->bindParam(':annee', $annee);
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }


    public function NombreFormation() {
        $req = $this->con->prepare('SELECT COUNT(*) AS nbre FROM formation');
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