<?php

class prescriptionModel {

    public $nom;
    public $prenom;
    public $groupe_sanguin;
    public $voie;
    public $fav;
    public $aiguille;
    public $duree;
    public $frequence;
    public $membrane_dialyse;
    public $type_membrane;
    public $surface;
    public $debit_sanguin;
    public $anticoagulation;
    public $poids;
    public $ultra;
    public $dialysat;
    public $debit_dialysat;
    public $cd;
    public $cb;
    public $cp;
    public $cc;
    public $cg;
    public $cm;
    public $branchement;
    public $transfusion;
    public $fer_iv;
    public $epo;
    public $antihta;
    public $autre_traitement;
    public $date;
    public $numero_patient;
    public $con;

    public function __construct() {
        require "database/connexion.php";
    }

    public function ajouterprescription() {
        $req = $this->con->prepare('INSERT INTO prescription VALUES (Null,:nom,:prenom,:groupe_sanguin,:voie,:fav,:aiguille,:duree,:frequence,:membrane_dialyse,:type_membrane,:surface,:debit_sanguin,:anticoagulation,:poids,:ultra,:dialysat,:debit_dialysat,:cd,:cb,:cp,:cc,:cg,:cm,:branchement,:transfusion,:fer_iv,:epo,:antihta,:autre_traitement,:d,Null)');

        $req->bindParam(':nom', $this->nom);
        $req->bindParam(':prenom', $this->prenom);
        $req->bindParam(':groupe_sanguin', $this->groupe_sanguin);
        $req->bindParam(':voie', $this->voie);
        $req->bindParam(':fav', $this->fav);
        $req->bindParam(':aiguille', $this->aiguille);
        $req->bindParam(':duree', $this->duree);
        $req->bindParam(':frequence', $this->frequence);
        $req->bindParam(':membrane_dialyse', $this->membrane_dialyse);
        $req->bindParam(':type_membrane', $this->type_membrane);
        $req->bindParam(':surface', $this->surface);
        $req->bindParam(':debit_sanguin', $this->debit_sanguin);
        $req->bindParam(':anticoagulation', $this->anticoagulation);
        $req->bindParam(':poids', $this->poids);
        $req->bindParam(':ultra', $this->ultra);
        $req->bindParam(':dialysat', $this->dialysat);
        $req->bindParam(':debit_dialysat', $this->debit_dialysat);
        $req->bindParam(':cd', $this->cd);
        $req->bindParam(':cb', $this->cb);
        $req->bindParam(':cp', $this->cp);
        $req->bindParam(':cc', $this->cc);
        $req->bindParam(':cg', $this->cg);
        $req->bindParam(':cm', $this->cm);
        $req->bindParam(':branchement', $this->branchement);
        $req->bindParam(':transfusion', $this->transfusion);
        $req->bindParam(':fer_iv', $this->fer_iv);
        $req->bindParam(':epo', $this->epo);
        $req->bindParam(':antihta', $this->antihta);
        $req->bindParam(':autre_traitement', $this->autre_traitement);
        $req->bindParam(':d', $this->date);
        $sol = $req->execute() or print_r($this->con->errorInfo());
        return $sol;
    }

    public function modifierentreprise() {

        $req = $this->con->prepare("UPDATE entreprise SET raison_sociale=:log, registre_commerce=:nom, compte_contribuable=:mail, siege_social=:siege_social, telephone_entreprise=:tel, directeur_general=:dg,date_creation=:date_creation, email_entreprise=:mat,date_enregistrement=:date_enregistrement WHERE  code_entreprise=:code_entreprise");

        $req->bindParam(':code_entreprise', $this->code_entreprise);
        $req->bindParam(':log', $this->raison_sociale);
        $req->bindParam(':nom', $this->registre_commerce);
        $req->bindParam(':mail', $this->compte_contribuable);
        $req->bindParam(':siege_social', $this->siege_social);
        $req->bindParam(':tel', $this->telephone_entreprise);
        $req->bindParam(':dg', $this->directeur_general);
        $req->bindParam(':date_creation', $this->date_creation);
        $req->bindParam(':mat', $this->email_entreprise);
        $req->bindParam(':date_enregistrement', $this->date_enregistrement);

        $sol = $req->execute();

        return $sol;



        /* } */
    }

    public function supprimerentreprise() {
        $req = $this->con->prepare('DELETE FROM entreprise WHERE raison_sociale=:log');
        $req->bindParam(':log', $this->raison_sociale);
        $sol = $req->execute();
        return $sol;
    }

    public function rechercher($rech) {
        $req = $this->con->prepare('SELECT * FROM entreprise WHERE code_entreprise=:rech');
        $req->bindParam(':rech', $rech);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function liste($rech) {
      $req = $this->con->prepare('SELECT * FROM prescription WHERE numero_patient=:n');
       $req->bindParam(':n', $rech);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function listeP() {
        $req = $this->con->prepare('SELECT * FROM prescription');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function Estimation($choix, $niveau, $titre) {
        $req = $this->con->prepare('SELECT action.cout_action, entreprise.raison_sociale,action.niveau,action.titre,SUM(financement.montant) as fonds,COUNT(DISTINCT(financement.matricule)) AS Nbre_Investisseur FROM entreprise,action,financement WHERE action.entreprise = entreprise.raison_sociale AND financement.entreprise = action.entreprise AND financement.projet = action.titre and entreprise.raison_sociale=:c AND action.niveau=:n and action.titre=:t GROUP BY action.id,entreprise.code_entreprise');
        $req->bindParam(':c', $choix);
        $req->bindParam(':n', $niveau);
        $req->bindParam(':t', $titre);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function Affiche($choix, $niveau, $titre) {
        $req = $this->con->prepare('SELECT * FROM entreprise,action WHERE action.entreprise = entreprise.raison_sociale AND entreprise.raison_sociale=:c and action.niveau=:n and action.titre=:t');
        $req->bindParam(':c', $choix);
        $req->bindParam(':n', $niveau);
        $req->bindParam(':t', $titre);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function PourcentageFonds($choix, $niveau, $titre) {
        $pour = 0;
        $req = $this->con->prepare('SELECT SUM(financement.montant) AS fonds FROM financement WHERE entreprise=:c AND niveau=:n and projet=:t');
        $req->bindParam(':c', $choix);
        $req->bindParam(':n', $niveau);
        $req->bindParam(':t', $titre);
        $req->execute();
        $f = $req->fetchAll();

        $req = $this->con->prepare('SELECT cout_global FROM action WHERE entreprise=:c AND niveau=:n and titre=:t');
        $req->bindParam(':c', $choix);
        $req->bindParam(':n', $niveau);
        $req->bindParam(':t', $titre);
        $req->execute();
        $c = $req->fetchAll();

        if (!empty($c) and ! empty($f)) {
            $global = $c[0]['cout_global'];

            if ($global != 0) {
                $pour = ($f[0]['fonds'] * 100) / $c[0]['cout_global'];
            } else {
                $pour = 0;
            }
        }

        return $pour;
    }

    public function ListeInvestisseur($choix, $niveau, $titre) {
        $req = $this->con->prepare('SELECT utilisateur.*,financement.*, SUM(nombre_parts) as nbre FROM utilisateur,financement WHERE financement.matricule = utilisateur.matricule  and financement.entreprise=:c and financement.niveau=:n and financement.projet=:t GROUP BY utilisateur.id,financement.id');
        $req->bindParam(':c', $choix);
        $req->bindParam(':n', $niveau);
        $req->bindParam(':t', $titre);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function avoirDateFinAbonnement($mat) {
        $req = $this->con->prepare('SELECT * FROM forfait WHERE email_entreprise=:mat ORDER BY code_entreprise DESC LIMIT 1');
        $req->bindParam(':mat', $mat);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function rechercherentreprise($mat, $raison_sociale) {
        $req = $this->con->prepare('SELECT * FROM entreprise WHERE raison_sociale=:raison_sociale AND email_entreprise=:mat');
        $req->bindParam(':raison_sociale', $raison_sociale);
        $req->bindParam(':mat', $mat);
        $req->execute();
        $data = $req->fetchAll();
        return $data;
    }

    function notification_Non_Lue($u) {
        $sql = "SELECT * FROM notifications,entreprise,vue WHERE entreprise.code_entreprise=vue.user AND vue.notification=notifications.code_entreprise AND vue.lecture=0 AND vue.user=:u ORDER BY notifications.code_entreprise DESC";
        $req = $this->con->prepare($sql);
        $req->bindParam(':u', $u);
        $req->execute();
        $res = $req->fetchAll();
        return $res;
    }

    function nbre_notification_Non_Lue($u) {
        $sql = "SELECT * FROM notifications,entreprise,vue WHERE entreprise.code_entreprise=vue.user AND vue.notification=notifications.code_entreprise AND vue.lecture=0 AND vue.user=:u";
        $req = $this->con->prepare($sql);
        $req->bindParam(':u', $u);
        $req->execute();
        $nbre = $req->rowCount();
        return $nbre;
    }

    function proprietaire_de_notification($u) {
        $sql = "SELECT entreprise.*, notifications.code_entreprise FROM notifications,entreprise WHERE entreprise.code_entreprise=notifications.user AND notifications.code_entreprise=:u";
        $req = $this->con->prepare($sql);
        $req->bindParam(':u', $u);
        $req->execute();
        $res = $req->fetchAll();
        return $res;
    }

}

?>