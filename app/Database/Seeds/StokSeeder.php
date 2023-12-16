<?php

namespace App\Database\Seeds;

use App\Models\StokModel;
use CodeIgniter\Database\Seeder;

class StokSeeder extends Seeder
{
    public function run()
    {
        $stok = new StokModel();
        $stok->save([
            'nama' => 'Bodrek',
            'stok' => 75
        ]);
        $stok->save([
            'nama' => 'Tolak Angin',
            'stok' => 120
        ]);
        $stok->save([
            'nama' => 'Paracetamol',
            'stok' => 50
        ]);
    }
}
