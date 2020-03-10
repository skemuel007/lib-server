<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //

    public function transaction() {
        return $this->belongsTo(Transaction::class);
    }

    public function member() {
        return $this->belongsTo(Member::class);
    }
}
