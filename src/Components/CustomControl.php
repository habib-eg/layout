<?php

namespace Habib\Layout\Components;

use Illuminate\View\Component;

class CustomControl extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('layout::components.custom-control');
    }
}
