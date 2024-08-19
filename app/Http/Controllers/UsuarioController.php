<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Carbon\Carbon; 

class UsuarioController extends Controller
{


    public function mostrarUsuarios(){
        $client= new Client();
        $response = $client->request ('GET','http://localhost:8091/api/rentacar/clientes/mostrar/todos/clientes');
        $Usersdatos = json_decode($response->getBody()->getContents());
        return view('usuarios',compact('Usersdatos'));
    }


    public function mostrarporid($id){
        $clientmostrar= new Client(['base_uri'=>'http://localhost:8091/api/rentacar/clientes/buscar/',]);
        $responsemotrar = $clientmostrar->request ('GET', "cliente/{$id}" );
        $Useridencontrado = json_decode($responsemotrar->getBody()->getContents());

        return view('infousuario', compact('Useridencontrado'));
    }



    public function buscarporid(Request $request){

        $request->validate([
            'idusuario' => 'required|string',
        ]);
        $client = new Client();

        
        try {
        $idusuario = $request->input('idusuario');

        $response = $client->request('GET', "http://localhost:8091/api/rentacar/clientes/buscar/cliente/{$idusuario}");
       
        $Useridencontrado = json_decode($response->getBody()->getContents());

        return view('infousuario', compact('Useridencontrado'));
        }catch(RequestException $e) {
            return redirect()->back()->with('error', 'No se pudo encontrar el cliente.');
        }
    }
    

    public function crearUsuario(Request $request){
        $today = Carbon::today();
        $clientcreacion = new Client();

        $data=[
            'idCliente' =>$request->idusuario,
            'nombre' =>$request->name,
            'apellido' =>$request->apellido,
            'email' =>$request->idusuario,
            'direccion' =>$request->direccion,
            'telefono' =>$request->apellido,
            'fechaRegistro' =>$today,
        ];

        $response = $clientcreacion->post('http://localhost:8091/api/rentacar/clientes/registrar/cliente', [
            'json' => $data,
            ]);

            return redirect()->route('mostrar.usuarios');
    }

}
