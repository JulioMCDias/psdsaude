<?php require 'config.php'; ?>				
<!DOCTYPE html>
<head>
    <title>PSDSaúde</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font-Awesome Font -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="css/login.css">    
</head>
<body class="text-center">

    <form class="form-signin" method="POST">
      <?php 
  			require 'classes/usuarios.class.php';
  		 	$u = new Usuarios();
  		 	
  		 	if (isset($_POST['email']) && !empty($_POST['email'])) {		 	 	
  		 	 	$email = addslashes($_POST['email']);
  		 	 	$senha = $_POST['senha'];

  		 	 	if ($u->login($email, $senha)) {
  		 	 		?>
  		 	 		<script type="text/javascript">
  		 	 			window.location.href="./";
  		 	 		</script>
  		 	 		<?php
  		 	 	} else { 
  		 	 		?>
  			 	 		<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			 	 			Usuário e/ou senha errados.
  			 	 		</div>
  		 	 		<?php 
  		 	 	}
  		 	} 
		  ?>
      <img class="mb-4" src="images/logo_login.png" width="160" height="120">
      <h1 class="h3 mb-3 font-weight-normal">Efetuar Login</h1>
      
      <label for="email" class="sr-only">E-mail</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="exemplo@email.com" required autofocus>
      
      <label for="senha" class="sr-only">Senha</label>
      <input type="password" id="senha" name="senha" class="form-control" placeholder="********" required>
      
      <div class="checkbox mb-3">
        <label>          
        </label>
      </div>

      <button class="button btn-lg gradient-bg btn-block" type="submit">Entrar <i class="fa fa-sign-in-alt"></i></button>
      <p class="mt-5 mb-3 text-muted">&copy; Todos os direitos reservados - 2018</p>

    </form>
</body>
</html>