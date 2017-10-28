<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Logowanie</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
  <script type="text/javascript">
	function logowanie(formularz)
	{
		if (formularz.login.value == "" || formularz.pass.value == "")
		{
			alert("Wypełniono niepoprawnie formularz");
			
			if (formularz.login.value == "")
				formularz.login.style.boxShadow="0 0 40px 7px red";
			else formularz.login.style = window.getComputedStyle(login, null);
			
			if (formularz.pass.value == "")
				formularz.pass.style.boxShadow="0 0 40px 7px red";
			else formularz.pass.style = window.getComputedStyle(pass, null);
		}
		else
			formularz.submit();
	}
	
  </script>
</head>
<body>
	<div id="powrot"><a href="../index.html">&lt; Powrót</a></div>
	<div id="formularz">
		<form action="zaloguj.php" method="POST">
			<input type="text" name="login" placeholder="LOGIN" id="login" /></br>
			<input type="password" name="pass" placeholder="HASŁO" id="pass"/></br> 
			<input type="button" value="ZALOGUJ" OnClick="logowanie(this.form)" />
			<input type="reset" value="RESET" />
			<label><input type="checkbox" name="zapamietaj">Zapamiętaj hasło</label>
		</form>
	</div>
</body>
</html>  