<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Carbon\Carbon; 

class RegistrosController extends Controller
{
    public function mostrarUsuarios(){
        $client= new Client();
        $response = $client->request ('GET','http://localhost:8091/api/rentacar/clientes/mostrar/todos/clientes');
        $Registros = json_decode($response->getBody()->getContents());
        return view('registros',compact('Registros'));
    }


    public function buscarporfechas(Request $request){

        $request->validate([
            'fechaInicio' => 'required|string',
            'fechaFin' => 'required|string',
        ]);

        $client = new Client();

        
        try {
        $fechaInicio = $request->input('fechaInicio');
        $fechaFin = $request->input('fechaFin');

        $response = $client->request('GET', "http://localhost:8091/api/rentacar/clientes/registro/venta?fechaInicio={$fechaInicio}&fechaFin={$fechaFin}");
       
        $URegistros = json_decode($response->getBody()->getContents());

        return view('registroporfechas', compact('URegistros'));
        }catch(RequestException $e) {
            return redirect()->back()->with('error', 'No se pudo encontrar el cliente.');
        }
    }
}
