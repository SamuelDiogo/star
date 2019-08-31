<?php
    session_start();
    require 'conexao.php';
    if (!empty($_SESSION['nome']))
    {
        $id = $_SESSION['nome'];
        $sql = $pdo->prepare("SELECT nome FROM usuario WHERE idUsuario = :id");
        $sql->bindValue(":id", $id, PDO::PARAM_INT);
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            $sql = $sql->fetch();
            $nome = $sql['nome'];
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/index1.css" type="text/css">
        <link rel="stylesheet" href="assets/css/index2.css" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="icon" href="assets/img/star.png"/>
		<title>StarGames</title>
	</head>
	<body>
	<!---menu navbar---------------->
	
		<nav class="navbar navbar-expand-lg" style="background-color:#1C1C1C;height: 105px;">
			<div class="container">
                <a class="navbar-brand" href="index1.php">
                    <img src="assets/img/starlogo.png" width="80" height="80" alt="">
                  </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
				<span class="navbar-toggler-icon" style="color:white;"><i class="fas fa-bars"></i></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <div class="nov2">
                            <li class="nav-item active">
                                <a class="nav-link" href="index1.php">STAR <span class="sr-only">(current)</span></a>
                            </li>
                        </div>
                    </ul>
                    
					<ul class="navbar-nav mr-auto ml-5 nov4">
                        <div class="nov4 row">
						<li class="nav-item">
							<a class="nav-link" href="analises.php">Análises</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="todosjogos.php">Todos os jogos</a>
                        </li>
                        <li class="nav-item">
							<a class="nav-link" href="sobre.php">Sobre</a>
						</li>
                        </div>
					</ul>
				</div>
			</div>
		</nav>
		
	<!---banner ------------------>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center" id="topo" style=" height:350px">
             <div class="container-fluid">
                <div id="banner">
                <center>
                    <div class="col-12 col-sm-4 col-md-8">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 40px;">
                            <div class="carousel-inner" style="border-radius: 15px;box-shadow: 0px 10px 35px black;">
                              <div class="carousel-item active">
                                  <a href="#">
                                      <img class="d-block w-100" src="assets/img/banner1.jpg" alt="First slide">
                                  </a>
                                    <div class="carousel-caption d-none d-md-block" style="text-align:justify;">
                                        <h5></h5>
                                    </div>
                              </div>
                              <div class="carousel-item">
                                    <a href="#">
                                      <img class="d-block w-100" src="assets/img/banner2.jpg" alt="Second slide">
                                    </a>
                                  <div class="carousel-caption d-none d-md-block">
                                    </div>
                              </div>
                              <div class="carousel-item">
                                  <a href="#">
                                <img class="d-block w-100" src="assets/img/banner3.jpg" alt="Third slide">
                                  </a>
                                  <div class="carousel-caption d-none d-md-block">
                                    </div>
                              </div>
                              <div class="carousel-item">
                                  <a href="#">
                                <img class="d-block w-100" src="assets/img/banner4.jpg" alt="Third slide">
                                  </a>
                                  <div class="carousel-caption d-none d-md-block">
                                    </div>
                              </div>
                              <div class="carousel-item">
                                  <a href="#">
                                <img class="d-block w-100" src="assets/img/banner5.jpg" alt="Third slide">
                                  </a>
                                  <div class="carousel-caption d-none d-md-block">
                                    </div>
                              </div>
                              <div class="carousel-item">
                                  <a href="#">
                                <img class="d-block w-100" src="assets/img/banner6.jpg" alt="Third slide">
                                  </a>
                                  <div class="carousel-caption d-none d-md-block">
                                    </div>
                              </div>
                              <div class="carousel-item">
                                  <a href="#">
                                <img class="d-block w-100" src="assets/img/banner7.jpg" alt="Third slide">
                                  </a>
                                  <div class="carousel-caption d-none d-md-block">
                                    </div>
                              </div>
                              <div class="carousel-item">
                                  <a href="#">
                                <img class="d-block w-100" src="assets/img/banner8.jpg" alt="Third slide">
                                  </a>
                                  <div class="carousel-caption d-none d-md-block">
                                    </div>
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Próximo</span>
                            </a>
                        </div>
                    </div>
                </center>
                </div>
			 </div>
		   </div>
	   </div>
        </div>    
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br>
               			
	<!---conteudo---------------->
	<div class="container">
	<div class="col-12">
	<div class="row">
		<!--------conteudo esquerda--------------------------------->
			<div class="col-xs-12 col-8 col-sm-12 col-md-8">
                 <div class="nov1">
                    <p><a href="#">Novidades</a></p>
                </div>
				<div class="card1">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-5">
                                <a href="#">
							<img class="card-img-top" src="assets/img/banner1.jpg" alt="Card image cap" style="border-radius: 10px;">
                                </a>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-7">
							<div class="card-body">
                                <h1 class="card-title"><a href="#">Spider-Man é considerado um dos melhores jogos do ano</a></h1>
                            </div>
						</div>
					</div>
				</div>
			     <br>
				<div class="card2">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-5">
                                <a href="#">
							<img class="card-img-top" src="assets/img/banner5.jpg" alt="Card image cap" style="border-radius: 10px;">
                                </a>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-7">
							<div class="card-body">
                                <h1 class="card-title"><a href="#">Pokémon volta com Novas  jogabilidades</a></h1>
                            </div>
						</div>
					</div>
				</div>
				<br>
				<div class="card3">
					<div class="row">
						<div class="col-xs-4 col-sm-12 col-md-5">
                            <div class="over">
                                <a href="#">
							<img class="card-img-top" src="assets/img/banner4.jpg" alt="Card image cap" style="border-radius: 10px;">
                                </a>
                            </div>
						</div>
						<div class="col-xs-4 col-sm-12 col-md-7">
							<div class="card-body">
                                <h1 class="card-title"><a href="#">Hitman entra no Top 10 melhores jogos </a></h1>
                            </div>
						</div>
					</div>
				</div>
                <br>
                <div class="card3">
					<div class="row">
						<div class="col-xs-4 col-sm-12 col-md-5">
                            <div class="over">
                                <a href="#">
							<img class="card-img-top" src="assets/img/banner6.jpg" alt="Card image cap" style="border-radius: 10px;">
                                </a>
                            </div>
						</div>
						<div class="col-xs-4 col-sm-12 col-md-7">
							<div class="card-body">
                                <h1 class="card-title"><a href="#">Red Dead Redemption 2 Ganha PREMIO de melhor Historia</a></h1>
                            </div>
						</div>
					</div>
				</div>
			</div>

            <br><br>
			<!--------conteudo direita--------------------------------->
			<div class="col-md-4">

				<div class="container-fluid" style="background-color:black;width:97%;border-radius: 15px 15px 15px 15px;">

                        <div class="nov3">
                        <p><a href="analises.php">Análises</a></p>
                        </div>
					<div class="col-md-12"  style="background-image: url(assets/img/gtabanner3.jpg);height:120px">
						<div class="card-body2">
                        <a href="jogos1.php"> <i class="fas fa-eye"></i></a>
                            <br>
                        </div>
					</div>
					<div class="col-md-12" style="background-image: url(assets/img/god5.jpg);height:120px">
						<div class="card-body2">
                        <a href="jogos2.php"> <i class="fas fa-eye"></i></a>
                            <br>
                        </div>
					</div>
                    <div class="col-md-12" style="background-image: url(assets/img/hit1.jpg);height:120px">
						<div class="card-body2">
                        <a href="jogos5.php"> <i class="fas fa-eye"></i></a>
                            <br>
                        </div>
					</div>
                    <div class="col-md-12" style="background-image: url(assets/img/red4.jpg);height:120px">
						<div class="card-body2">
                        <a href="jogos3.php"> <i class="fas fa-eye"></i></a>
                            <br>
                        </div>
					</div>
                    <div class="col-md-12" style="background-image: url(assets/img/dark6.jpg);height:120px">
						<div class="card-body2">
                        <a href="jogos4.php"> <i class="fas fa-eye"></i></a>
                            <br>
                        </div>
					</div>
                    <br><br>
					</div>
                </div>
			</div>
            <!---->
	</div>
	</div>
    </div>
	<!---final conteudo---->
	<br><br><br><br><hr>

     <!--jogos pra comprar--->

<!---conteudo---------------->
    <div class="container">
	    <div class="col-8">
                    <div class="row">
						<div class="col-5">
                            <a href="gta.php"><img class="container-fluid" src="assets/img/gtabanner1.jpg" alt="Card image cap"></a> 
						</div>
						<div class="col-7">
							<div class="gtalink2">
								<h1 class="card-title"><a href="gta.php">Grand Theft Auto V</a></h1>
                                <p class="texto1">$ 120.00</p>
                                <div class="icones">
                                <p><i class="fas fa-desktop"></i></p>
                                <p><i class="fab fa-playstation"></i></p>
                                <p><i class="fab fa-xbox"></i></p>
                                </div>
                                <br>
                                <button type="button" class="btn btn-warning"><i class="fas fa-cart-arrow-down"></i></button>
                                <button type="button" class="btn btn-success">Comprar</button>
							</div>
						</div>
                    </div>
                    <hr><br>
                    <div class="row">
						<div class="col-5">
                            <a href="gta.php"><img class="container-fluid" src="assets/img/codbanner.jpg" alt="Card image cap"></a> 
						</div>
						<div class="col-7">
							<div class="gtalink2">
								<h1 class="card-title"><a href="gta.php">Call of Duty Modern Warfare</a></h1>
                                <p class="texto1">$ 120.00</p>
                                <div class="icones">
                                <p><i class="fas fa-desktop"></i></p>
                                <p><i class="fab fa-playstation"></i></p>
                                <p><i class="fab fa-xbox"></i></p>
                                </div>
                                <br>
                                <button type="button" class="btn btn-warning"><i class="fas fa-cart-arrow-down"></i></button>
                                <button type="button" class="btn btn-success">Comprar</button>
							</div>
						</div>
                    </div>
                    <hr><br>
                    <div class="row">
						<div class="col-5">
                            <a href="gta.php"><img class="container-fluid" src="assets/img/fifa20banner.jpg" alt="Card image cap"></a> 
						</div>
						<div class="col-7">
							<div class="gtalink2">
								<h1 class="card-title"><a href="gta.php">Fifa 20</a></h1>
                                <p class="texto1">$ 120.00</p>
                                <div class="icones">
                                <p><i class="fas fa-desktop"></i></p>
                                <p><i class="fab fa-playstation"></i></p>
                                <p><i class="fab fa-xbox"></i></p>
                                </div>
                                <br>
                                <button type="button" class="btn btn-warning"><i class="fas fa-cart-arrow-down"></i></button>
                                <button type="button" class="btn btn-success">Comprar</button>
							</div>
						</div>
                    </div>
                    <hr><br>
                    <div class="row">
						<div class="col-5">
                            <a href="gta.php"><img class="container-fluid" src="assets/img/witcherbanner.jpg" alt="Card image cap"></a> 
						</div>
						<div class="col-7">
							<div class="gtalink2">
								<h1 class="card-title"><a href="gta.php">The Witcher III</a></h1>
                                <p class="texto1">$ 120.00</p>
                                <div class="icones">
                                <p><i class="fas fa-desktop"></i></p>
                                <p><i class="fab fa-playstation"></i></p>
                                <p><i class="fab fa-xbox"></i></p>
                                </div>
                                <br>
                                <button type="button" class="btn btn-warning"><i class="fas fa-cart-arrow-down"></i></button>
                                <button type="button" class="btn btn-success">Comprar</button>
							</div>
						</div>
                    </div>
                    <hr><br>
                    <div class="row">
						<div class="col-5">
                            <a href="god.php"><img class="container-fluid" src="assets/img/godbanner.jpg" alt="Card image cap"></a> 
						</div>
						<div class="col-7">
							<div class="gtalink2">
								<h1 class="card-title"><a href="god.php">God of War</a></h1>
                                <p class="texto1">$ 120.00</p>
                                <div class="icones">
                                <p><i class="fas fa-desktop"></i></p>
                                <p><i class="fab fa-playstation"></i></p>
                                </div>
                                <br>
                                <button type="button" class="btn btn-warning"><i class="fas fa-cart-arrow-down"></i></button>
                                <button type="button" class="btn btn-success">Comprar</button>
							</div>
						</div>
                    </div>
                    <hr><br>

		
	
	</div>
    </div>
        <!----->
        <br><br><br><br><br>

	<!---footer---------------->
    <div style="height:50px;background: linear-gradient(to right, #b72150 0%,#dd551f 100%);"></div>
	<footer id="footer" style="background-color:#1C1C1C;">
        <br>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 info">
                        <center>
                        <h1>Star Games</h1>
                        <p style="font-family: 'Segoe UI light', Tahoma, Verdana, sans-serif,serif;font-weight: 700;">Um site criado por gamers, para gamers.</p>
                        </center>
                    </div>
                    <div class="col-lg-4 col-md-4 footer-links">
                        <center>
                        <div class="nov5">
                            <ul class="navbar-nav">
                                <li class="nav-item"><i class="ion-ios-arrow-right"></i><a href="index1.php">Home</a></li>
                                <li class="nav-item"><i class="ion-ios-arrow-right"></i><a href="analises.php">Análises</a></li>
                                <li class="nav-item"><i class="ion-ios-arrow-right"></i><a href="todosjogos.php">Jogos</a></li>
                                <li class="nav-item"><i class="ion-ios-arrow-right"></i><a href="#">Login</a></li>
                            </ul>
                        </div>
                        </center>
                    </div>
                    <div class="col-lg-4 col-md-4 footer-contact">
                        <center>
                        <h2 class="info">Siga-nos!</h2>
                        <div class="nov6">
                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="git"><i class="fab fa-github"></i></a>
                        </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <br><br>
        <p class="copyright text-muted" style="color:white;">Copyright &copy;Star Games 2018</p>
        </center>
	</footer>
	
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	
	</body>
</html>