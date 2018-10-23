<?php // anggota_model.php

function openDbConnection()
{
    $link = new PDO("mysql:host=localhost;dbname=db_oopmvc", 'root', '');
    return $link;
}

function closeDbConnection(&$link)
{
    $link = null;
}

function getAllAnggota()
{
    $link = openDbConnection();

    $result = $link->query('SELECT id, nama FROM anggota');

    $anggota = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $anggota[] = $row;
    }
    closeDbConnection($link);

    return $anggota;
}