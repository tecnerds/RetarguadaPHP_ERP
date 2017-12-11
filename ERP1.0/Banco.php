<?php

abstract class Banco{
    
    public $servidor = "localhost";
    public $usuario  = "root";
    public $senha = "";
    public $nomebanco = "erp";
    public $conexao = null;
    public $dataset = null;
    public $linhasafetadas = -1;
    //Construtor
    public function __construct() {
        $this->conecta();
    }
    //Destrutor
    public function __destruct() {
        if($this->conexao != NULL):
        mysqli_close($this->conexao);
    endif;
    }
    
    public function conecta(){
            $this->conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->nomebanco)or die ("Erro de conexão com servidor ou usuário ou senha");
            
            echo "conexão realizado com sucesso!";
        
    }
    public function insert($sql){
        
    }
}
 ?>



 
