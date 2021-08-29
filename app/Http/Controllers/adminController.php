<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

use DateTime;
use Session;


class adminController extends Controller
{
    public function index(){
        $email = Session::get('email');
        $right = Session::get('right');
        if (!$email) {
            return Redirect::to('/login');
        } elseif ($right != 'Admin') {
            return Redirect::to('/');
        }
        return View('backend.index');
    }
    public function xemBaiViet(){
        $email = Session::get('email');
        if (!$email) {
            return Redirect::to('/login');
        }
        $baiViet = DB::select('select * from news');
        return View('backend.bai-viet.xem-bai-viet')->with('baiViet', $baiViet);
    }
    public function themBaiViet(){
        $email = Session::get('email');
        if (!$email) {
            return Redirect::to('/login');
        }
        return View('backend.bai-viet.them-bai-viet');
    }
    public function suaBaiViet($id){
        $email = Session::get('email');
        if (!$email) {
            return Redirect::to('/login');
        }
        $baiViet = DB::select('select * from news where id = :id', ['id' => $id]);
        return View('backend.bai-viet.sua-bai-viet')->with('baiViet', $baiViet);
    }
    public function xoaBaiViet($id){
        $email = Session::get('email');
        if (!$email) {
            return Redirect::to('/login');
        }
        DB::table('news')->where('id', $id)->delete();
        Session::put('message', 'Xóa bài viết thành công !');
        return Redirect::to('/admin/xem-bai-viet');
    }
    public function themBaiVietF(REQUEST $res){
        $email = Session::get('email');
        if (!$email) {
            return Redirect::to('/login');
        }
        $tieuDe = $res->input('tieuDe');
        $linhVuc = $res->input('linhVuc');
        $nguoiDang = $res->input('nguoiDang');
        $anhTieuDe = $res->input('anhTieuDe');
        $noiDung = $res->input('noiDung');
        $now = Carbon::now('Asia/Ho_Chi_Minh');

        if($noiDung){
            DB::table('news')
                ->insert([
                    'title' => $tieuDe,
                    'field' => $linhVuc,
                    'poster' => $nguoiDang,
                    'image' => $anhTieuDe,
                    'content' => $noiDung,
                    'created_at' => $now,
                    'updated_at' => $now,
                    'read' => 0
            ]);
            Session::put('message', 'Thêm bài viết thành công !');
            return Redirect::to('/admin');
        } else {
            Session::put('message', 'Nhập nội dung bài viết !');
            return Redirect::to('/admin/them-bai-viet');
        }
    }
    public function suaBaiVietF(REQUEST $res, $id){
        $email = Session::get('email');
        if (!$email) {
            return Redirect::to('/login');
        }
        $tieuDe = $res->input('tieuDe');
        $linhVuc = $res->input('linhVuc');
        $nguoiDang = $res->input('nguoiDang');
        $anhTieuDe = $res->input('anhTieuDe');
        $noiDung = $res->input('noiDung');
        $now = Carbon::now('Asia/Ho_Chi_Minh');

        if($noiDung){
            DB::table('news')
                ->where('id', $id)
                ->update([
                    'title' => $tieuDe,
                    'field' => $linhVuc,
                    'poster' => $nguoiDang,
                    'image' => $anhTieuDe,
                    'content' => $noiDung,
                    'updated_at' => $now,
            ]);
            Session::put('message', 'Cập nhật bài viết thành công !');
            return Redirect::to('/admin/xem-bai-viet');
        } else {
            Session::put('message', 'Nội dung còn trống !');
            return Redirect::to('/admin/xem-bai-viet/');
        }
    }

}
