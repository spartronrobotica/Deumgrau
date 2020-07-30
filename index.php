<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css">
  <link rel="stylesheet" href="assets/theme.css">
  <link rel="shortcut icon" href="grauicon.png" />
  <?php
    include 'conecta.php';
    $conect = new conecta();

    $query= $conect->ExecutarSQL("select * from tb_doador where anonimo = 'Não' and ok = 'Sim' ");
  ?>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-primary" id="top_page">
      <div class="container"> <a href="index.php"><img src="assets/imgs/logosemAm.png" width="100px" style=""></a>
      <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar10">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar10">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="index.php"><font color="black">Home</font></a> </li>
          <li class="nav-item"> <a class="nav-link" href="#quem_somos"><font color="black">Quem Somos</font></a> </li>
          <li class="nav-item"> <a class="nav-link" href="#como_funciona"><font color="black">Sobre</font></a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5 text-center text-white align-items-center d-flex h-50" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(https://static.pingendo.com/cover-bubble-dark.svg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
    <div class="container py-5">
      <div class="row">
        <div class="mx-auto col-lg-8 col-md-10">
          <h1 class="display-3 mb-4">Faça o bem ao dia de alguém.</h1>
          <p class="lead mb-5" style="">Ajude alguém com algo que você nem use mais, ou que não te faz mais falta. E você que precisa de algo, faça um pedido. Nosso sistema irá juntar aquilo que voce precisa a quem tem algo a doar</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center m-3">PRINCIPAIS DOADORES</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-bordered ">
              <thead class="thead-dark">
                <tr colspan="3"></tr>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                </tr>
              </thead>
              <tbody>
                   <?php
                        while ($lista = $conect->Listar($query)) {
                            echo "<tr>";
                            echo "<th>" . $lista['id_pessoa'] . "</th>";
                            echo "<td>". $lista['name_donate']."</td>";
                            echo "</tr>";
                        }
                    ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-uppercase">
    <div class="container">
      <div class="row">
        <div class="col-md-6 my-3" style="">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center text-secondary">Nunca foi tão fácil ajudar alguém, faça uma doação agora.</p>
            </div>
          </div><img class="img-fluid d-block rounded-circle mx-auto" src="iconD.png" width="44.5%">
          <div class="row">
            <div class="col-md-12"><a class="btn m-2 btn-block text-uppercase btn-primary" href="register_donate.html" style="">Faça uma Doação</a></div>
          </div>
        </div>
        <div class="col-md-6 my-3">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center text-uppercase text-secondary">Cadastre-se agora e receba a ajuda necessaria.</p>
            </div>
          </div><img class="img-fluid d-block rounded-circle mx-auto" src="iconR.png" width="50%">
          <div class="row">
            <div class="col-md-12"><a class="btn m-2 btn-block text-uppercase btn-primary" href="register_receptor.html">Faça um Pedido</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center" style="background-image: linear-gradient(to left bottom, rgba(189, 195, 199, .75), rgba(44, 62, 80, .75)); background-size: 100%;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="mb-3" id="quem_somos">Quem Somos</h1>
          <p>Em meio a pandemia são necessárias soluções inteligentes e práticas para se lidar com a nova crise que vem abalando nossa sociedade, nossa iniciativa a grau é um meio de dar a volta por cima e trazer soluções sofisticadas de maneiras sofisticadas. Grau se baseia na estrutura da generosidade, retribuição no amor e na união de um coletivo para a melhora e superação dos problemas que enfrentamos no mundo. Somos uma ação do Grupo de Estudos e Pesquisas em Automação e Robótica do campus Porto Nacional do IFTO. </p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 id="como_funciona">Como tudo funciona</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 p-3">
          <p>Está a fim de tirar do fundo da gaveta do armário aquele eletrônico usado que não lhe serve mais pois você comprou um mais novo? Você tem aquelas roupas e calçados que não lhe servem mais porque teve alteração de peso? Você é um empresário e tem computadores, celulares ou parte deles (em funcionamento), alimentos, roupas e calçados e quer ajudar a quem precisa? Parabéns você tem grandes chances de dar um grau na vida de alguem, fazendo-a feliz, você é um doador. A peça do computador ou celular doado será destinado(a) a montagem de computadores e celulares para serem cedidos a estudantes portuenses participarem de suas aulas online. Já alimentos e calçados serão doados diretamente. Doadores e receptores não se conhecem, o sistema irá unir aquilo que você doar com aquilo que alguem precisa receber. Ao doar, você receberá um número, que será anexado à doação, entregue para o receptor e divulgado nas redes, dado transparência pela seu ato de puro amor.</p>
        </div>
        <div class="col-md-6 p-3">
          <p>Está precisando de um computador ou celular para acessar suas aulas online e não tem condições financeiras em adquirir um novo? Minha família está com problemas na renda e estamos sem condições para a compra de alimentos, roupas e calçados? Então você pode ser um receptor da generosidade e amor de um doar. Para receber um computador ou celular você deve ser um estudante regularmene matriculado em uma instituição de ensino da cidade de Porto Nacional, onde o material cedido será utilizado por você para seus estudos em aulas online. Já os alimentos, roupas e calçados, serão doados para aqueles que demonstram maior vulnerabilidade social. Nossos sistemas irão cruzar os dados do receptor com os dados preenchidos por aqueles que com sua generosidade fizeram uma doação.  </p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3 bg-dark" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center d-md-flex align-items-center" style=""> <img src="assets/imgs/rostofundo.png" width="50">
          <ul class="nav mx-md-auto d-flex justify-content-center">
            <li class="nav-item text-primary" style=""> <a class="nav-link active" href="#top_page">Home</a> </li>
          </ul>
          <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-md-between justify-content-center my-2"> <a href="https://www.facebook.com/SpartronRobotica" target="blanc">
                <i class="d-block fa fa-facebook-official text-muted fa-lg mx-2"></i>
                </a> <a href="https://www.instagram.com/spartronrobotica/" target="blanc">
                <i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-twitter text-muted fa-lg ml-2"></i>
              </a> </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mt-2 mb-0" style="">© Developed by Spartron Robótica <img src="spartron.png" alt="Spartron Robótica" width=16 height=16> by Scobas and Pedao</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>