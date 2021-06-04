<?php
	if(isset($_GET['idSach'])){
		$idSachsua = $_GET['idSach'];
	}else{
		$idSachsua = "";
	}
	$truy_van = "SELECT * FROM kho_sach WHERE idSach = $idSachsua";
	$temp = mysqli_query($conn,$truy_van);
	$dong = mysqli_fetch_assoc($temp);
?>
<div id="form-sua">
		<form method="POST">
			<table>
				<?php 
					echo '<tr><td>Tên sách: </td><td><input class ="txtSach" type="text" name="tenSach" value ="'.$dong['tenSach'].'"></td></tr>';
					echo '<tr><td>Giá tiền: </td><td><input class ="txtSach" type="text" name="giaTien" value ="'.$dong['giaTien'].'"></td></tr>';
					echo '<tr><td>Hình Ảnh: </td><td><input class ="txtSach" type="file" name="hinhAnh" value ="'.$dong['hinhAnh'].'"></td></tr>';
					if(isset($_POST['hinhAnh'])){
						echo '<tr><td></td><td><img src="../img/demo-sach/'.$_POST['hinhAnh'].'" ></td></tr>';
					}
					echo '<tr><td>Miêu tả: </td><td><input class ="txtSach" type="text" name="noiDung" value ="'.$dong['noiDung'].'"></td></tr>';
					echo '<tr><td>Loại sách: </td><td><input class ="txtSach" type="text" name="loaiSach" value ="'.$dong['loaiSach'].'"></td></tr>';
					echo '<tr><td>Tác giả: </td><td><input class ="txtSach" type="text" name="tacGia" value ="'.$dong['tacGia'].'"></td></tr>';
					echo '<tr><td><input type = "submit" name="sua" value="Sửa"></td></tr>';
					echo "(Tính năng sửa hình ảnh chỉ khả dụng trên Chromium)";
				?>
			</table>
		</form>
		<?php
			if(isset($_POST['sua'])){
				$tenSach = $_POST['tenSach'];
				$giaTien = (int)$_POST['giaTien'];
			/* if(isset($_POST['hinhAnh'])){
					$hinhAnh = $_POST['hinhAnh'];
					$hinhAnh2 = explode('-', $hinhAnh);
					$hinhAnh = $hinhAnh2[2];
				}else{
					$hinhAnh ="";
				}
				*/
				if($_POST['hinhAnh']){
					$hinhAnh = $_POST['hinhAnh'];
				}else{
					$hinhAnh = $dong['hinhAnh'];
				}
				
				$noiDung = $_POST['noiDung'];
				$loaiSach = $_POST['loaiSach'];
				$tacGia = $_POST['tacGia'];
				echo "$hinhAnh";
				$truy_van2 = "UPDATE kho_sach SET tenSach = '$tenSach', giaTien = '$giaTien', hinhAnh = '$hinhAnh', noiDung = '$noiDung', loaiSach = '$loaiSach', tacGia = '$tacGia' WHERE idSach='$idSachsua'";
				mysqli_query($conn,$truy_van2);
				echo '<script type="text/javascript">
		 		 	alert("Đã sửa");
					history.back();	 	
		 		 </script>';
			}
		 ?>

	</div>