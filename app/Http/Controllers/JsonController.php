<?php

namespace App\Http\Controllers;

use DB;
use App;
use Response;
use App\Calle;
use App\Ciudad;
use App\Region;
use App\Provincia;
use Illuminate\Http\Request;

class JsonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Region::select('id', 'nombre')->get();
    
    }

    public function getProvincia($region)
    {
        return Provincia::select('id', 'nombre')->where('region_id', $region)->get();
    }

    public function getCiudades($provincia)
    {
        return Ciudad::select('id', 'nombre')->where('provincia_id', $provincia)->get();
    }
    public function getCalles($ciudad)
    {
        return Calle::select('id', 'nombre')->where('ciudad_id', $ciudad)->get();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provincias =  App\Provincia::all(['id','nombre','region_id']);
        return response()->json($provincias,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Pruebas intentadas   
        
        //$region = DB::table('regions')
    //    ->join('provincias', 'regions.id', '=', 'provincias.region_id')
    //    ->select('regions.nombre', 'provincias.nombre')
    //    ->get();
    //    return response()->json($litRegiones,200);
    //$regions =  App\Region::all(['id','nombre']);
      //  return response()->json($regions,200);//
    }
    /*/if(isset ($request->texto)){
        $ciudades = App\Ciudad::whereProvincia_id($request->texto)->get();
        return response()->json([

      'lista' => $ciudades,
      'success' => true
        ]
            
        );
    }else{
        return response()->json(
            [
              
              'success' => false
            ]
            );


    }
    
    $regiones = Region::all('id as id_region', 'nombre as nombre_region');
        $provincias = Provincia::all('region_id', 'nombre as nombreprovi', 'id as idprovi');
        $data =[
         'region'=>$regiones,
         'provincias' =>$provincias
        ];
        return response()->json($data, 200);
      //    $region = DB::table('regions')
    //    ->join('provincias', 'regions.id', '=', 'provincias.region_id')
    //    ->select('regions.nombre', 'provincias.nombre')
    //    ->get();
    //    return response()->json($litRegiones,200);
    /*/
}
