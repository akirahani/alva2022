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
    <a href="don-hang/don_moi" class="don-moi"><p>Đơn mới</p><span><?=$count_don_moi?><i class="fas fa-cart-plus"></i></span></a>
    <a href="don-hang/don_hoan_thanh" class="don-hoan-thanh"><p>Đơn hoàn thành</p><span><?=$count_don_hoan_thanh?><i class="fas fa-box-circle-check"></i></span></a>
</div>
<div class="thongke-baocao">
    <div class="chart2">
        <canvas id="pieChart" title1="<?= $title1?>" title2="<?= $title2?>" title3="<?= $title3?>" title4="<?= $title4?>" sl1="<?=count($dm1)?>" sl2="<?=count($dm2)?>" sl3="<?=count($dm3)?>" sl4="<?=count($dm4)?>"></canvas>
        <h1 class="title-thongke">Thống kê sản phẩm</h1>
    </div>
    <div class="chart1">
        <canvas id="barChart" tongdonhang="<?=$count_tong_don?>" donmoi="<?=$count_don_moi?>" dongoi="<?=$count_don_goi?>" dongiao="<?=$count_don_giao?>" donhuy="<?= $count_don_huy?>" donhoanthanh="<?= $count_don_hoan_thanh?>"></canvas>
        <h1 class="title-thongke">Thống kê đơn hàng</h1>
    </div>
</div>
<script type="text/javascript" src="lib/chart/utils.js"></script>
<script>
const ctx = $("#pieChart")[0].getContext('2d');

var sltranhda = $('#pieChart').attr('sl1');
var sloplat = $('#pieChart').attr('sl2');
var slcotda = $('#pieChart').attr('sl3');
var sllavabo = $('#pieChart').attr('sl4');

var tltranhda = $('#pieChart').attr('title1');
var tloplat = $('#pieChart').attr('title2');
var tlcotda = $('#pieChart').attr('title3');
var tllavabo = $('#pieChart').attr('title4');

const pieChart = new Chart(ctx, { 
    type: 'pie',
    data: {
        labels: ['Tranh đá: '+sltranhda+' sp', 'Đá ốp lát: '+sloplat+' sp', 'Cột đá: '+slcotda+' sp', 'Lavabo: '+sllavabo+' sp'],
        datasets: [{
            data: [tltranhda, tloplat, tlcotda, tllavabo],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
// 

// var donmoi = $('#pieChart1').attr('title1');
// var dongoi = $('#pieChart1').attr('title2');
// var dongiao = $('#pieChart1').attr('title3');
// var tllavabo1 = $('#pieChart1').attr('title4');
// var tllavabo1 = $('#pieChart1').attr('title4');

const ctx1 = $("#barChart")[0].getContext('2d');
const myChart1 = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: [
          'January',
          'February',
          'March',
          'April',
          'May',
          'June',
          'July',
          'August',
          'September',
          'October',
          'November',
          'December'
        ],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>