<?php

namespace App\Http\Controllers;

use App\Models\MerkModel;
use App\Models\AksesModel;
use App\Models\BarangModel;
use App\Models\SatuanModel;
use Illuminate\Http\Request;
use App\Models\BarangmasukModel;
use App\Models\JenisBarangModel;
use Yajra\DataTables\DataTables;
use App\Models\BarangkeluarModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["title"] = "Barang";
        $data["hakTambah"] = AksesModel::leftJoin('submenu_models', 'submenu_models.submenu_id', '=', 'akses_models.submenu_id')->where(array('akses_models.role_id' => Session::get('user')->role_id, 'submenu_models.submenu_judul' => 'Barang', 'akses_models.akses_type' => 'create'))->count();
        $data["jenisbarang"] =  JenisBarangModel::orderBy('jenisbarang_id', 'DESC')->get();
        $data["satuan"] =  SatuanModel::orderBy('satuan_id', 'DESC')->get();
        $data["merk"] =  MerkModel::orderBy('merk_id', 'DESC')->get();
        return view('Admin.Barang.index', $data);
    }

    public function getbarang($id)
    {
        $data = BarangModel::leftJoin('jenis_barang_models', 'jenis_barang_models.jenisbarang_id', '=', 'barang_models.jenisbarang_id')->leftJoin('satuan_models', 'satuan_models.satuan_id', '=', 'barang_models.satuan_id')->leftJoin('merk_models', 'merk_models.merk_id', '=', 'barang_models.merk_id')->where('barang_models.barang_kode', '=', $id)->get();
        return json_encode($data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BarangModel  $barangModel
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if ($request->ajax()) {

            $data = BarangModel::leftJoin('jenis_barang_models', 'jenis_barang_models.jenisbarang_id', '=', 'barang_models.jenisbarang_id')->leftJoin('satuan_models', 'satuan_models.satuan_id', '=', 'barang_models.satuan_id')->leftJoin('merk_models', 'merk_models.merk_id', '=', 'barang_models.merk_id')->orderBy('barang_id', 'DESC')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('img', function ($row) {
                    $array = array(
                        "barang_gambar" => $row->barang_gambar,
                    );
                    if ($row->barang_gambar == "image.png") {
                        $img = '<a data-bs-effect="effect-super-scaled" data-bs-toggle="modal" href="#Gmodaldemo8" onclick=gambar(' . json_encode($array) . ')><span class="avatar avatar-lg cover-image" style="background: url(&quot;' . url('/assets/default/barang') . '/' . $row->barang_gambar . '&quot;) center center;"></span></a>';
                    } else {
                        $img = '<a data-bs-effect="effect-super-scaled" data-bs-toggle="modal" href="#Gmodaldemo8" onclick=gambar(' . json_encode($array) . ')><span class="avatar avatar-lg cover-image" style="background: url(&quot;' . asset('storage/barang/' . $row->barang_gambar) . '&quot;) center center;"></span></a>';
                    }

                    return $img;
                })
                ->addColumn('jenisbarang', function ($row) {
                    $jenisbarang = $row->jenisbarang_id == '' ? '-' : $row->jenisbarang_nama;

                    return $jenisbarang;
                })
                ->addColumn('satuan', function ($row) {
                    $satuan = $row->satuan_id == '' ? '-' : $row->satuan_nama;

                    return $satuan;
                })
                ->addColumn('merk', function ($row) {
                    $merk = $row->merk_id == '' ? '-' : $row->merk_nama;

                    return $merk;
                })
                ->addColumn('currency', function ($row) {
                    $currency = $row->barang_harga == '' ? '-' : 'Rp ' . number_format($row->barang_harga, 0);

                    return $currency;
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
                ->addColumn('action', function ($row) {
                    $array = array(
                        "barang_id" => $row->barang_id,
                        "jenisbarang_id" => $row->jenisbarang_id,
                        "satuan_id" => $row->satuan_id,
                        "merk_id" => $row->merk_id,
                        "barang_id" => $row->barang_id,
                        "barang_kode" => $row->barang_kode,
                        "barang_nama" => trim(preg_replace('/[^A-Za-z0-9-]+/', '_', $row->barang_nama)),
                        "barang_harga" => $row->barang_harga,
                        "barang_stok" => $row->barang_stok,
                        "barang_gambar" => $row->barang_gambar,
                    );
                    $button = '';
                    $hakEdit = AksesModel::leftJoin('submenu_models', 'submenu_models.submenu_id', '=', 'akses_models.submenu_id')->where(array('akses_models.role_id' => Session::get('user')->role_id, 'submenu_models.submenu_judul' => 'Barang', 'akses_models.akses_type' => 'update'))->count();
                    $hakDelete = AksesModel::leftJoin('submenu_models', 'submenu_models.submenu_id', '=', 'akses_models.submenu_id')->where(array('akses_models.role_id' => Session::get('user')->role_id, 'submenu_models.submenu_judul' => 'Barang', 'akses_models.akses_type' => 'delete'))->count();
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
                ->rawColumns(['action', 'img', 'jenisbarang', 'satuan', 'merk', 'currency', 'totalstok'])->make(true);
        }
    }

    public function listbarang(Request $request)
    {
        if ($request->ajax()) {
            $data = BarangModel::leftJoin('jenis_barang_models', 'jenis_barang_models.jenisbarang_id', '=', 'barang_models.jenisbarang_id')->leftJoin('satuan_models', 'satuan_models.satuan_id', '=', 'barang_models.satuan_id')->leftJoin('merk_models', 'merk_models.merk_id', '=', 'barang_models.merk_id')->orderBy('barang_id', 'DESC')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('img', function ($row) {
                    if ($row->barang_gambar == "image.png") {
                        $img = '<span class="avatar avatar-lg cover-image" style="background: url(&quot;' . url('/assets/default/barang') . '/' . $row->barang_gambar . '&quot;) center center;"></span>';
                    } else {
                        $img = '<span class="avatar avatar-lg cover-image" style="background: url(&quot;' . asset('storage/barang/' . $row->barang_gambar) . '&quot;) center center;"></span>';
                    }

                    return $img;
                })
                ->addColumn('jenisbarang', function ($row) {
                    $jenisbarang = $row->jenisbarang_id == '' ? '-' : $row->jenisbarang_nama;

                    return $jenisbarang;
                })
                ->addColumn('satuan', function ($row) {
                    $satuan = $row->satuan_id == '' ? '-' : $row->satuan_nama;

                    return $satuan;
                })
                ->addColumn('merk', function ($row) {
                    $merk = $row->merk_id == '' ? '-' : $row->merk_nama;

                    return $merk;
                })
                ->addColumn('currency', function ($row) {
                    $currency = $row->barang_harga == '' ? '-' : 'Rp ' . number_format($row->barang_harga, 0);

                    return $currency;
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
                ->addColumn('action', function ($row) use ($request) {
                    $array = array(
                        "barang_kode" => $row->barang_kode,
                        "barang_nama" => trim(preg_replace('/[^A-Za-z0-9-]+/', '_', $row->barang_nama)),
                        "satuan_nama" => trim(preg_replace('/[^A-Za-z0-9-]+/', '_', $row->satuan_nama)),
                        "jenisbarang_nama" => trim(preg_replace('/[^A-Za-z0-9-]+/', '_', $row->jenisbarang_nama)),
                    );
                    $button = '';
                    if ($request->get('param') == 'tambah') {
                        $button .= '
                        <div class="g-2">
                            <a class="btn btn-primary btn-sm" href="javascript:void(0)" onclick=pilihBarang(' . json_encode($array) . ')>Pilih</a>
                        </div>
                        ';
                    } else {
                        $button .= '
                    <div class="g-2">
                        <a class="btn btn-success btn-sm" href="javascript:void(0)" onclick=pilihBarangU(' . json_encode($array) . ')>Pilih</a>
                    </div>
                    ';
                    }

                    return $button;
                })
                ->rawColumns(['action', 'img', 'jenisbarang', 'satuan', 'merk', 'currency', 'totalstok'])->make(true);
        }
    }

    public function proses_tambah(Request $request)
    {
        $img = "";
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->nama)));

        //upload image
        if ($request->file('foto') == null) {
            $img = "image.png";
        } else {
            $image = $request->file('foto');
            $image->storeAs('public/barang/', $image->hashName());
            $img = $image->hashName();
        }


        //create
        BarangModel::create([
            'barang_gambar' => $img,
            'jenisbarang_id' => $request->jenisbarang,
            'satuan_id' => $request->satuan,
            'merk_id' => $request->merk,
            'barang_kode' => $request->kode,
            'barang_nama' => $request->nama,
            'barang_slug' => $slug,
            'barang_harga' => $request->harga,
            'barang_stok' => 0,

        ]);

        return response()->json(['success' => 'Berhasil']);
    }

    public function proses_ubah(Request $request, BarangModel $barang)
    {

        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->nama)));

        //check if image is uploaded
        if ($request->hasFile('foto')) {

            //upload new image
            $image = $request->file('foto');
            $image->storeAs('public/barang', $image->hashName());

            //delete old image
            Storage::delete('public/barang/' . $barang->barang_gambar);

            //update data with new image
            $barang->update([
                'barang_gambar'  => $image->hashName(),
                'jenisbarang_id' => $request->jenisbarang,
                'satuan_id' => $request->satuan,
                'merk_id' => $request->merk,
                'barang_kode' => $request->kode,
                'barang_nama' => $request->nama,
                'barang_slug' => $slug,
                'barang_harga' => $request->harga,
                'barang_stok' => $request->stok,
            ]);
        } else {
            //update data without image
            $barang->update([
                'jenisbarang_id' => $request->jenisbarang,
                'satuan_id' => $request->satuan,
                'merk_id' => $request->merk,
                'barang_kode' => $request->kode,
                'barang_nama' => $request->nama,
                'barang_slug' => $slug,
                'barang_harga' => $request->harga,
                'barang_stok' => $request->stok,
            ]);
        }

        return response()->json(['success' => 'Berhasil']);
    }
    public function proses_hapus(Request $request, BarangModel $barang)
    {
        //delete image
        Storage::delete('public/barang/' . $barang->barang_gambar);

        //delete
        $barang->delete();

        return response()->json(['success' => 'Berhasil']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BarangModel  $barangModel
     * @return \Illuminate\Http\Response
     */
    public function edit(BarangModel $barangModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BarangModel  $barangModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BarangModel $barangModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BarangModel  $barangModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(BarangModel $barangModel)
    {
        //
    }
}
