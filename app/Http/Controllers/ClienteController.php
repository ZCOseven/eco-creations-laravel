<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    public function guardar(Request $request)
    {
        $request->validate([
            'nomcli' => 'required|string|max:40',
            'apecli' => 'required|string|max:40',
            'dnicli' => 'required|string|max:15',
            'celcli' => 'required|string|max:13',
            'dircli' => 'required|string|max:150',
        ]);

        Cliente::create([
            'nomcli' => $request->nomcli,
            'apecli' => $request->apecli,
            'dnicli' => $request->dnicli,
            'celcli' => $request->celcli,
            'dircli' => $request->dircli,
        ]);

        return response()->json(['success' => true]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
