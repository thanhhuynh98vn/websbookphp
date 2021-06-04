<<?php 
	session_start();
 ?>
<div class="sp">
	<div class="header-sp">
		<span>ĐÃ NHẬN ĐƠN HÀNG</span>
	</div>
	<div id="gio-trong">
		<img src="./img/cont/thanh-toan-thanh-cong.png"><span><br>CẢM ƠN BẠN ĐÃ MUA HÀNG !</span><span><br>Mã đơn hàng của bạn là: <font color="red" size="5pt"><?php echo $_SESSION['maDonHang']; ?></font></span><a href="?p=trang-chu">TRANG CHỦ</a>
	</div>
</div>