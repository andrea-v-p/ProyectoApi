<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicaController extends Controller
{
    public function llamada(){

		return view("buscador");
	}

	public function buscar(Request $request){

		$respuesta = $request->input('buscador');

		// inicialitzem la crida cURL
		$url = "http://musicbrainz.org/ws/2/artist?query=".$respuesta;
		$c = curl_init( $url );

		// Ajustem headers perquè ens retorni la info en format JSON
		// tb afegim User-Agent (identificador de client, si no Musicbrainz no funciona)
		curl_setopt($c, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Accept:application/json','User-Agent:Laravel/5.7'));
		// ajustos perquè ens retorni les dades sobre una variable
		curl_setopt($c, CURLOPT_RETURNTRANSFER, true);

		// cridem per obtenir les dades
		$res = curl_exec($c);

		// transformem les dades a un array associatiu de PHP
		$dades = json_decode($res,true);

		
		//$dades LENGHT
		for ($i=0; $i <= $dades ; $i++) { 
			$nombre = $dades["artists"][$i]['name'];
			$p

			echo ;
		}


		return view("resultado");
	}

}
