<?php

namespace Habib\Layout\Components;

use Illuminate\View\Component;

class NavItemDropdown extends Component
{
    /**
     * @var string
     */
    public $route;

    /**
     * NavItemDropdown constructor.
     * @param string $label
     * @param string $icon
     * @param string $route
     */
    public function __construct(string $route='#')
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
        return view('layout::components.nav-item-dropdown');
    }
}
