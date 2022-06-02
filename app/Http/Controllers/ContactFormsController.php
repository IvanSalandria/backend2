<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['create']]);
    }
    
    public function showAllForms()
    {
        return response()->json(ContactForm::all());
    }

    public function showOneForm($id)
    {
        return response()->json(ContactForm::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'subject' => ['required', 'string'],
            'contact' => ['required', 'string'],
            'email' => ['required', 'string'],
            'message' => ['required', 'string']
        ]);
        $form = ContactForm::create($request->all());

        return response()->json($form, 201);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'subject' => ['required', 'string'],
            'contact' => ['required', 'string'],
            'email' => ['required', 'string'],
            'message' => ['required', 'string']
        ]);

        $form = ContactForm::findOrFail($id);
        $form->update($request->all());

        return response()->json($form, 200);
    }

    public function delete($id)
    {
        ContactForm::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
