$( document ).ready(function() {    
    $( "#form-reportes" ).on('submit', function (e) {
    	e.preventDefault();

		var datos = $(this).serialize();
		 $.ajax({
		     type: "POST",
		     url: $(this).attr('action'),
		     data: datos,
		     dataType: "json",
		     success: function(data) {
		     	generarGraficaCircular(data.circular);
		     	generarGraficaBarras(data.barras);
		        console.log(data);
		     },
		     error: function() {
		         alert('error handling here');
		     }
		 });    
    });


    function generarGraficaCircular(datos)
    {
		google.charts.load("current", {packages:["corechart"]});
		google.charts.setOnLoadCallback(drawChart);
		function drawChart() {
    		datos.unshift(['Nombre', 'Total']);
    		var data = google.visualization.arrayToDataTable(datos);		

    		var options = {
    		  title: 'Reporte de Quejas en Porcentajes',
    		  pieHole: 0.4,
    		};

    		var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
    		chart.draw(data, options);
		}
    }

    function generarGraficaBarras(datos)
    {
		google.charts.load('current', {packages: ['corechart', 'bar']});
		google.charts.setOnLoadCallback(drawBasic);

		function drawBasic() {
				datos.unshift(['Nombre', 'Numero de Quejas', { role: 'style' }]);
		      var data = google.visualization.arrayToDataTable(datos);

		      var options = {
		        title: 'Diaco en Linea',
		        chartArea: {width: '50%'},
		        hAxis: {
		          title: 'Reporte de Quejas',
		          minValue: 0
		        },
		        isStacked: true
		      };

		      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

		      chart.draw(data, options);
		    }
    }
});