<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;


class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [
                'brandname' => 'ASUS'
            ],
            [
                'brandname' => 'XPG'
            ],
            [
                'brandname' => 'KINGSTON'
            ]
    ];

        //Brand::truncate();

        foreach ($brands as $brand)
        {
            Brand::create($brand);
        }
    }


}
