<?php

namespace App\Http\Controllers;
use App\Models\cajero;
use Illuminate\Http\Request;

class CajeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cajeros = cajero::latest()->paginate(5);
        return view('cajeros.index', compact('cajeros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cajeros.create');
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
        $this->validate($request, [
           
            'apellidos'  => 'required',
            'nombres'    => 'required',
            'celtel'  => 'required',
            'direccion'  => 'required'
           
        ]);

        $cajero = cajero::create([
           
            'apellidos'  => $request->apellidos,
            'nombres'    => $request->nombres,
            'celtel'  => $request->celtel,
            'direccion'  => $request->direccion,
           
        ]);

        if($cajero){
            //Redirigir con mensaje de éxito
            return redirect()->route('cajeros.index')->with(['success' => 'Datos ingresados exitosamente...']);
        }else{
            //Redirigir con mensaje de error
            return redirect()->route('cajeros.index')->with(['error' => 'No se pudieron guardar los datos...']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cajero $cajero)
    {
        //
        return view('cajeros.show', compact('cajero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cajero $cajero)
    {
        //
        return view('cajeros.edit', compact('cajero'));
        //return $cajero;
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
        $this->validate($request, [
            'apellidos'  => 'required',
            'nombres'    => 'required',
            'celtel'  => 'required',
            'direccion'  => 'required',
           
        ]);

        //Obtener datos de catequista por ID
        $cajero = cajero::findOrFail($id);

        $cajero->update([
            
            'apellidos'  => $request->apellidos,
            'nombres'    => $request->nombres,
            'celtel'  => $request->celtel,
            'direccion'  => $request->direccion,
          
        ]);        

        if($cajero){
            //Redirigir con mensaje de éxito
            return redirect()->route('cajeros.index')->with(['success' => 'Datos actualizados...']);
        }else{
            //Redirigir con mensaje de error
            return redirect()->route('cajeros.index')->with(['error' => 'No se pudieron actualizar los datos...!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $cajero = cajero::findOrFail($id);
        $cajero->delete();

        if($cajero){
            //Redirigir con mensaje de éxito
            return redirect()->route('cajeros.index')->with(['success' => 'Datos eliminados con éxito...']);
        }else{
            //Redirigir con mensaje de error
            return redirect()->route('cajeros.index')->with(['error' => 'No se pudieron borrar los datos...']);
        }
    }
}
