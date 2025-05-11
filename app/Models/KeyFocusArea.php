<?php
// app/Models/KeyFocusArea.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class KeyFocusArea extends Model
{
    protected $fillable = ['title', 'slug', 'description','status'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($focusArea) {
            $focusArea->slug = Str::slug($focusArea->title);
        });

        static::updating(function ($focusArea) {
            $focusArea->slug = Str::slug($focusArea->title);
        });
    }
}
