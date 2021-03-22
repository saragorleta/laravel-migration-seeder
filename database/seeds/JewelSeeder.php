<?php

use Illuminate\Database\Seeder;

use App\Jewel;
//use Carbon\Carbon;
use Faker\Generator as Faker;
class JewelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $Faker)
    {
        for ($i = 0; $i < 10; $i++){
            $newJewel = new Jewel();
            $newJewel-> nascita_del_gioiello = $faker->date();  
            $newJewel-> genere = $faker->name($gender = null|'male'|'female');
            $newJewel->save();
    }
        
        // QUESTO E' L'ESEMPIO SE ABBIAMO NOI I DATI DA INSERIRE
        
        //$jewels = config('jewels'); //questa riga corrisponde al return che abbiamo inserito nel file 
        //jewels.php nella cartella config

        //qui inseriamo i dati 
        //che andranno a popolare le colonne
        //e poi facciamo un ciclo foreach 
        // $jewels = [
        //     [
        //     'categoria' => 'collana',
        //     'simboli'=> 'luna',
        //     'genere'=> 'donna',
        //     'materiale'=> 'argento',
        //     'nascita_del_gioiello'=> '1996/9/11'

        //     ],
        //     [
        //         'categoria' => 'bracciale',
        //         'simboli'=> 'stella',
        //         'genere'=> 'uomo',
        //         'materiale'=> 'oro',
        //         'nascita_del_gioiello'=> '1996/09/12'
    
        //     ]
        // ];

        // foreach($jewels as $Jewel){

        //     $newJewel= new Jewel();
        //     $newJewel-> categoria =$Jewel['categoria'];
        //     $newJewel-> simboli =$Jewel['simboli'];
        //     $newJewel-> genere =$Jewel['genere'];
        //     $newJewel-> materiale =$Jewel['materiali'];
        //     //abbiamo trasformato il formato della data con Carbon
        //     $newJewel-> nascita_del_gioiello = Carbon::createFromFormat('Y/m/d',$Jewel
        //     ['nascita_del_gioiello']);
            

        //             $newJewel->save();

        //         }

        //     }
        // }
