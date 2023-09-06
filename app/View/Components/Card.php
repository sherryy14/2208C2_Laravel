<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $img;
    public $title;
    public $desc;
    public $price;
    /**
     * Create a new component instance.
     */
    public function __construct($img, $title, $desc, $price)
    {
        $this->img = $img;
        $this->title = $title;
        $this->desc = $desc;
        $this->price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
