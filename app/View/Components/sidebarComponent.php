<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class sidebarComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $tittle, $beritas, $route, $judul, $created_at;
    public function __construct()
    {
        // $this->tittle = $tittle;
        // $this->beritas = $beritas;
        // $this->route = $route;
        // $this->judul = $judul;
        // $this->created_at = $created_at;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar-component');
    }
}
