<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\DataObat;
use App\TransaksiPenjualan;
use App\TransaksiPenjualanDet;
use Illuminate\Support\Facades\DB;
class TransaksiPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tpo = \App\TransaksiPenjualan::All();
        return view('transaksipenjualan.transaksipenjualan', ['transaksipenjualan' => $tpo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Mengambil semua data obat
        $dataobat = DataObat::all();

        // Logika untuk membuat nomor transaksi unik
        $AWAL = 'TRX';
        $noUrutAkhir = TransaksiPenjualan::max('id');
        $nomorawal = $noUrutAkhir + 1;
        $no = 1;

        if ($noUrutAkhir) {
            $nomor = sprintf($AWAL . '-' . "%05s", abs($noUrutAkhir + 1));
        } else {
            $nomor = sprintf($AWAL . '-' . "%05s", $no);
        }

        // Mengirimkan data ke view
        return view('transaksipenjualan.input', [
            'nomor' => $nomor,
            'nomorawal' => $nomorawal,
            'dataobat' => $dataobat
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // Menyimpan Data Transaksi Utama
    $transaksi = new \App\TransaksiPenjualan;
    $transaksi->notrans = $request->notrans;
    $transaksi->tgltrans = $request->tgltrans;
    $transaksi->harga = $request->totalharga; // asumsikan total harga transaksi dihitung di frontend
    $transaksi->jumlah = $request->input('jumlah1')+$request->input('jumlah2')+$request->input('jumlah3');
    $transaksi->save();
    
    // Menyimpan Data Detail Transaksi dan Update Stok Obat
    for ($i = 1; $i <= 3; $i++) {
        $obat_id = $request->get('obat_id' . $i);
        $jumlah = $request->get('jumlah' . $i);
        if ($obat_id != '' && $jumlah > "0") {
            $obat = \App\DataObat::find($obat_id);
            $harga_satuan = $obat->harga;

            // Membuat Detail Transaksi
            $detail = new \App\TransaksiPenjualanDet;
            $detail->transaksi_penjualan_id = $transaksi->id;
            $detail->obat_id = $obat_id;
            $detail->jumlah = $jumlah;
            $detail->harga_satuan = $harga_satuan;
            $detail->total_harga = $harga_satuan * $jumlah;
            $detail->save();

            // Mengurangi Stok Obat
            $obat->stok -= $jumlah;
            $obat->save();
        }
    }

    return redirect()->route('transaksipenjualan.index');
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
{
    $transaksi = \App\TransaksiPenjualan::with('detailTransaksi')->findOrFail($id);

    // Model untuk DataObat
    foreach ($transaksi->detailTransaksi as $detail) {
        $detail->obat = DataObat::find($detail->obat_id);
    }

    $pdf = PDF::loadview('transaksipenjualan.invoice_pdf', ['transaksi' => $transaksi])->setPaper('A5', 'portrait');

    return $pdf->stream('invoice-'.$transaksi->notrans.'.pdf');
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
        $tpo = \App\TransaksiPenjualan::findOrFail($id);
        $tpo->delete();
        DB::table('transaksi_penjualan_dets')->where('transaksi_penjualan_id','=',$tpo->id)->delete();
        return redirect()->route( 'transaksipenjualan.index');
    }

    public function showDetail($id)
{
    $transaksiDetail = \App\TransaksiPenjualan::with('detailTransaksi.obat')->findOrFail($id);

    return view('transaksipenjualan.detail', ['transaksi' => $transaksiDetail]);
}

    
}
