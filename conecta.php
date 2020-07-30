<?php
class conecta
{
    protected $servidor;
    protected $usuario;
    protected $senha;
    protected $banco;
    public $conexao;
    protected $query;
    protected $dados;


    function __construct()
    {
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->senha = "";
        $this->banco = "grau";
        self::conectar();
    }

    function conectar()
    {
        $this->conexao = @mysqli_connect($this->servidor, $this->usuario, $this->senha) or die("NÃO FOI POSSIVEL CONECTAR COM SERVIDOR DO BANCO DE DADOS <br>" . mysqli_error());
        $this->banco = @mysqli_select_db($this->conexao, $this->banco) or die("NÃO FOI POSSIVEL CONECTAR AO BANCO DE DADOS <br>" . mysqli_error());
    }

    function ExecutarSQL($sql)
    {
        $this->query = @mysqli_query($this->conexao, $sql) or die("Erro ao execultar o comando SQL:$sql<br>" . mysqli_error());
        return $this->query;
    }
    function Listar($query)
    {
        $this->dados = @mysqli_fetch_array($query);
        return $this->dados;
    }
} //fechamento da classe conexaoMysql.php
