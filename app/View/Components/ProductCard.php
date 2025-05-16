<?php

namespace App\View\Components;

use App\Models\Producto;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCard extends Component
{
    /**
     * Create a new component instance.
     */
    public Producto $pro;
    public function __construct(Producto $pro)
    {
        $this->pro = $pro;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}
