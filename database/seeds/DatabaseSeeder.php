<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
//use App\Models\Cart;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
            [
                'name' => 'Herschel supply co 25l"',
                'price' => '75.00',
                'image' => 'item-01.jpg',
                'top9' => 1,
            ]
        ); 
        Product::create(
            [
                'name' => 'Denim jacket blue"',
                'price' => '92.50',
                'image' => 'item-02.jpg',
                'top9' => 1,
            ]
        );  
        Product::create(
            [
                'name' => 'Coach slim easton black"',
                'price' => '165.90',
                'image' => 'item-03.jpg',
                'top9' => 1,
            ]
        );
        Product::create(
            [
                'name' => 'Frayed denim shorts"',
                'price' => '15.90',
                'image' => 'item-04.jpg',
                'top9' => 1,
            ]
        );
        Product::create(
            [
                'name' => 'Herschel supply co 25l"',
                'price' => '75.00',
                'image' => 'item-05.jpg',
                'top9' => 1,
            ]
        );
        Product::create(
            [
                'name' => 'Denim jacket blue"',
                'price' => '92.50',
                'image' => 'item-06.jpg',
                'top9' => 1,
            ]
        );
        Product::create(
            [
                'name' => 'Coach slim easton"',
                'price' => '200.90',
                'image' => 'item-07.jpg',
                'top9' => 1,
            ]
        );
        Product::create(
            [
                'name' => 'Frayed denim shorts"',
                'price' => '15.90',
                'image' => 'item-08.jpg',
                'top9' => 1,
            ]
        );
        Product::create(
            [
                'name' => 'Coach easton black"',
                'price' => '16.90',
                'image' => 'item-09.jpg',
                'top9' => 1,
            ]
        );
        Product::create(
            [
                'name' => 'Coach slim easton ',
                'price' => '165.90',
                'image' => 'item-10.jpg',
                'top9' => 0,
            ]
        );
        Product::create(
            [
                'name' => 'Coach black',
                'price' => '165.90',
                'image' => 'item-11.jpg',
                'top9' => 0,
            ]
        );
        Product::create(
            [
                'name' => 'Short large',
                'price' => '15.90',
                'image' => 'item-12.jpg',
                'top9' => 0,
            ]
        );
        Product::create(
            [
                'name' => 'Jacket 55',
                'price' => '18.90',
                'image' => 'item-13.jpg',
                'top9' => 0,
            ]
        );
        Product::create(
            [
                'name' => 'Sweeter 66"',
                'price' => '21.90',
                'image' => 'item-14.jpg',
                'top9' => 0,
            ]
        );
        Product::create(
            [
                'name' => 'Jacket A-50"',
                'price' => '30.90',
                'image' => 'item-15.jpg',
                'top9' => 0,
            ]
        );
        Product::create(
            [
                'name' => 'Denim',
                'price' => '3.90',
                'image' => 'item-16.jpg',
                'top9' => 0,
            ]
        );                         
        Product::create(
            [
                'name' => 'Shorts',
                'price' => '45.90',
                'image' => 'item-17.jpg',
                'top9' => 0,
            ]
        );                       
    }
}
