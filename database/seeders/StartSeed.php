<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;
class StartSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() // creates the roles
    {
        $userRol = new Rol();
        $userRol->name = 'create';
        $userRol->save();

        $userRol = new Rol();
        $userRol->name = 'approve';
        $userRol->save();

        $userRol = new Rol();
        $userRol->name = 'see_approved';
        $userRol->save();
    }
}
