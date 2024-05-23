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

            'name_site' => 'Monumento Torre del Reloj',
            'address' => 'Boca del Puente, El Centro, Cartagena de Indias, Provincia de Cartagena, Bolívar',
            'schedule_open' => '00:00',
            'schedule_close' => '23:59',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds',
            'url_img' => 'https://cdn.colombia.com/sdi/2015/10/18/torre-del-reloj-704593.jpg',
            'url_map' => 'https://maps.app.goo.gl/MJynXJe6HKhkgK6u6',
        ]);
        Site::create([

            'name_site' => 'Plaza de Santo Domingo',
            'address' => 'Cl. 35, El Centro, Cartagena de Indias, Provincia de Cartagena, Bolívar',
            'schedule_open' => '00:00',
            'schedule_close' => '23:59',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds',
            'url_img' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0a/87/60/61/desde-los-balcones.jpg?w=1200&h=-1&s=1',
            'url_map' => 'https://maps.app.goo.gl/wViJxTWhQfRuNZaj9',
        ]);
        Site::create([

            'name_site' => 'Museo Historio de Cartagena',
            'address' => '46, Plaza de Bolivar Carrera 3 33, Bolívar',
            'schedule_open' => '09:00',
            'schedule_close' => '18:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://scontent-bog2-1.xx.fbcdn.net/v/t39.30808-6/273946196_2073347992834466_3994508678975562115_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_ohc=sjczmmPmQhkQ7kNvgHnMwwk&_nc_ht=scontent-bog2-1.xx&oh=00_AYCc1quMVuILvlDvEba52JUyGN5Z2M7_qMWST6JjowMd6A&oe=665570C5',
            'url_map' => 'https://maps.app.goo.gl/xYM2ASDuNJqFWSWP6',
        ]);
        Site::create([

            'name_site' => 'Centro Histórico',
            'address' => 'Cra. 7 #32-41, El Centro, Cartagena de Indias, Provincia de Cartagena, Bolívar',
            'schedule_open' => '00:00',
            'schedule_close' => '23:59',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://cartagenafincaraiz.com/wp-content/uploads/2021/04/Centro-Historico-Cartagena-Nicanor-Carazo-1024x683.jpg',
            'url_map' => 'https://maps.app.goo.gl/75MZrewuTU8FaEr17',
        ]);
        Site::create([
            'name_site' => 'Biblioteca Bartolomé Calvo',
            'address' => 'Calle de la Inquisición, El Centro, Cartagena de Indias, Provincia de Cartagena, Bolívar',
            'schedule_open' => '08:00',
            'schedule_close' => '18:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://bibliotecabartolomecalvo.com.co/wp-content/uploads/2021/04/biblioteca.jpg',
            'url_map' => 'https://maps.app.goo.gl/75MZrewuTU8FaEr18',
        ]);
        Site::create([
            'name_site' => 'Museo del Oro Zenú',
            'address' => 'Plaza de Bolívar, El Centro, Cartagena de Indias, Provincia de Cartagena, Bolívar',
            'schedule_open' => '09:00',
            'schedule_close' => '17:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://museodelorocartagena.com.co/wp-content/uploads/2021/04/museo.jpg',
            'url_map' => 'https://maps.app.goo.gl/75MZrewuTU8FaEr19',
        ]);
        Site::create([
            'name_site' => 'Museo Naval del Caribe',
            'address' => 'Calle San Juan de Dios, El Centro, Cartagena de Indias, Provincia de Cartagena, Bolívar',
            'schedule_open' => '09:00',
            'schedule_close' => '17:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://museonavalcartagena.com.co/wp-content/uploads/2021/04/museo.jpg',
            'url_map' => 'https://maps.app.goo.gl/75MZrewuTU8FaEr20',
        ]);
        Site::create([
            'name_site' => 'Castillo de San Felipe de Barajas',
            'address' => 'Carrera 17, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '08:00',
            'schedule_close' => '18:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.colombia.travel/sites/default/files/castillosanfelipe_0.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ8',
        ]);
        Site::create([
            'name_site' => 'Convento de la Popa',
            'address' => 'Calle 37 #25-94, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '08:00',
            'schedule_close' => '17:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.colombia.travel/sites/default/files/conventodelapopa.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ9',
        ]);
        Site::create([
            'name_site' => 'Las Bóvedas',
            'address' => 'Calle Zerrezuela, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '10:00',
            'schedule_close' => '20:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.colombia.travel/sites/default/files/lasbovedas.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ10',
        ]);
        Site::create([
            'name_site' => 'Palacio de la Inquisición',
            'address' => 'Plaza de Bolívar, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '09:00',
            'schedule_close' => '17:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.colombia.travel/sites/default/files/palaciodelainquisicion.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ11',
        ]);
        Site::create([
            'name_site' => 'Iglesia de San Pedro Claver',
            'address' => 'Calle 30 #4-08, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '08:00',
            'schedule_close' => '17:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.colombia.travel/sites/default/files/iglesiadesanpedroclaver.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ12',
        ]);
        Site::create([
            'name_site' => 'Casa Museo Rafael Núñez',
            'address' => 'Calle Real, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '09:00',
            'schedule_close' => '17:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.colombia.travel/sites/default/files/casamuseorafaelnunez.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ13',
        ]);
        Site::create([
            'name_site' => 'Teatro Adolfo Mejía',
            'address' => 'Plaza de la Merced, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '10:00',
            'schedule_close' => '18:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.colombia.travel/sites/default/files/teatroadolfomejia.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ14',
        ]);
        Site::create([
            'name_site' => 'Parque de Bolívar',
            'address' => 'Calle 32, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '00:00',
            'schedule_close' => '23:59',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.colombia.travel/sites/default/files/parquedebolivar.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ15',
        ]);
        Site::create([
            'name_site' => 'Plaza de la Aduana',
            'address' => 'Calle 32, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '00:00',
            'schedule_close' => '23:59',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.colombia.travel/sites/default/files/plazadelaaduana.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ16',
        ]);
        Site::create([
            'name_site' => 'Plaza de San Diego',
            'address' => 'Calle 30, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '00:00',
            'schedule_close' => '23:59',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.colombia.travel/sites/default/files/plazadesandiego.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ17',
        ]);
        Site::create([
            'name_site' => 'Restaurante La Vitrola',
            'address' => 'Calle Baloco, Esquina Calle de la Mantilla, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '12:00',
            'schedule_close' => '23:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.lavitrola.com.co/images/restaurant.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ18',
        ]);
        Site::create([
            'name_site' => 'Restaurante El Santísimo',
            'address' => 'Calle del Torno, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '12:00',
            'schedule_close' => '23:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.elsantisimo.com/images/restaurant.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ19',
        ]);
        Site::create([
            'name_site' => 'Restaurante Carmen',
            'address' => 'Calle del Cuartel, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '12:00',
            'schedule_close' => '23:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.carmenrestaurant.com/images/restaurant.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ20',
        ]);
        Site::create([
            'name_site' => 'Restaurante Marea by Rausch',
            'address' => 'Centro, Plaza de la Aduana, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '12:00',
            'schedule_close' => '23:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.mareabyrausch.com/images/restaurant.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ21',
        ]);
        Site::create([
            'name_site' => 'Restaurante Don Juan',
            'address' => 'Calle del Colegio, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '12:00',
            'schedule_close' => '23:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.donjuancartagena.com/images/restaurant.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ22',
        ]);
        Site::create([
            'name_site' => 'Restaurante Cuzco',
            'address' => 'Calle del Colegio, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '12:00',
            'schedule_close' => '23:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.cuzcocartagena.com/images/restaurant.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ23',
        ]);
        Site::create([
            'name_site' => 'Restaurante Vera',
            'address' => 'Calle del Sargento Mayor, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '12:00',
            'schedule_close' => '23:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.veracartagena.com/images/restaurant.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ24',
        ]);
        Site::create([
            'name_site' => 'Restaurante Di Silvio Trattoria',
            'address' => 'Calle de la Iglesia, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '12:00',
            'schedule_close' => '23:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.disilviotrattoria.com/images/restaurant.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ25',
        ]);
        Site::create([
            'name_site' => 'Restaurante La Cevicheria',
            'address' => 'Calle Stuart, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '12:00',
            'schedule_close' => '23:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.lacevicheriacartagena.com/images/restaurant.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ26',
        ]);
        Site::create([
            'name_site' => 'Restaurante La Mulata',
            'address' => 'Calle Quero, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '12:00',
            'schedule_close' => '23:00',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.lamulatacartagena.com/images/restaurant.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ27',
        ]);
        Site::create([
            'name_site' => 'Torre del Reloj',
            'address' => 'Plaza de los Coches, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '00:00',
            'schedule_close' => '23:59',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.cartagenadeindias.travel/images/torre_del_reloj.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ28',
        ]);
        Site::create([
            'name_site' => 'Muelle de los Pegasos',
            'address' => 'Calle 32, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '00:00',
            'schedule_close' => '23:59',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.cartagenadeindias.travel/images/muelle_de_los_pegasos.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ29',
        ]);
        Site::create([
            'name_site' => 'Monumento a los Zapatos Viejos',
            'address' => 'Fortaleza de San Felipe de Barajas, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '00:00',
            'schedule_close' => '23:59',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.cartagenadeindias.travel/images/monumento_a_los_zapatos_viejos.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ30',
        ]);
        Site::create([
            'name_site' => 'Plaza de la Trinidad',
            'address' => 'Calle 9, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '00:00',
            'schedule_close' => '23:59',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.cartagenadeindias.travel/images/plaza_de_la_trinidad.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ31',
        ]);
        Site::create([
            'name_site' => 'Plaza de los Coches',
            'address' => 'Calle 35, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '00:00',
            'schedule_close' => '23:59',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.cartagenadeindias.travel/images/plaza_de_los_coches.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ32',
        ]);
        Site::create([
            'name_site' => 'Plaza de la Proclamación',
            'address' => 'Calle 35, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '00:00',
            'schedule_close' => '23:59',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.cartagenadeindias.travel/images/plaza_de_la_proclamacion.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ33',
        ]);
        Site::create([
            'name_site' => 'Plaza de la Paz',
            'address' => 'Calle 35, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '00:00',
            'schedule_close' => '23:59',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.cartagenadeindias.travel/images/plaza_de_la_paz.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ34',
        ]);
        Site::create([
            'name_site' => 'Plaza de la Merced',
            'address' => 'Calle 35, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '00:00',
            'schedule_close' => '23:59',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.cartagenadeindias.travel/images/plaza_de_la_merced.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ35',
        ]);
        Site::create([
            'name_site' => 'Plaza de la Aduana',
            'address' => 'Calle 35, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '00:00',
            'schedule_close' => '23:59',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.cartagenadeindias.travel/images/plaza_de_la_aduana.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ36',
        ]);
        Site::create([
            'name_site' => 'Plaza de la Santísima Trinidad',
            'address' => 'Calle 10, Cartagena, Provincia de Cartagena, Bolívar',
            'schedule_open' => '00:00',
            'schedule_close' => '23:59',
            'weather_preferable' => 'clear sky,few clouds,scattered clouds,broken clouds',
            'url_img' => 'https://www.cartagenadeindias.travel/images/plaza_de_la_santisima_trinidad.jpg',
            'url_map' => 'https://goo.gl/maps/6G4HUnPZG5eYnVbJ37',
        ]);

        //Site::create([

        //     'name_site' => '',
        //     'address' => '',
        //     'schedule_open' => '',
        //     'schedule_close' => '',
        //     'weather_preferable' => '',
        //     'url_img' => '',
        //     'url_map' => '',
        // ]);
    }
}
