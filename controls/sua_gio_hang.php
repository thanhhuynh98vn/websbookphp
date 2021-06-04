<?php 
	session_start();
	foreach ($_SESSION['giohang'] as $idSach => $sl) {
		# code...
		if($_GET['sl'.$idSach] < 1){
			unset($_SESSION['giohang'][$idSach]);
		}else{
			$_SESSION['giohang'][$idSach] = $_GET['sl'.$idSach];
			header("Location: ../?p=gio-hang");
		}
	}
	
 ?>
