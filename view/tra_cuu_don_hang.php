<div class="sp">
	<div class="header-sp">
		<span>TRA CỨU ĐƠN HÀNG</span>
	</div>
	<div id="box-nhap-id">
		<form method="POST">
			<table border="0">
				<tr><td><input type="number" name="idDonTra" id="nhap-id"></td><td><input type="submit" name="traDon" value="TRA ĐƠN HÀNG" id="nut-tra"></td></tr>
			</table>
		</form>
	</div>
	<?php
		function _tinhTrang($ff){
			switch ($ff) {
				case 0:
					# code...
					return 'Đã nhận đơn hàng, đang chờ gửi đi.';
					break;
				case 1:
					# code...
					return 'Đã gửi sách đi';
					break;
				default:
					# code...
					break;
			}
		}  
		if(isset($_POST['traDon'])){
			$truyvan = 'SELECT * FROM don_hang WHERE idDonHang ='.$_POST['idDonTra'];
			$temp = mysqli_query($conn,$truyvan);
			if($temp != null){
				while($dong = mysqli_fetch_assoc($temp)){
					echo '<div class="don-hang">
					<div class="ma-don-hang">
					<span>Mã đơn:'.$dong['idDonHang'].'</span>
				</div>';
					echo '<div class="thong-tin-khach"><span>THÔNG TIN NGƯỜI MUA</span>';
					echo '<ul><li>TÊN: '.$dong['tenKhachHang'].'</li><li>SĐT: '.$dong['sdtKhachHang'].'</li><li>ĐỊA CHỈ: '.$dong['diaChiKhachHang'].'</li><ul>';
					echo '</div><div class="sach-mua">';
					$mangIdSach = explode('//',$dong['dayIdSach']);
					$mangSoLuong = explode('//',$dong['daySoLuong']);
					echo '<table>';
					for ($i=0; $i <sizeof($mangIdSach) ; $i++) { 
						# code...
						$truyvan2 = 'SELECT * FROM kho_sach WHERE idSach='.$mangIdSach[$i];
						$tempp = mysqli_query($conn,$truyvan2);
						if($tempp != null){
						 $dong2 = mysqli_fetch_assoc($tempp);
						 echo '<tr><td>'.$dong2['tenSach'].'</td><td>'.$dong2['giaTien'].'</td><td>'.$mangSoLuong[$i].'</td></tr>';
						}

					}
					echo '</table></div>';
					echo '<div class="header-sp"><span>TÌNH TRẠNG: <font color="red">'._tinhTrang($dong['tinhTrang']).'</font></span></div>';
				}
			}else{
			echo '<div class="header-sp">
		<span>KHÔNG TÌM THẤY MÃ ĐƠN HÀNG YÊU CẦU</span>
	</div>';
		}
		}

	?>

	<div id="box-thong-tin-don"></div>
</div>