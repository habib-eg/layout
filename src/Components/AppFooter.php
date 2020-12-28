<?php

namespace Habib\Layout\Components;

use Illuminate\View\Component;

class AppFooter extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('layout::layouts.app-footer');
    }
}
