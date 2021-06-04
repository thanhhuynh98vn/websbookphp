<?php
	if(isset($_GET['p'])){
		$p = $_GET['p'];
	}else{
		$p = "";
	}
	switch ($p) {
		case 'danh-muc-sach':
			# code...
			include('./view/danh_muc_sach.php');
			break;
		case 'sua':
			# code...
			include('./view/sua.php');
			break;
		case 'them-sach-moi':
			# code...
			include('./view/them_sach_moi.php');
			break;
		case 'xoa-sach':
			# code...
			include('./controls/xoa.php');
			break;
		case 'doi-mat-khau':
			# code...
			include('./view/doi_mat_khau.php');
			break;
		case 'quan-ly-don-hang':
			# code...
			include('view/quan_ly_don_hang.php');
			break;
		case 'xu-ly-don-hang':
			# code...
			include('./controls/xu_ly_don_hang.php');
			break;
		default:
			# code...
			include('view/quan_ly_don_hang.php');
			break;

	}
?>