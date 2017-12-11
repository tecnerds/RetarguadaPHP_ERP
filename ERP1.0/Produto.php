<?php

class Produto {
    private $id, $codbarra;
    private $nome, $desc;
    private $pcusto, $pvenda;
    
    function __construct() {
        $this->setId(0);
        $this->setCodbarra(0);
        $this->setNome("");
        $this->setDesc("");
        $this->setPcusto(0);
        $this->setPvenda(0);
        
    }

    
    function getId() {
        return $this->id;
    }

    function getCodbarra() {
        return $this->codbarra;
    }

    function getNome() {
        return $this->nome;
    }

    function getDesc() {
        return $this->desc;
    }

    function getPcusto() {
        return $this->pcusto;
    }

    function getPvenda() {
        return $this->pvenda;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCodbarra($codbarra) {
        $this->codbarra = $codbarra;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDesc($desc) {
        $this->desc = $desc;
    }

    function setPcusto($pcusto) {
        $this->pcusto = $pcusto;
    }

    function setPvenda($pvenda) {
        $this->pvenda = $pvenda;
    }


}
