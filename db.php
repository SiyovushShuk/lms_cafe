<?php

session_start();
if ($_SESSION['user']['level'] <> 5) {
    header('Location: main.php');
}



$config = [
    'host' => 'localhost',
    'name' => 'bdname',
    'user' => 'root',
    'password' => '',
    'charset' => 'utf-8',
];

$db = new PDO ('mysql:host=' . $config['host'] . ';dbname=' . $config['name'], $config['user'], $config['password']);
$db->query('SET character_set_connection = ' . $config['charset'] . ';');
$db->query('SET character_set_client = ' . $config['charset'] . ';');
$db->query('SET character_set_results = ' . $config['charset'] . ';');



$connect = mysqli_connect('localhost', 'root', '', 'bdname');

    if (!$connect) {
        die('Error connect to DataBase');
    }
