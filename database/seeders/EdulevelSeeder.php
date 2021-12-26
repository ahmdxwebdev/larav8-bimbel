<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EdulevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('edulevels')->insert([
            [
                'name' => 'SD Derajat',
                'desc' => 'SD / MI',
            ],
            [
                'name' => 'SMP Sedarjat',
                'desc' => 'SMP / MTS',
            ],
        ]);
    }
}
