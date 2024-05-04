<?php

namespace Database\Seeders;

use App\Models\Site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Site::create([

            'name_site' => 'La castellana',
            'address' => 'La castellana',
            'schedule' => '7:00am-12:00pm 1:00pm-5:30pm',
            'weather_preferable' => 'nube,sol',
            'url_img' => 'https://www.paseodelacastellana.com/multimedia/galerias/8castellana.jpg',
            'url_map' => 'https://www.google.com/maps/place/Centro+Comercial+Paseo+de+La+Castellana/@10.3952722,-75.4893755,17.25z/data=!4m6!3m5!1s0x8ef62597d37ea915:0x3a357558224f02e!8m2!3d10.3935795!4d-75.4872761!16s%2Fg%2F11fxcgcjxb?entry=ttu',
        ]);
        Site::create([
            'name_site' => 'Centro Historico',
            'address' => 'En el centro',
            'schedule' => 'todo el dia',
            'weather_preferable' => 'sol',
            'url_img' => 'https://pbs.twimg.com/media/F4KbtBQW0AEoyOV.jpg',
            'url_map' => 'https://www.google.com/maps/place/Esperanza,+Cartagena+de+Indias,+Provincia+de+Cartagena,+Bolívar/@10.4147948,-75.5203061,17z/data=!3m1!4b1!4m6!3m5!1s0x8ef625847276b737:0x837b2553b40eb856!8m2!3d10.4133202!4d-75.5196631!16s%2Fg%2F1thtf5sf?entry=ttu',
        ]);
        // Site::create([
        //     'name_site' => '',
        //     'address' => '',
        //     'schedule' => '',
        //     'weather_preferable' => '',
        //     'url_img' => '',
        //     'url_map' => '',
        // ]);
        // Site::create([
        //     'name_site' => '',
        //     'address' => '',
        //     'schedule' => '',
        //     'weather_preferable' => '',
        //     'url_img' => '',
        //     'url_map' => '',
        // ]);
        // Site::create([
        //     'name_site' => '',
        //     'address' => '',
        //     'schedule' => '',
        //     'weather_preferable' => '',
        //     'url_img' => '',
        //     'url_map' => '',
        // ]);
        // Site::create([
        //     'name_site' => '',
        //     'address' => '',
        //     'schedule' => '',
        //     'weather_preferable' => '',
        //     'url_img' => '',
        //     'url_map' => '',
        // ]);
    }
}
