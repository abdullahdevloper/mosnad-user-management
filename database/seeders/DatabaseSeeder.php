<?php

use Database\Seeders\PermissionSeed;
use Database\Seeders\RoleSeed;
use Database\Seeders\UserSeed;
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
        // $this->call(PermissionSeed::class);
        // $this->call(RoleSeed::class);
        $this->call(UserSeed::class);
    }
}
