<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Kode</title>
	<link rel="stylesheet" href="css/index.css" />
</head>

<body>
	<div class="nav">
		<nav class="navigation">
			<div class="logo-section">
				<a href="index.php"><img class="logo" src="images/kode-logo.svg" alt="Ed code Logo" /></a>
			</div>

			<div class="navigation-section">
				<ul class="nav-elements">
					<li class="ddl">
						<button class="ddlbtn">
							Tutorial<img class="ddl-arrow" src="images/down-arrow.svg" />
						</button>
						<div class="ddl-list">
							<a href="learnhtml.php">Learn HTML</a>
							<a href="learncss.php">Learn CSS</a>
							<a href="learnjs.php">Learn JS</a>
							<a href="HtmlReference.php">HTML Reference</a>
							<a href="CssReference.php">CSS Reference</a>
							<a href="JsReference.php">JS Reference</a>
						</div>
					</li>

					<li><a href="CodeEditor.php">Code Editor</a></li>

					<li>
						<?php
						if (isset($_COOKIE["email"])) {
							echo '<span>Logged in as ';
							echo $_COOKIE["email"];
							echo '. <a style="color: white;" href="Logout.php">Log out</a>';
							echo '</span>';
						} else {
							echo '<a href="Login.html">Log in</a>';
						}
						?>
					</li>
				</ul>
			</div>
		</nav>
	</div>

	<div class="hero-section">
		<img class="hero-img" src="images/Hero-img.png" alt="" />
		<h1 class="title">The best place to learn, practice and test front-end code</h1>
		<p class="subtitle">
			kode is a code editor to learn and practice html, css and javascript
		</p>
		<a href="CodeEditor.php"><button class="cta-btn">Go to code editor</button></a>
	</div>

	<div class="learning-section">
		<h2>Learn to code</h2>

		<div class="cards-section">
			<div class="html-card cards">
				<h3>HTML</h3>
				<p>The language for building web pages</p>
				<a href="learnhtml.php"><button class="learn-html-btn">Learn HTML</button></a><br />
				<a href="HtmlReference.php"><button class="html-ref-btn">HTML References</button></a>
			</div>

			<div class="css-card cards">
				<h3>CSS</h3>
				<p>The language for styling web pages</p>
				<a href="learncss.php"><button class="learn-css-btn">Learn CSS</button></a><br />
				<a href="CssReference.php"><button class="css-ref-btn">CSS References</button></a>
			</div>

			<div class="js-card cards">
				<h3>JS</h3>
				<p>The language for programming web pages</p>
				<a href="learnjs.php"><button class="learn-js-btn">Learn JS</button></a><br />
				<a href="JsReference.php"><button class="js-ref-btn">JS References</button></a>
			</div>
		</div>
	</div>

	<div class="display-section">
		<h2>Code Editor</h2>

		<div class="cd-display">
			<div class="iframe">
				<iframe src="CodeEditor.php" id="dis" frameborder="0"></iframe>
			</div>
		</div>

		<a href="CodeEditor.php"><button class="open-cd-btn">Open code editor</button></a>
	</div>

	<div class="features-section">
		<h2>Features</h2>

		<div class="features">
			<ul class="left-features-list outer-ul">
				<li>Easier to read and write code.</li>
				<ul class="inner-ul">
					<li>Seperate textboxes for html,css and js helps to write cleaner code.</li>
				</ul>
				<li>Syntax highlighting</li>
				<ul class="inner-ul">
					<li>Highlights keywords to make it easier to read and write code.</li>
				</ul>
				<li>Change layout</li>
				<ul class="inner-ul">
					<li>Change layout according to your wish.</li>
				</ul>
			</ul>
			<ul class="right-features-list outer-ul">
				<li>Get Full Screen view</li>
				<ul class="inner-ul">
					<li>Get Fullscreen view of output.</li>
				</ul>
				<li>Indentation and Brace matching</li>
				<ul class="inner-ul">
					<li>Indents blocks and matches braces to make it easier to read code.</li>
				</ul>
				<li>Preview window</li>
				<ul class="inner-ul">
					<li>See live output of your code</li>
				</ul>
			</ul>
		</div> 	
	</div>

	<div class="footer-section">
		<p>Copyright 2022 by Kode. All rights reserved.</p>
	</div>
</body>

</html>