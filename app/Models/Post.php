<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['category', 'authr'];

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query
            ->where('title', 'like', '%'.$search.'%')
            ->orWhere('excerpt', 'like', '%'.$search.'%');
        });
        // search by category malah search all tapi judul bener
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });            
        });
        // search by author malah search all
        $query->when($filters['author'] ?? false, function($query, $author){
            return $query->whereHas('authr', function($query) use ($author){
                $query->where('username', $author);
            });            
        });
        // $query->when($filters['author'] ?? false, fn($query, $author) => $query->whereHas(
        //     'auth', fn($query)=> $query->where('username', 'author')
        //     )
        // );
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function authr(){
    return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
