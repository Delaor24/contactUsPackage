<?php
namespace rimon\contact\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use rimon\contact\Models\Contact;
use rimon\contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function create(){
    	return view('contact::contact');
    }

    public function store(Request $r){
    	$this->validate($r,[
    		'name'=>'required',
    		'email'=>'required',
    		'message'=>'required'
    	]);
        Mail::to(config('contact.send_to_mail'))->send(new ContactMailable($r->name,$r->message));

    	$contact = Contact::create($r->all());
    	return redirect()->back();

    }

}
