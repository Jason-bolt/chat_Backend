<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index()
    {
        return view('index');
    }

    function chat()
    {
        $users = User::all()->except(Auth::id());

        return view('chat')->with([
            'users' => $users
        ]);
    }

////    function chat_messages()
////    {
////
////    }
//
//    function send_message(Request $request)
//    {
//        $request->validate([
//           'username' => ['string'],
//           'message' => ['message']
//        ]);
//
//        $username = $request->username;
//        $message = $request->message;
//
//        event(new Message("username", "message"));
//
//        return ["success" => true];
//    }
//
////    /**
////     * Fetch all messages
////     *
////     * @return Message
////     */
////    public function fetchMessages()
////    {
////        return Message::with('user')->get();
////    }
////
////    /**
////     * Persist message to database
////     *
////     * @param  Request $request
////     * @return Response
////     */
////    public function sendMessage(Request $request)
////    {
////        $user = Auth::user();
////
////        $message = $user->messages()->create([
////            'message' => $request->input('message')
////        ]);
////
////        return ['status' => 'Message Sent!'];
////    }

}
