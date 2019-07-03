<?php

use Illuminate\Database\Seeder;
use App\Groups;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Groups::class,11)->create();
    }
}
