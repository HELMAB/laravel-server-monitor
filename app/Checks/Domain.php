<?php

namespace App\Checks;

use GuzzleHttp\Client;
use Spatie\ServerMonitor\CheckDefinitions\CheckDefinition;
use Symfony\Component\Process\Process;

class Domain extends CheckDefinition
{
    public $command = '';

    public function resolve(Process $process)
    {
        $domain = $this->check->host->domain;
        if (isset($domain)) {
            /*$client = new Client();
            try {
                $request = $client->get($domain);
                if ($request->getStatusCode() == 200) {
                    $this->check->succeed('is running');
                    return;
                }
            } catch (\Exception $exception) {
            }*/
            $this->check->fail('is not running');
        } else {
            $this->check->fail('no domain to check');
        }
    }
}
