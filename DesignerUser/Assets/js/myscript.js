
function checkLogin(){
    var user = document.getElementById("user").value;
    var pass = document.getElementById("password").value;
    if(!user.equals("") && pass.equals("")){
        $.post(
            'DesignerUser/Controller/ctr_dangnhap.php', // URL
            {user : $('#user').val(),pass: $('#password').val()},  // Data
                function(result){ // Success
                $('#result').html(result);
            },
            'text' // dataTyppe
        );
    }
}
function checkPass() {
     pass = document.getElementById("matkhau");
     pass2 = document.getElementById("nhaplai")
    if (pass2.value == pass.value) {
        document.getElementById("thongbao").innerHTML ="";
    } else {
        document.getElementById("thongbao").innerHTML = "<h3 style='color:#d01128;'>Mật Khẩu Nhập Lại Không Đúng</h3>";
        pass2.value = "";
        pass2.focus();
        return false;
    }
}
function thanhTien() {
    sl = document.getElementById("soluong").value;
    sl1 = parseInt(sl);
    gia = document.getElementById("gia").value;
    tong = sl1 * gia;
    if(sl>0){
        document.getElementById("thanhtien").value = tong;
        document.getElementById("tienan").value = tong;
    }

}
function ajax_giohang(id,size,gia) {
    // URL có kèm tham số number
    var url = "../../Controller/ctr_giohang.php?sanpham="+id+"&size="+size+"&gia="+gia;
    // Data lúc này cho bằng rỗng
    var data = {};

    // Success Function
    var success = function (result){
        $('#soluong').html(result);
    };

    // Result Type
    var dataType = 'text';

    // Send Ajax
    $.get(url, data, success, dataType);
}
function huySp(index) {
    // URL có kèm tham số number
    var url = "../../Controller/ctr_giohang.php?vitri="+index;
    // Data lúc này cho bằng rỗng
    var data = {};

    // Success Function
    var success = function (result){
        $('#chuyentrang').html(result);
    };

    // Result Type
    var dataType = 'text';

    // Send Ajax
    $.get(url, data, success, dataType);
}
function tongTien(ma,size,soluong) {
    // URL có kèm tham số number
    var url = "../../Controller/ctr_giohang.php?thaydoi="+ma+"&size="+size+"&soluong="+soluong;
    // Data lúc này cho bằng rỗng
    var data = {};

    // Success Function
    var success = function (result){
        $('#thanhtien').html(result);
    };

    // Result Type
    var dataType = 'text';

    // Send Ajax
    $.get(url, data, success, dataType);
}
function thanhDoiSoLuong(ma,size,stt) {
    // URL có kèm tham số number
    var url = "../../Controller/ctr_giohang.php?thaydoisoluong="+ma+"&size="+size+"&stt="+stt;
    // Data lúc này cho bằng rỗng
    var data = {};

    // Success Function
    var success = function (result){
        $('#chuyentrang').html(result);
    };

    // Result Type
    var dataType = 'text';

    // Send Ajax
    $.get(url, data, success, dataType);
}
function thanhToan() {
    // URL có kèm tham số number
    var url = "../../Controller/ctr_giohang.php?thanhtoanhang";
    // Data lúc này cho bằng rỗng
    var data = {};

    // Success Function
    var success = function (result){
        $('#chuyentrang').html(result);
    };

    // Result Type
    var dataType = 'text';

    // Send Ajax
    $.get(url, data, success, dataType);
}


