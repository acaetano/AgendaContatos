<?php
/**
 * Created by PhpStorm.
 * User: Ailton
 * Date: 12/04/14
 * Time: 20:36
 */
require_once('../lib/conexao_mysql.php');
$connection = conexao_mysql::getInstance();

if($connection->connect_error) {
    echo("ERROR!" . "<br>");
    var_dump($connection);
} else {
    var_dump($connection);
}
