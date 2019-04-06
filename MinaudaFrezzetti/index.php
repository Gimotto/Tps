<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
		<div class="login-page">
      <div class="form">
        <form action="accesso.php" class="login-form" method="POST">
          <input type="text" name="email" placeholder="email"/>
          <input type="password" name="password" placeholder="password"/>
          <button>login</button>
          <p class="message">Non registrato? <a href="signup.php">Crea un account</a></p>
        </form>
      </div>
    </div>
	</body>
</html>