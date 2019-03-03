<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view ('backend.index');
    }
    public function list_user(){
        $users = DB::table('users')->get();

        return view('backend.users.list_user', ['users' => $users]);
    }
    public function getAddUser(){
        return view ('backend.users.add_user');
    }
    public function postAddUser(Request $request){
        // var_dump($request->name);exit();
        $name = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);
        DB::table('users')->insert(['name' => $name, 'email' => $email, 'password' => $password]);
        return redirect('/list_user')->with('status', 'Đã thêm thành công!');
    }
    public function getEditUser($id){
        $data['users']= DB::table('users')->where('id', $id)->first();
        return view('backend.users.edit_user', $data);
    }
    public function postEditUser(Request $request,$id){
        $name = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);
        DB::table('users')->where('id', $id)
            ->update(['name' => $name, 'email' => $email, 'password' => $password]);
            return redirect('/list_user')->with('status', 'Đã sửa thành công!');
    }
    public function getDelUsers($id){
        DB::table('users')->delete($id);
        return back()->with('status','Đã xóa sản phẩm thành công !!!');
    }
}
