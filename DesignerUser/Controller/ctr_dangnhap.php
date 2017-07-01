<?php
        include_once ("../../Models/model_dangnhap.php");
//        if(isset($_SESSION["user"])){
//            if(isset($_GET["logout"])){
//                unset($_SESSION["user"]);
//                unset($_SESSION["role"]);
//            }
//        }
        if(isset($_POST["btnlogin"])){
            $user = $_POST["user"];
            $pass = $_POST["password"];
            if(isset($_POST["remember"]))
                $remember = $_POST["remember"];
            if(kiemTraDN($user,$pass) != null){
                $value = mysqli_fetch_assoc(kiemTraDN($user,$pass));
                $_SESSION["idUser"] = $value["Id"];
                $_SESSION["user"]= $value["Ten"];
                $_SESSION["role"]=$value["Quyen"];
            }else {
                echo '<script> window.location = "dangky.php"; </script>';
            }
        }
        if(isset($_POST["btndangky"])){
            $hoten = $_POST["hoten"];
            $ngaysinh = $_POST["ngaysinh"];
            $giotinh = $_POST["gioitinh"];
            $gt="";
            if($giotinh == "nam"){
                $gt = 1;
            }else if($giotinh=="nu"){
                $gt = 0;
            }else $gt = null;
            $dienthoai = $_POST["dienthoai"];
            $email = $_POST["email"];
            $diachi = $_POST["diachi"];
            $taikhoan = $_POST["taikhoan"];
            $matkhau = $_POST["matkhau"];
            if(dangKy($hoten,$ngaysinh,$gt,$dienthoai,$email,$diachi,$taikhoan,$matkhau)){
                echo '
                <div class="alert alert-danger alert-dismissable ">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong>Tạo Tài Khoản THÀNH CÔNG</strong></div>
                ';
            }else{
                echo '
                <div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong>Tạo Tài Khoản THẤT BẠI</strong></div>
                ';
            }
        }
        if(isset($_GET["logout"])){
            unset($_SESSION["idUser"]);
            unset($_SESSION["user"]);
            unset($_SESSION["role"]);
            echo '<script> window.location = "Home.php"; </script>';
        }
//        if(isset($_SESSION["role"])==1){
//            header("location:Admin/index.php");
//        }
?>