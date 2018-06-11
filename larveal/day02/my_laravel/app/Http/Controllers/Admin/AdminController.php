<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/7
 * Time: 8:09
 */

namespace App\Http\Controllers\Admin;




use App\Admins;
use App\Http\Controllers\Controller;

use app\models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use think\Route;

class AdminController extends Controller
{
    public function index(){
           $list =  Admins::all();

//        $users = DB::table('admin')->get();

         return view('admin/index', ['list' => $list]);
    }

    public function add(){
        return view('admin.add');
    }
    public function addSave(){
        $arr = new Admins();
        $arr->save();

//        $arr = Db::table('admin')->insert($_POST);
        return view('Admin/index');
    }

    public function update(){

       $data =  DB::table('admin')->where(['id'=>$_GET['id']])->get();


        return view('admin.update',['list'=>$data[0]]);
    }
    public function save(){
        unset($_POST['_token']);

       $data =  DB::table('admin')->where(['id'=>$_POST['id']])->update($_POST);

        return redirect('index');
    }
    public function delete(){
        DB::table('admins')->where(['id'=>$_GET['id']])->delete();
        return redirect('admin/index');

    }


}