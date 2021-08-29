<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

use Session;




class loginController extends Controller
{
    public function login(){
        return View('backend.login');
    }
    public function loginF(REQUEST $res){
        $email = $res->input('email');
        $password = md5($res->input('password'));
        $account = DB::table('accounts')->where('email', $email)->where('password', $password)->first();
        $right = DB::table('accounts')->where('email', $email)->where('password', $password)->where('right', 'Admin')->first();
        if ($account) {
            Session::put('email', $email);
            Session::put('message', 'Đăng nhập thành công !');
            if ($right) {
                Session::put('right', 'Admin');
                return Redirect::to('/admin');
            } else{
                Session::put('right', 'User');
                return Redirect::to('/');
            }
        } else {
            Session::put('message', 'Email hoặc mật khẩu chưa đúng !');
            return Redirect::to('/login');
        }
    }
    public function logout(){
        Session::put('email', null);
        Session::put('right', null);
        return Redirect::to('/login');
    }
    public function register(){
        return View('backend.register');
    }
    public function registerF(REQUEST $res){
        $email = $res->input('email');
        $password = md5($res->input('password'));
        $repassword = md5($res->input('repassword'));
        $accounts = DB::table('accounts')->where('email', $email)->first();
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        if (!$accounts) {
            if ($password == $repassword) {
                $a = DB::table('accounts')->insert([
                    'email' => $email,
                    'password' => $password,
                    'created_at' => $now,
                    'updated_at' => $now,
                    'right' => 'User',
                ]);
                if ($a) {
                    Session::put('message', 'Đăng ký thành công !');
                    return Redirect::to('/login');
                }
            } else {
                Session::put('message', 'Mật khẩu không khớp !');
                return Redirect::to('/register');
            }
        } else {
            Session::put('message', 'Email đã tồn tại !');
            return Redirect::to('/register');
        }
    }
}
