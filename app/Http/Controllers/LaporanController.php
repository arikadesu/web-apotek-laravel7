<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\TransaksiPenjualan;
use App\DataObat;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan');
    }

    public function show(Request $request)
    {
        $request->validate([
            'periode' => 'required',
            'tglawal' => 'required_if:periode,periode',
            'tglakhir' => 'required_if:periode,periode',
        ]);

        $jenis = $request->input('jenis');

        if ($jenis == 'transaksipenjualan') {
            if ($request->input('periode') == 'All') {
                $data = TransaksiPenjualan::join('transaksi_penjualan_dets', 'transaksi_penjualan_dets.transaksi_penjualan_id', '=', 'transaksi_penjualan.id')->join('data_obat', 'data_obat.id', '=', 'transaksi_penjualan_dets.obat_id')->get();
                $periode = 'Semua';
                
            } else {
                $tglawal = $request->input('tglawal');
                $tglakhir = $request->input('tglakhir');
                $data = TransaksiPenjualan::join('transaksi_penjualan_dets', 'transaksi_penjualan_dets.transaksi_penjualan_id', '=', 'transaksi_penjualan.id')->join('data_obat', 'data_obat.id', '=', 'transaksi_penjualan_dets.obat_id')->whereBetween('tgltrans', [$tglawal, $tglakhir])
                                            ->orderBy('tgltrans', 'ASC')
                                            ->get();
                $periode = $tglawal . ' - ' . $tglakhir;
            }
            // Menghitung total harga
        $totalPrice = $data->sum('harga'); 

        $pdf = PDF::loadview('transaksipenjualan.transaksipenjualan_pdf', [
            'transaksipenjualan' => $data,
            'periode' => $periode,
            'totalPrice' => $totalPrice // Kirim total harga ke tampilan
        ])->setPaper('A4', 'landscape');

        return $pdf->stream();
    }


    }
}