<!DOCTYPE html>
<html>
  <head>
     <?php
     $DET = $_GET['i'];
     include "Matriz_UCM.inc";
    echo "<title> ". $filmes[$DET][1] ." </title> ";
     ?>
     <meta charset="utf-8" />
     <meta name="author" content="João Victor Araujo Bruzetti"/>
     <meta name="description" content="Projeto LP1, Filmes Marvel" />
     <meta name="keywords" content="Projeto, LP1" />
     <meta name="generator" content="Visual Code" />
     <link rel="shortcut icon" type="image/x-icon" href="Imagens/logo.jpg" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1" />
      <style>
      body{
        background: black;
      }
      #Filme{
	   background-color: rgb(88, 88, 88);
	   color: white;
     text-align: center;
     margin-top: 5%;
	   margin-left:10%;
	   margin-right:10%;
	   box-shadow: 0px 0px 6px rgb(65, 65, 65);
     border-radius:2px;
      }
     h4{
       text-align:justify;
       padding: 2%;
     }
     h1:hover, h4:hover{
       color: #00a8cc;
     }
     
      </style>
    </head>
  <body>
    <div id="Filme">
        <?php
            echo "<h1>". $filmes[$DET][1] ."</h1>" ;
            echo "<br/> <img src='Imagens/filme". ($DET+1) .".jpg' width='250' />  <br/> <br/>";
            echo "<h4> Sinopse: ". $filmes[$DET][4]."</h4> " ;
            echo "<h4> Elenco: ". $filmes[$DET][5]."</h4> " ;
            echo "<h4> Ano de Lançamento: ". $filmes[$DET][2]. "</h4>" ;
            echo "<h4> Personagem(s) Principal(s): ". $filmes[$DET][0]. "</h4>" ;
            echo "<h4> Fase: ". $filmes[$DET][3]. "</h4>" ;
            echo "<h4>". ($DET+1). "º Filme </h4>" ;
            echo "<h1>Trailer </h1>";
            echo "<embed src='". $filmes[$DET][6] ."' width='900' height='450' />";
        ?>
        <br/>
        <br/>
        <input type="submit" value="voltar para a página de filmes" onclick="history.go(-1)"/>
        <br/> <br/>
        <input type="submit" value="voltar para a página de pesquisa" onclick="history.go(-2)"/>   
        
    </div>
  </body>
</html>