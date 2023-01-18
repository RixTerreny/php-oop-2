<?php

include_once __DIR__ . "./figlio.php";

class Categoria extends Prodotto {
    protected $categoria;
    protected $item;

    public function __construct($_titolo, $_prezzo, $_immagine,$_categoria,$_item){
        parent::__construct($_titolo, $_prezzo, $_immagine);
        $this -> setCategoria ($_categoria);
        $this -> setItem ($_item);
    }

    public function getCategoria(){
        // 1 cane, 0 gatto
        if($this->categoria==3){
            return "fa-solid fa-question";
            
        }else if(!$this->categoria){
            return "fa-solid fa-cat";
        }else{
            return "fa-solid fa-dog";
        }
    }

    public function setCategoria($_categoria){
        $this->categoria = $_categoria;
    }


    public function getItem(){
        return $this -> item;
    }

    public function setItem($_item){
        $this->item = $_item;
    }
}