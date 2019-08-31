
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/index1.css" type="text/css">
        <link rel="stylesheet" href="assets/css/index2.css" type="text/css">
        <link rel="stylesheet" href="assets/css/cadastro-login.css" type="text/css">
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
                        </div>
					</ul>
                    </div>
			</div>
		</nav>
        <!---banner -->
        <div style="height:50px;background: linear-gradient(to right, #b72150 0%,#dd551f 100%);">
                </div>    
            </div>
        </div>
       

		<br><br>
        <!----Login--->

        <form action="login1.php" method="POST">
  <div class="container">
    <h1>Entrar</h1>
    <p>Por favor preencha o formulário para logar.</p>
    <hr>

    <label for="nome"><b>Nome</b></label>
    <input type="text" placeholder=" Nome" name="nome" required>

    <label for="psw"><b>Senha</b></label>
    <input type="password" placeholder="Insira sua Senha" name="psw" required>


    <button type="submit" class="registerbtn">Entrar</button>
  </div>

  <div class="container signin">
    <p>Não tem uma conta ? <a href="cadastro.php">Cadastrar</a>.</p>
  </div>
</form>

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