<!DOCTYPE html>
<html>
<head>
	<title>Prova ajax</title>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
	<div class="container">
		<form method="POST">
			<label for="firstName">Username</label>
			<input type="text" id="username" name="username" placeholder="Username">
			<span id="disponibilita"></span><br>
			<button type="button" name="registrazione" id="registrazione">Registrati</button>
		</form>
    </div>
</body>
<script type="text/javascript">
        $(document).ready(function(){
            $('#username').blur(function(){
                var username=$(this).val();

                $.ajax({
                    url:'controllo.php',
                    method:"POST",
                    data:{user_name:username},
                    success:function(data){
                        if (data=='0') {
                            $('#disponibilita').html('<span>Username disponibile</span>');
                            $('#registrazione').attr("disabled",false);
                        }
                        else{
                            $('#disponibilita').html('<span>Username non disponibile</span>');
                            $('#registrazione').attr("disabled",true);
                        }
                    }
                })
            });
        });
    </script>
</html>