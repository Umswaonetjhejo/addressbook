<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $contacts = Contact::all();

        return view('contacts', compact('contacts'));
    }

    public function create()
    {
        return view('createContact');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');

        $contacts = DB::table('contacts')->where('fname', 'like', '%'.$search.'%')->paginate(5);

        return view('contacts', compact('contacts'));
    }

    public function store()
    {
        $contact = new Contact();

        $contact->fname = request('fname');
        $contact->lname = request('lname');
        $contact->phone = request('phone');
        $contact->email = request('email');

        $contact->save();

        return redirect('/');
    }

    public function edit($id)
    {
        $contact = Contact::find($id);

        return view('editContact', compact('contact'));
    }

    public function update($id)
    {
        $contact = Contact::find($id);

        $contact->fname = request('fname');
        $contact->lname = request('lname');
        $contact->phone = request('phone');
        $contact->email = request('email');

        $contact->save();

        return redirect('/');
    }

    public function delete($id)
    {
        $contact = Contact::find($id);

        return view('deleteContact', compact('contact'));
    }

    public function destroy($id)
    {
        Contact::find($id)->delete();

        return redirect('/');
    }

}
