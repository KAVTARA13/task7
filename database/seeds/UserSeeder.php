<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table("users")->insert([
       		"name"=>"luka",
       		"email"=>"lukakavtaradze@gmail.com",
       		"password"=>"arvici123"
       ]);
       DB::table("users")->insert([
       		"name"=>"nika",
       		"email"=>"nikaakavtaradze@gmail.com",
       		"password"=>"arvici123"
       ]);
       DB::table("users")->insert([
       		"name"=>"aleko",
       		"email"=>"alekokavtaradze@gmail.com",
       		"password"=>"arvici123"
       ]);
       DB::table("tel_numbers")->insert([
       		"user_id"=>1,
       		"phone_number"=>"595533532"
       ]);
       DB::table("tel_numbers")->insert([
       		"user_id"=>2,
       		"phone_number"=>"595544432"
       ]);
       DB::table("posts")->insert([
       		"title"=>"post1"
       ]);
       DB::table("comments")->insert([
       		"post_id"=>1,
       		"comment"=>"comment1"
       ]);
       DB::table("comments")->insert([
       		"post_id"=>1,
       		"comment"=>"comment2"
       ]);
       DB::table("roles")->insert([
       		"title"=>"Admin"
       ]);
       DB::table("roles")->insert([
       		"title"=>"User"
       ]);
       DB::table("role_users")->insert([
       		"user_id"=>1,
       		"role_id"=>1
       ]);
       DB::table("role_users")->insert([
       		"user_id"=>1,
       		"role_id"=>2
       ]);
       DB::table("role_users")->insert([
       		"user_id"=>2,
       		"role_id"=>1
       ]);
       DB::table("role_users")->insert([
       		"user_id"=>2,
       		"role_id"=>2
       ]);
    }
}
