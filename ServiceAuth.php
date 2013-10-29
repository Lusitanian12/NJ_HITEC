<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<link rel = "stylesheet" type="text/css" href="form_style.css" >
	<script type="text/Javascript"> 
</script>
</head>
<body>
<div id="Main_content">

<form id="SignIn" action="logIn.php" method="post"  >



	<div id="Left_column">

  

		<ol>



		<li>

		<label for="npi">NPI</label> 



		<input  type="number" name="npi" autofocus id="npi" maxlength="10" required="required" pattern="^[0-9]{10}$" />	

		</li>

		

		<li>

		<label for="taxId">Practice Tax ID</label> 



		<input  type="number" name="taxId" id="taxId" maxlength="9" required="required" pattern="^[0-9]{9}$" />	

		</li>

		<br>
		<span id="alert">The NPI or Practice Tax ID you entered is incorrect. Please try again.</span>
		

		<br><br>

		

		<input type= "submit" id="log_in" value="SIGN IN" />

		

		<br><br>

		</ol>

	

	</div>



</form>

	



	<div id="Right_column">

		

		New member &nbsp; &nbsp; <a href="form.php">Register here</a>

	</div>



</div>

</body>



</html>
