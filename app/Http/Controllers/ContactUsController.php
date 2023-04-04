<?php 
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\ContactModel;
 
class ContactUsController extends Controller
{
   public function ContactUs()
   {
       return view('contact');
   }
 

   public function contactSaveData(Request $request)
   {
    $contact= new ContactModel();
       
        $contact->name=$request->input('name');
        $contact->phone=$request->input('phone');
        $contact->email=$request->input('email');
        $contact->subject=$request->input('subject');
        $contact->message=$request->input('message');

        $contact->save();

        return redirect('/contact')->with('Success','Thank you! for contacting us.');
    }
}