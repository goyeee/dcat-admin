<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(){
        return redirect()->action('UserController@realGetUser');
    }

    public function realGetUser(){
        return 'real user';
    }

    public function allRequest(){
        var_dump('I am a function process ALL REQUEST');
        exit();
    }

    /**
     * @param $userid
     * @return string
     */
    public function getDetailById($userid) {
        return redirect()->action('UserController@realGetDetailById', ['userid' => $userid])->with('age','20');
    }

    public function realGetDetailById($userid){
        return view('foo',['name' => 'goyeee','age' => '28', 'id' => $userid]);
    }
    public function getComments($postid, $commentid=null) {
        return 'PostId:' . $postid . ' CommentId:' . $commentid;
    }
    public function getjsondetail($userid) {
        return response()->json(['userid' => $userid]);
    }
}
