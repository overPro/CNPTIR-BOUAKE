<?php

class medicauxmodel {

        public $numero; 
        public   $date;
        public $jour_de_dialyse; 
        public $groupe_sanguin ;
        public $nom ;
        public $prenom; 
        public $nom_emprunt; 
        public $date_de_naisssance;
        public $age ;
        public $tranche_age; 
        public $sexe;
        public $groupe_ethnique;
        public $niveau_etude;
        public $situation_matrimoniale;
        public $residence;  
        public $quartier;
        public $hors_bouake;
        public $preciser;
       public  $hta;
       public  $vih;
       public  $diabete;
       public  $hta_de_diabete;
        public $gnc;
        public $ntic;
        public $pkad;
       public  $drepanocytose;
       public  $indetermine;
       public  $autre_causes;
       public  $insuffisance_cardique_congestive;
       public  $diabete1;
         public $alcool;
       public  $tabac;
         public $vih1;
         public $tuberculose;
         public $atteinte_neurologique;
         public $atteinte_rhumatismale;
         public $hepatophie;
         public $atteinte_intestinale;
       public  $atteinte_pulmonaire;
       public  $cancer;
       public  $date_de_diagnostic_de_la_maladie;
       public  $date_de_mise_en_dialyse;
       public  $premier_centre_avant_bouake;
      public   $duree_du_suivi_avant_la_mise_en_dialyse;
      public   $duree_dans_ce_centre;
      public   $date_de_debut_des_dialyse;
      public   $duree_centre_de_bouake;
      public   $catheter_nbre;
      public   $kt1;
      public   $kt2;
      public   $kt3;
      public   $infection;
      public   $dysfonction;
      public   $saignement;
     public    $maturation_fav;
     public    $fav;
     public    $date_de_creation;
     public    $duree;
     public    $reprise;
     public    $difficultes;
     public    $prise_de_poids;
     public    $ta_equilibre;
     public    $hta1;
     public    $hta2;
     public    $vomissement;
     public    $prurit;
     public    $vertiges;
     public    $saignements;
     public    $autres;
     public    $traitement_perdialyque;
     public    $ssi;
     public    $transfusion;
     public    $antihta;
     public    $autres1;
    public     $taux_dhemoglobine;
    public     $taux_dalbumine;
    public     $crp;
    public     $hiv;
    public     $aghbs;
    public     $acvhc;
    public     $vaccination_hepatite_b;
    public     $rx_pulmonaire_ict;
    public     $echographie_cardiaque;
    public     $vg;
    public     $fes;
    public     $cavite_cardiaques;
    public     $rdGroup1;
    public     $fer_oral;
    public     $fer_iv;
    public     $transfusion1;
    public     $nbre_de_fois;
    public     $date_de_la_derniere;
    public     $traitementantihta;
    public     $nbre_antihta;
    public     $diuretiques;
    public     $calcium_oral;
    public     $traitement_traditionnel;
    public     $autre_traitement;
    public     $con;

    public function __construct() {

        require "database/connexion.php";
    }

    public function AjouterMedicaux() {

        $req = $this->con->prepare('INSERT INTO dossier_malade VALUES (NULL,:numero, :groupe_sanguin,:d,:jour_de_dialyse,:nom,:prenom, :nom_emprunt,:date_de_naissance,:age,:tranche_age,:sexe,:groupe_ethnie, :niveau_etude,:situation_matri,:residence,:quartier,:hors_bouake, :preciser,:hta,:vih,:diabete,:hta_de_diabete,:gnc,:ntic,:pkad,:drepanocytose, :autre_cause,:indetermine,:insuffisance_cardique_congestive,:diabete1, :alcool,:tabac,:vih1,:tuberculose,:atteinte_neurologique,:atteinte_rhumatismale,:hepatopathie,:atteinte_intestinale,:atteinte_pulmonaire,:cancer, :date_de_diagnostic,:duree_de_suivi2, :date_de_mise_en_dialyse,:premier_centre_avant_bouake, :duree_dans_ce_centre,:date_de_debut,:duree_centre_de_bouake, :catheter_nombre,:duree_kt1,:kt2,:kt3,:infection,:dysfonction, :saignement,:maturation_FAV,:FAV,:date_de_creation,:duree,:reprise, :fifficulte,:prise_de_poids,:ta_equilibre,:hta1,:hta2,:vomissements, :prurit,:vertiges,:saignements,:autres,:traitement_perdialytique,:ssi, :transfusion,:antihta,:autres1,:taux_hemoglobine,:taux_albumine,:crp, :hiv,:aghbs,:acvhc,:vaccination_hepatite_b,:rx_pulmonaire_ict, :echographie_cardiaque,:vg,:fes,:cavite_cardiaque,:epo,:fer_oral, :fer_iv,:transfusion1,:nombre_de_fois,:date_de_la_derniere, :traitement_anti_hta,:nombre_de_anti_hta,:diuretiques,:calcium_oral, :traitement_traditionnel,:autre_traitement)');

        $req->bindParam(':numero', $this->numero);
        $req->bindParam(':groupe_sanguin', $this->groupe_sanguin);
        $req->bindParam(':d', $this->date);
        $req->bindParam(':jour_de_dialyse', $this->jour_de_dialyse);
        $req->bindParam(':nom', $this->nom);
        $req->bindParam(':prenom', $this->prenom);
        $req->bindParam(':nom_emprunt', $this->nom_emprunt);
        $req->bindParam(':date_de_naissance', $this->date_de_naisssance);
        $req->bindParam(':age', $this->age);
        $req->bindParam(':tranche_age', $this->tranche_age);
        $req->bindParam(':sexe', $this->sexe);
        $req->bindParam(':groupe_ethnie', $this->groupe_ethnique);
        $req->bindParam(':niveau_etude', $this->niveau_etude);
        $req->bindParam(':situation_matri', $this->situation_matrimoniale);
        $req->bindParam(':residence', $this->residence);
        $req->bindParam(':quartier', $this->quartier);
        $req->bindParam(':hors_bouake', $this->hors_bouake);
        $req->bindParam(':preciser', $this->preciser);
        $req->bindParam(':hta', $this->hta);
        $req->bindParam(':vih', $this->vih);
        $req->bindParam(':diabete', $this->diabete);
        $req->bindParam(':hta_de_diabete', $this->hta_de_diabete);
        $req->bindParam(':gnc', $this->gnc);
        $req->bindParam(':ntic', $this->ntic);
        $req->bindParam(':pkad', $this->pkad);
        $req->bindParam(':drepanocytose', $this->drepanocytose);
        $req->bindParam(':autre_cause', $this->autre_causes);
        $req->bindParam(':indetermine', $this->indetermine);
        $req->bindParam(':insuffisance_cardique_congestive', $this->insuffisance_cardique_congestive);
        $req->bindParam(':diabete1', $this->diabete1);
        $req->bindParam(':alcool', $this->alcool);
        $req->bindParam(':tabac', $this->tabac);
        $req->bindParam(':vih1', $this->vih1);
        $req->bindParam(':tuberculose', $this->tuberculose);
        $req->bindParam(':atteinte_neurologique', $this->atteinte_neurologique);
        $req->bindParam(':atteinte_rhumatismale', $this->atteinte_rhumatismale);
        $req->bindParam(':hepatopathie', $this->hepatophie);
        $req->bindParam(':atteinte_intestinale', $this->atteinte_intestinale);
        $req->bindParam(':atteinte_pulmonaire', $this->atteinte_pulmonaire);
        $req->bindParam(':cancer', $this->cancer);
        $req->bindParam(':date_de_diagnostic', $this->date_de_diagnostic_de_la_maladie);
        $req->bindParam(':duree_de_suivi2', $this->duree_du_suivi_avant_la_mise_en_dialyse);
        $req->bindParam(':date_de_mise_en_dialyse', $this->date_de_mise_en_dialyse);
        $req->bindParam(':premier_centre_avant_bouake', $this->premier_centre_avant_bouake);
        $req->bindParam(':duree_dans_ce_centre', $this->duree_dans_ce_centre);
        $req->bindParam(':date_de_debut', $this->date_de_debut_des_dialyse);
        $req->bindParam(':duree_centre_de_bouake', $this->duree_centre_de_bouake);
        $req->bindParam(':catheter_nombre', $this->catheter_nbre);
        $req->bindParam(':duree_kt1', $this->kt1);
        $req->bindParam(':kt2', $this->kt2);
        $req->bindParam(':kt3', $this->kt3);
        $req->bindParam(':infection', $this->infection);
        $req->bindParam(':dysfonction', $this->dysfonction);
        $req->bindParam(':saignement', $this->saignement);
        $req->bindParam(':maturation_FAV', $this->maturation_fav);
        $req->bindParam(':FAV', $this->fav);
        $req->bindParam(':date_de_creation', $this->date_de_creation);
        $req->bindParam(':duree', $this->duree);
        $req->bindParam(':reprise', $this->reprise);
        $req->bindParam(':fifficulte', $this->difficultes);
        $req->bindParam(':prise_de_poids', $this->prise_de_poids);
        $req->bindParam(':ta_equilibre', $this->ta_equilibre);
        $req->bindParam(':hta1', $this->hta1);
        $req->bindParam(':hta2', $this->hta2);
        $req->bindParam(':vomissements', $this->vomissement);
        $req->bindParam(':prurit', $this->prurit);
        $req->bindParam(':vertiges', $this->vertiges);
        $req->bindParam(':saignements', $this->saignements);
        $req->bindParam(':autres', $this->autres);
        $req->bindParam(':traitement_perdialytique', $this->traitement_perdialyque);
        $req->bindParam(':ssi', $this->ssi);
        $req->bindParam(':transfusion', $this->transfusion);
        $req->bindParam(':antihta', $this->antihta);
        $req->bindParam(':autres1', $this->autres1);
        $req->bindParam(':taux_hemoglobine', $this->taux_dhemoglobine);
        $req->bindParam(':taux_albumine', $this->taux_dalbumine);
        $req->bindParam(':crp', $this->crp);
        $req->bindParam(':hiv', $this->hiv);
        $req->bindParam(':aghbs', $this->aghbs);
        $req->bindParam(':acvhc', $this->acvhc);
        $req->bindParam(':vaccination_hepatite_b', $this->vaccination_hepatite_b);
        $req->bindParam(':rx_pulmonaire_ict', $this->rx_pulmonaire_ict);
        $req->bindParam(':echographie_cardiaque', $this->echographie_cardiaque);
        $req->bindParam(':vg', $this->vg);
        $req->bindParam(':fes', $this->fes);
        $req->bindParam(':cavite_cardiaque', $this->cavite_cardiaques);
        $req->bindParam(':epo', $this->rdGroup1);
        $req->bindParam(':fer_oral', $this->fer_oral);
        $req->bindParam(':fer_iv', $this->fer_iv);
        $req->bindParam(':transfusion1', $this->transfusion1);
        $req->bindParam(':nombre_de_fois', $this->nbre_de_fois);
        $req->bindParam(':date_de_la_derniere', $this->date_de_la_derniere);
        $req->bindParam(':traitement_anti_hta', $this->traitementantihta);
        $req->bindParam(':nombre_de_anti_hta', $this->nbre_antihta);
        $req->bindParam(':diuretiques', $this->diuretiques);
        $req->bindParam(':calcium_oral', $this->calcium_oral);
        $req->bindParam(':traitement_traditionnel', $this->traitement_traditionnel);
        $req->bindParam(':autre_traitement', $this->autre_traitement);
       
        $exec = $req->execute() or print_r($this->con->ErrorInfo());

        return $exec;
    }

        public function modifiercredit(){

        $req = $this->con->prepare('UPDATE credit SET date_credit=:date_credit,heure_credit=:heure_credit,capital=:capital,taux_interet=:taux_interet,montant_interet=:montant_interet,dette=:dette,date_remboursement=:date_remboursement,epargne=:epargne,part_entreprise=:part_entreprise,part_partenaire=:part_partenaire,part_autre=:part_autre,matricule=:matricule, etat_credit=:etat_credit WHERE code_credit=:code_credit');

       $req->bindParam(':code_credit', $this->code_credit);
        $req->bindParam(':date_credit', $this->date_credit);
        $req->bindParam(':heure_credit', $this->heure_credit);
        $req->bindParam(':capital', $this->capital);
        $req->bindParam(':taux_interet', $this->taux_interet);
        $req->bindParam(':montant_interet', $this->montant_interet);
        $req->bindParam(':dette', $this->dette);
        $req->bindParam(':date_remboursement', $this->date_remboursement);
        $req->bindParam(':epargne', $this->epargne);
        $req->bindParam(':part_entreprise', $this->part_entreprise);
        $req->bindParam(':part_partenaire', $this->part_partenaire);
        $req->bindParam(':part_autre', $this->part_autre);
        $req->bindParam(':matricule', $this->matricule);
        $req->bindParam(':etat_credit', $this->etat_credit);
        $exec = $req->execute();

        return $exec;
    }

  

    public function supprimercredit() {
        $req = $this->con->prepare('DELETE FROM credit WHERE code_credit=:code_credit');
        $req->bindParam(':code_credit', $this->code_credit);
        $res = $req->execute();

        return $res;

    }

    public function RechercherMedicaux($code) {
        $req = $this->con->prepare('SELECT * FROM dossier_malade WHERE numero = :c');
        $req->bindParam(':c', $code);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }


    public function creditId($mat) {
        $req = $this->con->prepare('SELECT * FROM credit WHERE code_credit=:part_partenaire');
        $req->bindParam(':part_partenaire', $mat);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }


    public function ListeCreditPeriodeMatricule($matricule,$date_debut,$date_fin) {
        $req = $this->con->prepare('SELECT * FROM credit WHERE matricule=:matricule and date_credit BETWEEN :date_debut and :date_fin');
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':date_debut', $date_debut);
        $req->bindParam(':date_fin', $date_fin);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }


public function ListeCreditPeriode($matricule,$date_debut,$date_fin) {
        $req = $this->con->prepare('SELECT * FROM credit WHERE  date_credit BETWEEN :date_debut and :date_fin AND matricule=:matricule');
        $req->bindParam(':matricule', $matricule);
        $req->bindParam(':date_debut', $date_debut);
        $req->bindParam(':date_fin', $date_fin);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }


public function ListeCredit() {
        $req = $this->con->prepare('SELECT * FROM credit');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

   

    public function nombrecredit() {
        $req = $this->con->prepare('SELECT COUNT(*) AS nbre FROM credit');
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