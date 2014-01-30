<?
	$servidor= "mysql.hostinger.com.br";
	$usuario= "u240993613_cadu";
	$senha= "paliari22011997";
	$banco= "u240993613_cadu";
	
	$conexao= mysql_connect("$servidor", "$usuario", "$senha") or die ("Erro ao conectar");
	mysql_select_db ("$banco") or die ("Erro ao selecionar banco");

?>
