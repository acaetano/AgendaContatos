<?php

class Contato
{
    private  $nome;
    private  $sobrenome;
    private  $telefone;

    public function __construct($_nome, $_sobrenome, $_telefone)
    {
        $this->nome = $_nome;
        $this->sobrenome = $_sobrenome;
        $this->telefone = $_telefone;
    }

    public function setNome($local)
    {
        $this->nome = $local;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setSobrenome($local)
    {
        $this->sobrenome = $local;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setTelefone($local)
    {
        $this->telefone = $local;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }
}