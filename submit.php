<?php

function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

   return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
}
	include('config.php');

	
	$nome= utf8_decode(mysqli_real_escape_string($conn,$_POST['nome']));
	$email= utf8_decode(mysqli_real_escape_string($conn,$_POST['email']));
	//$part= utf8_decode(mysqli_real_escape_string($conn,$_POST['part']));
	
	/*GERAR NOME FICHEIRO*/
	$file="";
	
	$time=date("Y-m-d H:i:s");


	/*FAZER UPLOAD*/

	$iExp= explode('.', basename($_FILES['imagem']['name']));

	$ext=$iExp[count($iExp)-1];

	$nomeF = clean($nome);



	if(isset($_FILES['imagem'])){
		$propguid=uniqid();
	//		$file_proposta=basename($_FILES['proposta']['name']);
		$file= $nomeF."-".$propguid.".".$ext;
		$target = "uploads/".$file;

		
		
		move_uploaded_file($_FILES['imagem']['tmp_name'],$target);

	}

	
	$sql="insert into passatempos(nome_passatempo, nome_participacao_passatempo,
		email_participacao_passatempo,
		texto_participacao_passatempo,
		upload_file_participacao_passatempo, ts_participacao_passatempo)

	 values('".NOME_PASSATEMPO."','".$nome."', '".$email."', '', '".$file."', '".$time."')";
	 $conn->query($sql);

?>

<script type="text/javascript">window.location='index.php?status=ok'</script>