<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

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


           
            [
            'name'=>'iphone',
            'price'=>'90000',
            'category'=>'iphone',
            'description'=>'5G speed. A14 Bionic, the fastest chip in a smartphone. An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all.',
            'gallery'=>'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-13-finish-select-202207-6-1inch-pink_AV1_GEO_EMEA?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1656712881161'
            ],
      
            [             
                   'name'=>'sumsung refrigerator',
                    'price'=>'830000',
                    'category'=>'refrigerator',
                    'description'=>'579 L : Good for large families
                    Digital Inverter Compressor
                    Frost Free : Auto fridge defrost to stop ice-build up
                    Convertible: Offers you more space for all the food you need to store.',
                    'gallery'=>'https://rukminim1.flixcart.com/image/416/416/kt7jv680/refrigerator-new/a/f/i/rf57a5232b1-tl-177-6-na-na-98-5-samsung-81-7-76-5-original-imag6hw98fwnwkcu.jpeg?q=70'
                
            ],

           
             [
                

                'name'=>'sumsung',
                'price'=>'50000',
                'category'=>'phone',
                'description'=>'Samsung to provide notification of such change. All functionality, features, specifications, GUI and other product information provided in this document including, but not limited to, the benefits, design, pricing, components',
                'gallery'=>'https://images.samsung.com/is/image/samsung/assets/in/2208/pfs/01-hd02-B4-kv-pc-1440x640.jpg?imwidth=1366'
            
             ],

            [             
                'name'=>'Samsung S95B OLED',
                 'price'=>'50000',
                 'category'=>'tv',
                 'description'=>' It allows it to display a much wider range of colors and brighter colors than traditional OLED panels',
                 'gallery'=>'https://cdn.mos.cms.futurecdn.net/v2uvJRPogcVUrvpD8JMKy4-1024-80.jpg.webp'
             
            ],


             [             
                'name'=>'Apple iped',
                 'price'=>'44000',
                 'category'=>'iped',
                 'description'=>'An iPad with 64GB storage or less is suitable if you want to browse the internet, check your email, Facetime, or watch series.  ',
                 'gallery'=>'https://www.apple.com/in/ipad-pro/images/overview/hero/hero_combo__fcqcc3hbzjyy_large.jpg'
             
             ]



             ]);

    }
}
