<?php

namespace Database\Seeders;

use Coredump\Frontend\Models\Dashboard;
use Illuminate\Database\Seeder;

class DashboardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dashboard::firstOrCreate([
            'key' => 'modules',
        ], [
            'name' => 'Crear Modulo',
            'key' => 'modules',
            'description' => 'Crea un nuevo modulo',
            'icon' => 'developer_board',
            'bpmn' => 'modules.bpmn',
            'process_id' => 'PROCESS_1',
            'screen' => './modules.vue',
            'role' => 'admin',
        ]);
    }
}
