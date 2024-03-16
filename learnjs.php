<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn JS</title>

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
		<h1 class="hg1">JS Introduction</h1>

		<p class="para">This page contains some examples of what JavaScript can do.</p>

		<h2 class="hg2">JavaScript Can Change HTML Content</h2>

		<ul class="content-list">
			<li>One of many JavaScript HTML methods is getElementById().<br><br>The example below "finds" an HTML element (with id="demo"), and changes the element content (innerHTML) to "Hello JavaScript":</li>
		</ul>

		<p class="para"><b>Example</b></p>

		<div class="code">
			<p class="para">
			document.getElementById("demo").innerHTML = "Hello JavaScript";
			</p>
		</div>

		<ul class="content-list">
			<li>JavaScript accepts both double and single quotes:</li>
		</ul>

		<div class="code">
			<p class="para">
			document.getElementById('demo').innerHTML = 'Hello JavaScript';
			</p>
		</div>

		<h2 class="hg2">JavaScript Can Change HTML Styles (CSS)</h2>

		<ul class="content-list">
			<li>Changing the style of an HTML element, is a variant of changing an HTML attribute:</li>
		</ul>

		<p class="para"><b>Example</b></p>

		<div class="code">
			<p class="para">
			document.getElementById("demo").style.fontSize = "35px";
			</p>
		</div>

		<h2 class="hg2">JavaScript Can Hide HTML Elements</h2>

		<ul class="content-list">
			<li>Hiding HTML elements can be done by changing the display style:</li>
		</ul>

		<p class="para"><b>Example</b></p>

		<div class="code">
			<p class="para">
			document.getElementById("demo").style.display = "none";
			</p>
		</div>

		<h2 class="hg2">JavaScript Can Show HTML Elements</h2>

		<ul class="content-list">
			<li>Showing hidden HTML elements can also be done by changing the display style:</li>
		</ul>

		<p class="para"><b>Example</b></p>

		<div class="code">
			<p class="para">
			document.getElementById("demo").style.display = "block";
			</p>
		</div>
	</div>

	<div class="footer-section">
		<p>Copyright 2022 by Kode. All rights reserved.</p>
	</div>
</body>
</html>