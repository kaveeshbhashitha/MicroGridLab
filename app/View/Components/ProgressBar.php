<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProgressBar extends Component
{
    public $publishedCount;
    public $unpublishedCount;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($publishedCount, $unpublishedCount)
    {
        $this->publishedCount = $publishedCount;
        $this->unpublishedCount = $unpublishedCount;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.progress-bar');
    }
}
