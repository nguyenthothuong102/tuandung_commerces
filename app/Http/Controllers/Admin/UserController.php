<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Session;


class UserController extends Controller
{
  public function index()
  {
    $users = User::where('isActive', '!=', 2)->with('role')->orderBy('created_at','desc')->paginate(15);
    // dd($users);
    return view('admin.users.index', ['users' => $users]);
  }

  public function create(){
    $roles = Role::pluck('name', 'id');
    return view('admin.users.create', compact('roles'));
  }

  public function store(Request $request){
    $data= $request->all();
    $data['password'] = bcrypt($data['password']);
    $user= User::create($data);
    //$user = new User;
    return redirect()->route('admin.user.index')->with('success','Tạo mới thành công!');
  }

  public function edit($id)
  {
    $roles = Role::pluck('name', 'id');
    $user = User::find($id);
    return view('admin.users.edit', compact('roles', 'user'));

  }

  public function update(Request $request, User $user){
    $data= $request->all();
    $user->update($data);
    Session::flash('success','Cập nhật thành công!');

    return redirect()->route('admin.user.index');
  }

  public function destroy($id){
    $user = User::find($id);
    $user->delete();

    return redirect()->back()->with('success','Xóa người dùng thành công!');
  }

  public function list_active(){
    $users = User::where('isActive', '!=', 1)->with('role')->orderBy('created_at','desc')->paginate(15);
    return view('admin.users.index', ['users' => $users]);
  }
}
