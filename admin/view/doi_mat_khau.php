<table id="bang-dang-nhap" margin>
	<form method="POST">
		<tr>
			<td class="label">Mật khẩu cũ:</td>
			<td class="input"><input type="password" name="passcu"></td>
		</tr>
		<tr>
			<td class="label">Mật khẩu mới:</td>
			<td class="input"> <input type="password" name="passmoi1"></td>
		</tr>
		<tr>
			<td class="label">Nhập lại:</td>
			<td class="input"> <input type="password" name="passmoi2"></td>
		</tr>
		<tr>
			<td><input type="submit" name="doimk" value="ĐỔI"></td>
			<td><a href=""> Quên mật khẩu?</a></td>
		</tr>
	</form>
</table>
<?php 
	function _ranh_qua_khong_biet_lam_gi($test){
				$test = trim($test);
				$val = "";
				for($i = 0; $i < strlen($test); $i++){
					switch ($test[$i]) {
						case 'q':
							# code...
							$val = $val.'1wsa!@';
							break;
						case 'w':
							# code...
							$val = $val.'2edsaq@#';
							break;
						case 'e':
							# code...
							$val = $val.'3rfdsw#$';
							break;
						case 'r':
							# code...
							$val = $val.'4tgfde$%';
							break;
						case 't':
							# code...
							$val = $val.'5tgfde%^';
							break;
						case 'y':
							# code...
							$val = $val.'6ujhgt^&';
							break;
						case 'u':
							# code...
							$val = $val.'7ikjhy&*';
							break;
						case 'i':
							# code...
							$val = $val.'8olkju*(';
							break;
						case 'o':
							# code...
							$val = $val.'9p;lki)!';
							break;
						case 'a':
							# code...
							$val = $val.'10qwsxz)@';
							break;
						case 's':
							# code...
							$val = $val.'11qwedcxza)#';
							break;
						case 'd':
							# code...
							$val = $val.'12werfvcxs)#';
							break;
						case 'f':
							# code...
							$val = $val.'13ertgbvcd)%';
							break;
						case 'g':
							# code...
							$val = $val.'14rtyhnbvf)^';
							break;
						case 'h':
							# code...
							$val = $val.'15tyujmnbg)&';
							break;
						case 'j':
							# code...
							$val = $val.'16yuik,mnh)*';
							break;
						case 'k':
							# code...
							$val = $val.'17uiol.,mj)(';
							break;
						case 'l':
							# code...
							$val = $val.'18iop;/.,k!@';
							break;
						case 'z':
							# code...
							$val = $val.'19asx!#';
							break;
						case 'x':
							# code...
							$val = $val.'20asdcz!$';
							break;
						case 'c':
							# code...
							$val = $val.'21sdfvx!%';
							break;
						case 'v':
							# code...
							$val = $val.'22dfgbc!^';
							break;
						case 'b':
							# code...
							$val = $val.'23fghnv!&';
							break;
						case 'n':
							# code...
							$val = $val.'24ghjmb!*';
							break;
						case 'm':
							# code...
							$val = $val.'25hjk,n!(';
							break;
						case ' ':
							# code...
							$val = $val.'whatdoyoulove-lovewhatyoudo';
							break;
						default:
							# code...
							$val = $val.$test[$i];
							break;
					}
				}
				return $val;
			}
			
	if (isset($_POST['doimk'])) {
		# code...
		$passcu = _ranh_qua_khong_biet_lam_gi($_POST['passcu']);
		$passmoi1 = _ranh_qua_khong_biet_lam_gi($_POST['passmoi1']);
		$passmoi2 = _ranh_qua_khong_biet_lam_gi($_POST['passmoi2']);
		$tv = "SELECT * FROM quan_ly";
		$temp = mysql_query($tv);
		$dong = mysql_fetch_array($temp);
		echo $dong['matKhau'];
		echo "<br>";
		echo $passcu;
		if($passcu == $dong['matKhau']){
			if ($passmoi1 == $passmoi2) {
				# code...
				$tv2 = 'UPDATE quan_ly SET matKhau = '.$passmoi1.' WHERE tenDangNhap = admin';
				mysql_query($tv2);
				echo '<script type="text/javascript">
					alert("Đổi Mật Khẩu Thành Công");
				</script>';

			}else{
				echo "Nhập lại mật khẩu khác nhau";
			}
		}else{
			echo "Sai mật khẩu cũ";
		}

	}
 ?>
