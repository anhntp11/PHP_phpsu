<?php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection to database failed: " . $mysqli_error());
}
// Create KHACHHANG table
$sqlCreateKHACHHANG = "CREATE TABLE KHACHHANG (
    MAKH char(4) PRIMARY KEY,
    HOTEN VARCHAR(255),
    DCHI VARCHAR(255),
    SODT VARCHAR(20),
    NGSINH DATE,
    DOANHSO DECIMAL(10, 2),
    NGDK DATE
)";

if (mysqli_query($conn, $sqlCreateKHACHHANG)) {
    echo "Successfully created KHACHHANG table<br>";
} else {
    echo "Error creating KHACHHANG table: " . mysqli_error($conn) . "<br>";
}

// Create NHANVIEN table
$sqlCreateNHANVIEN = "CREATE TABLE NHANVIEN (
    MANV char(4) PRIMARY KEY,
    HOTEN VARCHAR(255),
    NGVL DATE,
    SODT VARCHAR(20)
)";

if (mysqli_query($conn, $sqlCreateNHANVIEN)) {
    echo "Successfully created NHANVIEN table<br>";
} else {
    echo "Error creating NHANVIEN table: " . mysqli_error($conn) . "<br>";
}

// Create SANPHAM table
$sqlCreateSANPHAM = "CREATE TABLE SANPHAM (
    MASP char(4) PRIMARY KEY,
    TENSP VARCHAR(255),
    DVT VARCHAR(20),
    NUOCSX VARCHAR(255),
    GIA DECIMAL(10, 2)
)";

if (mysqli_query($conn, $sqlCreateSANPHAM)) {
    echo "Successfully created SANPHAM table<br>";
} else {
    echo "Error creating SANPHAM table: " . mysqli_error($conn) . "<br>";
}

// Create HOADON table
$sqlCreateHOADON = "CREATE TABLE HOADON (
    SOHD int PRIMARY KEY,
    NGHD DATE,
    MAKH char(4),
    MANV char(4),
    TRIGIA DECIMAL(10, 2),
    FOREIGN KEY (MAKH) REFERENCES KHACHHANG(MAKH) ON DELETE CASCADE,
    FOREIGN KEY (MANV) REFERENCES NHANVIEN(MANV) ON DELETE CASCADE
)";

if (mysqli_query($conn, $sqlCreateHOADON)) {
    echo "Successfully created HOADON table<br>";
} else {
    echo "Error creating HOADON table: " . mysqli_error($conn) . "<br>";
}

// Create CTHD table
$sqlCreateCTHD = "CREATE TABLE CTHD (
    SOHD int,
    MASP char(4),
    SL int,
    PRIMARY KEY (SOHD, MASP),
    FOREIGN KEY (SOHD) REFERENCES HOADON(SOHD) ON DELETE CASCADE,
    FOREIGN KEY (MASP) REFERENCES SANPHAM(MASP) ON DELETE CASCADE
)";

if (mysqli_query($conn, $sqlCreateCTHD)) {
    echo "Successfully created CTHD table<br>";
} else {
    echo "Error creating CTHD table: " . mysqli_error($conn) . "<br>";
}



// INSERT to NHANVIEN
$sqlInsertNhanVien = "INSERT INTO NHANVIEN (MANV, HOTEN, NGVL, SODT) VALUES
                            ('NV01', 'Nguyen Nhu Nhut', '2006-04-13', '0927345678'),
                            ('NV02', 'Le Thi Phi Yen', '2006-04-21', '0987567390'),
                            ('NV03', 'Nguyen Van B', '2006-04-27', '0997047382'),
                            ('NV04', 'Ngo Thanh Tuan', '2006-04-24', '0913758498'),
                            ('NV05', 'Nguyen Thi Truc Thanh', '2006-07-20', '0918590387');";

if (mysqli_query($conn, $sqlInsertNhanVien)) {
    echo "Successfully added data to the NHANVIEN table<br>";
} else {
    echo "Error adding data to the NHANVIEN table: " . mysqli_error($conn) . "<br>";
}

// INSERT to KHACHHANG
$sqlInsertKhachHang = "INSERT INTO `KHACHHANG`(`MAKH`, `HOTEN`, `DCHI`, `SODT`, `NGSINH`, `DOANHSO`, `NGDK`) VALUES
                            ('KH01','Nguyen Van A','731 Tran Hung Dao, Q5, TpHCM','08823451','1960-10-22','13,060,000','2006-07-22'),
                            ('KH02','Tran Ngoc Han','23/5 Nguyen Trai, Q5, TpHCM','0908256478','1974-04-03','280,000','2006-07-30'),
                            ('KH03','Tran Ngoc Linh','45 Nguyen Canh Chan, Q1, TpHCM','0938776266','1980-06-12','3,860,000','2006-08-05'),
                            ('KH04','Tran Minh Long','50/34 Le Dai Thanh, Q10, TpHCM','0917325476','1965-03-09','250,000','2006-10-20'),
                            ('KH05','Le Nhat Minh','30 Truong Dinh, Q3, TpHCM','08246108','1950-03-10','21,000','2006-10-28'),
                            ('KH06','Le Hoai Thuong','227 Nguyen Van Cu, Q5, TpHCM','08631738','1981-12-31','915,000','2006-11-24'),
                            ('KH07','Nguyen Van Tam','32/3 Tran Binh Trong, Q5, TpHCM','0916783565','1971-06-04','12,500','2006-06-01'),
                            ('KH08','Nguyen Van Ba','123 Nguyen Hue, Q1, TpHCM','0938435756','1972-01-10','450,000','2006-12-01'),
                            ('KH09','Tran Van Hai','456 Nguyen Trai, Q5, TpHCM','0938435757','1973-02-11','650,000','2007-01-01'),
                            ('KH10','Le Van Hung','789 Nguyen Canh Chan, Q1, TpHCM','0938435758','1974-03-12','850,000','2007-01-02');";

if (mysqli_query($conn, $sqlInsertKhachHang)) {
    echo "Successfully added data to the KHACHHANG table<br>";
} else {
    echo "Error adding data to the KHACHHANG table: " . mysqli_error($conn) . "<br>";
}

// INSERT to SANPHAM
$sqlInsertSanPham = "INSERT INTO SANPHAM (MASP,TENSP, DVT, NUOCSX, GIA) VALUES
                        ('SP01','But chi', 'cay', 'Viet Nam', '5,000'),
                        ('SP02','But chi', 'hop', 'Viet Nam', '30,000'),
                        ('SP03','But bi', 'cay', 'Viet Nam', '5,000'),
                        ('SP04','But bi', 'hop', 'Trung Quoc', '7,000'),
                        ('SP05','Tap 100 giay mong', 'quyen', 'Trung Quoc', '2,500'),
                        ('SP06','Tap 200 giay mong', 'quyen', 'Trung Quoc', '4,500'),
                        ('SP07','Tap 100 giay mong', 'quyen', 'Viet Nam', '3,000'),
                        ('SP08','Tap 200 giay mong', 'quyen', 'Viet Nam', '5,500'),
                        ('SP09','Tap 100 giay mong', 'chuc', 'Viet Nam', '23,000'),
                        ('SP10','Tap 200 giay mong', 'chuc', 'Viet Nam', '53,000');";

if (mysqli_query($conn, $sqlInsertSanPham)) {
    echo "Successfully added data to the SANPHAM table<br>";
} else {
    echo "Error adding data to the SANPHAM table: " . mysqli_error($conn) . "<br>";
}

// INSERT to HOADON
$sqlInsertHoaDon = "INSERT INTO HOADON (SOHD, NGHD, MAKH, MANV, TRIGIA) VALUES
                        (1, '2023-06-15', 'KH01', 'NV01', 100000),
                        (2, '2023-06-16', 'KH02', 'NV02', 200000),
                        (3, '2023-06-17', 'KH03', 'NV03', 300000),
                        (4, '2023-06-18', 'KH04', 'NV04', 400000),
                        (5, '2023-06-19', 'KH05', 'NV04', 500000),
                        (6, '2023-06-20', 'KH06', 'NV03', 600000),
                        (7, '2023-06-21', 'KH07', 'NV02', 700000),
                        (8, '2023-06-22', 'KH08', 'NV01', 800000);";

if (mysqli_query($conn, $sqlInsertHoaDon)) {
    echo "Successfully added data to the HOADON table<br>";
} else {
    echo "Error adding data to the HOADON table: " . mysqli_error($conn) . "<br>";
}

// INSERT to CTHD
$sqlInsertCTHD = "INSERT INTO CTHD (SOHD, MASP, SL) VALUES
                    (1,'SP01', 1),
                    (1,'SP02', 2),
                    (2,'SP03', 3),
                    (2,'SP04', 4),
                    (3,'SP01', 5),
                    (3,'SP03', 6),
                    (4,'SP03', 7),
                    (4,'SP01', 8),
                    (5,'SP02', 9),
                    (5,'SP04', 10),
                    (6,'SP010', 11),
                    (6,'SP08', 12),
                    (7,'SP09', 13),
                    (7,'SP07', 14),
                    (8,'SP06', 15),
                    (8,'SP05', 16);";

if (mysqli_query($conn, $sqlInsertCTHD)) {
    echo "Successfully added data to the CTHD table<br>";
} else {
    echo "Error adding data to the CTHD table: " . mysqli_error($conn) . "<br>";
}

// add property GHICHU to SANPHAM
$sqlAddColumnGHICHU = "ALTER TABLE SANPHAM ADD COLUMN GHICHU VARCHAR(20)";

if (mysqli_query($conn, $sqlAddColumnGHICHU)) {
    echo "Successful<br>";
} else {
    echo "Error: " . mysqli_error($conn) . "<br>";
}

// add property LOAIKH to KHACHHANG
$sqlAddColumnLOAIKH = "ALTER TABLE KHACHHANG ADD COLUMN LOAIKH TINYINT";

if (mysqli_query($conn, $sqlAddColumnLOAIKH)) {
    echo "Successful<br>";
} else {
    echo "Error: " . mysqli_error($conn) . "<br>";
}

// Update name "Nguyễn Văn B" for KHACHHANG with id KH01
$sqlUpdateKH01 = "UPDATE KHACHHANG SET HOTEN = 'Nguyễn Văn B' WHERE MAKH = 'KH01'";

if (mysqli_query($conn, $sqlUpdateKH01)) {
    echo "Successful<br>";
} else {
    echo "Error: " . mysqli_error($conn) . "<br>";
}

// Update name "Nguyễn Văn Hoan" for KHACHHANG with id KH09 and NGDK = 2007
$sqlUpdateKH09 = "UPDATE KHACHHANG SET HOTEN = 'Nguyễn Văn Hoan' WHERE MAKH = 'KH09' AND YEAR(NGDK) = 2007";

if (mysqli_query($conn, $sqlUpdateKH09)) {
    echo "Successful<br>";
} else {
    echo "Error: " . mysqli_error($conn) . "<br>";
}

// Change the data type of the GHICHU attribute in the SANPHAM relation to varchar(100)
$sqlModifyColumnGHICHU = "ALTER TABLE SANPHAM MODIFY COLUMN GHICHU VARCHAR(100)";

if (mysqli_query($conn, $sqlModifyColumnGHICHU)) {
    echo "Modified GHICHU attribute in SANPHAM relation successfully<br>";
} else {
    echo "Error during the modification of GHICHU attribute in SANPHAM relation: " . mysqli_error($conn) . "<br>";
}

// Delete a record from the NHANVIEN table
$sqlDeleteNhanVien = "DELETE FROM NHANVIEN WHERE MANV = 'NV05'";

if (mysqli_query($conn, $sqlDeleteNhanVien)) {
    echo "Deleted data from NHANVIEN table successfully<br>";
} else {
    echo "Error while deleting data from NHANVIEN table: " . mysqli_error($conn) . "<br>";
}

// Delete a record from the KHACHHANG table
$sqlDeleteKhachHang = "DELETE FROM KHACHHANG WHERE MAKH = 'KH10'";

if (mysqli_query($conn, $sqlDeleteKhachHang)) {
    echo "Deleted data from KHACHHANG table successfully<br>";
} else {
    echo "Error while deleting data from KHACHHANG table: " . mysqli_error($conn) . "<br>";
}

// Delete a record from the SANPHAM table
$sqlDeleteSanPham = "DELETE FROM SANPHAM WHERE MASP = 'SP10'";

if (mysqli_query($conn, $sqlDeleteSanPham)) {
    echo "Deleted data from SANPHAM table successfully<br>";
} else {
    echo "Error while deleting data from SANPHAM table: " . mysqli_error($conn) . "<br>";
}

// Delete a record from the HOADON table
$sqlDeleteHoaDon = "DELETE FROM HOADON WHERE SOHD = 8";

if (mysqli_query($conn, $sqlDeleteHoaDon)) {
    echo "Deleted data from HOADON table successfully<br>";
} else {
    echo "Error while deleting data from HOADON table: " . mysqli_error($conn) . "<br>";
}

// Delete a record from the CTHD table
$sqlDeleteCTHD = "DELETE FROM CTHD WHERE SOHD = 8 AND MASP = 'SP05'";

if (mysqli_query($conn, $sqlDeleteCTHD)) {
    echo "Deleted data from CTHD table successfully<br>";
} else {
    echo "Error while deleting data from CTHD table: " . mysqli_error($conn) . "<br>";
}

// Close connection
mysqli_close($conn);


?>