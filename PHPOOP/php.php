<?php
class Fabrica{
    private $nome;
    public function __construct($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
}
class Produto{
        private $descricao;
        private $preco;
        private $fabrica;

        public function __construct($preco, $descricao, Fabrica $fabrica){
            echo 'construtor';
            $this->preco = $preco;
            $this->descricao = $descricao;
            $this->fabrica = $fabrica;
            echo $this->getDetalhes();
        }

        public function getDetalhes(){
            return "O produto {$this->descricao} custa {$this->preco} reais. Fabricante {$this->fabricante}";
        }

        // public function setPreco($preco){
        //     $this->preco = $preco;
        // }
        // public function getPreco(){
        //     return $this->preco;
        // }

        // public function setDescricao($descricao){
        //     $this->descricao = $descricao;
        // }
        // public function getDescricao(){
        //     return $this->descricao;
        // }

    }
$f1 = new Fabrica('nome');
$c1 = new Produto('nome','numeros',$f1);

?>