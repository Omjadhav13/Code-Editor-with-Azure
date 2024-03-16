<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Code Editor</title>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ace.js"></script>

	<link rel="stylesheet" href="css/CodeEditor.css" />
</head>

<body>
	<div class="upper-nav">
		<nav class="navigation">
			<div class="logo-section">
				<a href="index.php">
					<img class="logo" src="images/kode-logo.svg" alt="Kode code Logo" />
				</a>
			</div>

			<div class="navigation-section">
				<ul class="nav-elements">
					<li class="layout">
						<button class="layout-btn">
							Layout<img class="layout-arrow" src="images/down-arrow.svg" />
						</button>
						<div class="layout-list">
							<a class="l-output selected" onclick="
							document.getElementsByClassName('code-area')[0].classList.remove('row-reverse')
							document.getElementsByClassName('l-output selected')[0].classList.remove('selected')
							document.getElementsByClassName('l-output')[0].classList.add('selected')
							">
								<img src="images/right-output.svg" class="r-output" />
							</a>
							<a class="l-output" onclick="
							document.getElementsByClassName('code-area')[0].classList.add('row-reverse')
							document.getElementsByClassName('l-output selected')[0].classList.remove('selected')
							document.getElementsByClassName('l-output')[1].classList.add('selected')
							">
								<img src="images/left-output.svg" class="l-output" />
							</a>
						</div>
					</li>

					<li><a href="index.php" target="_self">Home</a></li>

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

	<div class="code-area">
		<div class="code-input">
			<div class="html-label">
				<p>HTML</p>
			</div>
			<textarea name="html" id="htmlcode"></textarea>
			<div class="css-label">
				<p>CSS</p>
			</div>
			<textarea name="css" id="csscode"></textarea>
			<div class="js-label">
				<p>JS</p>
			</div>
			<textarea name="js" id="jscode"></textarea>
		</div>

		<div class="code-output">
			<iframe id="output"></iframe>

			<div class="console-div">
				<div class="console-nav">
					<p>Console</p>
					<img src="images/cross.svg" class="console-close-btn" onclick="consoleClose()" />
				</div>

				<div id="console">
					<p class="console-message"></p>
				</div>
			</div>
		</div>
	</div>

	<div class="lower-nav">
		<button class="open-in-new-window" onclick="newOutputWindow()">
			Open output in new window
		</button>
		<button class="run-btn" onclick="runOutput()">Run</button>
	</div>

	<script type="text/Javascript" src="js/CodeEditor.js"></script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/highlight.min.js"></script>
	<script>
		hljs.highlightAll();
	</script>
</body>

</html>