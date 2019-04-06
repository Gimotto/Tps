<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css"/>
	<link rel="stylesheet" type="text/css" href="css/bulma.css">
	<style type="text/css">
		#Errore{
			display: none;
		}
	</style>
</head>
<body>
	<div class="section">
		<div class="container">
			<nav class="level">
				<div class="level-item has-text-centered">
					<div class="title is-parent ">
						<article class="tile is-child notification is-info">
							<form action="reg.php" method="POST" style="width: 300px;">
								<p class="title is-centred">Login</p><br>
								<input class="input" type="email" name="email" placeholder="Email"><br>
								<input class="input" type="password" name="password" placeholder="Password" id="passwd" onkeyup="ParametriPassword();"><br>
								<div id="Errore">
									<article class="message is-danger">
 										<div class="message-header">
    										<p>Rispettare i seguenti parametri:</p>
  										</div>
  										<div class="message-body">
    										<ul>
    											<li>Almeno una lettera maiuscola</li>
    											<li>Almeno una lettera minuscola</li>
    											<li>Almeno un numero</li>
    											<li>Almeno un carattere speciale</li>
    										</ul>
  										</div>
									</article>
								</div>
								<button id="Bottone" class="button is-light is-rounded is-hovered" disabled="false">Entra</button><br>
							</form>
						</article>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<script type="text/javascript">
		function ParametriPassword(){
    		var passwd = document.getElementById('passwd');
    		var errore = document.getElementById('Errore');
 			var bottone = document.getElementById('Bottone');

    		if(passwd.value.length < 8){
        		errore.style.display="block";
        		bottone.disabled=true;
    		}else if (passwd.value.length > 32) {
    			errore.style.display="block";
        		bottone.disabled=true;
        	}else if (passwd.value.search(/\d/) == -1) {
        		errore.style.display="block";
        		bottone.disabled=true;
        	}else if (passwd.value.search(/[a-zA-Z]/) == -1) {
        		errore.style.display="block";
        		bottone.disabled=true;
        	}else if (passwd.value.search(/[^a-zA-Z0-9\!\@\#\$\%\^\&\*\(\)\_\+]/) != -1) {
        		errore.style.display="block";
        		bottone.disabled=true;
        	}else {
        		errore.style.display="none";
        		bottone.disabled=false;
        	}	
		}  
	</script>
</body>
</html>