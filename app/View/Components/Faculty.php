<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use function Carbon\this;

class Faculty extends Component
{
    public $name;
    public $title;
    public $bio;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $title, $bio)
    {
        $this->name = $name;
        $this->title = $title;
        $this->bio = $bio;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.faculty');
    }
}
