<?php include('functions.php') ?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="home.css"> <!--for external styling-->
</head>


<div class="header">
<header>
  <h1>Realist Gamers</h1>

</div>

<nav class="topnav">
  <a href="index.php">Home</a>
  <a href="categories.php">Categories</a>
  <a href="trending.php">Trending Games</a>
  <a href="highestrated.php">Highest Rated Games</a>
  <a href="upcoming.php">Upcoming Games</a>
  <a href="aboutus.php">About Us</a>
</nav>


</header>

<body>
<div class="header">
		<h2>Home Page</h2>
	</div>
	
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		
		<div class="profile_info">
			<img src="/uploads/default.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #333;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		
		</div>
	
	</div>
<!-- MOTTO , moving bar-->
<br>

<div class ="motto"> <h2>Keeping it REAL</h2></div>

<!-- LOGIN LINK , SIGN UP LINK -->
<br>

<center>
<button class="button button2"><a href = "signup.php">Sign Up</a></button>
<button class="button button2"><a href = "login.php">Sign in</a></button>
</center>

<br>

<!--Slideshow Of Top Games -->

<div class="Projects">
  <div class="gallery">
    <a target="_blank" href="INSERT IMG LINK">
      <img src="INSERT IMG" alt="INSERT GAME NAME" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>


<div class="python">
  <div class="gallery">
    <a target="_blank" href="INSERT IMG LINK">
      <img src="INSERT IMG" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="Java">
  <div class="gallery">
    <a target="_blank" href="INSERT IMG LINK">
      <img src="INSERT IMG" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="IoT">
  <div class="gallery">
    <a target="_blank" href="INSERT IMG LINK">
      <img src="INSERT IMG" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="clearfix"></div>

<br> 

<!-- Article Section -->

<br>

</br>


</body>
</html>
