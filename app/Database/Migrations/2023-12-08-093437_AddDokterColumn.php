<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDokterColumn extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'idi' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true
            ],

            'spesialisasi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],

            'wilayah' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],

        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('users', ['idi','spesialisasi','wilayah']);
    }
}