<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;


use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    use HasFactory;


    protected $fillable = [
        'title', 'description','body','img','user_id','category_id'
    ];




    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'category'=>$this->category
        ];
    }
}
