<?php 
	session_start();
	$truy_van = "SELECT MAX(idDonHang) AS maxid FROM don_hang";
 	$temp = mysqli_query($conn,$truy_van);
 	$dong = mysqli_fetch_assoc($temp);
	$_SESSION['maDonHang'] = $dong['maxid'] + 1;

	function _hinhThucThanhToan($p){
		switch ($p) {
			case 'bk':
				# code...
				return 'https://www.baokim.vn/payment/product/version11?business=trongnhan1110i%40gmail.com&id=&order_description=&product_name=HUMGBOOKS&product_price=20000&product_quantity=20&total_amount='.$_SESSION['tongTienHang'].'&url_cancel=duongdanhuythanhtoan&url_detail=&url_success=duongdanthanhtoanthanhcong';
				break;
			case 'nk':
				# code...
				return 'https://www.nganluong.vn/button_payment.php?receiver=trongnhan1110i@gmail.com&product_name='.$_SESSION['maDonHang'].'&price=(Tổng giá trị)&return_url=(URL thanh toán thành công)&comments=(Ghi chú về đơn hàng)';
				break;
			default:
				# code...
				break;
		}
	}
 ?>
<div class="sp">
	<div class="header-sp">
		<span>THANH TOÁN ĐƠN HÀNG</span>
	</div>
	<div>
		<table border="1">
			<form method="POST">
				<tr><td><input type="radio" name="thanh-toan" value="bk"><img src="./img/icon-thanh-toan/baokim.png"></td></tr>
				<tr><td><input type="radio" name ="thanh-toan" value="nl"><img src="./img/icon-thanh-toan/nl.png"></td></tr>
				<tr><td><input type="radio" name ="thanh-toan" value="cod">THANH TOÁN BẰNG HÌNH THỨC COD</td></tr>
				<tr><td><input type="submit" name ="tt" value="Thanh Toán" class="nut-xac-nhan"></td></tr>
			</form>
		</table>
	</div>
</div>
<?php 
	if (isset($_POST['tt'])) {
		# code...
		$link= _hinhThucThanhToan($_POST['thanh-toan']);
		header('location: '.$link);
	}
 ?>