<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $table = 'articles';
    protected $fillable = [
        'slug',
        'title',
        'content',
        'created_by',
        'updated_by'
    ];

    public function created_by_user()
    {
        return $this->belongsTo('App\Http\Models\User', 'created_by');
    }
    public function updated_by_user()
    {
        return $this->belongsTo('App\Http\Models\User', 'updated_by');
    }
}
