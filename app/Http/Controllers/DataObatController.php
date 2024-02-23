<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataObat; 

class DataObatController extends Controller
{

public function getHargaObat($id)
{
    $obat = DataObat::find($id);
    if (!$obat) {
        return response()->json(['error' => 'Obat tidak ditemukan'], 404);
    }
    return response()->json(['harga' => $obat->harga]);
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtob = \App\DataObat::All();
        return view( 'dataobat.dataobat' , ['dataobat' => $dtob]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dataobat.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $dataobat = new DataObat;
            $dataobat->kdobat = $request->get('kdobat');
            $dataobat->nmobat = $request->get('nmobat');
            $dataobat->stok = $request->get('stok');
            $dataobat->harga = $request->get('harga');
            $dataobat->save();
    
            return redirect()->route('dataobat.index')->with('success', 'Data obat berhasil disimpan.');
        };
    
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
        $dataobat_edit = DataObat::findOrFail($id);
        return view('dataobat.edit', ['dataobat' => $dataobat_edit]);
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
        // Validasi input
        $validatedData = $request->validate([
            'kdobat' => 'required|max:10',
            'nmobat' => 'required|max:50',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        $dataobat = DataObat::findOrFail($id);

        // Update data obat
        $dataobat->update([
            'kdobat' => $validatedData['kdobat'],
            'nmobat' => $validatedData['nmobat'],
            'stok' => $validatedData['stok'],
            'harga' => $validatedData['harga'],
        ]);

        return redirect()->route('dataobat.index')->with('success', 'Data obat berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataobat = DataObat::findOrFail($id);
        $dataobat->delete();

        return redirect()->route('dataobat.index')->with('success', 'Data obat berhasil dihapus.');
    }
}

