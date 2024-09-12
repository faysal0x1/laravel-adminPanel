<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatusToggle extends Component
{
    /**
     * Create a new component instance.
     */
    /**
     * Create a new component instance.
     */
    public $model;
    public $id;
    public $status;

    public function __construct($model, $id, $status)
    {
        $this->model = $model;
        $this->id = $id;
        $this->status = $status;
    }

    public function render()
    {
        return view('components.status-toggle');
    }
}
