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
		     	generarGraficaCircular(data.circular, data.general);
		     	generarGraficaBarras(data.barras, data.general);		        
		    },
		    error: function() {
				alert('error handling here');
		    }
		 });    
    });


    function generarGraficaCircular(datos, general)
    {
		google.charts.load("current", {packages:["corechart"]});
		google.charts.setOnLoadCallback(drawChart);
		function drawChart() {
    		datos.unshift(['Nombre', 'Total']);
    		var data = google.visualization.arrayToDataTable(datos);		

    		var options = {
				title: 'Reporte de Quejas en Porcentajes',
		  		pieHole: 0,
    		  	is3D: true,
    		  	chartArea: {
    		  		width:'80%',
    		  		height:'70%'
    		  	}
    		};

    		var chart = new google.visualization.PieChart(document.getElementById('grafica-circular'));
    		chart.draw(data, options);
		}
    }

    function generarGraficaBarras(datos, general)
    {
		google.charts.load('current', {packages: ['corechart', 'bar']});
		google.charts.setOnLoadCallback(drawBasic);

		function drawBasic() {
			datos.unshift(['Nombre', 'Numero de Quejas', { role: 'style' }]);
	      	var data = google.visualization.arrayToDataTable(datos);

	      	var options = {
	        	title: 'Diaco en Linea - Total de Quejas: ' + general.total,
	        	chartArea: {
	        		width: '50%', 
	        		left:400
	        	},
	        	legend: { position: 'none' },
	        	hAxis: {
	          		title: 'Reporte de Quejas ' + ((general.inicio) ? ' Desde: ' + general.inicio : '')  + ((general.fin) ? ' Hasta: ' + general.fin : ''),
	          		minValue: 1
		        },
		        isStacked: true
		    };

			var chart = new google.visualization.BarChart(document.getElementById('grafica-barras'));
	    	chart.draw(data, options);
	    }
    }
});