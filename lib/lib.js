function login(){
	var juser = $('#user').val();
	var jpass = $('#pass').val();
	var jtipoLogin = $('#tipoLogin').val();
	if (juser.length == 0 || jpass.length == 0){
		alert ('No has escrito tu usuario o contraseña');
	}else{
	//$.post('login/loginvalidate.php', {user:juser, pass: jpass, tipoLogin: jtipoLogin }, function(data){
		//$('#login').html(data);
		document.LogIN.submit();
		//});
		
	}
}