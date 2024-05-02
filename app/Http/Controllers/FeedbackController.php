<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedback');
    }

    public function send(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|min:15',
            'FIO' => 'required|string|max:255|min:15',
            'email' => 'required|string|max:255|email',
            'files' => 'max:16000000'
        ]);
        $feedback = new Feedback();
        $feedback->title = $request->title;
        $feedback->destination = $request->destination;
        $feedback->body = $request->body;
        $path = $request->file('files')->store('feedback', 'public');
        $feedback->files = $path;
        $feedback->FIO = $request->FIO;
        $feedback->email = $request->email;
        $feedback->save();
        return view('feedback')->with('title', 'Ожидайте ответа по почте');
    }

    public function answers(){
        $feedback = Feedback::query()->where('isVisible', '=', '1')->get();
        return view('answers', compact('feedback'));
    }
}
