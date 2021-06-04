<div id="form-sua">
	<form method="POST">
			<table>
				<?php 
					echo '<tr><td>Tên sách: </td><td><input class ="txtSach" type="text" name="tenSach"></td></tr>';
					echo '<tr><td>Giá tiền: </td><td><input class ="txtSach" type="text" name="giaTien"></td></tr>';
					echo '<tr><td>Hình Ảnh: </td><td><input class ="txtSach" type="file" name="hinhAnh"></td></tr>';
					echo '<tr><td>Miêu tả: </td><td><input class ="txtSach" type="text" name="noiDung"></td></tr>';
					echo '<tr><td>Loại sách: </td><td><input class ="txtSach" type="text" name="loaiSach"></td></tr>';
					echo '<tr><td>Tác giả: </td><td><input class ="txtSach" type="text" name="tacGia"></td></tr>';
					echo '<tr><td><input type = "submit" name="them" value="THÊM" class="nut"></td><td><input type = "button" name = "huy" value="HỦY"  class="nut"></td></tr>';
					echo "*Tính năng thêm ảnh chỉ khả dụng trên Chromium";
				?>
			</table>
		</form>
		<?php 
			function idloaiSach($temp){
				switch ($temp) {
					case 'van-hoc':
						return '1';
						break;
					case 'tam-ly-ky-nang':
						return '2';
						break;
					case 'kinh-te':
						return '3';
						break;
					case 'nuoi-day-con':
						return '4';
						break;
					case 'sach-tieng-anh':
						return '5';
						break;
					default:
						return '0';
						break;
				}
			}
			if(isset($_POST['them'])){
				$tenSach = $_POST['tenSach'];
				$giaTien = $_POST['giaTien'];
				$hinhAnh = $_POST['hinhAnh'];
				$noiDung = $_POST['noiDung'];
				$idLoaiSach = (int)idloaiSach($_POST['loaiSach']);
				$loaiSach =$_POST['loaiSach'];
				$tacGia = $_POST['tacGia'];
				$tv = "INSERT INTO kho_sach (tenSach,giaTien,hinhAnh,noiDung,idLoaiSach,loaiSach,tacGia) VALUES ('$tenSach',$giaTien,'$hinhAnh','$noiDung',$idLoaiSach,'$loaiSach','$tacGia')";
				mysqli_query($conn,$tv);
				echo '<script type="text/javascript">
	history.back();
</script>';
			}
		 ?>
</div>
