<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class slug extends Component
{
    /**
     * Create a new component instance.
     */
    public $judul,$nilai;

    public function __construct($judul,$nilai)
    {
        $this->judul = $judul;
        $this->nilai = $nilai;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.slug');
    }
}
