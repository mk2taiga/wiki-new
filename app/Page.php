<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use cebe\markdown\Markdown as Markdown; 

class Page extends Model
{
    protected $fillable = ['title', 'body'];
    
    //inplicit Binding
    // public function getRouteKeyName()
    // {
    //   return 'title';
    // }

    
    //ルート名からurlを作成する
    public function url() {
        return route('pages.show', $this->id);
    }
    
    public function getUrlAttribute() {
        return $this->url();
    }
    
    //マークダウンのパース
    public function parse()
    {
        $parser = new Markdown();
    
        return $parser->parse($this->body);
    }
    
    public function getMarkBodyAttribute()
    {
        return $this->parse();
    }
    //ここまで
}
