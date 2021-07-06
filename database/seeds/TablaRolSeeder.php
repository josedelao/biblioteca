<?php
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rols = [
            'administrador',
            'editor',
            'supervisor'
        ];

        foreach ($rols as $value) {
            # code...

            DB::table('rol')->insert([
            'nombre' => $value,
            'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=> Carbon::now()
            ]);
        }



    }
}
