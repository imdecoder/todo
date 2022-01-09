<?php

namespace App\View\Components;

use App\Models\Notification;
use Illuminate\View\Component;

class HeaderNotificationCount extends Component
{
    public $count;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->count = Notification::all()->where('status', '=', 'active')->count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header-notification-count');
    }
}
