<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
class ambiente_cntlr extends Controller
{

    private $navvalues = [
        ["title" => "Inicio", "href" => "/", "rname"=>"/" ],
        ["title" => "Registrarse", "href" => "/ingresos", "rname"=>"ingresos" ],
    ];
    public function __invoke(Request $request)
    {
        //
    }
    public function inicio(Request $request){
        if( strcmp( $request->method(), "POST" )==0 ){
            request()->validate( [
                'name'=> 'required',
                'cedula'=> 'required',
            ] );
            $usu = request('name');
            $cedula = request('cedula');
            $cliall = Clientes::all();
            foreach( $cliall as $cla ):
                if(
                    strcmp($cla->nombre."", $usu."")==0
                    &&
                    strcmp($cla->cedula."", $cedula."")==0
                                ){
                    return View('inicio', ["h1_main"=>"Ingreso del usuario $usu, Bienvenido!!!.",
                                        "navvalues"=>$this->navvalues] );
                }
            endforeach;
            return View('inicio', ["h1_main"=>"Usuario $usu ingresado", "navvalues"=>$this->navvalues] );
        }
        return View('inicio', ["h1_main"=>"Usuario no ingresado",
                                "navvalues"=>$this->navvalues] );
    }



    public function ingresos(Request $request){
        if( strcmp( $request->method(), "POST" )==0 ){
            request()->validate( [
                'nombre'=> 'required',
                'apellidos'=> 'required',
                'cedula'=> 'required',
                'telefono'=> 'required',
            ] );
            $nombre = request('nombre');
            $apellido = request('apellidos');
            $cedula = request('cedula');
            $telefono = request('telefono');
            //
            //
            $cliall = Clientes::all();
            foreach( $cliall as $cla ):
                if( strcmp($cla->cedula."", $cedula."")==0 ){
                    return View('ingresos', ["h1_main"=>"El Usuario ya existe.",
                                        "navvalues"=>$this->navvalues] );
                }
            endforeach;
            //
            //
            //
            $cli = new Clientes;
            $cli->nombre = $nombre;
            $cli->apellido = $apellido;
            $cli->cedula = $cedula;
            $cli->phone = $telefono;
            $cli->save();
            //
            //
            //
            //
            //
            return View('ingresos', ["h1_main"=>"Usuario ingresado correctamente.",
                                        "navvalues"=>$this->navvalues] );
        }
        return View('ingresos', ["h1_main"=>"Usuario no ingresado",
                                "navvalues"=>$this->navvalues] );
    }



}
