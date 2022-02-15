<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todo = [
            'content' => 'チョコを食べる'
        ];
        DB::table('todos')->insert($todo);

        $todo = [
            'content' => '映画館へ行く'
        ];
        DB::table('todos')->insert($todo);

        $todo = [
            'content' => 'ゲームをする'
        ];
        DB::table('todos')->insert($todo);
    }
}
