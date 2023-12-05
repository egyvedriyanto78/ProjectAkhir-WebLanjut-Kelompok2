<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Addstatusresepobat extends Migration
{
    public function up()
    {
        $this->forge->addColumn('rekam_medis',[
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('rekam_medis', ['status']);
    }
}
