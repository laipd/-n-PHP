<?php
    @session_start();
    if(isset($_GET["sanpham"])){
        $check = false;
        $masp = $_GET["sanpham"];
        $size = $_GET["size"];
        $gia = $_GET["gia"];
        if(isset($_SESSION["gio"]) && is_array($_SESSION["gio"])){
            $count = count($_SESSION['gio']);
            for ($i = 0; $i < $count; $i++) {
                if ($_SESSION['gio'][$i]["ma"] == $masp && $_SESSION['gio'][$i]["size"] == $size) {
                    $_SESSION['gio'][$i]["soluong"] += 1;
                    $check = true;
                    break;
                }
            }
            if($check == false){
                $_SESSION['gio'][$count]["ma"] = $masp;
                $_SESSION['gio'][$count]["gia"] = $gia;
                $_SESSION['gio'][$count]["size"] = $size;
                $_SESSION['gio'][$count]["soluong"] = 1;
            }
        }else{
            $_SESSION['gio'] = array();
            $_SESSION['gio'][0]["ma"] = $masp;
            $_SESSION['gio'][0]["gia"] = $gia;
            $_SESSION['gio'][0]["size"] = $size;
            $_SESSION['gio'][0]["soluong"] = 1;
        }
        echo $count = count($_SESSION['gio']);
        thayDoiTien();
    }
    if(isset($_GET["huyca"])){
        unset($_SESSION['gio']);
        echo '<script> window.location = "giohang.php"; </script>';
    }
    if(isset($_GET["vitri"])){
        //session_destroy();
        $j = $_GET["vitri"];
        for ($i=0;$i<count($_SESSION['gio']);$i++){
            if($i == $j){

            }
        }
        unset($_SESSION['gio'][$j]);
        thayDoiTien();
        echo '<script> window.location = "giohang.php"; </script>';
    }
    if(isset($_GET["thaydoi"])){

        $soluong = $_GET["soluong"];
        $ma = $_GET["thaydoi"];
        $size = $_GET["size"];
        echo '<script> window.location = "giohang.php"; </script>';
    }
    if(isset($_GET["thaydoisoluong"])){
        echo '<script> window.location = "Home.php"; </script>';
        $ma = $_GET["thaydoisoluong"];
        $size = $_GET["size"];
        $stt = $_GET["stt"];
        $count = count($_SESSION['gio']);
        if($stt == 1){
            for ($i = 0; $i < $count; $i++) {
                if ($_SESSION['gio'][$i]["ma"] == $ma && $_SESSION['gio'][$i]["size"] == $size) {
                    $_SESSION['gio'][$i]["soluong"] += 1;
                    if($_SESSION['gio'][$i]["soluong"] > 5){
                        $_SESSION['gio'][$i]["soluong"] = 5;
                    }
                    break;
                }
            }
        }else{
            for ($i = 0; $i < $count; $i++) {
                if ($_SESSION['gio'][$i]["ma"] == $ma && $_SESSION['gio'][$i]["size"] == $size) {
                    $_SESSION['gio'][$i]["soluong"] -= 1;
                    if($_SESSION['gio'][$i]["soluong"]==0){
                        $_SESSION['gio'][$i]["soluong"] = 1;
                    }
                    break;
                }
            }
        }
        thayDoiTien();
        echo '<script> window.location = "giohang.php"; </script>';
    }
        // thanh toán
    if(isset($_GET["thanhtoanhang"])){
        if(isset($_SESSION["user"])){
            $tong = count($_SESSION['gio']);
            $makh = $_SESSION["idUser"];
            $thanhtien = $_SESSION["tongtien"];
            $tongsoluong = $_SESSION["tongso"];
            $mahd = taoHoaDon($makh,$thanhtien,$tongsoluong,0);
            if($mahd !=null){
                for($i=0;$i<$tong;$i++){
                    $masp = $_SESSION['gio'][$i]["ma"];
                    $soluong = $_SESSION['gio'][$i]["soluong"];
                    $size = $_SESSION['gio'][$i]["size"];
                    $tien = $_SESSION['gio'][$i]["gia"] * $_SESSION['gio'][$i]["soluong"];
                    if(taoChiTietHoaDon($mahd,$masp,$size,$soluong,$tien)){
                        $thongbao_hoadon = 1;
                    }else {
                        $thongbao_hoadon = 0;
                    }
                }
                unset($_SESSION['gio']);
            }else{
                $thongbao_hoadon = 0;
            }
        }else{
            echo '<script> window.location = "thongtinmuahang.php"; </script>';
        }
}

    function thayDoiTien(){
        $thanhtien = 0; $tongso = 0;
        $tong = count($_SESSION['gio']);
        for ($i = 0;$i<$tong;$i++){
            $masp = $_SESSION['gio'][$i]["ma"];
            $thanhtien+= $_SESSION['gio'][$i]["soluong"]*$_SESSION['gio'][$i]["gia"];
            $tongso+= $_SESSION['gio'][$i]["soluong"];
        }
        $_SESSION["tongtien"] = $thanhtien;
        $_SESSION["tongso"] = $tongso;

    }
?>