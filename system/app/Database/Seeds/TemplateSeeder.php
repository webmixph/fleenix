<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TemplateSeeder extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('template');
        $jsonContent = file_get_contents(APPPATH . 'Database\Data\TemplateData.json');
        $data = json_decode($jsonContent, true);
        if (!empty($data)) {
            $builder->insertBatch($data);
        }
    }
}
