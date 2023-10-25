<?php

namespace App\Http\Controllers;

use stdClass;
use Carbon\Carbon;
use App\Models\User;
use App\Models\StokFF;
use App\Models\MerkModel;
use App\Models\UserModel;
use App\Models\BarangModel;
use App\Models\SatuanModel;
use App\Models\StokJubelio;
use Illuminate\Http\Request;
use App\Models\CustomerModel;
use App\Models\BarangmasukModel;
use App\Models\JenisBarangModel;
use App\Models\BarangkeluarModel;
use Illuminate\Support\Facades\DB;
use App\Models\warehouse_locations;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

/**
 * Summary of DashboardController
 */
class DashboardController extends Controller
{
    public function index()
    {
        $data["title"] = "Dashboard";
        $data["jenis"] = JenisBarangModel::orderBy('jenisbarang_id', 'DESC')->count();
        $data["satuan"] = SatuanModel::orderBy('satuan_id', 'DESC')->count();
        $data["merk"] = MerkModel::orderBy('merk_id', 'DESC')->count();
        $data["barang"] = BarangModel::leftJoin('tbl_jenisbarang', 'tbl_jenisbarang.jenisbarang_id', '=', 'tbl_barang.jenisbarang_id')->leftJoin('tbl_satuan', 'tbl_satuan.satuan_id', '=', 'tbl_barang.satuan_id')->leftJoin('tbl_merk', 'tbl_merk.merk_id', '=', 'tbl_barang.merk_id')->orderBy('barang_id', 'DESC')->count();
        $data["customer"] = CustomerModel::orderBy('customer_id', 'DESC')->count();
        $data["bm"] = BarangmasukModel::leftJoin('tbl_barang', 'tbl_barang.barang_kode', '=', 'tbl_barangmasuk.barang_kode')->leftJoin('tbl_customer', 'tbl_customer.customer_id', '=', 'tbl_barangmasuk.customer_id')->orderBy('bm_id', 'DESC')->count();
        $data["bk"] = BarangkeluarModel::leftJoin('tbl_barang', 'tbl_barang.barang_kode', '=', 'tbl_barangkeluar.barang_kode')->orderBy('bk_id', 'DESC')->count();
        $data["user"] = UserModel::leftJoin('tbl_role', 'tbl_role.role_id', '=', 'tbl_user.role_id')->select()->orderBy('user_id', 'DESC')->count();
        return view('Admin.Dashboard.index', $data);
    }
    // public function index()
    // {
    //     $datausers = DB::table('users')->paginate(5);
    //     return view('dashboard', compact('datausers'));
    // }

    // public function edit($id)
    // {
    //      $datausers = User::find($id);
    //     return view('user.edit',compact('datausers'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $datausers = User::find($id);
    //     $datausers->update($request->all());
    //     return redirect('/Users')->with('edit', 'Data Berhasil Di Edit');
    // }
    // public function delete($id)
    // {
    //      $datausers = User::where('id','=',$id)->first();
    //     // dd($dataBiodata);
    //     $datausers->delete();
    //     return redirect('/Users');
    // }

}
