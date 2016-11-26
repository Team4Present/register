<?php
if (isset($_POST ['username']) && !empty ($_POST ['username'])){
$user = $_POST ['username'];
if (preg_match ("/^(\w|\s){1,20}$/", $user)){
	if (preg_match ("/fuck|fck|noob|default|steve|herobrine|Team4|szar|fuck|FUCK|NOOB|Defa|isten|Isten|god|God|riot|Riot|TeamCraft|Craft/", $user)){
	$user = preg_replace ("(fuck|fck|noob|default|steve|herobrine|Team4|Szar|Fuck|FUCK|NOOB|Defa|isten|Isten|god|God|riot|Riot|TeamCraft|Craft)", "<b>*---*</b>", $user);
	?>
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Weboldal</title>
	<link href="animate.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	<div class="item1 animated slideInUp">
	<style>
	.item {
	color: white;
	height: 0;
	margin: 0;
	padding:0;
	}
	.btn {
	background-color: white;
	}
	.textbox {
	padding: 0;
	}
	</style>
	<?php
	echo "Helytelen karakter/ek szerepelnek a felhasználónevedben:<br />";
	echo "Ezt <b>*---*</b> -vel jelöltük. <br />";
	echo "<p class='black'>". $user. "</p>";
	echo "Kérlek próbáld újra.";
	echo "<form action='index.html' method='POST'>";
	echo "<input type='submit' class='Button' value='Vissza'>";
	echo "</form>";
	}else {
		?>
		<html>
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Weboldal</title>
		<link href="animate.css" rel="stylesheet" type="text/css" />
		</head>
		<body>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
			<script>
			$('#Username').addClass('slideOutLeft');
			</script>
			<div class="item1 animated slideInUp">
			<style>
				.item {
				color: white;
				height: 0;
				margin: 0;
				padding:0;
				}
				.btn {
				background-color: white;
				}
				.textbox {
				padding: 0;
				}
				
			</style>
		<form action="index.php" method="POST">
		Sikeresen kiválasztottad a felhasználónevedet!
		<h4>Kérlek add meg a jelszavad:</h4><br />
		<input type="password" name="pass" />
		<input type="submit" value="Tovább" />
		</form>
		</div>
		</body>
		</html>
		<?php
	}
}else {
	echo 'FALSE';
}
}
?>