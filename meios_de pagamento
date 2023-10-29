<?php
interface  MeioDePagamento {
     função  pública processarPagamento ( $ valor );
     função  pública exibirRecibo ( $ valor );
}
<?php
require_once (__DIR__ . '/MeioDePagamento.php' );
require_once (__DIR__ . '/Pix.php' );
require_once (__DIR__ . '/CartaoDeCrédito.php' );

$ pix = novo  Pix ();
$ valorDoPagamento = 589,00 ;
$ pix -> processarPagamento ( $ valorDoPagamento );
$ pix -> exibirComprovante ( $ valorDoPagamento );

$ cartao = new  CartaoDeCrédito ();
$ valorDoPagamento = 299,87 ;
$ cartão -> processarPagamento ( $ valorDoPagamento );
$ cartao -> exibirRecibo ( $ valorDoPagamento );

<?php

require_once (__DIR__ . '/MeioDePagamento.php' );

class  Pix  implementa  MeioDePagamento {
    public  function  processarPagamento ( $ valor ) {
        // Lógica para processar um pagamento via Pix
        echo " Pagamento via Pix de R$ " . $ valor . " processado com sucesso. \n";
    }

    public  function  exibircomprovante ( $ valor ){
        // Lógica para exibir um comprovante de pagamento via pix
        echo " Comprovante de pagamento via Pix de R$ " . $ valor . "\n";
    }
<?php
require_once (__DIR__ . '/MeioDePagamento.php' );

class  CartaoDeCrédito  implementa  MeioDePagamento {
    public  function  processarPagamento ( $ valor ) {
        // Lógica para processar um pagamento via cartão de crédito
        echo " Pagamento via Cartão de Crédito de R$ " . $ valor . " processado com sucesso. \n";
    }

     função  pública exibirRecibo ( $ valor ){
        // Lógica para exibir um recibo de pagamento via cartão de crédito
        echo " Recibo de pagamento via Cartão de Crédito de R$ " . $ valor . "\n";
    }
}
?>

