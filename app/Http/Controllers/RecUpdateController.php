<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class RecUpdateController extends Controller
{
    public function index() {
        $users = DB::select('select * from contactus');
        return view('viewrec',['users'=>$users]);
     }
     public function show($id) {
        $users = DB::select('select * from contactus where id = ?',[$id]);
        return view('updaterec',['users'=>$users]);
     }
     public function edit(Request $request,$id) {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
        DB::update('update contactus set name = ? where id = ?',[$name,$id]);
        DB::update('update contactus set phone = ? where id = ?',[$phone,$id]);
        DB::update('update contactus set email = ? where id = ?',[$email,$id]);
        DB::update('update contactus set subject = ? where id = ?',[$subject,$id]);
        DB::update('update contactus set message = ? where id = ?',[$message,$id]);
       
        return redirect('/edit-records')->with('updatemessage','Record Updated Successfully!');

     }
}
