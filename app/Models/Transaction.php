<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    // fillable properties
    protected $fillable = [
        'bill_id',
        'type',
        'order_reference',
        'trans_reference'
    ];

    protected $guarded = [
        'id',
        'updated_at',
        'created_at'
    ];

    public function bills() {
        return $this->hasMany(Bill::class);
    }
}
