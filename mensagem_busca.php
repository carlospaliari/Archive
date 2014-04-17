<html>
	<head>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
		<title>Mensagens</title>
	</head>
<body onload="setFocus()">
	<table width="100%" height="85%" >
		<tr width="70%" height="70%">
			<td align="center" style="overflow:hidden;">
				<iframe marginwidth="0" marginheight="0" width="100%" height="100%" scrolling="auto" frameborder=0 src="mensagem_imprime.php"></iframe>
			</td>
		</tr>
		<tr align="center" width="70%">
			<td style="background-color:#808080; width:70%; height:40%">
				<form method="post" action="mensagem_insere.php">
					<input type="text" id="msg" name="nome" style="width:600px;" value="">
					<input type="text" id="msg" name="sobrenome" style="width:600px;" value="">
					<button type="submit" style="visibility:hidden">Enviar</button>
				</form>
			</td>
		</tr>
	</table>
</body>
</html>