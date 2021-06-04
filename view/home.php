<?php 
	function _tenMuc($i){
		switch ($i) {
			case 1:
				# code...
				return 'VĂN HỌC';
				break;
			case 2:
				# code...
				return 'TÂM LÝ KỸ NĂNG';
				break;
			case 3:
				# code...
				return 'KINH TẾ';
				break;
			case 4:
				# code...
				return 'NUÔI DẠY CON';
				break;
			case 5:
				# code...
				return 'SÁCH TIẾNG ANH';
				break;
			default:
				# code...
				break;
		}
	}
	function _sachLon($k){
		switch ($k) {
			case 1:
				# code...
				return '12';
				break;
			case 2:
				# code...
				return '47';
				break;
			case 3:
				# code...
				return '48';
				break;
			default:
				# code...
				break;
		}
	}
	for ($j=1; $j <4 ; $j++) { 
		# code...
 ?>
<div class="sp">
	<div class="header-sp">
		<span><?php echo _tenMuc($j);		 ?></span>
	</div>
	<div class="sp-nho">
		<?php
			$truy_van = 'SELECT * FROM kho_sach WHERE idLoaiSach='.$j;
			$temp = mysqli_query($conn,$truy_van);
			for ($i=0; $i <6 ; $i++) { 
			# code...
			$dong=mysqli_fetch_assoc($temp);
			# code...
			$link = "?p=chi_tiet_sach&idSach=".$dong['idSach'];
			echo '<div class="box-sp"><a href="'. "$link";
			echo '"><img class="sach-tb" src="img/demo-sach/';
			echo (string)$dong['hinhAnh'];
			echo '"></a>';
			echo '<div class="tt-sach"><span class="title">'.substr($dong['tenSach'], 0,40).'</span></br><span class="pric">'.substr($dong['giaTien'], 0,40).'&nbsp; ₫</span><div class="them"><a onclick="dathem();"href="controls/them_vao_gio.php?&idSachGio='.$dong['idSach'].'">THÊM VÀO GIỎ</a></div></div>';
			echo '</div>';
					
			}
		?>
		<div class="bottom-sp">
			<table>
				<tr>
					<td id="xem-tat-ca"><span><a href="?p=phan_loai_sach&loai_sach=van-hoc">Xem tất cả</a></span></td>
				</tr>
			</table>		
		</div>
	</div>
	<div class="sp-lon">
		<?php
			$idSachLon = _sachLon($j);
			$tv = 'SELECT * FROM kho_sach WHERE idSach ='.$idSachLon;
			$tempp2 = mysqli_query($conn,$tv);
			$dong3 = mysqli_fetch_assoc($tempp2);

		 ?>
		<a href="?p=chi_tiet_sach&idSach=<?php echo $idSachLon; ?>"><img src="img/demo-sach/<?php echo $j; ?>A.jpg"></a>
		<span><?php echo $dong3['tenSach'] ?></span>
		<p><i><?php echo $dong3['noiDung'] ?><i></p>
	</div>
</div>
<?php
}
 ?>