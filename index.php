<html>
    
    <body>
            <?php

                if(isset($_POST["acao"]))
                //formulario foi enviado!
            {   $arquivo = $_FILES ['file']  

                $arquivono = explode('.',$arquivo['name']);

                if($arquivono[sizeof($arquivono)-3])
                {   move_uploaded_file($arquivo['tmp_name'],'uploads/'.$arquivo['name']);

        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file" /> 
            <input type="submit" name="acao" value="Enviar" />
        </form>
    </body>


</html>