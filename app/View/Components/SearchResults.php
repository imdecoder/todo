<?php

namespace App\View\Components;

use App\Models\Work;
use Illuminate\View\Component;

class SearchResults extends Component
{
    public $results;
    public $itemWidth;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($itemWidth)
    {
        $this->results = Work::query()->where('status', '=', 'active')->orderByDesc('id')->take(5)->get();
        $this->itemWidth = $itemWidth;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.search-results');
    }
}
