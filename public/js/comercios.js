$( document ).ready(function() {
    $( "#id_departamento" ).change(function() {
		var formulario = $( "#formulario-agregar" );

		$('<input>').attr({
		    type: 'hidden',
		    name: 'recargar',
		    value: '1'
		}).appendTo(formulario);

		formulario.submit();
    });

    $( "#nit" ).change(function() {
		var formulario = $( "#formulario-agregar" );

		$('<input>').attr({
		    type: 'hidden',
		    name: 'nit-actualizado',
		    value: '1'
		}).appendTo(formulario);

		formulario.submit();
    });


    $( ".eliminar" ).on('click', function (e) {
    	e.preventDefault();

    	if (confirm("Seguro que desea eliminar el comercio?")) {
	    	var elemento = $(this);
	    	var token = $('meta[name="csrf-token"]').attr('content');
	    	$.post( "/comercios/eliminar", 
	    		{ id: elemento.data('id'), "_token": token }
    		).done(function( data ) {
			    location.reload();
			});
    	}
    });



    $("#frm-buscar-comercio").on('submit', function(e){
    	e.preventDefault();
    	var textoDeBusqueda = $('#search').val();
    	window.location.href = "/comercios/index/" + textoDeBusqueda;
    });

    $("#frm-buscar-queja").on('submit', function(e){
    	e.preventDefault();
    	var textoDeBusqueda = $('#search').val();
    	window.location.href = "/quejas/index/" + textoDeBusqueda;
    });
    
});