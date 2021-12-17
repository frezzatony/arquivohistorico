<?php


namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id'        =>  1,
            'name'      => 'Administrador',
            'username'  =>  'admin',
            'email'     => 'admin@sistema.mail',
            'password'  => bcrypt('admin'),
        ]);
    }
}
