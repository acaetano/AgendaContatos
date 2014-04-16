<?php
session_start();
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once("lib/agenda.php");
require_once("lib/contato.php");
require_once("lib/conexao_mysql.php");
require_once("lib/funcoes.php");

$campos = array_keys($_POST);

foreach( $campos as $valor )
{
    if(!verifica_entrada( $_POST[$valor] ))
    {
        print('Campo "'.$valor.'" invalido.<br>');
        return;
    }
}
var_dump($campos);
$_SESSION[$campos[0]] = $_POST[$campos[0]];
$_SESSION[$campos[1]] = $_POST[$campos[1]];
$_SESSION[$campos[2]] = $_POST[$campos[2]];
$_SESSION[$campos[3]] = $_POST[$campos[3]];

$query = 'INSERT INTO contatos ('.$campos[0].', '.$campos[1].', '.$campos[2].', '.$campos[3].')
            VALUES (\''.$_POST[$campos[0]].'\', \''.$_POST[$campos[1]].'\', \''.
            $_POST[$campos[2]].'\', \''.$_POST[$campos[3]].'\');';

$banco = conexao_mysql::getInstance();
$query_result = $banco->query($query);

if($query_result)
{
    print("Contato Adicionado.<br><br>");
    print('<a href="index.php">Voltar</a>');
} else
{
    print('Erro ao adicionar contato: '.mysqli_error().'<br>');
    print('Query com problemas: '.$query.'<br>');
}

?>