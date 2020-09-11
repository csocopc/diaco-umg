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
		     	generarGrafica(data);
		        console.log(data);
		     },
		     error: function() {
		         alert('error handling here');
		     }
		 });    
    });


    function generarGrafica(datos)
    {
		google.charts.load("current", {packages:["corechart"]});
		google.charts.setOnLoadCallback(drawChart);
		function drawChart() {
		datos.unshift(['Task', 'Hours per Day']);
		var data = google.visualization.arrayToDataTable(datos);		

		var options = {
		  title: 'My Daily Activities',
		  pieHole: 0.4,
		};

		var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
		chart.draw(data, options);
		}
    }
});