<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

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
        DB::table("products")->insert([
            ["name"=> "LG Mobile",
            "price"=> 1250,
            "category"=>"Electronics",
            "description"=> "lg mobile under 10000",
            "gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.smartprix.com%2Fmobiles%2Flg-velvet-5g-ppd1cwuiq64g&psig=AOvVaw0IhYG6ZZAOQS4ukyCrKMkP&ust=1708757823003000&source=images&cd=vfe&opi=89978449&ved=0CBMQjRxqFwoTCLiA_o7xwIQDFQAAAAAdAAAAABAE",
        ],
        ["name"=> "Sony Mobile",
            "price"=> 1550,
            "category"=>"Electronics",
            "description"=> "Sony mobile under 10000",
            "gallery"=>"["name"=> "LG Mobile",
            "price"=> 1250,
            "category"=>"Electronics",
            "description"=> "lg mobile under 10000",
            "gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.smartprix.com%2Fmobiles%2Flg-velvet-5g-ppd1cwuiq64g&psig=AOvVaw0IhYG6ZZAOQS4ukyCrKMkP&ust=1708757823003000&source=images&cd=vfe&opi=89978449&ved=0CBMQjRxqFwoTCLiA_o7xwIQDFQAAAAAdAAAAABAE",
        ],",
        ],
        ["name"=> "LG Mobile",
            "price"=> 1250,
            "category"=>"Electronics",
            "description"=> "lg mobile under 10000",
            "gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.smartprix.com%2Fmobiles%2Flg-velvet-5g-ppd1cwuiq64g&psig=AOvVaw0IhYG6ZZAOQS4ukyCrKMkP&ust=1708757823003000&source=images&cd=vfe&opi=89978449&ved=0CBMQjRxqFwoTCLiA_o7xwIQDFQAAAAAdAAAAABAE",
        ],
        ["name"=> "Grand Vistara",
            "price"=> 125000,
            "category"=>"CAR",
            "description"=> "best hybrid EV car",
            "gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.carwale.com%2Fmaruti-suzuki-cars%2Fgrand-vitara%2Fprice-in-morbi%2F&psig=AOvVaw3028VCDe3t40P1_C8uPakH&ust=1708765206038000&source=images&cd=vfe&opi=89978449&ved=0CBMQjRxqFwoTCIjcgs2MwYQDFQAAAAAdAAAAABAE",
        ],
        ["name"=> "Condom",
            "price"=> 130,
            "category"=>"SEX",
            "description"=> "Manforce",
            "gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fpricehistoryapp.com%2Fproduct%2Fmankind-manforce-condom-vanilla-flavor-single-condom-condom&psig=AOvVaw1c-nyBVPXHat0YsdL0GHXJ&ust=1708765408431000&source=images&cd=vfe&opi=89978449&ved=0CBMQjRxqFwoTCJDgta-NwYQDFQAAAAAdAAAAABAE",
        ],
        ["name"=> "Bolt",
            "price"=> 1500,
            "category"=>"WATCH",
            "description"=> "one of the best smart watch",
            "gallery"=>"",
        ],

            ]);
        }
}
