<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\RoleUser::create([
            'id_rol' => '1',
            'nameRol' => 'Admin',
            'created_at' => '2021-05-14',
            'updated_at'    => '2021-05-14',
       
        ]);

        \App\Models\RoleUser::create([
            'id_rol' => '2',
            'nameRol' => 'Funcionario',
            'created_at' => '2021-05-14',
            'updated_at'    => '2021-05-14',
       
        ]);

        \App\Models\Distributor::create([
            'nameDistributor'   => 'Huevos AAA',
            'phone' => '3216549871',
            'direction' => 'Pasto Nariño',
            'img'   => '',
            'created_at'    => '2021-05-04 04:40:28',
            'updated_at'    => '2021-05-04 04:40:28',

        ]);

        \App\Models\Distributor::create([
            'nameDistributor'   => 'Huevos Kinder',
            'phone' => '3216549871',
            'direction' => 'Pasto Nariño',
            'img'   => '',
            'created_at'    => '2021-05-04 04:40:28',
            'updated_at'    => '2021-05-04 04:40:28',

        ]);

        \App\Models\Distributor::create([
            'nameDistributor'   => 'Huevos Jumbo',
            'phone' => '3216549871',
            'direction' => 'Pasto Nariño',
            'img'   => '',
            'created_at'    => '2021-05-04 04:40:28',
            'updated_at'    => '2021-05-04 04:40:28',

        ]);

        \App\Models\Distributor::create([
            'nameDistributor'   => 'Huevos La economia',
            'phone' => '3216549871',
            'direction' => 'Pasto Nariño',
            'img'   => '',
            'created_at'    => '2021-05-04 04:40:28',
            'updated_at'    => '2021-05-04 04:40:28',

        ]);


       // $this->call(DistribuidoraSeeder::class);

        \App\Models\User::create([
            'name' => 'Egg Iot',
            'email' => 'proyecteggiot@gmail.com',
            'password' => Hash::make('Eggiot123'),
            'profile_photo_path'    => '1628734339avatar.png',
            'rol_id'       => '1',
            'distribuidora_id' => null,
        ]);

        \App\Models\User::create([
            'id'    => '4',
            'name' => 'Canver',
            'email' => 'canver@gmail.com',
            'password' => Hash::make('123456789'),
            'profile_photo_path'    => '',
            'rol_id'       => '2',
            'distribuidora_id' => '1',
        ]);

        \App\Models\User::create([
            'id'    => '5',
            'name' => 'Orlando',
            'email' => 'orlando@gmail.com',
            'password' => Hash::make('123456789'),
            'profile_photo_path'    => '',
            'rol_id'       => '2',
            'distribuidora_id' => '2',
        ]);


        //$this->call(IotSeeder::class);
        //$this->call(EggSeeder::class);


    }
}
