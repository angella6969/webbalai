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
    public $judul,$nilai,$rute;

    public function __construct($judul,$nilai,$rute)
    {
        $this->judul = $judul;
        $this->nilai = $nilai;
        $this->rute = $rute;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.slug');
    }
}
