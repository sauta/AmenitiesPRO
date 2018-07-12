// $('#Producto').inputmask('999999999');


$('#Cantidad').mask('999999');

$('#Cantidad').change(function() {

	 Cantidad =   $( this ).val();

	 if( /^[0-9]+$/.test(Cantidad) )
	 {
	 	$( this ).val(validarNumero(Cantidad));

	 }else
	 {
	 	// alert('no se puede ingresar otra cosa que no sea numero');
	 	$( this ).val(1);
	 }
});
	

$('.precio').click(function() {

	alert('funac');
	var precioTotal;
	precio = $( this ).val();
	cantidad =	$('#Cantidad').val();
	precioTotal = precio*cantidad;
	return $('#total').val(precioTotal);
});

function validarNumero(numero){
	if(numero < 0)
	{
		numero = 1;
		return numero;
	}else{
		return numero;
	}

}