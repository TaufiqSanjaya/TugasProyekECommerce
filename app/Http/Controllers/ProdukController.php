<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $data['result'] = Produk::all();
        return view('produk.list', $data);
    }


    public function create()
    {
        return view('produk.form');
    }

    public function store(Request $request, produk $produk = null)
    {
        $rules = [
            'kategori_produk' => 'required',
            'harga_produk' => 'required|numeric|min:1000'
        ];
        $this->validate($request, $rules);

        $input = $request->all();

        if ($request->hasFile('foto_produk')) {
            $fileName = $request->foto_produk->getClientOriginalName();
            $request->foto_produk->storeAs('produk', $fileName);
            $input['foto_produk'] = $fileName;
        }

        produk::updateOeCreate(['id' => @$produk->id], $request->all());
        return redirect('/produk.form', compact('produk'));
    }

    public function edit(produk $produk)
    {
        return view ('produk.form', compact('produk'));
    }
}