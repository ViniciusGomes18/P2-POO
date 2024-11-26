<?php

require_once("Item.php");

class Magia extends Item{
    public function __construct(string $name, int $tamanho, string $classe){
        parent::__construct($name, $tamanho, $classe);
    }
}