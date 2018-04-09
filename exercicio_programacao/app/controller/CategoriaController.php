<?php

require_once __DIR__. '/../models/CategoriaCrud.php';

    $rota = $_GET['rota'];

if ($rota == "inserir"){
    header('Location: ../view/inserir.php');
}