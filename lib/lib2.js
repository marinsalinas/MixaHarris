function eliminarUsr(ident)
{
	var id1 = ident;
	//alert(id);
	$.post('del_cliente.php',{id:id1}, function(data){
			//$('#resultado').html(data);
			alert(data);
			location.reload(true);
			});
}