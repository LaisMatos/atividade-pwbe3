<?php

    //declaração de variavel
    $multiplicando=(double)0;
    $multiplicador=(double)0;
    $resultado=(double)0;
    $acumulador=(String)null;

    // botão Calcular
    if(isset($_POST['btncalc'])){            
        //atribuição de dados
        $multiplicando=$_POST['txtn1'];
        $multiplicador=$_POST['txtn2'];
   
            
        for($multiplicador=0;$multiplicador<=10; $multiplicador++) { 
            
            //calculo
            $resultado=($multiplicando*$multiplicador);

            //acumulador + saída
            $acumulador=$acumulador.$multiplicando.'<span> x </span>'.$multiplicador.'<span> = </span>'.$resultado.'<br>' ;
        }
   
    }   

    /*##### Dúvidas #####
        -Lógica de programção (ex: quando e como usar uma variável)
        -Leitura de código
        -Estrutura de repetição
    */

    /*#### Próximo passo
        - Tratar caixas
        - Tratar entrada de dados numéicos e não numéricos
    */ 
?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Tabuada</title>
</head>
<body>
    
<header id="header">
        <label class="logo">SENAI + $PHP</label>
      
        <div id="divMenu">
            <nav id="navMenu">

                <ul id="menuBurguer">
                    <li id="imgMenu">
                        <img src="img/Group 1.png" alt="Menu">

                        <ul id="navUl">
                            <li><a href="../media/media.php">Média</a></li>
                            <li><a href="../calculadora/calculadora_simples.php">Calculadora</a></li>
                            <li><a href="tabuada.php">Tabuada</a></li>
                            <li><a href="../imparEpar/imparEpar.php">Pares e Impares</a></li>
                        </ul>

                    </li>
                </ul>
            </nav>
        </div>        
    </header>

    <main>
			<div id="conteudo">
				<div id="titulo">
					Tabuada
				</div>
				
				<div id="form">
					<form name="tabuada" method="post" action="tabuada.php">
							<span class="spanText">MultipliCANDO:</span> <input type="text" name="txtn1" value="" > <br> 
							<span class="spanText">MultipliCADOR:</span> <input type="text" name="txtn2" value="" > <br> 
							<div id="container_opcoes">
							    <input id="botao" type="submit" name="btncalc" value ="Calcular" >
                            </div>	
                            
							<div id="resultado">
                                <?php echo($acumulador);?>

                            </div>
                            
					</form>
				</div>
			</div>
		</main>

</body>
</html>