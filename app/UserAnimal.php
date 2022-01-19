<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Useranimal extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'animal_id', 'name', 'gender', 'birthday', 'weight', 'size', 'breed_id', 'user_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}