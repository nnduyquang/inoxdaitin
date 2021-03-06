<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [

            [
                'name' => 'admin', // optional
                'display_name' => 'admin',
                'description' => 'administer the website and manage users'
            ],

            [
                'permissions' => ['edit_own_posts']
            ]
        ];
        foreach ($roles as $key => $value) {
            Role::create($value);
        }
    }
}
