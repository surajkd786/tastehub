<?php 
	//if a user has logged in
	if(isset($_SESSION['loggedin']))
	{
		//if admin, display admin menu
		if ($_SESSION['isAdmin']==1) 
		{
			print 
				'<table  class="navigation-bar-table">
					<tr>
						<td class="navigation-bar-table-left"><a href="index-1.php" style="text-decoration: none"><h1 class="navigation-bar-table-left-header">Tastehub</h1></a></td>
						<td class="navigation-bar-table-right">
							<ul class="upper-level-ul">
								<li>Search
									<ul>
										<li><a href="search-recipe.php">Search Recipe</a></li>
										<li><a href="search-cookbook.php">Search Cookbook</a></li>
										<li><a href="search-accounts.php">Search Accounts</a></li>
									</ul>
								</li>
								
								<li>Recipe
									<ul>
										<li><a href="create-recipe.php">Create Recipe</a></li>
										<li><a href="my-recipes.php">View myRecipes</a></li>
										<li><a href="view-flags.php">View Flags</a></li>
									</ul>
								</li>
								
								<li>Cookbook
									<ul>
										<li><a href="create-cookbook.php">Create Cookbook</a></li>
										<li><a href="my-cookbooks.php">View myCookbooks</a></li>
									</ul>
								</li>
								
								<li>'. $_SESSION['username']. '
									<ul>
										<li><a href="account-info.php">Account Info</a></li>
										<li><a href="view-accounts.php">View All Accounts</a></li>
										<li><a href="delete-user.php">Delete User</a></li>
										<li><a id="logout" href="logout.php">Log Out</a></li>
									</ul>
								</li>
							</ul>
						</td>
					</tr>
				</table>';
		}
		else if ($_SESSION['isAdmin']==0)	//not an admin, display registered menu
		{
			print 
				'<table  class="navigation-bar-table">
					<tr>
						<td class="navigation-bar-table-left"><a href="index-1.php" style="text-decoration: none"><h1 class="navigation-bar-table-left-header">TasteHub</h1></a></td>
						<td class="navigation-bar-table-right">
						<ul class="upper-level-ul">
	              			<li>Search
	                			<ul>
									<li><a href="search-recipe.php">Search Recipe</a></li>
									<li><a href="search-cookbook.php">Search Cookbook</a></li>
	                			</ul>
	              			</li>
	              
	              			<li>Recipe
	                			<ul>
									<li><a href="create-recipe.php">Create Recipe</a></li>
									<li><a href="my-recipes.php">View myRecipes</a></li>
								</ul>
	              			</li>
	              
	              			<li>Cookbook
	                			<ul>
	                  				<li><a href="create-cookbook.php">Create Cookbook</a></li>
	                  				<li><a href="my-cookbooks.php">View myCookbooks</a></li>
	                			</ul>
	              			</li>
	              
	              			<li>'. $_SESSION['username']. '
	                			<ul>
	                  				<li><a href="account-info.php">Account Info</a></li>
	                  				<li><a id="logout" href="logout.php">Log Out</a></li>
	                			</ul>
	              			</li>
	           			</ul>
	           		</td>
				</tr>
			</table>';
		}
	}
	else			//not logged in, display guest menu
	{	
		print '<table  class="navigation-bar-table">
				<tr>
					<td class="navigation-bar-table-left"><a href="index-1.php" style="text-decoration: none"><h1 class="navigation-bar-table-left-header">Cookbook Network</h1></a></td>
                        
					<td class="navigation-bar-table-right">
						<ul class="upper-level-ul">		
							<li><a href="search-recipe.php">Search Recipe</a></li>
							<li><a href="search-cookbook.php">Search Cookbook</a></li>
							<li><a href="login.php">Log In</a></li>
							<li><a href="sign-up.php">Sign Up</a></li>
								
							
						</ul>
						
					</td>
				</tr>
			</table>';
	}
?>

