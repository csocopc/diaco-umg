$( document ).ready(function() {
    $( "#id_departamento" ).change(function() {
		var formulario = $( this ).closest('form');
		var url = formulario.attr('action');
		formulario.attr('action', url.replace('-guardar', ''));
		formulario.submit();
    });    
});