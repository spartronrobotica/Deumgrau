<?php
    if (!empty($_POST['name_donate']) && !empty($_POST['cpf_donate']) && !empty($_POST['telefone_donate'])
        &&!empty($_POST['endereco_donate']) && !empty($_POST['bairro_donate']) && !empty($_POST['municipio_donate'])
        &&!empty($_POST['descricao_donate']) && !empty($_POST['item_donate']) && !empty($_POST['anonimo'])){

        $name_donate = $_POST['name_donate'];
        $cpf_donate = $_POST['cpf_donate'];
        $telefone_donate = $_POST['telefone_donate'];
        $endereco_donate = $_POST['endereco_donate'];
        $bairro_donate = $_POST['bairro_donate'];
        $municipio_donate = $_POST['municipio_donate'];
        $descricao_donate = $_POST['descricao_donate'];
        $item_donate = $_POST['item_donate'];
        $anonimo = $_POST['anonimo'];
        
        include("conecta.php");
        $conn = new conecta();
        
        $sql = $conn->ExecutarSQL("insert into tb_doador values ('','$name_donate','$cpf_donate','$telefone_donate',
        '$endereco_donate','$bairro_donate','$municipio_donate','$descricao_donate','$item_donate','$anonimo', '$ok');");
        
        header('Location: ./register_donate_con.php');
    }
    else{
        echo "Todos os campos devem ser preenchidos";
    }
?>