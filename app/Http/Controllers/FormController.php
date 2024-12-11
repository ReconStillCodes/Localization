<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class FormController extends Controller
{
     public function submitForm(Request $request)
    {


        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:forms,email',
            'age' => 'required|integer',
            'address' => 'required|string',
        ]);

        $form = new Form();
        $form->name = $request->input('name');
        $form->email = $request->input('email');
        $form->age = $request->input('age');
        $form->address = $request->input('address');
        $form->save();

        return redirect()->route('showcase')->with('success', 'Form Submitted!');
    }

    public function form(){
        return view('form');
    }

    public function showcase(){
        $forms = Form::all();
        return view('showcase', compact('forms'));
    }
    
    public function setlocale($lang){{
        if (in_array($lang, ['en', 'id'])) {
            Session::put('locale', $lang); 
            App::setLocale($lang);
        }
        return back();
    }}
}
