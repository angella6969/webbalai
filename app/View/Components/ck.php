<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ck extends Component
{
    /**
     * Create a new component instance.
     */
    public $body, $nilai;
    public function __construct($body, $nilai)
    {
        $this->body = $body;
        $this->nilai = $nilai;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ck');
    }
}
