<?php

namespace App\Http\Controllers;
use App\Article;
use App\Topic;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
  
    public function index()
    {
        $articles = Article::orderBy( 'id', 'desc')->paginate(3);
        $topics=  Topic::all();
        $users=  User::all();
        return view('articles.index', compact('articles','topics','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topic=  Topic::all();
        $user=  User::all();
        return view('articles.create', compact("topic", "user"));
    }


    public function store(Request $request)
    {
        $request->validate([
            'topic' => 'required',
            'description' => 'required',
            'topic_id'=>'required',
            'user_id'=>'required',
        ]);        

        $article= new Article();
        $article->topic=$request->topic;
        $article->description=$request->description;
        $article->user_id=$request->user_id;
        $article->topic_id=$request->topic_id;
        $article->save();
        return redirect()->route('articles.index')
        ->with('success','Articulo creado.');
    }

    public function show(Article $article)
    {
        return view('articles.show',compact('article'));
    }


    public function edit(Article $article)
    {
        $topic=  Topic::all();
        $user=  User::all();
        return view('articles.edit',compact('article',"topic", "user"));
    }


    public function update(Request $request, Article $article)
    {
        $request->validate([
            'topic' => 'required',
            'description' => 'required',
            'user_id' => 'required',
            'topic_id' => 'required',
        ]);

        $article->update($request->all());
  
        return redirect()->route('articles.index')
                        ->with('success','Articulo actualizado');
    }

    public function destroy(Article $article)
    {
        $article->delete();
  
        return redirect()->route('articles.index')
                        ->with('success','Articulo eliminado');
    }
}
