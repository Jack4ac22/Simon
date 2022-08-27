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
        $json = json_encode($flowers, JSON_PRETTY_PRINT);
        return $json;
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
        $json = json_encode($flower, JSON_PRETTY_PRINT);
        return $json;
        $pdo = null;
    }
    public function insert_flower($name, $price)
    {
    }
}
