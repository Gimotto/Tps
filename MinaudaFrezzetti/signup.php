<html>
<head>
	<title>Registrazione</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="login-page">
      <div class="form">
        <form action="registrazione.php" class="login-form" method="POST">
          <input type="text" name="nome" placeholder="nome"/>
          <input type="text" name="cognome" placeholder="cognome"/>
          <input type="password" name="password" placeholder="password"/>
          <button>login</button>
          <p class="message">Già registrato? <a href="index.php">Accedi</a></p>
        </form>
      </div>
    </div>
</body>
</html>