<?php
use PHPUnit\Framework\TestCase;

require_once './src/banco.php';  /*Ele vai buscar o arquivo chamado banco.php*/ 

class BancoTest extends TestCase {   

    public function testCriarConta() {   /*funçao para criar contas*/ 
        $banco = new Banco();
        $banco->criarConta("Conta1");

        $contas = $banco->listarContas();
        
        $this->assertCount(1, $contas);
        $this->assertArrayHasKey("Conta1", $contas);
    }

    public function testDepositar() {
        $banco = new Banco();
        $banco->criarConta("Conta2");
        $banco->depositar("Conta2", 100);

        $saldo = $banco->verificarSaldo("Conta2");
        
        $this->assertEquals(100, $saldo);
    }

    public function testRetirar() {
        $banco = new Banco();
        $banco->criarConta("Conta3");
        $banco->depositar("Conta3", 200);
        $banco->retirar("Conta3", 50);

        $saldo = $banco->verificarSaldo("Conta3");
        
        $this->assertEquals(150, $saldo);
    }
}
