<?php

use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('provinces')->get()->count() == 0){

            DB::table('provinces')->insert([

            [
             
                'province_name' => 'Abra',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
            
            [
            
                'province_name' => 'Agusan del Norte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
            
            [
            
                'province_name' => 'Agusan del Sur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
            
            [
            
                'province_name' => 'Aklan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
            
            [
            
                'province_name' => 'Albay',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
            
            [
          
                'province_name' => 'Antique',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
            
            [
            
                'province_name' => 'Apayao',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
            
            [
            
                'province_name' => 'Aurora',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
            
            [
            
                'province_name' => 'Basilan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
            
            [
            
                'province_name' => 'Bataan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
            
            [
            
                'province_name' => 'Batanes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
            
            [
            
                'province_name' => 'Batangas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
            
            [
            
                'province_name' => 'Benguet',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
            
            [
            
                'province_name' => 'Biliran',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Bohol',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Bukidnon',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Bulacan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Cagayan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Camarines Norte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Camarines Sur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Camiguin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Capiz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Catanduanes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Cavite',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Cebu',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Compostela Valley',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Cotabato',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Davao del Norte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Davao del Sur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Davao Oriental',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Eastern Samar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Guimaras',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Ifugao',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Ilocos Norte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Ilocos Sur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Iloilo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Isabela',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Kalinga',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'La Union',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Laguna',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Lanao del Norte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Lanao del Sur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Leyte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Maguindanao',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Marinduque',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Masbate',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Metro Manila',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Misamis Occidental',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Misamis Oriental',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Mountain Province',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Negros Occidental',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Negros Oriental',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Northern Samar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Nueva Ecija',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Nueva Vizcaya',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Occidental Mindoro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Oriental Mindoro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Palawan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Pampanga',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Pangasinan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Quezon',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Quirino',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Rizal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Romblon',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Samar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Sarangani',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Siquijor',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Sorsogon',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'South Cotabato',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Southern Leyte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Sultan Kudarat',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Sulu',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Surigao del Norte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Surigao del Sur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Tarlac',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Tawi-Tawi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Zambales',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Zamboanga del Norte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Zamboanga del Sur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],
           
            [
           
                'province_name' => 'Zamboanga Sibugay',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ]   

            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
