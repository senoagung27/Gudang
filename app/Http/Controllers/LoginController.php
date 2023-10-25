<?php

namespace App\Http\Controllers;

use App\Models\WebModel;
use App\Models\UserModel;
use App\Models\AksesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class LoginController extends Controller
{
    public function index()
    {
        $data["title"] = "Login";
        $data["web"] = WebModel::first();
        return view('Admin.Login.index', $data);
    }

    public function proseslogin(Request $request)
    {
        $where = array(
            'user_models.user_nama' => $request->user,
            'user_models.user_password' => md5($request->pwd)
        );
        $getCount = UserModel::where($where)->count();

        if ($getCount > 0) {
            $query = UserModel::leftJoin('role_models', 'role_models.role_id', '=', 'user_models.role_id')->select()->where($where)->first();
            $role = AksesModel::where('role_id', '=', $query->role_id)->get();

            $request->session()->put('user', $query);
            $request->session()->put('user_role', $role);

            Session::flash('status', 'success');
            Session::flash('msg', 'Selamat Datang ' . $query->user_nmlengkap);

            //redirect to index
            return redirect(URL::previous());
        } else {
            Session::flash('status', 'error');
            Session::flash('msg', 'User password tidak cocok!');
            Session::flash('userInput', $request->user);

            //redirect to index
            return redirect(URL::previous());
        }
    }

    public function logout()
    {
        Session::forget('user');
        Session::forget('user_role');

        //redirect to index
        return redirect(URL::previous());
    }
}
