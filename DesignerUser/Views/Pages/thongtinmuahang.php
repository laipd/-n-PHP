

<?php require_once ("../Layout/Library.php"); ?>
<!-- Navigation -->
<?php require_once ("../Layout/Menu.php"); ?>

<div class="container" id="background_container" style="color:white;">
    <?php
    require_once ("Login.php");
    include_once ("../../Controller/ctr_hoadon.php");
    ?>
    <?php
        if(isset($_SESSION['gio'])){
    ?>
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
                        <button type="submit" class="btn btn-default" style="width: 24%" name="btnmaugiohang">Đặt Mua
                        </button>
                        <button type="reset" class="btn btn-default" style="width: 24%">Đặt Lại</button>
                    </div>
                </div>
            </form>
        </div>
    <?php
    }else if(isset($thongbao_hoadon)){
            if($thongbao_hoadon==1){
                echo '<div class="row" style="margin: 100px 100px; font-size: 20px; height: 300px;">
                          <h3> Quý khách đặt hàng thành công. cảm ơn quý khác đã mua hàng tại cửa hàng chúng tôi.
                            Quý khách vui lòng giữ liên lạc để chúng tôi có thể giao hàng sớm nhất có thể </h3>
                        </div>';
            }
        }else{
            echo '<div class="row" style="margin: 100px 100px; font-size: 20px; height: 300px;">
                          <h3> Chúng tôi rất xin lỗi do hệ thống gặp sự cố nên đơn hàng đặt không thành công.Cảm ơn quý khách </h3>
                        </div>';
        }
    ?>
    <?php require_once ("../Layout/Footer.php"); ?>
</div>
