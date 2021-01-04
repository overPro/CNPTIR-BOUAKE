<?php
class utilisateurModel {

    public $id;
    public $login;
    public $nom_prenom;
    public $email;
    public $passe;
    public $telephone;
    public $matricule;
    public $role;
    public $fonction;
    public $entreprise;
    public $activite;
    public $date_creation;
    public $photo;
    public $etat;
    public $con;

    public function __construct() {
        require "database/connexion.php";
    }

    public function ajouterUtilisateur() {


        $req = $this->con->prepare('INSERT INTO utilisateur VALUES (null,:log, :nom, :mail, :mdp, :tel, :mat,:role,:activite,:date_creation,:photo,:etat)');
        $req->bindParam(':log', $this->login);
        $req->bindParam(':nom', $this->nom_prenom);
        $req->bindParam(':mail', $this->email);
        $req->bindParam(':mdp', $this->mdp);
        $req->bindParam(':tel', $this->telephone);
        $req->bindParam(':role', $this->role);
        $req->bindParam(':fonction', $this->fonction);
        $req->bindParam(':entreprise', $this->entreprise);
        $req->bindParam(':activite', $this->activite);
        $req->bindParam(':mat', $this->matricule);
        $req->bindParam(':date_creation', $this->date_creation);
        $req->bindParam(':photo', $this->photo);
        $req->bindParam(':etat', $this->etat);
        $sol = $req->execute();
        return $sol;



    }

        public function modifierUtilisateur_avec_photo() {
        $req = $this->con->prepare("UPDATE utilisateur SET login=:log, nom_prenom=:nom, email=:mail, mdp=:mdp, telephone=:tel, role=:role, fonction=:fonction,entreprise=:entreprise, matricule=:mat, activite=:activite, date_creation=:date_creation,photo=:photo,etat=:etat WHERE  id=:id");
        $req->bindParam(':id', $this->id);
        $req->bindParam(':log', $this->login);
        $req->bindParam(':nom', $this->nom_prenom);
        $req->bindParam(':mail', $this->email);
        $req->bindParam(':mdp', $this->mdp);
        $req->bindParam(':tel', $this->telephone);
        $req->bindParam(':role', $this->role);
        $req->bindParam(':fonction', $this->fonction);
        $req->bindParam(':entreprise', $this->entreprise);
        $req->bindParam(':activite', $this->activite);
        $req->bindParam(':mat', $this->matricule);
        $req->bindParam(':date_creation', $this->date_creation); 
        $req->bindParam(':photo', $this->photo);
        $req->bindParam(':etat', $this->etat);
        $sol = $req->execute();
        return $sol;

        

        /*} */
    }
    
    public function modifierUtilisateur_sans_photo() {
        $req = $this->con->prepare("UPDATE utilisateur SET login=:log, nom_prenom=:nom, email=:mail, mdp=:mdp, telephone=:tel, role=:role,fonction=:fonction,entreprise=:entreprise,activite=:activite, matricule=:mat,date_creation=:date_creation,etat=:etat WHERE id=:id");
        $req->bindParam(':id', $this->id);
        $req->bindParam(':log', $this->login);
        $req->bindParam(':nom', $this->nom_prenom);
        $req->bindParam(':mail', $this->email);
        $req->bindParam(':mdp', $this->mdp);
        $req->bindParam(':tel', $this->telephone);
        $req->bindParam(':role', $this->role);
        $req->bindParam(':fonction', $this->fonction);
        $req->bindParam(':entreprise', $this->entreprise);
        $req->bindParam(':activite', $this->activite);
        $req->bindParam(':mat', $this->matricule);
        $req->bindParam(':date_creation', $this->date_creation); 
        $req->bindParam(':etat', $this->etat);
        $sol = $req->execute();
        return $sol;

        

        /*} */
    }

    public function modifierUtilisateur() {



        $req = $this->con->prepare("UPDATE utilisateur SET login=:log, nom_prenom=:nom, email=:mail, mdp=:mdp, telephone=:tel, role=:role,fonction=:fonction,entreprise=:entreprise,activite=:activite, matricule=:mat,date_creation=:date_creation,photo=:photo,etat=:etat WHERE  id=:id");
        $req->bindParam(':id', $this->id);
        $req->bindParam(':log', $this->login);
        $req->bindParam(':nom', $this->nom_prenom);
        $req->bindParam(':mail', $this->email);
        $req->bindParam(':mdp', $this->mdp);
        $req->bindParam(':tel', $this->telephone);
        $req->bindParam(':role', $this->role);
        $req->bindParam(':fonction', $this->fonction);
        $req->bindParam(':entreprise', $this->entreprise);
        $req->bindParam(':activite', $this->activite);
        $req->bindParam(':mat', $this->matricule);
        $req->bindParam(':date_creation', $this->date_creation); 
        $req->bindParam(':photo', $this->photo);
        $req->bindParam(':etat', $this->etat);
        $sol = $req->execute();
        
        return $sol;

        

        /*} */
    }

    public function supprimerUtilisateur() {
        $req = $this->con->prepare('DELETE FROM utilisateur WHERE login=:log');
        $req->bindParam(':log', $this->login);
        $sol = $req->execute();
        return $sol;
       
    }

        public function avoirMatriculePartenaire() {
        $req = $this->con->prepare('SELECT * FROM utilisateur WHERE role="partenaire"');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

      public function avoirDetailsCarte($mat) {
        $req = $this->con->prepare('SELECT * FROM carte WHERE matricule=:mat');
        $req->bindParam(':mat', $mat);
        $req->execute() ;
        $l = $req->fetchAll();
        return $l;
    }
      public function updateExpirationCarte($mat) {
        $req = $this->con->prepare('UPDATE carte SET etat_carte="Inactif" WHERE matricule=:mat');
        $req->bindParam(':mat', $mat);
        $req->execute() ;
    }
      public function avoirDateFinAbonnement($mat) {
        $req = $this->con->prepare('SELECT * FROM forfait WHERE matricule=:mat ORDER BY id DESC LIMIT 1');
        $req->bindParam(':mat', $mat);
        $req->execute() ;
        $l = $req->fetchAll();
        return $l;
    }

    public function utilisateurId() {
        $req = $this->con->prepare('SELECT * FROM utilisateur WHERE id = :l');
        $req->bindParam(':l', $this->id);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

     public function compteId($matricule) {
        $req = $this->con->prepare('SELECT * FROM compte WHERE matricule = :l');
        $req->bindParam(':l', $matricule);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function rechercherUtilisateur($l) {
        $req = $this->con->prepare('SELECT * FROM utilisateur WHERE login=:login');
        $req->bindParam(':login', $l);
         $req->execute();
        $data = $req->fetchAll();
        return $data;
    }

    public function connexion() {
        $req = $this->con->prepare('SELECT * FROM utilisateur WHERE (login=:log OR telephone=:log) AND passe=:mdp');
        $req->bindParam(':log', $this->login);
        $req->bindParam(':mdp', $this->mdp);
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

     public function afficherUtilisateur() {
        $req = $this->con->prepare('SELECT * FROM utilisateur');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

     public function afficherUtilisateurEntreprise($entreprise) {
        $req = $this->con->prepare('SELECT * FROM utilisateur WHERE entreprise=:entreprise');
        $req->bindParam(':entreprise', $entreprise);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }
    

public function ListeProduitCategorie() {
        $req = $this->con->prepare('SELECT DISTINCT(categorie_produit) FROM produit');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

 

    public function ListeUtilisateurCategorieProduit($categorie) {
        $req = $this->con->prepare('SELECT utilisateur.*  FROM produit,utilisateur WHERE utilisateur.matricule=produit.code_fournisseur AND categorie_produit=:categorie GROUP BY utilisateur.id');
        $req->bindParam(':categorie', $categorie);
        $req->execute();
        $sol = $req->fetchAll();
        
        return $sol;
    }


//compte

  public function CreerCompte($numero_compte,$type_compte,$solde_compte,$date_creation,$etat_compte,$matricule) {

$req = $this->con->prepare('INSERT INTO compte VALUES (:numero_compte,:type_compte,:solde_compte,:date_creation, :etat_compte,:matricule)');

        $req->bindParam(':numero_compte', $numero_compte);
        $req->bindParam(':type_compte', $type_compte);
        $req->bindParam(':solde_compte', $solde_compte);
        $req->bindParam(':date_creation', $date_creation);
        $req->bindParam(':etat_compte', $etat_compte);
        $req->bindParam(':matricule', $matricule);
        $exec = $req->execute();
        return $exec;
}


  public function listecompte() {
        $req = $this->con->prepare('SELECT * FROM compte');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }

    public function dernierecompte() {
        $sql = $this->con->prepare('SELECT * FROM compte ORDER BY numero_compte DESC LIMIT 1');
        $sql->execute();
        $req = $sql->fetchAll();
        return $req;
    }

    public function nombrecompte() {
        $req = $this->con->prepare('SELECT COUNT(*) AS nbre FROM compte');
        $req->execute();
        $sol = $req->fetchAll();
        return $sol;
    }
//fin
    

    public function rechercher($login) {
        $req = $this->con->prepare('SELECT * FROM utilisateur WHERE login=:log');
        $req->bindParam(':log', $login);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function verification()
    {
        $req = $this->con->prepare('SELECT * FROM utilisateur WHERE id=:id');
        $req->bindParam(':id', $this->id);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    

public function inscriptionUtilisateur() {

        $req = $this->con->prepare('INSERT INTO utilisateur VALUES (null,:log, :nom, :mail, :mdp, :tel, :mat,:role,:date_creation,"","Actif")');
        $req->bindParam(':log', $this->telephone);
        $req->bindParam(':nom', $this->nom_prenom);
        $req->bindParam(':mail', $this->email);
        $req->bindParam(':mdp', $this->mdp);
        $req->bindParam(':tel', $this->telephone);
        $req->bindParam(':role', $this->role);
        $req->bindParam(':mat', $this->matricule);
        $req->bindParam(':date_creation', $this->date_creation);
        $sol = $req->execute();
       
        return $sol;



    }


    public function verificationTelephone()
    {
        $req = $this->con->prepare('SELECT * FROM utilisateur WHERE telephone=:telephone');
        $req->bindParam(':telephone', $this->telephone);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }



    function nbre_notif_Lue($u){
        $sql="SELECT  COUNT(notifications.id) AS nbre FROM notifications,utilisateur,vue WHERE utilisateur.id=vue.user AND vue.notification=notifications.id AND vue.lecture=1 AND utilisateur.login=:u";
        $req= $this->con->prepare($sql);
        $req->bindParam(':u', $u);
        $req->execute();
        $nbre = $req->fetchAll();
        return $nbre;      
    }


function nbre_notif_Non_Lue($u){
        $sql="SELECT  COUNT(notifications.id) AS nbre FROM notifications,utilisateur,vue WHERE utilisateur.id=vue.user AND vue.notification=notifications.id AND vue.lecture=0 AND utilisateur.login=:u";
        $req= $this->con->prepare($sql);
        $req->bindParam(':u', $u);
        $req->execute();
        $nbre = $req->fetchAll();
        return $nbre;      
    }

// Données du tableau de bord
 public function RechargementClient($matricule)
    {
        $req = $this->con->prepare('SELECT SUM(montant_transaction) AS somme FROM transaction WHERE objet_transaction="Rechargement" and numero_expediteur=:matricule and etat_transaction="Succes" ');
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function RechargementTous()
    {
        $req = $this->con->prepare('SELECT SUM(montant_transaction) AS somme FROM transaction WHERE objet_transaction="Rechargement" and etat_transaction="Succes" ');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

 public function RetraitClient($matricule)
    {
        $req = $this->con->prepare('SELECT SUM(montant_transaction) AS somme FROM transaction WHERE objet_transaction="Retrait" and numero_expediteur=:matricule and etat_transaction="Succes" ');
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function RetraitTous()
    {
        $req = $this->con->prepare('SELECT SUM(montant_transaction) AS somme FROM transaction WHERE objet_transaction="Retrait" and etat_transaction="Succes" ');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function FraisClient($matricule)
    {
        $req = $this->con->prepare('SELECT SUM(frais) AS somme FROM transaction WHERE numero_expediteur=:matricule and etat_transaction="Succes" ');
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }


    public function FraisTous()
    {
        $req = $this->con->prepare('SELECT SUM(frais) AS somme FROM transaction WHERE etat_transaction="Succes" ');
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }


    public function VenteClient($matricule)
    {
        $req = $this->con->prepare('SELECT SUM(commande.montant_commande) AS nombre FROM commande,produit WHERE commande.reference_produit = produit.reference_produit and commande.etat_commande!="Annulee" and produit.code_fournisseur=:matricule');
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }


    public function AchatClient($matricule)
    {
        $req = $this->con->prepare('SELECT SUM(montant_commande) AS nombre FROM commande WHERE etat_commande!="Annulee" and matricule=:matricule');
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }


    public function AchatTous()
    {
        $req = $this->con->prepare('SELECT SUM(montant_commande) AS nombre FROM commande WHERE etat_commande!="Annulee" ');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function ProduitClient($matricule)
    {
        $req = $this->con->prepare('SELECT COUNT(*) AS nombre FROM produit WHERE  code_fournisseur=:matricule');
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }


    public function ProduitTous()
    {
        $req = $this->con->prepare('SELECT COUNT(*) AS nombre FROM produit');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function TransfertRecuClient($matricule)
    {
        $req = $this->con->prepare('SELECT SUM(montant_transaction) AS somme FROM transaction WHERE  numero_destinataire=:matricule and type_transaction="Transfert" and etat_transaction="Succes" ');
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }


    public function TransfertRecuTous()
    {
        $req = $this->con->prepare('SELECT SUM(montant_transaction) AS somme FROM transaction WHERE and type_transaction="Transfert" and etat_transaction="Succes" ');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

     public function TransfertEnvoieClient($matricule)
    {
        $req = $this->con->prepare('SELECT SUM(montant_transaction) AS somme FROM transaction WHERE  numero_expediteur=:matricule and type_transaction="Transfert" and etat_transaction="Succes" ');
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }


    public function TransfertEnvoieTous()
    {
        $req = $this->con->prepare('SELECT SUM(montant_transaction) AS somme FROM transaction WHERE and type_transaction="Transfert" and etat_transaction="Succes" ');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function AbonnementClient($matricule)
    {
        $req = $this->con->prepare('SELECT COUNT(*) AS nombre FROM transaction WHERE objet_transaction="Abonnement" numero_expediteur=:matricule and etat_transaction="Succes" ');
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

    public function AbonnementTous()
    {
        $req = $this->con->prepare('SELECT COUNT(*) AS nombre FROM transaction WHERE objet_transaction="Abonnement" and etat_transaction="Succes" ');
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }


     public function CreditClient($matricule)
    {
        $req = $this->con->prepare('SELECT SUM(dette) AS nombre FROM credit WHERE matricule=:matricule ');
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

     public function CreditTous()
    {
        $req = $this->con->prepare('SELECT SUM(dette) AS nombre FROM credit');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

     public function InvestissementClient($matricule)
    {
        $req = $this->con->prepare('SELECT SUM(solde_final) AS nombre FROM investissement WHERE matricule=:matricule ');
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

     public function InvestissementTous()
    {
        $req = $this->con->prepare('SELECT SUM(solde_final) AS nombre FROM investissement');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

     public function EpargneClient($matricule)
    {
        $req = $this->con->prepare('SELECT SUM(montant_epargne) AS nombre FROM epargne WHERE matricule=:matricule ');
        $req->bindParam(':matricule', $matricule);
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

     public function EpargneTous()
    {
        $req = $this->con->prepare('SELECT SUM(montant_epargne) AS nombre FROM epargne');
        $req->execute();
        $l = $req->fetchAll();
        return $l;
    }

// Données du tableau de bord


     function notification_Non_Lue($u){
        $sql="SELECT * FROM notifications,utilisateur,vue WHERE utilisateur.id=vue.user AND vue.notification=notifications.id AND vue.lecture=0 AND vue.user=:u ORDER BY notifications.id DESC";
        $req= $this->con->prepare($sql);
        $req->bindParam(':u', $u);
        $req->execute();
        $res = $req->fetchAll();
        return $res;        
    }
    
    function nbre_notification_Non_Lue($u){
        $sql="SELECT * FROM notifications,utilisateur,vue WHERE utilisateur.id=vue.user AND vue.notification=notifications.id AND vue.lecture=0 AND vue.user=:u";
        $req= $this->con->prepare($sql);
        $req->bindParam(':u', $u);
        $req->execute();
        $nbre = $req->rowCount();
        return $nbre;      
    }

    
    function proprietaire_de_notification($u){
        $sql="SELECT utilisateur.*, notifications.id FROM notifications,utilisateur WHERE utilisateur.id=notifications.user AND notifications.id=:u";
        $req= $this->con->prepare($sql);
        $req->bindParam(':u', $u);
        $req->execute();
        $res = $req->fetchAll();
        return $res;        
    }
    

}
?>