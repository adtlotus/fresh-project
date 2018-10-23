<?php // file: oopmvc/model/AnggotaModel.php

class AnggotaModel
{
    public function openDbConnection()
    {
        $link = new PDO("mysql:host=localhost;dbname=db_oopmvc", 'root', '');
        return $link;
    }

    public function closeDbConnection(&$link)
    {
        $link = null;
    }

    public function getAllAnggota()
    {
        $link = $this->openDbConnection();

        $result = $link->query('SELECT id, nama FROM anggota');

        $anggota = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $anggota[] = $row;
        }
        $this->closeDbConnection($link);

        return $anggota;
    }

    public function getAnggotaById($id)
    {
        $link = $this->openDbConnection();

        $query = 'SELECT * FROM anggota WHERE  id=:id';
        $statement = $link->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        $this->closeDbConnection($link);

        return $row;
    }
}