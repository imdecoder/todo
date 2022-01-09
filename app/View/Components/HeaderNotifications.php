<?php

namespace App\View\Components;

use App\Models\Notification;
use Illuminate\View\Component;

class HeaderNotifications extends Component
{
    public $notifications;
    public $itemWidth;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $itemWidth)
    {
        $this->notifications = Notification::all()->where('status', '=', 'active')->sortByDesc('id');;
        $this->title = $title;
        $this->itemWidth = $itemWidth;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header-notifications');
    }
}
