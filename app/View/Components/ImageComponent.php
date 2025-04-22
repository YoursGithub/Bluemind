<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class ImageComponent extends Component
{
    public $value;
    public $name;

    /**
     * Create a new component instance.
     */
public function __construct(string  $name = '' , ?string $value = null  )
{
    $this->value = $value;
    $this->name = $name;
}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.image-component');
    }
}
