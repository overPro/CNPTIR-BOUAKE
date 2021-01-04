<?php

class investissementmodel {

    public $numero_contrat;
    public $matricule;
    public $capital;
    public $taux_mensuel;
    public $echeancier_mensuel;
    public $taux_annuel;
    public $echeancier_annuel;
    public $solde_final;
    public $duree_contrat;
    public $frequence_paiement;
    public $date_versement1;
    public $montant_versement1;
    public $etat_versement1;
    public $date_versement2;
    public $montant_versement2;
    public $etat_versement2;
    public $date_versement3;
    public $montant_versement3;
    public $etat_versement3;
    public $date_versement4;
    public $montant_versement4;
    public $etat_versement4;
    public $date_versement5;
    public $montant_versement5;
    public $date_versement6;
    public $montant_versement6;
    public $etat_versement6;
    public $date_versement7;
    public $montant_versement7;
    public $etat_versement7;
    public $date_versement8;
    public $montant_versement8;
    public $etat_versement8;
    public $date_versement9;
    public $montant_versement9;
    public $etat_versement9;
    public $date_versement10;
    public $montant_versement10;
    public $etat_versement10;
    public $date_versement11;
    public $montant_versement11;
    public $etat_versement11;
    public $date_versement12;
    public $montant_versement12;
    public $etat_versement12;
    public $part_entreprise;
    public $etat_capital;
    public $etat_investissement;
    public $con;

    public function __construct() {

        require "database/connexion.php";
    }

    public function ajouterinvestissement() {

        $req = $this->con->prepare('INSERT INTO investissement VALUES (:numero_contrat,:matricule,:capital,:taux_mensuel,:echeancier_mensuel,:taux_annuel,:echeancier_annuel,:solde_final,:duree_contrat,:frequence_paiement,:date_versement1,:montant_versement1,:etat_versement1,:date_versement2,:montant_versement2,:etat_versement2,:date_versement3,:montant_versement3,:etat_versement3,:date_versement4,:montant_versement4,:etat_versement4,:date_versement5,:montant_versement5,:etat_versement5,:date_versement6,:montant_versement6,:etat_versement6,:date_versement7,:montant_versement7,:etat_versement7,:date_versement8,:montant_versement8,:etat_versement8,:date_versement9,:montant_versement9,:etat_versement9,:date_versement10,:montant_versement10,:etat_versement10,:date_versement11,:montant_versement11,:etat_versement11,:date_versement12,:montant_versement12,:etat_versement12,:part_entreprise,:etat_capital,:etat_investissement)');

         $req->bindParam(':numero_contrat', $this->numero_contrat);
        $req->bindParam(':matricule', $this->matricule);
        $req->bindParam(':capital', $this->capital);
        $req->bindParam(':taux_mensuel', $this->taux_mensuel);
        $req->bindParam(':echeancier_mensuel', $this->echeancier_mensuel);
        $req->bindParam(':taux_annuel', $this->taux_annuel);
        $req->bindParam(':echeancier_annuel', $this->echeancier_annuel);
        $req->bindParam(':solde_final', $this->solde_final);
        $req->bindParam(':duree_contrat', $this->duree_contrat);
        $req->bindParam(':frequence_paiement', $this->frequence_paiement);
        $req->bindParam(':date_versement1', $this->date_versement1);
        $req->bindParam(':montant_versement1', $this->montant_versement1);
        $req->bindParam(':etat_versement1', $this->etat_versement1);
        $req->bindParam(':etat_versement2', $this->etat_versement2);
        $req->bindParam(':etat_versement3', $this->etat_versement3);
        $req->bindParam(':etat_versement4', $this->etat_versement4);
        $req->bindParam(':etat_versement5', $this->etat_versement5);
        $req->bindParam(':etat_versement6', $this->etat_versement6);
        $req->bindParam(':etat_versement7', $this->etat_versement7);
        $req->bindParam(':etat_versement8', $this->etat_versement8);
        $req->bindParam(':etat_versement9', $this->etat_versement9);
        $req->bindParam(':etat_versement10', $this->etat_versement10);
        $req->bindParam(':etat_versement11', $this->etat_versement11);
        $req->bindParam(':etat_versement12', $this->etat_versement12);
        $req->bindParam(':date_versement2', $this->date_versement2);
        $req->bindParam(':montant_versement2', $this->montant_versement2);
        $req->bindParam(':date_versement3', $this->date_versement3);
        $req->bindParam(':montant_versement3', $this->montant_versement3);
        $req->bindParam(':date_versement4', $this->date_versement4);
        $req->bindParam(':montant_versement4', $this->montant_versement4);
        $req->bindParam(':date_versement5', $this->date_versement5);
        $req->bindParam(':montant_versement5', $this->montant_versement5);
        $req->bindParam(':date_versement6', $this->date_versement6);
        $req->bindParam(':montant_versement6', $this->montant_versement6);
        $req->bindParam(':date_versement7', $this->date_versement7);
        $req->bindParam(':montant_versement7', $this->montant_versement7);
        $req->bindParam(':date_versement8', $this->date_versement8);
        $req->bindParam(':montant_versement8', $this->montant_versement8);
        $req->bindParam(':date_versement9', $this->date_versement9);
        $req->bindParam(':montant_versement9', $this->montant_versement9);
        $req->bindParam(':date_versement10', $this->date_versement10);
        $req->bindParam(':montant_versement10', $this->montant_versement10);
        $req->bindParam(':date_versement11', $this->date_versement11);
        $req->bindParam(':montant_versement11', $this->montant_versement11);
        $req->bindParam(':date_versement12', $this->date_versement12);
        $req->bindParam(':montant_versement12', $this->montant_versement12);
        $req->bindParam(':part_entreprise', $this->part_entreprise);
        $req->bindParam(':etat_capital', $this->etat_capital);
        $req->bindParam(':etat_investissement', $this->etat_investissement);
        $exec = $req->execute();

        return $exec;
    }

        public function modifierinvestissement() {

        $req = $this->con->prepare('UPDATE investissement SET matricule=:matricule,capital=:capital,taux_mensuel=:taux_mensuel,echeancier_mensuel=:echeancier_mensuel,taux_annuel=:taux_annuel,echeancier_annuel=:echeancier_annuel,solde_final=:solde_final,duree_contrat=:duree_contrat,frequence_paiement=:frequence_paiement,date_versement1=:date_versement1,montant_versement1=:montant_versement1,etat_versement1=:etat_versement1,date_versement2=:etat_versement2,montant_versement2=:montant_versement2,date_versement3=:date_versement3,montant_versement3=:montant_versement3,etat_versement3=:etat_versement3,date_versement4=:date_versement4,montant_versement4=:montant_versement4,etat_versement4=:etat_versement4,date_versement5=:date_versement5,montant_versement5=:montant_versement5,etat_versement5=:etat_versement5,date_versement6=:date_versement6,montant_versement6=:montant_versement6,etat_versement6=:etat_versement6,date_versement7=:date_versement7,montant_versement7=:montant_versement7,etat_versement7=:etat_versement7,date_versement8=:date_versement8,montant_versement8=:montant_versement8,etat_versement8=:etat_versement8,date_versement9=:date_versement9,montant_versement9=:montant_versement9,etat_versement9=:etat_versement9,date_versement10=:date_versement10,montant_versement10=:montant_versement10,etat_versement10=:etat_versement10,date_versement11=:date_versement11,montant_versement11=:montant_versement11,etat_versement11=:etat_versement11,date_versement12=:date_versement12,montant_versement12=:montant_versement12,etat_versement12=:etat_versement12,part_entreprise=:part_entreprise WHERE numero_contrat=:numero_contrat');

        $req->bindParam(':numero_contrat', $this->numero_contrat);
        $req->bindParam(':matricule', $this->matricule);
        $req->bindParam(':capital', $this->capital);
        $req->bindParam(':taux_mensuel', $this->taux_mensuel);
        $req->bindParam(':echeancier_mensuel', $this->echeancier_mensuel);
        $req->bindParam(':taux_annuel', $this->taux_annuel);
        $req->bindParam(':echeancier_annuel', $this->echeancier_annuel);
        $req->bindParam(':solde_final', $this->solde_final);
        $req->bindParam(':duree_contrat', $this->duree_contrat);
        $req->bindParam(':frequence_paiement', $this->frequence_paiement);
        $req->bindParam(':date_versement1', $this->date_versement1);
        $req->bindParam(':montant_versement1', $this->montant_versement1);
        $req->bindParam(':etat_versement1', $this->etat_versement1);
        $req->bindParam(':etat_versement2', $this->etat_versement2);
        $req->bindParam(':etat_versement3', $this->etat_versement3);
        $req->bindParam(':etat_versement4', $this->etat_versement4);
        $req->bindParam(':etat_versement5', $this->etat_versement5);
        $req->bindParam(':etat_versement6', $this->etat_versement6);
        $req->bindParam(':etat_versement7', $this->etat_versement7);
        $req->bindParam(':etat_versement8', $this->etat_versement8);
        $req->bindParam(':etat_versement9', $this->etat_versement9);
        $req->bindParam(':etat_versement10', $this->etat_versement10);
        $req->bindParam(':etat_versement11', $this->etat_versement11);
        $req->bindParam(':etat_versement12', $this->etat_versement12);
        $req->bindParam(':date_versement2', $this->date_versement2);
        $req->bindParam(':montant_versement2', $this->montant_versement2);
        $req->bindParam(':date_versement3', $this->date_versement3);
        $req->bindParam(':montant_versement3', $this->montant_versement3);
        $req->bindParam(':date_versement4', $this->date_versement4);
        $req->bindParam(':montant_versement4', $this->montant_versement4);
        $req->bindParam(':date_versement5', $this->date_versement5);
        $req->bindParam(':montant_versement5', $this->montant_versement5);
        $req->bindParam(':date_versement6', $this->date_versement6);
        $req->bindParam(':montant_versement6', $this->montant_versement6);
        $req->bindParam(':date_versement7', $this->date_versement7);
        $req->bindParam(':montant_versement7', $this->montant_versement7);
        $req->bindParam(':date_versement8', $this->date_versement8);
        $req->bindParam(':montant_versement8', $this->montant_versement8);
        $req->bindParam(':date_versement9', $this->date_versement9);
        $req->bindParam(':montant_versement9', $this->montant_versement9);
        $req->bindParam(':date_versement10', $this->date_versement10);
        $req->bindParam(':montant_versement10', $this->montant_versement10);
        $req->bindParam(':date_versement11', $this->date_versement11);
        $req->bindParam(':montant_versement11', $this->montant_versement11);
        $req->bindParam(':date_versement12', $this->date_versement12);
        $req->bindParam(':montant_versement12', $this->montant_versement12);
        $req->bindParam(':part_entreprise', $this->part_entreprise);
        $req->bindParam(':etat_capital', $this->etat_capital);
        $req->bindParam(':etat_investissement', $this->etat_investissement);
        $exec = $req->execute();

        return $exec;
    }



    public function supprimerinvestissement() {
        $req = $this->con->prepare('DELETE FROM investissement WHERE numero_contrat=:numero_contrat');
        $req->bindParam(':numero_contrat', $this->numero_contrat);
        $res = $req->execute();

        return $res;

    }

    public function RechercherInvestissement($numero) {
        $req = $this->con->prepare('SELECT * FROM investissement WHERE numero_contrat = :numero');
        $req->bindParam(':numero', $numero);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }


    public function investissementId($mat) {
        $req = $this->con->prepare('SELECT * FROM investissement WHERE numero_contrat=:matricule');
        $req->bindParam(':matricule', $mat);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }



     public function rechercherinvestissementmatricule($mat) {
        $req = $this->con->prepare('SELECT * FROM investissement WHERE  matricule=:matricule');
        $req->bindParam(':matricule', $mat);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }


public function ListeInvestissementPeriode($matricule,$date_debut,$date_fin) {
        $req = $this->con->prepare('SELECT * FROM investissement WHERE  date_versement1 BETWEEN :date_debut and :date_fin AND matricule=:matricule');
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':date_debut', $date_debut);
        $req->bindParam(':date_fin', $date_fin);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function ListeInvestissementPeriodeMatricule($matricule,$date_debut,$date_fin) {
        $req = $this->con->prepare('SELECT * FROM investissement WHERE  matricule=:matricule and  date_versement1 BETWEEN :date_debut and :date_fin');
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':date_debut', $date_debut);
        $req->bindParam(':date_fin', $date_fin);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }


public function listeinvestissement() {
        $req = $this->con->prepare('SELECT * FROM investissement');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

   

    public function nombreinvestissement() {
        $req = $this->con->prepare('SELECT COUNT(*) AS nbre FROM investissement');
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