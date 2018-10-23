<?php // index.php

// Memanggil model
require_once "model/anggota_model.php";

// Mendapatkan data anggota
$anggota = getAllAnggota();

// Memanggil list.php untuk menampilkan anggota
require 'view/anggota/list.php';