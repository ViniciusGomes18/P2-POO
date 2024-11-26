<?php
require_once('Inventario.php');
require_once('Item.php');

class Player {
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

    public function __construct(string $nickname, int $nivel = 1, Inventario $inventario){
        $this->setnickname($nickname);
        $this->setnivel($nivel);
        $this->setinventario($inventario);
    }

    public function getnickname(): string{
        return $this->nickname;
    }

    public function setnickname(string $nickname): void{
        $this->nickname = $nickname;
    }

    public function getnivel(): int{
        return $this->nivel;
    }

    public function setnivel(int $nivel): void{
        $this->nivel = $nivel;
    }

    public function getinventario(): Inventario{
        return $this->inventario;
    }

    public function setinventario(Inventario $inventario): void{
        $this->inventario = $inventario;
    }

    public function subirNivel(): void{
        $this->nivel++;
        $aumentoCapacidade = $this->nivel * 3;
        $novaCapacidade = 20 + $aumentoCapacidade;

        $this->inventario->setcapacidadeMaxima($novaCapacidade);
    }

    public function coletarItem(Item $item): void{
        $this->inventario->adicionarItem($item);
    }

    public function soltarItem(string $name): void{
        $this->inventario->removerItem($name);
    }
}