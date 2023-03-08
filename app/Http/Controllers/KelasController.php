<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kelas::all();
        return view('kelas/kelas', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas/tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Kelas;
        $data->kelas = $request->kelas;
        $data->walas = $request->walas;
       
        $data->save();
        return redirect('kelas')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Kelas::findOrFail($id);
        return view('kelas/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Kelas::findorfail($id);
        $data->kelas = $request->kelas;
        $data->walas = $request->walas;
      
        $data->save();

        return redirect('kelas')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Kelas::findorfail($id);
        $data->delete();

        return redirect('kelas')->with('success', 'data berhasil didelete');
    }
}
