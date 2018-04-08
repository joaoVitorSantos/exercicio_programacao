<?php

require_once  "../app/models/Produto.php";


$p1 = new Produto();
$p1->setDescricao("lalalala");
$p1->setNome("Pirão");
$p1->setId(1);
$p1->setIdCategoria(1);

print_r($p1);


$p2 = new Produto(2, "Fango", "kkikikiikiikik", 2.50, 2);

print_r($p2);