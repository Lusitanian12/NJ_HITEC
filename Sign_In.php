<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<link rel = "stylesheet" type="text/css" href="style.css" >
	<script type="text/Javascript"> 
</script>
</head>

<body>

<div id="main">
<form id="SignIn" action="logIn.php" method="post"  >

	<div id="left_column">
  
		<ol>

		<li>
		<label for="npi">NPI</label> 

		<input  type="number" name="npi" autofocus id="npi" maxlength="10" required="required" />	
		</li>
		
		<li>
		<label for="taxId">Practice Tax ID</label> 

		<input  type="number" name="taxId" id="taxId" maxlength="9" required="required" />	
		</li>
		
		<br>
		
		<input type= "submit" id="log_in" value="SIGN IN" />
		
		<br><br>
		</ol>
	
	</div>

</form>
	

	<div id="right_column">
		
		New member &nbsp; &nbsp; <a href="form.html">Register here</a>
	</div>

</div>
</body>

</html>