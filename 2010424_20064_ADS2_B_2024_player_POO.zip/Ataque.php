<?php

require_once("Item.php");

class Ataque extends Item{
    public function __construct(string $name, int $tamanho, string $classe){
        parent::__construct($name, $tamanho, $classe);
    }
}