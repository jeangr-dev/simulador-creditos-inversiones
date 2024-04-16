<?php

// Modelo Tipo de Credito
class TypeCredit {
    
    private $id;
    private $idEntPer;
    private $nameCred;
    private $rateCred;

    public function __construct($id, $idEntPer, $nameCred, $rateCred) {
        $this->id = $id;
        $this->idEntPer = $idEntPer;
        $this->nameCred = $nameCred;
        $this->rateCred = $rateCred;
    }

    public function getIdCredit() {
        return $this->id;
    }

    public function getIdEntity() {
        return $this->idEntPer;
    }

    public function getNameEnt() {
        return $this->nameCred;
    }

    public function getRateEnt() {
        return $this->rateCred;
    }
}

?>