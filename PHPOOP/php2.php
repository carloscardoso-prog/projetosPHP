<?php
class Conta{
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo){
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }

    public function getDetalhes(){
        return "Agencia: {$this->agencia} | Conta: {$this->conta} | Saldo: {$this->saldo}<br/>";
    }

    public function depositar($valor){
        $this->saldo += $valor;
    }
}

class Poupanca extends Conta{
    public function saque($valor){
        if($this->saldo >= $valor){
            $this->saldo -= $valor;
            echo "Saque de: {$valor} | Saldo atual: {$this->saldo}<br/>";
        }else{
            echo "Saque não autorizado pois o valor inserido é superior ao saldo da conta";
        }
    }
}

$c1 = new Poupanca(100, 2586, 5000);

echo $c1->getDetalhes();
echo $c1->depositar(10);
echo $c1->getDetalhes();
$c1->saque(100000);
?>