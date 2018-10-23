<?php // detail.php

require_once "model/anggota_model.php";

$anggota = getAnggotabyId($_GET['id']);

require 'view/anggota/detail.php';