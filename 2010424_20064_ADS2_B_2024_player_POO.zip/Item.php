<?php 

class Item{
    private string $name;
    private int $tamanho;
    private string $classe;

    public function __construct(string $name, int $tamanho, string $classe ){
        $this->setName($name);
        $this->setTamanho($tamanho);
        $this->setClasse($classe);
    }

    public function getName(): string{
        return $this->name;
    }

    public function setName(string $name): void{
        if ($name == ""){ 
            $this->name = 'name';
        } else {
            $this->name = $name;
        }
    }

    public function getTamanho(): int{
        return $this->tamanho;
    }

    public function setTamanho(int $tamanho): void{
        if($tamanho < 0){
            echo "tamanho inválido <br>";
        }else{
            $this->tamanho = $tamanho;
        }
    }
    public function getClasse(): string{
        return $this->classe;
    }
    
    public function setClasse(string $classe): void{
        if ($classe == ""){
            $this->classe = "classe";
        } else {
            $this->classe = $classe;
        }
    }
}