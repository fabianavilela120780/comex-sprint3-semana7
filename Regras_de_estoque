<?php

função  pública realizarCompra ( int  $ qtdeCompra ): void
    {
        tentar
        {
            if ( $ qtdeCompra <= 0 )
            {
                throw  new \ InvalidArgumentException (" Valor deve ser positivo ");
            }
        }

        pegar ( \ InvalidArgumentException  $ e )
        {
            echo  $ e -> getMessage () . PHP_EOL ;
        }

        $ this -> comprasRealizadas += $ qtdeCompra ;

        retornar ;        
    }
