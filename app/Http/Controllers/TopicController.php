<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopicController extends Controller
{
    public function index()
    {
        $topics =  Topic::orderBy( 'id', 'desc')->paginate(3);

        return view('topics.index',compact('topics'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('topics.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
        ]);        

        $topic= new Topic();
        $topic->name=$request->name;
        $topic->author=$request->author;
        $topic->save();
        return redirect()->route('topics.index')
        ->with('success','Tema creado.');
    }

    public function show(Topic $topic)
    {
        return view('topics.show',compact('topic'));
    }


    public function edit(Topic $topic)
    {
        return view('topics.edit',compact('topic'));
    }


    public function update(Request $request, Topic $topic)
    {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
        ]);

        $topic->update($request->all());
  
        return redirect()->route('topics.index')
                        ->with('success','Tema actualizado');
    }


    public function destroy( Topic $topic)
    {
        $topic->delete();
  
        return redirect()->route('topics.index')
                        ->with('success','Tema eliminado');
    }
}
