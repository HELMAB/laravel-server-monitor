<?php

namespace App\Http\Livewire;

use App\Models\Check;
use Livewire\Component;

class ServerMonitor extends Component
{
    public $checks = [];

    public function render()
    {
        return view('livewire.server-monitor');
    }

    public function mount()
    {
        $this->checks = Check::orderBy('updated_at')->get();
    }
}
