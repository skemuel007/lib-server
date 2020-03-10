<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // set fillable
    protected $fillable = [
        'name'
    ];

    // set guarded
    protected $guarded = [
        'created_at',
        'id',
        'updated_at'
    ];

    public function setNameAttribute($value) {
        $this->attributes['name'] = trim(ucwords($value));
    }
}
