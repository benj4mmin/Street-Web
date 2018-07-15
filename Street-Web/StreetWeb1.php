<!DOCTYPE html>
<html>
	<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="StreetWebStyles/WebStyles1.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
		<!--
			Name: Street
		-->

		<script src="StreetWebScripts/NavScript.js"></script>

	<style>
		body {
			font-family: 'Lato', sans-serif;
		}


		.overlay {
		  height: 100%;
		  width: 0;
		  position: fixed;
		  z-index: 1;
		  left: 0;
		  top: 0;
		  background-color: rgb(0,0,0);
		  background-color: rgba(0,0,0, 0.9);
		  overflow-x: hidden;
		  transition: 0.5s;
		}

		.overlay-content {
		  position: relative;
		  top: 25%;
		  width: 100%;
		  text-align: center;
		  margin-top: 30px;
		}

		.overlay a {
		    color: #818181;
		    display: block;
		    padding: 8px;
		    text-decoration: none;
		    font-size: 18px;
		    transition: 0.3s;
		}

		.overlay a:hover, .overlay a:focus {
		    color: #f1f1f1;
		}

		.navbar a.active {
		    background-color: #4CAF50;
		    color: white;
		}

		.overlay .closebtn {
		  position: absolute;
		  top: 20px;
		  right: 45px;
		  font-size: 60px;
		}

	</style>

		<title>Ben Street Yurchison</title>

	</head>

	<header id="top" class="main-header"></header>

  <body>

		<!-- home screen ideas

			- big button thats also an icon for myself - once clicked pulls up a
			window that shows me or some pics. Could show pics of anything ive been
			a part of? Could also pull up some other cool graphics or video.

			 - side idea: have tools and stickers to play with like a user can open an
			 iphone keyboard with emojis and stickers. so like a mini blog page where
			 people can post on it. would need something users could use without
			 needing to dl anything. would obviously need form submission and a way
			 to save it on the page. but only on the big button click? for now a
			 placeholder and starting to make form and keyboard type input?

			 - make tables for music and game page? would probably look nicer but
			 cant look old school. overlay or nav bar/dropdown menu for lists of music
			 and games?

			 - page just for some gallery stuff?

			 - for resume/ business page build it to look like my linked in so its
			 readable on my site without the need to download.


		-->

		<!-- Include DB connection->


		<?php //include('StreetWebDB/database.php');?>

		<?php 
		
		/*$usersSQL = "SELECT * FROM `users`";
		$usersQuery = mysqli_query($connection, $usersSQL) or die('death');
		while($usersRow = mysqli_fetch_array($usersQuery)){
				echo $usersRow['id'];
				echo $usersRow['fullname'];
			}
		*/
		?>
		
		<!-- myNav overlay -->
			<div id="myNav" class="overlay">

		<!-- button - close overlay -->
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

		<!-- overlay content -->
			<div class="overlay-content">
				<a class="active" href="StreetWeb1.html">Home</a>
				<a href="StreetWebContents/WebAbout1/WebAbout1.html">About Me</a>
				<a href="StreetWebContents/WebBusiness1/WebBusiness1.html">Business</a>
				<a href="StreetWebContents/WebStreaming1/WebStreaming1.html">Streaming</a>
				<a href="StreetWebContents/WebMusic1/WebMusic1.html">Music</a>
				<a href="StreetWebContents/WebSports1/WebSports1.html">Sports</a>
				<a href="StreetWebContents/WebGaming1/WebGaming1.html">Gaming</a>
				<a href="StreetWebContents/WebPlayground1/WebPlayground1.html">Playground</a>
			</div>

		</div>

		<!-- open/show overlay nav -->
		<span style="font-size: 30px;cursor:pointer" onclick="openNav()">&#9776; Home</span>

<!--		<script>
			function openNav() {
			  document.getElementById("myNav").style.width = "25%";
			}

			function closeNav() {
			  document.getElementById("myNav").style.width = "0%";
			}
		</script>
			<!--
					bio info whatnot, about me? goals? business?
			-->
		<h1><a href="StreetWebContents/WebAbout1/WebAbout1.html">About Me</a></h1>

		<h1><a href="StreetWebContents/WebBusiness1/WebBusiness1.html"> Business </a></h1>

		<h1><a href="StreetWebContents/WebStreaming1/WebStreaming1.html"> Streaming </a></h1>

		<h1><a href="StreetWebContents/WebMusic1/WebMusic1.html"> Music </a></h1>

		<h1><a href="StreetWebContents/WebSports1/WebSports1.html"> Sports </a></h1>

		<h1><a href="StreetWebContents/WebGaming1/WebGaming1.html"> Gaming </a></h1>

		<h1><a href="StreetWebContents/WebPlayground1/WebPlayground1.html">Playground</a></h1>
		<br>
		<br>


    </body>
</html>
