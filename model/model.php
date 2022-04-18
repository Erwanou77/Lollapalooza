<?php

function dbConnect()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=dbo_lollapalooza;charset=utf8', 'root', '');
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

// function contact()
// {
//     $db = dbConnect();
// }
