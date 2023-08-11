<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contacts.index',['contacts'=>Contact::all()]); //This returns the view to show all contacts 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create'); //This returns the view to create a new contact (Use store)
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([ //This validates the data before storing it

            'name' => 'required',
            'phone_number' => 'required|min:8|max:12',
            'email' => 'required|email',
            'Age' => 'required|numeric|min:1|max:255',
        ]);
        Contact::create($data); //This creates the contact and stores it in the database
        return redirect()->route('home'); //This redirects to home
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact')); //This returns the view to show a contact
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact')); //This returns the view to edit a contact (Use update)
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $data = $request->validate([ //This validates the data before storing it

            'name' => 'required',
            'phone_number' => 'required|min:8|max:12',
            'email' => 'required|email',
            'Age' => 'required|numeric|min:1|max:255',
        ]);
        $contact->update($data); //This updates the contact 
        return redirect()->route('home'); //This redirects to home
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete(); //This deletes the contact
        return redirect()->route('home'); //This redirects to home
    }
}
