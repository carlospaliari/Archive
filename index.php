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
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://paliari.url.ph">Paliari</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="http://paliari.url.ph/bd/social/social.html">Social</a></li>
            <li><a onclick="alert('Desculpe mas esta funcao ainda nao foi desenvolvida')" href="#">Fale conosco</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acesse <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="http://paliari.url.ph/">Login</a></li>
                    <li><a href="http://paliari.url.ph/bd/calculadora/calculadora.html">Calculadora</a></li>
                    <li><a href="http://paliari.url.ph/bd/calculos_media/index.php">Calculos de media</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

<div style="margin-left:0px; position:fixed;" >
        <ul id="menu" style="width:1000px;">
            <li class="logo">
               <a href = "index.php"><img style="float:left; padding-left:20px;" height="35px" src="imagens/house.png" alt="HOME"></a>
            </li>
            <li><a href="http://paliari.url.ph/">Paliari</a>
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
