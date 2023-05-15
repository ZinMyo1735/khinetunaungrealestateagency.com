<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contact;                             // import Contact Model 

use Illuminate\Support\Facades\Validator;            // import Validator

class ContactController extends Controller
{
    // direct contact page
    public function contact() {
        return view('contact');
    }

    // Create Contact
    public function createContact(Request $request) {
        // dd($request->all());
        $this->contactValidationCheck($request);

        $data = $this->requestContactData($request);

        // dd($data);

        Contact::create($data);

        return redirect()->route('contact')->with(['createSuccess'=>'Your message has been sent. Thank you!']);
    }

    // Message List
    public function message() {
        $messages = Contact::orderBy('contacts.id','desc')->paginate(6);

        return view('admin.message',compact('messages'));
    }

    // Delete Message
    public function delete($id) {
        // dd($id);
        Contact::where('id',$id)->delete();
        return back(); 
    }

    // Contact Validation Check
    private function contactValidationCheck($request) {
        Validator::make($request->all(),[
            'contactName' => 'required',
            'contactEmail' => 'required',
            'contactSubject' => 'required',
            'contactMessage' => 'required',
        ])->validate(); 
    }

    // Request Contact Data
    private function requestContactData($request) {
        return [
            'name' => $request->contactName,
            'email' => $request->contactEmail,
            'subject' => $request->contactSubject,
            'message' => $request->contactMessage,
        ];
    }
}
