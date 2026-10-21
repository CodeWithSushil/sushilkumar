<?php

namespace App\Commands;

use App\Libraries\Maintenance;
use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class AppDown extends BaseCommand
{
    protected $group       = 'Maintenance';
    protected $name        = 'maintenance:on';
    protected $description = 'Put the application into maintenance mode.';
    protected $usage       = 'maintenance:on [--message "text"] [--ip 1.2.3.4] [--secret token]';

    public function run(array $params)
    {
        $ips = CLI::getOption('ip') ? [CLI::getOption('ip')] : [];

        (new Maintenance())->enable(
            CLI::getOption('message') ?? '',
            $ips,
            CLI::getOption('secret')
        );

        CLI::write('Application is now in maintenance mode.', 'yellow');
    }
}
