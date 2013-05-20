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