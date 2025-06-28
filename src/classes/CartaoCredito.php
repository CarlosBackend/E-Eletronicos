<?php

class CartaoCredito extends Notification implements PagamentoInterface
{
   public function pagar($valor)
    {
        echo "Pagamento de R${$valor} realizado com sucesso via Cartão de Crédito!";
    }
}