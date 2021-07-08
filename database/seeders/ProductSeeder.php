<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// custom
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('products')->insert([

            // [
            //         'name' => "Oppo f11 pro",
            //         'price' => "30000",
            //         'category' => "mobile",
            //         'description' => "A smart phone with extra advanced features",
            //         'gallery' => "https://www.mobiledokan.co/wp-content/uploads/2019/02/Oppo-F11-Pro.jpg",
            // ],

            [
                'name' => "Panasonic Smart LED",
                'price' => "60000",
                'category' => "tv",
                'description' => "A smart Tv with advanced features",
                'gallery' => "https://www.bdshop.com/pub/media/catalog/product/cache/0a9842a5e3033a11158d10717601d786/P/a/panasonic-smart-led-tv-th-42as610s.jpg",
            ],
            
            [
                'name' => "Sony Bravio 65",
                'price' => "70000",
                'category' => "tv",
                'description' => "A smart tv with extra advanced features",
                'gallery' => "https://i1.wp.com/shanbd.com/wp-content/uploads/2020/12/SONY-Bravia-65-inch-X7500H-4K-ANDROID-VOICE-CONTROL-TV-Dhaka.jpg",
            ],
            
            [
                'name' => "LG 668 litre",
                'price' => "65000",
                'category' => "fridge",
                'description' => "A fridge with advanced features",
                'gallery' => "https://www.butterflygroupbd.com/media/catalog/product/cache/a256606fc0a9a79df2101e339f07be86/g/s/gs-x6010mc-side-by-side-refrigerators-z2_1.jpg",
            ]
    ]);


        // for($i=0; $i<100; $i++) {

        //     DB::table('products')->insert([
        //         'name' => Str::random(5),
        //         'price' => Str::random(5),
        //         'category' => Str::random(5),
        //         'description' => Str::random(5),
        //         'gallery' => Str::random(5),
        //     ]);
        // }
    }
}
