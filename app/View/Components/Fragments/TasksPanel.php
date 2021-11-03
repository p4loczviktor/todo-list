<?php

namespace App\View\Components\Fragments;

use Illuminate\View\Component;

class TasksPanel extends Component
{
    public $tasks;
    public $active;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tasks, $active)
    {
        $this->tasks = $tasks;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.fragments.tasks-panel');
    }
}
