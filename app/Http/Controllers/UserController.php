<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('userlist')->get()->all();
        return view("list",compact('users'));
    }
    public function add()
    {
        return view("add");
    }
    public function handleAdd(Request $request)
    {
        $user = $request->except("_token");
        DB::table('userlist')->insert($user);
        return redirect()->route('user');
    }
    public function update($id)
    {
        $user = DB::table('userlist')->where("id",$id)->first();
        return view("update",compact('user'));
    }

    public function handleUpdate(Request $request,$id)
    {
        DB::table('userlist')->where('id', $id)->update($request->all());
        return redirect()->route('/');
    }

}
