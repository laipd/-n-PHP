<?php
    include_once("../../Models/model_sanpham.php");

//    if(getAll()!=null){
//        $arr_sp = getAll();
//    }
    $sotin = 8;
    $trang = laySoTrang($sotin);
    if(isset($_GET["trang"])){
        $tr = $_GET["trang"];
        if($tr > $trang){
            $tr = $trang;
        }else if($tr ==0 ){
            $tr = 1;
        }
    } else $tr = 1;
    $arr_sp = laySoSP(($tr-1)*$sotin,$sotin);
    if(isset($_GET["chitiet"])){
        $id = $_GET["chitiet"];
        $arr_chitietsp = getSp($id);
    }else {
        $arr_chitietsp = null;
    }
    if(layAoSoMi(0) !=null){
        $arr_sominam = layAoSoMi(0);
    }
    if(layAoSoMi(1)!=null){
        $arr_sominu = layAoSoMi(1);
    }
    if(layAoPhong(0) !=null){
        $arr_phongnam = layAoPhong(0);
    }
    if(layAoPhong(1) != null){
        $arr_phongnu = layAoPhong(1);
    }
    if(layQuanBo(0) !=null){
        $arr_bonam = layQuanBo(0);
    }if(layQuanBo(1) !=null) {
    $arr_bonu = layQuanBo(1);
    }
    if(layQuanThun(0) !=null){
        $arr_thunnam = layQuanThun(0);
    }if(layQuanThun(1) !=null){
        $arr_thunnu = layQuanThun(1);
    }
?>