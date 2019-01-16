<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Team extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'teamName', 'description','image','contactPerson', 'status'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
