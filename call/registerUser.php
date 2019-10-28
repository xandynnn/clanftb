<?php

	require_once("../simple_html_dom.php");
	require_once('../class/Validation.class.php');
	$return = array();

	// Pegando requisição
	$username = $_POST['username'];
	$nome = $_POST['nome'];
	$account = $_POST['account'];
	$especialidade = $_POST['especialidade'];

	// Lendo Json usuários
	$jsonUrl = "../json/usuarios.json";
	$json = file_get_contents($jsonUrl);
	$data = json_decode($json, TRUE);

	// Gravatar
	$html = file_get_html('http://battlelog.battlefield.com/bf4/user/'.$account.'/');
	$inicial = explode('background-image: url(', $html->find('.avatar-container',0)->find('a',0)->getAttribute("style"));
	$image = explode('?',$inicial[1]);
	$gravatar = $image[0];

	$vlNome = validation::required($nome,true);
	if ( $vlNome[0]['valid'] == false ){
		$return['error']['field'][] = "nome";
	}

	$vlAccount = validation::required($account,true);
	if ( $vlAccount[0]['valid'] == false ){
		$return['error']['field'][] = "account";
	}

	$vlUsername = validation::required($username,true);
	if ( $vlUsername[0]['valid'] == false ){
		$return['error']['field'][] = "username";
	}

	$vlEspecialidade = validation::required($especialidade,true);
	if ( $vlEspecialidade[0]['valid'] == false ){
		$return['error']['field'][] = "especialidade";
	}

	// Cria Usuário
	$newUser = array(
		"nome"=>$nome,
		"username"=>$username,
		"account"=>$account,
		"plataforma"=>"ps3",
		"especialidade"=>$especialidade,
		"gravatar"=>$gravatar
	);

	foreach ($data as $user) {
		if ( $user['username'] == $newUser['username'] ){
			$return['error']['field'][] = "username";
			$return['message'] = "<br />Este player já está registrado, favor insira outro Player.";
		}
	}

	if ( $return ) {

		$return['message'] = "Preencha corretamente os campos destacados." . $return['message'];
		print json_encode($return);
		exit;

	}else{

		// Grava o conteudo no json
		array_push($data, $newUser);
		$fileModified = json_encode($data);
		$result = file_put_contents($jsonUrl, $fileModified );

		$return['sucess'] = true;
		$return['message'] = "Player registrado com sucesso";
		print json_encode($return);
		exit;

	}

?>