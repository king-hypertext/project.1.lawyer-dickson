<?php

namespace App\Http\Controllers;

use App\Http\Requests\joinRequest;
use App\Models\Messages;
use App\Models\ModelJoin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AppController extends Controller
{

    public function handleJoin(Request $request)
    {
        // dd($request);

        $request->validate([
            'email' => 'required|email',
            'fullname' => 'required|string',
            'phone_number' => 'required|string|max:15',
            'location' => 'required|string',
            'interest' => 'required|string'
        ]);
        ModelJoin::create([
            'email' => $request->email,
            'fullname' => $request->fullname,
            'phone_number' => $request->phone_number,
            'location' => $request->location,
            'interest' => $request->interest,
            'comments' => $request->comments
        ]);
        // if (!$join) {
        //     return redirect()->route('home');
        // }
        return back()->with('response', 'Request Submitted');
    }

    public function handleMessages(Request $request)
    {
        // dd($request);
        $request->validate([
            'fullname' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);
        Messages::create([
            'fullname' => $request->fullname,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'message' => $request->message
        ]);
        // if (!$message) {
        //     return redirect()->route('home');
        // }
        return back()->with('response', 'Your Message has been sent');
    }
}
