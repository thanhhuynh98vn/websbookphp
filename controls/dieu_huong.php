<?php
	if (isset($_GET['p'])) {
		# code...
		$p=$_GET['p'];
	}else{
		$p="";
	}
	switch ($p) {
		case 'chi_tiet_sach':
			# code...
			include('view/chi_tiet_sach.php');
			break;
		case 'gioi-thieu':
			# code...
			include('view/gioi_thieu.php');
			break;
		case 'phan_loai_sach':
			# code...
			include('view/phan_loai_sach.php');
			break;
		case 'gio-hang':
			# code...
			include('view/xem_gio_hang.php');
			break;
		case 'dat-hang':
			include('view/dat_hang.php');
			# code...
			break;
		case 'tim-kiem':
			# code...
			include('view/tim_kiem.php');
			break;
		case 'thanh-toan':
				# code...
				include('view/thanh_toan.php');
				break;
		case 'thanh-toan-thanh-cong':
			# code...
			include ('view/thanh_toan_thanh_cong.php');
			break;
		case 'tra-cuu-don-hang':
			# code...
			include('view/tra_cuu_don_hang.php');
			break;
		default:
			# code...
			include('view/home.php');
	}
?>