<div class="sp">
	<div class="header-sp">
		<span>KẾT QUẢ TÌM KIẾM</span>
	</div>
	<?php 
		if(isset($_GET['tu_khoa_tim_kiem'])){
			//$tukhoa1 = $_GET['tu_khoa_tim_kiem'];
			$tukhoa1 = $_GET['tu_khoa_tim_kiem'];
			$tukhoa1 = strtoupper($tukhoa1);
			$tv = "SELECT * FROM kho_sach WHERE tenSach REGEXP N'$tukhoa1' ";
			$tempp = mysqli_query($conn,$tv);
			while ($dong2 = mysqli_fetch_assoc($tempp)) {
				# code...
			echo '<div class ="chi_tiet_sach">';
			$idSach=$dong2['idSach'];
			$truy_van="SELECT * FROM kho_sach WHERE idSach='$idSach'";
			$temp=mysqli_query($conn,$truy_van);
			$dong=mysqli_fetch_assoc($temp);
			echo '<div id="img-sach"><img src="./img/demo-sach/';
			echo $dong['hinhAnh'];
			echo '"></div>';
			echo '<div id="thong-tin-sach"><span id="ten-sach"><img src="./img/cont/trang-tri-1.png">';
			echo $dong['tenSach'];
			echo '.</br></span>
		<ul>
			<li>
				<span>Tác giả:</span>
				<span class="noi-dung-chi-tiet">';
			echo $dong['tacGia'];
			echo '</span>
			</hr>
			</li>

			<li>
				<span>Giá tiền:</span>
				<span class="noi-dung-chi-tiet">';
			echo (string)$dong['giaTien'];
			echo ' đồng </span>
			</li>
			<li>
				<span>Tóm tắt nội dung: <br></span>
				<span id="tom-tat-noi-dung">"';
			echo $dong['noiDung'];
			echo '"</span>
			</li>
		</ul> </div>';
		$idSachGio = $dong2['idSach'];
		echo '<div id="bang-lua-chon">';
		echo '<div class="nut"><a href="?p=gio-hang">THANH TOÁN</a></div>';
		echo '<div class="nut"><a href="?p=gio-hang">XEM GIỎ HÀNG</a></div>';
		echo '<div class="nut"><a onclick ="dathem();" href="controls/them_vao_gio.php?&idSachGio=';
		echo $idSachGio;
		echo '">THÊM VÀO GIỎ</a></div>';
		
		echo '</div></div>';
			}
		}
	 ?>
</div>