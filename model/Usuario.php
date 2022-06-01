<?php

require_once 'Banco.php';
require_once '../Conexao.php';

class Usuario extends Banco
{

    private $id;
    private $login;
    private $senha;
    private $permissao;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getPermissao()
    {
        return $this->permissao;
    }

    public function setPermissao($permissao)
    {
        $this->permissao = $permissao;
    }

    public function save()
    {
        $result = false;

        //cria um objeto do tipo conexao
        $conexao = new Conexao();

        //cria query de inserção passando os atributos que serão armazenados
        $query = "insert into usuario (id, login, senha, permissao) values (null, :login, :senha, :permissao)";

        //cria a conexão com o banco de dados

        if ($conn = $conexao->getConection()) {
            //prepara a query para execução
            $stmt = $conn->prepare($query);
            //executa a query
            if ($stmt->execute(array(':login' => $this->login, ':senha' => $this->senha, ':permissao' => $this->permissao))) {
                $result = $stmt->rowCount();
            }
        }
        return $result;
    }

    public function remove($id)
    {
    }

    public function find($id)
    {
    }

    public function listAll()
    {
        $conexao = new Conexao();

        $conn = $conexao->getConection();

        $query = "SELECT * FROM usuario";

        $stmt = $conn->prepare($query);

        $result = array();

        if ($stmt->execute()){
            while ($rs = $stmt->fetchObject(Usuario::class)){
                $result[] = $rs;
            }
        }else{
            $result = false;
        }
        return $result;
    }

    public function count()
    {
    }
}
