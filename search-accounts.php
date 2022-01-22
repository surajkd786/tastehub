<?php
session_start() ;
if((! isset( $_SESSION['loggedin'])) or $_SESSION['isAdmin'] == 0)
{
	header('Location:fail.php');
}	
?>
<!DOCTYPE html>
<html>
	
	<head>
		 <meta charset="UTF-8">
		<meta name="description" content="A virtual cookbook that allows user's to view, create and share recipes.">
		<meta name="keywords" content="recipe, cookbook, food, ingredients">
		<meta name="author" content="TasteHub Inc.">
		<link rel="stylesheet" type="text/css" href="page_style.css">
		<link href='http://fonts.googleapis.com/css?family=Tangerine:700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=IM+Fell+Double+Pica' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
		
		<div class="background-image"></div>
		
		<div class="navigation-bar">
			<?php include 'check-menu.php'?>
		</div>
		
		<div class="content">
			<h1>Search For Account</h1>
			<!--<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
			<form method="post" action="search-accounts-results.php"> 
				<h3>Search by email</h3>
				<input type="text" name="email" required>
				<br><br>
				<input type="submit" name="submit" value="Submit"> 
				</form>
		</div>
		
		<div class="footer"><p>&#169; TasteHub, 2021. All Rights Reserved.</p></div>
		<script type="text/javascript">
			function goBack()
			{
				window.history.back();
			}
		</script>
	</body>
</html>