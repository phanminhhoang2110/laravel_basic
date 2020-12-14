<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
   public function view(){

       //Luu db bang cac su dung Elequen model
       $article = new Article();
       $article->title = 'bai viet 4';
       $article->content = 'noi dung 2';
       $article->save();


       //Doc db
//       $article = Article::find(1);
//       return $article->title;
   }
}
