<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Carbon\Carbon; 
class RentasController extends Controller
{
    public function mostrarCarros(){
        try {
            // Configura la solicitud GET a la API externa
            $response = $client->request('GET', 'http://localhost:8091/api/rentacar/vehiculos/mostrar/vehiculos');

            // Decodifica la respuesta JSON
            $Cardatos = json_decode($response->getBody()->getContents(), true);

            // Verifica si $Cardatos es un array y contiene datos
            if (is_array($Cardatos) && !empty($Cardatos)) {
                // Retorna la vista con los datos del inventario
                return view('Principal', ['Cardatos' => $Cardatos]);
            } else {
                // Maneja el caso donde la respuesta no tiene datos esperados
                return view('Principal')->with('error', 'No se encontraron datos de vehículos.');
            }

        } catch (RequestException $e) {
            // Maneja los errores de la solicitud
            return view('Principal')->with('error', 'Error al obtener los datos de vehículos.');
        }
    }
}
