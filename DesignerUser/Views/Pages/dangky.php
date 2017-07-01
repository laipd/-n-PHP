<?php require_once ("../Layout/Library.php"); ?>


<body>
<!-- Navigation -->
<?php require_once ("../Layout/Menu.php"); ?>
<!-- Page Content -->
<div class="container" id="background_container" style="color: #f5f5f5">
    <?php
    require_once ("Login.php");
    ?>
    <div style="margin-top: 20px;">
        <?php require_once ("../../Controller/ctr_dangnhap.php"); ?>
    </div>

    <div class="container" style="margin-left:150px">
        <h2 style="margin-left:250px; margin-bottom: 20px;">Đăng Ký Tài Khoản </h2>
        <form class="form-horizontal" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="hoten">Họ Tên</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="hoten" placeholder="Họ Và Tên" name="hoten" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="ngaysinh">Ngày Sinh</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" id="ngaysinh" placeholder="Ngày Sinh" name="ngaysinh" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="gioitinh">Giới Tính</label>
                <div class="col-sm-5">
                    <label class="radio-inline">
                        <input type="radio" name="gioitinh" value="name" checked >Nam
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
                <label class="control-label col-sm-2" for="dienthoai">Số Điện Thoại</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="dienthoai" placeholder="Điện Thoại" name="dienthoai" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="diachi">Đĩa chỉ</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="diachi" placeholder="Đĩa chỉ" name="diachi" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="taikhoan">Tài Khoản</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="taikhoan" placeholder="Tài Khoản "name="taikhoan" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="matkhau">Mật Khẩu</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="matkhau" placeholder="Mật Khẩu" name="matkhau" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nhaplai">Nhập Lại Mật Khẩu:</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="nhaplai" placeholder="Nhập Lại Mật Khẩu" name="nhaplai" onblur="checkPass()">
                    <p id="thongbao"></p>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" style="width: 24%" name="btndangky">Đăng Ký</button>
                    <button type="reset" class="btn btn-default" style="width: 24%">Đặt Lại</button>
                </div>
            </div>
        </form>
    </div>

    <?php require_once ("../Layout/Footer.php"); ?>
</div>


</body>

