<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direccion;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Str;


class controllerUrl extends Controller
{

	public function index (){
		$urls = Direccion::all();
		return view('index',compact('urls'));
	}


    public function short($url){
    	$urls = Direccion::where('short_url',  $url)->firstOrFail();    	
    	
    	return view('short',compact('urls'));
    	
    }


    public function generar(){

    	$datos = request()->validate([
    		'url' => 'required|url|unique:direccion,url'
    	]);

    	$short = Str::random(6);
    	Direccion::create([
    		'url' => $datos['url'],
    		'short_url' => $short,
    		'estado' => '1'
    	]);
    	$host = request()->getSchemeAndHttpHost();
    	$host.='/'.$short;
    	return redirect()->route('index.route')->with('respuesta','URL generado exitosamente: '.$host);
    }
}
