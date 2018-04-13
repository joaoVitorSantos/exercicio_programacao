<html>
    <head>
        <body>
            <div class="submenu">
                <a href="">Editar Categoria</a>
                <a href="">Excluir Categoria</a>
            </div>
            <h2>Detalhes da Categoria - <?= $categoria->getNome(); ?></h2>

            <h3>Descrição - <?= $categoria->getDescricao(); ?></h3>
        </body>
    </head>
</html>