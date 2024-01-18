<?php
class Alertas{

    public function saudacao(){
        echo "Seja bem vindo";
    }

    public static function saudar(){
        echo "Fala nego";
    }
}

/* $sauda = new Alertas();
$sauda->saudacao(); */

echo Alertas::saudar();