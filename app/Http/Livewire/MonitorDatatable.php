<?php

namespace App\Http\Livewire;

use App\Models\Monitor;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class MonitorDatatable extends LivewireDatatable
{
    protected $series = 0;

    public $model = Monitor::class;

    public $exportable = true;

    public $hideable = 'select';

    public $searchable = ['url', 'uptime_check_failure_reason'];

    public function columns()
    {
        $this->series = $this->page > 1 ? ($this->page - 1) * $this->perPage : 0;

        return [
            Column::callback(['id'], function ($id) {
                return ++$this->series;
            })->label('NO'),
            Column::name('url')->label('DOMAIN'),
            Column::callback(['uptime_status'], function ($uptime_status) {
                return view('status', ['status' => $uptime_status]);
            })->label('STATUS'),
            Column::callback(['uptime_check_failure_reason'], function ($uptime_check_failure_reason) {
                return $uptime_check_failure_reason != '' ? $uptime_check_failure_reason : '_';
            })->label('FAILURE_REASON'),
        ];
    }
}
