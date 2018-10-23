<?php // index.php
$link = new PDO("mysql:host=localhost;dbname=db_oopmvc", 'root', '');
$result = $link->query('SELECT id, nama FROM anggota');

$anggota = array();
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $anggota[] = $row;
}

$link = null;

// Memanggil list.php untuk menampilkan anggota
require 'view/anggota/list.php';