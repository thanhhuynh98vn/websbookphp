<?php 
	if(isset($_GET['idSach'])){
		$idSach = $_GET['idSach'];
		$truy_van = "DELETE FROM kho_sach WHERE idSach = '$idSach'";
		mysqli_query($conn,$truy_van);
		echo '<script type="text/javascript">
		alert("Đã xóa :)");
		history.back();
			</script>';
	}
 ?>
