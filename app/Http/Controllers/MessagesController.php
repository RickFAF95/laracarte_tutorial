<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class MessagesController extends Controller
{
    public function create()
    {
        return view('messages.create');
    }
    public function store(ContactRequest $request)
    {
//        $this->validate($request, [
//           'name' => 'required|min:3',
//            'email' => 'required|email',
//            'message' => 'required|min:10'
//        ]);
        $maillable = new ContactMessageCreated($request->name, $request->email, $request->msg);
        Mail::to('rickfaf1@gmail.com')->send($maillable);
        session()->flash('success', 'Nous vous répondrons dans les plus brefs délais!');
        return redirect()->route('home');
    }
}
