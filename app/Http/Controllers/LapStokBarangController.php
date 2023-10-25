<?php

namespace App\Http\Controllers;

use App\Models\WebModel;
use Barryvdh\DomPDF\PDF;
use App\Models\BarangModel;
use Illuminate\Http\Request;
use App\Models\BarangmasukModel;
use Yajra\DataTables\DataTables;
use App\Models\BarangkeluarModel;
use App\Http\Controllers\Controller;

class LapStokBarangController extends Controller
{
    public function index(Request $request)
    {
        $data["title"] = "Lap Stok Barang";
        return view('Admin.Laporan.StokBarang.index', $data);
    }

    public function print(Request $request)
    {
        $data['data'] = BarangModel::leftJoin('jenis_barang_models', 'jenis_barang_models.jenisbarang_id', '=', 'barang_models.jenisbarang_id')->leftJoin('satuan_models', 'satuan_models.satuan_id', '=', 'barang_models.satuan_id')->leftJoin('merk_models', 'merk_models.merk_id', '=', 'barang_models.merk_id')->orderBy('barang_id', 'DESC')->get();

        $data["title"] = "Print Stok Barang";
        $data['web'] = WebModel::first();
        $data['tglawal'] = $request->tglawal;
        $data['tglakhir'] = $request->tglakhir;
        return view('Admin.Laporan.StokBarang.print', $data);
    }

    public function pdf(Request $request)
    {
        $data['data'] = BarangModel::leftJoin('jenis_barang_models', 'jenis_barang_models.jenisbarang_id', '=', 'barang_models.jenisbarang_id')->leftJoin('satuan_models', 'satuan_models.satuan_id', '=', 'barang_models.satuan_id')->leftJoin('merk_models', 'merk_models.merk_id', '=', 'barang_models.merk_id')->orderBy('barang_id', 'DESC')->get();

        $data["title"] = "PDF Stok Barang";
        $data['web'] = WebModel::first();
        $data['tglawal'] = $request->tglawal;
        $data['tglakhir'] = $request->tglakhir;
        $pdf = PDF::loadView('Admin.Laporan.StokBarang.pdf', $data);
        
        if($request->tglawal){
            return $pdf->download('lap-stok-'.$request->tglawal.'-'.$request->tglakhir.'.pdf');
        }else{
            return $pdf->download('lap-stok-semua-tanggal.pdf');
        }
        
    }

    public function show(Request $request)
    {
        if ($request->ajax()) {
            $data = BarangModel::leftJoin('jenis_barang_models', 'jenis_barang_models.jenisbarang_id', '=', 'barang_models.jenisbarang_id')->leftJoin('satuan_models', 'satuan_models.satuan_id', '=', 'barang_models.satuan_id')->leftJoin('merk_models', 'merk_models.merk_id', '=', 'barang_models.merk_id')->orderBy('barang_id', 'DESC')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('stokawal', function ($row) {
                    $result = '<span class="">'.$row->barang_stok.'</span>';

                    return $result;
                })
                ->addColumn('jmlmasuk', function ($row) use ($request) {
                    if ($request->tglawal == '') {
                        $jmlmasuk = BarangmasukModel::leftJoin('barang_models', 'barang_models.barang_kode', '=', 'barangmasuk_models.barang_kode')->leftJoin('customer_models', 'customer_models.customer_id', '=', 'barangmasuk_models.customer_id')->where('barangmasuk_models.barang_kode', '=', $row->barang_kode)->sum('barangmasuk_models.bm_jumlah');
                    } else {
                        $jmlmasuk = BarangmasukModel::leftJoin('barang_models', 'barang_models.barang_kode', '=', 'barangmasuk_models.barang_kode')->leftJoin('customer_models', 'customer_models.customer_id', '=', 'barangmasuk_models.customer_id')->whereBetween('bm_tanggal', [$request->tglawal, $request->tglakhir])->where('barangmasuk_models.barang_kode', '=', $row->barang_kode)->sum('barangmasuk_models.bm_jumlah');
                    }

                    $result = '<span class="">'.$jmlmasuk.'</span>';

                    return $result;
                })
                ->addColumn('jmlkeluar', function ($row) use ($request) {
                    if ($request->tglawal) {
                        $jmlkeluar = BarangkeluarModel::leftJoin('barang_models', 'barang_models.barang_kode', '=', 'barangkeluar_models.barang_kode')->whereBetween('bk_tanggal', [$request->tglawal, $request->tglakhir])->where('barangkeluar_models.barang_kode', '=', $row->barang_kode)->sum('barangkeluar_models.bk_jumlah');
                    } else {
                        $jmlkeluar = BarangkeluarModel::leftJoin('barang_models', 'barang_models.barang_kode', '=', 'barangkeluar_models.barang_kode')->where('barangkeluar_models.barang_kode', '=', $row->barang_kode)->sum('barangkeluar_models.bk_jumlah');
                    }

                    $result = '<span class="">'.$jmlkeluar.'</span>';

                    return $result;
                })
                ->addColumn('totalstok', function ($row) use ($request) {
                    if ($request->tglawal == '') {
                        $jmlmasuk = BarangmasukModel::leftJoin('barang_models', 'barang_models.barang_kode', '=', 'barangmasuk_models.barang_kode')->leftJoin('customer_models', 'customer_models.customer_id', '=', 'barangmasuk_models.customer_id')->where('barangmasuk_models.barang_kode', '=', $row->barang_kode)->sum('barangmasuk_models.bm_jumlah');
                    } else {
                        $jmlmasuk = BarangmasukModel::leftJoin('barang_models', 'barang_models.barang_kode', '=', 'barangmasuk_models.barang_kode')->leftJoin('customer_models', 'customer_models.customer_id', '=', 'barangmasuk_models.customer_id')->whereBetween('bm_tanggal', [$request->tglawal, $request->tglakhir])->where('barangmasuk_models.barang_kode', '=', $row->barang_kode)->sum('barangmasuk_models.bm_jumlah');
                    }


                    if ($request->tglawal) {
                        $jmlkeluar = BarangkeluarModel::leftJoin('barang_models', 'barang_models.barang_kode', '=', 'barangkeluar_models.barang_kode')->whereBetween('bk_tanggal', [$request->tglawal, $request->tglakhir])->where('barangkeluar_models.barang_kode', '=', $row->barang_kode)->sum('barangkeluar_models.bk_jumlah');
                    } else {
                        $jmlkeluar = BarangkeluarModel::leftJoin('barang_models', 'barang_models.barang_kode', '=', 'barangkeluar_models.barang_kode')->where('barangkeluar_models.barang_kode', '=', $row->barang_kode)->sum('barangkeluar_models.bk_jumlah');
                    }

                    $totalstok = $row->barang_stok + ($jmlmasuk - $jmlkeluar);
                    if($totalstok == 0){
                        $result = '<span class="">'.$totalstok.'</span>';
                    }else if($totalstok > 0){
                        $result = '<span class="text-success">'.$totalstok.'</span>';
                    }else{
                        $result = '<span class="text-danger">'.$totalstok.'</span>';
                    }
                    

                    return $result;
                })
                ->rawColumns(['stokawal', 'jmlmasuk', 'jmlkeluar', 'totalstok'])->make(true);
        }
    }
}
