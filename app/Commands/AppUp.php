<?php

namespace App\Commands;

use App\Libraries\Maintenance;
use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class AppUp extends BaseCommand
{
    protected $group       = 'Maintenance';
    protected $name        = 'maintenance:off';
    protected $description = 'Bring the application back online.';

    public function run(array $params)
    {
        (new Maintenance())->disable();
        CLI::write('Application is live again.', 'green');
    }
}
