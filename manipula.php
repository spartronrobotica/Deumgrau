<?php
include_once 'conecta.php';

class Manipular extends conecta
{
    protected $sql;
    protected $tabela;
    protected $dados;
    protected $campos;
    protected $CodPesquisa;
    
    
    public function setdados($dd)
    {
        $this->dados = $dd;
    }

    public function setCodPesquisa($cod)
    {
        $this->CodPesquisa=$cod;
    }
}
