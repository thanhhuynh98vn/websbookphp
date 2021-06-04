<?php
	include("connect/ket_noi.php");
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<title>HUMG BOOKSTORE</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script src="js/js.js" type="text/javascript"></script>
	<meta charset="utf8">
</head>
<body>
	<div id="warpper">
		<div id="header">
			<?php
				include('view/slogan.php');
				include('view/banner.php');
			?>
		</div>
		<div id="body">
			<?php
				include('view/quang_cao.php');
				include('view/event.php');
				include('controls/dieu_huong.php');
			?>

		</div>
		<div id="footer">
			<?php
				include('view/footer.php');
			?>
		</div>
	</div>
</body>
</html>