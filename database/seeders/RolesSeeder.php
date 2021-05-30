<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate([
            'name' => 'user',
        ], [
            'name' => 'user',
            'description' => 'Acceso básico al sistema',
            'permissions' => ["App.Models.User:read", "Coredump.Frontend.Models.Dashboard:list"],
        ]);
        Role::firstOrCreate([
            'name' => 'admin',
        ], [
            'name' => 'admin',
            'description' => 'Acceso total al sistema',
            'permissions' => ['*'],
        ]);
        Role::firstOrCreate([
            'name' => 'run_process',
        ], [
            'name' => 'run_process',
            'description' => 'Puede ejecutar procesos',
            'permissions' => ["JDD.Workflow.Models.ProcessInstance:&callProcess", "JDD.Workflow.Models.ProcessInstance:read", "JDD.Workflow.Models.ProcessInstance:getProcess", "JDD.Workflow.Models.ProcessInstance:getScreen", "JDD.Workflow.Models.ProcessToken:[*]getScreen", "JDD.Workflow.Models.ProcessToken:[*]complete", "JDD.Workflow.Models.ProcessInstance:&getProcess"],
        ]);
    }
}
