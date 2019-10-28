<?php

	require_once("simple_html_dom.php");

	//PLAYER OBJECT
	$player = array();
	$player = (object) $player;

	$html = file_get_html('http://battlefieldtracker.com/bf4/update/ps3/'.$username);

	// Username
	$name = explode(" / ", $html->find('div.stats-header h1',0)->plaintext );
	$player->username = $name[0];

	//Imagem Char
	$player->image = $html->find('.bf-player-avatar',0)->getAttribute("src");

	//Tempo de jogo
	$player->playtime = $html->find('div.bf-big-stats-container',0)->find('.bf-big-stat',3)->find('.text-warning',0)->plaintext;
	$player->playtimeLong = $html->find('div.bf-big-stats-container',0)->find('.bf-big-stat',3)->find('.text-warning',1)->plaintext;

	// Score
	$player->score = trim($html->find('table.table',0)->find('tr',0)->find('td',1)->plaintext);

	// Kills
	$player->kills = trim($html->find('table.table',0)->find('tr',1)->find('td',1)->plaintext);

	// Deaths
	$player->deaths = trim($html->find('table.table',0)->find('tr',2)->find('td',1)->plaintext);

	// Assists
	$player->assists = trim($html->find('table.table',0)->find('tr',3)->find('td',1)->plaintext);

	// KD
	$player->kdRatio = trim($html->find('table.table',0)->find('tr',4)->find('td',1)->plaintext);

	// Games
	$player->games = trim($html->find('table.table',0)->find('tr',5)->find('td',1)->plaintext);

	// Wins
	$player->wins = trim($html->find('table.table',0)->find('tr',6)->find('td',1)->plaintext);

	// Losses
	$player->losses = trim($html->find('table.table',0)->find('tr',7)->find('td',1)->plaintext);

	//winRatio
	$player->winRatio = trim($html->find('table.table',0)->find('tr',8)->find('td',1)->plaintext);

	// Rank
	$player->rank = trim($html->find('table.table',3)->find('tr',0)->find('td',1)->plaintext);

	// Score por minuto
	$player->scorePerMinute = trim($html->find('table.table',3)->find('tr',1)->find('td',1)->plaintext);

	//Flags Capturas
	$player->scorePerMinute = trim($html->find('table.table',3)->find('tr',2)->find('td',1)->plaintext);

	//Flasg Defendidas
	$player->scorePerMinute = trim($html->find('table.table',3)->find('tr',3)->find('td',1)->plaintext);

	//Heals
	$player->heals = trim($html->find('table.table',3)->find('tr',4)->find('td',1)->plaintext);

	//Revives
	$player->revives = trim($html->find('table.table',3)->find('tr',5)->find('td',1)->plaintext);

	$player->weapons = (object) array();

	//Arma favorita
	$player->weapons->favouriteWeapon = $html->find('div.bf-big-stats-container',0)->find('.bf-big-stat',2)->find('.text-warning',0)->plaintext;

	//Headshots
	$player->weapons->headshots = trim($html->find('table.table',4)->find('tr',0)->find('td',1)->plaintext);

	//Shots Fired
	$player->weapons->shotsFired = trim($html->find('table.table',4)->find('tr',1)->find('td',1)->plaintext);

	//Accuracy
	$player->weapons->accuracy = trim($html->find('table.table',4)->find('tr',2)->find('td',1)->plaintext);

	//Combat Score
	$player->weapons->combatScore = trim($html->find('table.table',4)->find('tr',3)->find('td',1)->plaintext);

	//Shots Hit
	$player->weapons->shotsHit = trim($html->find('table.table',4)->find('tr',4)->find('td',1)->plaintext);

	//Avenger Kills
	$player->weapons->avengerKill = trim($html->find('table.table',4)->find('tr',5)->find('td',1)->plaintext);

	//Savior Kills
	$player->weapons->saviorKill = trim($html->find('table.table',4)->find('tr',6)->find('td',1)->plaintext);

	//Kill Streak Bonus
	$player->weapons->killStreakBonus = trim($html->find('table.table',4)->find('tr',7)->find('td',1)->plaintext);

	$player->scores = (object) array();

	//Geral
	$player->scores->general = trim($html->find('table.table',5)->find('tr',0)->find('td',1)->plaintext);

	//Team
	$player->scores->team = trim($html->find('table.table',5)->find('tr',1)->find('td',1)->plaintext);

	//Unlock
	$player->scores->unlock = trim($html->find('table.table',5)->find('tr',2)->find('td',1)->plaintext);

	//Award
	$player->scores->award = trim($html->find('table.table',5)->find('tr',3)->find('td',1)->plaintext);

	//Bonus
	$player->scores->bonus = trim($html->find('table.table',5)->find('tr',4)->find('td',1)->plaintext);

	//Squad
	$player->scores->squad = trim($html->find('table.table',5)->find('tr',5)->find('td',1)->plaintext);

	$player->topWeapons = (object) array();
	$player->topWeapons->weapon1 = (object) array();
	$player->topWeapons->weapon2 = (object) array();
	$player->topWeapons->weapon3 = (object) array();

	if ( $html->find('.panel',3)->find('.panel-body',0)->children(0) ){
		$player->topWeapons->weapon1->name = $html->find('.panel',3)->find('.panel-body',0)->children(0)->find('h6',0)->plaintext;
	}
	if( $html->find('.panel',3)->find('.panel-body',0)->children(1) ){
		$player->topWeapons->weapon2->name = $html->find('.panel',3)->find('.panel-body',0)->children(1)->find('h6',0)->plaintext;
	}
	if( $html->find('.panel',3)->find('.panel-body',0)->children(2) ){
		$player->topWeapons->weapon3->name = $html->find('.panel',3)->find('.panel-body',0)->children(2)->find('h6',0)->plaintext;
	}

	$html2 = file_get_html('http://battlelog.battlefield.com/bf4/user/'.$account.'/');

	$inicial = explode('background-image: url(', $html2->find('.avatar-container',0)->find('a',0)->getAttribute("style"));
	$image = explode('?',$inicial[1]);
	$player->gravatar = $image[0];

?>