<?php // anggota.php
function index()
{
    $anggota = getAllAnggota();
    require 'view/anggota/list.php';
}

function detail($id)
{
    $anggota = getAnggotabyId($id);
    require 'view/anggota/detail';
}