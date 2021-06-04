<?php
	session_start();

?>

<div class="chi_tiet_sach">
	<!-- code HTML -->
	<!-- <div id="img-sach">
		<img src="./img/demo-sach/demo-sach-23.jpg">
	</div>
	<div id="thong-tin-sach">
		<span id="ten-sach"><img src="./img/trang-tri-1.png">GIÔNG TỐ </br></span>
		<ul>
			<li>
				<span>Tác giả:</span>
				<span class="noi-dung-chi-tiet">Vũ Trọng Phụng</span>
			</li>
			<li>
				<span>Giá tiền:</span>
				<span class="noi-dung-chi-tiet">100.000</span>
			</li>
			<li>
				<span>Số lượng còn: </span>
				<span class="noi-dung-chi-tiet">10</span>
			</li>
			<li>
				<span>Tóm tắt nội dung: <br></span>
				<span id="tom-tat-noi-dung">"Giông tố là một tác phẩm hay nhưng nhiều câu từ viết bằng từ ngữ ngày xưa nên nhiều độc giả trẻ ngày nay đọc nhưng không hiểu gì."</span>
			</li>
		</ul> 
		</div>
		-->
		<?php
			$idSach=$_GET['idSach'];
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

		?>
	<!-- Giỏ hàng - thanh toán
	<div id="bang-lua-chon">
		<div class="nut">
			<a href="#">>THANH TOÁN</a>
		</div>
		<div class="nut">
			<a href="Để thấy đêm không còn dài">XEM GIỎ HÀNG</a>
		</div>
		<div class="nut">
			<a href="#">THÊM VÀO GIỎ</a>
		</div>

	</div>
-->
	<?php
		$idSachGio = $_GET['idSach'];
		echo '<div id="bang-lua-chon">';
		echo '<div class="nut"><a href="?p=gio-hang">THANH TOÁN</a></div>';
		echo '<div class="nut"><a href="?p=gio-hang">XEM GIỎ HÀNG</a></div>';
		echo '<div class="nut"><a onclick ="dathem();" href="controls/them_vao_gio.php?&idSachGio=';
		echo $idSachGio;
		echo '">THÊM VÀO GIỎ</a></div>';
		
		echo '</div>';

	?>
</div>
<div class="sach_lien_quan">
	<span id="co-the-ban-quan-tam">CÓ THỂ BẠN QUAN TÂM.</span>
	<!-- mã HTML
	<div id="list-sach-lien-quan">
		<div class="box-sp"><a><img src="./img/demo-sach/demo-sach-1.jpg"></a></div>
		<div class="box-sp"></div>
		<div class="box-sp"></div>
		<div class="box-sp"></div>
		<div class="box-sp"></div>
		<div class="box-sp"></div>
		<div class="box-sp"></div>
	</div>
	-->
	<div id="list-sach-lien-quan">
	<?php
		for ($i=0; $i <4 ; $i++) { 
			# code...
			$idrand = mt_rand(5,30);
			$truy_van = "SELECT * FROM kho_sach WHERE idSach ='$idrand'";
			$temp = mysqli_query($conn,$truy_van);
			$dong = mysqli_fetch_assoc($temp);
			$link="?p=chi_tiet_sach&idSach=".$idrand;
			echo '<div class="box-sp-2"><a href="'. "$link";
			echo '"><img class="sach-tb" src="img/demo-sach/';
			echo (string)$dong['hinhAnh'];
			echo '"></a>';
			echo '<div class="tt-sach"><span class="title">'.substr($dong['tenSach'], 0,40).'</span></br><span class="pric">'.substr($dong['giaTien'], 0,40).'&nbsp; ₫</span><div class="them"><a onclick="dathem();" href="controls/them_vao_gio.php?&idSachGio='.$dong['idSach'].'">THÊM VÀO GIỎ</a></div></div>';
			echo '</div>';

		}
		mysql_close($conn);
	?>
	</div>
</div>
