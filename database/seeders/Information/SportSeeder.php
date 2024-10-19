<?php

namespace Database\Seeders\Information;

use App\Models\Sport\Sport;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['football'] as $name) {
            Sport::query()->create([
                'name' => $name,
                'slug' => Str::slug($name)
            ]);
        }
    }
}
