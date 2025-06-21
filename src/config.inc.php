<?php
$host = 'localhost';
$dbname = 'iron_form';
$user = 'if_user';
$pass = '5202_ranimeS-ISP';

try {
    $db = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $user, 
        $pass
    );
} catch (\PDOException $e) {
    // don't leak reason
    die('Database connection failed.');
}