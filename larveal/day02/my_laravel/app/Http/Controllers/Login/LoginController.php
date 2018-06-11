<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/9
 * Time: 14:45
 */

namespace App\Http\Controllers\Login;


use App\Http\Controllers\Controller;
use app\Http\models\Admin;


class LoginController extends Controller
{
    public function index()
    {
        $data = Admin::all();
        return view('admin.index',['list'=>$data]);
    }

}