<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // set fillable properties
    protected $fillable = [
        'name',
        'status'
    ];

    // set guarded properties
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    /**
     * Category has many books
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books() {
        return $this->hasMany(Book::class);
    }
}
