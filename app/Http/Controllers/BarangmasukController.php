<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\AksesModel;
use Illuminate\Http\Request;
use App\Models\CustomerModel;
use App\Models\BarangmasukModel;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class BarangmasukController extends Controller
{
    public function index()
    {
        $data["title"] = "Barang Masuk";
        $data["hakTambah"] = AksesModel::leftJoin('submenu_models', 'submenu_models.submenu_id', '=', 'akses_models.submenu_id')->where(array('akses_models.role_id' => Session::get('user')->role_id, 'submenu_models.submenu_judul' => 'Barang Masuk', 'akses_models.akses_type' => 'create'))->count();
        $data["customer"] = CustomerModel::orderBy('customer_id', 'DESC')->get();
        return view('Admin.BarangMasuk.index', $data);
    }

    public function show(Request $request)
    {
        if ($request->ajax()) {
            $data = BarangmasukModel::leftJoin('barang_models', 'barang_models.barang_kode', '=', 'barangmasuk_models.barang_kode')->leftJoin('customer_models', 'customer_models.customer_id', '=', 'barangmasuk_models.customer_id')->orderBy('bm_id', 'DESC')->get();
            // $data = DB::table('barangmasuk_models')
            // ->leftJoin('barang_models', 'barang_models.barang_kode', '=', 'barangmasuk_models.barang_kode')
            // ->leftJoin('customer_models', 'customer_models.customer_id', '=', 'barangmasuk_models.customer_id')
            // ->orderBy('bm_id', 'desc')
            // ->get();

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
                ->addColumn('action', function ($row) {
                    $array = array(
                        "bm_id" => $row->bm_id,
                        "bm_kode" => $row->bm_kode,
                        "barang_kode" => $row->barang_kode,
                        "customer_id" => $row->customer_id,
                        "bm_tanggal" => $row->bm_tanggal,
                        "bm_jumlah" => $row->bm_jumlah
                    );
                    $button = '';
                    $hakEdit = AksesModel::leftJoin('submenu_models', 'submenu_models.submenu_id', '=', 'akses_models.submenu_id')->where(array('akses_models.role_id' => Session::get('user')->role_id, 'submenu_models.submenu_judul' => 'Barang Masuk', 'akses_models.akses_type' => 'update'))->count();
                    $hakDelete = AksesModel::leftJoin('submenu_models', 'submenu_models.submenu_id', '=', 'akses_models.submenu_id')->where(array('akses_models.role_id' => Session::get('user')->role_id, 'submenu_models.submenu_judul' => 'Barang Masuk', 'akses_models.akses_type' => 'delete'))->count();
                    if ($hakEdit > 0 && $hakDelete > 0) {
                        $button .= '
                        <div class="g-2">
                        <a class="btn modal-effect text-primary btn-sm" data-bs-effect="effect-super-scaled" data-bs-toggle="modal" href="#Umodaldemo8" data-bs-toggle="tooltip" data-bs-original-title="Edit" onclick=update(' . json_encode($array) . ')><span class="fe fe-edit text-success fs-14"></span></a>
                        <a class="btn modal-effect text-danger btn-sm" data-bs-effect="effect-super-scaled" data-bs-toggle="modal" href="#Hmodaldemo8" onclick=hapus(' . json_encode($array) . ')><span class="fe fe-trash-2 fs-14"></span></a>
                        </div>
                        ';
                    } else if ($hakEdit > 0 && $hakDelete == 0) {
                        $button .= '
                        <div class="g-2">
                            <a class="btn modal-effect text-primary btn-sm" data-bs-effect="effect-super-scaled" data-bs-toggle="modal" href="#Umodaldemo8" data-bs-toggle="tooltip" data-bs-original-title="Edit" onclick=update(' . json_encode($array) . ')><span class="fe fe-edit text-success fs-14"></span></a>
                        </div>
                        ';
                    } else if ($hakEdit == 0 && $hakDelete > 0) {
                        $button .= '
                        <div class="g-2">
                        <a class="btn modal-effect text-danger btn-sm" data-bs-effect="effect-super-scaled" data-bs-toggle="modal" href="#Hmodaldemo8" onclick=hapus(' . json_encode($array) . ')><span class="fe fe-trash-2 fs-14"></span></a>
                        </div>
                        ';
                    } else {
                        $button .= '-';
                    }
                    return $button;
                })
                ->rawColumns(['action', 'tgl', 'customer', 'barang'])->make(true);
        }
    }

    public function proses_tambah(Request $request)
    {

        //insert data
        BarangmasukModel::create([
            'bm_tanggal' => $request->tglmasuk,
            'bm_kode' => $request->bmkode,
            'barang_kode' => $request->barang,
            'customer_id'   => $request->customer,
            'bm_jumlah'   => $request->jml,
        ]);

        return response()->json(['success' => 'Berhasil']);
    }


    public function proses_ubah(Request $request, BarangmasukModel $barangmasuk)
    {
        //update data
        $barangmasuk->update([
            'bm_tanggal' => $request->tglmasuk,
            'barang_kode' => $request->barang,
            'customer_id'   => $request->customer,
            'bm_jumlah'   => $request->jml,
        ]);

        return response()->json(['success' => 'Berhasil']);
    }

    public function proses_hapus(Request $request, BarangmasukModel $barangmasuk)
    {
        //delete
        $barangmasuk->delete();

        return response()->json(['success' => 'Berhasil']);
    }

}
