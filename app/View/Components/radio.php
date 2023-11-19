<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class radio extends Component
{
    /**
     * Create a new component instance.
     */
    public $nama,  $nilai;

    public function __construct($nama,  $nilai)
    {
        $this->nama = $nama;
        $this->nilai = $nilai;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.radio');
    }
}
