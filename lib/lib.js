function login(){
	var juser = $('#user').val();
	var jpass = $('#pass').val();
	var jtipoLogin = $('#tipoLogin').val();
	if (juser.length == 0 || jpass.length == 0){
		alert ('No has escrito tu usuario o contraseña');
	}else{
		document.LogIN.submit();
		
	}
}

$(document).on("ready", inicio);

function inicio(){
	$(".botonSeccion").on("click", obtenerIDcuadros)
	$("#homeLogo").on("click", ocultarCuadro)
}



function obtenerIDcuadros(datos)
{
	var ident = datos.currentTarget.id;
	transicion(ident);
	imagenchange(ident);
}

function imagenchange(ident)
{
	setTimeout
	(
		function ciclo()
		{
			for (var i = 1;  i<= 12; i++) 
			{
				$("#pic"+i).attr("src","images/"+ident+"/"+ident+i+".jpg" );
			};
		}
	,300);

}

function ocultarCuadro (datos) {
	var cambiosimagenes =
	{
		margin: '4em 0 0 230%' 
	};

	 $("#imagenesCatalogo").css(cambiosimagenes);
}

function transicion(ident)
{

	var cambiosimagenes =
	{
		margin: '4em 0 0 230%' 
	};

	 $("#imagenesCatalogo").css(cambiosimagenes);

	setTimeout
	(
		function cambio()
		{
			var cambiosimagenes =
			{
				margin: '4em 0 0 42%' 
			};

			 $("#imagenesCatalogo").css(cambiosimagenes);
		}
	,300);
}