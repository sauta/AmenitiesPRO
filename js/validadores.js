

 	(function(){
        var formulario = document.getElemetsByName('form1')[0]
	 })

	function MM_openBrWindow(theURL,winName,features) { //v2.0

		  window.open(theURL,winName,features);

		}

	function validacion()
			{

				var mensaje = '',
					_nombre          = document.getElementById("nombreUsuario").value,
					_clave           = document.getElementById("clave").value,
					_repClave        = document.getElementById("repClave").value,

					_nombreEncargado = document.getElementById("nombreEncargado").value,
					_rutEncargado    = document.getElementById("rutEncargado").value,

					_email		     = document.getElementById("email").value,
					_telefono        = document.getElementById("telefono").value,
					_celular         = document.getElementById("celular").value,

					_nombreFantasia  = document.getElementById("nombreFantasia").value,
					_rutempresa      = document.getElementById("rutEmpresa").value,
					_razonSocial     = document.getElementById("razonSocial").value,
					_descripcion     = document.getElementById("descripcion").value,

					_region          = document.getElementById("cboRegion").selectedIndex,
					_provincia       = document.getElementById("cboProvinacia").selectedIndex,
					_comuna          = document.getElementById("cboComuna").selectedIndex,
					_direccion	     = document.getElementById("direccion").value,
					_terminos 		 = document.getElementById("terminos");

				//Nombre _usuario
				if (_nombre == null || _nombre.length == 0 || /^\s+$/.test(_nombre)) {

					_nombre.focus();
					mensaje = "Nombre del usuario vacio";
					alert (mensaje);
					return false;
				}
				//validacion _clave
				 else if (_clave == null || _clave.length == 0 || /^\s+$/.test(_clave)) {

					_clave.focus();
					mensaje = "No ingresó una clave";
				 	alert (mensaje);
				 	return false;
				}
				 else if ( _clave.length < 6) {
					_clave.focus();
					mensaje = "la clave es muy corta";
				 	alert (mensaje);
				 	return false;
				}
				//validacion _repclave
				 else if (_repClave == null || _repClave.length == 0 || /^\s+$/.test(_repClave)) {

					_repClave.focus();
					mensaje = "El campo re-clave se ecuentra vacio";
				  	alert (mensaje);

				  	return false;
				}
				//validacion comparación clave y re calve
				 else if(_clave != repClave ) {

					_clave.focus();
					mensaje = "Las claves no coinciden";
					alert (mensaje);
					return false;

				}
				//Validación nombre encargado
				else if (_nombreEncargado == null || _nombreEncargado.length == 0 || /^\s+$/.test(_nombreEncargado)) {

					variable.focus();
					mensaje = "El Nombre del encargado es obligatorio";
					alert (mensaje);
					return false;
				}
				//validacion rut encargado
				 else if (_rutEncargado == null || _rutEncargado.length == 0 || /^\s+$/.test(_rutEncargado)) {

					variable.focus();
					mensaje = "El rut del encargado es obligatorio";
					alert (mensaje);
					return false;
				}
				 else if (Rut(_rutEncargado,_rutEncargado)) {

					return false;
				}

				//validacion email
				 else if (_clave == null || _clave.length == 0 || /^\s+$/.test(_clave)) {
					variable.focus();
					mensaje = "El email es obligatorio";
					alert (mensaje);
					return false;
				}
				//validacion telefono
				 else if (_telefono == null || _telefono.length == 0 || /^\s+$/.test(_telefono)) {
					_telefono.focus();
					mensaje = "El telefono es obligatorio";
					alert (mensaje);
					return false;
				}
				//validacion celular
				 else if (_celular == null || _celular.length == 0 || /^\s+$/.test(_celular)) {
					_celular.focus();
					mensaje = "El celular es obligatorio";
					alert (mensaje);
					return false;
				}
				//validacion nombre Fantasia
				 else if (_nombreFantasia == null || _nombreFantasia.length == 0 || /^\s+$/.test(_nombreFantasia)) {
					_nombreFantasia.focus();
					mensaje = "El nombre de fantasia es obligatorio";
					alert (mensaje);
					return false;
				}
				//validacion Rut empresa
				
				 else if (_rutEmpresa == null || _rutEmpresa.length == 0 || /^\s+$/.test(_rutEmpresa)) {
					_rutEmpresa.focus();
					mensaje = "El rut empresa es obligatorio";
					alert (mensaje);
					return false;
				}
				else if (Rut(_rutEmpresa,_rutEmpresa)) {

					return false;
				}
				//validacion reazón social
				 else if (_razonSocial == null || _razonSocial.length == 0 || /^\s+$/.test(_razonSocial)) {
					_razonSocial.focus();
					mensaje = "El rut rezón es obligatorio";
					alert (mensaje);
					return false;
				}
				//validacion descripción
				 else if (_descripcion == null || _descripcion.length == 0 || /^\s+$/.test(_descripcion)) {
					_descripcion.focus();
					mensaje = "El campo descripción es obligatorio";
					alert (mensaje);
					return false;
				}
				//validacion region 
				 else if (_region == null || _region == 0 ) {
					_region.focus();
					mensaje = "no a seleccionado una ragion";
					alert (mensaje);
					return false;
				}
				//validacion provincia
				 else if (_provincia == null || _provincia == 0 ) {
					
					mensaje = "No a seleccionado una provincia";
					alert (mensaje);
					return false;
				}
				//validacion comuna
				 else if (_comuna == null || _comuna == 0 ) {
					
					mensaje = "no a seleccionado una comuna";
					alert (mensaje);
					return false;
				}
				//validacion dirección
				else if (_direccion == null || _direccion.length == 0 || /^\s+$/.test(_direccion)) {
					
					mensaje = "dirección";
					alert (mensaje);
					return false;
				}
				//validacion _terminosos
				else if (!_terminos.checked) {
					_terminos.focus();
					mensaje = "No a aceptado los termino y condiciones";
					alert (mensaje);
					return false;
				}
				 
				return true;
				
		function revisarDigito( dvr, variable)
		{	
			dv = dvr + ""	
			if ( dv != '0' && dv != '1' && dv != '2' && dv != '3' && dv != '4' && dv != '5' && dv != '6' && dv != '7' && dv != '8' && dv != '9' && dv != 'k'  && dv != 'K')	
			{
				alert("Debe ingresar un digito verificador valido");		
				alerta.focus();
				alerta.select();		
				return false;	
			}	
			return true;
		}

		function revisarDigito2( crut, variable )
		{	
			largo = crut.length;	
			if ( largo < 2 )	
			{		
				alert("Debe ingresar el rut completo")		
				variable.focus();		
				variable.select();		
				return false;	
			}	
			if ( largo > 2 )		
				rut = crut.substring(0, largo - 1);	
			else		
				rut = crut.charAt(0);	
			dv = crut.charAt(largo-1);	
			revisarDigito( dv, variable );	

			if ( rut == null || dv == null )
				return 0	

			var dvr = '0'	
			suma = 0	
			mul  = 2	

			for (i= rut.length -1 ; i >= 0; i--)	
			{	
				suma = suma + rut.charAt(i) * mul		
				if (mul == 7)			
					mul = 2		
				else    			
					mul++	
			}	
			res = suma % 11	
			if (res==1)		
				dvr = 'k'	
			else if (res==0)		
				dvr = '0'	
			else	
			{		
				dvi = 11-res		
				dvr = dvi + ""	
			}
			if ( dvr != dv.toLowerCase() )	
			{		
				alert("EL rut es incorrecto")		
				variable.focus();		
				variable.select();		
				return false	
			}

			return true
		}

		function Rut(texto,variable)
		{	
			var tmpstr = "";	
			for ( i=0; i < texto.length ; i++ )		
				if ( texto.charAt(i) != ' ' && texto.charAt(i) != '.' && texto.charAt(i) != '-' )
					tmpstr = tmpstr + texto.charAt(i);	
			texto = tmpstr;	
			largo = texto.length;	

			if ( largo < 2 )
			{		
				alert("Debe ingresar el rut completo")		
				variable.focus();		
				variable.select();		
				return false;	
			}	

			for (i=0; i < largo ; i++ )	
			{			
				if ( texto.charAt(i) !="0" && texto.charAt(i) != "1" && texto.charAt(i) !="2" && texto.charAt(i) != "3" && texto.charAt(i) != "4" && texto.charAt(i) !="5" && texto.charAt(i) != "6" && texto.charAt(i) != "7" && texto.charAt(i) !="8" && texto.charAt(i) != "9" && texto.charAt(i) !="k" && texto.charAt(i) != "K" )
		 		{			
					alert("El valor ingresado no corresponde a un R.U.T valido");			
					// window.document.form1.txtRutEmpresa.focus();			
					// window.document.form1.txtRutEmpresa.select();			
					variable.focus();		
					variable.select();
					return false;		
				}	
			}	

			var invertido = "";	
			for ( i=(largo-1),j=0; i>=0; i--,j++ )		
				invertido = invertido + texto.charAt(i);	
			var dtexto = "";	
			dtexto = dtexto + invertido.charAt(0);	
			dtexto = dtexto + '-';	
			cnt = 0;	

			for ( i=1,j=2; i<largo; i++,j++ )	
			{		
				//alert("i=[" + i + "] j=[" + j +"]" );		
				if ( cnt == 3 )		
				{			
					dtexto = dtexto + '.';			
					j++;			
					dtexto = dtexto + invertido.charAt(i);			
					cnt = 1;		
				}		
				else		
				{				
					dtexto = dtexto + invertido.charAt(i);			
					cnt++;		
				}	
			}	

			invertido = "";	
			for ( i=(dtexto.length-1),j=0; i>=0; i--,j++ )		
				invertido = invertido + dtexto.charAt(i);	

			variable.value = invertido.toUpperCase()		

			if ( revisarDigito2(texto,variable) )		
				return true;	

			return false;
		}
	}
	//////////////FINDE DE LA VALIDACIONES/////////////

			function permite(elEvento, permitidos) {
			  // Variables que definen los caracteres permitidos
			  var numeros = "0123456789";
			  var rut = ".-";
			  var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
			  var numeros_caracteres = numeros + caracteres;
			  var teclas_especiales = [8, 37, 39, 46];
			  // 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha
			 
			 
			  // Seleccionar los caracteres a partir del parámetro de la función
			  switch(permitidos) {
			    case 'num':
			      permitidos = numeros;
			      break;
			    case 'car':
			      permitidos = caracteres;
			      break;
			    case 'num_car':
			      permitidos = numeros_caracteres;
			      break;
			  }
			 
			  // Obtener la tecla pulsada 
			  var evento = elEvento || window.event;
			  var codigoCaracter = evento.charCode || evento.keyCode;
			  var caracter = String.fromCharCode(codigoCaracter);
			 
			  // Comprobar si la tecla pulsada es alguna de las teclas especiales
			  // (teclas de borrado y flechas horizontales)
			  var tecla_especial = false;
			  for(var i in teclas_especiales) {
			    if(codigoCaracter == teclas_especiales[i]) {
			      tecla_especial = true;
			      break;
			    }
			  } 
			  // Comprobar si la tecla pulsada se encuentra en los caracteres permitidos
			  // o si es una tecla especial
			  return permitidos.indexOf(caracter) != -1 || tecla_especial;
			}



