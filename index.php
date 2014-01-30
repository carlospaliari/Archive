<?
include "con.php";
setlocale(LC_TIME, "pt_BR.utf8");
date_default_timezone_set('America/Sao_Paulo');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!--==================REFERENCIA OS ESTILOS DE CSS==================!-->
<link rel="stylesheet" href="Estilos_css/menu.css">  
<link rel="stylesheet" href="Estilos_css/banerflutuante.css">
<link rel="stylesheet" href="Estilos_css/rodape.css">
<link rel="stylesheet" href="Estilos_css/rolagem.css">

<!--==================REFERENCIA AS FUNÇÕES JAVA SCRIPT=============!-->

<link rel="shortcut icon" href="icon1.ico">
</head>

<body style="background-color:#CCCCCC">
    <div style="margin-left:0px; position:fixed;" >
        <ul id="menu" style="width:1000px;">
            <li class="logo">
               <a href = "index.php"><img style="float:left; padding-left:20px;" height="35px" src="imagens/house.png" alt="HOME"></a>
            </li>
            <li><a onclick="alert('Desculpe mas esta funcao ainda nao foi desenvolvida')" href="#">Login</a>
            </li>
        </ul>
    </div>
    <div style="float:none; clear:both;"></div>
    <!-- CABEÃ‡ALHO ABAIXO DO MENU !-->
	<div id="topo" style="height:15px">
		<div id="titulo"></div>
	</div>
	<div id="topoDados">
		<div id="tituloDados"></div>
	</div>	
		
	<!-- PAGINA A SER CARREGADA !-->
	<div style="position: inherit; top:100px; bottom:50px">
		<table style="width: 100%; height: 95%" >
			<tr align="center">
				<td>
					<?
					    include 'mensagem_busca.php';
					?>
				</td>
			</tr>
		</table>
		
	</div>
	
	<!-- RODAPE A SER CARREGADO !-->
	<div id="rodape" style="position:fixed">
		<? 			 
		?>
	</div>
   </body>
</html>
