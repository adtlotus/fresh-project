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

function getAnggotaById($id)
{
    $link = openDbConnection();

    $query = 'SELECT * FROM anggota WHERE  id=:id';
    $statement = $link->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $row = $statement->fetch(PDO::FETCH_ASSOC);

    closeDbConnection($link);

    return $row;
}