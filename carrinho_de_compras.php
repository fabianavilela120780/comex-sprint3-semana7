<?php

namespace  Docarley \ Comex \ Model ;

turma CarrinhoCompra
{

    função pública __construir(
        matriz privada $produtos
    ) {
    }

    função pública getProdutos(): array
    {
        return  $ this -> produtos ;
    }

    //compra maior que 1000, desconto de 30%
    função pública getValorTotalProdutos()
    {
        $ valorTotalProdutos = 0 ;
        foreach ( $ this -> produtos  as  $ item ) {
            $ valorTotalProdutos += $ item -> getPreco ();
        }
        retornar $valorTotalProdutos >= 1000 ? $valorTotalProdutos * 0,9 : $valorTotalProdutos; //retorno utilizando operador ternário
    }

    //compra maior que 1000, não paga frete, do contrário, 999,99
    função pública getValorFrete()
    {
        retornar $this->getValorTotalProdutos() >= 1000 ? 0: 999,99;
    }

    função pública getValorTotalCompra(){
        return  $ this -> getValorTotalProdutos () + $ this -> getValorFrete ();
    }
}
