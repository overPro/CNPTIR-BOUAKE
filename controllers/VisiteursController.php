<?php

require 'models/visiteurs.php';

class visiteurs {

    public function enregistrement() {
        $date = '';
        $heure = '';
        $reference = '';

        $date = date('Y-m-d');
        $heure = date('H:i:s');
        $visiteur = new VisiteurModel();

        //enregistrement des visiteurs
        if (isset($_POST['btn_ajouter'])) {
            $visiteur->date = $date;
            $visiteur->heure = $heure;
            $visiteur->reference = $_POST['sai_reference'];
            $sol = $visiteur->AjouterVisiteur();
            if (!empty($sol)) {
                $message = "Visiteur enregistré avec succès";
            } else {
                $message = "Echèc d'enregistrement de visiteur";
            }
        }

        //rechercher un visiteur
        if (isset($_POST['btn_rechercher'])) {
            $visiteur->id = $_POST['sai_id'];
            $sol = $visiteur->RechercherVisiteur();
            if (!empty($sol)) {
                $id = $sol[0]['id'];
                $date = $sol[0]['date'];
                $heure = $sol[0]['heure'];
                $reference = $sol[0]['reference'];
            } else {
                $message = "Ce visiteur n'existe pas !";
            }
        }

        //modifier un visiteur
        if (isset($_POST['btn_modifier'])) {
            $visiteur->date = $date;
            $visiteur->heure = $heure;
            $visiteur->reference = $_POST['sai_reference'];

            $sol = $visiteur->ModifierVisiteur();
            if (!empty($sol)) {
                $message = "Visiteur modifier avec succès";
            } else {
                $message = "Echèc de modification de visiteur";
            }
        }

        //supprimer un visiteur
        if (isset($_POST['btn_supprimer'])) {
            $visiteur->id = $sol[0]['id'];
            $sol = $visiteur->SupprimerVisiteur();
            if (!empty($sol)) {
                $message = "Visiteur supprimé avec succès";
            } else {
                $message = "Echèc de suppression";
            }
        }
    }

    //liste des visiteurs
    public function liste() {
        $visiteur = new VisiteurModel();
        $sol = $visiteur->ListeVisiteur();
    }

    //liste des visiteurs par produit par periode
    public function periode() {
        $visiteur = new VisiteurModel();
        $date_debut = $_POST['sai_date_debut'];
        $date_fin = $_POST['sai_date_fin'];
        $reference = $_POST['sai_reference'];
        $sol = $visiteur->ListeVisiteurPeriode($date_debut, $date_fin, $reference);
    }

}

?>