<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data 'destinasi' dan juga 'author'
        // yang berelasi melalui method 'author'
        // yang berasal dari model 'destinasi'
        $contact = Contact::with('contact')->get();
        return view('admin.contact.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'telp' => 'required',
        ]);

        $contact = new contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->tepl = $request->telp;
        $contact->save();
        return redirect()->route('contact.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $contact = Contact::findOrFail($id);
        return view('admin.contac$contact.show', compact('contac$contact'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contact = Contact::findOrFail($id);
        return view('admin.co$contact.edit', compact('co$contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'telp' => 'required',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->name = $request->name;
        $contact->save();
        return redirect()->route('con$contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('con$contact.index');
    }
}
