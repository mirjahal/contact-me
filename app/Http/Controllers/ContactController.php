<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index')->with('contacts', $contacts);
    }
    
    public function create()
    {
        return view('contact.create');
    }
    
    public function store(ContactRequest $request)
    {
        $contact = new Contact($request->all());
        $contact->save();
        
        return redirect('contact')->with('message', 'Contact successfully added.');
    }
    
    public function edit(Contact $contact)
    {
        return view('contact.edit')->with('contact', $contact);
    }
    
    public function update(Contact $contact, ContactRequest $request)
    {
        $contact->update($request->all());
        
        return redirect('contact')->with('message', 'Contact successfully updated.');
    }
    
    public function destroy(Contact $contact)
    {
        $contact->delete();
        
        return redirect('contact')->with('message', 'Contact successfully removed.');
    }
    
    public function show(Contact $contact)
    {
        return view('contact.show')->with('contact', $contact);
    }
}

