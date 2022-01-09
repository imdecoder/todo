<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AddWorkHome extends Component
{
    public $form;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($form)
    {
        $this->form = $form;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.add-work-home');
    }
}
