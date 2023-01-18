<?php

class Prodotto {
    protected $titolo;
    protected $prezzo;
    protected $immagine;

    public function __construct($_titolo, $_prezzo, $_immagine) {
        $this->setTitolo($_titolo);
        $this->setPrezzo($_prezzo);
        $this->setImmagine($_immagine);
    }
    
    public function getTitolo() {
        return $this->titolo;
    }

    public function setTitolo($_titolo) {
        $this->titolo = $_titolo;
    }

    public function getImmagine() {
        return $this->immagine;
    }

    public function setImmagine($_immagine) {
        $this->immagine = $_immagine;
    }


    public function getPrezzo() {
        return $this->prezzo;
    }

    public function setPrezzo($_prezzo) {
        $this->prezzo = $_prezzo;
    }
}


?>