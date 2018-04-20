<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 06/03/18
 * Time: 16:10
 */

require_once 'DBConnection.php';
require_once 'Categoria.php';

class CategoriaCrud
{

    private $conexao;

    public function __construct()
    {
        //Sempre que a classe for instanciada, já faz a conexão e guarda
        $this->conexao = DBConnection::getConexao();

    }


    public function getCategoria(int $id)
    {
        //Retorna uma categoria, dado um id

        //Fazer consulta
        $sql = 'select * from categoria where id_categoria =' . $id;
        $resultado = $this->conexao->query($sql);

        //FETCH - Transforma o resultado em um array associativo
        $categoria = $resultado->fetch(PDO::FETCH_ASSOC);
        //Criar Objeto do Tipo Categoria
        $objcat = new Categoria($categoria['nome_categoria'], $categoria['id_categoria']);
        //Retornar um objeto categoria com os valores
        return $objcat;

        return $resultado;
    }

    /**
     * @return null|PDO
     */
    public function getCategorias()
    {
        $sql = "SELECT * FROM categoria";

        $resultado = $this->conexao->query($sql);

        $categorias = $resultado->fetchAll(PDO:: FETCH_ASSOC);

        foreach ($categorias as $categoria) {
            $nome = $categoria['nome_categoria'];
            $descricao = $categoria['descricao_categoria'];
            $id = $categoria['id_categoria'];

            $obj = new Categoria($nome, $descricao, $id);
            $listaCategorias[] = $obj;
        }

        return $listaCategorias;
    }

    public function insertCategoria(Categoria $cat)
    {

//        $this->conexao = DBConnection::getConexao();
        $sql = "INSERT INTO categoria(nome_categoria, descricao_categoria) VALUES" . "('{$cat->getNome()}', '{$cat->getDescricao()}')";


        $this->conexao->exec($sql);


    }


    public function updateCategoria(Categoria $categoria){
        $sql = "UPDATE categoria SET nome ='". $categoria->getNome(). "', descricao_categoria ='". $categoria ->getDescricao(). "WHERE id_categoria =" . $categoria->getId();

        $this->conexao->exec($sql);
    }

      public function deleteCategoria($id){

        $sql = "DELETE FROM categoria WHERE id_categoria =". "{$id}";

        $this->conexao->exec($sql);

      }


}
//teste Insert
//$categoria = new Categoria("Celula", "Smartphones", "");
//$crud = new CategoriaCrud();
//$crud->insertCategoria($categoria);

//teste Update
//$categoria = new Categoria("Automóveis", "gygbgb", "");
//$crud = new CategoriaCrud();
//$crud->updateCategoria($categoria, "descricao_categoria", "Carros");
//$resultado = $crud->getCategorias();
//print_r($resultado);

//teste Delete
//$crud = new CategoriaCrud();
//$crud->deleteCategoria(//ID para excluir);
//$resultado = $crud->getCategorias();
//print_r($resultado);

?>