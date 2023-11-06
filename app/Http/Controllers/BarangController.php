<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_barang = Barang::all();
        return view('barang.index', compact('data_barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang'   => 'required',
            'qty'           => 'required|integer'
        ]);

        $barang = new Barang;
        $barang->nama_barang = $request->input('nama_barang');
        $barang->qty = $request->input('qty');
        $barang->save();

        return redirect()->route('barang.index')
            ->with('success', 'Barang telah ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang = Barang::find($id);
        if (!$barang) {
            return redirect()->route('barang.index')->with('error', 'Barang tidak ditemukan.');
        }

        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = Barang::find($id);
        if (!$barang) {
            return redirect()->route('barang.index')->with('error', 'Barang tidak ditemukan.');
        }
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_barang'   => 'required',
            'qty'           => 'required|integer'
        ]);

        $barang = Barang::find($id);

        if (!$barang) {
            return redirect()->route('barang.index')->with('error', 'Barang tidak ditemukan.');
        }

        $barang->nama_barang = $request->input('nama_barang');
        $barang->qty = $request->input('qty');
        $barang->save();

        return redirect()->route('barang.index')
            ->with('success', 'Barang telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
