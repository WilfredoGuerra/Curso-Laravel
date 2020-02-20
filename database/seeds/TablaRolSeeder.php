<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->insert([
            'nombre' => 'administrador',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('rol')->insert([
            'nombre' => 'editor',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('rol')->insert([
            'nombre' => 'supervisor',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}