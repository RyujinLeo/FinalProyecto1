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
        $client= new Client();
        $response = $client->request ('GET','http://localhost:8091/api/rentacar/vehiculos/mostrar/vehiculos');
        $Carrosdatos = jusuariosson_decode($response->getBody()->getContents());
        return view('inventario',compact('Carrosdatos'));
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
            return redirect()->back()->with('error', 'No se pudo encontrar el cliente.');
        }
    }

}
