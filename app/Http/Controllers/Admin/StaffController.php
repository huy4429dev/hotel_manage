<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StaffController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.staff.index', ['user' => $user]);
    }
    public function create()
    {
        return view('admin.staff.add');
    }
    public function postCreate(Request $request)
    {
        $request->validate([
            "avatar" => "required|max:500000",
        ], [
            "avatar.required" => "Bắt buộc phải nhập ảnh",
        ]);
        $image = $request->file('avatar');
        $imageName = time() . '.' . $request->avatar->extension();
        $destinationPath = 'images';
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->ngay_sinh = date('y/m/d', strtotime($request->birthday));
        $user->cham_ngon = $request->chamngon;
        $user->password = $request->password;
        $user->ki_nang = $request->skill;
        $user->ghi_chu = $request->note;
        $user->dia_chi = $request->address;
        $user->vi_tri_id = $request->position;
        $user->avatar =  $image->move($destinationPath, $imageName);
        $user->save();
        return redirect('admin/staff/create')->with('mess', 'Tạo mới nhân viên thành công');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.staff.edit', ['user' => $user]);
    }
    public function postEdit(Request $request,$id )
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->ngay_sinh = date('y/m/d', strtotime($request->birthday));
        $user->cham_ngon = $request->chamngon;
        $user->password = $request->password;
        $user->ki_nang = $request->skill;
        $user->ghi_chu = $request->note;
        $user->dia_chi = $request->address;
        $user->vi_tri_id = $request->position;

        if ($request->hasFile('image')) {
             $image = $request->file('avatar');
            $imageName = time() . '.' . $request->avatar->extension();
            $destinationPath = 'images';
            $user->avatar =  $image->move($destinationPath, $imageName);
        } 
        $success =  $user->save();
        if ($success) {
            return redirect('admin/staff/edit/' . $id)->with('mess', 'Sửa nhân viên thành công');
        } else {
            return Redirect::back()->withErrors(['Sửa nhân viên không thành công,vui lòng kiểm tra lại']);
        }
        
    }
    public function delete($id)
    {
        $order = Order::where('user_id', $id)->get();
        if ($order->isEmpty()) {
            $user = User::find($id)->delete();
            return back()->with('message', 'Xóa thành công');
        } else {
            return back()->with('message', 'Nhân viên này đã có đơn hàng nên không được xóa');
        }
        // return redirect('admin/staff/create')->with('mess','Tạo mới nhân viên thành công');

    }
}
