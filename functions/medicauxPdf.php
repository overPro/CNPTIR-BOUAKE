<?php 
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetTitle("MEDICAUX", true);
$pdf->SetFont("times", "B", 15);
$pdf->setX(-175);
$pdf->Cell(80, 10, utf8_decode("DOSSIER MALADE"), 0, 0, "");
$pdf->SetFont("times", "B", 10);
$pdf->Cell(80, 10, utf8_decode("Groupe Sanguin"), 0, 1, "");
$pdf->SetFont("times", "B", 10);
$pdf->Cell(25, 10, utf8_decode("Numero:"), 0, 0, "");
$pdf->Cell(15, 10, utf8_decode($numero), 0, 0, "");
$pdf->Cell(15, 10, utf8_decode("Date"), 0, 0, "");
$pdf->Cell(35, 10, utf8_decode($date), 0, 0, "");
$pdf->Cell(25, 10, utf8_decode("Jour Dialyse:"), 0, 0, "");
$pdf->Cell(25, 10, utf8_decode($jour_de_dialyse), 0, 0, "");
$pdf->Cell(35, 10, utf8_decode("Groupe sanguin:"), 0, 0, "");
$pdf->Cell(15, 10, utf8_decode($groupe_sanguin), 0, 1, "");
$pdf->setX(-175);
$pdf->Cell(5, 10, utf8_decode("I."), 0, 0, "");
$pdf->SetFont("times", "U", 10);
$pdf->Cell(35, 10, utf8_decode("Données épidémiologiques"), 0, 1, "");
$pdf->SetFont("times", "I", 10);
$pdf->Cell(35, 10, utf8_decode("Nom:"), 0, 0, "");
$pdf->Cell(35, 10, utf8_decode($nom), 0, 0, "");
$pdf->Cell(35, 10, utf8_decode("Prenom:"), 0, 0, "");
$pdf->Cell(35, 10, utf8_decode($prenom), 0, 0, "");
$pdf->Cell(35, 10, utf8_decode("Nom emprunt:"), 0, 0, "");
$pdf->Cell(35, 10, utf8_decode($nom_emprunt), 0, 1, "");
$pdf->Cell(35, 10, utf8_decode("Date de Naissance:"), 0, 0, "");
$pdf->Cell(35, 10, utf8_decode($date_de_naissance), 0, 0, "");
$pdf->Cell(35, 10, utf8_decode("Age:"), 0, 0, "");
$pdf->Cell(35, 10, utf8_decode($age), 0, 0, "");
$pdf->Cell(35, 10, utf8_decode("Tranche d'age:"), 0, 0, "");
$pdf->Cell(35, 10, utf8_decode($tranche_age), 0, 0, "");
$pdf->Cell(35, 10, utf8_decode("Sexe:"), 0, 0, "");
$pdf->Cell(35, 10, utf8_decode($sexe), 0, 1, "");

$pdf->Cell(25, 10, utf8_decode("Groupe ethnique:"), 0, 0, "");
$pdf->Cell(20, 10, utf8_decode($date_de_naissance), 0, 0, "");
$pdf->Cell(25, 10, utf8_decode("Niveau d'étude:"), 0, 0, "");
$pdf->Cell(8, 10, utf8_decode($age), 0, 0, "");
$pdf->Cell(10, 10, utf8_decode("Situation Matrimoniale:"), 0, 0, "");
$pdf->Cell(25, 10, utf8_decode($tranche_age), 0, 0, "");
$pdf->Cell(25, 10, utf8_decode("Résidence:"), 0, 0, "");
$pdf->Cell(25, 10, utf8_decode($sexe), 0, 0, "");
$pdf->Cell(25, 10, utf8_decode("quartier:"), 0, 0, "");
$pdf->Cell(25, 10, utf8_decode($sexe), 0, 0, "");
$pdf->Cell(25, 10, utf8_decode("Hors/Bouaké:"), 0, 0, "");
$pdf->Cell(25, 10, utf8_decode($sexe), 0, 0, "");
$pdf->Cell(35, 10, utf8_decode("Préciser:"), 0, 0, "");
$pdf->Cell(25, 10, utf8_decode($sexe), 0, 0, "");
$pdf->Output();



 ?>