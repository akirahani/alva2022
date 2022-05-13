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
    <div class="chart2">
        <canvas id="pieChart" title1="<?= $title1?>" title2="<?= $title2?>" title3="<?= $title3?>" title4="<?= $title4?>" sl1="<?=count($dm1)?>" sl2="<?=count($dm2)?>" sl3="<?=count($dm3)?>" sl4="<?=count($dm4)?>"></canvas>
        <h1 class="title-thongke">Thống kê sản phẩm</h1>
    </div>
    <div class="chart1">
        <canvas id="pieChart1" title1="<?= $title1?>" title2="<?= $title2?>" title3="<?= $title3?>" title4="<?= $title4?>" sl1="<?=count($dm1)?>" sl2="<?=count($dm2)?>" sl3="<?=count($dm3)?>" sl4="<?=count($dm4)?>"></canvas>
        <h1 class="title-thongke">Thống kê đơn hàng</h1>
    </div>
</div>
<script type="text/javascript" src="lib/chart/utils.js"></script>
<script>
// const ctx = $('#myChart').getContext('2d');
const ctx = $("#pieChart")[0].getContext('2d');
const ctx1 = $("#pieChart1")[0].getContext('2d');

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
// 
// var sltranhda1 = $('#pieChart1').attr('sl1');
// var sloplat1 = $('#pieChart1').attr('sl2');
// var slcotda1 = $('#pieChart1').attr('sl3');
// var sllavabo1 = $('#pieChart1').attr('sl4');

// var tltranhda1 = $('#pieChart1').attr('title1');
// var tloplat1 = $('#pieChart1').attr('title2');
// var tlcotda1 = $('#pieChart1').attr('title3');
// var tllavabo1 = $('#pieChart1').attr('title4');
// 
// const DATA_COUNT = 7;
// const NUMBER_CFG = {count: DATA_COUNT, min: 0, max: 100};

// const labels = Utils.months({count: 7});
// const data = {
//   labels: labels,
//   datasets: [
//     {
//       label: 'Dataset 1',
//       data: Utils.numbers(NUMBER_CFG),
//       backgroundColor: Utils.CHART_COLORS.red,
//     },
//     {
//       label: 'Dataset 2',
//       data: Utils.numbers(NUMBER_CFG),
//       backgroundColor: Utils.CHART_COLORS.blue,
//     },
//     {
//       label: 'Dataset 3',
//       data: Utils.numbers(NUMBER_CFG),
//       backgroundColor: Utils.CHART_COLORS.green,
//     },
//   ]
// };

// const config = new Chart(ctx1, {
//     type: 'bar',
//     data: data,
//     options: {
//     plugins: {
//     title: {
//         display: true,
//         text: 'Chart.js Bar Chart - Stacked'
//       },
//     },
//     responsive: true,
//     scales: {
//       x: {
//         stacked: true,
//       },
//       y: {
//         stacked: true
//       }
//     }
//   }
// });

</script>