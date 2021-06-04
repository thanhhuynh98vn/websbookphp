
<?php 
	$truyvan = "SELECT * FROM don_hang WHERE tinhTrang = 0";
	$temp = mysqli_query($conn,$truyvan);
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
		echo '<div id="xu-ly-don-hang"><table><tr><td><a href="?p=xu-ly-don-hang&dagui=true&idDonHang='.$dong['idDonHang'].'"><img src="./img/finish-bill.png"></a></td><td><a href="?p=xu-ly-don-hang&xoa=true&idDonHang='.$dong['idDonHang'].'"><img src = "./img/delete-bill.png"></a></td></tr></table></div>';
		echo '</div>';
	}
 ?>
 <table>
 	
 </table>