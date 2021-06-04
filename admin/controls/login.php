<style type="text/css">
	#dang-nhap{
		background-image: url('../img/bg.jpg');
		height: 650px;
		overflow: hidden;
		margin: 0 auto;
		padding: 0;
	}
	.nut{
		font-weight: bold;
		background: transparent;
	}
	.header-dangnhap{
		width: 100%;
		
		height: 30px;
	}
	.header-dangnhap span{
		font-family: Cambria;
		font-weight: bold;
		margin-left: 40%;
	}
	#form-dang-nhap{
		width: 300px;
		margin-left: 40%;
		margin-top: 20%;
	}
	#bang-dang-nhap{
		border: 1px solid black;
	}
	.input{
		height: 30px;
		width: 200px;
		background: transparent;	
	}
	.dong-cuoi{
		
	}
</style>
<?php
	include('../connect/ket_noi.php');
	session_start();
?>
<div id="dang-nhap">	
	<div id="form-dang-nhap">	
		<table id="bang-dang-nhap" margin>
			<form method="POST">
				<tr class="header-dangnhap">
					<td colspan="2"><span>LOGIN</span></td>
				</tr>
				<tr>
					<td class="label">Account:</td>
					<td ><input type="text" name="acc" class="input"></td>
				</tr>
				<tr>
					<td class="label">Password:</td>
					<td > <input type="password" name="pass" class="input"></td>
				</tr>
				<tr class="dong-cuoi">
					<td><input type="submit" name="login" value="LOGIN" class="nut"></td>
					<td><a href=""> Forgot Password?</a></td>
				</tr>
			</form>
		</table>
	</div>
</div>
<?php
	// hàm mã hóa pass = )))
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
	if(isset($_POST['login'])){
		if(isset($_POST['acc']) && isset($_POST['pass'])){
			$acc = $_POST['acc'];
			$pass = _ranh_qua_khong_biet_lam_gi($_POST['pass']);
			$truy_van = "SELECT * FROM quan_ly WHERE tenDangNhap='$acc' AND matKhau ='$pass'";
			$temp = mysqli_query($conn,$truy_van);
			if(mysqli_num_rows($temp) != 0){
				echo '<script type"text/javascript"> alert("đăng nhập thành công");</script>';
				header("Location: ../");
				$_SESSION['kiem-tra-dang-nhap'] = "ok";
			}else{
				echo "<center>Sai tên đăng nhập hoặc mật khẩu</center>";
			}

		}else{
			echo '<script type="text/javascript">
			alert("Nhập đầy đủ tên đăng nhập và mật khẩu");
			</script>';
		}

	}
?>
