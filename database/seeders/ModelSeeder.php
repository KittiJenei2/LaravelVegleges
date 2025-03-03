<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Model;
use App\Models\Maker;

class ModelSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */

    const ITEMS = [
        "Ford" => ["Focus", "Mondeo", "Puma", "Kuga"],
        "Mercedes" => ["SLK", "CLK", "S500"],
        "Fiat" => ["Punto", "Panda", "500"],
        "Opel" => ["Astra", "Cadet", "Adam"],
        "Audi" => ["A2", "A4", "A5", "Q7", "S5"],
        "Peugeot" => ["106", "206", "3008"]
    ];

    public function run(): void
    {
        foreach (self::ITEMS as $key => $values) {
            $maker = Maker::where('name', $key)->first(); 
    
            if ($maker) { 
                foreach ($values as $item) {
                    $model = new Model();
                    $model->name = $item;
                    $model->maker_id = $maker->id; 
                    $model->save();
                }
            }
        }
    }
}
