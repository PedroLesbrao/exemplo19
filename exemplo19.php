<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
            <?php
                echo "Envio de valores e dados atraves de formulario<br><br>";
                // o nome do parâmetro deve ser igual ao "name" do formulario
                $fValor = $_GET["valor"]; 
                echo "O valor $fValor foi enviado por formulario HTML atraves
                       do metodo GET.<br>";
            ?>
        </div>
    </body>
</html>