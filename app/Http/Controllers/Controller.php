<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index()
    {
        return view('index');
    }

    function chat()
    {
        return view('chat');
    }

    function send_message(Request $request)
    {
        dd($request);
//        $request->validate([
//           'username' => ['string'],
//           'message' => ['message']
//        ]);
//
//        $username = $request->username;
//        $message = $request->message;
//
//        event(new Message($username, $message));
    }

}
