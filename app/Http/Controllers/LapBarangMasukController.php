<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\WebModel;
// use Barryvdh\DomPDF\PDF;
// use Barryvdh\DomPDF\Facade as PDF;
use PDF;
use Illuminate\Http\Request;
use App\Models\BarangmasukModel;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class LapBarangMasukController extends Controller
{
    public function index(Request $request)
    {
        $data["title"] = "Lap Barang Masuk";
        return view('Admin.Laporan.BarangMasuk.index', $data);
    }

    public function print(Request $request)
    {
        if ($request->tglawal) {
            $data['data'] = BarangmasukModel::leftJoin('barang_models', 'barang_models.barang_kode', '=', 'barangmasuk_models.barang_kode')->leftJoin('customer_models', 'customer_models.customer_id', '=', 'barangmasuk_models.customer_id')->whereBetween('bm_tanggal', [$request->tglawal, $request->tglakhir])->orderBy('bm_id', 'DESC')->get();
        } else {
            $data['data'] = BarangmasukModel::leftJoin('barang_models', 'barang_models.barang_kode', '=', 'barangmasuk_models.barang_kode')->leftJoin('customer_models', 'customer_models.customer_id', '=', 'barangmasuk_models.customer_id')->orderBy('bm_id', 'DESC')->get();
        }

        $data["title"] = "Print Barang Masuk";
        $data['web'] = WebModel::first();
        $data['tglawal'] = $request->tglawal;
        $data['tglakhir'] = $request->tglakhir;
        return view('Admin.Laporan.BarangMasuk.print', $data);
    }

    public function pdf(Request $request)
    {
        if ($request->tglawal) {
            $data['data'] = BarangmasukModel::leftJoin('barang_models', 'barang_models.barang_kode', '=', 'barangmasuk_models.barang_kode')->leftJoin('customer_models', 'customer_models.customer_id', '=', 'barangmasuk_models.customer_id')->whereBetween('bm_tanggal', [$request->tglawal, $request->tglakhir])->orderBy('bm_id', 'DESC')->get();
        } else {
            $data['data'] = BarangmasukModel::leftJoin('barang_models', 'barang_models.barang_kode', '=', 'barangmasuk_models.barang_kode')->leftJoin('customer_models', 'customer_models.customer_id', '=', 'barangmasuk_models.customer_id')->orderBy('bm_id', 'DESC')->get();
        }

        $data["title"] = "PDF Barang Masuk";
        $data['web'] = WebModel::first();
        $data['tglawal'] = $request->tglawal;
        $data['tglakhir'] = $request->tglakhir;
        $pdf = PDF::loadView('Admin.Laporan.BarangMasuk.pdf', $data);
        
        if($request->tglawal){
            return $pdf->download('lap-bm-'.$request->tglawal.'-'.$request->tglakhir.'.pdf');
        }else{
            return $pdf->download('lap-bm-semua-tanggal.pdf');
        }
        
    }

    public function show(Request $request)
    {
        if ($request->ajax()) {
            if ($request->tglawal == '') {
                $data = BarangmasukModel::leftJoin('barang_models', 'barang_models.barang_kode', '=', 'barangmasuk_models.barang_kode')->leftJoin('customer_models', 'customer_models.customer_id', '=', 'barangmasuk_models.customer_id')->orderBy('bm_id', 'DESC')->get();
            } else {
                $data = BarangmasukModel::leftJoin('barang_models', 'barang_models.barang_kode', '=', 'barangmasuk_models.barang_kode')->leftJoin('customer_models', 'customer_models.customer_id', '=', 'barangmasuk_models.customer_id')->whereBetween('bm_tanggal', [$request->tglawal, $request->tglakhir])->orderBy('bm_id', 'DESC')->get();
            }
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('tgl', function ($row) {
                    $tgl = $row->bm_tanggal == '' ? '-' : Carbon::parse($row->bm_tanggal)->translatedFormat('d F Y');

                    return $tgl;
                })
                ->addColumn('customer', function ($row) {
                    $customer = $row->customer_id == '' ? '-' : $row->customer_nama;

                    return $customer;
                })
                ->addColumn('barang', function ($row) {
                    $barang = $row->barang_id == '' ? '-' : $row->barang_nama;

                    return $barang;
                })
                ->rawColumns(['tgl', 'customer', 'barang'])->make(true);
        }
    }
}
