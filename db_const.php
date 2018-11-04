<?php
	# mysql db constants DB_HOST, DB_USER, DB_PASS, DB_NAME
	const DB_HOST = 'localhost';
	const DB_USER = 'Nebula_Login_User';
	const DB_PASS = 'X6?Thu6GLnd*';
	const DB_NAME = 'nebulagaming_LoginSystem';

$host = "localhost";
$db_name = "nebulagaming_LoginSystem";
$username = "Nebula_Login_User";
$password = "X6?Thu6GLnd*";

try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}catch(PDOException $exception){ //to handle connection error
    echo "Connection error: " . $exception->getMessage();
}
?>