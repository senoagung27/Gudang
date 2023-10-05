<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Produksi;
use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Produksi::all();

        return view('pages.produksi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $permissions = Produksi::get();
        // return view('pages.produksi.create', compact('permissions'));
        return view('pages.produksi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jumlah_mobil = $request->input('jumlah_mobil');

        $materials = Material::all();

        $total_stok = 0;
        $total_biaya = 0;
        $total_waktu = 0;

        foreach ($materials as $material) {
            $komponen = Produksi::where('material_id', $material->id)->get();

            $total_stok += $material->stok * $jumlah_mobil;
            $total_biaya += $material->biaya * $jumlah_mobil;
            $total_waktu += $material->waktu_produksi * $jumlah_mobil;

            foreach ($komponen as $komponen_material) {
                $total_stok += $komponen_material->jumlah * $material->stok * $jumlah_mobil;
                $total_biaya += $komponen_material->jumlah * $material->biaya * $material->stok * $jumlah_mobil;
                $total_waktu += $komponen_material->jumlah * $material->waktu_produksi * $material->stok * $jumlah_mobil;
            }
        }

        return response()->json([
            'total_stok' => $total_stok,
            'total_biaya' => $total_biaya,
            'total_waktu' => $total_waktu,
        ]);
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
        //
    }
}
