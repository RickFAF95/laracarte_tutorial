<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

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
        return view('messages.store');
    }
}
