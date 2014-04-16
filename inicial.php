<h2>Lista de Contatos</h2>
<div id="dados">
<form name="dados_contato" action="adiciona.php" method="POST">
    <div id="nome">
        <span class="rotulo">Nome:</span>
        <span class="dado"><input type="text" name="Nome"></span>
    </div>
    <div id="sobrenome">
        <span class="rotulo">Sobrenome:</span>
        <span class="dado"><input type="text" name="Sobrenome"></span>
    </div>
    <div id="telefone_div">
        <span class="rotulo" id="ddd">DDD:</span>
        <span class="dado"><input type="text" size="2" maxlength="2" name="DDD"></span>
        <span class="rotulo">Telefone:</span>
        <span class="dado"><input type="text" size="9" maxlength="9" name="Telefone"></span>
    </div>
    <button type="submit">Adicionar aos contatos</button>

</form>

</div>
<br>
<div>
    <form action="lista_contatos.php">
        <input type="submit" value="Listar Contatos">
    </form>
</div>
