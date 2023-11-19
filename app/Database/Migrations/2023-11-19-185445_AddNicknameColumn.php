<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNicknameColumn extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'nickname' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('users', ['nickname']);
    }
}
