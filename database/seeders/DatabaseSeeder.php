<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;
use PhpParser\Builder\Use_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        
        $roles =[
         [
            'name' => 'admin',
            'display_name' => 'admin'
        ],
         [
            'name' => 'user',
            'display_name' => 'user'
        ]
         ];


        foreach ($roles as $role) {
        Role::firstOrCreate($role);
        }

        
        /**
         * @var \App\Models\User $user
         */

         $user = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        $user ->addRole('admin');

        

    }
}
