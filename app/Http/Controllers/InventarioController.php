<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Carbon\Carbon; 

class InventarioController extends Controller
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
                return view('inventario', ['Cardatos' => $Cardatos]);
            } else {
                // Maneja el caso donde la respuesta no tiene datos esperados
                return view('inventario')->with('error', 'No se encontraron datos de vehículos.');
            }

        } catch (RequestException $e) {
            // Maneja los errores de la solicitud
            return view('inventario')->with('error', 'Error al obtener los datos de vehículos.');
        }
    }


    public function modelomarca(Request $request){

        $request->validate([
            'modelomarca' => 'required|string',
        ]);

        $client = new Client();

        
        try {
        $modelomarca= $request->input('modelomarca');

        $response = $client->request('GET', "http://localhost:8091/api/rentacar/clientes/buscar/cliente/{$modelomarca}");
       
        $Modelomarcaencontrado = json_decode($response->getBody()->getContents());

        return view('busquedamodelomarca', compact('Modelomarcaencontrado'));

        }catch(RequestException $e) {
            return redirect()->back()->with('error', 'No se pudo encontrar el modelo/marca.');
        }
    }



    public function crearAuto(Request $request){
        $today = Carbon::today();
        $clientcreacion = new Client();

        $data=[
            'vin' =>$request->vin,
            'marca' =>$request->marca,
            'modelo' =>$request->modelo,
            'anio' =>$request->anio,
            'color' =>$request->color,
            'disponibilidad' =>$request->disponibilidad,
            'precioDiario' =>$request->precioDiario,
            'idCiudad' => $request->idCiudad,
            'imagenAuto' =>$request->imagenAuto,
        ];

        $ciudadID = $request->input('idCiudad');
        $response = $clientcreacion->post("http://localhost:8091/api/rentacar/vehiculos/crear/vehiculo/{$ciudadID}", [
            'json' => $data,
            ]);

            return redirect()->route('mostrar.usuarios');
    }




}
