function login(){
	var juser = $('#user').val();
	var jpass = $('#pass').val();
	var jtipoLogin = $('#tipoLogin').val();
	$.post('login/loginvalidate.php', {user:juser, pass: jpass, tipoLogin: jtipoLogin }, function(data){
		alert(data);
		});
		}