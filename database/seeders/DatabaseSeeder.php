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
            'title' =>'Category Tow',
            'slug' => Str::slug('Category Tow')
        ]);
        DB::table('categories')->insert([
            'title' =>'Category Three',
            'slug' => Str::slug('Category Three')
        ]);

        DB::table('customers')->insert([
            'name' =>'Customer One',
            'slug' => Str::slug('Customer One')
        ]);
        DB::table('tags')->insert([
            'name' =>'Tag One',
            'slug' => Str::slug('Tag One')
        ]);
        DB::table('tags')->insert([
            'name' =>'Tag Two',
            'slug' => Str::slug('Tag Two')
        ]);
        DB::table('tags')->insert([
            'name' =>'Tag Three',
            'slug' => Str::slug('Tag Three')
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
        DB::table('projects')->insert([
            'title' =>'CONTACT US',
            'slug' => Str::slug('CONTACT US'),
            'body' =>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis amet corporis omnis ex fuga pariatur similique. Corporis quaerat repudiandae, nobis blanditiis veritatis, voluptatibus eveniet excepturi minima at eos non quae.',
            'when' => '2021/02/02',
            'link' => '#',
            'client_id' => 1,
            'user_id' => 1
        ]);
    }
}
