<?php

class conexao_mysql
{

    private static $instance;

    private function __constructor()
    {
        /*
         * Construtor não foi implementado
         */
    }

    //singleton pattern
    public static function getInstance()
    {
        if (!isset(self::$instance))
        {
            //$object = __CLASS__;
            self::$instance = mysqli_connect('localhost', 'admin', 'lapqmz01', 'agenda');
        }
        return self::$instance;
    }

}