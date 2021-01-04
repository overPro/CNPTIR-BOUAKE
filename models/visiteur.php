<?php

class VisiteurModel {

    public $id;
    public $date;
    public $heure;
    public $reference;

    //enregistrement d'un visiteur
    public function AjouterVisiteur() {
        $req = $this->con->prepare('INSERT INTO visiteurs VALUES (null,:date,:heure,:reference)');
        $req->bindParam(':date', $this->date);
        $req->bindParam(':heure', $this->heure);
        $req->bindParam(':reference', $this->reference);
        $sol = $req->execute();

        return $sol;
    }

    //rechercher un visiteur
    public function RechercherVisiteur() {
        $req = $this->con->prepare('SELECT * FROM visiteurs id=:id');
        $req->bindParam(':id', $this->id);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    //modifier un visiteur
    public function ModifierVisiteur() {
        $req = $this->con->prepare('UPDATE visiteurs SET date=:date,heure=:heure,reference=:reference WHERE id=:id');
        $req->bindParam(':id', $this->id);
        $sol = $req->execute();
        return $sol;
    }

    //supprimer un visiteur
    public function SupprimerVisiteur() {
        $req = $this->con->prepare('DELETE FROM visiteurs WHERE id=:id');
        $req->bindParam(':id', $this->id);
        $sol = $req->execute();
        return $sol;
    }

    //liste des visiteurs
    public function ListeVisiteur() {
        $req = $this->con->prepare('SELECT * FROM visiteurs');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    //liste des visiteurs par produit par periode
    public function ListeVisiteurPeriode($date_debut, $date_fin, $reference) {
        $req = $this->con->prepare('SELECT * FROM visiteurs WHERE date BETWEEN date_debut AND :date_fin AND reference=:reference ');
        $req->bindParam(':date_debut', $date_debut);
        $req->bindParam(':date_fin', $date_fin);
        $req->bindParam(':reference', $reference);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

}

?>