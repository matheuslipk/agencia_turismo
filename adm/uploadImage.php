<?php
    
?>
<html>
    
    <head>
        
    </head>
    <body>
        <form method="post" enctype="multipart/form-data" action="salvaImagem.php">
            <label > Selecione Imagem </label>
            <input name="arquivo" type="file" required=""/>
            <label > Descrição: </label>
            <input name="descricao" type="text" />
            <label > Nome: </label>
            <input name="nome" type="text" />
            <br />
            <input type="submit" value="Salvar" />
         </form>
    </body>
</html>