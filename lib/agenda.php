<?php

class Agenda
{
    private $con;

    public function __constructor()
    {
    }

    public function listaContatos($conexao)
    {
        $contactQuery = $conexao->query('select * from contatos;');

        if (!$contactQuery) {
            $message  = 'Invalid query: ' . mysql_error() . "\n";
            $message .= 'Whole query: ' . $contactQuery;
            die($message);
        }
        else {
            return $contactQuery;
        } // else
    } // function listaContatos
} // class
