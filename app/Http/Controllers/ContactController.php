<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactRequest;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        ContactRequest::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Запрос на обратную связь отправлен успешно.');
    }


    public function index()
    {

        return view('contact.index');
    }



    public function managerList()
    {
        $contacts = ContactRequest::all();
        return view('manager.contactRequests', compact('contacts'));
    }
    public function adminList()
    {
        $contacts = ContactRequest::all();
        return view('admin.contactRequests', compact('contacts'));
    }

    public function managerDestroy($id)
    {
        $contact= ContactRequest::findOrFail($id);
        $contact->delete();

        return redirect()->route('manager.contacts')->with('success', 'Заявка успешно удалена.');
    }
    public function adminDestroy($id)
    {
        $contact= ContactRequest::findOrFail($id);
        $contact->delete();

        return redirect()->route('admin.contacts')->with('success', 'Заявка успешно удалена.');
    }
}
