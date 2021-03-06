<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserPermissionsTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
        $this->call(UserRolesHasUserPermissionsTableSeeder::class);
        $this->call(UserStatesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserHasUserRolesTableSeeder::class);
    }
}
