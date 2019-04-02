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
    // just to send the email, based on the user id in the parameter
    public function index($user_id)
    {
        
        // to set the sender in $fromUser to the receiver $toUser
        $fromUser = User::find(1);
        $toUser = User::find($user_id);
        
         
        // send notification using the "user" model, when the user receives new message
        $toUser->notify(new Reminder($fromUser));
         
        // send notification using the "Notification" facade (other way to send the notification)
        // Notification::send($toUser, new Reminder($fromUser));
    }

}
