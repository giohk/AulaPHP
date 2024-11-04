<?php
    $bebida=1;
    // pra ir mudando o valor
    switch ($bebida) {
        case 1:
            $preco= 2.50R$;
            $nomebebida= "agua";
            break

        case 2:
            $preco= 4.00R$;
            $nomebebida= "refrigerante";
            break
        case 3:
            $preco= 3.50R$;
            $nomebebida= "suco";
            break
    default
    echo "opcao invalida"
    exit
    }
    echo "<p>Voce escolheu: $nomebebida<p>";
    echo "preco ". number_format($preco, 2,',');
    ?>
