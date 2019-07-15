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
                          $n_arremessos = 0;    //vamos começar os arremessos em 0

                          while($contagem != 5){
                                
                            $result = mt_rand(0,1);
                            echo $result;
                            $n_arremessos++;
                    
                             //USANDO O IF NORMAL
                             //  if($result ==1){
                             //      $contagem++;           PQ TODA VEZ QUE VC JOGAR A MOEDA, INCREMENTA 1 ATÉ CHEGAR NA CONDIÇÃO LIMITADORA(até tirar 5 vezes cara)
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
                Utilizando um do/while, realizar um programa que lance a moeda até tirar
                cara (o número 1). No final do programa, imprimir quantos lançamentos da
                moeda forem necessários.
                </p>
                    <?php
                        $n_arremessos = 0;
                         do{
                            $result = mt_rand(0,1);
                            $n_arremessos++;
                         } while ($result != 1);

                         echo ('Deu cara depois de '.$n_arremessos.' arremessos');
                    ?>
            </li>         
                 
            <li>
              <p>
                 Definir um array com 5 strings que sejam nomes. Percorrer esse array para
                 imprimir todos os nomes na tela.
                 a. Resolver este problema com um for.
                 b. Resolver este problema com while.
                 c. Resolver este problema com um do/while.  
              </p>
              <div>
                  <?php
                      $nomes = [
                          'Sérgio',
                          'Thomaz',
                          'Fernando Finado',
                          'Ana Lívia',
                          'Marcuso!'
                      ];
                      
                      for ($i = 0 ; $i < count($nomes) ; $i++){    //count é o length do php
                          echo ($nomes[$i].'<br>');
                      }
                      echo('--<br>');                    //isso é só para imprimir uma quebra de linha

                      $i = 0;
                      while($i < count($nomes)){     //poderíamos escrever tbm    while($i <= count($nomes)-1){
                          echo ($nomes[$i].'<br>');
                          $i++;
                      }

                      echo('--Imprimindo ao contrário <br>');    
                      $i = count($nomes) -1;               //o i começa do número 4
                      do { 
                          echo ($nomes[$i] . '<br>');       //imprimi o da posição que está e, na linha abixo, decrementa
                          $i--;                            //aqui estamos decrementando o i de cada repetição
                      } while($i >= 0);                    //verifica se o valor decrementado se encaixa na condição
                      echo($i);                            //no final, i valerá -1
                  ?>
              </div>   
            </li>







            <li>
                <p>
                   Definir um array com 10 números aleatórios entre 0 e 10. Percorrer esse array
                   para imprimir todos os números. A execução deve terminar se algum dos
                   números encontrados for 5 (a mensagem impressa deve ser “Encontramos um
                   5!”).
                   a. Resolver este problema com um for.
                   b. Resolver este problema com um while.
                   c. Resolver este problema com um do/while
                </p>
                <div>
                    <?php
                        

                        //PARA CASAAAA
                         
                    ?>
                </div>
            </li> 
            





            <li>
                <p>
                Utilizando a função “Range”(http://php.net/manual/en/function.range.php),
                criar um intervalo de letras (de a até o), imprimir um valor que diga “Na posição [index], 
                está o valor [value]”, em que [value] será substituído por cada valor do
                array e [index] representa o índice.
                </p>

                <pre>
                     <?php

                     ?>
                </pre>

                <div>
                    <?php 
                         foreach($letras as $posicao => $letra){    //para cada uma das letras COMO(significado do as) a posição da letra que está na variável $posição e a letra em si estará na variável $letra. Seria como escrever  for($i=0; $i<count($letras); $i++){ $letras[$i];}    ou seja, $letra funciona como $letras[$i]. Portanto nessa linha vc já criou duas variáveis e já as colocou para funcionar.  
                               echo "Na posição $posicao, está o valor $letra<br>";
                         }
                         
                         for ($i=0; $i < count($letras) ; $i++) { 
                                $letra = $letras[$i];
                                $posicao = $i;
                                echo "Na posição $posicao, está o valor $letra<br>";
                         }
                    ?>
                </div>         
            </li>

            <li>
                <p>
                Definir uma variável $mascote que seja um array associativo
                a. No índice animal, deve dizer que animal é.
                b. No índice idade, deve dizer a idade.
                c. No índice altura, deve dizer a altura.
                d. No índice nome, deve dizer o nome
                </p>
                <div>
                    <?php
                         $mascote = [
                             'animal' => 'Cachorro',
                             'idade' => 4,
                             'altura' => 40,
                             'nome' => 'Rex'
                         ];
                         echo('<pre>');
                         print_r($mascote);
                         echo('</pre>');
                    ?>
                </div>
            </li>

            <li>
                <p>Percorrer os valores do array com um foreach que imprima (por exemplo):
                   animal: cachorro <br>
                   idade: 5<br>
                   altura: 0,60<br>
                   nome: Sonic<br>
                </p>
                <div>
                    <?php
                         foreach($mascote as $indice => $valor){   //
                             echo "$indice: $valor <br>";
                         }    
                    ?>
                </div>
            </li>



        </ol>   
</body>
</html>