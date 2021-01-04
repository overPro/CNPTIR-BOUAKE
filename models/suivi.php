<?php

class suivimodel {
       
        public $mois;
        public $nom_patient;
        public $group_sanguin;
        public $jour;
        public $jour_1;
        public $jour_2;
        public $jour_3;
        public $jour_4;
        public $jour_5;
        public $jour_6;
        public $jour_7;
        public $jour_8;
        public $jour_9;
        public $group;
        public $numero_patient;
        public $con;
        

        public function __construct()
        {
            require "database/connexion.php";
        }
        
        public function ajouter()
        {
            $req=$this->con->prepare('INSERT INTO suivis VALUES(null,:mois,:nom_patient,:group_sanguin,:jour,:j1,:j2,:j3,:j4,:j5,:j6,:j7,:j8,:j9,:group,:numero_patient)');
            $req->bindparam(':mois',$this->mois);
            $req->bindparam(':nom_patient',$this->nom_patient);
            $req->bindparam(':group_sanguin',$this->group_sanguin);
            $req->bindparam(':jour',$this->jour);
            $req->bindparam(':j1',$this->jour_1);
            $req->bindparam(':j2',$this->jour_2);
            $req->bindparam(':j3',$this->jour_3);
            $req->bindparam(':j4',$this->jour_4);
            $req->bindparam(':j5',$this->jour_5);
            $req->bindparam(':j6',$this->jour_6);
            $req->bindparam(':j7',$this->jour_7);
            $req->bindparam(':j8',$this->jour_8);
            $req->bindparam(':j9',$this->jour_9);
            $req->bindparam(':group',$this->group);
            $req->bindparam(':numero_patient',$this->numero_patient);
            $sol=$req->execute() or print_r($this->con->ErrorInfo());
            return $sol;     

        }

        public function modifier()
        {
            $req=$this->con->prepare('UPDATE suivis SET mois=:mois,nom_patient=:nom_patient,group_sanguin=:group_sanguin,j1=:j1,j2=:j2,j3=:j3,j4=:j4,j5=:j5,j6=:j6,j7=:j7,j8=:j8,j9=:j9,group=:group WHERE numero_patient=:numero_patient');
            $req->bindparam(':mois',$this->mois);
            $req->bindparam(':nom_patient',$this->nom_patient);
            $req->bindparam(':group_sanguin',$this->group_sanguin);
            $req->bindparam(':j1',$this->j1);
            $req->bindparam(':j2',$this->j2);
            $req->bindparam(':j3',$this->j3);
            $req->bindparam(':j4',$this->j4);
            $req->bindparam(':j5',$this->j5);
            $req->bindparam(':j6',$this->j6);
            $req->bindparam(':j7',$this->j7);
            $req->bindparam(':j8',$this->j8);
            $req->bindparam(':j9',$this->j9);
            $req->bindparam(':group',$this->group);
            $req->bindparam(':numero_patient',$this->numero_patient);
            $sol=$req->execute()  or print_r($this->con->ErrorInfo());
            return $sol;     

        }

        public function rechercher($r)
        {
            $req=$this->con->prepare('SELECT * FROM suivis WHERE numero_patient=:numero_patient');
            $req->bindparam(':numero_patient',$r);
            $sol=$req->execute()  or print_r($this->con->ErrorInfo());
            $sol=$req->fetchAll();          
            return $sol;     
        }
         public function rechercherJour($m)
        {
            $req=$this->con->prepare('SELECT * FROM suivis WHERE jour=:m');
            $req->bindparam(':m',$m);
            $sol=$req->execute()  or print_r($this->con->ErrorInfo());
            $sol=$req->fetchAll();          
            return $sol;     
        }

        public function suprimer()
        {
            $req=$this->con->prepare('DELETE FROM suivis WHERE numero_patient=:numero_patient');
            $req->bindparam(':numero_patient',$this->numero_patient);
            $sol=$req->execute()  or print_r($this->con->ErrorInfo());
            return $sol;     

        }
        public function liste()
        {
            $req=$this->con->prepare('SELECT * FROM suivis');
            $sol=$req->execute()  or print_r($this->con->ErrorInfo());
            $r=$req->fetchAll();
            return $r;     

        }
        
    
    }
?>