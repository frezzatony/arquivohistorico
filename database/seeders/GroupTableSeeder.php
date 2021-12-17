<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'name'      => 'Administradores',
        ]);
        
        Group::create([
            'name'      => 'Acesso público',
        ]);
    }
}
