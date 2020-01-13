<!DOCTYPE html>
<html>
  <head>
     <title> Filmes </title>
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
       text-align: center;
       background: black;
     }
      span{
        margin: 80px;
      }
      table{
        margin-left: 16%;
      }
     </style>
  </head>

  <body>
    <div class="container">
        <?php
          include "Matriz_UCM.inc";
           $MODO = $_POST['met'];
           if( $MODO == 'F'){
               $FASE = $_POST['fase'];
               $I2=0;
               echo "<h1 class='text-center text-white'> Fase $FASE </h1>";
               echo "<table>";
               for($I=0;$I<count($filmes);$I++){
                 if ($I2==0) {
                   echo "<tr>";
                 }
                 if($filmes[$I][3] == $FASE){
                       echo "<th> <br/> <img src='Imagens/filme". ($I+1) .".jpg' width='250' height='400' /> <br/> <br/>  <a href='Detalhes.php?i=$I'> <span class='p-2 bg-info text-white text-center'> Saiba Mais </span> </a>  </th>";
                       $I2++;
                   }
                 if ($I2 == 3) {
                     echo "</tr> ";
                     $I2=0;
                   }
               }
               echo "</table>";
           }else {
               $NOME = $_POST['nome'];
                $I2=0;
                echo "<h1 class='text-center text-white'> Filme(s) $NOME </h1>";
                echo "<table>";
               for($I=0;$I<count($filmes);$I++) {
                if ($I2==0) {
                  echo "<tr>";
                }
                if($filmes[$I][0] == $NOME){
                    echo "<th> <br/> <img src='Imagens/filme". ($I+1) .".jpg' width='250' height='400' /> <br/>  <br/> <a href='Detalhes.php?i=$I'>  <span class='p-2  bg-info text-white text-center'> Saiba Mais </span> </a> </th> ";
                    $I2++; 
                  }
                if ($I2 == 3) {
                    echo "</tr> ";
                    $I2=0;
                  }
               }
               echo "</table>";
           }
        ?>
        <br/>
        <input type="submit" value="voltar" onclick="history.go(-1)"/>
        
        
    </div>
  </body>
</html>