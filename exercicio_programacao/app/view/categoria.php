<?php require_once __DIR__ . '/../controller/IndexController.php' ?>
<?php require_once __DIR__ . '/../templates/cabecalho.php' ?>

                <a href="../controller/CategoriaController.php?action=inserir">Incluir nova Categoria...</a>
                <a href="../controller/CategoriaController.php?action=indexEditar"></a>


                <table id="tabela_index" class="table table-bordered table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($categorias as $categoria):?>
                    <tr>
                        <th scope="row"><a href="CategoriaController?action=showCategoria&id=<?= $categoria->getID()?>"><?= $categoria->getNome(); ?></a></th>
                        <td><?= $categoria->getDescricao(); ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <form action="">

                    <a href="../controller/IndexController.php?rota=inserir"><button href="../controller/CategoriaController.php?rota=inserir"> INSERIR </button></a>

                </form>


                <?php require_once __DIR__ . '/../templates/rodape.php'; ?>
            </body>
        </head>
    </html>