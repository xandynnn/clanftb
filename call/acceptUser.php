<?php

	require_once("../simple_html_dom.php");
	require_once('../class/Validation.class.php');
	$return = array();

	// Pegando requisição
	$account = $_POST['account'];

	// Lendo Json usuários
	$jsonUrlApply = "../json/apply.json";
	$jsonApply = file_get_contents($jsonUrlApply);
	$dataApply = json_decode($jsonApply, TRUE);

	$aUser = array();

	foreach ($dataApply as $key => $userApply) {
		if ( $userApply['account'] == $account ){

			$remove = $key;

			// Cria Usuário
			$aUser = array(
				"nome"=>$userApply['nome'],
				"username"=>$userApply['username'],
				"account"=>$userApply['account'],
				"plataforma"=>$userApply['plataforma'],
				"especialidade"=>$userApply['especialidade'],
				"gravatar"=>$userApply['gravatar']
			);
		}
	}

	if ( isset($remove) ){
		unset($dataApply[$remove]);
		$fileModified = json_encode($dataApply);
		$result = file_put_contents($jsonUrlApply, $fileModified );

		$jsonUrl = "../json/usuarios.json";
		$json = file_get_contents($jsonUrl);
		$data = json_decode($json, TRUE);

		foreach ($data as $user) {
			if ( $user['username'] == $aUser['username'] ){
				$return['message'] = "Este usuário já faz parte deste clan.";
			}
		}

		if ( $return ) {
			print json_encode($return);
			exit;
		}else{

			// Grava o conteudo no json
			array_push($data, $aUser);
			$fileModified = json_encode($data);
			$result = file_put_contents($jsonUrl, $fileModified );

			$return['success'] = true;
			$return['message'] = "Player registrado com sucesso";
			print json_encode($return);
			exit;

		}

	}else{
		//USUARIO INEXISTENTE
		$return['message'] = "Este usuário não existe mais no banco para ser aceito." . $return['message'];
		print json_encode($return);
		exit;
	}

?>