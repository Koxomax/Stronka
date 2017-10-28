<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Rejestracja</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
  
  <script type="text/javascript">
	function rejestracja(formularz)
	{
		if (formularz.login.value == "" || formularz.pass.value == "" || formularz.ppass.value == "" || formularz.pass.value !=formularz.ppass.value || formularz.email.value == "")
		{
			alert("Wypełniono niepoprawnie formularz");
			
			if (formularz.login.value == "")
				formularz.login.style.boxShadow="0 0 40px 7px red";
			else formularz.login.style = window.getComputedStyle(login, null);
			
			if (formularz.pass.value == "" || formularz.ppass.value == "" || formularz.pass.value != formularz.ppass.value)
			{
				formularz.pass.style.boxShadow="0 0 40px 7px red";
				formularz.ppass.style.boxShadow="0 0 40px 7px red";
			}
			else
			{
				formularz.pass.style = window.getComputedStyle(pass, null);
				formularz.ppass.style = window.getComputedStyle(ppass, null);
			}
			
			if (formularz.email.value == "")
				formularz.email.style.boxShadow="0 0 40px 7px red";
			else formularz.email.style = window.getComputedStyle(email, null);
		}
		else
			formularz.submit();
	}
	
  </script>
</head>
<body>
	<div id="powrot"><a href="../index.html">&lt; Powrót</a></div>
	<div id="formularz">
		<form action="zarejestruj.php" method="POST">
			<input type="text" name="login" placeholder="LOGIN" id="login" /><br />
			<input type="password" name="pass" placeholder="HASŁO" id="pass"/><br />
			<input type="password" name="ppass" placeholder="POWTÓRZ HASŁO" id="ppass"/><br />
			<input type="text" name="email" placeholder="EMAIL" id="email"/><br />
			<input type="button" value="ZAREJESTRUJ" OnClick="rejestracja(this.form)" />
			<input type="reset" value="RESET" />
		</form>
	</div>
</body>
</html>  