<html>
    <head>
        <body>
            <?php require_once __DIR__."/../controller/ProdutoController.php"?>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?= $produto->getNome(); ?></th>
                        <td><?= $produto->getDescricao(); ?></td>
                        <td><?= $produto->getPreco(); ?></td>
                    </tr>

                </tbody>
            </table>
        </body>
    </head>
</html>