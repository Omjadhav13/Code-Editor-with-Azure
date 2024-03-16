<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn CSS</title>

    <link rel="stylesheet" href="css/index.css">
</head>
<body>
	<div class="nav">
		<nav class="navigation">
			<div class="logo-section">
				<a href="index.php"><img class="logo" src="images/kode-logo.svg" alt="Ed code Logo" /></a>
			</div>

			<div class="navigation-section">
				<ul class="nav-elements">
					<li><a href="index.php">Home</a></li>
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

	<div class="content">
		<h1 class="hg1">CSS Introduction</h1>

		<p class="para">CSS is the language we use to style a Web page.</p>

		<h2 class="hg2">What is CSS?</h2>

		<ul class="content-list">
			<li>CSS stands for Cascading Style Sheets</li>
			<li>CSS describes how HTML elements are to be displayed on screen, paper, or in other media</li>
			<li>CSS saves a lot of work. It can control the layout of multiple web pages all at once</li>
			<li>External stylesheets are stored in CSS files</li>
		</ul>

		<h2 class="hg2">Why Use CSS?</h2>

		<p class="para"><b>CSS Example</b></p>

		<div class="code">
			<p class="para">
				body {<br>
				background-color: lightblue;<br>
				} <br>

				h1 {<br>
				color: white;<br>
				text-align: center;<br>
				}<br>

				p {<br>
				font-family: verdana;<br>
				font-size: 20px;<br>
				}<br>
			</p>
		</div>

		<h2 class="hg2">CSS Solved a Big Problem</h2>

		<ul class="content-list">
			<li>HTML was NEVER intended to contain tags for formatting a web page!</li>
			<li>HTML was created to describe the content of a web page, like:<br>&lt;h1&gt;This is a heading&lt;/h1&gt;<br>&lt;p&gt;This is a paragraph.&lt;/p&gt;</li>
			<li>When tags like &lt;font&gt;, and color attributes were added to the HTML 3.2 specification, it started a nightmare for web developers. Development of large websites, where fonts and color information were added to every single page, became a long and expensive process.</li>
			<li>To solve this problem, the World Wide Web Consortium (W3C) created CSS.</li>
			<li>CSS removed the style formatting from the HTML page!</li>
		</ul>

		<h2 class="hg2">CSS Saves a Lot of Work!</h2>

		<p class="para">The style definitions are normally saved in external .css files.<br>With an external stylesheet file, you can change the look of an entire website by changing just one file!</p>
	</div>

	<div class="footer-section">
		<p>Copyright 2022 by Kode. All rights reserved.</p>
	</div>
</body>
</html>