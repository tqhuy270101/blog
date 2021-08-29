<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;
use Session;
use Illuminate\Support\Facades\Redirect;

class homeController extends Controller
{
    public function home(){
        return View('frontend.welcome');
    }
    public function aboutUs(){
        return View('frontend.about-us');
    }
    public function contactUs(){
        return View('frontend.contact');
    }
    public function blog(){
        $listBlog = DB::table('news')->orderBy('created_at', 'DESC')->paginate(6);
        return View('frontend.blog', ['listBlog' => $listBlog]);
    }
    public function detailsBlog($id){
        $read = DB::table('news')->where('id', $id)->value('read');
        $read++;
        DB::table('news')->where('id', $id)->update(['read' => $read]);
        $baiViet = DB::table('news')->where('id', $id)->get();
        $listBlog = DB::table('news')->where('id', '!=', $id)->paginate(3);
        $listComment = DB::table('comments')->where('idBlog', $id)->get();
        $countComment = DB::table('comments')->where('idBlog', $id)->count();
        return View('frontend.details-blog')->with('baiViet', $baiViet)->with('listBlog', $listBlog)->with('listComment', $listComment)->with('countComment', $countComment);
    }
    public function postComment(REQUEST $res ,$id){
        $fName = $res->input('fName');
        $lName = $res->input('lName');
        $email = $res->input('email');
        $website = $res->input('website');
        $comment = $res->input('comment');
        if($email){
            if($website){
                DB::table('comments')->insert([
                    'fName' => $fName,
                    'lName' => $lName,
                    'email' => $email,
                    'website' => $website,
                    'comment' => $comment,
                    'idBlog' => $id
                ]);
            } else{
                DB::table('comments')->insert([
                    'fName' => $fName,
                    'lName' => $lName,
                    'email' => $email,
                    'website' => ' ',
                    'comment' => $comment,
                    'idBlog' => $id
                ]);
            }
        } else {
            if ($website) {
                DB::table('comments')->insert([
                    'fName' => $fName,
                    'lName' => $lName,
                    'email' => ' ',
                    'website' => $website,
                    'comment' => $comment,
                    'idBlog' => $id
                ]);
            } else {
                DB::table('comments')->insert([
                    'fName' => $fName,
                    'lName' => $lName,
                    'email' => ' ',
                    'website' => $website,
                    'comment' => $comment,
                    'idBlog' => $id
                ]);
            }
        }
        return back();
    }
    public function search(REQUEST $res){
        $search = $res->input('search');
        $result = DB::table('news')->where('title', 'LIKE', "%{$search}%")->latest()->paginate(3);
        return View('frontend.search', ['listSearch' => $result , 'key'=> $search]);
    }
}
