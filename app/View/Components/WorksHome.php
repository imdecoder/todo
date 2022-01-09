<?php

namespace App\View\Components;

use Illuminate\View\Component;

class WorksHome extends Component
{
    public $works;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($works)
    {
        $this->works = $works;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.works-home');
    }
}
