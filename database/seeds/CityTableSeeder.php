<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	if(DB::table('cities')->get()->count() == 0){

            DB::table('cities')->insert([

            	[

                'city_name' => 'Bangued',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
           ],

            [

                'city_name' => 'Boliney',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],

            [

                'city_name' => 'Bucay',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],

            [

                'city_name' => 'Bucloc',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],

            [

                'city_name' => 'Daguioman',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],

            [

                'city_name' => 'Danglas',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],

            [

                'city_name' => 'Dolores',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],

            [

                'city_name' => 'La Paz',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],

            [

                'city_name' => 'Lacub',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Lagangilang',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Lagayan',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Langiden',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Licuan-Baay',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Luba',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Malibcong',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Manabo',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Peñarrubia',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Pidigan',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Pilar',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Sallapadan',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'San Isidro',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'San Juan',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'San Quintin',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Tayum',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Tineg',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Tubo',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Villaviciosa',
                'province_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Butuan City',
                'province_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Buenavista',
                'province_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Cabadbaran',
                'province_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Carmen',
                'province_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Jabonga',
                'province_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Kitcharao',
                'province_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Las Nieves',
                'province_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Magallanes',
                'province_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Nasipit',
                'province_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Remedios T. Romualdez',
                'province_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Santiago',
                'province_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Tubay',
                'province_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Bayugan',
                'province_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Bunawan',
                'province_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Esperanza',
                'province_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'La Paz',
                'province_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Loreto',
                'province_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Prosperidad',
                'province_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Rosario',
                'province_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'San Francisco',
                'province_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'San Luis',
                'province_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Santa Josefa',
                'province_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Sibagat',
                'province_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Talacogon',
                'province_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Trento',
                'province_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Veruela',
                'province_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Altavas',
                'province_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Balete',
                'province_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Banga',
                'province_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Batan',
                'province_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Buruanga',
                'province_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Ibajay',
                'province_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Kalibo',
                'province_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Lezo',
                'province_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Libacao',
                'province_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Madalag',
                'province_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Makato',
                'province_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Malay',
                'province_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Malinao',
                'province_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Nabas',
                'province_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'New Washington',
                'province_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Numancia',
                'province_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Tangalan',
                'province_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Legazpi City',
                'province_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Ligao City',
                'province_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Tabaco City',
                'province_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Bacacay',
                'province_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Camalig',
                'province_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Daraga',
                'province_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Guinobatan',
                'province_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Jovellar',
                'province_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Libon',
                'province_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Malilipot',
                'province_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Malinao',
                'province_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Manito',
                'province_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Oas',
                'province_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Pio Duran',
                'province_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Polangui',
                'province_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Rapu-Rapu',
                'province_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Santo Domingo',
                'province_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Tiwi',
                'province_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Anini-y',
                'province_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Barbaza',
                'province_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Belison',
                'province_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Bugasong',
                'province_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Caluya',
                'province_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Culasi',
                'province_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Hamtic',
                'province_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Laua-an',
                'province_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Libertad',
                'province_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Pandan',
                'province_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Patnongon',
                'province_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'San Jose',
                'province_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'San Remigio',
                'province_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Sebaste',
                'province_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Sibalom',
                'province_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Tibiao',
                'province_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Tobias Fornier',
                'province_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Valderrama',
                'province_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Calanasan',
                'province_id' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Conner',
                'province_id' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Flora',
                'province_id' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Kabugao',
                'province_id' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Luna',
                'province_id' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Pudtol',
                'province_id' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Santa Marcela',
                'province_id' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Baler',
                'province_id' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Casiguran',
                'province_id' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Dilasag',
                'province_id' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Dinalungan',
                'province_id' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Dingalan',
                'province_id' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Dipaculao',
                'province_id' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Maria Aurora',
                'province_id' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'San Luis',
                'province_id' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Isabela City',
                'province_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Akbar',
                'province_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Al-Barka',
                'province_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Hadji Mohammad Ajul',
                'province_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Hadji Muhtamad',
                'province_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Lamitan',
                'province_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Lantawan',
                'province_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Maluso',
                'province_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Sumisip',
                'province_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Tabuan-Lasa',
                'province_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Tipo-Tipo',
                'province_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Tuburan',
                'province_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Ungkaya Pukan',
                'province_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Balanga City',
                'province_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Abucay',
                'province_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
         
            [
         
                'city_name' => 'Bagac',
                'province_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
      
            [
      
                'city_name' => 'Dinalupihan',
                'province_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
      
            [
      
                'city_name' => 'Hermosa',
                'province_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
      
            [
      
                'city_name' => 'Limay',
                'province_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
      
            [
      
                'city_name' => 'Mariveles',
                'province_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
      
            [
      
                'city_name' => 'Morong',
                'province_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
      
            [
      
                'city_name' => 'Orani',
                'province_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
      
            [
      
                'city_name' => 'Orion',
                'province_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
      
            [
      
                'city_name' => 'Pilar',
                'province_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
      
            [
       
                'city_name' => 'Samal',
                'province_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
       
            [
       
                'city_name' => 'Basco',
                'province_id' => '11',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
       
            [
       
                'city_name' => 'Itbayat',
                'province_id' => '11',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
       
            [
       
                'city_name' => 'Ivana',
                'province_id' => '11',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
       
            [
       
                'city_name' => 'Mahatao',
                'province_id' => '11',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
       
            [
       
                'city_name' => 'Sabtang',
                'province_id' => '11',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
       
            [
       
                'city_name' => 'Uyugan',
                'province_id' => '11',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
       
            [
       
                'city_name' => 'Batangas City',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
       
            [
       
                'city_name' => 'Lipa City',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
       
            [
       
                'city_name' => 'Tanauan City',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
       
            [
       
                'city_name' => 'Agoncillo',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
       
            [
       
                'city_name' => 'Alitagtag',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
       
            [
       
                'city_name' => 'Balayan',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
       
            [
       
                'city_name' => 'Balete',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
       
            [
       
                'city_name' => 'Bauan',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
       
            [
       
                'city_name' => 'Calaca',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
       
            [
       
                'city_name' => 'Calatagan',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Cuenca',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Ibaan',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Laurel',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Lemery',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Lian',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Lobo',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Mabini',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Malvar',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
                
                'city_name' => 'Mataas na Kahoy',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Nasugbu',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Padre Garcia',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Rosario',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'San Jose',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'San Juan',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'San Luis',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'San Nicolas',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'San Pascual',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Santa Teresita',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Santo Tomas',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Taal',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Talisay',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Taysan',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Tingloy',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Tuy',
                'province_id' => '12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Baguio City',
                'province_id' => '13',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Atok',
                'province_id' => '13',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Bakun',
                'province_id' => '13',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Bokod',
                'province_id' => '13',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Buguias',
                'province_id' => '13',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Itogon',
                'province_id' => '13',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Kabayan',
                'province_id' => '13',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Kapangan',
                'province_id' => '13',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Kibungan',
                'province_id' => '13',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'La Trinidad',
                'province_id' => '13',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Mankayan',
                'province_id' => '13',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Sablan',
                'province_id' => '13',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Tuba',
                'province_id' => '13',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Tublay',
                'province_id' => '13',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Almeria',
                'province_id' => '14',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Biliran',
                'province_id' => '14',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Cabucgayan',
                'province_id' => '14',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Caibiran',
                'province_id' => '14',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Culaba',
                'province_id' => '14',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Kawayan',
                'province_id' => '14',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Maripipi',
                'province_id' => '14',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Naval',
                'province_id' => '14',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Tagbilaran City',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Alburquerque',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Alicia',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Anda',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Antequera',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Baclayon',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Balilihan',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Batuan',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Bien Unido',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Bilar',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Buenavista',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Calape',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Candijay',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Carmen',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Catigbian',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Clarin',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Corella',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Cortes',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Dagohoy',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Danao',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
            
                'city_name' => 'Dauis',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
           
                'city_name' => 'Dimiao',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Duero',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Garcia Hernandez',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Getafe',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Guindulman',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Inabanga',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Jagna',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Lila',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Loay',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Loboc',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Loon',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Mabini',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Maribojoc',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Panglao',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Pilar',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'President Carlos P. Garcia',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Sagbayan',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'San Isidro',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'San Miguel',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Sevilla',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Sierra Bullones',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Sikatuna',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Talibon',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Trinidad',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Tubigon',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Ubay',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Valencia',
                'province_id' => '15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Malaybalay City',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Valencia City',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Baungon',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Cabanglasan',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Damulog',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Dangcagan',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Don Carlos',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Impasug-ong',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Kadingilan',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Kalilangan',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Kibawe',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Kitaotao',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Lantapan',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
           
                'city_name' => 'Libona',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Malitbog',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Manolo Fortich',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Maramag',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pangantucan',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Quezon',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Fernando',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sumilao',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Talakag',
                'province_id' => '16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Malolos City',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Meycauayan City',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Jose del Monte City',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Angat',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Balagtas',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Baliuag',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bocaue',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bulacan',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bustos',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Calumpit',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Doña Remedios Trinidad',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Guiguinto',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Hagonoy',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Marilao',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Norzagaray',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Obando',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pandi',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Paombong',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Plaridel',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pulilan',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Ildefonso',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Miguel',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Rafael',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Santa Maria',
                'province_id' => '17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tuguegarao City',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Abulug',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Alcala',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Allacapan',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Amulung',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Aparri',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Baggao',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Ballesteros',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Buguey',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Calayan',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Camalaniugan',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Claveria',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Enrile',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Gattaran',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Gonzaga',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Iguig',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Lal-lo',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Lasam',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pamplona',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Peñablanca',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Piat',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Rizal',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sanchez-Mira',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Santa Ana',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Santa Praxedes',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Santa Teresita',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Santo Niño',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Solana',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tuao',
                'province_id' => '18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Basud',
                'province_id' => '19',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Capalonga',
                'province_id' => '19',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Daet',
                'province_id' => '19',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Jose Panganiban',
                'province_id' => '19',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Labo',
                'province_id' => '19',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mercedes',
                'province_id' => '19',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Paracale',
                'province_id' => '19',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Lorenzo Ruiz',
                'province_id' => '19',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Vicente',
                'province_id' => '19',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Santa Elena',
                'province_id' => '19',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Talisay',
                'province_id' => '19',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Vinzons',
                'province_id' => '19',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Iriga City',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Naga City',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Baao',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Balatan',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bato',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bombon',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Buhi',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bula',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Cabusao',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Calabanga',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Camaligan',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Canaman',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Caramoan',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Del Gallego',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Gainza',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Garchitorena',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Goa',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Lagonoy',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Libmanan',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Lupi',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Magarao',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Milaor',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Minalabac',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Nabua',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Ocampo',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pamplona',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pasacao',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pili',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Presentacion',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Ragay',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sagñay',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Fernando',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Jose',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sipocot',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Siruma',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tigaon',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tinambac',
                'province_id' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Catarman',
                'province_id' => '21',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Guinsiliban',
                'province_id' => '21',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mahinog',
                'province_id' => '21',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mambajao',
                'province_id' => '21',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sagay',
                'province_id' => '21',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Roxas City',
                'province_id' => '22',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Cuartero',
                'province_id' => '22',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Dao',
                'province_id' => '22',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Dumalag',
                'province_id' => '22',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Dumarao',
                'province_id' => '22',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Ivisan',
                'province_id' => '22',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Jamindan',
                'province_id' => '22',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Ma-ayon',
                'province_id' => '22',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mambusao',
                'province_id' => '22',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Panay',
                'province_id' => '22',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Panitan',
                'province_id' => '22',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pilar',
                'province_id' => '22',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pontevedra',
                'province_id' => '22',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'President Roxas',
                'province_id' => '22',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sapi-an',
                'province_id' => '22',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sigma',
                'province_id' => '22',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tapaz',
                'province_id' => '22',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bagamanoc',
                'province_id' => '23',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Baras',
                'province_id' => '23',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bato',
                'province_id' => '23',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Caramoran',
                'province_id' => '23',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Gigmoto',
                'province_id' => '23',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pandan',
                'province_id' => '23',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Panganiban',
                'province_id' => '23',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Andres',
                'province_id' => '23',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Miguel',
                'province_id' => '23',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Viga',
                'province_id' => '23',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Virac',
                'province_id' => '23',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Cavite City',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Dasmariñas City',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tagaytay City',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Trece Martires City',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Alfonso',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Amadeo',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bacoor',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Carmona',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'General Mariano Alvarez',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'General Emilio Aguinaldo',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'General Trias',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Imus',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Indang',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Kawit',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Magallanes',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Maragondon',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mendez',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Naic',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Noveleta',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Rosario',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Silang',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tanza',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Ternate',
                'province_id' => '24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bogo City',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Cebu City',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Carcar City',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Danao City',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Lapu-Lapu City',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mandaue City',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Naga City',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Talisay City',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Toledo City',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Alcantara',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Alcoy',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Alegria',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Aloguinsan',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Argao',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Asturias',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Badian',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Balamban',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bantayan',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Barili',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Boljoon',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Borbon',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Carmen',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Catmon',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Compostela',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Consolacion',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Cordoba',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Daanbantayan',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Dalaguete',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Dumanjug',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Ginatilan',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Liloan',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Madridejos',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Malabuyoc',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Medellin',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Minglanilla',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Moalboal',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Oslob',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pilar',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pinamungahan',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Poro',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Ronda',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Samboan',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Fernando',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Francisco',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Remigio',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Santa Fe',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Santander',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sibonga',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sogod',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tabogon',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tabuelan',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tuburan',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tudela',
                'province_id' => '25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Compostela',
                'province_id' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Laak',
                'province_id' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mabini',
                'province_id' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Maco',
                'province_id' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Maragusan',
                'province_id' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mawab',
                'province_id' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Monkayo',
                'province_id' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Montevista',
                'province_id' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Nabunturan',
                'province_id' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'New Bataan',
                'province_id' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pantukan',
                'province_id' => '26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
        
            [
               
                'city_name' => 'Kidapawan City',
                'province_id' => '27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
        
            [
               
                'city_name' => 'Alamada',
                'province_id' => '27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
                       [
               
                'city_name' => 'Aleosan',
                'province_id' => '27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
                       [
               
                'city_name' => 'Antipas',
                'province_id' => '27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Arakan',
                'province_id' => '27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
        
            [
               
                'city_name' => 'Banisilan',
                'province_id' => '27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
        
            [
               
                'city_name' => 'Carmen',
                'province_id' => '27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
        
            [
               
                'city_name' => 'Kabacan',
                'province_id' => '27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
        
            [
               
                'city_name' => 'Libungan',
                'province_id' => '27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
        
            [
               
                'city_name' => 'M\'lang',
                'province_id' => '27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
        
            [
               
                'city_name' => 'Magpet',
                'province_id' => '27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Makilala',
                'province_id' => '27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Matalam',
                'province_id' => '27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Midsayap',
                'province_id' => '27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pigkawayan',
                'province_id' => '27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pikit',
                'province_id' => '27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'President Roxas',
                'province_id' => '27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tulunan',
                'province_id' => '27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Panabo City',
                'province_id' => '28',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Island Garden City of Samal',
                'province_id' => '28',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Tagum City',
                'province_id' => '28',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Asuncion',
                'province_id' => '28',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Braulio E. Dujali',
                'province_id' => '28',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Carmen',
                'province_id' => '28',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Kapalong',
                'province_id' => '28',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'New Corella',
                'province_id' => '28',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'San Isidro',
                'province_id' => '28',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Santo Tomas',
                'province_id' => '28',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Talaingod',
                'province_id' => '28',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Davao City',
                'province_id' => '29',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Digos City',
                'province_id' => '29',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Bansalan',
                'province_id' => '29',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Don Marcelino',
                'province_id' => '29',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Hagonoy',
                'province_id' => '29',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Jose Abad Santos',
                'province_id' => '29',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Kiblawan',
                'province_id' => '29',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Magsaysay',
                'province_id' => '29',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Malalag',
                'province_id' => '29',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Malita',
                'province_id' => '29',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Matanao',
                'province_id' => '29',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Padada',
                'province_id' => '29',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Santa Cruz',
                'province_id' => '29',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Santa Maria',
                'province_id' => '29',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Sarangani',
                'province_id' => '29',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Sulop',
                'province_id' => '29',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Mati City',
                'province_id' => '30',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Baganga',
                'province_id' => '30',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Banaybanay',
                'province_id' => '30',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Boston',
                'province_id' => '30',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Caraga',
                'province_id' => '30',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Cateel',
                'province_id' => '30',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Governor Generoso',
                'province_id' => '30',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Lupon',
                'province_id' => '30',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Manay',
                'province_id' => '30',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Isidro',
                'province_id' => '30',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tarragona',
                'province_id' => '30',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Arteche',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Balangiga',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Balangkayan',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Borongan',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Can-avid',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Dolores',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'General MacArthur',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Giporlos',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Guiuan',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Hernani',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Jipapad',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Lawaan',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Llorente',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Maslog',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Maydolong',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mercedes',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Oras',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Quinapondan',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Salcedo',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Julian',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Policarpo',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sulat',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Taft',
                'province_id' => '31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Buenavista',
                'province_id' => '32',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Jordan',
                'province_id' => '32',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Nueva Valencia',
                'province_id' => '32',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Lorenzo',
                'province_id' => '32',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sibunag',
                'province_id' => '32',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Aguinaldo',
                'province_id' => '33',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Alfonso Lista',
                'province_id' => '33',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Asipulo',
                'province_id' => '33',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Banaue',
                'province_id' => '33',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Hingyon',
                'province_id' => '33',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Hungduan',
                'province_id' => '33',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Kiangan',
                'province_id' => '33',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Lagawe',
                'province_id' => '33',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Lamut',
                'province_id' => '33',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mayoyao',
                'province_id' => '33',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tinoc',
                'province_id' => '33',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Batac City',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Laoag City',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Adams',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bacarra',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Badoc',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Bangui',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Banna',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Burgos',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Carasi',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Currimao',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Dingras',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Dumalneg',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Marcos',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Nueva Era',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Pagudpud',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Paoay',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Pasuquin',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Piddig',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Pinili',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'San Nicolas',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Sarrat',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Solsona',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Vintar',
                'province_id' => '34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Candon City',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Vigan City',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Alilem',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Banayoyo',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Bantay',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Burgos',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Cabugao',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Caoayan',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Cervantes',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Galimuyod',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Gregorio Del Pilar',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Lidlidda',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Magsingal',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Nagbukel',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Narvacan',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Quirino',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Salcedo',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'San Emilio',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'San Esteban',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'San Ildefonso',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'San Juan',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'San Vicente',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Santa',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Santa Catalina',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Santa Cruz',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Santa Lucia',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Santa Maria',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Santiago',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Santo Domingo',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Sigay',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Sinait',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Sugpon',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Suyo',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Tagudin',
                'province_id' => '35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Iloilo City',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Passi City',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Ajuy',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Alimodian',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Anilao',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Badiangan',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Balasan',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Banate',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Barotac Nuevo',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Barotac Viejo',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Batad',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Bingawan',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Cabatuan',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Calinog',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Carles',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Concepcion',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Dingle',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Dueñas',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Dumangas',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Estancia',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Guimbal',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Igbaras',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Janiuay',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Lambunao',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Leganes',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Lemery',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Leon',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Maasin',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Miagao',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Mina',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'New Lucena',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Oton',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Pavia',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Pototan',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'San Dionisio',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'San Enrique',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'San Joaquin',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'San Miguel',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'San Rafael',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Santa Barbara',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Sara',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Tigbauan',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Tubungan',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Zarraga',
                'province_id' => '36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Cauayan City',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Santiago City',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Alicia',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
               
                'city_name' => 'Angadanan',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Aurora',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Benito Soliven',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Burgos',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Cabagan',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Cabatuan',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Cordon',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Delfin Albano',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Dinapigue',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Divilacan',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Echague',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Gamu',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Ilagan',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Jones',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Luna',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Maconacon',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mallig',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Naguilian',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Palanan',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Quezon',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Quirino',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Ramon',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Reina Mercedes',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Roxas',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Agustin',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Guillermo',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Isidro',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Manuel',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Mariano',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Mateo',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Pablo',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Santa Maria',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Santo Tomas',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tumauini',
                'province_id' => '37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tabuk',
                'province_id' => '38',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Balbalan',
                'province_id' => '38',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Lubuagan',
                'province_id' => '38',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pasil',
                'province_id' => '38',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pinukpuk',
                'province_id' => '38',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Rizal',
                'province_id' => '38',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tanudan',
                'province_id' => '38',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tinglayan',
                'province_id' => '38',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Fernando City',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Agoo',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Aringay',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bacnotan',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bagulin',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Balaoan',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bangar',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bauang',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Burgos',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Caba',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Luna',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Naguilian',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pugo',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Rosario',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Gabriel',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Juan',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Santo Tomas',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Santol',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sudipen',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tubao',
                'province_id' => '39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Biñan City',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Calamba City',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Pablo City',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Santa Rosa City',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Alaminos',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bay',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Cabuyao',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Calauan',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Cavinti',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Famy',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Kalayaan',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Liliw',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Los Baños',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Luisiana',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Lumban',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mabitac',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Magdalena',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Majayjay',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Nagcarlan',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Paete',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pagsanjan',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pakil',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pangil',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pila',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Rizal',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Pedro',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Santa Cruz',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Santa Maria',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Siniloan',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Victoria',
                'province_id' => '40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Iligan City',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bacolod',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Baloi',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Baroy',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Kapatagan',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Kauswagan',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Kolambugan',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Lala',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Linamon',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Magsaysay',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Maigo',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Matungao',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Munai',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Nunungan',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pantao Ragat',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pantar',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Poona Piagapo',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Salvador',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sapad',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sultan Naga Dimaporo',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tagoloan',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tangcal',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tubod',
                'province_id' => '41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Marawi City',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bacolod-Kalawi',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Balabagan',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Balindong',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bayang',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Binidayan',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Buadiposo-Buntong',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bubong',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bumbaran',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Butig',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Calanogas',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Ditsaan-Ramain',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Ganassi',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Kapai',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Kapatagan',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Lumba-Bayabao',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Lumbaca-Unayan',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Lumbatan',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Lumbayanague',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Madalum',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Madamba',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Maguing',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Malabang',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Marantao',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Marogong',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Masiu',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mulondo',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pagayawan',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Piagapo',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Poona Bayabao',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pualas',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Saguiaran',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sultan Dumalondong',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Picong',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tagoloan II',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tamparan',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Taraka',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tubaran',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tugaya',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Wao',
                'province_id' => '42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Ormoc City',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tacloban City',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Abuyog',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Alangalang',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Albuera',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Babatngon',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Barugo',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bato',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Baybay',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Burauen',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Calubian',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Capoocan',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Carigara',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Dagami',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Dulag',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Hilongos',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Hindang',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Inopacan',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Isabel',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Jaro',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Javier',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Julita',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Kananga',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'La Paz',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Leyte',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Liloan',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'MacArthur',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mahaplag',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Matag-ob',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Matalom',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mayorga',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Merida',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Palo',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Palompon',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pastrana',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Isidro',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Miguel',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Santa Fe',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sogod',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tabango',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tabontabon',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tanauan',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tolosa',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tunga',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Villaba',
                'province_id' => '43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Cotabato City',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Ampatuan',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Barira',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Buldon',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Buluan',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Datu Abdullah Sangki',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Datu Anggal Midtimbang',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Datu Blah T. Sinsuat',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Datu Hoffer Ampatuan',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Datu Montawal',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Datu Odin Sinsuat',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Datu Paglas',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Datu Piang',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Datu Salibo',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Datu Saudi-Ampatuan',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Datu Unsay',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'General Salipada K. Pendatun',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Guindulungan',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Kabuntalan',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mamasapano',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mangudadatu',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Matanog',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Northern Kabuntalan',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pagalungan',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Paglat',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pandag',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Parang',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Rajah Buayan',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Shariff Aguak',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Shariff Saydona Mustapha',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'South Upi',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sultan Kudarat',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sultan Mastura',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sultan sa Barongis',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Talayan',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Talitay',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Upi',
                'province_id' => '44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Boac',
                'province_id' => '45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Buenavista',
                'province_id' => '45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Gasan',
                'province_id' => '45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mogpog',
                'province_id' => '45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Santa Cruz',
                'province_id' => '45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Torrijos',
                'province_id' => '45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Masbate City',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Aroroy',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Baleno',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Balud',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Batuan',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Cataingan',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Cawayan',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Claveria',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Dimasalang',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Esperanza',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mandaon',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Milagros',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mobo',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Monreal',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Palanas',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pio V. Corpuz',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Placer',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Fernando',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Jacinto',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Pascual',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Uson',
                'province_id' => '46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Caloocan City',
                'province_id' => '47',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Las Piñas City',
                'province_id' => '47',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Makati City',
                'province_id' => '47',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Malabon City',
                'province_id' => '47',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Mandaluyong City',
                'province_id' => '47',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Manila',
                'province_id' => '47',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Marikina City',
                'province_id' => '47',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Muntinlupa City',
                'province_id' => '47',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Navotas City',
                'province_id' => '47',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Parañaque City',
                'province_id' => '47',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pasay City',
                'province_id' => '47',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pasig City',
                'province_id' => '47',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Quezon City',
                'province_id' => '47',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'San Juan City',
                'province_id' => '47',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Taguig City',
                'province_id' => '47',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Valenzuela City',
                'province_id' => '47',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Pateros',
                'province_id' => '47',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Oroquieta City',
                'province_id' => '48',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Ozamiz City',
                'province_id' => '48',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tangub City',
                'province_id' => '48',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Aloran',
                'province_id' => '48',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Baliangao',
                'province_id' => '48',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Bonifacio',
                'province_id' => '48',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Calamba',
                'province_id' => '48',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Clarin',
                'province_id' => '48',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Concepcion',
                'province_id' => '48',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Don Victoriano Chiongbian',
                'province_id' => '48',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Jimenez',
                'province_id' => '48',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Lopez Jaena',
                'province_id' => '48',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Panaon',
                'province_id' => '48',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Plaridel',
                'province_id' => '48',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sapang Dalaga',
                'province_id' => '48',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Sinacaban',
                'province_id' => '48',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Tudela',
                'province_id' => '48',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Cagayan de Oro',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
               
                'city_name' => 'Gingoog City',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Alubijid',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
        
            [
              
                'city_name' => 'Balingasag',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Balingoan',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
                       [
              
                'city_name' => 'Binuangan',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
                       [
              
                'city_name' => 'Claveria',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
                       [
              
                'city_name' => 'El Salvador',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Gitagum',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Initao',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Jasaan',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Kinoguitan',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Lagonglong',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Laguindingan',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Libertad',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Lugait',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Magsaysay',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Manticao',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Medina',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Naawan',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Opol',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Salay',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Sugbongcogon',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Tagoloan',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Talisayan',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Villanueva',
                'province_id' => '49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Barlig',
                'province_id' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Bauko',
                'province_id' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Besao',
                'province_id' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Bontoc',
                'province_id' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Natonin',
                'province_id' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Paracelis',
                'province_id' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Sabangan',
                'province_id' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Sadanga',
                'province_id' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Sagada',
                'province_id' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Tadian',
                'province_id' => '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Bacolod City',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Bago City',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Cadiz City',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Escalante City',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Himamaylan City',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Kabankalan City',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'La Carlota City',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Sagay City',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'San Carlos City',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Silay City',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Sipalay City',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Talisay City',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Victorias City',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Binalbagan',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Calatrava',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Candoni',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Cauayan',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Enrique B. Magalona',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Hinigaran',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Hinoba-an',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Ilog',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Isabela',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'La Castellana',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Manapla',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Moises Padilla',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Murcia',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Pontevedra',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Pulupandan',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Salvador Benedicto',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Enrique',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Toboso',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Valladolid',
                'province_id' => '51',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Bais City',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Bayawan City',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Canlaon City',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Guihulngan City',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Dumaguete City',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Tanjay City',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Amlan',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Ayungon',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Bacong',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Basay',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Bindoy',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Dauin',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Jimalalud',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'La Libertad',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Mabinay',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Manjuyod',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Pamplona',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Jose',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Santa Catalina',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Siaton',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Sibulan',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Tayasan',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Valencia',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Vallehermoso',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Zamboanguita',
                'province_id' => '52',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Allen',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Biri',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Bobon',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Capul',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Catarman',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Catubig',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Gamay',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Laoang',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Lapinig',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Las Navas',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Lavezares',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Lope de Vega',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Mapanas',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Mondragon',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Palapag',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Pambujan',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Rosario',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'San Antonio',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'San Isidro',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'San Jose',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'San Roque',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'San Vicente',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Silvino Lobos',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Victoria',
                'province_id' => '53',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Cabanatuan City',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Gapan City',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Science City of Muñoz',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Palayan City',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'San Jose City',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Aliaga',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Bongabon',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Cabiao',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Carranglan',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Cuyapo',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Gabaldon',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'General Mamerto Natividad',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'General Tinio',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Guimba',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Jaen',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Laur',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Licab',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Llanera',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Lupao',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Nampicuan',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Pantabangan',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Peñaranda',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Quezon',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Rizal',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'San Antonio',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'San Isidro',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'San Leonardo',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Santa Rosa',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Santo Domingo',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Talavera',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Talugtug',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Zaragoza',
                'province_id' => '54',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Alfonso Castaneda',
                'province_id' => '55',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Ambaguio',
                'province_id' => '55',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Aritao',
                'province_id' => '55',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Bagabag',
                'province_id' => '55',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Bambang',
                'province_id' => '55',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Bayombong',
                'province_id' => '55',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Diadi',
                'province_id' => '55',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Dupax del Norte',
                'province_id' => '55',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Dupax del Sur',
                'province_id' => '55',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Kasibu',
                'province_id' => '55',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Kayapa',
                'province_id' => '55',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Quezon',
                'province_id' => '55',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Santa Fe',
                'province_id' => '55',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Solano',
                'province_id' => '55',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Villaverde',
                'province_id' => '55',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Abra de Ilog',
                'province_id' => '56',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Calintaan',
                'province_id' => '56',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Looc',
                'province_id' => '56',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Lubang',
                'province_id' => '56',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Magsaysay',
                'province_id' => '56',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Mamburao',
                'province_id' => '56',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Paluan',
                'province_id' => '56',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Rizal',
                'province_id' => '56',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Sablayan',
                'province_id' => '56',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'San Jose',
                'province_id' => '56',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Santa Cruz',
                'province_id' => '56',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Calapan City',
                'province_id' => '57',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Baco',
                'province_id' => '57',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Bansud',
                'province_id' => '57',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Bongabong',
                'province_id' => '57',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Bulalacao',
                'province_id' => '57',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Gloria',
                'province_id' => '57',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Mansalay',
                'province_id' => '57',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Naujan',
                'province_id' => '57',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Pinamalayan',
                'province_id' => '57',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Pola',
                'province_id' => '57',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Puerto Galera',
                'province_id' => '57',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Roxas',
                'province_id' => '57',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'San Teodoro',
                'province_id' => '57',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Socorro',
                'province_id' => '57',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Victoria',
                'province_id' => '57',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Puerto Princesa City',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Aborlan',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Agutaya',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Araceli',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Balabac',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Bataraza',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Brooke\'s Point',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Busuanga',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Cagayancillo',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Coron',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Culion',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Cuyo',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Dumaran',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'El Nido',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Kalayaan',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Linapacan',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Magsaysay',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Narra',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Quezon',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Rizal',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Roxas',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Vicente',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Sofronio Española',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Taytay',
                'province_id' => '58',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Angeles City',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'City of San Fernando',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Apalit',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Arayat',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Bacolor',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Candaba',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Floridablanca',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Guagua',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Lubao',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Mabalacat',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Macabebe',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Magalang',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Masantol',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Mexico',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Minalin',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Porac',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Luis',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Simon',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Santa Ana',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Santa Rita',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Santo Tomas',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Sasmuan',
                'province_id' => '59',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Alaminos City',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Dagupan City',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Carlos City',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Urdaneta City',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Agno',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Aguilar',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Alcala',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Anda',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Asingan',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Balungao',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Bani',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Basista',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Bautista',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Bayambang',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Binalonan',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Binmaley',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Bolinao',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Bugallon',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Burgos',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Calasiao',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Dasol',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Infanta',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Labrador',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Laoac',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Lingayen',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Mabini',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Malasiqui',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Manaoag',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Mangaldan',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Mangatarem',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Mapandan',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Natividad',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Pozzorubio',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Rosales',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Fabian',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Jacinto',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Manuel',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Nicolas',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Quintin',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Santa Barbara',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Santa Maria',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Santo Tomas',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Sison',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Sual',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Tayug',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Umingan',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Urbiztondo',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Villasis',
                'province_id' => '60',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Lucena City',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Tayabas City',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Agdangan',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Alabat',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Atimonan',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Buenavista',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Burdeos',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Calauag',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Candelaria',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Catanauan',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Dolores',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'General Luna',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'General Nakar',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Guinayangan',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Gumaca',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Infanta',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Jomalig',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Lopez',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Lucban',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Macalelon',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Mauban',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Mulanay',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Padre Burgos',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Pagbilao',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Panukulan',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Patnanungan',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Perez',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Pitogo',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Plaridel',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Polillo',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Quezon',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Real',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Sampaloc',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Andres',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Antonio',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Francisco',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Narciso',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Sariaya',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Tagkawayan',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Tiaong',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Unisan',
                'province_id' => '61',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Aglipay',
                'province_id' => '62',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Cabarroguis',
                'province_id' => '62',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Diffun',
                'province_id' => '62',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Maddela',
                'province_id' => '62',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Nagtipunan',
                'province_id' => '62',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Saguday',
                'province_id' => '62',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Antipolo City',
                'province_id' => '63',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Angono',
                'province_id' => '63',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Baras',
                'province_id' => '63',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Binangonan',
                'province_id' => '63',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Cainta',
                'province_id' => '63',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Cardona',
                'province_id' => '63',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Jalajala',
                'province_id' => '63',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Morong',
                'province_id' => '63',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Pililla',
                'province_id' => '63',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Rodriguez',
                'province_id' => '63',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Mateo',
                'province_id' => '63',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Tanay',
                'province_id' => '63',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Taytay',
                'province_id' => '63',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Teresa',
                'province_id' => '63',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Alcantara',
                'province_id' => '64',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Banton',
                'province_id' => '64',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Cajidiocan',
                'province_id' => '64',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Calatrava',
                'province_id' => '64',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Concepcion',
                'province_id' => '64',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Corcuera',
                'province_id' => '64',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Ferrol',
                'province_id' => '64',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Looc',
                'province_id' => '64',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Magdiwang',
                'province_id' => '64',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Odiongan',
                'province_id' => '64',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Romblon',
                'province_id' => '64',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Agustin',
                'province_id' => '64',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Andres',
                'province_id' => '64',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Fernando',
                'province_id' => '64',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Jose',
                'province_id' => '64',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Santa Fe',
                'province_id' => '64',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Santa Maria',
                'province_id' => '64',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Calbayog City',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Catbalogan City',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Almagro',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Basey',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Calbiga',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Daram',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Gandara',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Hinabangan',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Jiabong',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Marabut',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Matuguinao',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Motiong',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Pagsanghan',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Paranas',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Pinabacdao',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Jorge',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Jose De Buan',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Sebastian',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Santa Margarita',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Santa Rita',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Santo Niño',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Tagapul-an',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Talalora',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Tarangnan',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Villareal',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Zumarraga',
                'province_id' => '65',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Alabel',
                'province_id' => '66',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Glan',
                'province_id' => '66',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Kiamba',
                'province_id' => '66',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Maasim',
                'province_id' => '66',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Maitum',
                'province_id' => '66',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Malapatan',
                'province_id' => '66',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Malungon',
                'province_id' => '66',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Enrique Villanueva',
                'province_id' => '67',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Larena',
                'province_id' => '67',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Lazi',
                'province_id' => '67',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Maria',
                'province_id' => '67',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Juan',
                'province_id' => '67',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Siquijor',
                'province_id' => '67',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Sorsogon City',
                'province_id' => '68',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Barcelona',
                'province_id' => '68',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Bulan',
                'province_id' => '68',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Bulusan',
                'province_id' => '68',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Casiguran',
                'province_id' => '68',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Castilla',
                'province_id' => '68',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Donsol',
                'province_id' => '68',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Gubat',
                'province_id' => '68',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Irosin',
                'province_id' => '68',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Juban',
                'province_id' => '68',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Magallanes',
                'province_id' => '68',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Matnog',
                'province_id' => '68',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Pilar',
                'province_id' => '68',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Prieto Diaz',
                'province_id' => '68',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Santa Magdalena',
                'province_id' => '68',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'General Santos City',
                'province_id' => '69',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Koronadal City',
                'province_id' => '69',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Banga',
                'province_id' => '69',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Lake Sebu',
                'province_id' => '69',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Norala',
                'province_id' => '69',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Polomolok',
                'province_id' => '69',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Santo Niño',
                'province_id' => '69',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Surallah',
                'province_id' => '69',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'T\'boli',
                'province_id' => '69',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Tampakan',
                'province_id' => '69',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Tantangan',
                'province_id' => '69',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Tupi',
                'province_id' => '69',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Maasin City',
                'province_id' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Anahawan',
                'province_id' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Bontoc',
                'province_id' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Hinunangan',
                'province_id' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Hinundayan',
                'province_id' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Libagon',
                'province_id' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Liloan',
                'province_id' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Limasawa',
                'province_id' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Macrohon',
                'province_id' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Malitbog',
                'province_id' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Padre Burgos',
                'province_id' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Pintuyan',
                'province_id' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Saint Bernard',
                'province_id' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Francisco',
                'province_id' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Juan',
                'province_id' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Ricardo',
                'province_id' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Silago',
                'province_id' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Sogod',
                'province_id' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Tomas Oppus',
                'province_id' => '70',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Tacurong City',
                'province_id' => '71',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Bagumbayan',
                'province_id' => '71',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Columbio',
                'province_id' => '71',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Esperanza',
                'province_id' => '71',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Isulan',
                'province_id' => '71',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Kalamansig',
                'province_id' => '71',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Lambayong',
                'province_id' => '71',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Lebak',
                'province_id' => '71',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Lutayan',
                'province_id' => '71',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Palimbang',
                'province_id' => '71',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'President Quirino',
                'province_id' => '71',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Senator Ninoy Aquino',
                'province_id' => '71',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Banguingui',
                'province_id' => '72',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Hadji Panglima Tahil',
                'province_id' => '72',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Indanan',
                'province_id' => '72',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Jolo',
                'province_id' => '72',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Kalingalan Caluang',
                'province_id' => '72',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Lugus',
                'province_id' => '72',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Luuk',
                'province_id' => '72',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Maimbung',
                'province_id' => '72',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Old Panamao',
                'province_id' => '72',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Omar',
                'province_id' => '72',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Pandami',
                'province_id' => '72',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Panglima Estino',
                'province_id' => '72',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Pangutaran',
                'province_id' => '72',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Parang',
                'province_id' => '72',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Pata',
                'province_id' => '72',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Patikul',
                'province_id' => '72',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Siasi',
                'province_id' => '72',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Talipao',
                'province_id' => '72',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Tapul',
                'province_id' => '72',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Surigao City',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Alegria',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Bacuag',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Basilisa',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Burgos',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Cagdianao',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Claver',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Dapa',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Del Carmen',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Dinagat',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'General Luna',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Gigaquit',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Libjo',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Loreto',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Mainit',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Malimono',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Pilar',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Placer',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Benito',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Francisco',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Isidro',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Jose',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Santa Monica',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Sison',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Socorro',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
      
            [
              
                'city_name' => 'Tagana-an',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Tubajon',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
                       [
              
                'city_name' => 'Tubod',
                'province_id' => '73',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
                       [
              
                'city_name' => 'Bislig City',
                'province_id' => '74',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
                       [
              
                'city_name' => 'Tandag City',
                'province_id' => '74',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Barobo',
                'province_id' => '74',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Bayabas',
                'province_id' => '74',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Cagwait',
                'province_id' => '74',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Cantilan',
                'province_id' => '74',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Carmen',
                'province_id' => '74',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Carrascal',
                'province_id' => '74',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Cortes',
                'province_id' => '74',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Hinatuan',
                'province_id' => '74',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Lanuza',
                'province_id' => '74',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Lianga',
                'province_id' => '74',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Lingig',
                'province_id' => '74',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Madrid',
                'province_id' => '74',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Marihatag',
                'province_id' => '74',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Agustin',
                'province_id' => '74',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Miguel',
                'province_id' => '74',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Tagbina',
                'province_id' => '74',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Tago',
                'province_id' => '74',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Tarlac City',
                'province_id' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Anao',
                'province_id' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Bamban',
                'province_id' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Camiling',
                'province_id' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Capas',
                'province_id' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Concepcion',
                'province_id' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Gerona',
                'province_id' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'La Paz',
                'province_id' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Mayantoc',
                'province_id' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Moncada',
                'province_id' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Paniqui',
                'province_id' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Pura',
                'province_id' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Ramos',
                'province_id' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'San Clemente',
                'province_id' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'San Jose',
                'province_id' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'San Manuel',
                'province_id' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Santa Ignacia',
                'province_id' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Victoria',
                'province_id' => '75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Bongao',
                'province_id' => '76',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Languyan',
                'province_id' => '76',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Mapun',
                'province_id' => '76',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Panglima Sugala',
                'province_id' => '76',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Sapa-Sapa',
                'province_id' => '76',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Sibutu',
                'province_id' => '76',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Simunul',
                'province_id' => '76',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Sitangkai',
                'province_id' => '76',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'South Ubian',
                'province_id' => '76',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Tandubas',
                'province_id' => '76',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Turtle Islands',
                'province_id' => '76',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Olongapo City',
                'province_id' => '77',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Botolan',
                'province_id' => '77',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Cabangan',
                'province_id' => '77',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Candelaria',
                'province_id' => '77',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Castillejos',
                'province_id' => '77',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Iba',
                'province_id' => '77',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Masinloc',
                'province_id' => '77',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Palauig',
                'province_id' => '77',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Antonio',
                'province_id' => '77',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Felipe',
                'province_id' => '77',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Marcelino',
                'province_id' => '77',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'San Narciso',
                'province_id' => '77',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Santa Cruz',
                'province_id' => '77',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Subic',
                'province_id' => '77',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Dapitan City',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Dipolog City',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Bacungan',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Baliguian',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Godod',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Gutalac',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Jose Dalman',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Kalawit',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Katipunan',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'La Libertad',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Labason',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Liloy',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Manukan',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Mutia',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Piñan',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Polanco',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'President Manuel A. Roxas',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Rizal',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Salug',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Sergio Osmeña Sr.',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Siayan',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Sibuco',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Sibutad',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Sindangan',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Siocon',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Sirawai',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Tampilisan',
                'province_id' => '78',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Pagadian City',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Zamboanga City',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Aurora',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Bayog',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Dimataling',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Dinas',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Dumalinao',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
            
            [
              
                'city_name' => 'Dumingag',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Guipos',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Josefina',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Kumalarang',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Labangan',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Lakewood',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Lapuyan',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Mahayag',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Margosatubig',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Midsalip',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Molave',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Pitogo',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Ramon Magsaysay',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'San Miguel',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'San Pablo',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Sominot',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Tabina',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Tambulig',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Tigbao',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Tukuran',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Vincenzo A. Sagun',
                'province_id' => '79',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Alicia',
                'province_id' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Buug',
                'province_id' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Diplahan',
                'province_id' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Imelda',
                'province_id' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Ipil',
                'province_id' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Kabasalan',
                'province_id' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Mabuhay',
                'province_id' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Malangas',
                'province_id' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Naga',
                'province_id' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Olutanga',
                'province_id' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Payao',
                'province_id' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Roseller Lim',
                'province_id' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Siay',
                'province_id' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Talusan',
                'province_id' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Titay',
                'province_id' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ],
           
            [
              
                'city_name' => 'Tungawan',
                'province_id' => '80',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
           ]
            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
