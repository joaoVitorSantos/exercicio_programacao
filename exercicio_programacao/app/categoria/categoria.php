    <html>
        <head>
            <link rel="stylesheet" href="../assets/css/bootstrap.css">
            <link rel="stylesheet" href="../assets/css/mycss.css">
            <body>
                <?php require_once __DIR__. '/../controller/IndexController.php' ?>
                <?php require_once __DIR__. '/../templates/cabecalho.php' ?>



                <table>
                    <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                    </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($categorias as $categoria):?>
                        <tr>
                            <td><?= $categoria->getNome();?></td>
                            <td><?= $categoria->getDescricao();?></td>
                        </tr>
                        <?php endforeach; ?>

                        </tbody>

                </table>


                <?php require_once __DIR__. '/../templates/rodape.php'; ?>
            </body>
        </head>
    </html>


