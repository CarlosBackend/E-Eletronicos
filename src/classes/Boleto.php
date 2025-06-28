<?php   

class Boleto extends Notification implements PagamentoInterface{
    function pagar($valor)
    {
        echo "Pagamento de R${$valor} realizado com sucesso via Boleto!";
    }
}