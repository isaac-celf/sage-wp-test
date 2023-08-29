<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Hero extends Component
{
    public $title;
    public $classReverse;
    public $btnChange;
    public $number;
    public $imageChange;
    public $text;
    /**
     * Create a new component instance.
     *
     * @return void
     * 
     */
    public function __construct($title = null, $btnChange = null, $imageChange = null, $classReverse = null, $text = null)
    {
        $this->title = $title;
        $this->btnChange = $btnChange;
        // $this->classReverse = $this->findOdd($number);
        $this->imageChange = $imageChange;
        $this->classReverse = $classReverse;
        $this->text = $text;

    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hero');
    }
    // public function findOdd($number) {
    //     if($number % 2 == 0){
    //         return 'flex-row-reverse';
    //     }
    //     else{
    //         return false;
    //     }
    // }
}
