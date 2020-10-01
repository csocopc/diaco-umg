$( document ).ready(function() {
	var tipoSucursal = $("input[name='tipoSucursal']");

	if (tipoSucursal != undefined) {
		valor = $("input[name='tipoSucursal']:checked").val();
		if (valor == 'nueva') 
		{
			$("#nombre_sucursal").removeAttr('readonly');
			$("#id_sucursal").attr('readonly', 'readonly');
		}
		else 
		{
			$("#nombre_sucursal").attr('readonly', 'readonly');
			$("#id_sucursal").removeAttr('readonly');
		}			
	}

	tipoSucursal.change(function() {
		var valor = $(this).val();			
		if (valor == 'nueva') 
		{
			$("#nombre_sucursal").val("").removeAttr('readonly');			
			$("#id_sucursal").val("").attr('readonly', 'readonly');					
		}
		else 
		{
			$("#nombre_sucursal").val("").attr('readonly', 'readonly');
			$("#id_sucursal").val("").removeAttr('readonly');			
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


    $( ".identificacion-sucursal" ).change(function() {
		var formulario = $( this ).closest('form');

		$('<input>').attr({
		    type: 'hidden',
		    name: 'identificador-sucursal-actualizado',
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


    $( "#btn-anonimo" ).on('click', function(e) {    
    	e.preventDefault();
		var formulario = $( this ).closest('form');

		$('<input>').attr({
		    type: 'hidden',
		    name: 'anonimo',
		    value: '1'
		}).appendTo(formulario);

		var url = formulario.attr('action');
		formulario.submit();
    });
});