<?php

namespace App\View\Components\Fragments;

use Illuminate\View\Component;

class Task extends Component
{
    public $task;
    public $active;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($task, $active)
    {
        $this->task = $task;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.fragments.task');
    }
}
