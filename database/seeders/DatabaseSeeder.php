<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TimeEntry;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        TimeEntry::factory(10)->create();
    }
}
