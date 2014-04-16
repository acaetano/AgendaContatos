<?php

require_once('../lib/conexao_mysql.php');
$connection = conexao_mysql::getInstance();

$results = $connection->query('SELECT * FROM contatos');

while ($row = $results->fetch_assoc()) {
    var_dump($row);
}

//var_dump($results);