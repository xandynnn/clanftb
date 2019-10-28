<?php

class Validation{

	public static function text($value,$min,$max,$required){

		if($required == true and empty($value)){
			$array[] = array( "valid" => false, "return" => 'Campo não pode ficar vazio.');
		} else if($required == true and !empty($value) or $required == false and !empty($value)){
			if ( strlen($value) >= $min && strlen($value) <= $max ){
				$array[] = array( "valid" => true, "return" => $value );
			}else{
				$array[] = array( "valid" => false, "return" => "Campo não pode ser menor que $min e maior que $max.");
			}
		} else {
			$array[] = array( "valid" => true, "return" => $value );
		}

		return $array;

	}

	public static function required($value,$required){

		if($required == true and empty($value)){
			$array[] = array( "valid" => false, "return" => 'Campo não pode ficar vazio.');
		} else {
			$array[] = array( "valid" => true, "return" => $value );
		}

		return $array;

	}

	/**
	*VALIDA O EMAIL COM EXPRESSÃO REGULAR
	*@method email( $value,$required )
	*@param $value string valor do campo a validar
	*@param $required bool true para obrigatorio e false para falso
	*@return array.
	*/
	public static function email($value,$required){

		if ( $required == true && strlen($value) > 0 ){
			if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',$value)){
				$array[] = array( "valid" => false, "return" => 'Email errado.');
			}else{
				$array[] = array( "valid" => true, "return" => $value );
			}
		}else{
			$array[] = array( "valid" => false, "return" => 'Campo não pode ficar vazio.');
		}
		return $array;
	}

	/**
	*VALIDA A DATA COM EXPRESSÃO REGULAR
	*@method data( $value,$required )
	*@param $value string valor do campo a validar
	*@param $required bool true para obrigatorio e false para falso
	*@return array.
	*/
	public static function data($value,$required){

		if($required == true and empty($value)){
			$array[] = array( "valid" => false, "return" => 'Campo não pode ficar vazio.');
		} else if($required == true and !empty($value) or $required == false and !empty($value)){
			if(!preg_match('/^((((0?[1-9]|[12]\d|3[01])[\.\-\/](0?[13578]|1[02])[\.\-\/]((1[6-9]|[2-9]\d)?\d{2}))|((0?[1-9]|[12]\d|30)[\.\-\/](0?[13456789]|1[012])[\.\-\/]((1[6-9]|[2-9]\d)?\d{2}))|((0?[1-9]|1\d|2[0-8])[\.\-\/]0?2[\.\-\/]((1[6-9]|[2-9]\d)?\d{2}))|(29[\.\-\/]0?2[\.\-\/]((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)|00)))|(((0[1-9]|[12]\d|3[01])(0[13578]|1[02])((1[6-9]|[2-9]\d)?\d{2}))|((0[1-9]|[12]\d|30)(0[13456789]|1[012])((1[6-9]|[2-9]\d)?\d{2}))|((0[1-9]|1\d|2[0-8])02((1[6-9]|[2-9]\d)?\d{2}))|(2902((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)|00))))$/',$value)){
				$array[] = array( "valid" => false, "return" => 'Data Inválida.');
			}else{
				$array[] = array( "valid" => true, "return" => $value );
			}
		} else {
			$array[] = array( "valid" => true, "return" => $value );
		}

		return $array;

	}

	/**
	*VALIDA O TELEFONE COM EXPRESSÃO REGULAR
	*@method phone( $value,$required )
	*@param $value string valor do campo a validar
	*@param $required bool true para obrigatorio e false para falso
	*@return array.
	*/
	public static function phone($value,$required){

		if($required == true and empty($value)){
			$array[] = array( "valid" => false, "return" => 'Campo não pode ficar vazio.');
		} else if($required == true and !empty($value) or $required == false and !empty($value)){
			if(!preg_match('/^[0-9]{4}-([0-9]{4}|[0-9]{5})$/',$value)){
				$array[] = array( "valid" => false, "return" => 'Data Inválida.');
			}else{
				$array[] = array( "valid" => true, "return" => $value );
			}
		} else {
			$array[] = array( "valid" => true, "return" => $value );
		}

		return $array;

	}

	public static function trataTxt($var) {

		$var = strtolower($var);

		$var = ereg_replace("[áàâãª]","a",$var);
		$var = ereg_replace("[éèê]","e",$var);
		$var = ereg_replace("[óòôõº]","o",$var);
		$var = ereg_replace("[úùû]","u",$var);
		$var = str_replace("ç","c",$var);
		$var = str_replace(" ","",$var);

		return $var;
	}

}

?>