<?php 
	if(isset($_GET['xoa'])){
		$idXoa = $_GET['idDonHang'];
		$xoa = $_GET['xoa'];
		if($xoa == 'true'){
			$truyvan = 'DELETE FROM don_hang WHERE idDonHang='.$idXoa;
			mysqli_query($conn,$truyvan);
			echo ' <script type="text/javascript"> history.back();</script>';
		}
	}
	if(isset($_GET['dagui'])){
		$idGui = $_GET['idDonHang'];
		$dagui = $_GET['dagui'];
		if($dagui == 'true'){
			$truyvan2 = 'UPDATE don_hang SET tinhTrang = 1 WHERE idDonHang='.$idGui;
			mysqli_query($conn,$truyvan2);
			echo ' <script type="text/javascript"> history.back();</script>';
		}
	}
 ?>
