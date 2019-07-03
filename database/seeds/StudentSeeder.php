<?php

use Illuminate\Database\Seeder;
use App\Students;
use App\Groups;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 50;
        for ($i=0; i< $count; $i++){

            factory(Student::class)->create([
                'group_id'=> $this->random_group()
            ]);
        }
    }
    public function random_group()
    {
        $groups = Groups::all();
        return $groups->random()->id;
    }
}
