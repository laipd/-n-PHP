<?php require_once ("../Layout/Library.php"); ?>
<!-- Navigation -->
<?php require_once ("../Layout/Menu.php"); ?>

<div class="container" id="background_container" style="color:white;">
    <?php
    require_once ("Login.php");
    ?>
    <div class="row">  <?php require_once ("../../Controller/ctr_hoadon.php"); ?></div>
    <div class="row">
        <?php require_once ("../../Controller/ctr_sanpham.php"); ?>
        <?php
        if(isset($hoadon_thongbao)){
            if($hoadon_thongbao==1){ // đặt sản phẩm thành công
                echo '<div class="row" style="font-family:Arial; font-size: 15px; font-style: italic; margin: 100px 100px; height: 300px"> 
                    <h3>Bạn đã đặt hàng thành công. bạn vui lòng giữ liên lạc để chung tôi có thể giao hàng sớm nhất.Cảm ơn quý khác </h3>
                </div>';
            }else if($hoadon_thongbao==0){ // đặt sản phẩm thất bại
                echo '<div class="row" style="font-family:Arial; font-size: 14px; font-style: italic; margin: 100px 100px; height: 300px;"> 
                    <h3>Đặt hàng không thành công. Do hệ thống của chúng tôi có sự cố, chúng tôi sẽ khắc phục sớm nhất có thể. Cảm ơn quá khách</h3>
                </div>';
            }
        }else if(isset($arr_chitietsp)){if($arr_chitietsp !=null)
            while ($row = mysqli_fetch_assoc($arr_chitietsp)){
                ?>
                <div class="row" style="margin: 30px;">

                    <div class="col-md-6">
                        <img class="img-responsive" src="../../Assets/image/<?php echo $row['Anh'];?>" alt="" style="height: 450px;" >
                    </div>
                    <div class="col-md-5">
                        <h2 style="text-align: center"><?php echo $row["Ten"] ;?></h2>
                    </div>
                    <div class="col-md-5"style="background-color: #184976; font-size: 16px;" >
                        <form class="form-horizontal" method="post" style="margin: 30px;" >
                            <input type="text" value="<?php echo $row["Ma"];?>" name="masp" hidden>
                            <input type="text" value="<?php echo $row["Ten"];?>" name="tensp" hidden>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="sanxuat"> Sản Xuất </label>
                                <div class="col-sm-8" style="margin-top: 8px;"> <?php echo $row["NhaCC"];?></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="size"> Size </label>
                                <div class="col-sm-9">
                                    <label class="radio-inline"><input type="radio" name="size" value="S" checked>S</label>
                                    <label class="radio-inline"><input type="radio" name="size" value="M">M</label>
                                    <label class="radio-inline"><input type="radio" name="size" value="L">L</label>
                                    <label class="radio-inline"><input type="radio" name="size" value="XL">XL</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="soluong">Số Lương</label>
                                <div class="col-sm-8">
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" id="soluong" name="soluong" value="1" onkeyup="thanhTien()" onmouseleave="thanhTien()" onload="thanhTien()" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="gia">Giá</label>
                                <div class="col-sm-8">
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="gia" name="gia" value="<?php echo $row["GiaBan"];?>" disabled>
                                        <input type="number" name="gia" value="<?php echo $row["GiaBan"];  ?>" hidden>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="thanhtien"> Tổng Tiền </label>
                                <div class="col-sm-8">
                                    <div class="col-sm-9" style="margin-top: 8px;" >
                                        <input type="text" class="form-control" id="thanhtien" name="thanhtien" value="<?php echo $row["GiaBan"];?>" disabled>
                                        <input type="text"  id="tienan" name="tongtien" hidden="hidden" value="<?php echo $row["GiaBan"];?>" style="border: 0px;">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success" name="btnmua" style="width: 60%; height: 50px; margin: 5px;">Đặt Mua</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
        <?php
                }
            }
        ?>
    </div>
    <?php require_once ("../Layout/Footer.php"); ?>
</div>