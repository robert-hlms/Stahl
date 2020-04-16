<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Validator;

class ContactController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    	$contacts = Contact::all();
    	return view('contact.index',["contacts"=>$contacts]);
    }

    public function store(){
    	$validation = Validator::make(request()->all(), [
            'name' => 'required|max:60',
            'email' => 'required|email|max:60',
            'subject' => 'required|max:60',
            'message' => 'required|max:500'
        ]);

        if($validation->passes()){
            Contact::create(request()->all());
        	return response()->json([
            	"success" => "Su solicitud se ha enviado exiosamente"
            ]);
        }
        else{
        	return response()->json([
            	"errors" => $validation->errors()->all()
            ]);
        }
    }
}
