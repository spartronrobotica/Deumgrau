<?php
    if(!empty($_POST['name']) && !empty($_POST['data_de_nascimento']) && !empty($_POST['nis'])
    && !empty($_POST['rg']) && !empty($_POST['cpf']) && !empty($_POST['telefone'])
    && !empty($_POST['endereco']) && !empty($_POST['bairro']) && !empty($_POST['municipio'])
    && !empty($_POST['auxilio']) && !empty($_POST['auxilio_eme'])
    && !empty($_POST['localizacao']) && !empty($_POST['inseguro'])
    && !empty($_POST['descricao']) && !empty($_POST['item'])){

        $name = $_POST['name'];
        $data_de_nascimento = $_POST['data_de_nascimento'];
        $nis = $_POST['nis'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $municipio = $_POST['municipio'];
        $auxilio = $_POST['auxilio'];
        $qual_auxilio = $_POST['qual_auxilio'];
        $auxilio_eme = $_POST['auxilio_eme'];
        $valor_auxilio_eme = $_POST['valor_auxilio_eme'];
        $localizacao = $_POST['localizacao'];
        $inseguro = $_POST['inseguro'];
        $descricao = $_POST['descricao'];
        $item = $_POST['item'];
        $valor_auxilio = $_POST['valor_auxilio'];
             
        include("conecta.php");
        $conn = new conecta();

        $sql = $conn->ExecutarSQL("insert into tb_receptor values ('','$name','$telefone','$nis'
        ,'$data_de_nascimento','$cpf','$rg','$endereco','$bairro','$item','$municipio'
        ,'$auxilio','$qual_auxilio','$valor_auxilio','$auxilio_eme','$valor_auxilio_eme'
        ,'$localizacao','$inseguro','$descricao');");
        
        header('Location: ./register_receptor_con.html');
    }
    else{
        echo "Todos os campos devem ser preenchidos";
    }
?>