<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' =>'Category One',
            'email' =>'yetimnew@gmail.com',
            'password' =>bcrypt('password'),
        ]);
        DB::table('categories')->insert([
            'title' =>'Category One',
            'slug' => Str::slug('Category One')
        ]);
        DB::table('customers')->insert([
            'name' =>'Customer One',
            'slug' => Str::slug('Customer One')
        ]);
        DB::table('tags')->insert([
            'name' =>'Tag One',
            'slug' => Str::slug('Tag One')
        ]);
        DB::table('menues')->insert([
            'title' =>'HOME',
            'slug' => Str::slug('HOME'),
            'link' =>'#',
            'status' => 1
        ]);
        DB::table('menues')->insert([
            'title' =>'ABOUT US',
            'slug' => Str::slug('ABOUT US'),
            'link' =>'#',
            'status' => 1
        ]);
        DB::table('menues')->insert([
            'title' =>'SERVICES',
            'slug' => Str::slug('SERVICES'),
            'link' =>'#',
            'status' => 1
        ]);
        DB::table('menues')->insert([
            'title' =>'PORTFOLIO',
            'slug' => Str::slug('PORTFOLIO'),
            'link' =>'#',
            'status' => 1
        ]);
        DB::table('menues')->insert([
            'title' =>'CAREER',
            'slug' => Str::slug('CAREER'),
            'link' =>'#',
            'status' => 1
        ]);
        DB::table('menues')->insert([
            'title' =>'NEWS AND EVENTS',
            'slug' => Str::slug('NEWS AND EVENTS'),
            'link' =>'#',
            'status' => 1
        ]);
        DB::table('menues')->insert([
            'title' =>'CONTACT US',
            'slug' => Str::slug('CONTACT US'),
            'link' =>'#',
            'status' => 1
        ]);
    }
}
