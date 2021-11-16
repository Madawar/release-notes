<?php

namespace Codedcell\RealeaseNotes\View\Components;

use Illuminate\View\Component;

class Readme extends Component
{
    public $class;
    public $readme;
    public $admin;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($readme, $class = 'max-w-2xl mx-auto  sm:px-6 lg:px-8', $admin = false)
    {
        $this->class = $class;
        $this->readme = $readme;
        $this->admin = $admin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('realease-notes::components.readme');
    }
}
