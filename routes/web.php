<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AksesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\StokFFController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProduksiController;
use App\Http\Controllers\AppreanceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserModelController;
use App\Http\Controllers\BarangmasukController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\StokJubelioController;
use App\Http\Controllers\LapStokBarangController;
use App\Http\Controllers\LapBarangMasukController;
use App\Http\Controllers\MasterMaterialController;
use App\Http\Controllers\LapBarangKeluarController;
use App\Http\Controllers\Admin\BarangkeluarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // Route::get('login', 'LoginController@showLoginForm');
    // Route::post('login', 'LoginController@login');
});
// Route::group(['namespace' => 'App\Http\Controllers'], function()
// {
//     /**
//      * Home Routes
//      */
//     Route::get('/', 'HomeController@index')->name('home.index');


//     Route::group(['middleware' => ['guest']], function() {
//         /**
//          * Register Routes
//          */
//         Route::get('/register', 'RegisterController@show')->name('register.show');
//         Route::post('/register', 'RegisterController@register')->name('register.perform');

//         /**
//          * Login Routes
//          */
//         Route::get('/login', 'LoginController@show')->name('login.show');
//         Route::post('/login', 'LoginController@login')->name('login.perform');

//     });

//     Route::group(['middleware' => ['auth', 'permission']], function() {
//         /**
//          * Logout Routes
//          */
//         Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

//         /**
//          * User Routes
//          */


//         Route::group(['prefix' => 'users'], function() {
//             Route::get('/', 'UsersController@index')->name('users.index');
//             Route::get('/create', 'UsersController@create')->name('users.create');
//             Route::post('/create', 'UsersController@store')->name('users.store');
//             Route::get('/{user}/show', 'UsersController@show')->name('users.show');
//             Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
//             Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
//             Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
//         });

//         /**
//          * User Routes
//          */
//         Route::group(['prefix' => 'posts'], function() {
//             Route::get('/', 'PostsController@index')->name('posts.index');
//             Route::get('/create', 'PostsController@create')->name('posts.create');
//             Route::post('/create', 'PostsController@store')->name('posts.store');
//             Route::get('/{post}/show', 'PostsController@show')->name('posts.show');
//             Route::get('/{post}/edit', 'PostsController@edit')->name('posts.edit');
//             Route::patch('/{post}/update', 'PostsController@update')->name('posts.update');
//             Route::delete('/{post}/delete', 'PostsController@destroy')->name('posts.destroy');
//         });

//         Route::resource('roles', RolesController::class);
//         Route::resource('permissions', PermissionsController::class);
//     });
// });

// Route::group([ "middleware" => ['auth:sanctum', config('jetstream.auth_session'), 'verified'] ], function() {
//     Route::get('/dashboard', [ DashboardController::class, "index" ])->name('dashboard');
//     // Route::get('/store-json', [ DashboardController::class, "getstok" ])->name('dashboard');
//     // Route::get('/getwarehouse', [ DashboardController::class, "getwarehouse" ])->name('dashboard');

//     Route::group(['prefix' => 'users'], function() {
//         Route::get('/', [ UserController::class, 'index'])->name('users.index');
//         Route::get('/create', 'UsersController@create')->name('users.create');
//         Route::post('/create', 'UsersController@store')->name('users.store');
//         Route::get('/{user}/show', 'UsersController@show')->name('users.show');
//         Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
//         Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
//         Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
//     });

//     /**
//      * User Routes
//      */
//     Route::group(['prefix' => 'material'], function() {
//         Route::get('/', [ MasterMaterialController::class, 'index'])->name('material.index');
//         Route::get('/create', [ MasterMaterialController::class, 'create'])->name('material.create');
//         Route::post('/store', [ MasterMaterialController::class, 'store'])->name('material.store');
//         Route::get('/{post}/show', 'MasterMaterialController@show')->name('material.show');
//         Route::get('/{post}/edit', 'MasterMaterialController@edit')->name('material.edit');
//         Route::patch('/{post}/update', 'MasterMaterialController@update')->name('material.update');
//         Route::delete('/{post}/delete', 'MasterMaterialController@destroy')->name('material.destroy');
//     });
//     Route::group(['prefix' => 'produksi'], function() {
//         Route::get('/', [ ProduksiController::class, 'index'])->name('produksi.index');
//         Route::get('/create', [ ProduksiController::class, 'create'])->name('produksi.create');
//         Route::post('/store', [ ProduksiController::class, 'store'])->name('produksi.store');
//         Route::get('/{post}/show', 'ProduksiController@show')->name('produksi.show');
//         Route::get('/{post}/edit', 'ProduksiController@edit')->name('produksi.edit');
//         Route::patch('/{post}/update', 'ProduksiController@update')->name('produksi.update');
//         Route::delete('/{post}/delete', 'ProduksiController@destroy')->name('produksi.destroy');
//     });

//     Route::resource('roles', RolesController::class);
//     Route::resource('permissions', PermissionsController::class);
//     // Route::get('/StokJubelio', [ StokJubelioController::class, "index" ])->name('stokjubelio');
//     // Route::get('/StokFF', [ StokFFController::class, "index" ])->name('stokff');
//     // Route::get('/storeff', [ StokFFController::class, "store" ]);

//     // Route::get('/user', [ UserController::class, "index" ])->name('user');
//     // Route::view('/user/new', "pages.user.user-new")->name('user.new');
//     // Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
// });
Route::middleware(['preventBackHistory'])->group(function () {
    Route::get('/admin/login', [LoginController::class, 'index'])->middleware('useractive');
    Route::post('/admin/proseslogin', [LoginController::class, 'proseslogin'])->middleware('useractive');
    Route::get('/admin/logout', [LoginController::class, 'logout']);
});

// admin
Route::group(['middleware' => 'userlogin'], function () {

    // Profile
    Route::get('/admin/profile/{user}', [UserController::class, 'profile']);
    Route::post('/admin/updatePassword/{user}', [UserController::class, 'updatePassword']);
    Route::post('/admin/updateProfile/{user}', [UserController::class, 'updateProfile']);
    Route::get('/admin/appreance/', [AppreanceController::class, 'index']);
    Route::post('/admin/appreance/{setting}', [AppreanceController::class, 'update']);

    Route::middleware(['checkRoleUser:/dashboard,menu'])->group(function () {
        Route::get('/', [DashboardController::class, 'index']);
        Route::get('/admin', [DashboardController::class, 'index']);
        Route::get('/admin/dashboard', [DashboardController::class, 'index']);
    });

    Route::middleware(['checkRoleUser:/jenisbarang,submenu'])->group(function () {
        // Jenis Barang
        Route::get('/admin/jenisbarang', [JenisBarangController::class, 'index']);
        Route::get('/admin/jenisbarang/show/', [JenisBarangController::class, 'show'])->name('jenisbarang.getjenisbarang');
        Route::post('/admin/jenisbarang/proses_tambah/', [JenisBarangController::class, 'proses_tambah'])->name('jenisbarang.store');
        Route::post('/admin/jenisbarang/proses_ubah/{jenisbarang}', [JenisBarangController::class, 'proses_ubah']);
        Route::post('/admin/jenisbarang/proses_hapus/{jenisbarang}', [JenisBarangController::class, 'proses_hapus']);
    });

    Route::middleware(['checkRoleUser:/satuan,submenu'])->group(function () {
        // Satuan
        Route::resource('/admin/satuan', \App\Http\Controllers\SatuanController::class);
        Route::get('/admin/satuan/show/', [SatuanController::class, 'show'])->name('satuan.getsatuan');
        Route::post('/admin/satuan/proses_tambah/', [SatuanController::class, 'proses_tambah'])->name('satuan.store');
        Route::post('/admin/satuan/proses_ubah/{satuan}', [SatuanController::class, 'proses_ubah']);
        Route::post('/admin/satuan/proses_hapus/{satuan}', [SatuanController::class, 'proses_hapus']);
    });

    Route::middleware(['checkRoleUser:/merk,submenu'])->group(function () {
        // Merk
        Route::resource('/admin/merk', \App\Http\Controllers\MerkController::class);
        Route::get('/admin/merk/show/', [MerkController::class, 'show'])->name('merk.getmerk');
        Route::post('/admin/merk/proses_tambah/', [MerkController::class, 'proses_tambah'])->name('merk.store');
        Route::post('/admin/merk/proses_ubah/{merk}', [MerkController::class, 'proses_ubah']);
        Route::post('/admin/merk/proses_hapus/{merk}', [MerkController::class, 'proses_hapus']);
    });

    Route::middleware(['checkRoleUser:/barang,submenu'])->group(function () {
        // Barang
        Route::resource('/admin/barang', \App\Http\Controllers\BarangController::class);
        Route::get('/admin/barang/show/', [BarangController::class, 'show'])->name('barang.getbarang');
        Route::post('/admin/barang/proses_tambah/', [BarangController::class, 'proses_tambah'])->name('barang.store');
        Route::post('/admin/barang/proses_ubah/{barang}', [BarangController::class, 'proses_ubah']);
        Route::post('/admin/barang/proses_hapus/{barang}', [BarangController::class, 'proses_hapus']);
    });

    Route::middleware(['checkRoleUser:/customer,menu'])->group(function () {
        // Customer
        Route::resource('/admin/customer', \App\Http\Controllers\CustomerController::class);
        Route::get('/admin/customer/show/', [CustomerController::class, 'show'])->name('customer.getcustomer');
        Route::post('/admin/customer/proses_tambah/', [CustomerController::class, 'proses_tambah'])->name('customer.store');
        Route::post('/admin/customer/proses_ubah/{customer}', [CustomerController::class, 'proses_ubah']);
        Route::post('/admin/customer/proses_hapus/{customer}', [CustomerController::class, 'proses_hapus']);
    });

    Route::middleware(['checkRoleUser:/barang-masuk,submenu'])->group(function () {
        // Barang Masuk
        Route::resource('/admin/barang-masuk', \App\Http\Controllers\BarangmasukController::class);
        Route::get('/admin/barang-masuk/show/', [BarangmasukController::class, 'show'])->name('barang-masuk.getbarang-masuk');
        Route::post('/admin/barang-masuk/proses_tambah/', [BarangmasukController::class, 'proses_tambah'])->name('barang-masuk.store');
        Route::post('/admin/barang-masuk/proses_ubah/{barangmasuk}', [BarangmasukController::class, 'proses_ubah']);
        Route::post('/admin/barang-masuk/proses_hapus/{barangmasuk}', [BarangmasukController::class, 'proses_hapus']);
        Route::get('/admin/barang/getbarang/{id}', [BarangController::class, 'getbarang']);
        Route::get('/admin/barang/listbarang/{param}', [BarangController::class, 'listbarang']);
    });

    Route::middleware(['checkRoleUser:/lap-barang-masuk,submenu'])->group(function () {
        // Barang Keluar
        Route::resource('/admin/barang-keluar', \App\Http\Controllers\BarangkeluarController::class);
        Route::get('/admin/barang-keluar/show/', [BarangkeluarController::class, 'show'])->name('barang-keluar.getbarang-keluar');
        Route::post('/admin/barang-keluar/proses_tambah/', [BarangkeluarController::class, 'proses_tambah'])->name('barang-keluar.store');
        Route::post('/admin/barang-keluar/proses_ubah/{barangkeluar}', [BarangkeluarController::class, 'proses_ubah']);
        Route::post('/admin/barang-keluar/proses_hapus/{barangkeluar}', [BarangkeluarController::class, 'proses_hapus']);
    });

    Route::middleware(['checkRoleUser:/lap-barang-masuk,submenu'])->group(function () {
        // Laporan Barang Masuk
        Route::resource('/admin/lap-barang-masuk', \App\Http\Controllers\LapBarangMasukController::class);
        Route::get('/admin/lapbarangmasuk/print/', [LapBarangMasukController::class, 'print'])->name('lap-bm.print');
        Route::get('/admin/lapbarangmasuk/pdf/', [LapBarangMasukController::class, 'pdf'])->name('lap-bm.pdf');
        Route::get('/admin/lap-barang-masuk/show/', [LapBarangMasukController::class, 'show'])->name('lap-bm.getlap-bm');
    });

    Route::middleware(['checkRoleUser:/lap-barang-keluar,submenu'])->group(function () {
        // Laporan Barang Keluar
        Route::resource('/admin/lap-barang-keluar', \App\Http\Controllers\LapBarangKeluarController::class);
        Route::get('/admin/lapbarangkeluar/print/', [LapBarangKeluarController::class, 'print'])->name('lap-bk.print');
        Route::get('/admin/lapbarangkeluar/pdf/', [LapBarangKeluarController::class, 'pdf'])->name('lap-bk.pdf');
        Route::get('/admin/lap-barang-keluar/show/', [LapBarangKeluarController::class, 'show'])->name('lap-bk.getlap-bk');
    });

    Route::middleware(['checkRoleUser:/lap-stok-barang,submenu'])->group(function () {
        // Laporan Stok Barang
        Route::resource('/admin/lap-stok-barang', \App\Http\Controllers\LapStokBarangController::class);
        Route::get('/admin/lapstokbarang/print/', [LapStokBarangController::class, 'print'])->name('lap-sb.print');
        Route::get('/admin/lapstokbarang/pdf/', [LapStokBarangController::class, 'pdf'])->name('lap-sb.pdf');
        Route::get('/admin/lap-stok-barang/show/', [LapStokBarangController::class, 'show'])->name('lap-sb.getlap-sb');
    });

    Route::middleware(['checkRoleUser:1,othermenu'])->group(function () {

        Route::middleware(['checkRoleUser:2,othermenu'])->group(function () {
            // Menu
            Route::resource('/admin/menu', \App\Http\Controllers\MenuController::class);
            Route::post('/admin/menu/hapus', [MenuController::class, 'hapus']);
            Route::get('/admin/menu/sortup/{sort}', [MenuController::class, 'sortup']);
            Route::get('/admin/menu/sortdown/{sort}', [MenuController::class, 'sortdown']);
        });

        Route::middleware(['checkRoleUser:3,othermenu'])->group(function () {
            // Role
            Route::resource('/admin/role', \App\Http\Controllers\RoleController::class);
            Route::get('/admin/role/show/', [RoleController::class, 'show'])->name('role.getrole');
            Route::post('/admin/role/hapus', [RoleController::class, 'hapus']);
        });

        Route::middleware(['checkRoleUser:4,othermenu'])->group(function () {
            // List User
            Route::resource('/admin/user', \App\Http\Controllers\UserModelController::class);
            Route::get('/admin/user/show/', [UserModelController::class, 'show'])->name('user.getuser');
            Route::post('/admin/user/hapus', [UserModelController::class, 'hapus']);
        });

        Route::middleware(['checkRoleUser:5,othermenu'])->group(function () {
            // Akses
            Route::get('/admin/akses/{role}', [AksesController::class, 'index']);
            Route::get('/admin/akses/addAkses/{idmenu}/{idrole}/{type}/{akses}', [AksesController::class, 'addAkses']);
            Route::get('/admin/akses/removeAkses/{idmenu}/{idrole}/{type}/{akses}', [AksesController::class, 'removeAkses']);
            Route::get('/admin/akses/setAll/{role}', [AksesController::class, 'setAllAkses']);
            Route::get('/admin/akses/unsetAll/{role}', [AksesController::class, 'unsetAllAkses']);
        });

        Route::middleware(['checkRoleUser:6,othermenu'])->group(function () {
            // Web
            Route::resource('/admin/web', \App\Http\Controllers\WebController::class);
        });
    });
});
