<?php
    include_once ("model_ketnoi.php");
    include_once ("model_sanpham.php");
    function taoHoaDon($makhach,$tien,$soluong,$trangthai){
        $ma = layMacDinh();
        $date = date('Y-m-d');
        $sql = "INSERT INTO tbl_hoadon VALUES ('$ma','$makhach','$date','$tien','$soluong','$trangthai')";
        $result = mysqli_query(connect(),$sql);
        if($result) return $ma;
        else return false;
    }
    function taoChiTietHoaDon($mahoadon,$masanpham,$size,$soluong,$thanhtien){
        $tensanpham = getNamSp($masanpham);
        $sql = "INSERT INTO tbl_chitiethoadon VALUES ('$mahoadon','$masanpham','$tensanpham','$size','$soluong','$thanhtien')";
        $result = mysqli_query(connect(),$sql);
        if($result) return true;
        else return false;
    }
    function layMacDinh(){
        $sql = "SELECT * FROM tbl_hoadon";
        $result = mysqli_query(connect(),$sql);
        $row = mysqli_num_rows($result);
        if($row < 10){
            return "HD0".$row;
        }else if($row >=10){
            return "HD".$row;
        }
    }
?>