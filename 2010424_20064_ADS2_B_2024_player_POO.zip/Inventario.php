<?php
require_once('Item.php');

class Inventario{
    private int $capacidadeMaxima;
    private array $itens = [];

    public function __construct(int $capacidadeMaxima, array $itens = []){
        $this->setcapacidadeMaxima($capacidadeMaxima);
        foreach ($itens as $item) {
            if ($item instanceof Item){
                $this->adicionarItem($item);
            }
        }
    }

    public function getcapacidadeMaxima(): int{
        return $this->capacidadeMaxima;
    }

    public function setcapacidadeMaxima(int $capacidadeMaxima): void{
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function adicionarItem(Item $item): void{
        if ($this->capacidadeLivre() >= $item->getTamanho()){
            $this->itens[] = $item;
            echo"'<strong>{$item->getName()}</strong>' da classe: <strong>{$item->getClasse()}</strong> foi adicionado ao inventário.<br>";
        } else {
            echo "<strong>Não há espaço no inventário para adicionar o item:</strong> '{$item->getName()}'.<br>";
        }
    }

    public function removerItem(string $name): void{
        $itensAtualizados = [];
        $encontrado = false;
        foreach ($this->itens as $item) {
            if($item->getName() === $name){
                $encontrado = true;
                continue;
            }
            $itensAtualizados[] = $item;
        }
        $this->itens = $itensAtualizados;
        if ($encontrado){
            echo "<strong>O item: </strong> '{$name}' <strong>foi retirado do inventário e dropado no chão.</strong> <br>";
        }else{
            echo "<strong>O item</strong> '{$name}' <strong>não foi encontrado no inventário.</strong> <br>";
        }
    }

    public function capacidadeLivre(): int{
        $tamanhoOcupado = 0;
        foreach ($this->itens as $item){
            $tamanhoOcupado += $item->getTamanho();
        }
        return $this->capacidadeMaxima - $tamanhoOcupado;
    }
}
