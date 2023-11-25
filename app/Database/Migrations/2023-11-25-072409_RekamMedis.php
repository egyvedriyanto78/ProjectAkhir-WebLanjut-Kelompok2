<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RekamMedis extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>true,
                'auto_increment'=>true,
            ],
            'id_pasien'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>true,                
            ],
            'nama'=>[
                'type'=>'VARCHAR',
                'constraint'=> 255,                                
            ],
            'usia'=>[
                'type'=> 'INT',
                'constraint'=>3,
            ],
            'tanggal'=>[
                'type'=>'DATE',                
            ],
            'keluhan'=>[
                'type'=> 'TEXT',                
            ],
            'diagnosa'=>[
                'type'=>'TEXT',
                'null'=>true,
            ],
            'resep_obat'=>[
                'type'=>'TEXT',
                'null'=> true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_pasien', 'users', 'id', 'CASCADE', 'CASCADE', 'fk_pasien');
        $this->forge->createTable('rekam_medis');
    }

    public function down()
    {
        $this->forge->dropTable('rekam_medis', true, true);
    }
}
