<div id="danh-muc-sach">
	<div id="kho-sach">
		<table cellspacing="0">
			<tr id="dong-dau">
				<td>id</td>
				<td>Tên Sách</td>
				<td>Thể loại</td>
				<td>Hình ảnh</td>
				<td>Tác giả</td>
				<td></td>
				<td></td>
			</tr>
			<?php
			function idchanle($id){
				if($id % 2 == 0){
					return 'class = "Chan"';
				}else{
					return 'class = "Le"';
				}
			}

			if(isset($_GET['page'])){
				$trang = ($_GET['page']-1)*10;
			}else{
				$trang = 0;
			}
				$truy_van = 'SELECT * FROM kho_sach LIMIT '.$trang.', 10';
				$temp = mysqli_query($conn,$truy_van);
				$idchanle = 0;
				while ($dong = mysqli_fetch_assoc($temp)) {
					# code...
					$idchanle++;
					echo '<tr '.idchanle($idchanle).' >';
					echo '<td>'.(string)$dong['idSach'].'</td>';
					echo '<td>'.(string)$dong['tenSach'].'</td>';
					echo '<td>'.(string)$dong['loaiSach'].'</td>';
					echo '<td><img src="../img/demo-sach/'.$dong['hinhAnh'].'"></td>';
					echo '<td>'.(string)$dong['tacGia'].'</td>';
					$linkxoa = "?p=xoa-sach&idSach=".$dong['idSach'];
					echo '<td><a href="'.$linkxoa.'"><img src="./img/delete.png"></a></td>';
					$linksua = "?p=sua&idSach=".$dong['idSach'];
					echo '<td><a href="'.$linksua.'"><img src="./img/edit.png"></a></td>';
					echo '</tr>';
					
				}
			?>
		</table>
	</div>
	<div id="trang-sach">
		<span>Trang:</span>
		<a href="?p=danh-muc-sach&page=1">1</a>
		<a href="?p=danh-muc-sach&page=2">2</a>
		<a href="?p=danh-muc-sach&page=3">3</a>
		<a href="?p=danh-muc-sach&page=4">4</a>
		<a href="?p=danh-muc-sach&page=5">5</a>
		<a href="?p=danh-muc-sach&page=6">6</a>
	</div>
</div>