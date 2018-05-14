<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gotas de Sabor</title>
        <!--<link href="css/bootstrap.css" rel="stylesheet">-->
    </head>
    <body> 
        <?php
        require('./conf/Config.inc');
        $addinfo = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if ($addinfo && $addinfo['addArquivo']):
            unset($addinfo['addArquivo']);
            $addinfo['imagem'] = ($_FILES['imagem']['tmp_name'] ? $_FILES['imagem'] : null);
            $file = $_FILES['imagem'];
            

            $artigo = new Produto();
            $artigo->CreateProdutos($addinfo);
            if (!$artigo->getResult()):                
                echo $artigo->getMsg();
            else:
                $upload = new Upload();
                $upload->Imagem($file, 'produtos/'.$artigo->getResult().'/');
                 echo $artigo->getMsg();
            endif;
        endif;
        ?>

        <form name="addArquivoForm" action="" method="post" enctype="multipart/form-data">
            <label><span>Titulo</span>
                <input type="text" name="titulo"/><br><br>
            </label>
            <label><span>Conteúdo</span>
                <input type="text" name="conteudo"/><br><br>
            </label>
            <label><span>Imagem</span>
                <input type="file" name="imagem"/><br><br>
            </label>
            <input type="submit" name="addArquivo" value="Cadastrar Arquivo"/>
        </form>
        <li><a href="index.php">Home</a></li>
    </body>
</html>

