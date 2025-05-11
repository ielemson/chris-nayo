<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeyInitiative extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'impact', 'year','slug','banner','status','project_link'];
}