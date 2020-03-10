<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /**
     * Column values to be filled
     * @var array
     */
    protected $fillable = [
        'first_name', 'surname', 'email',
        'phone', 'password'
    ];

    /**
     * Protected from mass fillable
     * @var array
     */
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    /**
     * Hide this fields from being displayed
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'password'
    ];

    /**
     * @param $value
     */
    public function setFirstNameAttribute($value) {
        $this->attributes['first_name'] = trim(ucwords($value));
    }

    /**
     * @param $value
     */
    public function setSurnameAttribute($value) {
        $this->attributes['surname'] = trim(ucwords($value));
    }

    /**
     * @return string
     */
    public function getFullNameAttribute() {
        return "{$this->first_name} {$this->surname}";
    }

    /**
     * @param $value
     * @return string
     */
    public function getEmailAttribute($value) {
        return strtolower($value);
    }

    public function books() {
        return $this->belongsToMany(Book::class);
    }
}
