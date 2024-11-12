<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DojoSeeder::class, // must become first in this case, because Dojo.id will be fk in Ninja table
            NinjaSeeder::class
        ]);
    }
}
