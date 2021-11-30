<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create(){
        return view('contact.create');
    }

    public function store(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->save();
        return redirect()->route('create')->with('status','New contact created!');
    }

    public function index(){
        $contacts = Contact::all();
        return $contacts;
    }

    public function show($id){
        $contact = Contact::find($id);
        return $contact;
    }

    public function destroy($id){
        $contact = Contact::find($id);
        $contact -> delete();
        return redirect()->route('create')->with('status','contact deleted!');
    }

    public function edit($id){
        $contact = Contact::find($id);
        return view('contact.update',compact('contact'));
    }

    public function update($id, Request $request){
        $contact = Contact::find($id);
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->update();
        return redirect()->route('create')->with('status','Contact updated!');
    }
}
