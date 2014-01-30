<?
include "con.php";

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];

    $sql="INSERT INTO pessoa(nome, sobrenome) VALUES ('$nome', '$sobrenome')";
    $res= mysql_query($sql);

if($res){
    echo ' sucesso';
?>
	<script type="text/javascript">
		location.href="index.php";
	</script>

<?
}
?>