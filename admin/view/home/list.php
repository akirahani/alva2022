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
?>
<div class="thongke-baocao">
    <div class=""></div>
    <canvas id="myChart" title1="<?= $title1?>" title2="<?= $title2?>" title3="<?= $title3?>" title4="<?= $title4?>" sl1="<?=count($dm1)?>" sl2="<?=count($dm2)?>" sl3="<?=count($dm3)?>" sl4="<?=count($dm4)?>"></canvas>
    <h1 class="title-thongke">Thống kê sản phẩm</h1>
</div>

<script>
// const ctx = $('#myChart').getContext('2d');
const ctx = $("#myChart")[0].getContext('2d');

var sltranhda = $('#myChart').attr('sl1');
var sloplat = $('#myChart').attr('sl2');
var slcotda = $('#myChart').attr('sl3');
var sllavabo = $('#myChart').attr('sl4');

var tltranhda = $('#myChart').attr('title1');
var tloplat = $('#myChart').attr('title2');
var tlcotda = $('#myChart').attr('title3');
var tllavabo = $('#myChart').attr('title4');
const myChart = new Chart(ctx, { 
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