<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Team;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function team() {
        return $this->hasOne(Team::class);
    }
}
