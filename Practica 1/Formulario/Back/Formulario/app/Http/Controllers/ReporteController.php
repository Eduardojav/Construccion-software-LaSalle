<?php


namespace App\Http\Controllers;


use App\Models\Reporte;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ReporteController
{
    public function __construct()
    {

    }
    public function  index()
    { try{
        $listado= Reporte::all();
        return response()->json($listado, Response:: HTTP_OK);
    }catch (Exception $ex){
        return response()->json([
            'error' => 'Hubo un problema al listar todos los Reportes'. $ex->getMessage()
        ],206);
    }
    }
    public  function  show(Request $request, $id)
    {
        try {
            $Reporte = Reporte::find($id);
            return  response()->json($Reporte,Response::HTTP_OK);
        } catch (Exception $ex)
        {
            return response()->json(['error'=> 'Hubo un problema al encontrar el Reporte'. $ex->getMessage()
            ],404);
        }

    }
    public function  store(Request $request)
    {

        try{
            $Reporte =Reporte::create($request->all());
            return  response()->json($Reporte, Response::HTTP_OK);
        } catch(Exception $ex) {
            return response()->json(['error'=>'Hubo un problema al crear el Reporte'.$ex->getMessage()],
                400);
        }
    }
    public function  update(Request $request, $id){
        try{
            $Reporte = Reporte::findOrFail($id);
            $Reporte->update($request->all());
            return response()->json($Reporte, Response::HTTP_OK);
        } catch (Exception $ex){
            return response()->json(['error' => 'Hubo un error al actualizar el Reporte con id => '.$id." : ". $ex->getMessage()
            ],400);
        }
    }
    public function  destroy(Request $request,$id){
        try{
            Reporte::find($id)->delete();
            return response()->json([],Response::HTTP_OK);
        } catch (Exception $ex){
            return response()->json(['error' => 'Hubo un error al eliminar el Reporte con id => '.$id." : ". $ex->getMessage()
            ],400);
        }

    }
}
