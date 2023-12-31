<?php

namespace App\Models;

use App\Models\Tournament;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Idea extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tournaments()
    {
        return $this->belongsToMany(Tournament::class, 'idea_tournament');
    }
}
