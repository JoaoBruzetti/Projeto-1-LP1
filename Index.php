<!DOCTYPE html>
<html>
  <head>
     <title> Pesquisa UCM </title>
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
    background-image: url(Imagens/back.png);
    background-size:100%;
      }
     </style>
      <script>
        function Opcao(opcao){
          var $fase = document.getElementById('fase');
          var $nome = document.getElementById('nome');
            if(opcao == "F"){
                FASES.className = "visible";
                SUPER.className = "invisible";
                $fase.required = true;
                $nome.required = false;
            }else{
                SUPER.className = "visible";
                FASES.className = "invisible";
                $nome.required = true;
                $fase.required = false;
            }
        }
      </script>
  </head>

  <body>
    <div class="container m-4 text-white font-weight-bold">
        <h1> Selecione o metodo de pesquisa </h1>
         <form action="Filmes.php" method="post">
             <p> Fases <input type="radio" name="met" value="F" onclick="Opcao(this.value)" required /> </p>
             <p> Super-Heroi <input type="radio" name="met" value="S" onclick="Opcao(this.value)" required /> </p>
             <div id="FASES" class="invisible">
                <p> 
                  Selecione a Fase 
                  <select id="fase" name="fase">
                    <option value="" disabled selected> Selecione </option>
                    <option value="1"> Fase 1</option>
                    <option value="2"> Fase 2</option>
                    <option value="3"> Fase 3</option>
                  </select>
                </p>
             </div>
             <div id="SUPER" class="invisible">
                 <p>
                  Selecione O Super-heroi 
                  <select id="nome" name="nome" >
                    <option value="" disabled selected > Selecione </option>
                    <option value="Capitão América"> Capitão América</option>
                    <option value="Capitã Marvel"> Capitã Marvel</option>
                    <option value="Doutor Estranho"> Doutor Estranho</option>
                    <option value="Guardiões da Galaxia"> Guardiões da Galaxia</option>
                    <option value="Homem de Ferro"> Homem de Ferro</option>
                    <option value="Homem-Aranha"> Homem-Aranha</option>
                    <option value="Homem-Formiga"> Homem-Formiga</option>
                    <option value="Hulk"> Hulk </option>
                    <option value="Pantera Negra"> Pantera Negra</option>
                    <option value="Thor"> Thor </option>
                    <option value="Vingadores"> Vingadores</option>
                  </select>
                </p>
             </div>
             <input type="submit" value="Pesquisar" />
         </form>
        
        
    </div>
  </body>
</html>