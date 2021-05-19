<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Data Jumlah Kendaraan Dinas &raquo; PT. PLN UIW KSKT</title>
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script type="text/javascript">
 
            $(function () {
	           $('#container').highcharts({
                   chart: {
                       plotBackgroundColor: null,
                       plotBorderWidth: null,
                       plotShadow: false
                   },
                   title: {
                       text: 'Data Kendaraan Dinas'
                   },
                   tooltip: {
                       pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                   },
                   plotOptions: {
                       pie: {
                           allowPointSelect: true,
                           cursor: 'pointer',
                           dataLabels: {
                               enabled: true,
                               format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                               style: {
                                   color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                               }
                           }
                       }
                   },
                   series: [{
                       type: 'pie',
                       name: 'Persentase Penduduk',
                       data: [
                           <?php 
                           // data yang diambil dari database
                           if(count($graph)>0)
                           {
                               foreach ($graph as $data) {
                                   echo "['" .$data->provinsi . "'," . $data->jumlah ."],\n";
                               }
                           }
                           ?>
                       ]
                   }]
               });
            }); 
        </script>
    </head>
    
    <body> 
        <div id="container"></div>
    </body>
</html>