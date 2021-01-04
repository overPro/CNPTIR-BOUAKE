<?php

function upload_image($index, $destination, $maxsize = 1048576, $extensions = array('png', 'gif', 'jpg', 'jpeg', 'bmp')) {
    //Test1: fichier correctement uploadé
    if (!isset($_FILES[$index]) OR $_FILES[$index]['error'] > 0)
        return FALSE;
    //Test2: taille limite
    if ($maxsize !== FALSE AND $_FILES[$index]['size'] > $maxsize)
        return FALSE;
    //Test3: extension
    $ext = strtolower(substr(strrchr($_FILES[$index]['name'], '.'), 1));
    if ($extensions !== FALSE AND ! in_array($ext, $extensions))
        return FALSE;
    //Déplacement
    return move_uploaded_file($_FILES[$index]['tmp_name'], $destination);
}

function upload_document($index, $destination, $maxsize = 1048576, $extensions = array('png', 'gif', 'jpg', 'jpeg', 'bmp', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx')) {
    //Test1: fichier correctement uploadé
    if (!isset($_FILES[$index]) OR $_FILES[$index]['error'] > 0)
        return FALSE;
    //Test2: taille limite
    if ($maxsize !== FALSE AND $_FILES[$index]['size'] > $maxsize)
        return FALSE;
    //Test3: extension
    $ext = strtolower(substr(strrchr($_FILES[$index]['name'], '.'), 1));
    if ($extensions !== FALSE AND ! in_array($ext, $extensions))
        return FALSE;
    //Déplacement
    return move_uploaded_file($_FILES[$index]['tmp_name'], $destination);
}

function date_notif($date_de_publication) {
    $da1 = new DateTime(date('Y-m-d H:i:s'));
    $da2 = new DateTime($date_de_publication);
    $dif = date_diff($da1, $da2);
    if ($dif->format('%y') != 0) {
        $difff = '<br> Il y\'a ' . $dif->format('%y an(s)');
    } elseif ($dif->format('%m') != 0) {
        $difff = '<br> Il y\'a ' . $dif->format('%m mois');
    } elseif ($dif->format('%d') != 0) {
        $difff = '<br> Il y\'a ' . $dif->format('%d jours');
    } elseif ($dif->format('%h') != 0) {
        $difff = '<br> Il y\'a ' . $dif->format('%h heure(s)');
        if ($dif->format('%i') > 0) {
            $difff .= ' ' . $dif->format('%i minutes');
        }
    } elseif ($dif->format('%i') > 1) {
        $difff = '<br> Il y\'a ' . $dif->format('%i minutes');
    } else {
        $difff = " <br> A l'instant";
    }
    return $difff;
}

?>