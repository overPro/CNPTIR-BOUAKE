<?php

class bilanmodel {
        public $cr;
        public $u;
        public $na;
        public $k;
        public $ca;
        public $ph;
        public $gb;
        public $plaq;
        public $hb;
        public $vgm;
        public $ccmh;
        public $crp;
        public $pt;
        public $numero_patient;
        public $nom_prenom;
        public $date;
        public $groupe;
        public $groupe_sanguin;
        public $con;

        public function __construct()
        {
           require "database/connexion.php";
        }
        
        public function ajouterBilan()
        {
        $req=$this->con->prepare('INSERT INTO bilan VALUES(Null,:cr,:u,:na,:k,:ca,:ph,:gb,:plaq,:hb,:vgm,:ccmh,:crp,:pt,:numero_patient,:nom_prenom,:d,:groupe,:g)');
            $req->bindparam(':cr',$this->cr);
            $req->bindparam(':u',$this->u);
            $req->bindparam(':na',$this->na);
            $req->bindparam(':k',$this->k);
            $req->bindparam(':ca',$this->ca);
            $req->bindparam(':ph',$this->ph);
            $req->bindparam(':gb',$this->gb);
            $req->bindparam(':plaq',$this->plaq);
            $req->bindparam(':hb',$this->hb);
            $req->bindparam(':vgm',$this->vgm);
            $req->bindparam(':ccmh',$this->ccmh);
            $req->bindparam(':crp',$this->crp);
            $req->bindparam(':pt',$this->pt);
            $req->bindparam(':numero_patient',$this->numero_patient);
            $req->bindparam(':nom_prenom',$this->nom_prenom);
            $req->bindparam(':d',$this->date);
            $req->bindparam(':groupe',$this->groupe);
            $req->bindparam(':g',$this->groupe_sanguin);
            $sol=$req->execute()  or print_r($this->con->ErrorInfo());
            return $sol;     

        }

        public function modifier()
        {
            $req=$this->con->prepare('UPDATE bilan SET cr=:cr,u=:u,na=:na,k=:k,ca=:ca,ph=:ph,gb=:gb,plaq=:plaq,hb=:hb,vgm=:vgm,ccmh=:ccmh,crp=:crp,pt=:pt,nom_prenom=:nom_prenom,date=:date,groupe=:groupe WHERE numero_patient=:numero_patient');
            $req->bindparam(':cr',$this->cr);
            $req->bindparam(':u',$this->u);
            $req->bindparam(':na',$this->na);
            $req->bindparam(':k',$this->k);
            $req->bindparam(':ca',$this->ca);
            $req->bindparam(':ph',$this->ph);
            $req->bindparam(':gb',$this->gb);
            $req->bindparam(':plaq',$this->plaq);
            $req->bindparam(':hb',$this->hb);
            $req->bindparam(':vgm',$this->vgm);
            $req->bindparam(':ccmh',$this->ccmh);
            $req->bindparam(':crp',$this->crp);
            $req->bindparam(':pt',$this->pt);
            $req->bindparam(':numero_patient',$this->numero_patient);
            $req->bindparam(':nom_prenom',$this->nom_prenom);
            $req->bindparam(':date',$this->date);
            $req->bindparam(':groupe',$this->groupe);
            $sol=$req->execute()  or print_r($this->con->ErrorInfo());
            return $sol;     
     

        }

        public function rechercher()
        {
            $req=$this->con->prepare('SELECT * FROM bilan WHERE numero_patient=:numero');
            $req->bindparam(':numero',$this->numero_patient);
            $sol=$req->execute()  or print_r($this->con->ErrorInfo());
            $sol=$req->fetchAll();          
            return $sol;     
        }
        public function liste()
        {
            $req=$this->con->prepare('SELECT * FROM bilan');
            $req->bindparam(':numero_patient',$this->nom_patient);
            $sol=$req->execute()  or print_r($this->con->ErrorInfo());
            $sol1=$req->fetchAll();          
            return $sol1;     
        }

        public function suprimer()
        {
            $req=$this->con->prepare('DELETE FROM bilan WHERE numero_patient=:numero_patient');
            $req->bindparam(':nom_patient',$this->nom_patient);
            $sol=$req->execute()  or print_r($this->con->ErrorInfo());
            return $sol;     

        }
        
    
    }
?>