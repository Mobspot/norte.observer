<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        setInterval(function() {
            var data = google.visualization.arrayToDataTable([
            ['Year', 'CPU', 'Memoria'],
            ['5s',  1000,      600],
            ['10s',  1170,      460],
            ['15s',  660,       1120],
            ['20s',  1030,      540],
            ['25s',  1000,      600],
            ['30s',  1170,      460],
            ['35s',  660,       1120],
            ['40s',  1030,      540]
            ]);

            var options = {
            title: 'Computer Performance',
            hAxis: {title: 'Time',  titleTextStyle: {color: '#333'}},
            vAxis: {minValue: 0}
            };

            var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
            chart.draw(data, options);

        }, 3000);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
  </body>
</html>
