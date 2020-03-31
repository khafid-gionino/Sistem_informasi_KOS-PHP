
<!DOCTYPE html>
<html>
   <head>
    <title>Login admin</title>
    <style>
	body{
		background: url('img/1215.jpg');
		background-color: #cccccc; /* Used if the image is unavailable */
		height: 557px; /* You must set a specified height */
		background-position: center; /* Center the image */
		background-repeat: no-repeat; /* Do not repeat the image */
		background-size: cover; /* Resize the background image to cover the entire container */
	}

	.tulisan_login{
		font-family:"Lucida Sans";
		text-align: center;
		font-size: 15pt;
		
	}

	.kotak_login{
		width: 350px;	
		background: white;
		margin: 100px auto;
		padding: 20px 20px;
	}

	label{
		font-size: 11pt;
	}

	.form_login{
		/*membuat lebar form penuh*/
		box-sizing : border-box;
		width: 100%;
		padding: 10px;
		font-size: 11pt;
		margin-bottom: 20px;
	}

	.tombol_login{
		background: #46de4b;
		color: white;
		font-size: 11pt;
		width: 100%;
		border: none;
		border-radius: 3px;
		padding: 10px 20px;
	}

	.tombol_login:hover{
		background: salmon;
		color: white;
		font-size: 11pt;
		width: 100%;
		border: none;
		border-radius: 3px;
		padding: 10px 20px;
	}
	
	</style>
</head>
<body>
 	<div class="kotak_login">
   	<p class="tulisan_login">Login Dulu Bro !!</p>
   	
    <form method="POST" action="login.php">
        Username : <input type="username" name="username" class="form_login" autofocus placeholder="Username" autocomplete="off"><br>
        Password : <input type="password" name="password" class="form_login" placeholder="Password" autocomplete="off"><br>
        	
        <center>
			<input type="submit" name="submit" value="Masuk" class="tombol_login">
        </center>
    </form>
	</div>
</body>
</html>