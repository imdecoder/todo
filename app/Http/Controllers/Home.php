<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Priority;
use App\Models\User;

use App\Models\Work;

class Home extends Controller
{
    public function index()
    {
        $works = Work::all()->where('status', '=', 'active')->sortByDesc('id');

        $form = [
            'user_id' => User::all('id', 'firstname', 'lastname')->sortBy('firstname')->sortBy('lastname'),
            'priority_id' => Priority::all('id', 'name')->sortBy('id')
        ];

        return view('home', [
            'works' => $works,
            'form' => $form
        ]);
    }
}
