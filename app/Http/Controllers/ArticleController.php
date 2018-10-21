<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function adminAll() {
        $articles = Article::with('user','category')->latest()->get();

        return view('admin.articles.all',compact('articles'));
    }
    public function index()
    {
        $articles = Article::with('user,category')->orderBy('created_at','asc');
        return view('articles.index',compact('articles'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.articles.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->title = $request['title'];
        $article->body = $request['body'];
        $article->category_id = Input::get('category');

        $article->user_id =  Auth::id();
        $article->save();
        return redirect()->to('/admin/articles')->with('message', 'New Article Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $article = Article::find($id)->with('category','user')->first();

        return view('articles.single',compact('article'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $category = Category::all();

        return view('admin.articles.edit',compact('article','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $article = Article::find($id);
        $article->title = $request['title'];
        $article->body = $request['body'];
        $article->category_id = Input::get('category');
        $article->save();
        return redirect()->to('/admin/articles')->with('message', 'Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Article::destroy($id);
        return redirect()->to('/admin/articles')->with('message', 'Deleted!');

    }

}
