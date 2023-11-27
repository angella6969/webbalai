<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class h_content extends Component
{
    /**
     * Create a new component instance.
     */
    public $posisi1, $judul, $posisi2;
    public function __construct($posisi1, $judul,$posisi2)
    {
        $this->posisi1 = $posisi1;
        $this->judul = $judul;
        $this->posisi2 = $posisi2;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.h_content');
    }
}
