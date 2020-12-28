<?php

namespace Habib\Layout\Components;

use Illuminate\View\Component;

class NavLink extends Component
{
    /**
     * @var string
     */
    public $route;

    /**
     * NavLink constructor.
     * @param string $route
     */
    public function __construct(string $route="#")
    {
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('layout::components.nav-link');
    }
}
