<html>
<head>
<body>

    <?php require_once __DIR__. "/../controller/CategoriaController.php"; ?>

    <form method="post" action = "CategoriaController.php?action=alterar">



        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="">
        <br>

        <textarea name="descricao" id="descricao" cols="30" rows="3"></textarea>
        <br>

        <input type="submit" name="gravar" value="gravar">
    </form>


</body>
</head>
</html>