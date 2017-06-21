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
    
        return view('pages.show',[
            'page'  => $page,
        ]);
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
