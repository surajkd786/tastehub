<!DOCTYPE html>
<?php
    session_start();

    $loggedIn = FALSE;

    if (isset($_SESSION['userid']))
    {
        $loggedIn = TRUE;
    }
?>

<html>
	
	<head>
		 <meta charset="UTF-8">
		<meta name="description" content="A virtual cookbook that allows user's to view, create and share recipes.">
		<meta name="keywords" content="recipe, cookbook, food, ingredients">
		<meta name="author" content="TasteHub Inc.">
		<link rel="stylesheet" type="text/css" href="index_style-1.css">
		<link href='http://fonts.googleapis.com/css?family=Tangerine:700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=IM+Fell+Double+Pica' rel='stylesheet' type='text/css'>
		
		<script type="text/javascript">
			var image1 = new Image()
			image1.src = "images/Pizza-Food-Delicious-1440x2560.jpg"
			var image2 = new Image()
			image2.src = "images/delicious-pizza-food-1440x900.jpg"
			var image3 = new Image()
			image3.src = "images/food_spaghetti_1920x1080_wallp_2560x1440_miscellaneoushi.com_.jpg"
			var image4 = new Image()
			image4.src = "images/Hot-and-Delicious-Food-Photos.jpg"
			var image5 = new Image()
			image5.src = "images/Food-Delicious-Pizza-Olives-Olives-1440x2560.jpg"
			var image6 = new Image()
			image6.src = "images/loaf-delicious-cake-with-strawberries-wallpapers-1440x900.jpg"
		</script>
		
	</head>
	
	<body>
		
		<p><img src="images/Pizza-Food-Delicious-1440x2560.jpg" name="slide" class="slideshow"/></p>
		
		<div class="full-body">
			
			<div class="content-transparent">
			<div class="content">
				<table class="content-table">
					<tr>
						<td rowspan="2" class="content-table-left"><h1 class="content-table-left-header">TasteHub</h1></td>
						<td class="content-table-right">
                        <?php
                            if (!$loggedIn)
                            {
                                print('<a href="login.php" class="content-table-right-link"><div>Log In</div></a>&nbsp;');
                                print('<a href="sign-up.php"  class="content-table-right-link"><div>Register</div></a>');
                            }
                        ?>
						</td>
					</tr>
					<tr>
						<td class="content-table-right">
							<a href="search-recipe.php"  class="content-table-right-link"><div>Search Recipe</div></a>
							<a href="search-cookbook.php"  class="content-table-right-link"><div>Search Cookbook</div></a>
						</td>
					</tr>
					<tr >
						<td class="content-table-left">&#169; TasteHub, 2021. All Rights Reserved.</td>
						<td class="content-table-right"><i>Find, create, and share <u>millions</u> of recipes!</i></td>
					</tr>
				</table>
			</div>
			</div>
			
		</div>
		
		<!-- Slide Show -->
		<script type="text/javascript">
			var step=1;
			function slideit()
			{
				document.images.slide.src = eval("image"+step+".src");
				if(step<6)
					step++;
				else
					step=1;
				setTimeout("slideit()", 3000);
			}
			slideit();
		</script>
		
	</body>
</html>