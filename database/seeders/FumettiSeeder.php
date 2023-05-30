<?php

namespace Database\Seeders;

use App\Models\Fumetti;
use Illuminate\Database\Seeder;

class FumettiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fumettis = config('db.fumettis');

        foreach ($fumettis as $fumetti) {
            $newFumetti = new Fumetti();
            $newFumetti->title = $fumetti['title'];
            $newFumetti->description = $fumetti['description'];
            $newFumetti->thumb = $fumetti['thumb'];
            $newFumetti->price = floatval($fumetti['price']);
            $newFumetti->sale_date = $fumetti['sale_date'];
            $newFumetti->save();
        }
    }
}
