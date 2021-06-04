	<div class="sp">
		<?php

			$loai_sach = $_GET['loai_sach'];
			$tv ="SELECT * FROM menu_bar WHERE dieu_huong='$loai_sach'";
			$temp2 = mysqli_query($conn,$tv);
			$dong2 = mysqli_fetch_assoc($temp2);
			echo '<div class="header-sp"><img src = "./img/cont/trang-tri-1.png"><span>';
			echo (string)$dong2['item_menu_bar'];
			echo '</span></div>';
			$truy_van = "SELECT * FROM kho_sach WHERE loaiSach='$loai_sach'";
			$temp = mysqli_query($conn,$truy_van);
			while ($dong=mysqli_fetch_assoc($temp)){
				# code...
				$link = "?p=chi_tiet_sach&idSach=".$dong['idSach'];
				echo '<div class="box-sp-2"><a href="';
				echo "$link";
				echo '"><img class="sach-tb" src="img/demo-sach/';
				echo (string)$dong['hinhAnh'];
				echo '"></a>';
				echo '<div class="tt-sach"><span class="title">'.substr($dong['tenSach'], 0,40).'</span></br><span class="pric">'.substr($dong['giaTien'], 0,40).'&nbsp; ₫</span><div class="them"><a onclick="dathem();" href="controls/them_vao_gio.php?&idSachGio='.$dong['idSach'].'">THÊM VÀO GIỎ</a></div></div>';
				echo'</div>';
			}
		?>
	</div>