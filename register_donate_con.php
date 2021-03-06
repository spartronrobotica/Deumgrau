<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/theme.css">
	<?php
			    include 'conecta.php';
			    $conect = new conecta();
			  
			    $query= $conect->ExecutarSQL("select MAX(id_pessoa) as maxId FROM tb_doador"); 
				
       ?>
</head>

<body class="bg-secondary">
  <nav class="navbar navbar-expand-md navbar-dark bg-primary" id="top_page">
      <div class="container"> <a href="home.html"><img src="assets/imgs/logosemAm.png" width="100px" style=""></a>
      <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar10">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar10">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="index.php"><font color="black">Home</font></a> </li>
          <li class="nav-item"> <a class="nav-link" href="index.php#quem_somos"><font color="black">Quem Somos</font></a> </li>
          <li class="nav-item"> <a class="nav-link" href="index.php#como_funciona"><font color="black">Sobre</font></a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-primary" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <h4 class="alert-heading">Muito Bem!</h4>
            <p class="mb-0">O seu cadastro foi concluído com sucesso, você está fazendo o dia de alguém ser mais feliz!!! </p>
		<p class="mb-0">Seu comprovante é o de número: <?php
                        while ($lista = $conect->Listar($query)) {
                            echo "<th>" . $lista['maxId'] . "</th>";
                        }
                    ?>	</p>
		<p class="mb-0">Iremos recolher a sua doação, efetivar sua generosidade e figurar seu nome na lista de doadores!!! </p>
		<a class="btn btn-outline-secondary my-2" href="index.php">Voltar pra Home</a>
          </div>
        </div>
      </div>
    </div>
  </div>
	

                   
   
          
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>