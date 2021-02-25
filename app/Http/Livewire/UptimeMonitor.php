<?php

namespace App\Http\Livewire;

use App\Models\Monitor;
use Livewire\Component;

class UptimeMonitor extends Component
{
    public $monitors = [];

    public function render()
    {
        return view('livewire.uptime-monitor');
    }

    public function mount()
    {
        $this->monitors = Monitor::orderByDesc('updated_at')->get();
    }
}
