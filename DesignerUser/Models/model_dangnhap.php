<?php
    include_once ("model_ketnoi.php");

    function kiemTraDN($user,$pass){
        $sql = "SELECT * FROM tbl_nguoidung WHERE Ten='$user' AND MatKhau='$pass'";
        $query = mysqli_query(connect(),$sql);
        if($row = mysqli_num_rows($query) > 0){
            return $query;
        }else return null;
    }
    function dangKy($hoten,$ngaysinh,$giotinh,$dienthoai,$email,$diachi,$taikhoan,$matkhau){
        $id = idDefault();
        $sql = "INSERT INTO tbl_khachang VALUES ('$id','$hoten','$ngaysinh','$giotinh','$dienthoai','$email','$diachi')";
        if($query = mysqli_query(connect(),$sql)){
            $sql1 = "INSERT INTO tbl_nguoidung VALUES ('$id','$taikhoan','$matkhau','0')";
            if($query1 = mysqli_query(connect(),$sql1)){
                return true;
            }
        }else return false;

    }
    function taoKhachHang($hoten,$goitinh,$dienthoai,$email,$diachi){
        $id = idDefault();
        $sql = "INSERT INTO tbl_khachang VALUES ('$id','$hoten',null,'$goitinh','$dienthoai','$email','$diachi')";
        $result = mysqli_query(connect(),$sql);
        if($result) return $id;
        else return null;
    }
    function idDefault(){
        $sql = "SELECT * FROM tbl_khachang";
        $query = mysqli_query(connect(),$sql);
        $row = mysqli_num_rows($query);
        return "KH".$row;
    }
?>