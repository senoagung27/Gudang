<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\AksesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckRoleUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $menu, $type)
    {   
        $getMenu = 1;
        if($type == 'othermenu'){
            $getMenu = AksesModel::where(array('role_id' => Session::get('user')->role_id, 'othermenu_id' => $menu, 'akses_type' => 'view'))->count();
        }else if($type == 'menu'){
            $getMenu = AksesModel::leftJoin('menu_models', 'menu_models.menu_id', '=', 'akses_models.menu_id')->where(array('akses_models.role_id' => Session::get('user')->role_id, 'menu_models.menu_redirect' => $menu, 'akses_models.akses_type' => 'view'))->count();
        }else if($type == 'submenu'){
            $getMenu = AksesModel::leftJoin('submenu_models', 'submenu_models.submenu_id', '=', 'akses_models.submenu_id')->where(array('akses_models.role_id' => Session::get('user')->role_id, 'submenu_models.submenu_redirect' => $menu, 'akses_models.akses_type' => 'view'))->count();
        }
        if($getMenu == 0){
            return abort(404);
        }
        return $next($request);
    }
}
