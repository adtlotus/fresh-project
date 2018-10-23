<?php // file: oopmvc/controller/Anggota.php
class Anggota
{
    protected $model = '';

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $anggota = $this->model->getAllAnggota();
        require 'view/anggota/list.php';
    }

    public function detail($id)
    {
        $anggota = $this->model->getAnggotaById($id);
        require 'view/anggota/detail.php';
    }
}