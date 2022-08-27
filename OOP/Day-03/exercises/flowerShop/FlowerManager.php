<?php
require_once 'Flower.php';
class FlowerManager
{
    public static function findAll()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=flower_db;', 'root', 'root');
        $query = "SELECT * from flowers";
        $prep = $pdo->prepare($query);
        $prep->execute();
        $flowers = $prep->fetchAll(PDO::FETCH_CLASS, 'Flower');
        return $flowers;
        $pdo = null;
    }

    public static function find($id)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=flower_db;', 'root', 'root');
        $query = "SELECT * from flowers WHERE id= $id";
        $prep = $pdo->prepare($query);
        $prep->execute();
        $prep->setFetchMode(PDO::FETCH_CLASS, 'Flower');
        $flower = $prep->fetch();
        return $flower;
        $pdo = null;
    }
}
