<?php
    include_once ("model_ketnoi.php");
    function getAll(){
        $sql = "SELECT * FROM tbl_sanpham";
        if($result = mysqli_query(connect(),$sql)){
            if(mysqli_num_rows($result)>0){
                return $result;
            }else $arr = null;
        }
        return $arr;
    }
    function getSP($id){
        $sql = "SELECT * FROM tbl_sanpham WHERE Ma='$id'";
        if($result = mysqli_query(connect(),$sql)) {
            if (mysqli_num_rows($result) > 0) {
                return $result;
            } else return null;
        }
    }
    function getPrice($masp){
        $sql = "SELECT * FROM tbl_sanpham WHERE Ma='$masp'";
        $result = mysqli_query(connect(),$sql);
        if($result){
            while ($row = mysqli_fetch_assoc($result)){
                return $row["GiaBan"];
            }
        }else return 0;
    }
    function getNamSp($masp){
        $sql = "SELECT * FROM tbl_sanpham WHERE Ma='$masp'";
        $result = mysqli_query(connect(),$sql);
        if($result){
            while ($row = mysqli_fetch_assoc($result)){
                return $row["Ten"];
            }
        }else return 0;
    }
    function phanTrang($start,$count,$search,$valuesearch){
    if($search==""){
        $sql = "SELECT * FROM tbl_sanpham LIMIT $start , $count";
    }
    else {
        $sql = "SELECT * FROM tbl_sanpham WHERE $search='$valuesearch' LIMIT $start , $count";
    }
    if($result = mysqli_query(connect(),$sql)){
        if(mysqli_num_rows($result)>0){
            $arr = $result;
        }else $arr = null;
    }
    return $arr;
}
    function laySoSP($start,$count){
        $sql = "SELECT * FROM tbl_sanpham  LIMIT $start , $count";
        if($result = mysqli_query(connect(),$sql)){
            if(mysqli_num_rows($result)>0){
                return $result;
            }else return null;
        }else return "error";
    }
    function laySoTrang($count){
        $sql = "SELECT * FROM tbl_luongsanpham";
        $result = mysqli_query(connect(),$sql);
        $tong = mysqli_num_rows($result);
        if((int)($tong%$count) > 0){
            $tong = (int)($tong/$count) + 1;
        }else $tong = (int)($tong/$count);
        return $tong;
    }
    function getSpTop(){
        $sql = "SELECT * FROM tbl_sanpham AS sp INNER JOIN tbl_chitiethoadon AS hd ON sp.Ma = hd.MaSP LIMWT ";
        if($result = mysqli_query(connect(),$sql)) {
            if (mysqli_num_rows($result) > 0) {
                return $result;
            } else return null;
        }
    }
    function spTimKiem($search,$valuesearch){
    }
    function layAoSoMi($stt){
        if($stt == 0){ //lấy áo sơ mi nam
            $sql = "SELECT * FROM tbl_sanpham WHERE LoaiSP = 'sominam'";
            $result = mysqli_query(connect(),$sql);
            if(mysqli_num_rows($result)>0){
                return $result;
            }else return null;
        }else if($stt){ // lấy áo sơ mi nữ
            $sql = "SELECT * FROM tbl_sanpham WHERE LoaiSP = 'sominu'";
            $result = mysqli_query(connect(),$sql);
            if(mysqli_num_rows($result)>0){
                return $result;
            }else return null;
        }
    }
    function layAoPhong($stt){
        if($stt == 0){ // áo phông nam
            $sql = "SELECT * FROM tbl_sanpham WHERE LoaiSP = 'aophongnam'";
            $result = mysqli_query(connect(),$sql);
            if(mysqli_num_rows($result)>0){
                return $result;
            }else return null;
        }else if($stt){ // áo phông nữ
            $sql = "SELECT * FROM tbl_sanpham WHERE LoaiSP = 'aophongnu'";
            $result = mysqli_query(connect(),$sql);
            if(mysqli_num_rows($result)>0){
                return $result;
            }else return null;
        }
    }
    function layQuanThun($stt){
        if($stt == 0){ // quần thun nam
            $sql = "SELECT * FROM tbl_sanpham WHERE LoaiSP = 'quanthunnam'";
            $result = mysqli_query(connect(),$sql);
            if(mysqli_num_rows($result)>0){
                return $result;
            }else return null;
        }else if($stt){ // quần thun nư
            $sql = "SELECT * FROM tbl_sanpham WHERE LoaiSP = 'quanthunnu'";
            $result = mysqli_query(connect(),$sql);
            if(mysqli_num_rows($result)>0){
                return $result;
            }else return null;
        }
    }
    function layQuanBo($stt){
        if($stt == 0){ //quần bò nam
            $sql = "SELECT * FROM tbl_sanpham WHERE LoaiSP = 'quanbonam'";
            $result = mysqli_query(connect(),$sql);
            if(mysqli_num_rows($result)>0){
                return $result;
            }else return null;
        }else if($stt){ // quần bò nữ
            $sql = "SELECT * FROM tbl_sanpham WHERE LoaiSP = 'quanbonu'";
            $result = mysqli_query(connect(),$sql);
            if(mysqli_num_rows($result)>0){
                return $result;
            }else return null;
        }
    }
    function sanphanKhuyenMai(){
        $sql = "SELECT * FROM tbl_sanpham AS sp INNER JOIN  tbl_khuyenmai AS km ON sp.Ma = km.MaSP";
        $result = mysqli_query(connect(),$sql);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }else return null;
    }
    function sanPhanBanChay($stt){
        if($stt == 0){ // trang chủ

        }
        if($stt == 1){ // sơ mi nam

        }
        if($stt == 2){ // phong nam

        }
        if($stt == 3){ // thun nam

        }
        if($stt == 4){ // bò nam

        }
        if($stt == 5){ // sơ mi nữ

        }
        if($stt == 6){ // phông nữ

        }
        if($stt == 7){ // thu nữ

        }
        if($stt == 8){ // bò nữ

        }
    }

?>