<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\notif;
use App\User;
use App\Notifications\Reminder;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth');
    }
 
    public function index()
    {
        // user 2 sends a message to user 1
        $message = new notif;
        $message->setAttribute('from', 2);
        $message->setAttribute('to', 1);
        $message->setAttribute('message', 'Demo message from user 2 to user 1.');
        $message->save();
         
        $fromUser = User::find(2);
        $toUser = User::find(1);
         
        // send notification using the "user" model, when the user receives new message
        $toUser->notify(new Reminder($toUser));
         
        // send notification using the "Notification" facade
        // Notification::send($toUser, new Reminder($fromUser));
    }
}
