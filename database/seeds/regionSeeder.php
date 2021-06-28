<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Region;
use App\Provincia;
use App\Ciudad;
use App\Calle;
class regionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $region_array = [];
        array_push($region_array, Region::create(['id' => '1','nombre' => 'Coquimbo']));
        array_push($region_array, Region::create(['id' => '2','nombre' => 'Metropolitana']));
        array_push($region_array, Region::create(['id' => '3','nombre' => 'Valparaiso']));
        array_push($region_array, Region::create(['id' => '4','nombre' => 'Atacama']));
      
        array_push($region_array, Provincia::create(['id' => '1','nombre' => 'Elqui','region_id' => '1']));
        array_push($region_array, Provincia::create(['id' => '2','nombre' => 'Maipo','region_id' =>'2']));
        array_push($region_array, Provincia::create(['id' => '3','nombre' => 'San Antonio','region_id' => '3']));
        array_push($region_array, Provincia::create(['id' => '4','nombre' => 'Chañaral','region_id' => '4']));
      
        array_push($region_array, Ciudad::create(['id' => '1','nombre' => 'Serena','provincia_id' => '1']));
        array_push($region_array, Ciudad::create(['id' => '2','nombre' => 'maipu','provincia_id' => '2']));
        array_push($region_array, Ciudad::create(['id' => '3','nombre' => 'Viña del mar','provincia_id' => '3']));
        array_push($region_array, Ciudad::create(['id' => '4','nombre' => 'Vallenar','provincia_id' => '4']));
        
        array_push($region_array, Calle::create(['id' => '1','nombre' => 'los vilos 345','ciudad_id' => '1']));
        array_push($region_array, Calle::create(['id' => '2','nombre' => 'los lobos 321','ciudad_id' => '1']));
        array_push($region_array, Calle::create(['id' => '3','nombre' => 'pasaje los huertos 212','ciudad_id' => '2']));
        array_push($region_array, Calle::create(['id' => '4','nombre' => 'Gomez carreño 534','ciudad_id' => '3']));
        array_push($region_array, Calle::create(['id' => '5','nombre' => 'nonguen 1232','ciudad_id' => '4']));
        array_push($region_array, Calle::create(['id' => '6','nombre' => 'collao 123','ciudad_id' => '4']));
        }
}
