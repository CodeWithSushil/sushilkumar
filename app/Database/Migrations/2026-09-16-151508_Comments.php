<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Comments extends Migration
{
    public function up()
    {
      $this->forge->addField([
        'id' => [
          'type' => 'INT',
          'unsigned' => true
        ],
        'name' => 'VARCHAR',
      ]);
    }

    public function down()
    {
        //
    }
}
