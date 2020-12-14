<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Để chạy run thì dùng php artisan db:seed
        //Để chỉ định chạy 1 Seeder nào đó
        //php artisan db:seed --class=RoleTableSeeder
        //Dung de tao du lieu mau
        //$this->call(UsersTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
        $this->call(RoleTableSeeder::class);
    }
}
