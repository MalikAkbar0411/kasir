<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPenjualan;


class DetailPenjualanController extends Controller
{
    public function index()
    {
        $detailPenjualan = DetailPenjualan::get();
        return view('admin.detailPenjualan.index', ['detailPenjualan' => $detailPenjualan]);
    }

    public function tambah()
    {
        return view('admin.detailPenjualan.form');
    }

    public function simpan(Request $request)
    {
        $data = [
            'penjualan_id' => $request->penjualan_id,
            'produk_id' => $request->produk_id,
            'jml_produk'=> $request->jml_produk,
            'sub_total' => $request->sub_total
        ];

        DetailPenjualan::create($data);
        return redirect()->route('detailPenjualan');
    }

    public function edit($id)
    {
        $detailPenjualan = DetailPenjualan::find($id)->fisrt();
        return view('admin.detailPenjualan.form', ['detailPenjualan' => $detailPenjualan]);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'penjualan_id' => $request->penjualan_id,
            'produk_id' => $request->produk_id,
            'jml_produk'=> $request->jml_produk,
            'sub_total' => $request->sub_total
        ];

        DetailPenjualan::find($id)->update($data);
        return redirect()->route('detailPenjualan');
    }

    public function hapus($id)
    {
        DetailPenjualan::find($id)->delete();
        return redirect()->route('detailPenjualan');
    }
}
