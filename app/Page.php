<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use cebe\markdown\Markdown as Markdown; 

class Page extends Model
{
    protected $fillable = ['title', 'body'];
    
    public function parse()
    {
        $parser = new Markdown();
    
        return $parser->parse($this->body);
    }
    
    public function getMarkBodyAttribute()
    {
        return $this->parse();
    }
}
