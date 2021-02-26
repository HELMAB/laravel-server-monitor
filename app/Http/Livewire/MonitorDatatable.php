<?php

namespace App\Http\Livewire;

use App\Models\Monitor;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class MonitorDatatable extends LivewireDatatable
{
    public $model = Monitor::class;

    public $exportable = true;

    public $hideable = 'select';

    public $searchable = ['url', 'uptime_check_failure_reason'];

    public function columns()
    {
        return [
            NumberColumn::name('id')->label('ID'),
            Column::name('url')->label('DOMAIN'),
            Column::callback(['uptime_status'], function ($uptime_status) {
                 return view('status', ['status' => $uptime_status]);
            })->label('STATUS'),
            Column::name('uptime_check_failure_reason')->label('FAILURE_REASON'),
        ];
    }
}
