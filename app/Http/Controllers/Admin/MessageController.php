<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Contact::latest()->get();
        return view('admin.messages.index', compact('messages'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.messages.index')->with('success', 'Message supprimé.');
    }
}
