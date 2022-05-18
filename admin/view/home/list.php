<?php 
    $data_da = $query->DanhSach('da');
    // so luong danh muc san pham
    $dm1 = $query->DanhSach('da',['id'],['danhmuc'=>'='],[],[],['danhmuc'=>1]);
    $dm2 = $query->DanhSach('da',['id'],['danhmuc'=>'='],[],[],['danhmuc'=>2]);
    $dm3 = $query->DanhSach('da',['id'],['danhmuc'=>'='],[],[],['danhmuc'=>3]);
    $dm4 = $query->DanhSach('da',['id'],['danhmuc'=>'='],[],[],['danhmuc'=>4]);
    // ten danh muc
    // ti le danh muc san pham
    $title1 = round( ((count($dm1)/count($data_da))*100),2 );
    $title2 = round( ((count($dm2)/count($data_da))*100),2 );
    $title3 = round( ((count($dm3)/count($data_da))*100),2 );
    $title4 = round( ((count($dm4)/count($data_da))*100),2 );
    // Đơn hàng
    $don_hang =  $query->DanhSach('donhang');
    $don_moi =  $query->DanhSach('donhang',['id','trangthai','ngay','lydohuy'],['trangthai'=>'='],[],[],['trangthai'=>1]);
    $don_goi = $query->DanhSach('donhang',['id','trangthai','ngay','lydohuy'],['trangthai'=>'='],[],[],['trangthai'=>2]);
    // 
    $don_moi_ngay = $query->DanhSach('donhang',['id','trangthai','ngay','lydohuy'],['trangthai'=>'=','ngay'=>'='],[],[],['trangthai'=>1,'ngay'=>date("Y-m-d")]);
    $count_dmn = count($don_moi_ngay);
    // 
    $don_giao =$query->DanhSach('donhang',['id','trangthai','ngay','lydohuy'],['trangthai'=>'='],[],[],['trangthai'=>3]);
    $don_huy =$query->DanhSach('donhang',['id','trangthai','ngay','lydohuy'],['trangthai'=>'='],[],[],['trangthai'=>4]);
    $don_hoan_thanh =$query->DanhSach('donhang',['id','trangthai','ngay','lydohuy'],['trangthai'=>'='],[],[],['trangthai'=>5]);
    // 
    $count_tong_don = count($don_hang); 
    $count_don_moi = count($don_moi);
    $count_don_goi = count($don_goi);
    $count_don_giao = count($don_giao);
    $count_don_huy = count($don_huy);
    $count_don_hoan_thanh = count($don_hoan_thanh);
?>
<div class="click-donhang">
    <a href="don-hang/chuan_bi_giao" class="don-giao"><p>Đơn đang giao</p><span><?=$count_don_giao?><i class="fas fa-truck"></i></span></a>
    <a href="don-hang/don_goi" class="don-goi"><p>Đơn đang gọi</p><span><?=$count_don_goi?><i class="fas fa-phone"></i></span></a>
    <a href="don-hang/don_moi" class="don-moi"><p>Đơn mới trong ngày</p><span><?=$count_dmn?><i class="fas fa-cart-plus"></i></span></a>
    <a href="don-hang/don_hoan_thanh" class="don-hoan-thanh"><p>Đơn hoàn thành</p><span><?=$count_don_hoan_thanh?><i class="fa fa-box-check"></i></span></a>
</div>
<div class="thongke-baocao">
    <div class="chart2">
        <canvas id="sanpham" title1="<?= $title1?>" title2="<?= $title2?>" title3="<?= $title3?>" title4="<?= $title4?>" sl1="<?=count($dm1)?>" sl2="<?=count($dm2)?>" sl3="<?=count($dm3)?>" sl4="<?=count($dm4)?>"></canvas>
    </div>
    <div class="chart1">
        <canvas id="donhang" tongdonhang="<?=$count_tong_don?>" donmoi="<?=$count_don_moi?>" dongoi="<?=$count_don_goi?>" dongiao="<?=$count_don_giao?>" donhuy="<?= $count_don_huy?>" donhoanthanh="<?= $count_don_hoan_thanh?>"></canvas>
    </div>
</div>
<div class="bar-chart">
    <select name="trangthai" onchange="getValue()">
        <option value="0">Lựa chọn</option>
        <option value="1">Đơn mới</option>
<!--         <option value="2">Đơn gọi</option>
        <option value="3">Đơn giao</option> -->
        <option value="4">Đơn hủy</option>
        <option value="5">Đơn hoàn thành</option>
    </select>
    <input type="date" name="ngay" id="ngay"  onchange="getValue()">
    <canvas id="barchart" ></canvas>
</div>

<script>
// Global Options
Chart.defaults.global.defaultFontFamily = 'Lato';
Chart.defaults.global.defaultFontSize = 18;
Chart.defaults.global.defaultFontColor = 'red';
// Sản phẩm
const ctx = $("#sanpham")[0].getContext('2d');
var sltranhda = $('#sanpham').attr('sl1');
var sloplat = $('#sanpham').attr('sl2');
var slcotda = $('#sanpham').attr('sl3');
var sllavabo = $('#sanpham').attr('sl4');

var tltranhda = $('#sanpham').attr('title1');
var tloplat = $('#sanpham').attr('title2');
var tlcotda = $('#sanpham').attr('title3');
var tllavabo = $('#sanpham').attr('title4');

const sanpham = new Chart(ctx, { 
    type: 'pie',
    data: {
        labels: ['Tranh đá: '+sltranhda+' sản phẩm', 'Đá ốp lát: '+sloplat+' sản phẩm', 'Cột đá: '+slcotda+' sản phẩm', 'Lavabo: '+sllavabo+' sản phẩm'],
        datasets: [{
            data: [tltranhda, tloplat, tlcotda, tllavabo],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
            ],
            borderWidth: 1,
            borderColor:'#777',
            hoverBorderWidth:3,
            hoverBorderColor:'#000'
        }]
    },
    options: {
        title:{
          display:true,
          text:'Thống kê sản phẩm',
          fontSize:25,
        },
        legend:{
            display:true,
            position:'right',
            labels:{
                fontColor:'#000'
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Đơn hàng
const ctx1 = $("#donhang")[0].getContext('2d');
var donmoi = $("#donhang").attr('donmoi');
var donhuy = $("#donhang").attr('donhuy');
var donhoanthanh = $("#donhang").attr('donhoanthanh');
var tongdonhang = $("#donhang").attr('tongdonhang');

let massPopChart = new Chart(ctx1, {
    type:'pie',
    data:{
        labels:['Đơn mới: '+donmoi,'Đơn hủy: '+donhuy, 'Đơn hoàn thành: '+donhoanthanh],
        datasets:[{
            label:'Population',
            data:[
                donmoi,
                donhuy,
                donhoanthanh,
            ],
            backgroundColor:[
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(75, 192, 192, 0.6)',
            ],
            borderWidth:1,
            borderColor:'#777',
            hoverBorderWidth:3,
            hoverBorderColor:'#000'
        }]
    },
    options:{
        title:{
            display:true,
            text:'Thống kê số lượng đơn hàng',
            fontSize:25
        },
        legend:{
            display:true,
            position:'right',
            labels:{
                fontColor:'#000'
            }
        },
        plugins: {
            subtitle: {
                display: true,
                text: 'Custom Chart Subtitle'
            }
        },
        layout:{
            padding:{
                left:0,
                right:0,
                bottom:0,
                top:0
            }
        },
        tooltips:{
            enabled:true
        }
    }
});

// BIỂU ĐỒ CỘT ĐƠN HÀNG THEO THỜI GIAN
const ctx2 = $("#barchart")[0].getContext('2d');
// var donmoi1 = $("#donhang").attr('donmoi');
// var donhuy1 = $("#donhang").attr('donhuy');
// var donhoanthanh1 = $("#donhang").attr('donhoanthanh');
// var tongdonhang1 = $("#donhang").attr('tongdonhang');
// Xử lí thời gian đơn lọc đơn hàng
function getValue(){
    let trangthai = $('select[name="trangthai"]').val();
    let ngay = $('#ngay').val();
    if(trangthai!='' && ngay!='' ){
        $.ajax({
            method: "GET",
            data:{
                trangthai: trangthai, ngay:ngay
            },
            url: "view/home/thongke_donhang.php",
            success:function(data){
                console.log(data);
                let chart2 = new Chart(ctx2, {
                    type:'bar',
                    data:{
                        labels:['Đơn mới','Đơn hủy', 'Đơn hoàn thành'],
                        datasets:[{
                            label:'Population',
                            data:data,
                            backgroundColor:[
                                'rgba(255, 99, 132, 0.6)',
                                'rgba(54, 162, 235, 0.6)',
                                'rgba(255, 206, 86, 0.6)',
                                'rgba(75, 192, 192, 0.6)',
                            ],
                            borderWidth:1,
                            borderColor:'#777',
                            hoverBorderWidth:3,
                            hoverBorderColor:'#000'
                        }]
                    },
                    options:{
                        title:{
                            display:true,
                            text:'Thống kê đơn hàng theo thời gian',
                            fontSize:25
                        },
                        legend:{
                            display:true,
                            position:'right',
                            labels:{
                                fontColor:'#000'
                            }
                        },
                        layout:{
                            padding:{
                                left:0,
                                right:0,
                                bottom:0,
                                top:0
                            }
                        },
                        tooltips:{
                            enabled:true
                        }
                    }
                });
            }
        })
    }
}
</script>