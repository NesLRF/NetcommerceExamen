<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;
use App\Models\Usuarios;
use App\Models\Actividades;
use App\Models\Empresas;

class McSeeder extends Seeder
{
    use HasFactory;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuarios::factory()->count(5)->create();
        Empresas::factory()->count(4)->create();
        Actividades::factory(20)->create()->each(function ($act) {
            $user = Usuarios::all()->random();
            if (count($user->actividades) < 5) {
                $act->usuarios_id = $user->id;
                $act->save();
            }
            $emp = Empresas::all()->random();
            $act->empresa_id = $emp->id;
            $act->save();
        });
    }
}
