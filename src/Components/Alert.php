<?php

namespace Habib\Layout\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('layout::components.alert');
    }
}
