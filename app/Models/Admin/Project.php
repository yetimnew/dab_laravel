<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory,SoftDeletes;
protected $fillable = [
            'title',
           'slug',
           'body',
           'when',
           'status',
           'link',
           'client_id',
           'user_id',
];
public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

}
