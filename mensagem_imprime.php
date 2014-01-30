<html>	
	<body style="">
		<table style="width:70%; background-color:#808080;" align="center">	
<?
include "con.php";
$sql= "select * from pessoa";
$res=mysql_query($sql);

	while ($lin=mysql_fetch_array($res)){
?>
		<tr style="background-color:#DFDFDF;" align="left">
			<td style="width: 20%; font-size:12px;"><b>
				<?=$lin['id'];?>
			</td>
			<td style="width: 80%">
				<?=$lin['nome'] . ' ' . $lin['sobrenome'];?>
			</td>
		</tr>
<?
}
  echo "<meta HTTP-EQUIV='refresh' CONTENT='5'>";
?>
		
		</table>
	</body>
</html>