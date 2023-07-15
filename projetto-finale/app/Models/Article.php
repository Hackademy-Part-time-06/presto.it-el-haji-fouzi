<?php

namespace App\Models;

use App\Models\Tag;

use Laravel\Scout\Searchable;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Article extends Model
{
    use HasFactory;
    use Searchable;


    protected $fillable = [
        'title', 'description', 'body', 'img', 'user_id', 'category_id'
    ];





    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function toSearchableArray(): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'category' => $this->category
        ];
    }

    public function tags()
    {
        $this->benlongsToMany(Tag::class);
    }

}
