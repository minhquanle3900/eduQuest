<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class AdminController extends Controller
{
    public function index() {
        return view('admin.share.master');
    }

    public function indexLoginAdmin() {
        $check = Auth::guard('admin')->check();
        if($check){
            return redirect('/admin');
        }
        else return view('admin.pages.login');
    }

    public function actionLogin(Request $request) {
        // dd($request->all());
        $check = Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if($check)
        {
            toastr()->success("Đăng Nhập Thành Công!");
            return redirect('/admin');
        } else
            toastr()->error("Tài Khoản Hoặc Mật Khẩu Chưa Đúng!");
            return redirect('/admin/login');

    }

    public function indexLostPass() {
        return view('admin.pages.lost-pass');
    }

    public function actionLostPass(Request $request) {
        $taiKhoan = Admin::where('email', $request->email)->first();
        if($taiKhoan) {
            $now = Carbon::now();
            $time = $now->diffInMinutes($taiKhoan->update_at);
            if(!$taiKhoan->hash_reset || $time > 0) {
                $taiKhoan->hash_reset = Str::uuid();
                $taiKhoan->save();

                $link = env('APP_URL') . '/admin/update-password/' . $taiKhoan->hash_reset ;
                // Mail::to($taiKhoan->email)->send(new QuenMatKhau($link));
            }
            toastr()->success("Vui lòng kiểm tra email!");
            return redirect('/admin/login');

        } else {
            toastr()->error("Tài khoản không tồn tại!");
            return redirect('/admin/lost-password');
            }
        }
}
