
<html>
<body>
<?php
include_once("../../Models/model_hoadon.php");
include_once("../../Models/model_dangnhap.php");

if(isset($_POST["btnmua"])){
    $masp = $_POST["masp"];
    $ten = $_POST["tensp"];
    $soluong = $_POST["soluong"];
    $tien = $_POST["tongtien"];
    $size = $_POST["size"];
    if(!isset($_SESSION["user"])){
        $_SESSION["mua"]["ten"] = $ten;
        $_SESSION["mua"]["ma"] = $masp;
        $_SESSION["mua"]["size"] = $size;
        $_SESSION["mua"]["soluong"] = $soluong;
        $_SESSION["mua"]["tongtien"] = $tien;
        //header('Location: thongtinkhachhang.php',true,404);
        echo '<script> window.location = "thongtinkhachhang.php"; </script>';
    }else{
        $makhach = $_SESSION["idUser"];
        $mahd = taoHoaDon($makhach,$tien,$soluong,0);
        if( $mahd!= false){
            if(taoChiTietHoaDon($mahd,$masp,$size,$soluong,$tien)){
                $hoadon_thongbao = "1";
            }else {
               $hoadon_thongbao = "0";
            }
        }
    }
}

// kiểm tra háo đơn

if(isset($_POST["btndatmua"])){
    $tenkh = $_POST["hoten"];
    $goitinh = $_POST["gioitinh"];
    if($goitinh=="nam"){
        $goitinh = 1;
    }else if($goitinh == "nu"){
        $goitinh = 0;
    }else {
        $goitinh = null;
    }
    if(isset($_SESSION['mua'])) {
        $ten = $_SESSION["mua"]["ten"];
        $ma = $_SESSION["mua"]["ma"];
        $size = $_SESSION["mua"]["size"];
        $soluong = $_SESSION["mua"]["soluong"];
        $tien = $_SESSION["mua"]["tongtien"];
        $dienthoai = $_POST["dienthoai"];
        $email = $_POST["email"];
        $diachi = $_POST["diachi"];
        $makh = taoKhachHang($tenkh, $goitinh, $dienthoai, $email, $diachi);
        if ($makh != null) {
            $mahd = taoHoaDon($makh, $tien, $soluong, 0);
            if ($mahd != null) {
                if (taoChiTietHoaDon($mahd, $ma, $size, $soluong, $tien)) {
                    $taohoadonh = "";
                    unset($_SESSION['mua']);
                    unset($_POST["btndatmua"]);
                }
            }
        }
    }
}

if(isset($_POST["btnmaugiohang"])){
    if(isset($_SESSION['gio'])) {
        $tenkh = $_POST["hoten"];
        $goitinh = $_POST["gioitinh"];
        if ($goitinh == "nam") {
            $goitinh = 1;
        } else if ($goitinh == "nu") {
            $goitinh = 0;
        } else {
            $goitinh = null;
        }
        $dienthoai = $_POST["dienthoai"];
        $email = $_POST["email"];
        $diachi = $_POST["diachi"];
        $tong = count($_SESSION['gio']);
        $thanhtien = $_SESSION["tongtien"];
        $tongsoluong = $_SESSION["tongso"];
        $makh = taoKhachHang($tenkh,$goitinh,$dienthoai,$email,$diachi);
        if($makh !=null) {
            $mahd = taoHoaDon($makh, $thanhtien, $tongsoluong, 0);
            if ($mahd != null) {
                for ($i = 0; $i < $tong; $i++) {
                    $masp = $_SESSION['gio'][$i]["ma"];
                    $soluong = $_SESSION['gio'][$i]["soluong"];
                    $size = $_SESSION['gio'][$i]["size"];
                    $tien = $_SESSION['gio'][$i]["gia"] * $_SESSION['gio'][$i]["soluong"];
                    if (taoChiTietHoaDon($mahd, $masp, $size, $soluong, $tien)) {
                        $thongbao_hoadon = 1;
                    } else {
                        $thongbao_hoadon = 0;
                    }
                }
                unset($_SESSION['gio']);
            } else {
                $thongbao_hoadon = 0;
            }
        }
    }
}
?>
</body>
</html>
