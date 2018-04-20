    <html>
        <head>
            <link rel="stylesheet" href="../assets/css/bootstrap.css">
            <link rel="stylesheet" href="../assets/css/mycss.css">
            <body>
                <?php require_once __DIR__. '/../controller/IndexController.php' ?>
                <?php require_once __DIR__. '/../templates/cabecalho.php' ?>




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
                        <th scope="row"><?= $categoria->getNome(); ?></th>
                        <td><?= $categoria->getDescricao(); ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <form action="">

                    <a href="../controller/CategoriaController.php?rota=inserir"><button href="../controller/CategoriaController.php?rota=inserir"> INSERIR </button></a>

                </form>


                <?php require_once __DIR__. '/../templates/rodape.php'; ?>
            </body>
        </head>
    </html>