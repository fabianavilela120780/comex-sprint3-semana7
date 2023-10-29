<?php
}

    public  function  adicionarProduto ( $ quantidade ) {
        if ( $ quantidade < 0 ) {
            throw  new  InvalidArgumentException (" A quantidade a ser icluida não pode ser negativa. ");
        }

        $ this -> quantidadeEstoque += $ quantidade ;
    }
    
    public  function  removedorProduto ( $ quantidade ){
        if ( $ quantidade < 0 ) {
            throw  new  InvalidArgumentException (" A quantidade a ser retiradaa não pode ser negativa. ");
        }
        if ( $ quantidade > $ esta quantidade -> Estoque ) {
            throw  new  InvalidArgumentException (" Quantidade insuficiente em estoque ");

        }
        // Remove a quantidade em estoque
            $ this -> quantidadeEstoque -= $ quantidade ;

    }
   
    public  function  calcularValorTotal (){
        return  $ this -> preço * $ this -> quantidadeEstoque ;
    }
}

tente {
    // Cria um objeto Produto
    $ roupas = novo  Produto (" Produto 1 ", 250.0 , 12 );

    // Exibir informações iniciais do produto
    echo " Nome do produto: " . $ produto1 -> getNome () . "\n";
    echo " Preço do produto: $ " . $ produto1 -> getPreco () . "\n";
    eco " Quantidade em estoque: " . $ produto1 -> getQuantidadeEstoque () . "\n";

    //Adicionar 12 unidades do produto
    $ produto1 -> adicionarProduto ( 12 );

    echo " Quantidade total em estoque após adição de produtos: " . $ produto1 -> getQuantidadeEstoque (). "\n";

    // Adiciona -5 unidades do produto
    $ produto1 -> adicionarProduto (- 5 ) ;

    // Remove -7 unidades do produto (deve lançar uma exceção)
    $ produto1 -> removedorProduto (- 7 );

    //Remover 600 unidades (deve lançar uma exceção)
    $ produto1 -> removedorProduto ( 600 );


} catch ( InvalidArgumentException   $ e ){
    eco " Erro ". $ e -> getMessage ()."\n";
}
