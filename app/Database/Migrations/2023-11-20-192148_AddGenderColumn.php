<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddGenderColumn extends Migration
{
    public function up()
    {
        $this->forge->addColumn('patients',[
            'gender' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('patients', ['gender']);
    }
}