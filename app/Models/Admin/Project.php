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
           'category_id',
           'client_id',
           'user_id',
           'tag_id',
];
public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
