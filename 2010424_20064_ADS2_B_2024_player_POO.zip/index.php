<?php
require_once('Player.php');
require_once('Inventario.php');
require_once('Item.php');
require_once('Ataque.php');
require_once('Defesa.php');
require_once('Magia.php');


$ataque1 = new Ataque("Espada", 7, "Curto Alcance");
$defesa1 =new Defesa("Escudo de Madeira", 4, "Defesa");
$magia1 = new Magia("Bola de fogo", 2, "Utilizavel");

$ataque2 = new Ataque("Arco", 7, "Longo Alcance");
$defesa2 =new Defesa("Elmo de Aço", 4, "Armadura");
$magia2 = new Magia("Poção", 2, "Consumivel");

$ataque3 = new Ataque("Clava", 7, "curto Alcance");
$defesa3 = new Defesa("Botas de Ouro", 4, "Armadura");
$magia3 = new Magia("Conjuração", 2, "Utilizavel");

$ataque4 = new Ataque("Machado Grande", 7, "Medio alcance");
$defesa4 = new Defesa("Escudo Mistico", 4, "Defesa contra magia");
$magia4 = new Magia("Anel de Cura", 2, "Cura");


$inventario1 = new Inventario(20);
$player1 = new Player ("Player 1", 1, $inventario1);

echo "<hr>";
echo "<h2>PLAYER 1</h2>";
$player1->coletarItem($ataque1);
$player1->coletarItem($defesa1);
$player1->coletarItem($magia1);
echo "<strong>Espaço restante no inventário:</strong> {$inventario1->capacidadeLivre()}<strong>.</strong> <br>";

$player1->coletarItem($ataque2);
$player1->coletarItem($magia2);
$player1->soltarItem('Espada');

$player1->subirNivel();
echo "<strong>Espaço restante no inventário:</strong> {$inventario1->capacidadeLivre()}<strong>.</strong> <br>";

echo "<hr>";
echo "<h2>PLAYER 2</h2>";

$inventario2 = new Inventario(26);
$player2 = new Player ("Player 2", 2, $inventario2);
$player2->coletarItem($ataque3);
$player2->coletarItem($defesa3);
$player2->coletarItem($magia3);
$player2->coletarItem($ataque4);
$player2->coletarItem($defesa4);
echo "<strong>Espaço restante no inventário:</strong> {$inventario2->capacidadeLivre()}<strong>.</strong> <br>";
$player2->coletarItem($magia4);
$player2->coletarItem($ataque1);
echo "<strong>Espaço restante no inventário:</strong> {$inventario2->capacidadeLivre()}<strong>.</strong> <br>";

echo "<hr>";