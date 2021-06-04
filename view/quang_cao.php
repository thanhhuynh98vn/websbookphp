<div id="header-qc">
	<div id="quang-cao-left">
		<div id="menu-bar">
			<ul>
			<?php
			$truy_van = "SELECT * FROM menu_bar ORDER BY idItem";
			$temp = mysqli_query($conn,$truy_van);
			while ($dong=mysqli_fetch_assoc($temp)) {
				if ($dong['dieu_huong'] == 'doi-tac' || $dong['dieu_huong'] == 'gioi-thieu') {
					# code...
					$link = "?p=".$dong['dieu_huong'];
					}else{
						$link="?p=phan_loai_sach&loai_sach=".$dong['dieu_huong'];
					}
						
					# code...
					echo '<li ><a href="';
					echo $link;
					echo '">';
					echo $dong['item_menu_bar'];
					echo '</a></li>';
				}
				?>
			</ul>
		</div>
	</div>
	<div id="quang-cao-right">
		<img src="./img/slide/qc.gif">
	</div>
</div>