<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarefa PHP - LOOOOPS!</title>
</head>
<body>
      <ol>
          <li>
              <p>Utilizando um for, imprimir os números de 1 a 100.</p>
              <div>
                  <?php>
                    for <$i =1; $1 <= mt_rand(0,100); $i++){
                         echo ($i. ',');
                    }
                  ?>
            </div>
           </li>

           <li>
               <p>Mostrar a tabela de multiplicação do 2 utilizando um for.</p>
               <div>
                    <table>
                        <?php 
                             for ($i=1; $i <= 10 ; $i++) { 
                                echo('<tr>');                              //é para abrir o código html dentro do php
                                echo(' <td>');                            //é sobre tabela
                                echo(2 . ' x ' . $i . '=' . (2*$i) );  
                                echo(' </td>'); 
                                echo('</tr>');  
                             }
                        ?>
                    </table>
                </div>
            </li>

            <li>
                 <p>
                 Utilizando um while, fazer um programa que lance uma moeda (escolhendo
                 um número aleatório que pode ser 0 ou 1) até tirar 5 vezes cara (o número 1).
                 Ao terminar, imprimir o número de lançamentos da moeda até tirar 5 vezes
                 cara.
                 </p>
                 <div>
                     <?php
                          $contagem = 0;        //vamos começar em 0
                          $_arremessos = 0;    //vamos começar os arremessos em 0

                          while($contagem != 5){
                                
                            $result = mt_rand(0,1);
                            $n_arremessos++;
                          

                             //USANDO O IF NORMAL
                             //  if($result ==1){
                             //      $contagem++;
                             //      } else {
                             //          $contagem = 0;
                             //      }
     
                             //AGORA ESCREVENDO O MESMO SÓ QUE USANDO O IF TERNÁRIO
                             // $contagem = ($result ==1 ? $contagem+1 : 0);

                             //FORMA IF TERNÁRIO SEM ATRIBUIÇÃO
                             $result == 1 ? $contagem++ : $contagem=0;
                          }
                          echo (" - Lançou a moeda $n_arremessos vezes até conseguir 5 caras");
                     ?> 
                 </div>  
            </li>

            <li>
                <p>         
                        
                 


            <li>                 
        </ol>   
</body>
</html>