<?php

    @require 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>HTML Reference</title>

	<link rel="stylesheet" href="css/HtmlReference.css" />
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
	<div class="ref-table">
		<?php
            
            $select = mysqli_query($con, "SELECT * FROM htmlref");

        ?>
		
		<table class="html-ref">
		<caption class="cap">Html Reference</caption>
			<thead>
				<tr>
					<th>Tag</th>
					<th>Description</th>
				</tr>
			</thead>

			<?php
                    
                while($row = mysqli_fetch_assoc($select)){
                    
            ?>

			<tr>
				<td>&lt;<?php echo $row['tag']; ?>&gt;</td>
				<td><?php echo $row['description']; ?></td>
			</tr>

        	<?php }; ?>

		</table>
	</div>

	<div class="footer-section">
		<p>Copyright 2022 by Kode. All rights reserved.</p>
	</div>
</body>

</html>