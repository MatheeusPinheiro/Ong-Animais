
<!-- HTML5 -->
<!DOCTYPE html>
<html lang="pt-br">

<!-- Cabeçalho principal com as importações do CSS -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PetHelp</title>
	<link rel="stylesheet" href="../../../css/bootstrap.min.css" />
	<link rel="stylesheet" href="../../../css/myCss.css" />
	<link rel="stylesheet" href="../../../css/modal.css" />
</head>

<body>
	<?php
	//Se não existe sessão será exibido esse menu.
	if (!isset($_SESSION['email'])) {
	?>

		<header>
			<div class="container-header">
				<div class="logo">
					<a href="/">Pet<span>Help</span></a>
				</div>
				<div class="menu">
					<nav>
						<ul>
							<li>
								<a href="/adoption" class="active menu-option">Quero adotar</a>
							</li>
							<li>
								<a href="/singup" class=" menu-option">Entrar</a>
							</li>

							<li>
								<a href="/contact" class=" menu-option">Contato</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	<?php
	  //Se a sessão existe e o usuário logado for do tipo_usuario 1, que é a ong.
	  //Será exibido esse menu.		
	} else if(isset($_SESSION['email']) && $_SESSION['tipo_usuario'] == 1) { ?>
		<header>
			<div class="container-header">
				<div class="logo">
					<a href="/">Pet<span>Help</span></a>
				</div>
				<div class="menu">
					<nav>
						<ul>
							<li>
								<a href="/adoption" class="active menu-option">Quero adotar</a>
							</li>
							<li>
								<a href="/seedoaction" class=" menu-option">Ver doações</a>
							</li>
							<li>
								<a href="/contact" class=" menu-option">Contato</a>
							</li>
							<li>
								<a href="../../Controllers/sair.php" class=" menu-option">Sair</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	<?php
	  //Se a sessão existe e o usuário logado for do tipo_usuario 2, que é o doador.
	  //Será exibido esse menu.	
	}else if(isset($_SESSION['email']) && $_SESSION['tipo_usuario'] == 2){ ?>
			<header>
			<div class="container-header">
				<div class="logo">
					<a href="/">Pet<span>Help</span></a>
				</div>
				<div class="menu">
					<nav>
						<ul>
							<li>
								<a href="/adoption" class="active menu-option">Quero adotar</a>
							</li>
							<li>
								<a href="#" class=" menu-option doador">Doar</a>
							</li>
							<li>
								<a href="/mydoaction" class=" menu-option doador">Minhas Doações</a>
							</li>

							<li>
								<a href="/contact" class=" menu-option">Contato</a>
							</li>
							
							<li>
								<a href="../../Controllers/sair.php" class=" menu-option">Sair</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<?php
	//Caso nenhuma das opções seja satisfeita, sera exibido na tela a string "Erro".	
	}else {echo "Erro!!"; }
	
	?>



	</body>