<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Agenda::all();
        return view('agenda/agenda', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agenda/tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Agenda;
        $data->namaguru = $request->namaguru;
        $data->matapelajaran = $request->matapelajaran;
        $data->absensi = $request->absensi;
        $data->kelas = $request->kelas;
        if($request->file('dokumentasi')){
            $file = $request->file('dokumentasi');

            $filename = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('files', $filename);
            $data->dokumentasi = $filename;  
        }
        // dd($data);
       
        $data->save();
        return redirect('agenda')->with('success', 'Data berhasil disimpan.');
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
        $data = Agenda::findOrFail($id);
        return view('agenda/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Agenda::findorfail($id);
        $data->namaguru = $request->namaguru;
        $data->matapelajaran = $request->matapelajaran;
        $data->absensi = $request->absensi;
        $data->kelas = $request->kelas;
        if($request->file('dokumentasi')){
            $file = $request->file('dokumentasi');

            $filename = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('files', $filename);

            File::delete('files', $data->dokumentasi);

            $data->dokumentasi = $filename;  
        }
        // dd($data);
        $data->save();

        return redirect('agenda')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Agenda::findorfail($id);
        $data->delete();

        return redirect('agenda')->with('success', 'data berhasil didelete');
    }
}
?>