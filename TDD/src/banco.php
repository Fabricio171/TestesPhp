<?php

class Banco {
    private $contas = [];

    public function criarConta($nome) {
        if (!isset($this->contas[$nome])) {
            $this->contas[$nome] = 0;
        }
    }

    public function listarContas() {
        return $this->contas;
    }

    public function depositar($nome, $valor) {
        if (isset($this->contas[$nome]) && $valor > 0) {
            $this->contas[$nome] += $valor;
        }
    }

    public function retirar($nome, $valor) {
        if (isset($this->contas[$nome]) && $valor > 0 && $this->contas[$nome] >= $valor) {
            $this->contas[$nome] -= $valor;
            return true;
        }
        return false;
    }

    public function verificarSaldo($nome) {
        return $this->contas[$nome] ?? 0;
    }
}
