<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $titulo ?>
    </title>
</head>

<body>
    <h2><?php echo $titulo ?></h2>
    <p><a href="<?php echo base_url('categorias')?>"> Listar Categorias</a></p>

    <strong><?php echo $msg ?></strong>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo (isset($categoria) ? $categoria['id'] : '' )  ?>"/> 
        <p>Nome da categoria: <input type="text" name="nomecategoria"  value="<?php echo (isset($categoria) ? $categoria['nomecategoria'] : '' )  ?>"/> </p>
        <input type="submit" value="<?php echo $acao ?>"/> 
    </form>

</body>

</html>