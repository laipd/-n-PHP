<title>Giỏ Hàng</title>
<?php require_once ("../Layout/Library.php"); ?>
<!-- Navigation -->
<?php require_once ("../Layout/Menu.php"); ?>
<div class="container" id="background_container" style="color:white;">
    <?php
    require_once ("Login.php");
    include_once ("../../Models/model_sanpham.php");
    include_once ("../../Models/model_hoadon.php");
    include_once ("../../Controller/ctr_giohang.php");

    ?>
    <div class="row" id="chuyentrang">
    </div>
    <div class="row">
        <div class="col-md-8" style="margin-left:200px">
            <?php
            if(isset($_SESSION['gio']) &&count($_SESSION['gio'])>0){
                echo '<h3 class="box-title" style="text-align: center">Giỏ Hàng Quý Khách </h3>';
                $tong = count($_SESSION['gio']);
                if(isset( $_SESSION["tongtien"]))
                    $tongtien = $_SESSION["tongtien"];
                if(isset( $_SESSION["tongso"]))
                    $tongso = $_SESSION["tongso"];
                echo '<form method="get">';
                echo '<table class="table table-bordered" style="color: white;">';
                echo '<tbody>';
                for ($i=0;$i<$tong;$i++){
                    $size = $_SESSION['gio'][$i]["size"];
                    $soluong = $_SESSION['gio'][$i]["soluong"];
                    $ma = $_SESSION['gio'][$i]["ma"];

                    ?>
                    <?php
                        $sanpham = getSP($ma);
                        if($sanpham !=null)
                        while ($row = mysqli_fetch_assoc($sanpham)) {
                            ?>
                            <tr style="background-color: #76462f">
                                <td><img src="../../Assets/image/<?php echo $row['Anh']; ?>" style="width: 110px; height:110px;"></td>
                                <td style="font-size: 11px;">
                                    <table >
                                        <tr>
                                            <td style="color: #0c0908"> <h3> <?php echo $row["Ten"];?></h3></td>
                                        </tr>
                                        <tr >
                                            <td style="color: white; font-size: 13px;">
                                                <label class="control-label col-sm-4"  style="margin-top: 10px;">Số Lượng</label>
                                                <button class="btn btn-default btn-sm" type="button" onclick="thanhDoiSoLuong('<?php echo $ma;?>','<?php echo $size;?>','0')"> <span class="glyphicon">&#x2212;</span> </button>
                                                <div class="col-sm-3">
                                                    <input type="number" class="form-control" id="soluong"  name="soluong" value="<?php echo $soluong;?>" onchange="tongTien('<?php echo $ma;?>','<?php echo $size;?>',this.val())" required>
                                                </div>
                                                <button class="btn btn-default btn-sm" type="button" onclick="thanhDoiSoLuong('<?php echo $ma;?>','<?php echo $size;?>','1')"> <span class="glyphicon">&#x2b;</span> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: white ; font-size: 13px;">
                                                <label class="control-label col-sm-6" style="margin-top: 10px;">Size: <?php echo $size; ?> </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: white ; font-size: 13px;">
                                                <label class="control-label col-sm-10" style="margin-top: 10px;">Giá:   <?php echo $row['GiaBan'];?> </label>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-default" style="width: 60px; background-color: #ffc427" onclick="huySp('<?php echo $i; ?>')">Hủy</button>
                                </td>
                            </tr>
                            <?php
                        }
                }
                echo "<tr style='background-color: #3616f5'>
                        <td colspan='1'> <h3> Số Lượng :  $tongso </h3></td>
                        <td colspan='1'> <h3>Thành Tiền: $tongtien </h3> </td>
                        <td> 
                            <a href='giohang.php?thanhtoanhang' class='btn btn-success' name='btnthanhtoan' onclick='thanhToan()'>Thanh Toán</a> <br><br>
                            <a href='giohang.php?huyca' class='btn btn-warning' name='btnhuyca'>Hủy Cả</a> 
                        </td>
</tr>";
                echo '</tbody>';
                echo '</table>';
                echo '</form>';
            }
            else if(!isset($thongbao_hoadon)){
                    echo "<div class='row' style='height: 400px;'>";
                    echo "<h4 class=\"box-title\" style=\"text-align: center\">Giỏ Hàng  Của Quý Khách  Không Có Gì</h4>";
                    echo "<a href='Home.php' class='btn btn-success' style='text-align: center; margin-left: 300px;'>Tiếp Tục Mua Hàng</a>";
                    echo "</div>";
            }else{
                if($thongbao_hoadon ==1){
                    echo "<h4 class='box-title' style='text-align: center; height: 400px; margin-top: 100px;'>Quý Khách đặt hàng thành công.Cảm ơn quý khác đã mua tại cửa hàng chúng tôi</h4>";
                }else{
                    echo "<h4 class='box-title' style='text-align: center'>Quý Khách Đặt Hàng Thất Bại</h4>";
                }
            }
            ?>
        </div>
    </div>
    <?php require_once ("../Layout/Footer.php"); ?>
</div>