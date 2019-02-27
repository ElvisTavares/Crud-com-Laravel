<?php

use Illuminate\Database\Seeder;

class CarrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('carros')->insert([
            'marca' => 'Fiat',
            'modelo'=>'Fiat uno',
            'preco' => '12300.00'
        ]);
    }
}
