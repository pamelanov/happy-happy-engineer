<html>
	<head>
		
		<link href="js-image-slider.css" rel="stylesheet" type="text/css" />
		<script src="js-image-slider.js" type="text/javascript"></script>
		<link rel="stylesheet" href="home.css">
		<title>Home - Happy-Happy Engineering</title>
	<head>
	<body>
		<div id="menu">
			<ul>
			  <li><a href="default.asp">Home</a></li>
			  <li><a href="news.asp">News</a></li>
			  <li><a href="contact.asp">Contact</a></li>
			  <li><a href="about.asp">About</a></li>
			</ul>
		</div>
		
		<div id="sliderFrame">
			<div id="slider">
				<img src="images/image-slider-1.jpg" />
					</a>
					<img src="images/image-slider-2.jpg" alt="" />
					<img src="images/image-slider-3.jpg" alt="Pure Javascript. No jQuery. No flash." />
					<img src="images/image-slider-4.jpg" alt="#htmlcaption" />
					<img src="images/image-slider-5.jpg" />
					<?php echo $base_url; ?>
				</div>
			<div id="htmlcaption" style="display: none;">
				<em>HTML</em> caption. Link to <a href="http://www.google.com/">Google</a>.
			</div>
		</div>
	</body>
</html>