<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Page;

class PagesController extends Controller
{
    
    public function index()
    {
        $pages = Page::orderBy('created_at', 'desc')->get();
        
        return view('pages.index', [
            'pages' => $pages,
        ]);
    }

    
    public function create()
    {
        $page = new Page;
        
        return view('pages.create', [
            'page' => $page,
        ]);
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:pages,title',
            'body' => 'required',
        ]);
        
        $post = Page::create($request->all());
        
        return redirect('/');
    }

    
    public function show($id)
    {
        $page = Page::find($id);
    
        return view('pages.show', [
            'page' => $page,
        ]);
    }

    
    public function edit($id)
    {
        $page = Page::find($id);
        
        return view('pages.edit', [
            'page' => $page,
        ]);
    }

    
    public function update(Request $request, $id)
    {
        $page = Page::find($id);
        
        $this->validate($request, [
            //idを渡すことで自分自身を例外にしている
            'title' => 'required|unique:pages,title'.$id,
            'body' => 'required',
        ]);
        
        $page->update($request->all());
        return redirect($page->url);
    }

    
    public function destroy($id)
    {
        //
    }
}
