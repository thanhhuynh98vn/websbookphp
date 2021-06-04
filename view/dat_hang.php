<?php 
	session_start();
	if(!isset($_SESSION['giohang'])){
		echo '<script type="text/javascript">
			history.back();
		</script>';
	}
 ?>
<div class="sp">
	<div class="header-sp">
		<span>THÔNG TIN NGƯỜI NHẬN</span>
	</div>
	<div id="nhap-thong-tin">
		<table>
			<form method="POST" name="form-thong-tin">
				<tr>
					<td class="muc">Họ Tên:</td>
					<td><input type="text" name="hoTen" class="noi-dung-nhap"  ></td>
				</tr>
				<tr>
					<td class="muc">SĐT:</td>
					<td><input type="number" name="sdt" class="noi-dung-nhap" id=sdt></td>
				</tr>
				<tr>
					<td class="muc">Tỉnh/Thành phố:</td>
					<td><input type="text" name="thanhPho" class="noi-dung-nhap" id="tt"></td>
				</tr>
				<tr>
					<td class="muc">Quận/Huyện:</td>
					<td><input type="text" name="quanHuyen" class="noi-dung-nhap" id="qh"></td>
				</tr>
				<tr>
					<td class="muc">Phường/Xã:</td>
					<td><input type="text" name="phuongXa" class="noi-dung-nhap" id="px"></td>
				</tr>
				<tr>
					<td class="muc">Địa Chỉ:</td>
					<td><input type="text" name="diaChi" class="noi-dung-nhap"></td>
				</tr>
				<tr>
					<td><input type="submit" name="xacNhanThongTinKhachHang" value="GIAO ĐẾN ĐỊA CHỈ NÀY" class="nut-xac-nhan"></td>
					<td id="ht"></td>
				</tr>
			</form>
		</table>
		<?php 
			if(isset($_POST['xacNhanThongTinKhachHang'])){
				if($_POST['hoTen'] != "" || $_POST['sdt'] != ""){
					$_SESSION['khachHang']['hoTen'] = $_POST['hoTen'];
					$_SESSION['khachHang']['sdt'] = $_POST['sdt'];
					$_SESSION['khachHang']['diaChi'] = $_POST['diaChi'].', '.$_POST['phuongXa'].', '.$_POST['quanHuyen'].', '.$_POST['thanhPho'];
					header('Location: ?p=thanh-toan');
				}else{
					echo '<script type="text/javascript">
						document.getElementById("ht").innerHTML = "Phiền bạn điền đầy đủ thông tin.";
						</script>';
				}
			}
			
		 ?>
</div>
