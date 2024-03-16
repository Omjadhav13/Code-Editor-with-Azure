<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn HTML</title>

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
		<h1 class="hg1">HTML Introduction</h1>

		<p class="para">HTML is the standard markup language for creating Web pages.</p>

		<h2 class="hg2">What is HTML?</h2>

		<ul class="content-list">
			<li>HTML stands for Hyper Text Markup Language</li>
			<li>HTML is the standard markup language for creating Web pages</li>
			<li>HTML describes the structure of a Web page</li>
			<li>HTML consists of a series of elements</li>
			<li>HTML elements tell the browser how to display the content</li>
			<li>HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc.</li>
		</ul>

		<h2 class="hg2">A Simple HTML Document</h2>

		<div class="code">
			<p class="para">
				&lt;!DOCTYPE html&gt;<br>
				&lt;html&gt;<br>
				&lt;head&gt;<br>
				&lt;title&gt;Page Title&lt;/title&gt;<br>
				&lt;/head&gt;<br>
				&lt;body&gt;<br>

				&lt;h1&gt;My First Heading&lt;/h1&gt;<br>
				&lt;p&gt;My first paragraph.&lt;/p&gt;<br>

				&lt;/body&gt;<br>
				&lt;/html&gt;<br>
			</p>
		</div>

		<p class="para"><b>Example explained:</b></p>

		<ul class="content-list">
			<li>The &lt;!DOCTYPE html&gt; declaration defines that this document is an HTML5 document</li>
			<li>The &lt;html&gt; element is the root element of an HTML page</li>
			<li>The &lt;head&gt; element contains meta information about the HTML page</li>
			<li>The &lt;title&gt; element specifies a title for the HTML page (which is shown in the browser's title bar or in the page's tab)</li>
			<li>The &lt;body&gt; element defines the document's body, and is a container for all the visible contents, such as headings, paragraphs, images, hyperlinks, tables, lists, etc.</li>
			<li>The &lt;h1&gt; element defines a large heading</li>
			<li>The &lt;p&gt; element defines a paragraph
</li>
		</ul>

		<h2 class="hg2">What is an HTML Element?</h2>

		<p class="para">An HTML element is defined by a start tag, some content, and an end tag.</p>
	</div>

	<div class="footer-section">
		<p>Copyright 2022 by Kode. All rights reserved.</p>
	</div>
</body>
</html>