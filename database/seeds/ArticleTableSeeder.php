<?php

use Illuminate\Database\Seeder;
use App\Models\Article;

//php artisan make:seeder ArticleTableSeeder
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // khi chung ta chay run thi se tao ra du lieu
        for ($i = 0; $i <200;$i++){
            $article = new Article();
            $article->title = "bai viet" . $i;
            $article->content = 'Noi dung' . $i;
            $article->save();
        }

    }
}
