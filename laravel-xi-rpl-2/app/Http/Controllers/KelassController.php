<?php

namespace App\Http\Controllers;

use App\Models\Kelass;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreKelassRequest;
use App\Http\Requests\UpdateKelassRequest;

class KelassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tb_kelases = Kelass::select('nama_kelas','kompetensi_keahlian')->get();
        return view('kelass.index', compact('tb_kelases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelass.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKelassRequest $request, Kelass $kelass)
    {
        $kelass->create($request->all());
        return redirect()->route('kelass.index')
        ->with(['success' => 'Data telah di simpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelass $kelass)
    {
        $tb_kelases->create($request->all());
        return redirect()->route('kelass.index')
        ->with(['success' => 'Data telah di simpan']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelass $kelass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelassRequest $request, Kelass $kelass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelass $kelass)
    {
        
    }
}
