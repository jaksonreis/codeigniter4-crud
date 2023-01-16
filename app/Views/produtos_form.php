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
    <p><a href="<?php echo base_url('produtos') ?>"> Listar Produtos</a></p>

    <strong>
        <?php echo $msg ?>
    </strong>
    <?php if ($erros != ''): ?>
        <ul style="color: red;">
            <?php foreach ($erros as $erro): ?>
                <li><?php echo $erro ?></li>
            <?php endforeach ?>
        <?php endif; ?>
        </ul>
        <form method="post">

            <p>Nome do Produto: <input type="text" name="nomeproduto"
                    value="<?php echo (isset($produto) ? $produto['nomeproduto'] : '') ?>" /> </p>

            <p>Valor: <input type="text" name="valor"
                    value="<?php echo (isset($produto) ? $produto['valor'] : '') ?>" /> </p>

            <p>Categoria: <?php echo $comboCategorias ?> </p>
            <input type="submit" value="<?php echo $acao ?>" />
        </form>

</body>

</html>