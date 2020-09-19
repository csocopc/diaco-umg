$( document ).ready(function() {
	var tipoSucursal = $("input[name='tipoSucursal']");

	if (tipoSucursal != undefined) {
		valor = $("input[name='tipoSucursal']:checked").val();
		if (valor == 'nueva') 
		{
			$("#nombre_sucursal").removeAttr('disabled');
			$("#id_sucursal").attr('disabled', 'disabled');
		}
		else 
		{
			$("#nombre_sucursal").attr('disabled', 'disabled');
			$("#id_sucursal").removeAttr('disabled');
		}			
	}

	tipoSucursal.change(function() {
		var valor = $(this).val();			
		if (valor == 'nueva') 
		{
			$("#nombre_sucursal").val("").removeAttr('disabled');			
			$("#id_sucursal").val("").attr('disabled', 'disabled');					
		}
		else 
		{
			$("#nombre_sucursal").val("").attr('disabled', 'disabled');
			$("#id_sucursal").val("").removeAttr('disabled');			
		}
	});


    $( "#id_departamento" ).change(function() {
		var formulario = $( this ).closest('form');
		var url = formulario.attr('action');
		formulario.attr('action', url.replace('-guardar', ''));
		formulario.submit();
    });    


    $( ".identificacion" ).change(function() {
		var formulario = $( this ).closest('form');

		$('<input>').attr({
		    type: 'hidden',
		    name: 'identificador-actualizado',
		    value: '1'
		}).appendTo(formulario);

		var url = formulario.attr('action');
		formulario.attr('action', url.replace('-guardar', ''));
		formulario.submit();
    });





	$( ".number-length" ).on('input', function() {    
		if (this.value.length > this.maxLength) {
			this.value = this.value.slice(0, this.maxLength);
		}
    });
});