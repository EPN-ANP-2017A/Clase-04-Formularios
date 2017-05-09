<?php

/**
 *
 * Crear una función que determine si una palabra contiene las 5 vocales sin repetir ninguna. Presentar un mensaje que
 *
 * indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.
 *
 * Ejemplos:
 * Murciélago
 * aceituno
 * acuífero
 * http://buscapalabras.com.ar/palabras-con-las-cinco-vocales.html
 */

$p="aceituno";
$valida = true;
$vocal = ['a', 'e', 'i', 'o', 'u'];
for($i = 0; $i < count($vocal); $i++) {
	$res=substr_count($p, $vocal[$i]);

	if($res != 1){
		$valida = false;
		break;
	}

}

if($valida){
	echo 'Tiene las 5 vocales sin que se repita ninguna vocal ';
}
