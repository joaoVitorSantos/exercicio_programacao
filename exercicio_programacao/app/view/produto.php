<html>
    <head>
        <body>
            <?php   require_once __DIR__. "/../controller/IndexController.php" ?>

            <table id="tabela_index" class="table table-bordered table-dark">
                <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($produtos as $produto): ?>
                    <tr>
                        <th scope="row"><a href="ProdutoController.php?action=showProduto&id=<?= $produto->getId()?>"><?= $produto->getNome(); ?></a></th>
                        <td><?= $produto->getDescricao(); ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

            <div></div>
        </body>
    </head>
</html>