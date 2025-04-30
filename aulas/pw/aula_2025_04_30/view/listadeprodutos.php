<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <table border = "1" style="border-collapse: collapse; width: 25%;">
        <tr style="background-color: #f2f2f2;">
            <th>Codigo</th>
            <th>Produto</th>
            <th>Preco Unitario</th>
        </tr>
        <?php foreach($produtos as $produto): ?>
            <tr>
                <td><?php echo $produto->getCodigo(); ?></td>
                <td><?php echo $produto->getProduto(); ?></td>
                <td><?php echo number_format($produto->getPrecoUnitario(), 2, ',','.'); ?></td>

            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>