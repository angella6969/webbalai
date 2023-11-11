<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class edit_input extends Component
{
    /**
     * Create a new component instance.
     */
    public $nama, $judul, $value;
    public function __construct($nama, $judul,$value)
    {
        $this->nama = $nama;
        $this->judul = $judul;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.edit_input');
    }
}
