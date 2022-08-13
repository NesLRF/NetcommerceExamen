<?php

namespace App\Http\Controllers;


use App\Models\Actividades;
use App\Models\Usuarios;
use App\Models\Empresas;
use Illuminate\Http\Request;

class McController extends Controller
{
    public function index()
    {
        $actividades = Actividades::all();
        $act = Actividades::where('Estado',0)->get();
        return view('myoi.index',compact('actividades'));

    }

    public function update(Request $id)
    {
       
            $act = Actividades::find($id)->first();
            $act->Estado = 'Finalizada';
            $act->save();
            return redirect()->route('myoi.index');
       
    }

    public function empresas()
    {
        $emp = Empresas::withCount('actividades')->orderBy('actividades_count', 'desc')->get();
        return view('myoi.empresas',compact('emp'));
        // $empresaord = [];
        // foreach($emp as $empresa)
        // {
        //     $aux = array($empresa->id => count($empresa->actividades));
        //     // array_push($emporesaord, 1);
        //     $empresaord[] = $aux;
        // }
        // dd($empresaord);
    }
    public function usua()
    {
        $empu = Usuarios::withCount('actividades')->get();
        $sana = $empu->where('actividades_count', '<', 5);
        return view('myoi.usuarios',compact('sana'));
        
    }

}   
