<?php
	set_time_limit(0);
	include_once('../../../db/conexao.php');
	include('config_upload.php');

	$nome_arquivo = $_FILES['arquivo']['name'];
	$tamanho_arquivo = $_FILES['arquivo']['size'];
	$arquivo_temporario = $_FILES['arquivo']['tmp_name'];
	if(!empty($nome_arquivo)):
		if($sobrescrever == "sim" && file_exists("$caminho_absoluto_contato/$nome_arquivo")):
			die("arquivo já existe");
		endif;
		if(($limitar_tamanho=="sim") && ($tamanho_arquivo > $tamanho_bytes)):
			die("Arquivo deve ter no máximo $tamanho_bytes bytes.");
		endif;
		$ext = strrchr($nome_arquivo,'.');
		
		if($limitar_ext == "sim" && !in_array($ext,$extensoes_validas)):
			die("Extenção de arquivo invalida para upload.");
		endif;
		$idContato = $_POST["idContato"];
		
		$nome_arquivo = rand(5, 99999)."_". $idContato . $ext;
		
		if(move_uploaded_file($arquivo_temporario, "$caminho_absoluto_contato/$nome_arquivo")):

			$sql = "SELECT nomeFotoContato FROM tbcontatos WHERE idContato = {$idContato}";
			$rs = mysqli_query($conexao,$sql);
			$dados = mysqli_fetch_array($rs);
			$nomeFotoContato = $dados["nomeFotoContato"];
			$arquivo_anterior = "$caminho_absoluto_contato/$nomeFotoContato";
			if($nomeFotoContato != "SemFoto.jpg" && $nomeFotoContato!= "" && file_exists($arquivo_anterior)):
				unlink($arquivo_anterior);
			endif;

			$sql = "UPDATE tbcontatos set nomeFotoContato='{$nome_arquivo}' WHERE idContato={$idContato}";
			$rs = mysqli_query($conexao,$sql);
			echo "./paginas/contatos/fotos-contatos/{$nome_arquivo}";

		else:
			echo "O arquivo não pode ser copiado para o servidor.";

		endif;
	
	
	else:
		die("Selecione o arquivo a ser enviado.");
	
	endif;

?>