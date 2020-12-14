<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\StoreArticleRequest;


// Resource Controller da co san tat car cac ham
// php artisan make:controller ArticleController1 --resource
class ArticleController1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        //$articles = Article::all();
        $articles = Article::paginate(10);

        // Tham so thu 2 la cac du lieu muon day ra list.blade.php
        //return view('article.list',['articles'=>$articles]);
        return view('article.list')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    //public function store(Request $request)
    public function store(StoreArticleRequest $request)
    {
        //baiviet/create


        $article = new Article();
        $article->title = $request->title;
        $article->content = $request->noidung;
        $article->save();

        return redirect()->route('baiviet.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
