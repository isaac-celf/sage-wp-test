<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FullText extends Component
{
    public $title;
    public $text1;
    public $text2;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $text1, $text2)
    {
        $this->title = $title;
        $this->text1 = $text1;
        $this->text2 = $text2;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.full-text');
    }
}
