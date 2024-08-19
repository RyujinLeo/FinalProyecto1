<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Carbon\Carbon; 

class RegistrosController extends Controller
{
    public function mostrarRegistros(){
        $client= new Client();
        $response = $client->request ('GET','http://localhost:8091/api/rentacar/alquiler/mostrar/todo');
        $alquilerDTOs = json_decode($response->getBody()->getContents());


        return view('registros',compact('alquilerDTOs'));
    }

    public function infoRegistro($idAlquiler, $idCliente, $idVehiculo){
        $clientCliente = new Client();
        $response = $clientCliente->request ('GET',"http://localhost:8091/api/rentacar/clientes/buscar/cliente/{$idCliente}");
        $cliente = json_decode($response->getBody()->getContents());
        $clientAlquiler = new client();
        $responseAlquiler =  $clientAlquiler->request ('GET',"http://localhost:8091/api/rentacar/alquiler/buscar/id/{$idAlquiler}");
        $alquiler = json_decode($responseAlquiler->getBody()->getContents());
        $clientVehiculo = new client();
        $responseVehiculo =  $clientVehiculo->request ('GET',"http://localhost:8091/api/rentacar/vehiculos/buscar/vehiculo/{$idVehiculo}");
        $vehiculo = json_decode($responseVehiculo->getBody()->getContents());

        return view('inforegistro', compact('cliente', 'alquiler', 'vehiculo'));


    }


    public function buscarporfechas(Request $request){

        $request->validate([
            'fechaInicio' => 'required|string',
            'fechaFin' => 'required|string',
        ]);  
        try {
            $fechaInicio = $request->input('fechaInicio');
            $fechaFin = $request->input('fechaFin');
    
            $client = new Client();
            $response = $client->request('GET', 'http://localhost:8091/api/rentacar/clientes/registro/venta', [
                'query' => [
                    'fechaInicio' => $fechaInicio,
                    'fechaFin' => $fechaFin
                ]
            ]);
    
            $alquilerDTOs = json_decode($response->getBody()->getContents());
    
            return view('registrosfechas', compact('alquilerDTOs'));
    
        } catch (RequestException $e) {
            return redirect()->back()->with('error', 'No se pudo encontrar el cliente.');
        }
    }
}
