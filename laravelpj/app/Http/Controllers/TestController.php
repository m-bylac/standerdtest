<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TestController;

class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function confirm(Request $request)
    {
        $request->validate([
            'name' => 'required|name',
            'email' => 'required|email',
            'postcode' => 'required|postcode',
            'address' => 'required|address',
            'builsing' => 'required',
            'opinion' => 'required'
        ]);
        $inputs = $request->all();
        return view('contact.confirm', [
            'inputs' => $inputs,
        ]);
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|name',
            'email' => 'required|email',
            'postcode' => 'required|postcode',
            'address' => 'required|address',
            'builsing' => 'required',
            'opinion' => 'required'
        ]);
   

    $action = $request->input('action');
    $inputs = $request->except('action');

    if($action !== 'submit'){
        return redirect()
            ->route('contact.send')
            ->withInput($inputs);
    
        } else {
            \Mail::to($inputs['email'])->send(new ContactSendmail($inputs));

            $request->session()->regenerateToken();

            return view('contact.send');
            
        }
    }
}
