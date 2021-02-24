<?php

namespace App\Checks;

use Spatie\ServerMonitor\CheckDefinitions\CheckDefinition;
use Symfony\Component\Process\Process;

class Nginx extends CheckDefinition
{
    public $command = 'systemctl is-active nginx';

    public function resolve(Process $process)
    {
        if (trim($process->getOutput()) === 'active') {
            $this->check->succeed('is running');

            return;
        }

        $this->check->fail('is not running');
    }
}
