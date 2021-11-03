<?php

namespace App\View\Components\Modals;

use Illuminate\View\Component;

class DeleteModal extends Component
{
    public $task;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($task)
    {
        $this->task = $task;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components..modals.delete-modal');
    }
}
