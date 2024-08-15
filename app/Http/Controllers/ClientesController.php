<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\CreateClienteRequest;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::oldest('id')->paginate(3);
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create',[
            'cliente'=>new Cliente
        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateClienteRequest $request)
    {
        Cliente::create($request->validated());
        return redirect()->route('clientes')->with('success', 'Cliente created successfully!');//
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('show',[
            'cliente'=>Cliente::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $id)
{

            return view('edit',[
                'cliente'=> $id]);


    }

    public function update(CreateclienteRequest $request, $id)
    {
     
            $cliente = Cliente::findOrFail($id);
            $cliente->nombres = $request->input('nombres');
            $cliente->email = $request->input('email');
            $cliente->direccion = $request->input('direccion');
            $cliente->fono = $request->input('fono');
            $cliente->save();
      
    
        return redirect()->route('clientes')->with('success', 'Cliente actualizado exitosamente.');
    }
    public function destroy(Cliente $cliente) {
        $cliente->delete();
        return redirect()->route('clientes');
    
    }

}
