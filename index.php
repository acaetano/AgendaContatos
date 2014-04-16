<?php
session_start();
ini_set('display_errors',1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<title>
Livro de Contatos
</title></head>
<body>
<div id="header">
    <span id="inicial"><a href="inicial.php" target="corpo"><button>Inicio</button></a></span>
    <span id="lista_contato"><a href="lista_contatos.php" target="corpo"><button>Listar Contatos</button></a></span>
</div>
<div id="conteudo">
    <div id="menu_esq">
        <br><h3>Menu</h3>
        <!--<iframe id="frame_menu_esq" src=""></iframe>-->
    </div>
    <div id="corpo">
        <iframe id="frame_corpo" name="corpo" src=""></iframe>
    </div>
</div>
</body>
</html>