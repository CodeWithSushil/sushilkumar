<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Messages extends Migration
{
    public function up()
    {
      $this->forge->addField([
        'id' => [
          'type' => 'int'
        ],
      ]);

      $this->forge->addPrimaryKey('id');

      $this->forge->createTable('messages');
    }

    public function down()
    {
        $this->forge->dropTable('messages');
    }
}
