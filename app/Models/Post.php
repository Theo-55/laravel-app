<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;



    protected $gaurdable =[]; //does the opposite and strictly doesnt allow this to be changed

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
