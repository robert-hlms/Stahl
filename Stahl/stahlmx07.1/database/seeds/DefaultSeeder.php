<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    				//Table Users
    	DB::table('users')->insert([
    		'name' => 'STAHL',
    		'email' => 'admin@s-stahl.com',
    		'password' => bcrypt('stahl_admin33f')
    	]);

     	        	//Table titles
     	//ID 1
     	DB::table('titles')->insert([
     		'name' => 'MENU_LOGOTIPO',
               'title' => 'Logotipo Stahl',
     		'description' => 'images/logo-stahl-white.svg' 
     	]);

     	//ID 2
     	DB::table('titles')->insert([
     		'name' => 'ISO',
     		'title' => 'iso 9001:2015',
     		'description' => 'images/iso9001.svg' 
     	]);      

     	//ID 3
     	DB::table('titles')->insert([
     		'name' => 'INICIO',
     		'title' => 'La calidad es nuestra prioridad',
     		'description' => 'Servicio profesional y especializado de maquinados industriales' 
     	]);    

     	//ID 4
     	DB::table('titles')->insert([
     		'name' => 'INICIO_MEDIA',
     		'description' => 'videos/video-prueba.mp4' 
     	]);    

     	//ID 5
     	DB::table('titles')->insert([
     		'name' => 'NOSOTROS',
     		'title' => 'Nosotros',
     		'description' => 'es una empresa mexicana enfocada al maquinado de piezas metálicas con alta precisión, nuestro compromiso es exceder las espectativas de nuestros clientes elaborando piezas con la mejor calidad así como hacer las entregas en tiempo y forma.' 
     	]);    

     	//ID 6
     	DB::table('titles')->insert([
     		'name' => 'SERVICIOS',
     		'title' => 'Servicios',
     		'description' => 'Especializados en maquinados CNC' 
     	]);    

     	//ID 7
     	DB::table('titles')->insert([
     		'name' => 'SERVICIO_M',
     		'title' => 'Maquinado',
     		'description' => 'images/servicio-maquinado.jpg' 
     	]);    

     	//ID 8
     	DB::table('titles')->insert([
     		'name' => 'SERVICIO_T',
     		'title' => 'Torno',
     		'description' => 'images/servicio-maquinado2.jpg' 
     	]);    

     	//ID 9
     	DB::table('titles')->insert([
     		'name' => 'SERVICIO_S',
     		'title' => 'Soldadura',
     		'description' => 'images/servicio-soldadura.jpg' 
     	]);    

     	//ID 10
     	DB::table('titles')->insert([
     		'name' => 'TRABAJOS',
     		'title' => 'Nuestros trabajos hablan por si solos.',
     		'description' => 'Conoce más sobre ellos.' 
     	]);    

     	//ID 11
     	DB::table('titles')->insert([
     		'name' => 'CLIENTES',
     		'title' => 'Clientes'
     	]);    

     	//ID 12
     	DB::table('titles')->insert([
     		'name' => 'CONTACTO',
     		'title' => 'Contacto'
     	]);    

     	//ID 13
     	DB::table('titles')->insert([
     		'name' => 'UBICACION',
     		'title' => 'Ubicación'
     	]);    

     	//ID 14
     	DB::table('titles')->insert([
     		'name' => 'TELEFONO',
     		'title' => 'Teléfono',
     		'description' => '+52 1 844 4393329' 
     	]);    

     	//ID 15
     	DB::table('titles')->insert([
     		'name' => 'EMAIL',
     		'title' => 'Correo',
     		'description' => 'admin@s-stahl.com' 
     	]);    

     	//ID 16
     	DB::table('titles')->insert([
     		'name' => 'FOOTER',
     		'title' => 'STAHL 2019'
     	]);    

          //ID 17
          DB::table('titles')->insert([
               'name' => 'CLIENTES_BACKGROUND',
               'description' => 'images/stahl-piezas.png'
          ]);

     				//Table images
     	DB::table('images')->insert([
     		'url' => 'images/STAHL_1.jpg',
     		'idTitle' => 5
     	]);

     	DB::table('images')->insert([
     		'url' => 'images/STAHL_2.jpg',
     		'idTitle' => 5
     	]);

     	DB::table('images')->insert([
     		'url' => 'images/STAHL_3.jpg',
     		'idTitle' => 5
     	]);

     	DB::table('images')->insert([
     		'url' => 'images/STAHL_4.jpg',
     		'idTitle' => 5
     	]);

     	DB::table('images')->insert([
     		'url' => 'images/STAHL_5.jpg',
     		'idTitle' => 5
     	]);

     	DB::table('images')->insert([
     		'url' => 'images/pieza1.jpg',
     		'title' => 'Lorem ipsum',
     		'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quisquam quis maxime consequuntur nam, sapiente ex. Modi laboriosam commodi',
     		'idTitle' => 10
     	]);

     	DB::table('images')->insert([
     		'url' => 'images/pieza2.jpg',
     		'title' => 'Lorem ipsum',
     		'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quisquam quis maxime consequuntur nam, sapiente ex. Modi laboriosam commodi', 
     		'idTitle' => 10
     	]);

     	DB::table('images')->insert([
     		'url' => 'images/pieza3.jpg',
     		'title' => 'Lorem ipsum',
     		'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quisquam quis maxime consequuntur nam, sapiente ex. Modi laboriosam commodi',
     		'idTitle' => 10
     	]);

     	DB::table('images')->insert([
     		'url' => 'images/STAHL_6.jpg',
     		'title' => 'Lorem ipsum',
     		'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quisquam quis maxime consequuntur nam, sapiente ex. Modi laboriosam commodi',
     		'idTitle' => 10
     	]);

     	DB::table('images')->insert([
     		'url' => 'images/STAHL_7.jpg',
     		'title' => 'Lorem ipsum',
     		'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quisquam quis maxime consequuntur nam, sapiente ex. Modi laboriosam commodi',
     		'idTitle' => 10
     	]);

     	DB::table('images')->insert([
     		'url' => 'images/logo-magnacims.png',
     		'title' => 'Magna Cims',
     		'idTitle' => 11
     	]);

     	DB::table('images')->insert([
     		'url' => 'images/logo-pace-industries.png',
     		'title' => 'Pace Industries',
     		'idTitle' => 11
     	]);

     	DB::table('images')->insert([
     		'url' => 'images/logo-magna-closures.png',
     		'title' => 'Magna Closures',
     		'idTitle' => 11
     	]);

     	DB::table('images')->insert([
     		'url' => 'images/logo-lenox.png',
     		'title' => 'Lenox',
     		'idTitle' => 11
     	]);

     				//Table networks
     	DB::table('networks')->insert([
     		'url' => 'https://www.facebook.com/stahlsolucionesindustriales/',
     		'icon' => 'fab fa-facebook-f',
     		'idTitle' => 16
     	]);

     	DB::table('networks')->insert([
     		'url' => 'https://www.instagram.com/stahl_solind/',
     		'icon' => 'fab fa-instagram',
     		'idTitle' => 16
     	]);

     	DB::table('networks')->insert([
     		'url' => '#',
     		'icon' => 'fab fa-linkedin-in',
     		'idTitle' => 16
     	]);

     				//Table ubications
     	DB::table('ubications')->insert([
     		'street' => 'Blvd. Vito Alessio Robles #3045',
     		'colony' => 'Col. Valle del Rio Grande,',
     		'located' => 'Saltillo Coahuila.',
     		'idTitle' => 13
     	]);
    }
}
