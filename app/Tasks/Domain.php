<?php

namespace App\Tasks;

use GuzzleHttp\Client;
use Spatie\ServerMonitor\CheckDefinitions\CheckDefinition;
use Symfony\Component\Process\Process;

class Domain extends CheckDefinition
{
    public $command = 'systemctl is-active nginx';

    public function resolve(Process $process)
    {
//        $url = 'https://helmab.com';
//        $client = new Client();
//        $request = $client->get($url);
//        if ($request->getStatusCode() == 200) {
//            $this->check->succeed('is running');
//
//            return;
//        }

        $this->check->fail('is not running');
    }
}
