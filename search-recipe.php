<?php
session_start() ;
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
		
        <script src="search-handler.js" type="text/javascript"></script>
		<title>Search Recipe</title>
	</head>
	
	<body>
		
		<img class="background-image" src="images/delicious-pizza-food-1440x900.jpg" height="700"/>

		<div class="navigation-bar">
			<?php include 'check-menu.php'?>
		</div>
		
		
		<div class="content">
			<h1 class="center">Search Recipe</h1>
			<form action="recipe-search-results.php" method="post">
				<table class="tableform">
					<tr>
						<td><br/><h3>Search by title: </h3></td>
						<td colspan="3"><br/><input size="50" type="text" name="title"></td>
					</tr>
					<tr>
						<td><br/></td>
						<td><br/><input type="submit" name="submit" value="Search Title"></td>
					</tr>
					<tr>
						<td><br/><br/></td>
					</tr>
					<tr class="content-table-row">
						<td class="content-table-left"><h3>Ingredients:</h3></td>
						<td class="content-table-right">
							<table class="content-table-ingredients-table">
								<tr class="ingredient">
									<td class="content-table-ingredients-table-left">Ingredient:</td>
									<td class="content-table-ingredients-table-right">
										<input type="text" name="ingredient[]"   placeholder="Enter Ingredient Here"></td>
								</tr>
							</table>
							<div >
								<a href="javascript:void(0);" onclick="addIngredientField();">+ Add More Ingredients</a></div>
						</td>
					</tr>
				<tr>
					<td><br/></td>
					<td>
						<br/><input type="submit" name="submit" value="Search Ingredients">
					</td>
				</tr>
			</table>
				<table class="tableform">
					<tr>
						<td><br/><br/></td>
					</tr>
					<tr>
						<td> <h3>Browse tags:</h3></td>
					</tr>
					<tr>
						<td><br/></td>
						<td><input type="checkbox" name="tags[]" value="Appetizer">Appetizer<br/></td>
						<td><input type="checkbox" name="tags[]" value="Paleo">Paleo<br/></td>
						<td><input type="checkbox" name="tags[]" value="American">American<br/></td>
					</tr>
					<tr>
						<td><br/></td>
						<td><input type="checkbox" name="tags[]" value="Beef">Beef<br/></td>
						<td><input type="checkbox" name="tags[]" value="Pork">Pork<br/></td>
						<td><input type="checkbox" name="tags[]" value="Asian">Asian<br/></td>
					</tr>
					<tr>
						<td><br/></td>
						<td><input type="checkbox" name="tags[]" value="Beverages">Beverages<br/></td>
						<td><input type="checkbox" name="tags[]" value="Poultry">Poultry<br/></td>
						<td><input type="checkbox" name="tags[]" value="Desi">Desi<br/></td>
					</tr>
					<tr>
						<td><br/></td>
						<td><input type="checkbox" name="tags[]" value="Breakfast/brunch">Breakfast<br/></td>
						<td><input type="checkbox" name="tags[]" value="Salad">Salad<br/></td>
						<td><input type="checkbox" name="tags[]" value="Greek">Greek<br/></td>
					</tr>
					<tr>
						<td><br/></td>
						<td><input type="checkbox" name="tags[]" value="Chicken">Chicken<br/></td>
						<td><input type="checkbox" name="tags[]" value="Seafood">Seafood<br/></td>
						<td><input type="checkbox" name="tags[]" value="Italian">Italian<br/></td>
					</tr>
					<tr>
						<td><br/></td>
						<td><input type="checkbox" name="tags[]" value="Desserts">Desserts<br/></td>
						<td><input type="checkbox" name="tags[]" value="Soup">Soup<br/></td>
						<td><input type="checkbox" name="tags[]" value="Jamaican">Jamaican<br/></td>
					</tr>
					<tr>
						<td><br/></td>
						<td><input type="checkbox" name="tags[]" value="Gluten-free">Gluten-free<br/></td>
						<td><input type="checkbox" name="tags[]" value="Vegan">Vegan<br/></td>
						<td><input type="checkbox" name="tags[]" value="Latin">Latin<br/></td>

					</tr>
					<tr>
						<td><br/></td>
						<td><input type="checkbox" name="tags[]" value="Lunch">Lunch<br/></td>
						<td><input type="checkbox" name="tags[]" value="Vegetarian">Vegetarian<br/></td>
					</tr>
					<br/>
					<tr>
  					<td><br/></td>
  					<td><br/><br/><input type="submit" name="submit" value="Browse"></td>
  				</tr>
			</table>
			</form>
		</div>
		
		<div class="footer"><p>&#169; TasteHub, 2021. All Rights Reserved.</p></div>
		
	</body>
</html>
