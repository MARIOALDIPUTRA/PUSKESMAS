<div class="content-wrapper">
    <section class="content">
       <div class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-check"></span>Anda Telah Memasuki Halaman Dashboard Sistem Pelayanan Puskesmas</div>
       <br>
       <br>
       <br>
       <br>
        <body>
<?php
 
$dataPoints = array(
   array("label"=> "data pasien", "y"=> 590),
   array("label"=> "data pendaftaran", "y"=> 261),
   array("label"=> "data diagnosa", "y"=> 158),
   array("label"=> "data tindakan", "y"=> 72),
   array("label"=> "data poli kia", "y"=> 191),
   array("label"=> "data tindakan obat", "y"=> 573),
   array("label"=> "data perbaikan gizi", "y"=> 126)
);
   
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
   animationEnabled: true,
   exportEnabled: true,
   title:{
      text: "DIAGRAM PUSKEMAS WADAS"
   },
   subtitles: [{
      text: ""
   }],
   data: [{
      type: "pie",
      showInLegend: "true",
      legendText: "{label}",
      indexLabelFontSize: 16,
      indexLabel: "{label} - #percent%",
      yValueFormatString: "฿#,##0",
      dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
   }]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 670px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                     
        </body>
    </section>
</div>
