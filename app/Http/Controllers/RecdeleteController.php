<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class RecdeleteController extends Controller
{
    public function index() {
        $users = DB::select('select * from contactus');
        return view('viewrec',['users'=>$users]);
     }
     public function destroy($id) {
        
        DB::table('contactus')->where('id', $id)->delete();
        return redirect('/edit-records')->with('message',' Record Updated Successfully!');
     //   return redirect()->back()->with('message', 'Record Deleted Successfully!');
    }
}
