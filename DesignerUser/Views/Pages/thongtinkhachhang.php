

<?php require_once ("../Layout/Library.php"); ?>
<!-- Navigation -->
<?php require_once ("../Layout/Menu.php"); ?>

<div class="container" id="background_container" style="color:white;">
    <?php
    require_once ("Login.php");
    ?>
    <?php
    include_once ("../../Controller/ctr_hoadon.php");
        if(isset($_SESSION["mua"])) {
            $ten = $_SESSION["mua"]["ten"];
            $ma = $_SESSION["mua"]["ma"];
            $size = $_SESSION["mua"]["size"];
            $soluong = $_SESSION["mua"]["soluong"];
            $tien = $_SESSION["mua"]["tongtien"];
            ?>
            <div class="row">
                <div class="box-header with-border">
                    <h3 class="box-title" style="text-align: center">Sản Phẩm Quý Khách Mua </h3>
                </div>
                <table class="table table-bordered" style="color: white">
                    <thead>
                    <tr>
                        <td> Mã</td>
                        <td> Tên Sản Phẩm</td>
                        <td> Size</td>
                        <td> Số Lượng</td>
                        <td> Thành Tiên</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td> <?php echo $ma; ?></td>
                        <td> <?php echo $ten; ?></td>
                        <td> <?php echo $size; ?></td>
                        <td> <?php echo $soluong; ?></td>
                        <td> <?php echo $tien; ?> VND</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="container" style="margin-left:150px">
                <h2 style="margin-left:250px; margin-bottom: 20px;">Thông Tin Khách Hàng </h2>
                <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="hoten">Họ Tên</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="hoten" placeholder="Họ Và Tên" name="hoten"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="gioitinh">Giới Tính</label>
                        <div class="col-sm-5">
                            <label class="radio-inline">
                                <input type="radio" name="gioitinh" value="name" checked>Nam
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gioitinh" value="nu">Nữ
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gioitinh" value="khac">Khác
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="dienthoai">Điện Thoại Liên Hệ</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" id="dienthoai" placeholder="Điện Thoại"
                                   name="dienthoai" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email xách nhận</label>
                        <div class="col-sm-5">
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="diachi">Đĩa chỉ nhận hàng</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="diachi" placeholder="Đĩa chỉ" name="diachi"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default" style="width: 24%" name="btndatmua">Đặt Mua
                            </button>
                            <button type="reset" class="btn btn-default" style="width: 24%">Đặt Lại</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php
        }else{
            if(isset($taohoadonh)){
                echo '<div class="row" style="margin: 100px 100px; font-size: 20px; height: 300px;"> 
                          <h3> Quý khách đặt hàng thành công. cảm ơn quý khác đã mua hàng tại cửa hàng chúng tôi.
                            Quý khách vui lòng giữ liên lạc để chúng tôi có thể giao hàng sớm nhất có thể </h3>
                        </div>';
            }else{
                echo '<div class="row" style="margin-top: 100px; font-size: 20px;"> 
                            Đã có lỗi 
                        </div>';
            }
        }
    ?>
    <?php require_once ("../Layout/Footer.php"); ?>
</div>
