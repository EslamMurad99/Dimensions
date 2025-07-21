<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;  
use App\Models\Contact;
 
class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            // 'subject' => 'required|string|max:255', 
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'تم إرسال الرسالة بنجاح!');
    }

    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'تم حذف الرسالة.');
    }
}
