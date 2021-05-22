<?php

use App\User;
use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::factory(5)->hasProducts(10)->create();
        User::create([
                      "name"=>"TAMBOURA Abdoulaye",
                      "email"=>"laya@yahoo.com",
                      "password"=>Hash::make("12345678"),

        ]);

    }
}
