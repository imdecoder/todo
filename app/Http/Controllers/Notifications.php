<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class Notifications extends Controller
{
    public function index()
    {
        $notifications = Notification::where('status', '=', 'active')->paginate(15);

        return view('notifications.index', [
            'notifications' => $notifications
        ]);
    }

    public function show($id)
    {
        $notification = Notification::find($id);

        Notification::where('id', $id)->update([
            'status' => 'passive'
        ]);

        return view('notifications.show', [
            'notification' => $notification
        ]);
    }
}
