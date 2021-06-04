<?php
	$severname = "localhost"; 
	$username = "root";
	$password ="";
	$db = "humg-books";
	$conn = mysqli_connect($severname,$username,$password);
	if(!$conn){
		echo "Connect Erorr".mysqli_connect_error();
	}else{
		$create = 'CREATE DATABASE `humg-books` CHARACTER SET utf8 COLLATE utf8_unicode_ci';
		mysqli_query($conn,$create);
		$con2 = mysqli_connect($severname,$username,$password,$db);
		if($con2){
			mysqli_set_charset($con2,"utf8");
			$dulieu = "CREATE TABLE `don_hang` (
  `idDonHang` int(11) NOT NULL,
  `tenKhachHang` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `sdtKhachHang` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `diaChiKhachHang` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `dayIdSach` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `daySoLuong` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `tinhTrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
	
--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`idDonHang`, `tenKhachHang`, `sdtKhachHang`, `diaChiKhachHang`, `dayIdSach`, `daySoLuong`, `tinhTrang`) VALUES
(3, 'Phạm Trọng Nhân', '01225331777', 'con ông Phạm Văn Thuấn, Đoàn Lập, Tiên Lãng, Hải Phòng', '34//32//31//30//5//2//3//1//', '1//1//1//1//1//1//1//1//', 1),
(4, 'Phạm Trọng Nhân', '0122533177', 'con ông Phạm Văn Thuấn, Đoàn Lập, Tiên Lãng, Hải Phòng', '35//32//31//', '1//1//1//', 0),
(6, 'Sherlock Holmes', '911', '221B, Baker, , London', '1//4//5//6//', '2//1//1//1//', 0),
(8, '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `idKhachHang` int(11) NOT NULL,
  `tenKhachHang` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `sdtKhachHang` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `diachiKhachHang` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kho_sach`
--

CREATE TABLE `kho_sach` (
  `idSach` int(11) NOT NULL,
  `tenSach` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `giaTien` int(255) NOT NULL,
  `hinhAnh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noiDung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `idLoaiSach` int(255) NOT NULL,
  `loaiSach` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `tacGia` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kho_sach`
--

INSERT INTO `kho_sach` (`idSach`, `tenSach`, `giaTien`, `hinhAnh`, `noiDung`, `idLoaiSach`, `loaiSach`, `tacGia`) VALUES
(1, 'GIÀU CÓ NHƯ MỘT CÁCH SỐNG', 150000, '1.jpg', 'Sống là cơ hội và cũng là lựa chọn của mỗi người. Sống giàu có viên mãn hay nghèo nàn thiếu thốn? Sống chậm rãi thong thả hay quay cuồng như cơn lốc? Sống tận hưởng hay chỉ quần quật làm việc mà bỏ quên niềm vui? Cuộc sống của chúng ta đậm hay nhạt, rực rỡ hay u ám, hay là một sự tổng hòa tuyệt vời của tất cả những gam màu đó?', 1, 'van-hoc', 'Song Hà'),
(2, 'ĐỢT TUYỆT CHỦNG THỨ 6', 112000, '2.jpg', 'Các nhà khoa học vừa đưa ra cảnh báo rằng, sự biến đổi khí hậu do chính con người tạo ra đang khiến chúng ta tiến nhanh hơn tới cuộc “Đại tuyệt chủng lần thứ 6”. Đáng chú ý, cuộc đại tuyệt chủng này còn có thể diễn ra cực kỳ khủng khiếp giống như sự kiện tiểu hành tinh va vào Trái đất và hủy diệt loài khủng long.', 1, 'van-hoc', 'J D Starling'),
(3, 'TÔI KHÔNG THỂ VIẾT TIỂU THUYẾT', 80000, '3.jpg', 'Mười bốn tuổi, cậu bé mọt sách Takahashi Kotaro đã bắt đầu dùng câu chữ để vẽ ra thế giới tưởng tượng của mình, với tình yêu dành cho gia đình là nguồn cảm hứng bất tận. Nhưng bí mật gia đình cậu bị phơi bày khiến cảm hứng tan biến, mọi thứ sụp đổ. Kotaro khao khát viết lại.', 1, 'van-hoc', 'Phạm Trọng Nhân'),
(4, 'CHỈ TẠI CON CHIM BỒ CÂU', 200000, '4.jpg', 'Truyện kể về cuộc đời vốn được sắp xếp một cách tỉ mỉ của ông Jonathan, vì trải qua những biến cố đau khổ thời trẻ, đã sợ hãi thu hẹp cuộc đời lại. Cuộc sống cứ tuần tự diễn ra cho đến một ngày kia con chim bồ câu xuất hiện... ', 1, 'van-hoc', 'Phạm Trọng Nhân'),
(5, 'NGÂN MÃI KHÚC ĐÀO HOA', 60000, '5.jpg', 'Cứ nghĩ sẽ nên mối duyên lành, nhưng số phận luôn biết cách trêu đùa, cô được tuyển vào cung, rồi trở thành phi tần của đương kim hoàng đế, nắm lấy cơ hội lật lại bản án oan của cha năm xưa. Còn y, thực ra là Thụy Vương gia quyền thế triều đình, liệu có đành lòng trơ mắt đánh mất người mình yêu thương trong cửu trùng cung khuyết?', 1, 'van-hoc', 'Jun Aizawa'),
(6, 'THIÊN MÔN CHI THÁNH', 200000, '6.jpg', 'Hễ là cờ bạc, ắt có lỗ hổng. Đạo lý trong đổ thuật chính là sự phát triển từ vòng tuần hoàn phá giải và phản phá giải liên tục. Có thể phát hiện ra lỗ hổng mà người khác không phát hiện được và nắm bắt chuẩn xác mới chính là cao thủ Thiên Môn đích thực.', 1, 'van-hoc', 'Phạm Trọng Nhân'),
(7, 'NHỮNG ĐÓA HOA CÔ BAN', 100000, '7.jpg', 'những đóa hoa cô ban', 1, 'van-hoc', 'Phạm Trọng Nhân'),
(8, 'CƯ XỬ NHƯ NGƯỜI THÀNH CÔNG SUY NGHĨ NHƯ NGƯỜI THÀNH ĐẠT', 80000, '8.jpg', 'cư xử như người thành công suy nghĩ như người thành đạt', 1, 'van-hoc', 'Phạm Trọng Nhân'),
(9, 'ẢO DẠ', 55000, '9.jpg', 'ảo dạ', 1, 'van-hoc', 'Phạm Trọng Nhân'),
(10, 'VINH NHỤC', 85000, '10.jpg', 'vinh nhục', 1, 'van-hoc', 'Phạm Trọng Nhân'),
(11, 'MÉO CHIẾN BINH', 45000, '11.jpg', 'Mèo chiến binh', 1, 'van-hoc', 'Phạm Trọng Nhân'),
(12, 'BÀI GIẢNG CUỐI CÙNG', 100000, '12.jpg', '\"chúng ta không thể đổi những quân bài đã chia, chỉ đổi cách chơi những quân bài đó\"', 1, 'van-hoc', 'Holden Caufield'),
(13, 'Đồi thỏ', 105000, '13.jpg', '', 1, 'van-hoc', 'Phạm Trọng Nhân'),
(14, 'MÙI HƯƠNG', 65000, '14.jpg', 'Trôi đi qua trôi đi qua trôi đi giấc mơ ngày qua.', 1, 'van-hoc', 'Phạm Trọng Nhân'),
(15, 'NHỮNG NGÃ TƯ VÀ NHỮNG CỘT ĐÈN', 32000, '15.jpg', '', 1, 'van-hoc', 'Trần Dần'),
(16, 'NGƯỜI TÌNH', 107000, '16.jpg', 'người tình', 1, 'van-hoc', 'Phạm Trọng Nhân'),
(17, 'YÊN LẶNG CHO NƯỚC CHẢY', 200000, '17.jpg', '', 1, 'van-hoc', 'Mai Văn'),
(18, 'KHÚC ĐẮM SAY TUYỆT VỌNG', 120000, '18.jpg', '', 1, 'van-hoc', 'Camellia'),
(19, 'Ở XỬ SỞ NHỮNG CON SỐ', 25000, '19.jpg', '', 1, 'van-hoc', 'Ngô Bảo Châu'),
(20, 'NGOẠI Ô', 25000, '20.jpg', '', 1, 'van-hoc', 'Nguyễn Đình Lập'),
(21, 'TẮT ĐÈN', 40000, '21.JPG', '', 1, 'van-hoc', 'Ngô Tất Tố'),
(22, 'ĐÊM NÚM SEN', 45000, '22.jpg', '', 1, 'van-hoc', 'Tran Dan'),
(23, 'LẶNG YÊN DƯỚI VỰC SÂU', 200000, '23.jpg', '', 1, 'van-hoc', 'Đỗ Bích Thủy'),
(24, 'GIÔNG TỐ', 23000, '24.jpg', '', 1, 'van-hoc', 'Vũ Trọng Phụng'),
(25, 'CHỈ TẠI CON CHIM CHÍCH CHÒE', 23000, '25.jpg', '', 1, 'van-hoc', 'Dương Tường'),
(26, 'TÔI LÀ MỘT CON LỪA', 70000, '26.jpg', '', 1, 'van-hoc', 'Nguyễn Phương Mai'),
(27, 'MỘT MÌNH Ở CHÂU ÂU', 82000, '27.jpg', '', 1, 'van-hoc', 'Phan Việt'),
(28, 'CON ĐƯỜNG HỒI GIÁO', 43000, '28.jpg', '', 1, 'van-hoc', 'Nguyễn Phương Mai'),
(29, 'VẺ ĐẸP CỦA YÊU TINH', 55000, '29.jpg', '', 1, 'van-hoc', 'Đỗ Anh Tú'),
(30, '6 THÓI QUEN LÀM VIỆC HIỆU QUẢ', 102000, '31.jpg', '', 2, 'tam-ly-ky-nang', 'Brendon'),
(31, 'TÔI ĐÃ ĐI DU HỌC BẰNG HỌC BỔNG', 100000, '32.jpg', '', 2, '2', 'Chu Đình Tới'),
(32, 'TÔI TƯ DUY TÔI', 75000, '33.jpg', '', 2, 'tam-ly-ky-nang', 'MaxWell'),
(33, 'TÂM LÝ HỌC', 25000, '34.jpg', '', 2, 'tam-ly-ky-nang', 'Trần Nhựt Tân'),
(34, 'SỨC MẠNH CỦA SỰ TỬ TẾ', 102000, '35.jpg', '', 2, 'tam-ly-ky-nang', 'Nhóm tác giả'),
(35, 'LUẬN VỀ YÊU', 25000, '36.jpg', '', 2, 'tam-ly-ky-nang', 'Alain De'),
(36, 'LẼ PHẢI CỦA LÝ CHÍ', 60000, '37.jpg', '', 2, 'tam-ly-ky-nang', 'Dan Ariely'),
(37, 'THUYẾT PHỤC NGƯỜI KHÁC', 78000, '38.jpg', '', 2, 'tam-ly-ky-nang', 'Vernon Howard'),
(38, 'KHÔN NGOAN TRONG ĐỐI NHÂN XỬ THẾ', 84000, '39.jpg', '', 2, 'tam-ly-ky-nang', 'vương Đại Quân'),
(39, 'SPARK', 105000, '42.jpg', '', 3, 'kinh-te', 'New York'),
(40, 'NGHỆ THUẬT LẤY LÒNG KHÁCH HÀNG', 75000, '43.jpg', '', 3, 'kinh-te', 'J Maner'),
(41, 'MACDONALDS', 75000, '44.jpg', '', 3, 'kinh-te', 'Ray Kroc'),
(42, '12 TUYỆT KỸ BÁN HÀNG', 170000, '45.jpg', '', 3, 'kinh-te', 'Micheal Char'),
(43, 'FINTECH', 202000, '46.jpg', '', 3, 'kinh-te', 'Nitro'),
(44, 'THE LEARN ENTERPRISE', 103000, '47.jpg', '', 3, 'kinh-te', 'Trever Owens'),
(45, 'PHÙ THỦY CHỨNG KHOÁN', 45000, '49.jpg', '', 3, 'kinh-te', 'Jack D.Schwager'),
(46, 'BLUE OCEAN SHIFT', 23000, '50.jpg', '', 3, 'kinh-te', 'Chan Kim'),
(47, 'BA NGƯỜI THẦY VĨ ĐẠI', 202000, '51.jpg', ' “Tôi đã nếm trải nhiều thất bại trong hành trình đi qua những tháng ngày của mình. Thế nhưng, mỗi chướng ngại cuối cùng đều lại chính là một bàn đạp đưa tôi gần hơn nữa tới chân lý trong tâm khảm và cuộc đời tốt đẹp nhất của mình\"', 2, 'tam-ly-ky-nang', 'Nhiều Tác Giả'),
(48, 'CUỘC CÁCH MẠNG BLOCKCHAIN', 202000, '52.jpg', ' \"Công nghệ có thể tác động lớn đến tương lai của nền kinh tế thế giới đã xuất hiện, đó không phải là ô tô tự lái, là năng lượng mặt trời hay trí thông minh nhân tạo. Đó chính là Blockchain.\"', 3, 'kinh-te', 'Nhiều Tác Giả');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_bar`
--

CREATE TABLE `menu_bar` (
  `idItem` int(11) NOT NULL,
  `item_menu_bar` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `dieu_huong` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_bar`
--

INSERT INTO `menu_bar` (`idItem`, `item_menu_bar`, `dieu_huong`) VALUES
(57, 'VĂN HỌC', 'van-hoc'),
(58, 'TÂM LÝ - KỸ NĂNG', 'tam-ly-ky-nang'),
(59, 'KINH TẾ', 'kinh-te'),
(60, 'NUÔI DẠY CON', 'nuoi-day-con'),
(61, 'SÁCH TIẾNG ANH', 'sach-tieng-anh'),
(62, 'ĐỐI TÁC', 'doi-tac'),
(63, 'GIỚI THIỆU', 'gioi-thieu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phan_loai`
--

CREATE TABLE `phan_loai` (
  `idLoaiSach` int(11) NOT NULL,
  `loaiSach` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phan_loai`
--

INSERT INTO `phan_loai` (`idLoaiSach`, `loaiSach`) VALUES
(1, 'van-hoc'),
(2, 'tam-ly-ky-nang'),
(3, 'kinh-te'),
(4, 'nuoi-day-con'),
(5, 'sach-tieng-anh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly`
--

CREATE TABLE `quan_ly` (
  `idTK` int(11) NOT NULL,
  `tenDangNhap` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `matKhau` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_ly`
--

INSERT INTO `quan_ly` (`idTK`, `tenDangNhap`, `matKhau`) VALUES
(1, 'admin', '10qwsxz)@12werfvcxs)#25hjk,n!(8olkju*(24ghjmb!* ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`idDonHang`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`idKhachHang`);

--
-- Chỉ mục cho bảng `kho_sach`
--
ALTER TABLE `kho_sach`
  ADD PRIMARY KEY (`idSach`),
  ADD KEY `idLoaiSach` (`idLoaiSach`),
  ADD KEY `idLoaiSach_2` (`idLoaiSach`);

--
-- Chỉ mục cho bảng `menu_bar`
--
ALTER TABLE `menu_bar`
  ADD PRIMARY KEY (`idItem`),
  ADD KEY `dieu_huong` (`dieu_huong`(255));

--
-- Chỉ mục cho bảng `phan_loai`
--
ALTER TABLE `phan_loai`
  ADD PRIMARY KEY (`idLoaiSach`),
  ADD KEY `loaiSach` (`loaiSach`(255));

--
-- Chỉ mục cho bảng `quan_ly`
--
ALTER TABLE `quan_ly`
  ADD PRIMARY KEY (`idTK`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `idDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `idKhachHang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `kho_sach`
--
ALTER TABLE `kho_sach`
  MODIFY `idSach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT cho bảng `menu_bar`
--
ALTER TABLE `menu_bar`
  MODIFY `idItem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT cho bảng `phan_loai`
--
ALTER TABLE `phan_loai`
  MODIFY `idLoaiSach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `quan_ly`
--
ALTER TABLE `quan_ly`
  MODIFY `idTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `kho_sach`
--
ALTER TABLE `kho_sach`
  ADD CONSTRAINT `kho_sach_ibfk_1` FOREIGN KEY (`idLoaiSach`) REFERENCES `phan_loai` (`idLoaiSach`);
COMMIT";
		mysqli_multi_query($con2,$dulieu);
		echo "Ghi dữ liệu thành công";
		}
	}
 ?>
