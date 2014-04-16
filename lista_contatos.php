<?php
include("lib/session_start.php");
include("lib/agenda.php");
include("lib/conexao_mysql.php");

$agenda = new Agenda();
$banco = conexao_mysql::getInstance();
$resultado = $agenda->listaContatos($banco);

while($dados = mysqli_fetch_row($resultado))
{
    print('<div class=nome_sobrenome>'.$dados[0].' '.$dados[1].'</div>');
    print('<p><div class=ddd_telefone>'.$dados[2].' '.$dados[3].'</div></p><br>');
}
print('<a href="index.php">Voltar</a>');

?>