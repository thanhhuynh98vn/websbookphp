<?php
	session_start();
	$idSach = $_GET['idSachGio'];
	if(isset($_SESSION['giohang'][$idSach])){
		$sl = $_SESSION['giohang'][$idSach] +1;
	}else{
		$sl = 1;
	}
	$_SESSION['giohang'][$idSach] = $sl;
	// header('Location: http://localhost:1009/HUMG-Books/?p=chi_tiet_sach&idSach='.$idSach);
?>
<script type="text/javascript">
	history.back();
</script>