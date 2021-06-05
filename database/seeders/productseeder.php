<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
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
             'name'=>'lenovo mobile',
            'price'=>'500',
            'category'=>'mobile',
            'description'=>'a smartphone with 4gb ram and much more',
            'gallery'=>'https://images.app.goo.gl/WfwHmE22cquYUZub8',
            ],
            [
            'name'=>'samsung mobile',
            'price'=>'400',
            'category'=>'mobile',
            'description'=>'a smartphone with 4gb ram and much more',
            'gallery'=>'https://images.app.goo.gl/7HBtQ2CvFiXgUZzy9',
            ],
            [
             'name'=>'nokia',
               'price'=>'500',
               'category'=>'mobile',
               'description'=>'a smartphone with 4gb ram and much more',
               'gallery'=>'https://images.app.goo.gl/9hr6aV6NAvExtEh99',
             ],
               [
                'name'=>'mi',
               'price'=>'700',
               'category'=>'mobile',
               'description'=>'a smartphone with 4gb ram and much more',
               'gallery'=>'https://images.app.goo.gl/zxi9N8Ui78nXbg8d6',
               ],
               [
                'name'=>'micromax',
               'price'=>'900',
               'category'=>'mobile',
               'description'=>'a smartphone with 4gb ram and much more',
               'gallery'=>'https://images.app.goo.gl/W5nmgswPrDogggvF8',
               ],
        ]);
    }
}
